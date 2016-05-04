@extends('layouts.dashboard')
	
@section('section')

  <form role="form" method="POST" action="/create_stage1">
	  {!! csrf_field() !!}
         <h4>Register your Will</h4>
            <!-- <div class="progress" value="63">
                <div class="progress-bar" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"  aria-valuetext="63%" style="width: 63%;"><span class="ng-scope">63%</span></div>
            </div>  -->
       
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

<!-- 
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
		                         </div>	 -->

		                    </div>	
                     </div>
       
                    

                   @else

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
											<input type="checkbox" value="Single" name="type_of_will" id="single" onClick="javascript:uncheckjoint(this);">
											Single
										</label>
									</div>
									<div class="checkbox disabled">
										<label>
											<input type="checkbox" id="joint" name="type_of_will" value="Joint" onClick="javascript:uncheckSingle(this);">
											Joint
										</label>
									</div>
		                         </div>	


		                        <!-- <label for="inputtext" class="col-sm-6 control-label">Are you English or Afrikaans?</label>
								<div class="col-sm-6">
									<div class="checkbox">
										<label>
											<input type="checkbox" value="english" name="language" id="english" onClick="javascript:uncheckAfrikaans(this);">
											English
										</label>
									</div>
									<div class="checkbox disabled">
										<label>
											<input type="checkbox" value="afrikaans" id="africans" name="language" onClick="javascript:uncheckEnglish(this);">
											Afrikaans
										</label>
									</div>
		                         </div>	 -->

		                    </div>	
                     </div>

                   @endif

                   @if (isset($Testator[0]))

                     <div class="panel panel-info">

								<div class="panel-heading">
									<h3 class="panel-title">Testator's personal details <!-- / Testateur se persoonlike besonderhede:	 -->  <div class="panel-control pull-right">
											<a class="panelButton"><i class="fa fa-refresh"></i></a>
											<a class="panelButton"><i class="fa fa-minus"></i></a>
											<a class="panelButton"><i class="fa fa-remove"></i></a>
										</div>
									</h3>
								</div>	

								<div class="panel-body">

                                    <div class="form-group" >
										<label class="col-sm-2 control-label">Fullname<!-- /Volle naam --></label>
											<div class="col-sm-5" style="margin-top:5px">
												<input type="text" name="first_name" id="first_name" value="{{$Testator[0]->fullname}}" class="form-control" placeholder="First Name" required>
											</div>
											<div class="col-sm-5" style="margin-top:5px">
												<input type="text" name="second_name" id="second_name" value="{{$Testator[0]->surname}}" class="form-control" placeholder="Surname/Van" required>
											</div>
							        </div>

							        <div class="form-group"  >
										<label class="col-sm-2 control-label">ID Number<!-- /ID-nommer --></label>
											<div class="col-sm-10" style="margin-top:5px">
												<input type="text"  name="id_number" id="id_number" class="form-control" value="{{$Testator[0]->id_number}}" placeholder="ID Number" required>
											</div>
							        </div>

                                    
                                    <div class="form-group"  >
										<label class="col-sm-2 control-label">Residential Address<!-- /Woonadres --></label>
											<div class="col-sm-10">
											   <div  style="margin-top:5px">											   	
											   	   <input type="text" name="street_address" id="street_address" class="form-control" placeholder="Street Address/Straatadres" value="<?php if(isset($Testator[0])){$street_address=explode(":", $Testator[0]->street_address); echo $street_address[0];} ?>" required>
											   </div>

											   <div  style="margin-top:5px">											   	
											   	   <input type="text" name="street_address_line_two" id="street_address_line_two" class="form-control" placeholder="Street Address Line two" value="<?php if(isset($Testator[0])){$street_address=explode(":", $Testator[0]->street_address); if (isset($street_address[1])) {echo $street_address[1];} } ?>" required>
											   </div>
												
												<div  class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="city" id="city" class="form-control" placeholder="City" value="{{$Testator[0]->city}}" required>
											   </div>
											   <div  class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="province" id="province" class="form-control" placeholder="Province" value="{{$Testator[0]->province}}" required>
											   </div>

											   <div  class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="postal_code" id="postal_code" class="form-control" placeholder="Postal Code" value="{{$Testator[0]->postal_code}}" required>
											   </div>
											  <!--  <div  class="col-sm-6" style="margin-top:5px">								   	
											   	   @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Select Country', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
											   </div> -->

											</div>
							        </div>
							        <div class="form-group"  >
										<label class="col-sm-2 control-label">Addtional Details</label>
										   <div   class="col-sm-10">

									        <div class="col-sm-3" style="margin-top:5px">
											<input type="text" name="mobile_number" id="mobile_number" class="form-control" placeholder="Mobile Number" value="{{$Testator[0]->mobile_number}}" required>
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="email_number" id="email_number" class="form-control" placeholder="E-mail" value="{{$Testator[0]->email}}" required>
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="employer" id="employer" class="form-control" placeholder="Name of Employer" value="{{$Testator[0]->name_of_employer}}" required>
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="occupation" id="occupation" class="form-control" placeholder="Occupation" value="{{$Testator[0]->occupation}}" required>
											</div>
										   	
  										   </div>
											
							        </div>

							        <div>
							        	 <button type="submit" class="btn btn-primary btn-rounded"  style="margin-top:5px; float: right;">Next</button> 
							        </div>
                                   
							     </div>	

				     </div>	

				     @else


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
												<input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" required>
											</div>
											<div class="col-sm-5" style="margin-top:5px">
												<input type="text" name="second_name" id="second_name" class="form-control" placeholder="Surname" required>
											</div>
							        </div>

							        <div class="form-group"  >
										<label class="col-sm-2 control-label">ID Number/ID-nommer</label>
											<div class="col-sm-10" style="margin-top:5px">
												<input type="text" name="id_number" id="id_number" class="form-control" placeholder="ID Number" required>
											</div>
							        </div>

                                    
                                    <div class="form-group"  >
										<label class="col-sm-2 control-label">Residential Address/Woonadres</label>
											<div class="col-sm-10">
											   <div  style="margin-top:5px">											   	
											   	   <input type="text" name="street_address" id="street_address" class="form-control" placeholder="Street Address" required>
											   </div>

											   <div  style="margin-top:5px">											   	
											   	   <input type="text" name="street_address_line_two" id="street_address_line_two" class="form-control" placeholder="Street Address Line two" required>
											   </div>
												
												<div  class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="city" id="city" class="form-control" placeholder="City/Stad" required>
											   </div>
											   <div  class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="province" id="province" class="form-control" placeholder="Province" required>
											   </div>

											   <div  class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="postal_code" id="postal_code" class="form-control" placeholder="Postal Code" required>
											   </div>
											   <!-- <div  class="col-sm-6" style="margin-top:5px">								   	
											   	   @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Select Country', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
											   </div> -->

											</div>
							        </div>
							        <div class="form-group"  >
										<label class="col-sm-2 control-label">Addtional Details</label>
										   <div   class="col-sm-10">

									        <div class="col-sm-3" style="margin-top:5px">
											<input type="text" name="mobile_number" id="mobile_number" class="form-control" placeholder="Mobile Number" required>
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="email_number" id="email_number" class="form-control" placeholder="E-mail" required>
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="employer" id="employer" class="form-control" placeholder="Name of Employer" required>
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="occupation" id="occupation" class="form-control" placeholder="Occupation" required>
											</div>
										   	
  										   </div>
											
							        </div>

							        <div>
							        	 <button type="submit" class="btn btn-primary btn-rounded"  style="margin-top:5px; float: right;">Next</button> 
							        </div>
                                   
							     </div>	

				     </div>	

				      @endif					
              

			</div>						
   </form>

   <script language="javascript" type="text/javascript">
function uncheckSingle(obj)
        {
        	//alert("single");
            if (obj.checked == true)
            {
                document.getElementById("single").checked = false;
            }
        }
 function uncheckjoint(obj)
        {
        	//alert("joint");
            if (obj.checked == true)
            {
                document.getElementById("joint").checked = false;
            }
        } 

 function uncheckEnglish(obj)
        {
        	//alert("single");
            if (obj.checked == true)
            {
                document.getElementById("english").checked = false;
            }
        }
 function uncheckAfrikaans(obj)
        {
        	//alert("joint");
            if (obj.checked == true)
            {
                document.getElementById("africans").checked = false;
            }
        }                   
</script>

@stop