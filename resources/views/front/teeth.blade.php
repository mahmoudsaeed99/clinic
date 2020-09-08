
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

<div class="col-md-8">
    <div class="row " style="background-color: teal;">
        <div class="col-md-3">
            <img src="images/—Pngtree—baby teeth_3355819.png" class="w-50">
        </div>
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
@endsection
    <div class="colorList col-md-12 mt-3 row">
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
    <div class="container-fluid mt-3">
        <form method="GET" class="container-fluid teethOperator">
            <div class="row d-flex justify-content-center mb-5">

                <div class="m-1 test" style="width: 4.5%; height: 40px;">
                    <img src="images/1.png" id="1" class="img w-100" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height:40px;">
                    <img src="images/2.png" id="2" class="img w-100" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px;">
                    <img src="images/3.png" id="3" class="img w-100" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/4.png" id="4" class="img w-100" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/5.png" id="5" class="img" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/6.png" id="6" class="img" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/7.png" id="7" class="img" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/8.png" id="8" class="img" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/9.png" id="9" class="img" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/10.png" id="10" class="img" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/11.png" id="11" class="img" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/12.png" id="12" class="img" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/13.png" id="13" class="img" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/14.png" id="14" class="img" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/15.png" id="15" class="img" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/16.png" id="16" class="img" alt="">
                </div>
            </div>
            <div class="row d-flex justify-content-center mb-5 " style="margin-top: 105px;">

                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/17.png" class="img" id="17" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/18.png" class="img" id="18" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/19.png" class="img" id="19" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/20.png" class="img" id="20" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/21.png" class="img" id="21" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/22.png" class="img" id="22" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/23.png" class="img" id="23" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/24.png" class="img" id="24" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/25.png" class="img" id="25" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/26.png" class="img" id="26" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/27.png" class="img" id="27" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/28.png" class="img" id="28" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/29.png" class="img" id="29" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/30.png" class="img" id="30" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/31.png" class="img" id="31" alt="">
                </div>
                <div class="m-1 test" style="width: 4.5%; height: 40px; ">
                    <img src="images/32.png" class="img" id="32" alt="">
                </div>
            </div>

            <!-- <div class="d-flex justify-content-center mt-4 ">
                <button type="submit" class="btn btn-outline-primary">submit</button>
            </div> -->
        </form>
    </div>
    
@endsection
