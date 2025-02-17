<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<!------ Include the above in your HEAD tag ---------->

<body>
    
   <div class="wrapper fadeInDown">
        @include('admin.inc.errors')
        
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="{{asset('images/—Pngtree—baby teeth_3355819.png')}}" id="icon" alt="User Icon" />
            </div>
           
            <!-- Login Form -->
        <form method="POST"action="{{url('/loginHandle')}}"> 
            @csrf
            <div class="form-group row">
                <label for="email_address" class="col-md-4 col-form-label text-md-right">username</label>
                <div class="col-md-6">
                    <input type="text" id="username" class="form-control" name="name" required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                <div class="col-md-6">
                    <input type="password" id="password" class="form-control" name="password" required>
                </div>
            </div>
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
       
    </div>
       
        </div>
        
       
    </div>
   
<!-- 
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

</body>

</html>