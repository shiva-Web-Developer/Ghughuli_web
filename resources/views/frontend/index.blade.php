@extends('frontend.layout.master')
@section('title') {{'नगर पंचायत घुघुली: महाराजगंज'}}
@endsection
@section('content')
<div class="tp-banner-container">
<div class="tp-banner">
<ul>

@foreach($getslider as $getslider)
<li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
<img src="{{url('/')}}/admin/sliders/{{$getslider->image}}" alt="slider-image" />
</li>
@endforeach

</ul>
</div>
</div>


<section class="flat-row pad-top0px pad-bottom0px" style="background-color: #e0e0d1;">
    <br><br>
    <div class="container">
    <div class="row">
  
    <div class="col-md-12">
    <div class="flat-clients">

@foreach($getofficer as $getofficer)        
    <div class="clients-featured" style="border:1px solid gray;border-bottom:5px solid #007780;">
    <img src="{{url('/')}}/admin/officer/{{$getofficer->image}}" title="{{$getofficer->deg}}" alt="images" style="height:200px;width:100%;">
    <h4 style="font-size: 18px;color: #ffb100;line-height: 21px;text-align: center;font-weight: 700;margin: 0;">{{$getofficer->name}}</h4>
    <div style="background: #ffc300;color: #FFFFFF;text-align:center;padding: 10px 0;">
        <h4>{{$getofficer->deg}}</h4>
      </div>
    </div>
@endforeach


    </div>
    </div>
    </div>
    </div>
    
<br><br>
    </section> 



<section style="background-color: #e0e0d1;">
    <br><br>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <img src="{{url('assets/images/about/Sugar_Factory.Jpg')}}" alt="images" style="height:300px;border-bottom:5px solid #007780;">
     
        </div>
        <div class="col-md-6">
        <div class="main-text">
        <h3>नगर पालिका परिषद् घुघुली</h3>
        <p>
            हम स्थायी शासन की वह संस्था हैं जिसे नगरीय स्थानीय निकाय कहते हैं। उत्तर प्रदेश में नगरीय स्थानीय निकायों की कई श्रेणी हैं और हमें नगर पंचायत प्रकार की स्थानीय निकाय के रूप में वर्गीकृत किया गया है। हम वह संस्था हैं जिसको हमारे लिए निर्धारित भौगोलिक क्षेत्र में जीवन जीने योग्य बनाने का आदेश मिला है। हमारा संगठन भारतीय संविधान के अनुसार संवैधानिक प्रबन्धों के अनुसार किया गया है। सन 1992 में संसद ने 74वें संशोधन घोषित किया जिसने हमारे अस्तित्व को एक रूप रेखा प्रदान की। उत्तर प्रदेश सरकार अधिनियमों में आवश्यक परिवर्तन करके स्थानीय निकाय पर शासन कर रही है।
            </p>
        </div>

    </div>
        </div>
        </div>
        <br><br>
</section>

<br><br>
        <section class="flat-row pad-top0px pad-bottom0px">
            <div class="container">
            <div class="row">
                <h4 class="text-center"><b>महत्वपूर्ण वेबसाइट</b></h4>
                <br><br>
            <div class="col-md-12">
            <div class="flat-clients">
            <div class="clients-featured">
            <img src=" {{url('assets/images/client/1.png')}}" alt="images" style="border:1px solid silver;height:70px;width:200px;">
            </div>
            <div class="clients-featured">
            <img src="{{url('assets/images/client/2.png')}}" alt="images" style="border:1px solid silver;height:70px;width:200px;">
            </div>
            <div class="clients-featured">
            <img src="{{url('assets/images/client/3.jpg')}}" alt="images" style="border:1px solid silver;height:70px;width:200px;">
            </div>
            <div class="clients-featured">
            <img src="{{url('assets/images/client/4.jpg')}}" alt="images" style="border:1px solid silver;height:70px;width:200px;">
            </div>
            <div class="clients-featured">
            <img src="{{url('assets/images/client/5.jpg')}}" alt="images" style="border:1px solid silver;height:70px;width:200px;">
            </div>

            <div class="clients-featured">
                <img src="{{url('assets/images/client/6.jpg')}}" alt="images" style="border:1px solid silver;height:70px;width:200px;">
                </div>

                <div class="clients-featured">
                    <img src="{{url('assets/images/client/7.png')}}" alt="images" style="border:1px solid silver;height:70px;width:200px;">
                    </div>
                    <div class="clients-featured">
                        <img src="{{url('assets/images/client/8.png')}}" alt="images" style="border:1px solid silver;height:70px;width:200px;">
                        </div>
               
            </div>
            <br>
            </div>
            </div>
            </div>
            </section>  






@endsection