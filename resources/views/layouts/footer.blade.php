<footer>

    <div class="row-template footer-main">
        <div class="col-four tab-full right footer-desc">

            <div style="text-align: center;">
                <img class="" src="{{asset('assets_front/images/javaeins.png')}}" alt="" style="display: block; margin: auto; height:150px;">
                <h3 style="text-align:center; margin-bottom: 1.5rem; margin-top:1rem; color:#ffffff;">JAVA EINS</h3>
            </div>
            <!-- <h3>Welcome to Glint</h3> -->
            <div style="text-align: left;color:white">
                <!-- <h5 style="color: white">
                    JAVA EINS
                </h5> -->
                <ul style="list-style-type: none;margin-left:0px">
                    <li style="margin-bottom: 8px">
                        <i class="fa fa-map-marker" style="margin-right: 8px"> </i>
                        Jalan Komud Abdurrahman Saleh, Kel. <br> &nbsp;&nbsp;&nbsp;&nbsp;Asrikaton,Kec. Pakis, Kab. Malang, Prop. &nbsp;&nbsp;&nbsp;&nbsp;Jawa Timur
                    </li>
                    <li style="margin-bottom: 8px">
                        <i class="fa fa-envelope" style="margin-right: 8px"> </i>info@javaeins.com
                    </li>
                    <li style="margin-bottom: 8px">
                        <i class="fa fa-clock-o" style="margin-right: 8px"> </i>Working Time : 08.00 - 10.00
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-four tab-full center footer-desc">
            <div style="text-align: left;color:white">
                <h5 style="color: #e50914;">
                    Our Product
                </h5>
                <ul style="list-style-type: none;margin-left:0px">
                    @foreach ($catalogues as $m)
                    <li style="margin-bottom: 8px">
                        <a href="{{route('produk.detail',$m->id)}}" class="a-zoom">{{$m->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-four tab-full right footer-subscribe">

            <div style="text-align: left;color:white">
                <h5 style="color: #e50914;">
                    Our Profile
                </h5>
                <ul style="list-style-type: none;margin-left:0px">
                    <li style="margin-bottom: 8px">
                        <a href="{{route('faq.index')}}" class="a-zoom">FAQ</a>
                    </li>
                    <li style="margin-bottom: 8px">
                        <a href="{{route('about.index')}}" class="a-zoom">About Us</a>
                    </li>
                    <li style="margin-bottom: 8px">
                        <a href="{{route('contact.index')}}" class="a-zoom">Contact Us</a>
                    </li>
                </ul>
            </div>

        </div>

    </div> <!-- end footer-main -->

    <div class="row-template footer-bottom">

        <div class="col-twelve">
            <div class="copyright">
                <span>© Copyright Java Eins 2022</span>
                <span>Developed by <a href="#"><img class="align-baseline" src="{{asset('assets_front/images/logo-dark.png')}}" alt="asyncrode" style="height: 11px;"> Asyncrode</a></span>
            </div>

            <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
            </div>
        </div>

    </div> <!-- end footer-bottom -->

</footer> <!-- end footer -->