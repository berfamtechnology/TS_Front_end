<div class="row ">
                <div class="col-md-12">
                    {if $tool_name == "Active Symbols"}
                        <div class="row">
                        {symbols}{noparse}
                            <div class="col-md-12 col-xl-4">
                               <div class="card card-collapsed">
                                  <div class="card-header">
                                     <h3 class="card-title">{/noparse}{fullname|tile}{noparse} ({/noparse}{shortname|upper}{noparse})</h3>
                                     <div class="card-options"> <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a> <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a> </div>
                                  </div>
                                  <div class="card-body">{/noparse}{description|capitalize}{noparse}</div>
                               </div>
                            </div>{/noparse}
                        {/symbols}
                        </div>
                    {elseif $tool_name == "Downloads"}
                        <div class="row justify-content-center">
                        	<div class="col-sm-12 col-md-5">
                        		<div class="card">
                        			<div class="card-body text-center">
                        				<h2 class="mt-4 mb-2">MT4 Download</h2>
                        				<a href="{mt4_link}" class="btn btn-secondary mt-4">Download</a>
                        			</div>
                        		</div>
                        	</div>
                        	<div class="col-sm-12 col-md-5">
                        		<div class="card">
                        			<div class="card-body text-center">
                        				<h2 class="mt-4 mb-2">MT5 Download</h2>
                        				<a href="{mt5_link}" class="btn btn-secondary mt-4">Download</a>
                        			</div>
                        		</div>
                        	</div>
                        </div>
                    {else}
                        <div class="card">
                            <div class="card-body">
                                <h4><b>{tool_name|title}</b></h4>
                                <p class="mx-auto text-center">{! tool_script !}</p>
                            </div>
                        </div>
                    {endif}
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="terms">
                                <p>Was this tool Helpful?</p>
                                <a class="btn btn-primary text-white">Yes</a>
                                <a class="btn btn-secondary text-white">No</a>
                            </div>
                        </div>
                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-1 CLOSE -->