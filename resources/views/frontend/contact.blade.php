@extends('frontend.layout.master')
@section('title') {{'नगर पंचायत घुघुली: महाराजगंज'}}
@endsection
@section('content')
<div class="page-title parallax parallax1" style="background-position: 50% 41px;">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="page-title-heading">
    <h1 class="title">संपर्क करें</h1>
    {{-- <h1 class="title">नगर पंचायत घुघुली</h1> --}}
    <div class="breadcrumbs">
    <ul>
    <li>You are here:</li>
    <li><a href="index.html">होम</a></li>
    <li>\ संपर्क करें</li>
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
            @if(session('successmsg'))
            <div class="alert alert-success">{{session('successmsg')}}</div>
            @endif
            @if(session('dangermsg'))
            <div class="alert alert-danger">{{session('dangermsg')}}</div>
            @endif
            <div class="quick-form">
                <h3>संपर्क करें</h3>
                <form  method="post" action="{{route('consubmit')}}" >
                    @csrf
                <div class="row">
                <div class="col-md-6">
                <p><input name="name" type="text" value="" placeholder="Your Name" required="required"></p>
                <p><input id="email" name="email" type="email" value="" placeholder="Your Email" required="required"></p>
                <p><input id="email" name="number" type="number" value="" placeholder="Your Contact Number" required="required" style="width:100%;"></p>
            
                </div>
                <div class="col-md-6">
                <p><textarea name="message" placeholder="message" required="required"></textarea></p>
                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Send Message"></p>
                </div>
                </div>
                </form>
                </div>
        <div class="col-md-12">
        <div class="flat-clients">
    
   
    
    
        </div>
        </div>
        </div>
        </div>
        
    <br><br>
        </section>

@endsection