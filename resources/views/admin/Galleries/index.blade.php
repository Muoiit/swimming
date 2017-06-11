@extends('layouts.admin');
@section('title','Hiển thị Gallery')
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
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>image</th>
                                                <th class="text-nowrap">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($photos as $photo)
                                            <tr>
                                                <td>{{$photo->id}}</td>
                                                <td>
                                                   <img height="50" src="{{$photo->file}}" alt="">
                                                </td>                                               
                                                <td class="text-nowrap">
                                               
                                                    <a href="{{route('galleries.edit',$photo->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    
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

