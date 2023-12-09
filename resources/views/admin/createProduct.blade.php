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
    <title>Create Product</title>
</head>
<body>
<div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <div class="logo_name" style="color: white;">MOBILE STORE</div>
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
<div class="home_content">
    <h3 style="text-align: center; margin-top: 100px"><b>ADD PRODUCT</b></h3>
    <form style="width: 80%; margin-left: 330px; margin-top: 50px" action="/createProduct" method = "POST">
    @csrf
            <div class="col-md-6" style="float: left; width: 40%">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" placeholder="Product name..." class="form-control" name="name" id="inputEmail4">
            </div>
            <div class="col-md-6" style="float:left; margin-left: 20px; width: 20%">
                <label for="inputPassword4" class="form-label">Price</label>
                <input type="number" placeholder="Product price..." class="form-control" name="price" id="inputPassword4">
            </div>
            <div class="col-12" style="float: left; clear: both; width: 40%">
                <label for="inputAddress" class="form-label" style="margin-top: 20px" >Image</label>
                <input type="file" class="form-control" name="image" id="inputAddress">
            </div>
            <div class="col-12" style="float: left; width: 20%; margin-left: 20px">
                <label for="inputAddress2" class="form-label" style="margin-top: 20px">Quantity</label>
                <input type="number" class="form-control" name="quantity" id="inputAddress2" placeholder="Product quantity...">
            </div>
            <div class="col-md-4" style="margin-top: 10px; width: 62%">
                <label for="inputState" class="form-label" style="margin-top: 20px; width: 100%">Category</label>
                <select id="inputState" name="category_name"class="form-select">
                    <option selected>Choose...</option>
                    <option>Mobile</option>
                    <option>Accessory</option>
                    <option>Tablet</option>
                    <option>Smartwatch</option>
                    <option>Software</option>
                </select>
            </div>
            <div class="col-md-6" style="clear: both; margin-top: 20px; width: 62%">
                <label class="form-label">Description</label>
                <textarea class="form-control" placeholder="Description..." name="description"  id="floatingTextarea"></textarea>
            </div>
        <div class="btn_content" style="margin-left: -400px; margin-top: 50px">
            <button type="submit" class="btn btn-success" style="border: none; background-color: #43A316; width: 170px; margin-left: 500px; float: left; margin-top: 25px">Create</button>
            <a style="border: none; background-color: white; width: 170px; color: #43A316; border: 1.5px solid #43A316; margin-top: 25px; margin-left: 20px" class="btn btn-primary" href="{{url('/admin')}}" role="button">Back</a>
        </div>
    </form>
</div>

<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function(){
        sidebar.classList.toggle("active");
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
