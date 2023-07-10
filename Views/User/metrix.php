
						<!-- Row-1 End -->
                        
						<div class="row">
						    <div class="col-md-12">
                                <div class="met">
                                    <div class="row p-4">
                                        <div class="col-6">
                                            <h3 class="card-title met-heading">Trading Account Metrix</h3>
                                        </div>
                                        <div class="col-6 mb- text-right">
                                            <div class="nav flex-lg-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle met-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        View Stage
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <? foreach($metrix as $key=>$value): ?>
                                                            <a class="dropdown-item"  data-metrix="<?= $key ?>" href="#met-<?= $key+1 ?>" data-toggle="pill" role="tab" aria-controls="met-<?= $key+1 ?>" aria-selected="<?= $key==0 ? 'true' : 'false' ?>"><?= $value['stage'].'-'.$value['login_id'].'-'.$value['temp_status'] ?></a>
                                                        <? endforeach ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-md-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <? foreach($metrix as $key=>$value): ?>
                                                        <div class="tab_content tab-pane fade <?= $key==0 ? 'show active' : '' ?>" id="met-<?= $key+1 ?>" role="tabpanel" aria-labelledby="met-<?= $key+1 ?>-tab">
                                                            <div class="row">
                                                                <div class="col-md-4 col-lg-4">
                                                                    <div class="card met-border">
                                                                        <div class="card-header met-subheading">
                                                                            <h3 class="card-title mx-auto text-white">Account Information</h3>
                                                                        </div>
                                                                        <div class="table-responsive" style="font-size: 13px;">
                                                                            <table class="table card-table table-vcenter text-nowrap mb-0 met-ctable met-acct-table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td scope="row">Account ID</td>
                                                                                        <td><?= $value['login_id'] ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td scope="row">Start Date</td>
                                                                                        <td><?= $value['start_time'] ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td scope="row">End Date</td>
                                                                                        <td><?= $value['end_time'] ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td scope="row">Initial Account Size</td>
                                                                                        <td><?= $value['init_acct_bal'] ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td scope="row">Current Balance</td>
                                                                                        <td><?= $value['account_balance'] ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td scope="row">Platform</td>
                                                                                        <td><?= $value['platform'] ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td scope="row">Broker</td>
                                                                                        <td><?= $value['broker'] ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td scope="row">Last Update</td>
                                                                                        <td><?= $value['last_update'] ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td scope="row">New Day Count</td>
                                                                                        <td id="timerz-<?= $key ?>" data-timer="<?= @$value['time_to_new_day'] ?>"></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <!-- table-responsive -->
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-lg-8">
                                                                    <div class="card met-border">
                                                                        <div class="card-header met-subheading">
                                                                            <h3 class="card-title mx-auto text-white">Account Status Information</h3>
                                                                        </div>
                                                                        <div class="table-responsive" style="font-size: 13px;">
                                                                            <table class="table card-table table-vcenter text-nowrap mb-0 met-ctable">
                                                                                <thead class="thead-light">
                                                                                    <tr>
                                                                                        <th>Objective</th>
                                                                                        <th>Statistics</th>
                                                                                        <th>Status</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td scope="row">Min Trading Days: <span class="text-info"><?= $value['req_min_days'] ?></span></td>
                                                                                        <td>Min Trading Days: <span class="text-secondary"><?= $value['traded_days'] ?></span></td>
                                                                                        <td class="met-status"><?= $value['x-min-days'] ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td scope="row">Today's Max Loss: <span class="text-info"><?= $value['req_daily_loss'] ?></span></td>
                                                                                        <td>Today's Max Loss: <span class="text-secondary"><?= $value['allowed_daily_dd'] ?></span></td>
                                                                                        <td class="met-status"><?= $value['x-daily-dd'] ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td scope="row">Total Max Loss: <span class="text-info"><?= $value['req_max_loss'] ?></span></td>
                                                                                        <td>Total Max Loss: <span class="text-secondary"><?= $value['allowed_max_dd'] ?></span></td>
                                                                                        <td class="met-status"><?= $value['x-max-dd'] ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td scope="row">Profit Target: <span class="text-info"><?= $value['target'] ?></span></td>
                                                                                        <td>Profit: <span class="text-secondary"><?= $value['account_profit'] ?></span> Floating: <span class="text-secondary"><?= $value['account_floating_profit'] ?></td>
                                                                                        <td class="met-status"><?= $value['x-profit'] ?></td>
                                                                                    </tr>
                                                                                    <tr class="">
                                                                                        <td colspan="100" scope="row"><span style="visibility:hidden;">NULL</span></td>
                                                                                    </tr>
                                                                                    <tr class="thead-light">
                                                                                        <th colspan="100" class="text-center py-2">RISK ASSESSMENT</th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td scope="row">Average Profit: <span class="text-primary"><?= $value['average_profit'] ?></span></td>
                                                                                        <td>Average Loss: <span class="text-warning"><?= $value['average_loss'] ?></span></td>
                                                                                        <td>Profit Factor: <span class="text-primary"><?= $value['profit_factor'] ?></span></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td scope="row">No of Trades: <span class="text-primary"><?= $value['no_of_trades'] ?></span></td>
                                                                                        <td>Total Lots: <span class="text-warning"><?= $value['total_lots'] ?></span></td>
                                                                                        <td>Win Rate: <span class="text-primary"><?= $value['win_rate'] ?></span></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <!-- table-responsive -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                            <div class="col-12">
                                                                <div class="card overflow-hidden met-border">
                                                                    <div class="card-header met-subheading">
                                                                        <h3 class="card-title text-white">Performance</h3>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div id="metrix<?= $key ?>" class="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-lg-12">
                                                                    <div class="card met-border">
                                                                        <div class="card-header met-subheading">
                                                                            <h3 class="card-title text-white">Trading History</h3>
                                                                            <h3 class="d-flex justify-content-end text-white mb-0" style="flex-grow:1;"><i class="fa fa-eye fa-xs mr-1" data-target="#targetElement<?= $key+1 ?>" data-toggle="collapse" style="font-size:20px;"></i></h3>
                                                                        </div>
                                                                        <div class="card-body xbody pt-0 collapse"  id="targetElement<?= $key+1 ?>">
                                                                            <div class="table-responsive" style="font-size:11px;">
                                                                                <table class="table table-bordered table-striped border-t0 key-buttons text-nowrap w-100 customTable met-table">
                                                                                    <thead>
                                                                                        <tr style="background:transparent !important">
                                                                                            <th>Open Time</th>
                                                                                            <th>Close Time</th>
                                                                                            <th>Symbol</th>
                                                                                            <th>Type</th>
                                                                                            <th>Lot Size</th>
                                                                                            <th>Entry Price</th>
                                                                                            <th>Fee</th>
                                                                                            <th>Swap</th>
                                                                                            <th>Commission</th>
                                                                                            <th>Net Profit</th>
                                                                                            <th>Duration</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <? foreach($value['deal_history'] as $history): ?>
                                                                                            <tr>
                                                                                                <td><?= $history['entry_time'] ?></td>
                                                                                                <td><?= $history['time']  ?></td>
                                                                                                <td><?= $history['symbol']  ?></td>
                                                                                                <td><?= $history['type']  ?></td>
                                                                                                <td><?= $history['volume']  ?></td>
                                                                                                <td><?= $history['entry_price']  ?></td>
                                                                                                <td><?= $history['fee']  ?></td>
                                                                                                <td><?= $history['swap']  ?></td>
                                                                                                <td><?= $history['commission']  ?></td>
                                                                                                <td><?= $history['profit']  ?></td>
                                                                                                <td><?= $history['duration']  ?></td>
                                                                                            </tr>
                                                                                        <? endforeach ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <? endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>