<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="icon" href="image/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>
<body>

@include('header')

<div style="padding: 20px; margin-top: 20px; width: 100%; border: 1px solid #777777">
    <a style="margin: 10px 0px; color: #777777">BLOG</a><br>
    <a>Home / </a><a style="color:#43A316">Blog</a>
</div>

<h4 style="color: #595959; margin-left: 20px; margin-top: 70px; text-align: center"><b>Apple debuts iPhone 14 Pro and iPhone 14 Pro Max</b></h4>
<img style="width: 700px; height: 400px; margin-left: 320px; margin-top: 20px" src="image/iphoneAll14.jpg">
<p style="width: 50%; margin-left: 300px; margin-top: 50px; ">For the last few years, buying Apple’s top-tier iPhone has meant needing to get the Pro equivalent. If you want the nicest cameras, display, and battery life, it’s the Pro iPhone you require. That’s no different this year, with 2022’s best iPhones being the iPhone 14 Pro and iPhone 14 Pro Max.<br><br>
    Apple’s new 48-megapixel camera, always-on screen, and Dynamic Island are incredibly welcome additions to the latest Pro iPhones — something we highlight extensively in our iPhone 14 Pro review. The iPhone 14 Pro Max retains all of the 14 Pro’s excellence while also going a step further, adding a more immersive display and much longer battery life. Those things do come at a cost, but if you can stomach the higher price and added heft, the iPhone 14 Pro Max is the epitome of a flagship smartphone. It’s big, premium, powerful, and completely overkill in all the best ways.<br>
</p>

<h5 style="width: 90%; margin-left: 300px; margin-top: 20px; font-weight: bold;">iPhone 14 Pro Max design</h5>
<img style="width: 700px; height: 400px; margin-left: 320px; margin-top: 30px; margin-bottom: 30px" src="image/product/iphone-14-pro-93.jpg">
<p style="width: 50%; margin-left: 300px; margin-top: 20px; ">
    The iPhone 14 Pro Max’s design looks very similar to last year’s 13 Pro Max, which is to say, it looks a lot like the iPhone 12 Pro Max. Apple’s stuck with the same general design language for the last couple of years, and while that may not make the iPhone 14 Pro Max a visual breakthrough, this tried-and-true design offers very little to complain about.
</p>
<p style="width: 50%; margin-left: 300px; margin-top: 20px; ">
    The stainless steel frame is luxurious, the frosted glass back looks and feels incredible, and small details — like the buttons and haptic feedback — are as exquisite as you’d expect. Most smartphones today have a nice fit-and-finish, but the iPhone 14 Pro Max still feels like a step above.
</p>
<p style="width: 50%; margin-left: 300px; margin-top: 20px; ">
    After living with the phone for over a week as my go-to handset, I’m happy to say that the transition hasn’t been nearly as difficult as I imagined. Yes, the iPhone 14 Pro Max is still a very tall and very heavy smartphone. For some people, it’ll always be just too big to comfortably use. But, I’m personally at a point where I’m used to its weight and have found ways to maneuver it with one hand.
</p>


<div style="float: left; height: 150px; width: 100%; margin-top: 50px">
    @include('social')
</div>

<div style="float: left; height: 300px; width: 100%">
    @include('footer')
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
