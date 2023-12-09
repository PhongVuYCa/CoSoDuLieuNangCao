<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <title>Statistics</title>
</head>
<body>
<div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <div class="logo_name">MOBILE STORE</div>
        </div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav_list" style="padding-left: 0px;">
        <li>
            <a href="{{url('/admin')}}">
                <i class="bx bx-home-alt"></i>
                <span class="links_name">Product Management</span>
            </a>
            <span class="tooltip">Product Management</span>
        </li>
        <li>
            <a href="{{url('/listUser')}}">
                <i class="bx bx-compass"></i>
                <span class="links_name">User Management</span>
            </a>
            <span class="tooltip">User Management</span>
        </li>
        <li>
            <a href="{{url('/statistics')}}">
                <i class='bx bx-bar-chart-alt-2'></i>
                <span class="links_name">Statistics</span>
            </a>
            <span class="tooltip">Statistics</span>
        </li>
    </ul>

    <div class="profile_content">
        <div class="profile">
            <li style="list-style: none; margin-top: 8px">
                <a style="text-decoration: none; color: black; margin-left: 140px; " href="{{url('/logout')}}">
                    <span class="links_name">Checkout</span>
                </a>
                <span class="tooltip">Checkout</span>
            </li>
        </div>
    </div>
</div>

<section>
    <div class="main_content">
        <div class="content" style=" margin-left: 80px; width: 1180px">
            {{-- <h4 style="margin-top: 30px; margin-left: 50px;">Dashboard</h4> --}}
            <b><h2 style="text-align: center; padding-top: 50px">PRODUCT SALES STATISTICS</h2></b>
            @php
                $total = 0;
            @endphp
            <div class="product">
                <table class="table table-hover">
                    <tr class="table-dark">
                        <td>No</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Sold</td>
                        <td>Total Price</td>
                    </tr>
                    {{-- @foreach ($orderDetail as $orderDetail)
                        <tr>
                            <td>{{$orderDetail->product->code}}</td>
                            <td><img  src="<?php echo asset("image/product/{$orderDetail->product->image}")?>"width=150px height="150px"></td>
                            <td>{{$orderDetail->product->name}}</td>
                            <td>${{$orderDetail->product->price}}</td>
                            <td>{{$orderDetail->quantity}}</td>
                            <td>${{$orderDetail->product->price * $orderDetail->quantity}}</td>
                        </tr>
                    @endforeach --}}
                    @foreach ($products as $index => $product)
                        <tr>
                            <td>{{ $product->code }}</td>
                            {{--                        <td><img src="{{ asset("image/product/{$product->image}") }}" width="150px" height="150px"></td>--}}
                            <td>{{ $product->name }}</td>
                            <td>${{ $product->price }}</td>
                            <td>{{ $product->total_quantity }}</td>
                            <td>${{ $product->total_quantity*$product->price }}</td>
                        </tr>
                        @php
                            $total += $product->total_quantity*$product->price;
                        @endphp
                    @endforeach
                    <tr>
                        <td colspan="4">Total</td>
                        <td>${{ $total }}</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</section>

<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function(){
        sidebar.classList.toggle("active");
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
