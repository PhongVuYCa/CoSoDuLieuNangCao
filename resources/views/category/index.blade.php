<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

@include('header')

<div style="padding: 20px; margin-top: 20px; width: 100%; border: 1px solid #777777">
    <a style="margin: 10px 0px; color: #777777">SHOP</a><br>
    <a>Home / </a><a>Shop / </a><a style="color:#43A316"> iPhone </a>
</div>

<div style="width: 14%; float: left; padding: 10px 20px; margin-top: 30px">
    <a style="color: #777777;margin-left: 10px;">CATEGORIES</a><br>
    <div class="radio" style="margin-top: 20px; margin-left: 25px; margin-bottom: 10px">
        <a href="/shop/mobile" style="color: #777777; text-decoration: none" class="form-check-label" for="flexRadioDefault4">Mobile</a>
    </div>
    <div class="radio" style="margin-left: 25px; margin-bottom: 10px">
        <a href="/shop/accessory" style="color: #777777; text-decoration: none" class="form-check-label" for="flexRadioDefault4">Accessory</a>
    </div>
    <div class="radio" style="margin-left: 25px; margin-bottom: 10px">
        <a href="/shop/tablet" style="color: #777777; text-decoration: none" class="form-check-label" for="flexRadioDefault1">Table</a>
    </div>
    <div class="radio" style="margin-left: 25px; margin-bottom: 10px">
        <a href="/shop/smartwatch" style="color: #777777; text-decoration: none" class="form-check-label" for="flexRadioDefault2">Smartwatch</a>
    </div>
    <div class="radio" style="margin-left: 25px; margin-bottom: 10px">
        <a href="/shop/software" style="color: #777777; text-decoration: none" class="form-check-label" for="flexRadioDefault2">Software</a>
    </div>
</div>

<div style="width:85%;float: left; padding: 10px 20px; margin-top: 30px; border-left: 1px solid #777777">
    @foreach ($products as $product)
        <div class="card" style="width: 18%; height:300px;  margin: 0 0 40px 20px; float: left">
            <img style="width: 70%; height: 150px; margin-left: 30px; margin-top: 20px" src="<?php echo asset("image/product/{$product->image}")?>" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="{{url('/shop/show', $product->code)}}" style = "text-decoration: none; color: black; margin-left: 70px"><h6 style = "text-align: center" class="card-title">{{ $product->name }}</h6></a>
                <p style = "color: #DD4466; text-align: center" class="card-text"><b>${{ $product->price }}</b></p>
            </div>
        </div>
    @endforeach
</div>
</div>

<div style="; margin-top: 20px; margin-right: 20px"></div>

<div style="float: left; margin-left: 550px">
    {{$products->links()}}
</div>

<div style="float: left; height: 150px; width: 100%">
    @include('social')
</div>

<div style="float: left; height: 301px; width: 100%">
    @include('footer')
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>
