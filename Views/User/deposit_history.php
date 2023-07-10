<!-- ROW-4 -->
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Your Deposit History</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100 table-striped  table-hover">
                        <thead class="text-center">
                            <tr>
                                <th>s/n</th>
                                <th>Time</th>
                                <th>DP Amount</th>
                                <th>DP Currency</th>
                                <th>RC Amount</th>
                                <th>RC Currency</th>
                                <th>Method</th>
                                <th>Txn-id</th>
                                <th>Status</th>
                                <th>Desc</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            {deposit_history}
                            <tr>
                                <td>{sn}</td>
                                <td>{time}</td>
                                <td>{init_amount}</td>
                                <td>{init_currency|upper}</td>
                                <td>{amount}</td>
                                <td>{currency|upper}</td>
                                <td>{method|capitalize}</td>
                                <td>{txn_id|lower}</td>
                                <td>{! status !}</td>
                                <td>{admin_note}</td>
                            </tr>
                            {/deposit_history}

                        </tbody>
                    </table>
                    <style>
                        tbody>tr td {
                            border-right: none !important;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ROW-4 CLOSED-->