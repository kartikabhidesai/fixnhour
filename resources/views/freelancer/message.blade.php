@extends('layouts.freelancerlayout')

@section('content')

<main class="cd-main-content">
 	
    <div class="max-height-footer gray-bg">
    
		<div class="container padding-bottam-40  padding-top30  payment-page ">
        	
           <div class="row"> 
           		<div class="col-md-12">  
            		
                    <div class="available-balance-part border-box-secation pull-left">
				<h3> Available Balance </h3>       	    	      
                <h5 class="balance-show">$100.00 USD</h5>
                <a href="#">withdraw money </a>  
                  
            </div>            
            
            		<div class="create-milestone pull-left">
            	<a href="#" class="btn"><i class="fa fa-plus" aria-hidden="true"></i> Create milestone </a>      
                  
            </div>
            
            	</div> 
            </div>
            <div class="row">
            	<div class="col-md-12">
                	<div class="padding-top40">
                    
                    	<div class="my-job-tab payment-billing-info">
                                      
                            <ul class="nav nav-tabs ">
                                <li class="active"><a data-toggle="tab" href="#billing-method">Billing Method</a></li>
                                <li><a data-toggle="tab" href="#menu1">Translation History</a></li>
                            </ul>
                  
                		</div>
                    
                    	<div class="tab-content my-job-tab-content padding-top-20">
                            
                                <div id="billing-method" class="tab-pane fade in active">
                                    
                                    <div class="border-box-secation">
                                     	
                                        <div class="info-and-add-secation">
                                    		
                                            <div class="info-and-add-row">
                                        		<h4>Bank accounts</h4>
                                                <ul class="padding-top-20 ">
                                                	
                                                    <li class="show-bankaccount">
                                                		<div class="bank-details text-left">
                                                        	<h4>SBI, Durgapura, Jaipur </h4>
                                                        	<p>checking account</p>
                                                            <span>Auto-withdrawal</span>
                                                            <h3>xxxxxxxx- 7887 <i class="pe-7s-culture"></i></h3>
                                                        </div>
													</li>
                                                    
                                                    <li class="link text-center">
                                                		<a href="#" type="button" class="" data-toggle="modal" data-target="#myModal">
<i class="pe-7s-plus"></i>Link a bank account </a>
													</li>
                                                    
                                                </ul>
                                            </div>
                                        	
                                            <div class="info-and-add-row">
                                        		<h4>Credit and debit cards</h4>
                                                <ul class="padding-top-20 ">
                                                	
                                                        <li class="show-card">
                                                            <div class="card-details">
                                                                <h3>xxxx-xxxx-xxxx-7887 </h3>
                                                                <img src="images/card-icon.png">
                                                            </div>
                                                        </li>
                                                    
                                                    	<li class="show-card">
                                                            <div class="card-details">
                                                                <h3>xxxx-xxxx-xxxx-7887 </h3>
                                                                <img src="images/card-icon.png">
                                                            </div>
                                                        </li>
                                                        
                                                    	<li class="link text-center">
                                                		<a href="#" type="button" class="" data-toggle="modal" data-target="#myModal">
<i class="pe-7s-plus"></i>Link a card </a>
													</li>
                                                    
                                                </ul>
                                            </div>
                                            
                                            <div class="info-and-add-row">
                                        		<h4>Paypal Account</h4>
                                                <ul class="padding-top-20 ">
                                                	
                                                        <li class="show-card">
                                                            <div class="card-details">
                                                                <h3> xxxxx321@gmail.com  </h3>
                                                                <img src="images/paypal-icon.png">
                                                            </div>
                                                        </li>
                                                        
                                                    	<li class="link text-center">
                                                		<a href="#" type="button" class="" data-toggle="modal" data-target="#myModal">
<i class="pe-7s-plus"></i>Link a card </a>
													</li>
                                                    
                                                </ul>
                                            </div>
                                            
                                            <div class="info-and-add-row">
                                        		<h4>Paytm  Account</h4>
                                                <ul class="padding-top-20 ">
                                                        
                                                    	<li class="link text-center">
                                                		<a href="#" type="button" class="" data-toggle="modal" data-target="#myModal">
<i class="pe-7s-plus"></i>Link a card </a>
													</li>
                                                    
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
        
                                <div id="menu1" class="tab-pane fade">
                                    
                                    
                                    
                                </div>
            
           
                            </div>
                            
                    </div>
                </div>        
            </div>            
		</div>
			
            
        
	</div>
    <div class="clearfix"></div>
	
    
 </main>
@endsection