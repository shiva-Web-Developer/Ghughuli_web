@extends('frontend.layout.master')
@section('title') {{'नगर पंचायत घुघुली: महाराजगंज'}}
@endsection
@section('content')
<div class="page-title parallax parallax1" style="background-position: 50% 41px;">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="page-title-heading">
    <h1 class="title">फोटो गैलरी</h1>
    <div class="breadcrumbs">
    <ul>
    <li>You are here:</li>
    <li><a href="index.html">होम</a></li>
    <li>\ फोटो गैलरी</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <section class="flat-row pad-top0px pad-bottom0px" style="background-color: #e0e0d1;">
        <br><br>
        <div class="container">
        <div class="row">
      
        <div class="col-md-12">
        <div class="flat-clients">
    
    @foreach($getphoto as $getphoto)        
        <div class="clients-featured" style="border:1px solid gray;border-bottom:5px solid #007780;">
        <img src="{{url('/')}}/admin/photo/{{$getphoto->image}}"  alt="images" style="height:200px;width:100%;">
        </div>
    @endforeach
    
    
        </div>
        </div>
        </div>
        </div>
        
    <br><br>
        </section>

@endsection