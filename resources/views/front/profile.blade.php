
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

<table class="table">
    <thead>
        <tr>
            <th>service</th>
            <th>price</th>
            <th>time</th>
            <!-- <th>paid</th> -->
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
            <!-- <form>
            <td><input type="number"name="paid"placeholder="enter paid amount"></td>
            </form> -->
        </tr>
        
    </tbody>
          
</table>
           <form action="{{url('patient/calculation')}}"method="post"> 
              @csrf
           <input type="hidden" name="id" value="{{$patient->id}}">
           <input name="totalMoney" class="form-control w-25" type="number" id="newprice" placeholder="enter paid amount" >
           <br>
           <input class="btn btn-info" type="submit" value="submit">
            </form>

@endsection

