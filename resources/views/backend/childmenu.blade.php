@extends('backend.layout.master')
@section('title') {{'Manage Child Menu'}}
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

                                        <h4 class="card-title">Add Child Menu : - </h4>
                                    
                                    <form action="{{ route('uploadchildmenu') }}" method="post" >
                                        @csrf
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Main Menu Name</label>
                                            <div class="col-md-10">
                                                <select name="main_menu" id="main_menu" required="" class="form-control">
                                                    <option selected="" value="">--Please Select--</option>
                                                    @foreach($getmenu as $getmenu)
                                                    <option value="{{$getmenu->id}}">{{$getmenu->menu_name}}</option>
                                                    @endforeach
                                                  </select>
                                                
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Sub Menu Name</label>
                                            <div class="col-md-10">
                                             
                                                <select id="sub_menu" class="form-control" name="sub_menu" required=""></select>

                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Child Menu Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="child_menu"  placeholder="Child Menu Name" >
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
                        
                                                                <h4 class="card-title">Manage  Menu : - </h4>
                                                            
                                                                <div class="table-responsive">
                                                                    <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Serial No.</th>
                                                                                <th>Main Menu Name</th>
                                                                                <th>Sub	Menu Name</th>
                                                                                <th>Child Menu Name</th>
                                                                                <th>Created at</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php $sr = 1 ; ?>
                                                                            @foreach($getchildmenu as $getmenu)
                                                                                <tr>
                                                                                <td><?php echo $sr++; ?></td>
                                                                                <td>{{$getmenu->mainmenu}}</td>
                                                                                <td>{{$getmenu->submenu}}</td>
                                                                                <td>{{$getmenu->child_menu}}</td>
                                                                                <td>{{$getmenu->created_at}}</td>
                                                                                <td><a href="{{url('/')}}/dadhgjngmnsdfelete/{{$getmenu->id}}" class="delete" onclick="return confirm('are you sure !')">Delete</a></td>
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
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $('#main_menu').on('change', function(){
                            var main_menu = $('#main_menu').val();
                            // alert(main_menu);

                    $.ajax({
                    url: "{{url('admin/api/fetch-submenu')}}",
                    type: "POST",
                    data: {
                        main_menu: main_menu,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#sub_menu').html('<option value="">Select Name</option>');
                        $.each(result.submenu, function (key, value) {

                            $("#sub_menu").append('<option value="' + value
                                .id + '">' + value.sub_name + '</option>');
                        });
                    }
                });

                        });
                    });
                    </script>

@endsection