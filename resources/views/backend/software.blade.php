@extends('backend.layout.master')
@section('title') {{'Manage Software'}}
@endsection
@section('content')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">WELCOME :- नगर पालिका परिषद घुघुली</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title  -->

                        <!-- start row  -->
                        <div class="row">
                            <div class="col-12">
                                @if(session('flashmessage'))
                                <div class="alert alert-success">{{session('flashmessage')}}</div>
                                @endif
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Add Software : - </h4>
                                    
                                    <form action="{{ route('uploadsoftware') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Software Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="software_name"  placeholder="Software Name" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Software Link (URL)</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="software_link"  placeholder="Software Link (URL)" >
                                            </div>
                                        </div>
                                 
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-10">
                                                <button class="btn btn-info form-control" type="submit">Submit</button>
                                            </div>
                                        </div>

                                        </form>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row  -->


                                                <!-- start row  -->
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                        
                                                                <h4 class="card-title">Manage Software : - </h4>
                                                            
                                                                <div class="table-responsive">
                                                                    <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Serial No.</th>
                                                                                <th>Software Name</th>
                                                                                <th>Software Link (URL)</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                        
                                                                        </thead>

                                                                       
                                                                        <tbody>
                                                                            <?php $sr = 1 ; ?>
                                                                            @foreach($getsoftware as $getsoftware)
                                                                                <tr>
                                                                                <td><?php echo $sr++; ?></td>
                                                                                <td>{{$getsoftware->name}}</td>
                                                                                <td>{{$getsoftware->subject}}</td>
                                                                                
                                                                                <td><a href="{{url('/')}}/delete/{{$getsoftware->id}}" class="delete" onclick="return confirm('are you sure !')">Delete</a></td>
                                                                            </tr>
                                                                            @endforeach
                                                                
                                                                             </tbody>
                                        
                                                                    </table>
                                                                </div>
                        
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row  -->
                   

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


@endsection