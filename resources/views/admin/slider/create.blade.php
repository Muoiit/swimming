@extends('layouts.admin')
@section('title','Tạo Slider')

@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">            
               
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">                              
                                 <h4 class="card-title">Thêm Sliders</h4>
                                <h6 class="card-subtitle"></h6>
                            {!! Form::open(['method'=>'POST', 'action'=> 'AdminSlidersController@store','class'=>'form','files'=>true]) !!}
                             
                                    <div class="form-group m-t-40 row">                                      
                                        {!! Form::label('title', 'Title',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">                                            
                                            {!! Form::text('title', null, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {!! Form::label('slogan', 'Slogan',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">
                                            {!! Form::textarea('slogan', null, ['class'=>'form-control','rows' => 2])!!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {!! Form::label('description', 'Description',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">
                                            {!! Form::textarea('description', null, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>                                    
                                    
                                    <div class="form-group row">
		                                   {!! Form::label('imageslider_id', 'SliderImage',['class' => 'col-2 col-form-label']) !!}
		                                   {!! Form::file('imageslider_id', null, ['class'=>'form-control'])!!}
                                	</div>                                    
                                    
                                    <div class="button-group">		                                  
		                                    {!! Form::submit('Thêm Mới', ['class'=>'btn btn-rounded btn-primary col-sm-6']) !!}                                   
                                    </div>
                                </form>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
               
             
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->


@stop