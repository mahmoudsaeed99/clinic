
@extends('admin.layout.admin')
@section('title')
    home
@endsection('title')
@section('content')
<div class="container">
        <form class="mt-3 bg-dark p-4 rounded" style="color: cornsilk;">
            <div class="form-group">
                <label for="exampleInputEmail1">operation</label>
                <input type="text" class="form-control operation" id="operation" aria-describedby="emailHelp"
                    placeholder="operation">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="password" class="form-control price" id="price" placeholder="Price">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
            <table class="table table-striped table-inverse table-responsive ">
                <thead class="thead-inverse">
                    <tr>
                        <th>service</th>
                        <th>current price</th>
                        <th>change price</th>
                        <th>save</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">حشو عصب </td>
                        <td>300</td>
                        <td><input type="text" id="newPrice" class="newPrice"></td>
                        <td><a href="patientForm.html"><i class="fas fa-plus"></i></a></td>
                    </tr>
                    
                    <tr>
                        <td scope="row">حشو عصب </td>
                        <td>300</td>
                        <td><input type="text" id="newPrice" class="newPrice"></td>
                        <td><a href="patientForm.html"><i class="fas fa-plus"></i></a></td>
                    </tr>
                    
                    <tr>
                        <td scope="row">حشو عصب </td>
                        <td>300</td>
                        <td><input type="text" id="newPrice" class="newPrice"></td>
                        <td><a href="patientForm.html"><i class="fas fa-plus"></i></a></td>
                    </tr>
                    
                </tbody>
            </table>
    </div>
    @endsection('content')