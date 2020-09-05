
@extends('admin.layout.admin')
@section('title')
    home
@endsection('title')
@section('content')
    <div class="container">
            <table class="table mt-3" style="color: cornsilk;">
                <thead class="">
                    <tr >
                        <th>Patient Name</th>
                        <th>mobile Number</th>
                        <th>time</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                  
                 @foreach ($Bookings as $booking)
                     
                    <tr style="background-color:darkgreen">
                        <td >{{$booking->patient->name}} </td>
                        <td>{{$booking->patient->mobile}}</td>
                        <td>{{ $booking->created_at}}</td>
                      <td><button class="btn btn-danger">@if($booking->commit==0)cancel @else confirmed @endif</button></td>
                      
                    </tr>
                    @endforeach   
                    
                </tbody>
            
            </table>
           
    </div>
    @endsection('content')