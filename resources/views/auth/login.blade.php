@extends('layouts.auth')

@section('page_title')
	Login
@stop

@section('section')
	<form role="form" method="POST" action="/auth/login">
	   {!! csrf_field() !!}
		<div class="form-content" >
			<div class="form-group">
				<input type="text" class="form-control input-underline input-lg" name="email" id="email" placeholder={{ Lang::get(\Session::get('lang').'.email') }}>
			</div>
			<div class="form-group">
				<input type="password" class="form-control input-underline input-lg" name="password" id="password" placeholder={{ Lang::get(\Session::get('lang').'.password') }}>
			</div>
		</div>
		<!-- <input type="submit" class="btn btn-white btn-outline btn-lg btn-rounded progress-login" value="{{ Lang::get(\Session::get('lang').'.login to complete your will') }}" /> -->
		<input type="submit" class="btn btn-white btn-outline btn-lg btn-rounded progress-login" value="{{'login to complete your will' }}" />
		&nbsp;
		&nbsp;
		<h4>Or</h4>
		<!-- <a href="/register" class="btn btn-white btn-outline btn-lg btn-rounded">{{ Lang::get(\Session::get('lang').'.register to start writting yor will') }}</a>  -->
		<a href="/register" class="btn btn-white btn-outline btn-lg btn-rounded">{{ 'register to write your will' }}</a> 
	</form>
@stop