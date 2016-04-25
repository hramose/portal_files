@extends('layouts.dashboard')
@section('section')
<div class="conter-wrapper">                
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Buttons       
                        <div class="panel-control pull-right">
                            <a class="panelButton"><i class="fa fa-refresh"></i></a>
                            <a class="panelButton"><i class="fa fa-minus"></i></a>
                            <a class="panelButton"><i class="fa fa-remove"></i></a>
                        </div>
                    </h3>
                </div>
                <div class="panel-body">
                    <p>
                    <button type="button" class="btn btn-default btn-rounded">Default Button</button> 
                    <button type="button" class="btn btn-primary btn-rounded">Primary Button</button> 
                    <button type="button" class="btn btn-success btn-rounded">Success Button</button> 
                    <button type="button" class="btn btn-info btn-rounded">Info Button</button> 
                    <button type="button" class="btn btn-warning btn-rounded">Warning Button</button> 
                    <button type="button" class="btn btn-danger btn-rounded">Danger Button</button> 
                    </p>
                <hr>
                    <p>
                   <button type="button" class="btn btn-default">Default Button</button> 
                    <button type="button" class="btn btn-primary">  Primary Button</button> 
                    <button type="button" class="btn btn-success">Success Button</button> 
                    <button type="button" class="btn btn-info">Info Button</button> 
                    <button type="button" class="btn btn-warning">Warning Button</button> 
                    <button type="button" class="btn btn-danger">Danger Button</button> 
                    </p>
                <hr>
                    <p>
                    <button type="button" class="btn btn-info btn-outline btn-rounded">Info Button</button> 
                    <button type="button" class="btn btn-primary btn-outline btn-rounded">Primary Button</button> 
                    <button type="button" class="btn btn-success btn-outline btn-rounded">Success Button</button> 
                    <button type="button" class="btn btn-warning btn-outline btn-rounded">Warning Button</button> 
                    <button type="button" class="btn btn-danger btn-outline btn-rounded">Danger Button</button> 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Button Sizes          
                        <div class="panel-control pull-right">
                            <a class="panelButton"><i class="fa fa-refresh"></i></a>
                            <a class="panelButton"><i class="fa fa-minus"></i></a>
                            <a class="panelButton"><i class="fa fa-remove"></i></a>
                        </div>
                    </h3>
                </div>
                <div class="panel-body">
                    <p>
                        <button type="button" class="btn btn-danger btn-rounded btn-xs">Extra Small Button</button> 
                    </p>
                    <p>
                        <button type="button" class="btn btn-success btn-rounded btn-sm">Small Button</button> 
                    </p>
                    <p>
                        <button type="button" class="btn btn-info btn-rounded btn-lg">Large Button</button> 
                    </p>
                    <p>    
                        <button type="button" class="btn btn-warning btn-block btn-rounded">Block Level Button</button> 
                    </p>
                </div>
            </div>
        </div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Button Groups         
                            <div class="panel-control pull-right">
                                <a class="panelButton"><i class="fa fa-refresh"></i></a>
                                <a class="panelButton"><i class="fa fa-minus"></i></a>
                                <a class="panelButton"><i class="fa fa-remove"></i></a>
                            </div>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>
                        </p><div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Primary Button</button>
                        <button type="button" class="btn btn-default">Default Button</button>
                    </div>
                    <p></p>
                    <hr>    
                    <h4>Justified Button Groups</h4>
                    <p>
                    </p>
                    <div class="btn-group btn-group-justified" role="group">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary">Primary </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-info">Info</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-warning">Warning</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-danger">Danger</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Buttons with Icons        
                        <div class="panel-control pull-right">
                            <a class="panelButton"><i class="fa fa-refresh"></i></a>
                            <a class="panelButton"><i class="fa fa-minus"></i></a>
                            <a class="panelButton"><i class="fa fa-remove"></i></a>
                        </div>
                    </h3>
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-twitter"></i></button>
                    <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-facebook"></i></button>
                    <button type="button" class="btn btn-warning btn-rounded">Download&nbsp;&nbsp;<i class="fa fa-download"></i></button>
                    <button type="button" class="btn btn-success btn-bordered"><i class="fa fa-plus"></i>&nbsp;&nbsp;View More</button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-phone"></i>&nbsp;&nbsp;Call Us!</button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop