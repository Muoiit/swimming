@extends('layouts.admin');
@section('title','Hiển thị Owner')
@section('content')

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Thông tin owner</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                  @if(Session::has('create_owner'))

                                  <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>
                                            {{session('create_owner')}} 
                                   </div>

                                   @elseif(Session::has('update_owner'))
                                   <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>
                                            {{session('update_owner')}} 
                                   </div>

                                    @elseif(Session::has('deleted_owner'))
                                   <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>
                                            {{session('deleted_owner')}} 
                                   </div>
							        @endif
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>logo</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>address</th>
                                                <th>phone</th>
                                                <th class="text-nowrap">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($owners as $owner)
                                            <tr>
                                                <td>{{$owner->id}}</td>
                                                <td>
                                                   <img height="50" src="/images/{{$owner->logo}}" alt="">
                                                </td>
                                                <td> {{$owner->name}}</a></td>
                                                <td>
                                                    {{$owner->email}}
                                                </td>
                                                <td>
                                                    {{$owner->address}}
                                                </td>
                                                <td>
                                                    {{$owner->phone}}
                                                </td>
                                                <td class="text-nowrap">
                                               
                                                    <a href="{{route('owners.edit',$owner->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    {!! Form::open(['method'=>'DELETE','action' => ['AdminOwnersController@destroy',$owner->id]]) !!}
                                                        
                                                      {!! Form::submit('Delete',['class' =>'btn btn-warning']) !!}                  
                                                        

                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>


       										@endforeach		
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->                  
                 
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
           
</div>



@stop

1461605675woman4.jpg