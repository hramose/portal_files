@extends('layouts.dashboard')
@section('section')
	<pageheader pagename="Table" subtitle="Bootstrap UI Elements"></pageheader>
	<div class="conter-wrapper">				
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Regular Table		  
							<div class="panel-control pull-right">
								<a class="panelButton"><i class="fa fa-refresh"></i></a>
								<a class="panelButton"><i class="fa fa-minus"></i></a>
								<a class="panelButton"><i class="fa fa-remove"></i></a>
							</div>
						</h3>
					</div>
					<div class="panel-body">
						<table class="table ">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr>
									<td>Andy</td>
									<td>andygmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr>
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
							</tbody>
						</table>			
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Bordered Table		  
							<div class="panel-control pull-right">
								<a class="panelButton"><i class="fa fa-refresh"></i></a>
								<a class="panelButton"><i class="fa fa-minus"></i></a>
								<a class="panelButton"><i class="fa fa-remove"></i></a>
							</div>
						</h3>
					</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr>
									<td>Andy</td>
									<td>andygmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr>
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
							</tbody>
						</table>	
					</div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Striped Table		  
							<div class="panel-control pull-right">
								<a class="panelButton"><i class="fa fa-refresh"></i></a>
								<a class="panelButton"><i class="fa fa-minus"></i></a>
								<a class="panelButton"><i class="fa fa-remove"></i></a>
							</div>
						</h3>
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr>
									<td>Andy</td>
									<td>andygmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr>
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
							</tbody>
						</table>			
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Hover Table		  
							<div class="panel-control pull-right">
								<a class="panelButton"><i class="fa fa-refresh"></i></a>
								<a class="panelButton"><i class="fa fa-minus"></i></a>
								<a class="panelButton"><i class="fa fa-remove"></i></a>
							</div>
						</h3>
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr>
									<td>Andy</td>
									<td>andygmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr>
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
							</tbody>
						</table>			
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Condensed Table		  
							<div class="panel-control pull-right">
								<a class="panelButton"><i class="fa fa-refresh"></i></a>
								<a class="panelButton"><i class="fa fa-minus"></i></a>
								<a class="panelButton"><i class="fa fa-remove"></i></a>
							</div>
						</h3>
					</div>
					<div class="panel-body">
						<table class="table table-condensed">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr>
									<td>Andy</td>
									<td>andygmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr>
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
							</tbody>
						</table>			
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title">Condensed, Bordered, Striped Table		  
							<div class="panel-control pull-right">
								<a class="panelButton"><i class="fa fa-refresh"></i></a>
								<a class="panelButton"><i class="fa fa-minus"></i></a>
								<a class="panelButton"><i class="fa fa-remove"></i></a>
							</div>
						</h3>
					</div>
					<div class="panel-body">
						<table class="table table-condensed table-bordered table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr>
									<td>Andy</td>
									<td>andygmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr>
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
							</tbody>
						</table>			
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Coloured Table		  
							<div class="panel-control pull-right">
								<a class="panelButton"><i class="fa fa-refresh"></i></a>
								<a class="panelButton"><i class="fa fa-minus"></i></a>
								<a class="panelButton"><i class="fa fa-remove"></i></a>
							</div>
						</h3>
					</div>
					<div class="panel-body">
						<table class="table table-bordered white">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Address</th>
								</tr>
							</thead>
							<tbody>
								<tr class="success">
									<td>John</td>
									<td>john@gmail.com</td>
									<td>London, UK</td>
								</tr>
								<tr class="info">
									<td>Andy</td>
									<td>andy@gmail.com</td>
									<td>Merseyside, UK</td>
								</tr>
								<tr class="warning">
									<td>Frank</td>
									<td>frank@gmail.com</td>
									<td>Southampton, UK</td>
								</tr>
								<tr class="danger">
									<td>Rickie</td>
									<td>rickie@gmail.com</td>
									<td>Burnley, UK</td>
								</tr>
							</tbody>
						</table>	
					</div>
				</div>
			</div>
		</div>
	</div>
@stop