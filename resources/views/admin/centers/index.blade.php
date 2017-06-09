@extends('layouts.admin');
@section('title','Hiển thị thông tin Center')
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
                                <h4 class="card-title">Thông tin Center</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                  @if(Session::has('create_center'))

                                  <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>
                                            {{session('create_center')}} 
                                   </div>

                                   @elseif(Session::has('update_center'))
                                   <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>
                                            {{session('update_center')}} 
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
                                                <th>image</th>
                                                <th>intro</th>
                                                <th>hotline</th>
                                                <th>timeOpen</th>                                                
                                                <th class="text-nowrap">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($centers as $center)
                                            <tr>
                                                <td>{{$center->id}}</td>
                                                <td>
                                                   <img height="50" src="{{$center->image}}" alt="">
                                                </td>
                                                <td> {{$center->intro}}</a></td>
                                                <td>
                                                    {{$center->hotline}}
                                                </td>
                                                <td>
                                                    {{$center->timeopen}}
                                                </td>
                                                
                                                <td class="text-nowrap">
                                               
                                                    <a href="{{route('centers.edit',$center->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    
                                                    <!-- chua lam delete dau nhe -->
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

