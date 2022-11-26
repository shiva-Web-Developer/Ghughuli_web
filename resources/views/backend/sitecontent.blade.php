@extends('backend.layout.master')
@section('title') {{'Manage Site Content'}}
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

                                        <h4 class="card-title">Manage Site Content : - </h4>
                                    
                                    <form action="{{ route('uploadsitecontent') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Content Type</label>
                                            <div class="col-md-10">
                                                <select name="con_type" id="con_type" class="form-control">
                                                    <option selected="" value="">--Please Select Content Type--</option>
                                                    <option value="Text">Text Content</option>
                                                    <option value="Pdf">Pdf Download Content</option>
                                                </select>
                                            </div>
                                        </div>


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
                                                <div class="mb-3 row">
                                                    <div class="col-md-10">
                                                        <select id="sub_menu" class="form-control" name="sub_menu"></select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Child Menu Name</label>
                                            <div class="col-md-10">
                                                <select id="child_menu" class="form-control" name="child_menu" ></select>  
                                            </div>
                                        </div>


                                        <div class="mb-3 row" >
                                            <label for="example-text-input" class="col-md-2 col-form-label">Content Heading</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="heading"  placeholder="Content Heading" >
                                            </div>
                                        </div>

                                        
                                        <div class="mb-3 row" >
                                            <label for="example-text-input" class="col-md-2 col-form-label">Upload Related Image (Single Image Only) </label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" name="image"  >
                                            </div>
                                        </div>

                                        <div class="mb-3 row" id="showOne" >
                                            <label for="example-text-input" class="col-md-2 col-form-label">Text </label>
                                            <div class="col-md-10">
                                                {{-- <input class="form-control" type="text" name="textdata"  placeholder="Text" > --}}
                                                <textarea id="w3review" name="textdata" rows="4" cols="60"></textarea>
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
                                                                <h4 class="card-title">Manage Site Content : - </h4>
                                                                <div class="table-responsive">
                                                                    <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Serial No.</th>
                                                                                <th>Content Type</th>

                                                                                <th>Heading</th>
                                                                                <th>Main Cat</th>
                                                                                <th>Sub Cat</th>
                                                                                <th>Child Cat</th>
                                                                                <th>Content</th>
                                                                               
                                                                                <th>Image</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                        
                                                                        </thead>

                                                                       
                                                                        <tbody>
                                                                            <?php $sr = 1 ; ?>
                                                                            @foreach($Sitecontent as $Sitecontent)
                                                                                <tr>
                                                                                <td><?php echo $sr++; ?></td>
                                                                                <td>{{$Sitecontent->con_type}}</td>

                                                                                <td>{{$Sitecontent->heading}}</td>
                                                                                <td>{{$Sitecontent->main_cat}}</td>
                                                                                <td>{{$Sitecontent->sub_cat}}</td>
                                                                                <td>{{$Sitecontent->child_cat}}</td>
                                                                                <td>{{$Sitecontent->content}}</td>
                                                                                <td><img src="{{url('/')}}/admin/content/{{$Sitecontent->image}}" height="70" width="70"></td>
                                                                                <td>
                                                                                
                                                                                        <a href="#" data-toggle="modal" data-target="#myModal{{$Sitecontent->id}}" >Edit</a><br>
                                                                                    

                                                                               
                                                                                      <!-- The Modal -->
  <div class="modal fade" id="myModal{{$Sitecontent->id}}">
	<div class="modal-dialog">
		<div class="modal-content">

				<div class="modal-header">
					<h3 class="modal-title">Update Content</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
                        <form action="{{route('contentupdatedtata')}}" method="post" enctype="multipart/form-data"> 
                            @csrf

						<div class="form-group">
							<input type="hidden" name="user_id" value="{{$Sitecontent->id}}"/>
                            <div class="form-group">
							<label>Content Type</label>
                            <select name="con_type"  class="form-control">
                                <option selected="" value="">--Please Select Content Type--</option>
                                <option value="Text">Text Content</option>
                                <option value="Pdf">Pdf Download Content</option>
                            </select>
							{{-- <input type="text" style="width:100%;" name="con_type" value="{{$Sitecontent->con_type}}" class="form-control" required="required" /> --}}
                            </div>
					</div><br>

                    <div class="form-group">
                        <div class="form-group">
                        <label>Content Heading</label>
                        <input type="text" style="width:100%;" name="heading" value="{{$Sitecontent->heading}}" class="form-control" required="required" />
                        </div>
                </div><br>


                <div class="form-group">
                    <input type="hidden" name="user_id" value="{{$Sitecontent->id}}"/>
                    <div class="form-group">
                    <label>Content</label>
                    <input type="text" style="width:100%;" name="textdata" value="{{$Sitecontent->content}}" class="form-control" required="required" />
                    </div><br>
            </div>

            <div class="form-group">
                <label>Image</label><br>
                <img src="{{url('/')}}/admin/content/{{$Sitecontent->image}}" height="60" width="60" ><br>
                <input type="hidden"name="oldimg" value="{{$Sitecontent->image}}">
                <input type="file" name="newimg" class="filestyle" data-buttontext="Select file" data-buttonname="btn-default">
            </div>


				</div>
			
				<div class="modal-footer">
					<button name="update" class="btn btn-primary" type="submit"><span>&#10004;</span> Update</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>

		</div>
	</div>
  </div>
           <!-- The Modal -->
                                                                                    <a href="{{url('/')}}/dddcelete/{{$Sitecontent->id}}" class="delete" onclick="return confirm('are you sure !')">Delete</a>
                                                                                </td>
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
                        $('#con_type').on('change', function(){
                            var con_type = $('#con_type').val();
                            // alert(con_type);
         
        
                            if(con_type=='Text')
                            {
                                $('#showOne').show();
                                $('#showtne').hide();
                            }
                            else
                            {
                                $('#showtne').show();
                                $('#showOne').hide();
                            } 
                        });
                    });
                    </script>

                <!-- End Page-content -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function(){

                        var main_menu;

                        $('#main_menu').on('change', function(){
                                main_menu = $('#main_menu').val();
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
                                $("#sub_menu").append('<option value="' + value.id + '">' + value.sub_name + '</option>');
                                        });
                                    }
                                });
                            });


                            $('#sub_menu').on('change', function(){
                            var sub_menu = $('#sub_menu').val();
                            // alert(sub_menu);
                                $.ajax({
                                url: "{{url('admin/api/fetch-childmenu')}}",
                                type: "POST",
                                data: {
                                main_menu: main_menu,
                                sub_menu: sub_menu,
                                _token: '{{csrf_token()}}'
                                        },
                                dataType: 'json',
                                success: function (result) {
                                $('#child_menu').html('<option value="">Select Name</option>');
                                $.each(result.childmenu, function (key, value) {
                                $("#child_menu").append('<option value="' + value.id + '">' + value.child_menu + '</option>');
                                        });
                                    }
                                });
                            });


                        });
                    </script>

{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection