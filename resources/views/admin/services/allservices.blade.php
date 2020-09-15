@extends('admin.layout.admin')
@section('title')
home
@endsection('title')
@section('content')
<div class="container">
    <form class="mt-3 bg-dark p-4 rounded" style="color: cornsilk;" action="{{url('admin/service/add')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">service</label>
            <input type="text" name="name" class="form-control operation" id="operation" aria-describedby="emailHelp" placeholder="operation">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="text" name="price" class="form-control price" id="price" placeholder="Price">
        </div>
        <button type="submit" name="add" class="btn btn-primary">Add</button>
    </form>
</div>  
<div class="d-flex justify-content-center mt-3">
    <table class="table w-50 " style="background-color: #8db1ab;">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>service</th>
                <th>current price</th>
                <th>change price</th>
                <th>save</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td scope="row">{{$service->name}} </td>
                <td>{{$service->price}}</td>
                <form method="post" action="{{url('admin/service/update/'.$service->id)}}">
                    @csrf
                    <td name="id" type="number" id="id" class="id" style="display:none ;color:aliceblue">{{$service->id}}</td>
                    <td><input name="price" type="number" id="newprice" class="newprice"></td>
                    <td><button class="fas fa-plus " type="submit"></button></td>
                    <td><button class="fas fa-minus" onclick="deleteService()"></button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center width-100">
    {!! $services->render() !!}
</div>
@endsection('content')