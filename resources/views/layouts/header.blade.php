<header class="s-header">

    <div class="header-logo">
        <a class="site-logo" href="{{route('home.index')}}">
            <img class="align-baseline" src="{{asset('assets_front/images/javaeins.png')}}" alt="Homepage" style="height: 40px;">
        </a>
    </div>

    <nav class="header-nav">

        <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

        <div class="header-nav__content">
            <h3>Navigation</h3>

            <ul class="header-nav__list">
                <li class="current"><a class="" href="{{route('home.index')}}" title="home">Home</a></li>
                <li><a class="" href="{{route('about.index')}}" title="about">About</a></li>
                <li><a class="" href="{{route('product.index')}}" title="products">Our Briquette</a></li>
                <li><a class="" href="{{route('faq.index')}}" title="faq">FAQ</a></li>
                <li><a class="" href="{{route('contact.index')}}" title="contact">Contact Us</a></li>
            </ul>
        </div> <!-- end header-nav__content -->

    </nav> <!-- end header-nav -->

    <a class="header-menu-toggle" href="#0">
        <span class="header-menu-text">Menu</span>

        <span class="header-menu-icon"></span>
    </a>

</header> <!-- end s-header -->