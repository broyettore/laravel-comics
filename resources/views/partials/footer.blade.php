<footer>
    <section class="footer-top">
        <div class="container mb-3">
            <div class="left">
                <div class="top">
                    <h3>DC COMICS</h3>
                    <ul>
                        @foreach ($footerList1 as $item)
                        <li>
                            <a href="#">{{ $item }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="bottom">
                    <h3>SHOP</h3>
                    <ul>
                        @foreach ($footerList2 as $item)
                        <li>
                            <a href="#">{{ $item }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="center">
                <h3>DC</h3>
                <ul>
                    @foreach ($footerList3 as $item)
                    <li>
                        <a href="#">{{ $item }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="right">
                <h3>SITES</h3>
                <ul>
                    @foreach ($footerList4 as $item)
                    <li>
                        <a href="#">{{ $item }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="container rights">
            <p>
                All Site Content TM and 
                <span>
                    <i class="fa-regular fa-copyright"></i>
                </span>
                2020 DC Entertainment, unless otherwise
                <span>
                    <a href="#">
                        noted here
                    </a>
                </span>
                . All rights reserved.
                <span>
                    <a href="#">
                        Cookies Settings
                    </a>
                </span>
            </p>
        </div>
    </section>
    <section class="footer-bottom">
        <div class="container">
            <div class="left">
                <button>SIGN-UP NOW</button>
            </div>
            <div class="right">
                <div class="cta">
                    <span>
                        <a :href="link">
                            FOLLOW US
                        </a>
                    </span>
                </div>
                <ul class="socials">
                    <li class="icon-ctn">
                        <a href="link">
                            <img src="{{ Vite::asset("resources/img/footer-facebook.png")}}" alt="social media link">
                        </a>
                    </li>
                    <li class="icon-ctn">
                        <a href="link">
                            <img src="{{ Vite::asset("resources/img/footer-twitter.png")}}" alt="social media link">
                        </a>
                    </li>
                    <li class="icon-ctn">
                        <a href="link">
                            <img src="{{ Vite::asset("resources/img/footer-youtube.png")}}" alt="social media link">
                        </a>
                    </li>
                    <li class="icon-ctn">
                        <a href="link">
                            <img src="{{ Vite::asset("resources/img/footer-pinterest.png")}}" alt="social media link">
                        </a>
                    </li>
                    <li class="icon-ctn">
                        <a href="link">
                            <img src="{{ Vite::asset("resources/img/footer-periscope.png")}}" alt="social media link">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</footer>