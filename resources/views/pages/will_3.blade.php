@extends('layouts.dashboard')
	
@section('section')
   <h4>Register your Will</h4>
            <div class="progress" value="63">
                <div class="progress-bar" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"  aria-valuetext="63%" style="width: 63%;"><span class="ng-scope">63%</span></div>
            </div> 

        <div class="row">

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
															<textarea type="text" name="stipulation_in_case_of_death_of_testatrix" id="stipulation_in_case_of_death_of_testatrix" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required><?php if(isset($will_information[0])){echo $will_information[0]->stipulation_in_case_of_death_of_testatrix;} ?>
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
															<textarea type="text" name="simultaneous_death" id="simultaneous_death" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required><?php if(isset($will_information[0])){echo $will_information[0]->simultaneous_death;} ?>
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
															<textarea type="text" name="will_in_event_of_family_obliteration" id="will_in_event_of_family_obliteration" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required><?php if(isset($will_information[0])){echo $will_information[0]->will_in_event_of_family_obliteration;} ?>
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
															<textarea type="text" name="in_case_of_minor_beneficiaries_we_need_the_following_information" id="in_case_of_minor_beneficiaries_we_need_the_following_information" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="7" required><?php if(isset($will_information[0])){echo $will_information[0]->in_case_of_minor_beneficiaries_we_need_the_following_information;} ?>
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
															<textarea type="text" name="name_identity_date_of_birth" id="name_identity_date_of_birth" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required><?php if(isset($will_information[0])){echo $will_information[0]->name_identity_date_of_birth;} ?>
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
															<textarea type="text" name="guardians" id="guardians" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required><?php if(isset($will_information[0])){echo $will_information[0]->guardians;} ?>
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
															<textarea type="text" name="maintenance_amount_to_be_paid_to_each_minor_child" id="maintenance_amount_to_be_paid_to_each_minor_child" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required><?php if(isset($will_information[0])){echo $will_information[0]->maintenance_amount_to_be_paid_to_each_minor_child;} ?>
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
															<textarea type="text" name="trust_trustee_full_names_id_numbers" id="trust_trustee_full_names_id_numbers" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required><?php if(isset($will_information[0])){echo $will_information[0]->trust_trustee_full_names_id_numbers;} ?>
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
															<textarea type="text" name="executor_full_names_and_and_id_numbers" id="executor_full_names_and_and_id_numbers" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="7" required><?php if(isset($will_information[0])){echo $will_information[0]->executor_full_names_and_and_id_numbers;} ?>
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
															<textarea type="text" name="other_matters" id="other_matters" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required><?php if(isset($will_information[0])){echo $will_information[0]->other_matters;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
									</div>

									<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<button type="button" class="btn btn-primary btn-rounded"  style="margin-top:5px; float: left;">Back</button> 
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<button type="submit" class="btn btn-primary btn-rounded"   style="margin-top:5px; float: right;" onclick="history.back();">Submit
															</button> 
														<!-- </div> -->
													<!-- </div> -->

												</div>
									</div>

									</div>
								</div>

					</form>			
      </div>
      
@stop