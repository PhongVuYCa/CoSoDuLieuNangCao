<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <title>Log out</title>
</head>
<body>

@include("header")

<h3 style="text-align: center"><b>LOG OUT</b></h3>
<form style="width: 25%; margin-left: 500px; margin-top: 50px" action="/checklogout" method="post">
    @csrf
    <div class ="dx">
        <ul class="dx1">
            @if(Auth::check())
                <li><a href ="/logout">logout</a></li>
            @else
                <li><a href ="/register">Register</a></li>
                <li><a href ="/login">Login</a></li>
            @endif
        </ul>
    </div>
    <button type="submit" class="btn btn-success" style="border: none; background-color: #43A316; width: 150px; margin-left: 6px; float: left; margin-top: 25px">Logout</button>
</form>

<div style="float: left; height: 150px; width: 100%; margin-top: 50px">
    @include('social')
</div>

<div style="float: left; height: 300px; width: 100%">
    @include('footer')
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>
