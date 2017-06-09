@extends('layouts.admin');
@section('title','Hiển thị Slider')
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
                                <h4 class="card-title">Thông tin Slider</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                  @if(Session::has('create_Slider'))

                                  <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>
                                            {{session('create_Slider')}} 
                                   </div>

                                   @elseif(Session::has('update_slider'))
                                   <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3>
                                            {{session('update_slider')}} 
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
                                                <th>Images</th>
                                                <th>title</th>
                                                <th>slogan</th>
                                                <th>created_at</th>
                                                <th>updated_at</th>
                                                <th class="text-nowrap">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sliders as $slider)
                                            <tr>
                                                <td>{{$slider->id}}</td>
                                                <td>
                                                   <img height="50" src="{{$slider->image->file}}" alt="">
                                                </td>
                                                <td> {{$slider->title}}</a></td>
                                                <td>
                                                    {{$slider->slogan}}
                                                </td>
                                                <td>{{$slider->created_at}}</td>
              									<td>{{$slider->updated_at}}</td>
                                                <td class="text-nowrap">                                               
                                                    <a href="{{route('sliders.edit',$slider->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    
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

