
@extends('front.layout.front')
@section('title')
    profile
@endsection('title')
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
@endsection('nav')

<table class="table">
    <thead>
        <tr>
            <th>service</th>
            <th>price</th>
            <th>time</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

@endsection('content')

