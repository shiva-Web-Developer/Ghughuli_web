@extends('backend.layout.master')
@section('title') {{'Manage Officer Photo'}}
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

                                        <h4 class="card-title">Add Officer Photos : - </h4>
                                    
                                    <form action="{{ route('uploadofficer') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="name"  placeholder="Name" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Designation</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="deg"  placeholder="Designation" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Placing Position</label>
                                            <div class="col-md-10">
                                                <select name="position" class="form-control">
                                                    <option value="">Please Select Position</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                                {{-- <input class="form-control" type="text" name="Placing_Position"  placeholder="Placing Position" > --}}
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Select Image</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" name="image"   required>
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
                        
                                                                <h4 class="card-title">Manage Officer Photos : - </h4>
                                                            
                                                                <div class="table-responsive">
                                                                    <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Serial No.</th>
                                                                                <th>Name</th>
                                                                                <th>Designation</th>
                                                                                <th>Placing Position</th>
                                                                                <th>Image</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                        
                                                                        </thead>

                                                                       
                                                                        <tbody>
                                                                            <?php $sr = 1 ; ?>
                                                                            @foreach($getofficer as $getofficer)
                                                                                <tr>
                                                                                <td><?php echo $sr++; ?></td>
                                                                                <td>{{$getofficer->name}}</td>
                                                                                <td>{{$getofficer->deg}}</td>
                                                                                <td>{{$getofficer->position}}</td>
                                                                                <td><img src="{{url('/')}}/admin/officer/{{$getofficer->image}}" height="70" width="70"></td>
                                                                                <td><a href="{{url('/')}}/delete/{{$getofficer->id}}" class="delete" onclick="return confirm('are you sure !')">Delete</a></td>
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