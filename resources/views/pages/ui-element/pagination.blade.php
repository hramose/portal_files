@extends('layouts.dashboard')

@section('section')
<div class="conter-wrapper">                
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Breadcrumbs</h3>
                </div>
                <div class="panel-body">
                    <div class="clearfix">
                        <ol class="breadcrumb no-bg no-m-t">
                            <li class="active"><i class="fa fa-home"></i></li>
                            <li><a href="#">Library</a></li>
                            <li><a href="#">Home</a></li>
                        </ol>
                    </div>
                    <div class="line-h-ex"></div>
                    <div class="clearfix">
                        <ol class="breadcrumb pull-right no-bg m-t">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Library</a></li>
                            <li class="active"><i class="fa fa-home"></i></li>
                        </ol>
                    </div>
                    <div class="line-h-ex"></div>
                    <div class="clearfix">
                        <ol class="breadcrumb m-t no-m-b">
                            <li class="active"><i class="fa fa-home"></i></li>
                            <li><a href="#">Library</a></li>
                            <li><a href="#">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Pager</h3>
                </div>
                <div class="panel-body">
                    <div class="clearfix">
                        <ul class="pager no-m-t">
                            <li><a href="#">Previous</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Pagination</h3>
                </div>
                <div class="panel-body">
                    <div class="clearfix">
                        <div class="clearfix ">
                            <ul class="pagination-sm pagination">
                                <li ><a href="#">«</a></li>
                                <li ><a href="#">‹</a></li>
                                <li ><a href="#">1</a></li>
                                <li ><a href="#">2</a></li>
                                <li ><a href="#">3</a></li>
                                <li class="active"><a href="#">4</a></li>
                                <li ><a href="#">5</a></li>
                                <li ><a href="#">6</a></li>
                                <li ><a href="#">7</a></li>
                                <li ><a href="#">›</a></li>
                                <li ><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix text-center">
                        <div class="clearfix ">
                            <ul class="pagination-sm pagination">
                                <li><a href="#">«</a></li>
                                <li><a href="#">‹</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="active"><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">›</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix pull-right">
                        <div class="clearfix ">
                            <ul class="pagination-sm pagination">
                                <li><a href="#">«</a></li>
                                <li><a href="#">‹</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="active"><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">›</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="line-h-ex"></div>
                    <div class="clearfix text-center">
                        <pagination boundary-links="true" total-items="totalItems" class="pagination-sm" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;"></pagination>   
                    </div>
                    <div class="line-h-ex"></div>
                    <div class="clearfix pull-right no-m-b">
                        <pagination boundary-links="true" total-items="totalItems" class="pagination-sm" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;"></pagination> 
                    </div>
                </div>
            </div>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Pagination Sizes</h3>
                </div>
                <div class="panel-body">
                    <div class="clearfix">
                        <ul class="pagination pagination-lg no-m-t">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="line-h-ex"></div>
                    <div class="clearfix">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="line-h-ex"></div>

                    <div class="clearfix">
                        <ul class="pagination pagination-sm no-m-b">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop