@extends('layouts.auth')

@section('page_title')
	Your will info with us. 
@stop

@section('section')
	<form role="form" method="POST" action="/auth/login">
	   {!! csrf_field() !!}
		<div class="form-content" >
		    <div class="panel-body">
										<div class="lorem">
											Your will information is with us. You may follow the steps in the email sent to you. For any queries contact support.
										</div>
		</div>
		</div>
		<!-- <input type="submit" class="btn btn-white btn-outline btn-lg btn-rounded progress-login" value="{{ Lang::get(\Session::get('lang').'.login to complete your will') }}" /> -->
		<input type="" class="btn btn-white btn-outline btn-lg btn-rounded progress-login" value="{{'<< Back' }}" />
		&nbsp;
		&nbsp;
		
	</form>
@stop