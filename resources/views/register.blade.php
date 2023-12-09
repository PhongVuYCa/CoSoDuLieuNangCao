<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <title>Register</title>
</head>
<body>

@include("header")

<h3 style="text-align: center; margin-top: 50px"><b>REGISTER</b></h3>
<form style="width: 25%; margin-left: 500px; margin-top: 50px" action="/register" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><b>Fullname:</b></label>
        <input type="text" placeholder="Your fullname..." class="form-control" name="exampleInputFullname" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"><b>Username:</b></label>
        <input type="text" placeholder="Your username..." class="form-control" name="exampleInputUsername" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3" style="margin-top: 30px">
        <label for="exampleInputPassword1" class="form-label"><b>Password:</b></label>
        <input type="password" placeholder="Your password..." class="form-control" name="exampleInputPassword" required>
    </div>
    <div class="mb-3" style="margin-top: 30px">
        <label for="exampleInputEmail1" class="form-label"><b>Address:</b></label>
        <input type="text" placeholder="Your adress..." class="form-control" name="exampleInputAdress" required>
    </div>
    <div class="mb-3" style="margin-top: 30px">
        <label for="exampleInputEmail1" class="form-label"><b>Phone:</b></label>
        <input type="text" placeholder="Your phone number..." class="form-control" name="exampleInputPhone" required>
    </div>
    <div class="mb-3" style="margin-top: 30px">
        <label for="exampleInputEmail1" class="form-label"><b>Email:</b></label>
        <input type="text" placeholder="Your email..." class="form-control" name="exampleInputEmail" aria-describedby="emailHelp" required>
    </div>
    <button type="submit" class="btn btn-success" style="border: none; background-color: #43A316; width: 150px; float: left; margin-top: 25px">Register</button>
</form>
<button class="btn btn-success" style="background: white; color: #333333; width: 150px; margin-left: 15px; margin-top: 25px; margin-bottom: 50px"><a style="text-decoration: none; color: black" href="{{url('/login')}}">Back</a></button>

<div style="float: left; height: 150px; width: 100%">
    @include('social')
</div>

<div style="float: left; height: 301px; width: 100%">
    @include('footer')
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
        alert(msg);
    }
</script>
</html>
