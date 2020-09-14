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
profile
@endsection
@section('content')

@section('nav')
<h3 style="display: none;" id="patientID">{{$patient->id}}</h3>
<div class="col-md-8">
    <div class="row " style="background-color: #065a82;">
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

</div>
@endsection
@if($patient->totalMoney !=0)
<div class="container m-3 ">
    <h3>Remaining Money</h3>
    <h6>{{$patient->totalMoney}} Egyptian pound</h6>
    <form action="{{url('patient/calculation')}}" method="post">
        @csrf
        <input type="hidden" name="id" class="w-50" value="{{$patient->id}}">
        <input name="totalMoney" class="form-control w-25" type="number" id="newprice" placeholder="enter paid amount">
        <br>
        <input class="btn btn-info" type="submit" value="submit">
    </form>
</div>
@endif
<div class="d-flex justify-content-center">
    <table class="table w-50">
        <thead>
            <tr>
                <th>service</th>
                <th>price</th>
                <th>delete</th>
                <!-- <th>paid</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($patient->services as $service)
            <tr>
                <td scope="row">{{$service->name}} </td>
                <td>{{$service->price}}</td>
                <td><button class="btn btn-danger" onclick="deleteService('{{$service->id}}' , '{{$patient->id}}' , '{{$service->price}}')">delete</button></td>
   
            </tr>
            @endforeach
        </tbody>

    </table>

    </div>
    @endsection