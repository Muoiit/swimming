@extends('layouts.admin');
@section('title','Tạo thông tin owner')

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
                                 <h4 class="card-title">Thêm thông tin owner</h4>
                                <h6 class="card-subtitle"></h6>
                            {!! Form::open(['method'=>'POST', 'action'=> 'AdminOwnersController@store','class'=>'form','files'=>true]) !!}
                             
                                    <div class="form-group m-t-40 row">                                      
                                        {!! Form::label('name', 'Name',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">                                            
                                            {!! Form::text('name', null, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {!! Form::label('email', 'Email',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">
                                            {!! Form::text('email', null, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {!! Form::label('phone', 'Phone',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">
                                            {!! Form::text('phone', null, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                         {!! Form::label('address', 'Address',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">
                                            {!! Form::text('address', null, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>                                    
                                    <div class="form-group row">
                                         {!! Form::label('facebook', 'Link facebook',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">
                                            {!! Form::text('facebook', null, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                         {!! Form::label('twitter', 'Link Twitter',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">
                                            {!! Form::text('twitter', null, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                         {!! Form::label('youtube', 'Link Youtube',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">
                                            {!! Form::text('youtube', null, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                          {!! Form::label('googleplus', 'Link Google+',['class' => 'col-2 col-form-label']) !!}
                                        <div class="col-10">
                                            {!! Form::text('googleplus', null, ['class'=>'form-control'])!!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
		                                   {!! Form::label('logo', 'Logo',['class' => 'col-2 col-form-label']) !!}
		                                   {!! Form::file('logo', null, ['class'=>'form-control'])!!}
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
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->


@stop