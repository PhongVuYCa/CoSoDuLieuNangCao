<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <title>Home</title>
</head>
<body>

@include('header')

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="float: left">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
            <img style="height:500px; width: 100%" src="image/banner-1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <img style="height:500px; width: 100%" src="image/banner-3.jpg.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img style="height:500px; width: 100%" src="image/banner_2.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- <!--danh muc-->
<div class = "category">
    <div class = "categoryList" style="margin-left: 45px">
        <div class = "categoryList1">
            <img src="image/mobile.png"/>
        </div>
        <div class = "categoryList2">
            <span>MOBILE</span><br>
            <a href="#">Click here >></a>
        </div>
    </div>
    <div class = "categoryList">
        <div class = "categoryList1">
            <img src="image/cases.png"/>
        </div>
        <div class = "categoryList2">
            <span>CASES</span><br>
            <a href="#">Click here >></a>
        </div>
    </div>
    <div class = "categoryList">
        <div class = "categoryList1">
            <img src="image/headphones.png"/>
        </div>
        <div class = "categoryList2">
            <span>HEADPHONES</span><br>
            <a href="#">Click here >></a>
        </div>
    </div>
    <div class = "categoryList">
        <div class = "categoryList1">
            <img src="image/cables.png"/>
        </div>
        <div class = "categoryList2">
            <span>CABLES</span><br>
            <a href="#">Click here >></a>
        </div>
    </div>
</div> --}}

<div style="float:left">
    <!--Tab items-->
    <div class="tabs" style="margin-left: 300px;">
        <div class="tab-item active">
            FEATURES PRODUCTS
        </div>
        <div class="tab-item">
            BEST SELLERS
        </div>
        <div class="tab-item">
            TOP RATED
        </div>
        <div class="line"></div>
    </div>

    <!--Tab content-->
    <div class="tab-content">
        <div class="tab-pane active">
            <!--FEATURES PRODUCTS-->
            <div style="margin-top: 30px; margin-left: 150px">
                <div class="card">
                    <img src="image/product/Iphone11.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="descriptionProduct.html"><h5 style = "text-align: center" class="card-title">iPhone 11</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$593</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/MTBiPad9.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">iPad 9 Tablet</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$360</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/NokiaC21P.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">Nokia C21 Plus</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$101</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/PocoC40.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">POCO C40</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$114</b></p>
                    </div>
                </div>
            </div>

            <div style="margin-top: 30px; margin-left: 150px">
                <div class="card">
                    <img src="image/product/SamsungGA23.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">Samsung Galaxy A23</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$212</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/TCL305.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">TCL 305</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$89</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/VivoY35.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">Vivo Y35</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$284</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/XiaomiRN11.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">Xiaomi Redmi Note 11</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$169</b></p>
                    </div>
                </div>
            </div>

            <div style="margin-top: 30px; margin-left: 150px">
                <div class="card">
                    <img src="image/product/DHTMHAYLOUGST.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">HAYLOU Smart Watch</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$59</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/SacdayMicroUSB.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">Micro USB Cable</h5></a>
                        <p style = "color: #DD4466; text-align: center" class="card-text"><b>$5</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/MTBLenovoTM.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">Lenovo Tablet</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$148</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/Realme9P.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">Realme 9 Pro+</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$360</b></p>
                    </div>
                </div>
            </div>
        </div>

        <!--BEST SELLERS-->
        <div class="tab-pane">
            <div style="margin-top: 30px; margin-left: 150px">
                <div class="card">
                    <img src="image/product/OppoReno8.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">OPPO Reno8</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$466</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/AppleWS7GPS.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">Apple Watch Series</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$432</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/NokiaC21P.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">Nokia C21 Plus</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$101</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/TCL305.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">TCL 305</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$89</b></p>
                    </div>
                </div>
            </div>
        </div>

        <!--TOP RATED-->
        <div class="tab-pane">
            <div style="margin-top: 30px; margin-left: 150px">
                <div class="card">
                    <img src="image/product/SacdayMicroUSB.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">Micro USB Cable</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$5</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/Iphone14PM.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">iPhone 14 Pro Max</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$1590</b></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/product/NokiaC21P.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#"><h5 style = "text-align: center" class="card-title">Nokia C21 Plus</h5></a>
                        <p style="color: #DD4466; text-align: center" class="card-text"><b>$101</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--HOT PRODUCTS & BLOG-->
<div style = "background-color: #EDE9E9; height: 1160px; width: 100%; float: left; margin-top: 50px">
    <!--HOT PRODUCTS-->
    <p style="margin-top: 50px; text-align: center">HOT PRODUCTS</p>
    <div style="float: left; margin-left: 150px">
        <div class="card" style="width: 25rem; margin-left: 10px; float: left; margin-top: 30px">
            <img style="margin-left: 119px" src="image/product/AppleWS7GPS.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="#"><h5 style = "text-align: center" class="card-title">Apple Watch Series 7 GPS</h5></a>
                <p style = "color: #DD4466; text-align: center" class="card-text"><b>$432</b></p>
            </div>
        </div>
        <div class="card" style="width: 25rem; margin-left: 140px; float: left; margin-top: 30px">
            <img style="margin-left: 119px" src="image/product/SamsungGZF4.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="#"><h5 style = "text-align: center" class="card-title">Samsung Galaxy Z Flip4</h5></a>
                <p style = "color: #DD4466; text-align: center" class="card-text"><b>$890</b></p>
            </div>
        </div>
        <div class="card" style="width: 25rem; margin-left: 10px; float: left; margin-top: 30px">
            <img style="margin-left: 119px" src="image/product/MTBiPadPM1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="#"><h5 style = "text-align: center" class="card-title">iPad Pro M1 Tablet</h5></a>
                <p style="color: #DD4466; text-align: center" class="card-text"><b>$1386</b></p>
            </div>
        </div>
        <div class="card" style="width: 25rem; margin-left: 140px; float: left; margin-top: 30px">
            <img style="margin-left: 119px" src="image/product/Realme9P.png" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="#"><h5 style = "text-align: center" class="card-title">Realme 9 Pro+</h5></a>
                <p style="color: #DD4466; text-align: center" class="card-text"><b>$360</b></p>
            </div>
        </div>
    </div>

    <!--BLOG-->
    <p style="text-align: center; margin-top: 700px">BLOG</p>
    <div id="carouselExampleInterval1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <div class="card mb-3" style="width: 940px; margin-left: 160px; height: 300px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="height: 250px; margin-left: 70px; margin-top: 10px" src="image/product/Iphone7Plus.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <b>Apple iPhone 7 Plus Review</b>
                                </h5><br>
                                <p class="card-text">The iPhone 7 Plus was announced at the same time as the iPhone 7, and it is a follow-on from the iPhone 6 Plus. It
                                    features two 12 megapixel sensor cameras, each featuring a different lens, one of which is wide-angle and one which is twice the focal
                                    length. The first camera is the same as the camera which is found on the iPhone 7 and has a 28mm f/1.8 lens, while the second camera has
                                    a 56mm f/2.8 lens. There are also other specifications which photographers, should find useful, including ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <div class="card mb-3" style="width: 940px; margin-left: 160px; height: 300px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="margin-left: 70px; margin-top: 50px" src="image/product/SamsungGZF3.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <b>Samsung Galaxy Z Fold3</b>
                                </h5><br>
                                <p class="card-text">The launched Galaxy Z Fold 3 has a similar design to the Z Fold 2 version. The device retains the same design with a
                                    large folding screen and a flat screen on the outside. However, the folding screen on the Z Fold 3 has been made much thinner by Samsung.
                                    Samsung Galaxy Z Fold 3 has a 7.6-inch screen without a camera hole. The screen uses Dynamic AMOLED 2X technology with a resolution of
                                    2,268 x 832 pixels and a 120Hz refresh rate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="float: left; height: 150px; width: 100%">
    @include('social')
</div>

<div style="float: left; height: 301px; width: 100%">
    @include('footer')
</div>

</body>
<script>
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const tabs = $$(".tab-item");
    const panes = $$(".tab-pane");

    const tabActive = $(".tab-item.active");
    const line = $(".tabs .line");

    requestIdleCallback(function () {
        line.style.left = tabActive.offsetLeft + "px";
        line.style.width = tabActive.offsetWidth + "px";
    });

    tabs.forEach((tab, index) => {
        const pane = panes[index];

        tab.onclick = function () {
            $(".tab-item.active").classList.remove("active");
            $(".tab-pane.active").classList.remove("active");

            line.style.left = this.offsetLeft + "px";
            line.style.width = this.offsetWidth + "px";

            this.classList.add("active");
            pane.classList.add("active");
        };
    });
</script>
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
