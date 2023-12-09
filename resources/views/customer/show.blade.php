<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>
<body>
@include('header')
<form style="width: 100%; margin-top: 30px" action = "/profile/{{session('user')->code}}" method="get" class="row g-3">
    <h3 style="text-align: center; margin-bottom: 50px;">PROFILE</h3>
    <div style="padding: 20px 400px; width: 100%; margin-top: -20px; margin-left: 75px">
        <p>Username&nbsp;: {{ session('user')->username }}</p>
        <p>Fullname&ensp;&nbsp;: {{ session('user')->fullname }}</p>
        <p>Email&emsp;&ensp;&emsp;: {{ session('user')->email }}</p>
        <p>Phone&emsp;&emsp;: {{ session('user')->phone }}</p>
        <p>Address&nbsp;&emsp;: {{ session('user')->address }}</p>
    </div>
</form>
<a href="{{url('/profile/edit', session('user')->code)}}"><button style="width: 200px; background-color: #43A316 ; margin-left: 520px; margin-top: 10px; margin-bottom: 50px" class="Edit">Edit</button></a></div>

{{--<form style="width: 100%; margin-top: 30px" action = "/profile/{{$user->code}}" method="get" class="row g-3">--}}
{{--    <h3 style="text-align: center; margin-bottom: 50px;">PROFILE</h3>--}}
{{--    <div style="padding: 20px 580px; width: 100%; margin-top: -20px; margin-left: 75px">--}}
{{--            <p>Username&nbsp;: {{$user->username}}</p>--}}
{{--            <p>Fullname&ensp;&nbsp;: {{$user->fullname}}</p>--}}
{{--            <p>Email&emsp;&ensp;&emsp;: {{$user->email}}</p>--}}
{{--            <p>Phone&emsp;&emsp;: {{$user->phone}}</p>--}}
{{--            <p>Address&nbsp;&emsp;: {{$user->address}}</p>--}}
{{--    </div>--}}
{{--</form>--}}
{{--<a href="{{url('/profile/edit', $user->code)}}"><button style="width: 200px; background-color: #43A316 ; margin-left: 650px; margin-top: 10px; margin-bottom: 50px" class="Edit">Edit</button></a></div>--}}


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
