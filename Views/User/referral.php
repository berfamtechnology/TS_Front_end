

            <!-- ROW-3 OPEN -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="card-title">Referral History</h3>
                        </div>
                        <div class="">
                            <div class="grid-margin">
                                <div class="">
                                    <div class="table-responsive">
                                        <table class="table card-table table-vcenter text-nowrap mb-0 table-primary align-items-center mb-0 text-center">
                                            <thead class="bg-primary text-white">
                                                <tr style="background: linear-gradient(to left, #2b5876 0%, #4e4376 100%);">
                                                    <th>Time</th>
                                                    <th>Time Paid</th>
                                                    <th>User</th>
                                                    <th>-+-</th>
                                                    <th>Invested</th>
                                                    <th>Status</th>
                                                    <th>Comm</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {referral_history}
                                                    <tr>
                                                        <td>{time1}</td>
                                                        <td>{time2}</td>
                                                        <td>{user_id|title}</td>
                                                        <td><img alt="Image placeholder" class="rounded-circle" src="users/{uname|lower}/profile/{pic}" width="32px" height="32px"></td>
                                                        <td>{! valid !}</td>
                                                        <td>{! status !}</td>
                                                        <td>{commission}</td>
                                                    </tr>
                                                {/referral_history}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="media-heading">
                                <h5><strong>Referral</strong></h5>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6">
                                        <strong>Referral Code :</strong> {ref_link|lower}</td>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <p></p><button class="mb-4 btn btn-info btn-sm btn-block clipB"  data-clipboard-text="{ref_link}" style="background: linear-gradient(to right, #2b5876 0%, #4e4376 100%);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy</button></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-3 CLOSED -->