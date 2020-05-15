<!-- Header -->
<header class="header1">

    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <span class="topbar-child1">
                Free shipping for standard order over $100
            </span>

            <div class="topbar-child2">
                <span class="topbar-email">
                    AlladdinShaker@hotmail.com
                </span>
            </div>
        </div>

        <div class="wrap_header">
            <!-- Logo -->
            <a href="#" class="logo">
                <img src="/frontEnd/images/icons/logo2.png " alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        
                        <!-- pages buttons -->
                        <li>
                            <a href="{{Request::root()}}/home">Home</a>
                        </li>

                        <li>
                            <a href="{{Request::root()}}/laptops">Laptops</a>
                        </li>

                        <li>
                            <a href="#">Desktops</a>
                        </li>

                        <li>
                            <a href="#">Phones</a>
                        </li>

                        <li>
                            <a href="#">Tablets</a>
                        </li>
                        
                        <li>
                            <a href="#">Monitors</a>
                        </li>

                        <li>
                            <a href="{{Request::root()}}/about">About</a>
                        </li>

                        <li>
                            <a href="{{Request::root()}}/contact">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>


        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="{{Request::root()}}/home" class="logo-mobile">
            <img src="/frontEnd/images/icons/logo2.png " alt="IMG-LOGO" style=" max-height: 65px;">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
             

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <span class="topbar-child1">
                        Free shipping for standard order over $100
                    </span>
                </li>   

                <!-- social items -->
                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="#" class="topbar-social-item fa fa-facebook"></a>
                        <a href="#" class="topbar-social-item fa fa-instagram"></a>
                        <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                        <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                        <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                    </div>
                </li>

                <!-- pages buttons -->
                <li class="item-menu-mobile">
                    <a href="{{Request::root()}}/home">Home</a>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>

                <li class="item-menu-mobile">
                    <a href="{{Request::root()}}/laptops">Laptops</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="#">Desktops</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="#">Phones</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="#">Tablets</a>
                </li>
                
                <li class="item-menu-mobile">
                    <a href="#">Monitors</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="{{Request::root()}}/about">About</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="{{Request::root()}}/contact">Contact</a>
                </li>
            </ul>
        </nav>
    </div>

</header>