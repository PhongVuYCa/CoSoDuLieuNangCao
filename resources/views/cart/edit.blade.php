<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <title>Cart</title>
</head>
<body>
@include('header')

<div style="padding: 20px; width: 100%; border: 1px solid #777777">
    <a style="margin: 10px 0px; color: #777777">CART</a><br>
    <a>Home / </a><a style="color:#43A316">Cart</a>
</div>

<h3 style="text-align: center; margin-top: 100px"><b>CART</b></h3>
<div style = "width: 1200px; margin-top: 50px; height: auto; margin-left: 100px; float: left">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col"></th>
            <th style="color: #454545">Product</th>
            <th style="color: #454545">Price</th>
            <th colspan="2" style="color: #454545">Quantity</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($cart as $cart)
            <tr>
                <td><img style="width: 170px; height: 150px;" src="<?php echo asset("image/product/{$cart->product->image}")?>"></td>
                <td><h6 style="margin-top: 60px;">{{$cart->product->name}}</h6></td>
                <td><h6 style="margin-top: 60px">${{$cart->product->price}}</h6></td>
                @if($cart->id===$idud->id)
                    <form action = "/update/{{$cart->id}}" method="post">
                        @csrf
                        <td><h6 style="margin-top: 60px;"><input style="width:65px" type="number" name="quantityud" min='1' max='{{$cart->product->quantity}}' value="{{$cart->quantity}}"></h6></td>
                        <td><h6 style="margin-top: 60px;"><button style="height:30px ;width:30px; padding:0px" class="btn btn-success" type="submit">&#10003;</button></h6></td>
                    </form>
                @else
                    <td><h6 style="margin-top: 60px; margin-left: 20px"><a style="text-decoration:none;color:black" href="/edit/{{$cart->id}}">&#9998;</a>&emsp;{{$cart->quantity}}</h6></td>
                    <td scope="col"></td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div style="float: left; height: 150px; width: 100%; margin-top: 50px">
    @include('social')
</div>

<div style="float: left; height: 301px; width: 100%">
    @include('footer')
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
