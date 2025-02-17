
@extends('front.layout.front')
@section('buttons')
<li class="nav-item active">
    <a class="nav-link" href="{{url('patient/profile/'.$patient->id)}}">profile <span class="sr-only">(current)</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="{{url('patient/teeth/'.$patient->id)}}">teeth <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="{{url('patient/images/'.$patient->id)}}">images <span class="sr-only">(current)</span></a>
</li> 
@endsection
@section('title')
    teeth
@endsection
@section('content')

@section('nav')

<h3 style="display: none;" id="patientID">{{$patient->id}}</h3>
<div class="col-md-8">
    <div class="p-3 mb-2  text-white " style="background-color: #4ea8de;">
        <!-- <div class="col-md-3">
            <img src="images/—Pngtree—baby teeth_3355819.png" class="w-50">
        </div> -->
        <div class="col-md-9 mt-5" style="color: white;">
            <div class="row mb-3">

                <label for="" class="col-md-1">Name:</label>
                <label for="" class="col-md-5">{{$patient->name}}</label>
                <label for="" class="col-md-1">age:</label>
                <label for="" class="col-md-5">{{$patient->age}}</label>
                <label for="" class="col-md-1">mobile:</label>
                <label for="" class="col-md-5">{{$patient->mobile}}</label>
                <label for="" class="col-md-2">heart :</label>
                <label for="" class="col-md-4">
                    @if($patient->heart == 1)
                        yes
                    @else
                        no
                    
                    @endif</label>
                <label for="" class="col-md-2">diabetes :</label>
                <label for="" class="col-md-4">
                    @if($patient->diabetes == 1)
                        yes
                    @else
                        no
                    
                    @endif</label>
                <label for="" class="col-md-2">allergy :</label>
                <label for="" class="col-md-4">
                    @if($patient->allergy == 1)
                        yes
                    @else
                        no
                    
                    @endif</label>
                <label for="" class="col-md-2">	bleed :</label>
                <label for="" class="col-md-4">
                    @if($patient->bleed == 1)
                        yes
                    @else
                        no
                    
                    @endif</label>
                <label for="" class="col-md-2">	note :</label>
                <label for="" class="col-md-4">
                    {{$patient->note}}</label>
            </div>
        </div>
    </div>
    
</div>   
{{-- php dd($upper)  --}}
@endsection
    <div class="colorList container m-auto row">
        <div class="d-flex justify-content-center m-2"
            style=" width: 100px; background-color: #f8b6a8; height: 25px; color: white;">Restoration 1</div>
        <div class="d-flex justify-content-center m-2"
            style=" width: 100px;background-color: yellow; height: 25px; color: black;">Veneer 2</div>
        <div class="d-flex justify-content-center m-2"
            style=" width: 100px;background-color: #a7e8c8; height: 25px; color: white;">Crown 3</div>
        <div class="d-flex justify-content-center m-2"
            style=" width: 100px;background-color: #00d2ff; height: 25px; color: white;">Abutment 4</div>
        <div class="d-flex justify-content-center m-2"
            style=" width: 100px;background-color: #000232; height: 25px; color: white;">Pontic 5</div>
        <div class="d-flex justify-content-center m-2"
            style=" width: 100px;background-color: #e69f31; height: 25px; color: white;">Implant 6</div>
        <div class="d-flex justify-content-center m-2"
            style=" width: 100px;background-color: #0bcd74; height: 25px; color: white;">R.C.T 7</div>
        <div class="d-flex justify-content-center m-2"
            style=" width: 100px;background-color:#620062; height: 25px; color: white;">Abscess 8</div>
        <div class="d-flex justify-content-center m-2"
            style=" width: 100px;background-color:#e69f31; height: 25px; color: white;">Apicectomy 9</div>
        <div class="d-flex justify-content-center m-2"
            style=" width: 100px;background-color:#abacab; height: 25px; color: white;">Impacted 10</div>
        <div class="d-flex justify-content-center m-2"
            style=" width: 100px;background-color:#FF1493; height: 25px; color: white;">Extraction 11</div>
    </div>
   
    <div class="container-fluid mt-3 ">
        <form method="GET" class="container-fluid teethOperator">
            <div class="row d-flex justify-content-center mb-5">

                <div class="m-2 test" style="width: 4.5%; height: 40px;  ">
                    <img src="{{asset('images/one.png')}}" id="1" class="img w-100" style="background-color: <?php echo($upper->one) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height:40px;">
                    <img src="{{asset('images/two.png')}}" id="2" class="img w-100" style="background-color: <?php echo($upper->two)?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px; ">
                    <img src="{{asset('images/three.png')}}" id="3" class="img w-100" style="background-color: <?php echo($upper->three) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;  ">
                    <img src="{{asset('images/four.png')}}" id="4" class="img w-100" style="background-color: <?php echo($upper->four) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;  ">
                    <img src="{{asset('images/five.png')}}" id="5" class="img" style="background-color: <?php echo($upper->five) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;  ">
                    <img src="{{asset('images/six.png')}}" id="6" class="img" style="background-color: <?php echo($upper->six) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;  ">
                    <img src="{{asset('images/seven.png')}}" id="7" class="img" style="background-color: <?php echo($upper->seven) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;  ">
                    <img src="{{asset('images/eight.png')}}" id="8" class="img" style="background-color: <?php echo($upper->eight) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;  ">
                    <img src="{{asset('images/nine.png')}}" id="9" class="img" style="background-color: <?php echo($upper->nine) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;  ">
                    <img src="{{asset('images/ten.png')}}" id="10" class="img" style="background-color: <?php echo($upper->ten) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;  ">
                    <img src="{{asset('images/eleven.png')}}" id="11" class="img" style="background-color: <?php echo($upper->eleven) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;  ">
                    <img src="{{asset('images/twelve.png')}}" id="12" class="img" style="background-color: <?php echo($upper->twelve) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;  ">
                    <img src="{{asset('images/thirteen.png')}}" id="13" class="img" style="background-color: <?php echo($upper->thirteen) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;">
                    <img src="{{asset('images/fourteen.png')}}" id="14" style="background-color:<?php echo ($upper->fourteen)?> ;" class="img" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;  ">
                    <img src="{{asset('images/fifteen.png')}}" id="15" class="img" style="background-color: <?php echo($upper->fifteen) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px; ">
                    <img src="{{asset('images/sixteen.png')}}" id="16" class="img" style="background-color: <?php echo($upper->sixteen) ?>;" alt="">
                </div>
            </div>
            
            <div class="row d-flex justify-content-center mb-5 " style="margin-top: 105px;">

                <div class="m-2 test" style="width: 4.5%; height: 40px; background-color: '{{$lower->seventeen}}'; ">
                    <img src="{{asset('images/seventeen.png')}}" class="img" id="17" style="background-color: <?php echo($lower->seventeen) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px; background-color: '{{$lower->eighteen}}'; ">
                    <img src="{{asset('images/eighteen.png')}}" class="img" id="18" style="background-color: <?php echo($lower->eighteen)?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px; ">
                    <img src="{{asset('images/nineteen.png')}}" class="img" id="19" style="background-color: <?php echo($lower->nineteen) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px; background-color:'{{$lower->twenty}}';">
                    <img src="{{asset('images/twenty.png')}}" class="img" id="20" style="background-color: <?php echo($lower->twenty) ?>;" alt="20">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px; background-color:'{{$lower->twentyone}}';">
                    <img src="{{asset('images/twentyone.png')}}" class="img" id="21" style="background-color: <?php echo($lower->twentyone) ?>;" alt="21">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;">
                    <img src="{{asset('images/twentytwo.png')}}" class="img" id="22" style="background-color: <?php echo($lower->twentytwo) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px ">
                    <img src="{{asset('images/twentythree.png')}}" class="img" id="23" style="background-color: <?php echo($lower->twentythree) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;">
                    <img src="{{asset('images/twentyfour.png')}}" class="img" id="24" style="background-color: <?php echo($lower->twentyfour) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;">
                    <img src="{{asset('images/twentyfive.png')}}" class="img" id="25" style="background-color: <?php echo($lower->twentyfive) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px; ">
                    <img src="{{asset('images/twentysix.png')}}" class="img" id="26" style="background-color: <?php echo($lower->twentysix) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px ">
                    <img src="{{asset('images/twentyseven.png')}}" class="img" id="27" style="background-color: <?php echo($lower->twentyseven) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;">
                    <img src="{{asset('images/twentyeight.png')}}" class="img" id="28" style="background-color: <?php echo($lower->twentyeight) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px; ">
                    <img src="{{asset('images/twentynine.png')}}" class="img" id="29" style="background-color: <?php echo($lower->twentynine) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px; ">
                    <img src="{{asset('images/thirty.png')}}" class="img" id="30" style="background-color: <?php echo($lower->thirty) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px;">
                    <img src="{{asset('images/thirtyone.png')}}" class="img" id="31" style="background-color: <?php echo($lower->thirtyone) ?>;" alt="">
                </div>
                <div class="m-2 test" style="width: 4.5%; height: 40px; ">
                    <img src="{{asset('images/thirtytwo.png')}}" class="img" id="32" style="background-color: <?php echo($lower->thirtytwo) ?>;" alt="">
                </div>
            </div>

            <!-- <div class="d-flex justify-content-center mt-4 ">
                <button type="submit" class="btn btn-outline-primary">submit</button>
            </div> -->
        </form>
    </div>
    
@endsection
