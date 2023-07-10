<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="<?= $base_url ?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?= $site_name ?>">
        <meta name="author" content="">
        <title><?= ucwords($page_title) ?></title>
       <link rel="icon" type="image/x-icon" href="admin/assets/img/<?= $favicon ?>"/>
        <? if($page == 'home'): ?>
            <!-- Bootstrap core CSS -->
            <link href="common/front-end/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="common/front-end/assets/css/blocks.css">
            <!-- Custom styles for this template -->
            <link href="common/front-end/assets/css/style.css" rel="stylesheet">
            <link href="common/front-end/assets/css/pricing-slider.css" rel="stylesheet" type="text/css">
            <link href="common/front-end/assets/css/pricing-slider-custom.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css"/>
            <style>
                .faq-btn-group button{
                    background: rgba(179, 179, 179, 1);
                    background-color: rgba(179, 179, 179, 1);
                    font-weight: 500;
                    width:fit-content;
                }
                .faq-btn-group button.active{
                    background: rgba(0, 36, 54, 1); 
                    background-color: rgba(0, 36, 54, 1);
                    font-weight: 600;
                }
                .join-bottom-img{
                    top:-74px !important;
                }
            </style>
        <? else: ?>
            <!-- bootstrap 5  -->
            <link rel="stylesheet" href="common/assets/templates/basic/css/lib/bootstrap.min.css">
            <!-- fontawesome 5  -->
            <link rel="stylesheet" href="common/assets/templates/basic/css/all.min.css">
            <!-- lineawesome font -->
            <link rel="stylesheet" href="common/assets/templates/basic/css/line-awesome.min.css">
            <!-- lightcase css -->
            <link rel="stylesheet" href="common/assets/templates/basic/css/lightcase.css">
            <!-- slick slider css -->
            <link rel="stylesheet" href="common/assets/templates/basic/css/lib/slick.css">
            <link rel="stylesheet" href="common/assets/templates/basic/css/main.css">
            <link rel="stylesheet" href="common/assets/templates/basic/css/colorf478.css?color=f9b5b8&amp;secondColor=0d222b">
            <link rel="stylesheet" href="common/assets/templates/basic/css/custom.css">
            <style>
                .ms-n4{
                    margin-left:-1.5rem;
                }
                .display-5{
                    font-size:unset !important;
                }
                @media (min-width: 1200px){
                    .display-5 {
                        font-size:unset !important;
                    }
                }
                .join-bottom-img{
                    top:-54px !important;
                }
            </style>
        <? endif ?>
        
        <link href="common/front-end/assets/css/custom-style.css" rel="stylesheet" type="text/css">
        <style>
                #backtothetop-fixed{
                    background:rgba(0, 53, 80, 1);
                    color: #FFF !important;
                    padding:5px;
                }
                #backtothetop-fixed:hover{
                    background:rgba(0, 36, 54, 1);
                    text-decoration:none;
                }
                @media all and (min-width: 992px) {
                    .zzdropdown-menu{ 
                        display: none; 
                        text-transform:initial;
                        background:rgba(2, 91, 135, 1);
                        color:rgba(255,255,255,.55) !important;
                    }
                    .zzdropdown-menu .dropdown-item{
                        color:rgba(255,255,255,.55) !important;
                    }
                    .zzdropdown .nav-link{   }
                    .zzdropdown:hover .dropdown-menu{ display: block; }
                    .zzdropdown.dropdown-menu{ margin-top:0; }
                    .zzdropdown-menu .dropdown-item:hover{   
                        background:rgba(2, 91, 135, 1); 
                        font-size: 18px;
                        transition: all 0.5s ease;
                        color: #fff !important;
                    }
                }
        </style>
        <? 
            if($loggedA && isset($editor)){
                echo '<link href="admin/plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css">';
             }
        ?>
      <?= $head_tag_description  ?>
    </head>
    <body class="text-secondary myeditablearea">
      <?= $body_tag_description  ?>
        <nav class="border-light navbar navbar-dark navbar-expand-lg text-uppercase mceNonEditable" style="height: 90px; background-color: rgba(2, 91, 135, 1); background: rgba(2, 91, 135, 1);"> 
            <div class="container-fluid"> 
                <a class="navbar-brand  px-4 size_lg" href="#"><img src="admin/assets/img/<?= $logo ?>" height="50px" width="50px"></a>
                <a class="ml-n4 ms-n4 navbar-brand size_lg" href="#" style="text-transform: capitalize; font-weight: 700; font-family: Helvetica; font-size: 27px; line-height: 34.5px; color: #fff;"><?= $site_name ?></a> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-21" aria-controls="navbarNavDropdown-21" aria-expanded="false" aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon"></span> 
                </button>                 
                <div class="collapse menu-items-parent nav-item navbar-collapse pl-5 pl-md-0 pr-md-0" id="navbarNavDropdown-21">
                    <ul class="col-10 justify-content-center navbar-nav">
                        <li class="nav-item active" style="background: transparent; background-color: transparent;"> 
                            <a class="nav-items nav-link px-lg-3 py-lg-4" href="#" data-backtothetop-duration="600" data-backtothetop-easing="easeOutQuart">Home <span class="sr-only">(current)</span></a> 
                        </li>                         
                        <li class="nav-item"> 
                            <a class="nav-items nav-link px-lg-3 py-lg-4" href="#procedure_" data-backtothetop-duration="600" data-backtothetop-easing="easeOutQuart">Procedure</a> 
                        </li>                         
                        <li class="nav-item"> 
                            <a class="nav-items nav-link px-lg-3 py-lg-4" href="#models_" data-backtothetop-duration="600" data-backtothetop-easing="easeOutQuart">Models</a> 
                        </li>                      
                        <li class="nav-item dropdown zzdropdown"> 
                            <a class="nav-items nav-link px-lg-3 py-lg-4 dropdown-toggle" href="#coll" role="button" data-toggle="dropdown" aria-expanded="false">About Us</a> 
                            
                            <div class="dropdown-menu zzdropdown-menu">
                                <a class="dropdown-item d-none" href="about">About Us</a>
                                <a class="dropdown-item" href="model">Model</a>
                                <a class="dropdown-item d-none" href="terms">Terms & Conditions</a>
                                <a class="dropdown-item d-none" href="privacy">Privacy Policy</a>
                            </div>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-items nav-link px-lg-3 py-lg-4" href="#faq_" data-backtothetop-duration="600" data-backtothetop-easing="easeOutQuart">FAQ</a>
                        </li>
                        <li class="nav-item d-none"> 
                            <a class="nav-items nav-link px-lg-3 py-lg-4" href="support.essyfunded.com">Blog</a>
                        </li>                         
                        <li class="nav-item d-none"> 
                            <a class="nav-items nav-link px-lg-3 py-lg-4" href="contact">Contact Us</a> 
                        </li>     
                          <? if (!$loggedU): ?>                   
                            <li class="nav-item"> 
                                <a class="auth nav-items nav-link px-lg-3 py-lg-4" href="login">Login</a> 
                            </li>                         
                            <li class="nav-item"> 
                                <a class="auth nav-items nav-link px-lg-3 py-lg-4" href="register">Register</a> 
                            </li> 
                         <? else: ?>  
                            <? if ($loggedA): ?>               
                                <li class="nav-item"> 
                                    <a class="auth nav-items nav-link px-lg-3 py-lg-4 text-white" href="admin/dashboard">Dashboard</a> 
                                </li>  
                            <? else: ?>                  
                                <li class="nav-item"> 
                                    <a class="auth nav-items nav-link px-lg-3 py-lg-4 text-white" href="login">Dashboard</a> 
                                </li>    
                            <? endif ?>             
                            <li class="nav-item"> 
                                <a class="auth nav-items nav-link px-lg-3 py-lg-4 text-white" href="logout" style="color:#FFFFE0; font-weight:normal;">Logout</a> 
                            </li>  
                          <? endif ?>   
                    </ul>                     
                    <button class="border-0 btn btn-outline-light col-2 ml-md-n5 ml-n3 py-2 text-right" type="button" aria-label="search"> 
                        <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24"> 
                            <path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z"></path>                             
                        </svg>                         
                    </button>
                </div>
            </div>
        </nav>