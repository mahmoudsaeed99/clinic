<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('images/icon.png')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: violet;">
        <a class="navbar-brand" href="{{url('admin/home')}}">DashBoard</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('admin/service')}}">operations <span class="sr-only">(current)</span></a>
                </li>
               {{-- //links of (profile-- images--profile) --}}
                @yield('buttons')


            </ul>
            <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/login')}}">logout </a>
      </li>
     
    </ul>
            <form class="form-inline my-2 my-lg-0" method="post" , action="{{url('admin/get/patient')}}">
                @csrf
                <input class="form-control mr-sm-2" name = "search" type="text" placeholder="patient name">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    
    <div class="container-fluid mt-2 ">
        <div class="row ">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                {{-- adding image button --}}
               {{-- @yield('image') --}}
               
                <button class="btn btn-primary w-100 " id="operation"> operation</button>
                <div class="operator" style="display: none;">
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>service</th>
                                <th>price</th>
                                <th>add</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <!-- <form method="post" action=""> -->
                                    <td scope="row" id="name">{{$service->name}} </td>
                                    <td id="price{{$service->id}}">{{$service->price}}</td>
                                    <td><button class="fas fa-plus ml-3" onclick="addService('{{$service->id}}')"></button></td>
                                <!-- </form> -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-primary w-100 mt-2" id="book"> booking</button>
                <div class="book" style="display: none;" >
                    <input type="date" class="bookDate mt-1" id="bookDate">
                    <button class="fas fa-plus ml-3" onclick="bookDate()"></button>
                </div>
                  {{-- adding image form --}}
                  @yield('addImage')
               
                
            </div>
            @yield('nav')
            


        </div>


    </div>
