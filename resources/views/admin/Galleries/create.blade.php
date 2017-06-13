 @extends('layouts.admin')
 @section('title','Tao Gallery')

 @section('styles')

 <link href="{{asset('assets/plugins/dropzone-master/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
 
@stop

 @section('content')
  <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Forms Dropzone</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Form Dropzone</li>
                        </ol>
                    </div>
                   
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Dropzone</h4>
                                <h6 class="card-subtitle">For multiple file upload put class <code>.dropzone</code> to form.</h6>
                                 {!! Form::open(['method'=>'POST', 'action'=> 'AdminGallerisController@store', 'class'=>'dropzone']) !!}




    							{!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
          

        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->

 @endsection




 @section('script')

    <script src="{{asset('assets/plugins/dropzone-master/dist/dropzone.js')}}"></script>
    <!-- ============================================================== -->

 @endsection









