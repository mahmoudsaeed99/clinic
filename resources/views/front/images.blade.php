@extends('front.layout.front')
@section('title')
images
@endsection
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
@section('content')
@section('nav')
<h3 style="display: none;" id="patientID">{{$patient->id}}</h3>
<div class="col-md-8">

    <div class="p-3 mb-2 text-white " style="background-color: #4ea8de;">
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
                <label for="" class="col-md-2"> bleed :</label>
                <label for="" class="col-md-4">
                    @if($patient->bleed == 1)
                    yes
                    @else
                    no

                    @endif</label>
                <label for="" class="col-md-2"> note :</label>
                <label for="" class="col-md-4">
                    {{$patient->note}}</label>
            </div>
        </div>
    </div>


    @endsection
    @section('addImage')
    <nav class="navbar navbar-light bg-light">
        @include('front.inc.errors')
        <ul class="navbar-nav">
            <form action="{{url('patient/addImages')}}" method="post" enctype="multipart/form-data">
                @csrf
                <li class="nav-item">
                    <input type="hidden" name="id" value="{{$patient->id}}">
                    <input class="form-control-file" type="file" name="img">
                </li>
                <input class="btn btn-info" type="submit" value="submit">
            </form>

        </ul>
    </nav>
    @endsection

    <div class="container">
        @foreach ($patient->images as $item)

        <img class="imgList" src="{{asset('images/uploads/'.$item->img)}}" alt="">


        @endforeach


        <div class="display d-flex  justify-content-center">
            <img src="{{asset('images/uploads/test.png')}}" class="w-75  imgDis " alt="">

        </div>
    </div>


    <!-- </div> -->


    @endsection