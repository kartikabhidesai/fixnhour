@extends('layouts.clientlayout')

@section('content')
<main class="cd-main-content">

	<div class="inner-page">	
		
		<div class="max-height-footer post-preview post-your-job gray-bg">

		<div class="container">
		
			<div class="post-job-section padding-bottam-40 padding-top30 ">
			
				<h2 class="section-heading"> Post a Job </h2>
			
				<div class="form-group">
				  	<div class="row">
						
						<div class="col-md-12">
							<label class="custom-lable" for="exampleInputEmail1">Choose a category & subcategory</label>
						</div>
					
						<div class="col-md-6">
						
							<div class="relative search-select">
								<select>
								  <option>Please Select</option>
								  <option>seloect 1</option>
								  <option>seloect 2</option>
								  <option>seloect 3</option>
								  <option>seloect 4</option>
								</select>
					  		</div>
					  
						</div>

						<div class="col-md-6">
					
							<div class="relative search-select">
								<select>
								  <option>Please Select</option>
								  <option>seloect 1</option>
								  <option>seloect 2</option>
								  <option>seloect 3</option>
								  <option>seloect 4</option>
								</select>
					  		</div>
					  
						</div>
					
					</div>
				</div>
					
		  </div>
		  
			<div class="describe-job-section">
			
				<h2 class="section-heading"> Describe the job </h2>
			
				<div class="form-group">
				  	<div class="row">

						<div class="col-md-12">
						
							<div class="form-group">
							<label class="custom-lable" for="exampleInputEmail1">Choose a category & subcategory</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Example: Need designer make creative design">
						 	 </div>
											  
						</div>
						
						<div class="col-md-12">
						
							<div class="form-group padding-top-20">
							<label class="custom-lable" for="exampleInputEmail1">Choose a category & subcategory</label><div class="clearfix"></div>
								<textarea class="coutom-textarea" placeholder="Describe"></textarea>
						 	 </div>
											  
						</div>
						
						<div class="col-md-12">
							<div class="attached-files">
								
								<label class="custom-lable " for="exampleInputEmail1"> Attached Files </label><div class="clearfix"></div>	
									<ul>
										<li><a href="#"><img src="images/round-pluse-icon-.png"><span>browse</span></a></li>
										<li><a href="#"><img src="images/round-pluse-icon-.png"><span>browse</span></a></li>
									</ul>
									<p class="notic"> The file can up to 25 MB in size </p>	
							</div>
						</div>
						<div class="col-md-12">
						
							<div class="form-group padding-top-20">
							<label class="custom-lable " for="exampleInputEmail1"> Enter skills needed </label><div class="clearfix"></div>	
														
								<select data-placeholder="type Here..."  multiple class="form-control chosen-select" tabindex="8">
										<option value=""></option>
										<option>American Black Bear</option>
										<option>Asiatic Black Bear</option>
										<option>Brown Bear</option>
										<option>Giant Panda</option>
										<option selected>Sloth Bear</option>
										<option disabled>Sun Bear</option>
										<option selected>Polar Bear</option>
										<option disabled>Spectacled Bear</option>
									  </select>
									
								
						 	 </div>
											  
						</div>
						
						<div class="col-md-12">
						
							<div class="form-group padding-top-20">
							<label class="custom-lable" for="exampleInputEmail1">Job Type</label><div class="clearfix"></div>								
								
									<ul class="hire-ul">
											<li><label><span class="radio-custome"><input name="hire-radio" type="radio"><span></span></span>Hourly</label></li>
											<li><label><span class="radio-custome"><input name="hire-radio" type="radio"><span></span></span>fixed prise</label></li>
										</ul>
								
						 	 </div>
											  
						</div>
							
						<div class="row">
							<div class="padding-left">
								<div class="col-md-6">
									<label class="custom-lable normal-lable-heading" for="exampleInputEmail1">Approximate Budget?</label>
									
									<div class="relative search-select">
										<select>
										  <option>Not Sure.... </option>
										  <option>seloect 1</option>
										  <option>seloect 2</option>
										  <option>seloect 3</option>
										  <option>seloect 4</option>
										</select>
									</div>
					   
								</div>
								
								<div class="col-md-6">
									<label class="custom-lable normal-lable-heading" for="exampleInputEmail1">Approximate Time?</label>
									<div class="relative search-select">
										
										<select>
										  <option>Not Sure....</option>
										  <option>seloect 1</option>
										  <option>seloect 2</option>
										  <option>seloect 3</option>
										  <option>seloect 4</option>
										</select>
								
									</div>
								</div>			
							</div>  
						</div>
						
						<div class="tab-content-area post-job-level">
									
									  <label class="custom-lable" for="exampleInputEmail1"> Level </label>
									  
									  	<div class="select-level">
											<ul>
											
												<li class="active"> <a href="#"> <i class="fa fa-usd" aria-hidden="true"></i> <span> Beginner </span></a> </li>
												<li> <a href="#"> <i class="fa fa-usd" aria-hidden="true"></i> <span> Medium </span></a> </li>
												<li> <a href="#"> <i class="fa fa-usd" aria-hidden="true"></i> <span> Expert </span></a> </li>
												
											</ul>
										</div>
				   
								  </div>
					</div>
				</div>
					
		  </div>
		  
		  	<div class="Optional-section">
			
				<h2 class="section-heading"> Optional</h2>
			
				<div class="form-group">
				  	<div class="row">

						<div class="col-md-12">
						
							<div class="form-group">
								<label class="custom-lable" for="exampleInputEmail1"> Prefered Candidate Location </label><div class="clearfix"></div>
								<label class="keep-login custom-lable  normal-lable-heading"><span class="cutome-check cutome-3">
										<input type="checkbox">
										<span></span></span> I Prefer Candidate Form Certain Location </label>
						 	 </div>
							 
							<div class="select-region ">
							
								<div class="col-md-12">
								
									<ul class="hire-ul  coustom-radio-button">
													
										<li><label><span class="radio-custome"><input name="hire-radio" type="radio"><span></span></span>Region(s)</label></li>
													
									</ul>
									
								</div>
								
								<div class="sub-select form-group">
									<div class="col-md-6">
									<div class="relative search-select">
										<select>
										  <option>Select Region </option>
										  <option>seloect 1</option>
										  <option>seloect 2</option>
										  <option>seloect 3</option>
										  <option>seloect 4</option>
										</select>
									</div>
								</div>
								</div>	
								
							</div>
							
							<div class="select-location">
							
								<div class="col-md-12">
									<ul class="hire-ul coustom-radio-button">
													
										<li><label><span class="radio-custome"><input name="hire-radio" type="radio"><span></span></span> Country, State,  City,  Zip Code  </label></li>
													
									</ul>
								</div>
								
								<div class="sub-select">
								
									<div class="col-md-6">
									
										<div class="form-group">	
											<label class="custom-lable normal-lable-heading" for="exampleInputEmail1">Country</label>
											<div class="relative search-select ">
												<select>
											  <option>Not Sure.... </option>
											  <option>seloect 1</option>
											  <option>seloect 2</option>
											  <option>seloect 3</option>
											  <option>seloect 4</option>
											</select>
											</div>
										</div>
									
									</div>
								
									<div class="col-md-6">
									
										<div class="form-group">	
											<label class="custom-lable normal-lable-heading" for="exampleInputEmail1">State (Optional)</label>
											<div class="relative search-select ">
											<select>
											  <option>Not Sure.... </option>
											  <option>seloect 1</option>
											  <option>seloect 2</option>
											  <option>seloect 3</option>
											  <option>seloect 4</option>
											</select>
										</div>
										</div>
										
									</div>
								
									<div class="col-md-6">
										<div class="form-group">	
											<label class="custom-lable normal-lable-heading" for="exampleInputEmail1">City (Optional)</label>
											<div class="relative search-select ">
											<select>
											  <option>Not Sure.... </option>
											  <option>seloect 1</option>
											  <option>seloect 2</option>
											  <option>seloect 3</option>
											  <option>seloect 4</option>
											</select>
										</div>
										</div>
									</div>
									
									<div class="col-md-6 ">
									
										<div class="form-group">	
											<label class="custom-lable normal-lable-heading" for="exampleInputEmail1">Zip (Optional)</label>
											<input class="form-control" id="exampleInputEmail1" placeholder="" type="email">
										</div>
										
								</div>
								
								</div>	
								
							</div>
							
														  
						</div>
					
					</div>
				</div>
				
				<div class="proposed-start">
				
					<label class="custom-lable" for="exampleInputEmail1"> Proposed Start Date </label><div class="clearfix"></div>
					<ul class="hire-ul">
						<li><label><span class="radio-custome"><input name="hire-radio" type="radio"><span></span></span>Start Innediately after proposal is  selected</label></li>
						<li><label><span class="radio-custome"><input name="hire-radio" type="radio"><span></span></span>Job will start on </label></li>
					</ul>			
					
					
					
				</div>	
				
				<div class="row">
				
					<div class="col-md-6">
						<div class="earn-row delivery proposed-start-date">
						
						<input type="text"  class="span2 earn-value form-control" value="" placeholder="Select Delivery Date" id="dp1"><i class="fa fa-calendar"></i>
			  </div>
			  		</div>
				
				</div>
				
		  </div>
		  
		  	<div class="action-buttons">
			
				<ul>
					<li> <a class="coustom-btn" href="#">Continue</a> </li>
					<li> <a class="coustom-btn" href="#">Save & Post Later </a> </li>
				</ul>
				
			</div>
			
		</div>

	</div>
	
</div>

</main>
@endsection