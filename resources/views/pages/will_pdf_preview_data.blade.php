<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ani-Theme Laravel Dashboard | @yield('page_title')</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="{{ asset("css/vendor.css") }}" />		
		<link rel="stylesheet" href="{{ asset("css/app-".(\Session::has('theme') ? \Session::get('theme') : 'blue').".css") }}" />
	</head>
	<body class="{{ \Session::get('rtl') == 'rtl' ? 'rtl' : '' }}">
		@yield('body')
			<script src="{{ asset("vendor/ckeditor/ckeditor.js") }}" type="text/javascript"></script>			
			<script src="{{ asset("js/vendor.js")}}"></script>
		@yield('js')
	</body>
</html>

<div class="row">
               @if (isset($willquestionare[0]))
                 <div class="panel panel-info">

								<div class="panel-heading">
									<h3 class="panel-title">Will Questionnaire	  
										<div class="panel-control pull-right">
											<a class="panelButton"><i class="fa fa-refresh"></i></a>
											<a class="panelButton"><i class="fa fa-minus"></i></a>
											<a class="panelButton"><i class="fa fa-remove"></i></a>
										</div>
									</h3>
								</div>

                               <div class="panel-body">
								   <label for="inputtext" class="col-sm-6 control-label">Is this a Single or Joint Will?</label>
								<div class="col-sm-6">
									<div class="checkbox">
										<label>
											<input type="checkbox" value="Single" name="type_of_will" id="single" onClick="javascript:uncheckjoint(this);" @if($willquestionare[0]->type_of_will=='Single')checked @endif>
											Single
										</label>
									</div>
									<div class="checkbox disabled">
										<label>
											<input type="checkbox" id="joint" name="type_of_will" value="Joint" onClick="javascript:uncheckSingle(this);" @if($willquestionare[0]->type_of_will=='Joint')checked @endif>
											Joint
										</label>
									</div>
		                         </div>	


		                        <label for="inputtext" class="col-sm-6 control-label">Are you English or Afrikaans?</label>
								<div class="col-sm-6">
									<div class="checkbox">
										<label>
											<input type="checkbox" value="english" name="language" id="english" onClick="javascript:uncheckAfrikaans(this);" @if($willquestionare[0]->language=='english')checked @endif>
											English
										</label>
									</div>
									<div class="checkbox disabled">
										<label>
											<input type="checkbox" value="afrikaans" id="africans" name="language" onClick="javascript:uncheckEnglish(this);" @if($willquestionare[0]->language=='afrikaans')checked @endif>
											Afrikaans
										</label>
									</div>
		                         </div>	

		                    </div>	
                     </div>

                   
                @endif

                @if (isset($Testator[0]))

                     <div class="panel panel-info">

								<div class="panel-heading">
									<h3 class="panel-title">Testator's personal details / Testateur se persoonlike besonderhede:	  <div class="panel-control pull-right">
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
												<input type="text" name="first_name" id="first_name" value="{{$Testator[0]->fullname}}" class="form-control" placeholder="First Name/Eerste Naam" required>
											</div>
											<div class="col-sm-5" style="margin-top:5px">
												<input type="text" name="second_name" id="second_name" value="{{$Testator[0]->surname}}" class="form-control" placeholder="Surname/Van" required>
											</div>
							        </div>

							        <div class="form-group"  >
										<label class="col-sm-2 control-label">ID Number/ID-nommer</label>
											<div class="col-sm-10" style="margin-top:5px">
												<input type="text"  name="id_number" id="id_number" class="form-control" value="{{$Testator[0]->id_number}}" placeholder="ID Number/ID-nommer" required>
											</div>
							        </div>

                                    
                                    <div class="form-group"  >
										<label class="col-sm-2 control-label">Residential Address/Woonadres</label>
											<div class="col-sm-10">
											   <div  style="margin-top:5px">											   	
											   	   <input type="text" name="street_address" id="street_address" class="form-control" placeholder="Street Address/Straatadres" value="{{$Testator[0]->street_address}}" required>
											   </div>

											   <div  style="margin-top:5px">											   	
											   	   <input type="text" name="street_address_line_two" id="street_address_line_two" class="form-control" placeholder="Street Address Line two/Straatadres Line twee" value="{{$Testator[0]->street_address}}" required>
											   </div>
												
												<div  class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="city" id="city" class="form-control" placeholder="City/Stad" value="{{$Testator[0]->city}}" required>
											   </div>
											   <div  class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="province" id="province" class="form-control" placeholder="Province/Provinsie" value="{{$Testator[0]->province}}" required>
											   </div>

											   <div  class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="postal_code" id="postal_code" class="form-control" placeholder="Postal Code/Poskode" value="{{$Testator[0]->postal_code}}" required>
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
											<input type="text" name="mobile_number" id="mobile_number" class="form-control" placeholder="Mobile Number/Selfoon nommer" value="{{$Testator[0]->mobile_number}}" required>
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="email_number" id="email_number" class="form-control" placeholder="E-mail" value="{{$Testator[0]->email}}" required>
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="employer" id="employer" class="form-control" placeholder="Name of Employer" value="{{$Testator[0]->name_of_employer}}" required>
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="occupation" id="occupation" class="form-control" placeholder="Occupation/Selfoon nommer" value="{{$Testator[0]->occupation}}" required>
											</div>
										   	
  										   </div>
											
							        </div>

							        
                                   
							     </div>	

				     </div>	
               @endif

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
											   	   <input type="text" name="street_address_line_two" id="street_address_line_two" class="form-control" placeholder="Street Address Line two/Straatadres Line twee" value="<?php if(isset($testatrix[0])){$street_address=explode(":", $testatrix[0]->street_address); echo $street_address[1];} ?>" required>
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


                        <form role="form" method="POST" action="/create_stage3">
	                 {!! csrf_field() !!}
                     <div class="panel panel-info">

								<div class="panel-heading">
									<h3 class="panel-title">Will Information
                             	  <div class="panel-control pull-right">
											<a class="panelButton"><i class="fa fa-refresh"></i></a>
											<a class="panelButton"><i class="fa fa-minus"></i></a>
											<a class="panelButton"><i class="fa fa-remove"></i></a>
										</div>
									</h3>
								</div>	

								<div class="panel-body">


								     	<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Stipulation in case of death of Testator/Bepaling ten tye van afsterwe van Testateur:</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="stipulation_in_case_of_death_of_testator" id="stipulation_in_case_of_death_of_testator" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required> <?php if(isset($will_information[0])){echo $will_information[0]->stipulation_in_case_of_death_of_testator;} ?> </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Stipulation in case of death of Testatrix/Bepaling ten tye van afsterwe van Testatrise:</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="stipulation_in_case_of_death_of_testatrix" id="stipulation_in_case_of_death_of_testatrix" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required>
                                                             <?php if(isset($will_information[0])){echo $will_information[0]->stipulation_in_case_of_death_of_testatrix;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

											<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Simultaneous death/Gesamentlike afsterwe:</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="simultaneous_death" id="simultaneous_death" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required>
															 <?php if(isset($will_information[0])){echo $will_information[0]->simultaneous_death;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Will in event of family obliteration/Gesinsuitwissing (Optional):</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="will_in_event_of_family_obliteration" id="will_in_event_of_family_obliteration" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required>
                                                              <?php if(isset($will_information[0])){echo $will_information[0]->will_in_event_of_family_obliteration;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>In case of minor beneficiaries we need the following information:/In geval waar minderjariges begunstigdes is benodig ons die volgende Inligting:</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="in_case_of_minor_beneficiaries_we_need_the_following_information" id="in_case_of_minor_beneficiaries_we_need_the_following_information" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="7" required> 
															 <?php if(isset($will_information[0])){echo $will_information[0]->in_case_of_minor_beneficiaries_we_need_the_following_information;} ?>
															</textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Name/Naam en Identity/Identiteitsnommers or/of Date of Birth/Geboortedaum of minors:</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="name_identity_date_of_birth" id="name_identity_date_of_birth" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required>
                                                            <?php if(isset($will_information[0])){echo $will_information[0]->name_identity_date_of_birth;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Guardian/Voog (Full names/Volle name)</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="guardians" id="guardians" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required>
                                                             <?php if(isset($will_information[0])){echo $will_information[0]->guardians;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>State the maintenance amount to be paid to each minor child?</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="maintenance_amount_to_be_paid_to_each_minor_child" id="maintenance_amount_to_be_paid_to_each_minor_child" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required> 
                                                            <?php if(isset($will_information[0])){echo $will_information[0]->maintenance_amount_to_be_paid_to_each_minor_child;} ?>
															</textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>If you wish to create a Trust, Trustee: Full Names/Volle name and Identity Number/Identiteitsnommer :</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="trust_trustee_full_names_id_numbers" id="trust_trustee_full_names_id_numbers" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required>
                                                             <?php if(isset($will_information[0])){echo $will_information[0]->trust_trustee_full_names_id_numbers;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Executor/Eksekuteur: Full Names/Volle name and Identity Number/Identiteitsnommer, we will appoint Executors/ with the person that you nominate</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="executor_full_names_and_and_id_numbers" id="executor_full_names_and_and_id_numbers" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="7" required> 
                                                             <?php if(isset($will_information[0])){echo $will_information[0]->executor_full_names_and_and_id_numbers;} ?>
															</textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>



      
									</div>
							</div>

                       <div class="panel panel-info">

								<div class="panel-heading">
									<h3 class="panel-title">Other matters
										  <div class="panel-control pull-right">
											<a class="panelButton"><i class="fa fa-refresh"></i></a>
											<a class="panelButton"><i class="fa fa-minus"></i></a>
											<a class="panelButton"><i class="fa fa-remove"></i></a>
										</div>
									</h3>
								</div>	

								<div class="panel-body">
								 <div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Any other matters you wish to add?</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="other_matters" id="other_matters" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required>
															<?php if(isset($will_information[0])){echo $will_information[0]->other_matters;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
									</div>


									</div>
								</div>

					</form>	



					</div>