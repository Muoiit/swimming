@extends('layouts.admin');
@section('title','Cập nhật Center')

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
                                 <h4 class="card-title">Cập nhật Center</h4>
                                <h6 class="card-subtitle"></h6>
                            {!! Form::model($center,['method'=>'PATCH', 'action'=> ['AdminCenterController@update',$center->id],'class'=>'form','files'=>true]) !!}
                             
                                    <div class="form-group m-t-40 row">                                      
                                        {!! Form::label('intro', 'Intro',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">                                            
                                            {!! Form::text('intro', $center->intro, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        {!! Form::label('description', 'Description',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">
                                            {!! Form::textarea('description', $center->description, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {!! Form::label('hotline', 'Hotline',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">
                                            {!! Form::text('hotline', $center->hotline, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                         {!! Form::label('timeopen', 'Timeopen',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">
                                            {!! Form::text('timeopen', $center->timeopen, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>                                                           
                                   

                                    <div class="form-group row">
		                                   {!! Form::label('image', 'Image',['class' => 'col-2 col-form-label']) !!}
		                                   {!! Form::file('image', null, ['class'=>'form-control'])!!}
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