{{-- _______________HEAD______________--}}

    <!DOCTYPE html>
<html>
<head>
    <title>Luxury Watches | Main page</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--start-menu-->
    <script src="{{asset('js/simpleCart.min.js')}}"></script>
    <link href="{{asset('css/memenu.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="{{asset('js/memenu.js')}}"></script>
    <script>$(document).ready(function () {
            $(".memenu").memenu();
        });</script>
    <!--dropdown-->
    <script src="{{asset('js/jquery.easydropdown.js')}}"></script>
    @yield('custom_css_js')
</head>
<body>
<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    <div class="box">
                        <select tabindex="4" class="dropdown drop">
                            <option value="" class="label">Dollar :</option>
                            <option value="1">Dollar</option>
                            <option value="2">Euro</option>
                        </select>
                    </div>
                    <div class="box1">
                        <select tabindex="4" class="dropdown">
                            <option value="" class="label">English :</option>
                            <option value="1">English</option>
                            <option value="2">Spain</option>
                            <option value="3">German</option>
                            <option value="4">Russian</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-md-6">
                <ul class="nav navbar-nav navbar-right">
                    {{-- если мы не зарегестрированны--}}
                    @guest
                        <li class="admin_text"><a href="{{ route('home') }}">Admin Panel</a></li>
                    @endguest

                    {{-- если мы зарегистрированны--}}
                    @auth
                        <li><a href="{{ route('home') }}">Admin Panel</a></li>
                        <li><a href="{{ route('getLogout') }}">Exit</a></li>
                    @endauth
                </ul>
            </div>

            <div class="col-md-6">
                {{-- корзина--}}
                <div class="cart box_1">
                    {{--                    <a href="{{ route('basket') }}">--}}
                    {{--                        <div class="total">--}}
                    {{--                            --}}{{--  Общая сумма в корзине--}}
                    {{--                            --}}{{--                              <span> $ {{ $order->getFullPrice()}}</span>--}}
                    {{--                            <span> </span></div>--}}
                    {{--                        <img src="images/cart-1.png" alt="" />--}}
                    {{--                    </a>--}}

                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
{{--</div>--}}
<!--top-header-->
<!--start-logo-->
<div class="logo">
    <a href="{{route('index')}}"><h1>Luxury Watches</h1></a>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue">
                        <li class="active"><a href="{{ route('index') }}">Main Page</a></li>

                        <li class="grid"><a href="">Catalog</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col-2 me-one">
                                        <ul>
                                            @foreach($catalogs as $catalog)
{{--                                                $catalogs переменная из Providers AppServiceProvider--}}
                                                <li>
                                                    <a href="{{ route('showCatalog', $catalog->alias) }}">{{ $catalog->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </li>

                        <li class="grid"><a href="#">Brands</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col-2 me-one">

                                        <ul>
                                            @foreach($brands as $brand)
{{--                                $brands переменная из Providers AppServiceProvider--}}
                                                <li>
                                                    <a href="{{ route('showBrand', $brand->alias) }}">{{ $brand->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </li>


                        <li class="grid"><a href="typo.html">Blog</a>
                        </li>
                        <li class="grid"><a href="">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="col-md-3 header-right">

                <!-- {{--    SEARCH--}} -->
                <div class="search-bar">
                    <form method="get" action="{{ route('search') }}">
                        <input class="form-control me-2" name="search" type="search" placeholder="Search"
                               aria-label="Search">
                        <input type="submit" value="{{ request()->query('search') }}">
                    </form>
                </div>
            </div>

{{--            <div class="clearfix"></div>--}}
        </div>
    </div>
</div>
<!--bottom-header-->

<div class="container">
    {{--для выведения сообщения о действии--}}
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if(session()->has('warning'))
        <div class="alert alert-warning">
            {{ session()->get('warning') }}
        </div>
    @endif
</div>

<!--banner-starts-->
<div class="bnr" id="home">
    <div id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
            <li>
                <img src="{{asset('images/bnr-1.jpg')}}" alt=""/>
            </li>
            <li>
                <img src="{{asset('images/bnr-2.jpg')}}" alt=""/>
            </li>
            <li>
                <img src="{{asset('images/bnr-3.jpg')}}" alt=""/>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
<!--banner-ends-->





@yield('content')
{{--здесь у нас наша основная часть с home.index--}}




{{-- _______________FOOTER______________--}}

<!--information-starts-->
<div class="information">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-3 infor-left">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
                    <li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
                    <li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Information</h3>
                <ul>
                    <li><a href="#"><p>Specials</p></a></li>
                    <li><a href="#"><p>New Products</p></a></li>
                    <li><a href="#"><p>Our Stores</p></a></li>
                    <li><a href="contact.html"><p>Contact Us</p></a></li>
                    <li><a href="#"><p>Top Sellers</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>My Account</h3>
                <ul>
                    <li><a href="account.html"><p>My Account</p></a></li>
                    <li><a href="#"><p>My Credit slips</p></a></li>
                    <li><a href="#"><p>My Merchandise returns</p></a></li>
                    <li><a href="#"><p>My Personal info</p></a></li>
                    <li><a href="#"><p>My Addresses</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Store Information</h3>
                <h4>The company name,
                    <span>Lorem ipsum dolor,</span>
                    Glasglow Dr 40 Fe 72.</h4>
                <h5>+955 123 4567</h5>
                <p><a href="mailto:example@email.com">contact@example.com</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--information-end-->
<!--footer-starts-->
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <form>
                    <input type="text" value="Enter Your Email" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="col-md-6 footer-right">
                <p>© 2015 -  {{now()->year}} Luxury Watches. All Rights Reserved</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-end-->

</body>
</html>


