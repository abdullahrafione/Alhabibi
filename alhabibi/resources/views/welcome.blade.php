<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Al Habibi Restaurant</title>
    <link rel="icon" href="images/Logo_main.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/pricing.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datetimepicker.min')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        @foreach($sliders as $key=>$slider)
            .owl-carousel .owl-wrapper, .owl-carousel .owl-item:nth-child({{ $key + 1 }}) .item
        {
            background:  linear-gradient(rgba(200, 200, 200, 0.1),rgba(200, 200, 200, 0.8)),
            url({{ asset('uploads/slider/'.$slider->image) }});

            background-size: cover;

        }
        @endforeach
    </style>
    <script src="{{asset('frontend/js/jquery-1.11.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset(('frontend/js/jquery.flexslider.min.js'))}}"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: ".flexslider-container"
            });
        });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            // key=AIzaSyDBCskTXrYkdX0P07m9iKKHx545LQ9UD6A;
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: new google.maps.LatLng(24.480670, 39.607130),
                zoom: 16,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(24.480670, 39.607130),
                title:"Al Habibi Pakistani Restaurant"
            });

            // To add the marker to the map, call setMap();
            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBCskTXrYkdX0P07m9iKKHx545LQ9UD6A&callback=initMap"
            type="text/javascript"></script>


</head>
<body data-spy="scroll" data-target="#template-navbar">


<nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img id="logo" src="images/Logo_main.png" class="logo img-responsive">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="Food-fair-toggle">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">about</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#SummersSpecial">Summers Special</a></li>
                <li><a href="#breakfast">bread</a></li>
                <li><a href="#featured-dish">Dishes</a></li>
                <li><a href="#reserve">reservation</a></li>
                <li><a href="#contact">contact</a></li>
                <li><a href="#feedback">Feedback</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.row -->
</nav>


<!--== 5. Header ==-->
<section id="header-slider" class="owl-carousel">
   @foreach($sliders as $key=>$slider)
       <div class="item">
           <div class="container">
               <div class="header-content">
                   <h1 class="header-title" style="color: white;font-family: cursive;font-size: 60px;">{{$slider->title}}</h1>
                   <p class="header-sub-title" style="color: white;font-family:  cursive;font-size: 30px;" >{{$slider->sub_title}}</p>
               </div>
           </div>
       </div>
       @endforeach
</section>



<!--== 6. About us ==-->
<section id="about" class="about">
{{--    <img src="images/icons/about_color.png" class="img-responsive section-icon hidden-sm hidden-xs">--}}
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                </div>
                <div class="col-xs-12 col-sm-6 dis-table-cell">
                    <div class="section-content">
                        <h2 class="section-content-title">About us</h2>
                        <p class="section-content-para">
                            The Al-habibi is saudia's most recognized and distinguished hospitality brand with a history of market innovation and excellence in restaurants chain operation. The Al-habibi Restaurants are regarded and respected as the number one restaurant entity in Saudia by local and foreign observers. The Al-habibi Restaurant is an example of gracious dinning, outstanding service, extraordinary classic and contemporary cuisine.<p class="section-content-para">
                            beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.  Where ignorance lurks, so too do the frontiers of discovery and imagination.
                        </p>
                    </div> <!-- /.section-content -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /.wrapper -->
</section> <!-- /#about -->


<!--==  7. Afordable Pricing  ==-->
<section id="menu" class="menu">
    <div id="w">
        <div class="pricing-filter">
            <div class="pricing-filter-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="section-header">
                                <h2 class="pricing-title">Our Menu</h2>
                                <ul id="filter-list" class="clearfix">
                                    <li class="filter" data-filter="all">All</li>
                                    @foreach($categories as $category)
                                        <li class="filter" data-filter="#{{$category->slug}}">{{$category->name}}
                                        <span class="badge-black">{{$category->items->count()}}</span></li>
                                    @endforeach
                                </ul><!-- @end #filter-list -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <ul id="menu-pricing" class="menu-price">
                        @foreach($items as $item)
                        <li class="item " id="{{$item->category->slug}}">
                            <a href="#">
                                <img src="{{asset('uploads/item/'.$item->image)}}" class="img-responsive" alt="Item"
                                style="height: 300px;width: 350px;">

                                <div class="menu-desc text-center">
                                    <span>
                                        <h3> {{ $item->name }} </h3>
                                       {{ $item->description  }}
                                    </span>

                                </div>
                            </a>
                            <h2 class="white">PKR{{$item->price}}</h2>
                        </li>
                        @endforeach

                    </ul>

                    <!-- <div class="text-center">
                            <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                    </div> -->

                </div>
            </div>
        </div>

    </div>
</section>


<!--== 8.Great Place For Meal ==-->
<section id="great-place-to-enjoy" class="great-place-to-enjoy">
    <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/beer_black.png">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                    <h2 class="section-title">Great Place For Meal</h2>
                </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                </div>
            </div> <!-- /.dis-table -->
        </div> <!-- /.row -->
    </div> <!-- /.wrapper -->
</section> <!-- /#great-place-to-enjoy -->



<!--==  9. SummersSpecial  ==-->
<section id="SummersSpecial" class="beer">
    <img class="img-responsive section-icon hidden-sm hidden-xs" >
    <div class="container-fluid">
        <div class="row dis-table">
            <div class="hidden-xs col-sm-6 dis-table-cell section-bg">
            </div>
            <div class="col-xs-12 col-sm-6 dis-table-cell">
                <div class="section-content">
                    <h2 class="section-content-title">Summers Special</h2>
                    <div class="section-description">
                        <p class="section-content-para">
                            With every drop of water you drink, every breath you take, you're connected to the sea. No matter where on Earth you live. Most of the oxygen in the atmosphere is generated by the sea
                            </p>
                        <p class="section-content-para">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--== 10. Our Breakfast Menu ==-->
<section id="breakfast" class="breakfast">
{{--    <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/bread_black.png">--}}
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                    <h2 class="section-title">Our Breakfast Menu</h2>
                </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                </div>
            </div> <!-- /.dis-table -->
        </div> <!-- /.row -->
    </div> <!-- /.wrapper -->
</section> <!-- /#breakfast -->



<!--== 11. Our Bread ==-->
<section id="bread" class="bread">
    <img class="img-responsive section-icon hidden-sm hidden-xs" >
    <div class="container-fluid">
        <div class="row dis-table">
            <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

            </div>
            <div class="col-xs-12 col-sm-6 dis-table-cell">
                <div class="section-content">
                    <h2 class="section-content-title">
                        Our Bread
                    </h2>
                    <div class="section-description">
                        <p class="section-content-para">
                       We At Al habibi Bakes Fresh bread which includes Turkish, Arabic, Asian & europain bread
                        </p>
                        <p class="section-content-para">
                            We serve Simit(Turkish Bread) ,pita bread,khubz,خبز (Arabic Bread)  ,Roti Paratha(Asian Bread)& Boule,Breadstick,Brioche(Europian Breads)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!--== 12. Our Featured Dishes Menu ==-->
<section id="featured-dish" class="featured-dish">
    <img class="img-responsive section-icon hidden-sm hidden-xs" >
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                    <h2 class="section-title">Our Famous Dishes </h2>
                </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                </div>
            </div>
        </div>
    </div>
</section>




<!--== 13. Menu List ==-->
<section id="menu-list" class="menu-list">
    <div class="container">
        <div class="row menu">
            <div class="col-md-10 col-md-offset-1 col-sm-9 col-sm-offset-2 col-xs-12">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="menu-catagory">
                                <h2>BreakFast</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="menu-item">
                                <h3 class="menu-title">The Pakistani Nihari</h3>
                                <p class="menu-about">Shank Meat Stew with Herbs, Naan and traditional Fried Onion</p>

                                <div class="menu-system">
                                    <div class="half">
                                        <p class="per-head">
                                            <span><i class="fa fa-user"></i></span>1:1
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p class="price">SR60.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="menu-item">
                                <h3 class="menu-title">Scrambled Omlet(Menemen)</h3>
                                <p class="menu-about">Eggs,tomato, green peppers, and spices cooked in olive oil, with  White cheese</p>

                                <div class="menu-system">
                                    <div class="half">
                                        <p class="per-head">
                                            <span><i class="fa fa-user"></i></span>1:1
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p class="price">SR 80.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="menu-item">
                                <h3 class="menu-title">Hummus </h3>
                                <p class="menu-about">Falafel, fool and hummus with pita bread or Kaek and tea </p>

                                <div class="menu-system">
                                    <div class="half">
                                        <p class="per-head">
                                            <span><i class="fa fa-user"></i></span>1:1
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p class="price">SR 50.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="menu-catagory">
                                <h2>Drinks</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="menu-item">
                                <h3 class="menu-title">Pakistani Tea</h3>
                                <p class="menu-about">Tea Leaves Boiled in Milk, Suger Added</p>

                                <div class="menu-system">
                                    <div class="half">
                                        <p class="per-head">
                                            <span><i class="fa fa-user"></i></span>1:1
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p class="price">Sr 10.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="menu-item">
                                <h3 class="menu-title">Turkish Tea</h3>
                                <p class="menu-about">Tea Leaves Boiled in Water</p>

                                <div class="menu-system">
                                    <div class="half">
                                        <p class="per-head">
                                            <span><i class="fa fa-user"></i></span>1:1
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p class="price">Sr 9.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="menu-item">
                                <h3 class="menu-title">Arabic Tea</h3>
                                <p class="menu-about">Black Tea</p>

                                <div class="menu-system">
                                    <div class="half">
                                        <p class="per-head">
                                            <span><i class="fa fa-user"></i></span>1:1
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p class="price">SR 7.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="menu-catagory">
                                <h2>Lunch </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="menu-item">
                                <h3 class="menu-title">Haleem</h3>
                                <p class="menu-about">Meat and lentils, With Naan</p>

                                <div class="menu-system">
                                    <div class="half">
                                        <p class="per-head">
                                            <span><i class="fa fa-user"></i></span>1:1
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p class="price">SR 90.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="menu-item">
                                <h3 class="menu-title">Asian Karahi </h3>
                                <p class="menu-about">Meat Cooked with Tomatoes, Ginger, Green Chills, Served With naan</p>

                                <div class="menu-system">
                                    <div class="half">
                                        <p class="per-head">
                                            <span><i class="fa fa-user"></i></span>1:1
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p class="price">SR 100.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="menu-item">
                                <h3 class="menu-title">Kofte </h3>
                                <p class="menu-about">The Ultimate Pakistani Meat Balls</p>

                                <div class="menu-system">
                                    <div class="half">
                                        <p class="per-head">
                                            <span><i class="fa fa-user"></i></span>1:1
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p class="price">SR 90.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="menu-catagory">
                                <h2>Special</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="menu-item">
                                <h3 class="menu-title">Special BBQ</h3>
                                <p class="menu-about">Full varitey Of BBQ</p>

                                <div class="menu-system">
                                    <div class="half">
                                        <p class="per-head">
                                            <span><i class="fa fa-user"></i></span>1:1
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p class="price">SR 200.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="menu-item">
                                <h3 class="menu-title">Lamb roast</h3>
                                <p class="menu-about">Balochi Style Lamb Roast</p>

                                <div class="menu-system">
                                    <div class="half">
                                        <p class="per-head">
                                            <span><i class="fa fa-user"></i></span>1:1
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p class="price">SR 300.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="menu-item">
                                <h3 class="menu-title">Sausage</h3>
                                <p class="menu-about">Astronomy compels the soul</p>

                                <div class="menu-system">
                                    <div class="half">
                                        <p class="per-head">
                                            <span><i class="fa fa-user"></i></span>1:1
                                        </p>
                                    </div>
                                    <div class="half">
                                        <p class="price">$50.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="moreMenuContent"></div>
                <div class="text-center">
                    <a id="loadMenuContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>



<!--== 14. Have a look to our dishes ==-->

<section id="have-a-look" class="have-a-look hidden-xs">
    <img class="img-responsive section-icon hidden-sm hidden-xs" >
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">

                <div class="menu-gallery" style="width: 50%; float:left;">
                    <div class="flexslider-container">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="images/menu-gallery/menu1.png" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu2.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu3.png" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu4.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu5.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu6.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu7.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu8.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu9.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu10.jpg" />
                                </li>
                                <li>
                                    <img src="images/menu-gallery/menu11.jpg" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="gallery-heading hidden-xs color-bg" style="width: 50%; float:right;">
                    <h2 class="section-title">Glance At our Dishes</h2>
                </div>


            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /.wrapper -->
</section>




<!--== 15. Reserve A Table! ==-->
<section id="reserve" class="reserve">
    <img class="img-responsive section-icon hidden-sm hidden-xs">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                    <h2 class="section-title">Reserve A Table !</h2>
                </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                </div>
            </div> <!-- /.dis-table -->
        </div> <!-- /.row -->
    </div> <!-- /.wrapper -->
</section> <!-- /#reserve -->



<section class="reservation">
    <img class="img-responsive section-icon hidden-sm hidden-xs">
    <div class="wrapper">
        <div class="container-fluid">
            <div class=" section-content">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <form class="reservation-form" method="post" action="{{route('reservation.reserve')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  &#xf007;  Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="  &#xf1d8;  e-mail">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="  &#xf095;  Phone">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control reserve-form empty iconified" name="dateandtime" id="datetimepicker1" required="required" placeholder="&#xf017;  Time">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  We're listening"></textarea>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                        <span><i class="fa fa-check-circle-o"></i></span>
                                         Reserve A visit
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="col-md-2 hidden-sm hidden-xs"></div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="opening-time">
                            <h3 class="opening-time-title">Hours</h3>
                            <p>Mon to Fri: 7:30 AM - 11:59 PM</p>
                            <p>Sat & Sun:  7:30 AM - 1:00 PM</p>
                            <div class="BreakFast">
                                <h4>Break Fast</h4>
                                <p>Mon to Fri: 7:30 AM - 11:59 AM</p>
                                <p>Sat & Sun:  7:30 AM - 1:00 PM</p>
                            </div>
                            <div class="launch">
                                <h4>Lunch</h4>
                                <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                <p>Sat & Sun:  2:00  PM - 5:30 PM</p>
                            </div>

                            <div class="dinner">
                                <h4>Dinner</h4>
                                <p>Mon to Sat: 6:00 PM - 12:59 AM</p>
                                <p>Sun: 5:30 PM - 1:00 AM</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




<section id="contact" class="contact">
    <div class="container-fluid color-bg">
        <div class="row dis-table">
            <div class="hidden-xs col-sm-6 dis-table-cell">
                <h2 class="section-title">Contact  us</h2>
            </div>
            <div class="col-xs-6 col-sm-6 dis-table-cell">
                <div class="section-content">
                    <p>Sayyid Ash Shuhada, Al Masani، Al Masani, Medina 42313, Saudi Arabia</p>
                    <p>+966 53 189 0312</p>
                    <p>contactus@alhabibi.com </p>
                </div>
            </div>
        </div>
        <div class="social-media">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <ul class="center-block">
{{--                        <li><a href="https://www.facebook.com/habibimatam/" class="fb"></a></li>--}}
{{--                        <li><a href="https://twitter.com/" class="twit"></a></li>--}}
{{--                        <li><a href="https://aboutme.google.com/u/0/?referer=gplus" class="g-plus"></a></li>--}}
{{--                        <li><a href="#" class="link"></a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row">
        <div id="map-canvas"></div>
    </div>
</div>


<section id="feedback" class="contact">
    <div class="container-fluid color-bg">
        <div class="row dis-table">
            <div class="hidden-xs col-sm-6 dis-table-cell">
                <h2 class="section-title">Feedback</h2>
            </div>
            <div class="col-xs-6 col-sm-6 dis-table-cell">
                <div class="section-content">
                    <p>Your Feedback is very important for us, Kindly Inform us about your visit</p>

                    <p>+966 53 189 0312</p>
                    <p>contactus@alhabibi.com </p>
                </div>
            </div>
        </div>

{{--        <div class="social-media">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 col-md-offset-3">--}}
{{--                    <ul class="center-block">--}}
{{--                        <li><a href="https://www.facebook.com/habibimatam/" class="fb"></a></li>--}}
{{--                        <li><a href="https://twitter.com/" class="twit"></a></li>--}}
{{--                        <li><a href="https://aboutme.google.com/u/0/?referer=gplus" class="g-plus"></a></li>--}}
{{--                        <li><a href="#" class="link"></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>
<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <div class="row">
                    <form class="contact-form" method="post" action="{{route('contact.send')}}">
                        @csrf
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                            </div>
                            <div class="form-group">
                                <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Subject">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="  Message"></textarea>
                        </div>

                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                            <div class="text-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="copyright text-center">
                    <p>
                        &copy; Copyright, 2019 <a href="https://www.facebook.com/iar01">Developed By</a> AR </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.mixitup.min.js')}}" ></script>
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.validate.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.hoverdir.js')}}"></script>
<script type="text/javascript" src="{{asset(('frontend/js/jQuery.scrollSpeed.js'))}}"></script>
<script src="{{asset('frontend/js/script.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach
@endif

<script>
    $(function () {
        $('#datetimepicker1').datetimepicker({
         format:"dd MM yyyy - HH:11 P",
            showMeridian:true,
            autoclose:true,
            todayBtn:true

        });
    })

</script>
{!! Toastr::message() !!}
</body>
</html>