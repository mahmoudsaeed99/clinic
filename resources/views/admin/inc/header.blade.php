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

<body class="bg-dark">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: violet;">
        <a class="navbar-brand" href="{{url('admin/home')}}">DashBoard</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('admin/service')}}">operations <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('admin/get/patient/form')}}">new patient <span class="sr-only">(current)</span></a>
                </li>
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