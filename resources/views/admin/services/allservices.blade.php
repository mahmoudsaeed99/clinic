
@extends('admin.layout.admin')
@section('title')
    home
@endsection('title')
@section('content')
<div class="container">
        <form class="mt-3 bg-dark p-4 rounded" style="color: cornsilk;" action="{{url('admin/service/add')}}" method="post" >
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">service</label>
                <input type="text" name="name" class="form-control operation" id="operation" aria-describedby="emailHelp"
                    placeholder="operation">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="text" name="price"class="form-control price" id="price" placeholder="Price">
            </div>
            <button type="submit"name="add" class="btn btn-primary" >Add</button>
        </form>
            <table class="table table-striped table-inverse table-responsive ">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>service</th>
                        <th>current price</th>
                        <th>change price</th>
                        <th>save</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                        <td scope="row">{{$service->name}} </td>
                        <td>{{$service->price}}</td>
                        <form>
                        @csrf
                        <td><input name="newprice"type="text" id="newPrice" class="newPrice"></td>
                        <td><a href="{{url('admin/service/update/',$service->id)}}"><i class="fas fa-plus"></i></a></td>
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