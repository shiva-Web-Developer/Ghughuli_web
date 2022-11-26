@extends('frontend.layout.master')
@section('title') {{'नगर पंचायत घुघुली: महाराजगंज'}}
@endsection
@section('content')
<div class="page-title parallax parallax1" style="background-position: 50% 41px;">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="page-title-heading">
  
    <h1 class="title">

        @if(!empty($sub))
        {{$dddd}}
        @elseif(!empty($child))
        {{$ddddd}}
        @else
        {{$ddd}}
        @endif

    </h1>
    <div class="breadcrumbs">
    <ul>
    <li>You are here:</li>
    <li><a href="/">होम</a></li>
    <li>
        @if($sub=='' && $child=='')
       \ {{$ddd}}
        @elseif($child=='')
      \  {{$ddd}}  \ {{$dddd}}
        @else
         {{$ddd}}  \ {{$dddd}}  \ {{$ddddd}}
        @endif 
    </li>
  
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <section class="flat-row pad-top0px pad-bottom0px" style="background-color: #e0e0d1;">
        <br><br>

        <!-- Content Section -->
<div class="content-section about-page-section">
    <div class="spacing pt-40 pb-40">
      <div class="container">
      @if(!empty($scnt) && $scnt->con_type == 'Text')
        <div class="about-wrp">
          <div class="abt-bx">
            <div class="abt-thumb" style="height:620px;"> 
              @if($scnt->image)
              <img src="{{ url('/') }}/admin/content/{{ $scnt->image }}" alt="{{ $scnt->heading }}" style="height:400px;width:600px;"  class="img-fluid">
              @endif
             </div>
             <br>
            <div class="abt-us-2"> <span>{{$cat}}</span>
              <h2>{{ $scnt->heading }}</h2>
              <p>{!! $scnt->content !!} </p>
               </div>
          </div>
        </div>
        @elseif(!empty($scnt) && $scnt->con_type == 'Pdf')
        <div class="about-wrp">
        <table class="table">
          <thead class="thead-dark">
          <tr>
          <th> क्र. सं. </th>
          <th> विषय </th>
          <th> अपलोड की तिथि </th>
          <th> देखें/डाउनलोड </th>
  
          </tr>
          </thead>
          <tbody>
              @php
                  $v=1;
              @endphp
              @foreach($scntp as $sc)
          <tr>
          <td> {{ $v }} </td>
          <td> {{ $sc->heading ?? '' }} </td>
          <td> {{ $sc->created_at ?? '' }} </td>
          <td> <a href="{{ url('/') }}/admin/content/{{ $sc->image }}" download="download">Show/Download</a> </td>
  
          </tr>
          @php
              $v++;
          @endphp
             @endforeach
          </tbody>
          </table>
        </div>
        @else
        <div class="about-wrp">
        <h1 class="with-subtitle"> इस पेज की सामग्री जल्द ही उपलब्ध होगी।...... </h1>
  
        </div>
        @endif
      </div>
    </div>
    
  </div>
  <!--\\ Content Section -->
        
    <br><br>




        </section>

@endsection