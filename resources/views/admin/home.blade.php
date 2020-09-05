
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
                    <tr style="background-color:firebrick">
                        <td>mahmoud saeed </td>
                        <td>0111*******</td>
                        <td>13/4</td>
                        <td><button class="btn btn-primary">confirmation</button></td>
                    </tr>
                    <tr style="background-color:firebrick">
                        <td>mahmoud saeed </td>
                        <td>0111*******</td>
                        <td>13/4</td>
                        <td><button class="btn btn-primary">confirmation</button></td>
                    </tr>
                    <tr style="background-color:darkgreen">
                        <td>mahmoud saeed </td>
                        <td>0111*******</td>
                        <td>13/4</td>
                        <td><button class="btn btn-danger">cancel</button></td>
                    </tr>
                    <tr style="background-color: firebrick">
                        <td >mahmoud saeed </td>
                        <td>0111*******</td>
                        <td>13/4</td>
                        <td><button class="btn btn-primary">confirmation</button></td>
                    </tr>
                    <tr style="background-color:darkgreen">
                        <td >mahmoud saeed </td>
                        <td>0111*******</td>
                        <td>13/4</td>
                        <td><button class="btn btn-danger">cancel</button></td>
                    </tr>
                    <tr style="background-color: firebrick"> 
                        <td >mahmoud saeed </td>
                        <td>0111*******</td>
                        <td>13/4</td>
                        <td><button class="btn btn-primary">confirmation</button></td>
                    </tr>
                    <tr style="background-color:darkgreen">
                        <td >mahmoud saeed </td>
                        <td>0111*******</td>
                        <td>13/4</td>
                        <td><button class="btn btn-danger">cancel</button></td>
                    </tr>
                    
                    
                </tbody>
            </table>
    </div>
    @endsection('content')