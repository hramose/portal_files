@extends('layouts.auth')

@section('page_title')
	Thank you
@stop

@section('section')
	    
<form role="form" method="POST">
	   {!! csrf_field() !!}
		<div class="form-content" >
		    <div class="panel-body">
										<div class="lorem">
											Thank you for registering with us. An email has been sent with the next steps you need to make to complete regisrering your will. 
										</div>
		</div>
		</div>
		<div class="media-body">
												<a href=""><h5 class="media-heading"></h5></a>
												<span class="timely pull-right text-muted"></span>
												Redirecting you to our main site ....
												<div class="comment-like"><a href=""><i class="fa fa-comments-o"></i></a><a href=""><i class="fa fa-heart text-danger"></i></a></div>
											</div>
	</form>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>



		<script type="text/javascript">
			$(document).ready(function(){
		       window.location.replace("http://www.ngomneestates.co.za/history/");
		  })
		</script>


@stop