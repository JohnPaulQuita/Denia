<nav class="uk-navbar-container" id="first_nav">
    <div class="uk-container">
        <div uk-navbar>

            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li><a href="#"><span uk-icon="receiver"></span>+639 15 948 6613</a></li>
                    <li id="lower_case"><a href="#"><span uk-icon="mail"></span>denia@gmail.com</a></li>
                </ul>
                <a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon uk-toggle="target: #mobile-menu"></a>
            </div>

            <div class="uk-navbar-right uk-visible@m">
                <ul class="uk-navbar-nav">
                    <li><a href="#"><span uk-icon="facebook"></span></a></li>
                    <li><a href="#"><span uk-icon="twitter"></span></a></li>
                    <li><a href="#"><span uk-icon="instagram"></span></a></li>
                    <li><a href="#"><span uk-icon="tiktok"></span></a></li>
                </ul>
            </div>

        </div>
    </div>
</nav>

<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
    <nav class="uk-navbar-container">
        <div class="uk-container">
            <div uk-navbar>

                <div class="uk-navbar-center">
                    <a class="uk-navbar-item uk-logo" href="#" aria-label="Back to Home"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li class="uk-active"><a href="#">Home</a></li>
                        <li>
                            <a href="#">Seller Center <span uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Store Partners</a></li>
                                    <li><a href="#">Seller Locator</a></li>
                                    <li><a href="#">Sales Promotion</a></li>
                                    <li><a href="#">Application</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Products <span uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Brilliant Sole</a></li>
                                    <li><a href="#">Brilliant Merch</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Collaboration Brands <span uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Brillinat K</a></li>
                                    <li><a href="#">BSE x Skinfit</a></li>
                                    <li><a href="#">Brilliant Colours</a></li>
                                    <li><a href="#">Brilliant for Men</a></li>
                                    <li><a href="#">Brilliant Hair Expert</a></li>
                                    <li><a href="#">Brilliant Cafe Dark Detox</a></li>
                                    <li><a href="#">Brilliant CollaG</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Be a Brilliant Family <span uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Be our Distributor</a></li>
                                    <li><a href="#">Be our Franchisee</a></li>
                                    <li><a href="#">Be our Reseller</a></li>
                                    <li><a href="#">Brilliant for Men</a></li>
                                    <li><a href="#">Brilliant Hair Expert</a></li>
                                    <li><a href="#">Brilliant Cafe Dark Detox</a></li>
                                    <li><a href="#">Brilliant CollaG</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">About Us <span uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Vlog</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Feedback</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</div>

<!-- Off-canvas for Mobile -->
<div id="mobile-menu" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <ul class="uk-nav-default" uk-nav>
            <li><a href="#">Home</a></li>
            <li class="uk-parent">
                <a href="#">Seller Center <span uk-nav-parent-icon></span></a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Store Partners</a></li>
                    <li><a href="#">Seller Locator</a></li>
                    <li><a href="#">Sales Promotion</a></li>
                    <li><a href="#">Application</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Products <span uk-nav-parent-icon></span></a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Brilliant Sole</a></li>
                    <li><a href="#">Brilliant Merch</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Collaboration Brands <span uk-nav-parent-icon></span></a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Brillinat K</a></li>
                    <li><a href="#">BSE x Skinfit</a></li>
                    <li><a href="#">Brilliant Colours</a></li>
                    <li><a href="#">Brilliant for Men</a></li>
                    <li><a href="#">Brilliant Hair Expert</a></li>
                    <li><a href="#">Brilliant Cafe Dark Detox</a></li>
                    <li><a href="#">Brilliant CollaG</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Be a Brilliant Family <span uk-nav-parent-icon></span></a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Be our Distributor</a></li>
                    <li><a href="#">Be our Franchisee</a></li>
                    <li><a href="#">Be our Reseller</a></li>
                    <li><a href="#">Brilliant for Men</a></li>
                    <li><a href="#">Brilliant Hair Expert</a></li>
                    <li><a href="#">Brilliant Cafe Dark Detox</a></li>
                    <li><a href="#">Brilliant CollaG</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">About Us <span uk-nav-parent-icon></span></a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Vlog</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Feedback</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
