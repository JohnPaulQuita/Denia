@extends('layouts.app')

@section('content')

<a href="#" id="teal-btn" uk-totop uk-scroll></a>

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: false">
    <div class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 10">
        <div>
            <img src="{{ asset('images/1.jpeg') }}" alt="" uk-cover>
            <div class="uk-overlay uk-position-left uk-flex uk-flex-middle uk-padding-large" style="height: 100%;">
                <div>
                    <div class="uk-padding-large">
                        <h1 class="uk-heading-medium">Welcome to my Shop</h1>
                        <p class="uk-text-large">Discover the best products here</p>
                        <a href="#shop" class="uk-button teal">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="{{ asset('images/2.jpeg') }}" alt="" uk-cover>
            <div class="uk-overlay uk-position-left uk-flex uk-flex-middle uk-padding-large" style="height: 100%;">
                <div>
                    <h1 class="uk-heading-medium">Welcome to my Shop</h1>
                    <p class="uk-text-large">Discover the best products here</p>
                    <a href="#shop" class="uk-button teal">Shop Now</a>
                </div>
            </div>
        </div>
        <div>
            <img src="{{ asset('images/3.jpeg') }}" alt="" uk-cover>
            <div class="uk-overlay uk-position-left uk-flex uk-flex-middle uk-padding-large" style="height: 100%;">
                <div>
                    <h1 class="uk-heading-medium">Welcome to my Shop</h1>
                    <p class="uk-text-large">Discover the best products here</p>
                    <a href="#shop" class="uk-button teal">Shop Now</a>
                </div>
            </div>
        </div>
    </div>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slideshow-item="next"></a>
</div>

<div class="uk-margin-large uk-container">
    <div uk-scrollspy="cls:uk-animation-fade; repeat: true">
        <div class="uk-text-center" id="no-margin">
            <h1>Our Products</h1>
            <h5>The best skin of your life starts here...</h5>
        </div>
    </div>

    <hr class="uk-divider-icon">

    <div class="uk-margin-large-top">
        <div class="uk-child-width-1-4@m uk-child-width-1-2@s" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">
            <div>
                <div class="uk-card uk-card-default uk-card-hover card-custom">
                    <div class="uk-card-media-top">
                        <img src="{{ asset('images/product.jpg') }}" width="1800" height="1200" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Product Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover card-custom">
                    <div class="uk-card-media-top">
                        <img src="{{ asset('images/product2.jpg') }}" width="1800" height="1200" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Product Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover card-custom">
                    <div class="uk-card-media-top">
                        <img src="{{ asset('images/product3.jpg') }}" width="1800" height="1200" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Product Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover card-custom">
                    <div class="uk-card-media-top">
                        <img src="{{ asset('images/product4.jpg') }}" width="1800" height="1200" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Product Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover card-custom">
                    <div class="uk-card-media-top">
                        <img src="{{ asset('images/product5.jpg') }}" width="1800" height="1200" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Product Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover card-custom">
                    <div class="uk-card-media-top">
                        <img src="{{ asset('images/product6.jpg') }}" width="1800" height="1200" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Product Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover card-custom">
                    <div class="uk-card-media-top">
                        <img src="{{ asset('images/product7.jpg') }}" width="1800" height="1200" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Product Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-hover card-custom">
                    <div class="uk-card-media-top">
                        <img src="{{ asset('images/product8.jpg') }}" width="1800" height="1200" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Product Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-background-cover" id="banner-section" style="background-image: url({{ asset('images/banner.jpg')}});" uk-scrollspy="cls:uk-animation-fade; delay: 300; repeat: true">
    <div class="uk-container">
        <div class="uk-grid-match uk-child-width-expand@m" uk-grid>
            <div></div>
            <div uk-scrollspy="cls: uk-animation-slide-left; target: .uk-card; delay: 900; repeat: true">
                <div class="uk-card uk-overlay-primary uk-card-body" id="banner-2">
                    <h1 class="title">Sale 20% Off</h1>
                    <h1 class="red">On Everything</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis nisi quod nihil quisquam fugiat error, dolorem officia optio temporibus ratione porro, minus alias quaerat ea facilis animi magni fugit. Quod, fuga! Atque eos inventore quisquam?</p>
                    <a href="#" class="uk-button custom-btn">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-margin-large uk-container" id="testimonials">
    <div class="uk-text-center uk-animation-slide-bottom" id="no-margin" uk-scrollspy="cls:uk-animation-fade; delay: 300; repeat: true">
        <h1>Customer Testimonials</h1>
        <h5>Our clients Say</h5>
    </div>

    <hr class="uk-divider-icon">
</div>

<div class="" style="background-image: url({{ asset('images/map.jpg')}});">
    <div class="uk-padding">
        <div class="uk-margin-medium-top">
            <div class="uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">
                <div>
                    <div class="uk-card uk-card-default uk-card-hover card-custom">
                        <div class="uk-text-center">
                            <img class="uk-margin-large-top" src="{{ asset('images/profile.jpg') }}" id="profile-image">
                        </div>
                        <div class="uk-card-body uk-text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, amet. Possimus doloremque inventore, provident id officiis eum quasi fugit adipisci facilis odio eius vero aliquam consequatur animi reprehenderit ullam! Esse sed cumque modi dignissimos corporis? Eaque architecto quisquam maxime. Voluptatum fuga libero odit voluptas, enim tempore placeat in eos inventore.</p>
                            <h4><b>John doe</b></h4>
                            <i><b><span class="Position">Manager</span> <span class="Company">Company</span></b></i>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover card-custom">
                        <div class="uk-text-center">
                            <img class="uk-margin-large-top" src="{{ asset('images/profile2.jpeg') }}" id="profile-image">
                        </div>
                        <div class="uk-card-body uk-text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, amet. Possimus doloremque inventore, provident id officiis eum quasi fugit adipisci facilis odio eius vero aliquam consequatur animi reprehenderit ullam! Esse sed cumque modi dignissimos corporis? Eaque architecto quisquam maxime. Voluptatum fuga libero odit voluptas, enim tempore placeat in eos inventore.</p>
                            <h4><b>Alice Smith</b></h4>
                            <i><b><span class="Position">Marketing Director</span> <span class="Company">Company</span></b></i>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover card-custom">
                        <div class="uk-text-center">
                            <img class="uk-margin-large-top" src="{{ asset('images/profile3.jpeg') }}" id="profile-image">
                        </div>
                        <div class="uk-card-body uk-text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, amet. Possimus doloremque inventore, provident id officiis eum quasi fugit adipisci facilis odio eius vero aliquam consequatur animi reprehenderit ullam! Esse sed cumque modi dignissimos corporis? Eaque architecto quisquam maxime. Voluptatum fuga libero odit voluptas, enim tempore placeat in eos inventore.</p>
                            <h4><b>Carol Davis</b></h4>
                            <i><b><span class="Position">Human Resources Manager</span> <span class="Company">Company</span></b></i>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover card-custom">
                        <div class="uk-text-center">
                            <img class="uk-margin-large-top" src="{{ asset('images/profile4.jpeg') }}" id="profile-image">
                        </div>
                        <div class="uk-card-body uk-text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, amet. Possimus doloremque inventore, provident id officiis eum quasi fugit adipisci facilis odio eius vero aliquam consequatur animi reprehenderit ullam! Esse sed cumque modi dignissimos corporis? Eaque architecto quisquam maxime. Voluptatum fuga libero odit voluptas, enim tempore placeat in eos inventore.</p>
                            <h4><b>Emily Wilson</b></h4>
                            <i><b><span class="Position">Customer Support Specialist</span> <span class="Company">Company</span></b></i>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover card-custom">
                        <div class="uk-text-center">
                            <img class="uk-margin-large-top" src="{{ asset('images/profile5.jpg') }}" id="profile-image">
                        </div>
                        <div class="uk-card-body uk-text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, amet. Possimus doloremque inventore, provident id officiis eum quasi fugit adipisci facilis odio eius vero aliquam consequatur animi reprehenderit ullam! Esse sed cumque modi dignissimos corporis? Eaque architecto quisquam maxime. Voluptatum fuga libero odit voluptas, enim tempore placeat in eos inventore.</p>
                            <h4><b>Bob Johnson</b></h4>
                            <i><b><span class="Position">Senior Developer</span> <span class="Company">Company</span></b></i>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover card-custom">
                        <div class="uk-text-center">
                            <img class="uk-margin-large-top" src="{{ asset('images/profile6.jpeg') }}" id="profile-image">
                        </div>
                        <div class="uk-card-body uk-text-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, amet. Possimus doloremque inventore, provident id officiis eum quasi fugit adipisci facilis odio eius vero aliquam consequatur animi reprehenderit ullam! Esse sed cumque modi dignissimos corporis? Eaque architecto quisquam maxime. Voluptatum fuga libero odit voluptas, enim tempore placeat in eos inventore.</p>
                            <h4><b>David Brown</b></h4>
                            <i><b><span class="Position">Sales Associate</span> <span class="Company">Company</span></b></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-margin-large uk-container">
    <div class="uk-text-center" id="no-margin">
        <h1>Contact Us</h1>
        <h5>You can reach us here</h5>
    </div>

    <hr class="uk-divider-icon">

    <div class="uk-card uk-card-default uk-card-hover uk-margin-large-top">
        <div class="uk-child-width-1-2@m uk-grid-none uk-grid-match" uk-grid>
            <div>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.4732826566383!2d121.12947777468668!3d14.685806874985735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bb743e1c0ca1%3A0xf0638066d15764c4!2sVilla%20San%20Mateo%201!5e0!3m2!1sen!2sae!4v1721564349135!5m2!1sen!2sae" style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div>
                <div>
                    <div class="uk-padding">
                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Name" aria-label="Name">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Email" aria-label="Email">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Phone" aria-label="Phone">
                        </div>
                        <div class="uk-margin">
                            <textarea class="uk-textarea" placeholder="Message"></textarea>
                        </div>

                        
                        <div class="uk-margin-large-top">
                            <div class="uk-text-center">
                                <button class="uk-button teal-btn">
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection