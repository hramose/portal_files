@extends('layouts.dashboard')

@section('section')
    <form role="form" method="POST" action="/create_stage2">
	  {!! csrf_field() !!}
    <h4>Register your Will</h4>
            <div class="progress" value="63">
                <div class="progress-bar" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"  aria-valuetext="63%" style="width: 63%;"><span class="ng-scope">63%</span></div>
            </div> 
       
            <div class="row">
                   
                 
                     <div class="panel panel-info">

								<div class="panel-heading">
									<h3 class="panel-title">Testatrix personal details / Testatrise se persoonlike besonderhede:	  <div class="panel-control pull-right">
											<a class="panelButton"><i class="fa fa-refresh"></i></a>
											<a class="panelButton"><i class="fa fa-minus"></i></a>
											<a class="panelButton"><i class="fa fa-remove"></i></a>
										</div>
									</h3>
								</div>	

								<div class="panel-body">

                                    <div class="form-group" >
										<label class="col-sm-2 control-label">Fullname/Volle naam</label>
											<div class="col-sm-5" style="margin-top:5px">
												<input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name/Eerste Naam" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->fullname;} ?>" required>
											</div>
											<div class="col-sm-5" style="margin-top:5px">
												<input type="text" name="second_name" id="second_name" class="form-control" placeholder="Surname/Van" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->surname;} ?>"  required>
											</div>
							        </div>

							        <div class="form-group"  >
										<label class="col-sm-2 control-label">ID Number/ID-nommer</label>
											<div class="col-sm-10" style="margin-top:5px">
												<input type="text" name="id_number" id="id_number" class="form-control" placeholder="ID Number/ID-nommer" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->id_number;} ?>" required>
											</div>
							        </div>

                                    
                                    <div class="form-group"  >
										<label class="col-sm-2 control-label">Residential Address/Woonadres</label>
											<div class="col-sm-10">
											   <div  style="margin-top:5px">											   	
											   	   <input type="text" name="street_address" id="street_address" class="form-control" placeholder="Street Address/Straatadres" value="<?php if(isset($testatrix[0])){$street_address=explode(":", $testatrix[0]->street_address); echo $street_address[0];} ?>" required>
											   </div>

											   <div  style="margin-top:5px">											   	
											   	   <input type="text" name="street_address_line_two" id="street_address_line_two" class="form-control" placeholder="Street Address Line two/Straatadres Line twee" value="<?php if(isset($testatrix[0])){$street_address=explode(":", $testatrix[0]->street_address); if (isset($street_address[1])) {echo $street_address[1];} } ?>" required>
											   </div>
												
												<div  class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="city" id="city" class="form-control" placeholder="City/Stad"value="<?php if(isset($testatrix[0])){echo $testatrix[0]->city;} ?>" required>
											   </div>
											   <div  class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="province" id="province" class="form-control" placeholder="Province/Provinsie" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->province;} ?>" required>
											   </div>

											   <div  class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="postal_code" id="postal_code" class="form-control" placeholder="Postal Code/Poskode" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->postal_code;} ?>" required>
											   </div>
											   <div  class="col-sm-6" style="margin-top:5px">								   	
											   	   @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Select Country', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
											   </div>

											</div>
							        </div>
							        <div class="form-group"  >
										<label class="col-sm-2 control-label">Addtional Details</label>
										   <div   class="col-sm-10">

									        <div class="col-sm-3" style="margin-top:5px">
											<input type="text" name="mobile_number" id="mobile_number" class="form-control" placeholder="Mobile Number/Selfoon nommer" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->mobile_number;} ?>"  required>
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="email_number" id="email_number" class="form-control" placeholder="E-mail"  value="<?php if(isset($testatrix[0])){echo $testatrix[0]->email;} ?>"  required>
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="employer" id="employer" class="form-control" placeholder="Name of Employer"  value="<?php if(isset($testatrix[0])){echo $testatrix[0]->name_of_employer;} ?>"  required>
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="occupation" id="occupation" class="form-control" placeholder="Occupation/Selfoon nommer" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->occupation;} ?>" required>
											</div>
										   	
  										   </div>
											
							        </div>

							        
                                   
							     </div>	

				     </div>	

				     <div class="panel panel-info">

								<div class="panel-heading">
									<h3 class="panel-title">Details of Marriage	  
										<div class="panel-control pull-right">
											<a class="panelButton"><i class="fa fa-refresh"></i></a>
											<a class="panelButton"><i class="fa fa-minus"></i></a>
											<a class="panelButton"><i class="fa fa-remove"></i></a>
										</div>
									</h3>
								</div>
                               <div class="panel-body">
                               <div class="form-group" >
										<label class="col-sm-2 control-label">Date of Marriage</label>
											<div class="col-sm-10">
												<p class="input-group">
													<div class='input-group date' id='datetimepicker' name="datetimepicker">
									                    <input type='text' class="form-control" />
									                    <span class="input-group-addon">
									                        <span class="glyphicon glyphicon-calendar"></span>
									                    </span>
									                </div>						            
									            </p>
											</div>
							    </div>

		                       <div class="row">
								<label for="inputtext" class="col-sm-2 control-label">How Married?</label>
								<div class="col-sm-10">
									<select class="form-control" name="mariage_type">
									    <?php 
                                         if (isset($mariage_details[0])) { ?>
                                         <option value="<?php echo $mariage_details[0]->marriage_type?>"> <?php echo $mariage_details[0]->marriage_type?> </option>	
                                        
                                        <?php 
                                         }
									     ?>
										<option value="In Community of Property"> In Community of Property </option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
									<br>
								</div>
							</div>
							     </div>


		                    </div>	
                     </div>
			
                     <div>

                                         <button type="submit" class="btn btn-primary btn-rounded"  style="margin-top:5px; float: right;">Next</button> 
							        	 <button type="button" class="btn btn-primary btn-rounded"  style="margin-top:5px; float: right;">Back</button> 
				     </div>

			</div>						
       </form>
@stop