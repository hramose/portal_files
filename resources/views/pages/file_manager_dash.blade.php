@extends('layouts.dashboard')
	
@section('section')

<button type="button" class="btn btn-success btn-rounded">Open New File</button>

                <div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Deceased Details		  
						<div class="panel-control pull-right">
							<a class="panelButton"><i class="fa fa-refresh"></i></a>
							<a class="panelButton"><i class="fa fa-minus"></i></a>
							<a class="panelButton"><i class="fa fa-remove"></i></a>
						</div>
					</h3>
				</div>
				<div class="panel-body">
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Last Name</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">ID Number</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Address </label>
								<input type="password" class="form-control" style="padding-bottom:15px" id="exampleInputPassword1" placeholder="Password">
								<input type="password" class="form-control" style="padding-bottom:15px" id="exampleInputPassword1" placeholder="Password">
								<input type="password" class="form-control" style="padding-bottom:15px" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>

			   </div> </div></div>

			    <div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Client Details		  
						<div class="panel-control pull-right">
							<a class="panelButton"><i class="fa fa-refresh"></i></a>
							<a class="panelButton"><i class="fa fa-minus"></i></a>
							<a class="panelButton"><i class="fa fa-remove"></i></a>
						</div>
					</h3>
				</div>
				<div class="panel-body">
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Last Name</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">ID Number</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Address </label>
								<input type="password" class="form-control" style="padding-bottom:15px" id="exampleInputPassword1" placeholder="Password">
								<input type="password" class="form-control" style="padding-bottom:15px" id="exampleInputPassword1" placeholder="Password">
								<input type="password" class="form-control" style="padding-bottom:15px" id="exampleInputPassword1" placeholder="Password">
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Cell Number</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Home Tell</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Work Tell</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Email</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>

			   </div> </div></div>		
		

@stop