@extends('layouts.auth')

@section('page_title')
	Register
@stop

@section('section')
	<form role="form" method="POST" action="/auth/register">
	  {!! csrf_field() !!}
		<div class="form-content">
			<div class="form-group">
				<input type="text" class="form-control input-underline input-lg" name="name"  id="name" placeholder={{ Lang::get(\Session::get('lang').'.fullname') }}>
			</div>

			<div class="form-group">
				<input type="text" class="form-control input-underline input-lg" name="email" id="email" placeholder={{ Lang::get(\Session::get('lang').'.email') }}>
			</div>

			<div class="form-group">
				<input type="password" class="form-control input-underline input-lg" name="password" id="password" placeholder={{ Lang::get(\Session::get('lang').'.password') }}>
			</div>
			<div class="form-group">
				<input type="password" class="form-control input-underline input-lg" name="password_confirmation" id="password_confirmation" placeholder={{ Lang::get(\Session::get('lang').'.repeatpass') }}>
			</div>
		</div>
		<input type="submit" class="btn btn-white btn-outline btn-lg btn-rounded progress-login" value="{{ Lang::get(\Session::get('lang').'.registerhere') }}"/>
		<a href="/login" class="btn btn-white btn-outline btn-lg btn-rounded">{{ Lang::get(\Session::get('lang').'.loginpage') }}</a>
	</form>
@stop

@section('js')

@stop