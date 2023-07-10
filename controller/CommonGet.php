<?php

namespace App\Controllers\Common;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\Common\CommonGetModel;

class CommonGet extends BaseController{
    
    protected $data;
	protected $model;
    
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger){
        
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
        helper('findname');
		$this->model = new CommonGetModel();

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		
        $this->data = [];
        $this->data = array_merge($this->data,$this->contact);
		$this->data = array_merge($this->data,$this->site);
		$this->data = array_merge($this->data,$this->api);
        $this->data['loggedU'] = $this->ionAuth->loggedIn();
        $this->data['loggedA'] = $this->ionAuth->isAdmin();
        $this->data['datez'] = $this->timeUnix;
        $this->data['base_url'] = base_url();
        $this->data['csrf_token'] = csrf_token();
        $this->data['csrf_hash'] = csrf_hash();
        $this->data['info'] = session()->getFlashdata("alert");
        $this->data['captcha_enabled'] = session()->getFlashdata("captcha");
		$this->data['logo'] = 'logo.'.find_name(ROOTPATH.'public/admin/assets/img/logo',true);
		$this->data['favicon'] = 'favicon.'.find_name(ROOTPATH.'public/admin/assets/img/favicon',true);
		
    }

	public function index(){
		return view(APPPATH.'Common/design2/404');
    }
    
	public function Render($page,$data=[]){
		if(!is_file(APPPATH.'/Views/Common/'.$page.'.php')) throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
			
			$page =  strtolower($page);

            
            $this->response->setStatusCode(404);
            echo view('/Common/'.$page,$this->data);

	}

	public function Products($custom_cat = NULL){
			$products = [];

			$categories= $this->model->OffersMeta('prop_offers_categories');
			//unset($categories[2]); // general
			$categories = array_column($categories,'name','id');

			$sizes = $this->model->OffersMeta('prop_offers_sizes');
			$sizes = array_column($sizes,'name','id');

			$steps = $this->model->OffersMeta('prop_offer_steps');
			//$steps = array_combine(array_column($steps,'offer_id'),$steps);

			$offers = $this->model->getPlansActive();

			//$size_offers = array_column($offers,'size','id');
			//$cat_offers = array_column($offers,'category','id');

				//get offers categories
				if($custom_cat == NULL) $cat_array = array_column($offers,'category'); 
				else $cat_array = $cat_array[$custom_cat];
				$cat_array = array_unique($cat_array);
				$cat_array = array_flip($cat_array);
				array_walk($cat_array,function(&$val,$key) use($categories){
					$val = @$categories[$key];
				});
				$cat_array = array_flip($cat_array);

				//$offers = array_combine(array_column($offers,'category'),$offers);

					//set pricing
					foreach($cat_array as $key=>$val){
						$cat_array[$key] = array_filter($offers,function($offer) use($val){
							if($offer['category'] == $val)return true;
							return false;
						});

						$pricing[$key] = array_values($cat_array[$key]);

							//set sizes
							array_walk($pricing[$key],function(&$v,$k) use($sizes,$steps){
								$v['size'] = @number_format(floatval($sizes[$v['size']]),2);
								$v['price'] = number_to_currency(floatval($v['price']), $this->site['site_currency'],null,2);
									//set features
									$v['features'] = array_filter($steps,function($step) use($v){
										//if($step['offer_id'] == $v['id']) return true; //use this when steps will be listed on a table for comparison
										if($step['offer_id'] == $v['id'] && $step['order_flow'] == 1) return true;
										return false;
									});
									$v['features'] = array_map(function($feature){
										return json_decode($feature['feature']);
									},$v['features']);
									$temp=[];
									foreach($v['features'] as $feat){
										$temp = array_merge_recursive($temp,$feat);
									}
									$v['features'] = $temp;
									
							});
						
							//check if less than 5
							if(count($pricing[$key]) < 5){
								$diff = 5 - count($pricing[$key]);
								for($diff; $diff > 0; $diff++){
									$pricing[$key] = array_merge($pricing[$key],array_values($pricing[$key]));
									if(count($pricing[$key]) >= 5)break;
								}
							}
					}

				//exit('<pre>'.print_r($pricing,true).'</pre>');
				return view('pricing',['products'=>$pricing]);
				//exit('<pre>'.print_r($data['products'],true).'</pre>');
    }
}