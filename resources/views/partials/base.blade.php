<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{config('app.name')}} - @yield('title')</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="assets/images/favicon.png" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="assets/css/plugins.css">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- Main Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body class="template-product belle">
        @include('partials.header')
        <!--End Mobile Menu-->
        
        <!--Body Content-->
        <div id="page-content">
            <!--MainContent-->
            <div id="MainContent" class="main-content" role="main">
                <!--Breadcrumb-->
                <div class="bredcrumbWrap">
                    <div class="container breadcrumbs">
                        <a href="/" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>@yield('title')</span>
                    </div>
                </div>
                <!--End Breadcrumb-->
                
                @yield('content')
            </div>
            <!--MainContent-->
        </div>
    	<!--End Body Content-->
    
    <!--Footer-->
    <footer id="footer">
        <div class="newsletter-section">
            <div class="container">
                <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <div class="section-header text-center">
                                        <label class="h2"><span>sign up for </span>newsletter</label>
                                    </div>
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                            <span class="input-group__btn">
                                                <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social">
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>    
        </div>
        <div class="site-footer">
        	<div class="container">
     			<!--Footer Links-->
            	<div class="footer-top">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Quick Shop</h4>
                            <ul>
                            	<li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Sportswear</a></li>
                                <li><a href="#">Sale</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Informations</h4>
                            <ul>
                            	<li><a href="#">About us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms &amp; condition</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Customer Services</h4>
                            <ul>
                            	<li><a href="#">Request Personal Data</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Support Center</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                        	<h4 class="h4">Contact Us</h4>
                            <ul class="addressFooter">
                            	<li><i class="icon anm anm-map-marker-al"></i><p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p></li>
                                <li class="phone"><i class="icon anm anm-phone-s"></i><p>(440) 000 000 0000</p></li>
                                <li class="email"><i class="icon anm anm-envelope-l"></i><p>sales@yousite.com</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Footer Links-->
                <hr>
                <div class="footer-bottom">
                	<div class="row">
                    	<!--Footer Copyright-->
	                	<div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span></span> <a href="templateshub.net">Templates Hub</a></div>
                        <!--End Footer Copyright-->
                        <!--Footer Payment Icon-->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                        	<ul class="payment-icons list--inline">
                        		<li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                        <!--End Footer Payment Icon-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
    <div class="hide">
      <div id="sizechart">
        <h3>WOMEN'S BODY SIZING CHART</h3>
        <table>
          <tbody>
            <tr>
              <th>Size</th>
              <th>XS</th>
              <th>S</th>
              <th>M</th>
              <th>L</th>
              <th>XL</th>
            </tr>
            <tr>
              <td>Chest</td>
              <td>31" - 33"</td>
              <td>33" - 35"</td>
              <td>35" - 37"</td>
              <td>37" - 39"</td>
              <td>39" - 42"</td>
            </tr>
            <tr>
              <td>Waist</td>
              <td>24" - 26"</td>
              <td>26" - 28"</td>
              <td>28" - 30"</td>
              <td>30" - 32"</td>
              <td>32" - 35"</td>
            </tr>
            <tr>
              <td>Hip</td>
              <td>34" - 36"</td>
              <td>36" - 38"</td>
              <td>38" - 40"</td>
              <td>40" - 42"</td>
              <td>42" - 44"</td>
            </tr>
            <tr>
              <td>Regular inseam</td>
              <td>30"</td>
              <td>30½"</td>
              <td>31"</td>
              <td>31½"</td>
              <td>32"</td>
            </tr>
            <tr>
              <td>Long (Tall) Inseam</td>
              <td>31½"</td>
              <td>32"</td>
              <td>32½"</td>
              <td>33"</td>
              <td>33½"</td>
            </tr>
          </tbody>
        </table>
        <h3>MEN'S BODY SIZING CHART</h3>
        <table>
          <tbody>
            <tr>
              <th>Size</th>
              <th>XS</th>
              <th>S</th>
              <th>M</th>
              <th>L</th>
              <th>XL</th>
              <th>XXL</th>
            </tr>
            <tr>
              <td>Chest</td>
              <td>33" - 36"</td>
              <td>36" - 39"</td>
              <td>39" - 41"</td>
              <td>41" - 43"</td>
              <td>43" - 46"</td>
              <td>46" - 49"</td>
            </tr>
            <tr>
              <td>Waist</td>
              <td>27" - 30"</td>
              <td>30" - 33"</td>
              <td>33" - 35"</td>
              <td>36" - 38"</td>
              <td>38" - 42"</td>
              <td>42" - 45"</td>
            </tr>
            <tr>
              <td>Hip</td>
              <td>33" - 36"</td>
              <td>36" - 39"</td>
              <td>39" - 41"</td>
              <td>41" - 43"</td>
              <td>43" - 46"</td>
              <td>46" - 49"</td>
            </tr>
          </tbody>
        </table>
        <div style="padding-left: 30px;"><img src="assets/images/size.jpg" alt=""></div>
      </div>
	</div>
    <div class="hide">
    	<div id="productInquiry">
        	<div class="contact-form form-vertical">
          <div class="page-title">
            <h3>Camelia Reversible Jacket</h3>
          </div>
          <form method="post" action="#" id="contact_form" class="contact-form">
            <input type="hidden" name="form_type" value="contact" />
            <input type="hidden" name="utf8" value="✓" />
            <div class="formFeilds">
              <input type="hidden"  name="contact[product name]" value="Camelia Reversible Jacket">
              <input type="hidden"  name="contact[product link]" value="/products/camelia-reversible-jacket-black-red">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  	<input type="text" id="ContactFormName" name="contact[name]" placeholder="Name"  value="" required>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <input type="email" id="ContactFormEmail" name="contact[email]" placeholder="Email"  autocapitalize="off" value="" required>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <input required type="tel" id="ContactFormPhone" name="contact[phone]" pattern="[0-9\-]*" placeholder="Phone Number"  value="">
                </div>
              </div>
              <div class="row">
              	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
              		<textarea required rows="10" id="ContactFormMessage" name="contact[body]" placeholder="Message" ></textarea>
              	</div>  
              </div>
              <div class="row">
              	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
              		<input type="submit" class="btn" value="Send Message">
                </div>
             </div>
            </div>
          </form>
        </div>
      	</div>
    </div>
    
        
     <!-- Including Jquery -->
     <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
     <script src="assets/js/vendor/jquery.cookie.js"></script>
     <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
     <script src="assets/js/vendor/wow.min.js"></script>
     <!-- Including Javascript -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/lazysizes.js"></script>
     <script src="assets/js/main.js"></script>
     <!-- Photoswipe Gallery -->
     <script src="assets/js/vendor/photoswipe.min.js"></script>
     <script src="assets/js/vendor/photoswipe-ui-default.min.js"></script>
     <script>
        $(function(){
            var $pswp = $('.pswp')[0],
                image = [],
                getItems = function() {
                    var items = [];
                    $('.lightboximages a').each(function() {
                        var $href   = $(this).attr('href'),
                            $size   = $(this).data('size').split('x'),
                            item = {
                                src : $href,
                                w: $size[0],
                                h: $size[1]
                            }
                            items.push(item);
                    });
                    return items;
                }
            var items = getItems();
        
            $.each(items, function(index, value) {
                image[index]     = new Image();
                image[index].src = value['src'];
            });
            $('.prlightbox').on('click', function (event) {
                event.preventDefault();
              
                var $index = $(".active-thumb").parent().attr('data-slick-index');
                $index++;
                $index = $index-1;
        
                var options = {
                    index: $index,
                    bgOpacity: 0.9,
                    showHideOpacity: true
                }
                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });
        });
        </script>
    </div>

	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        	<div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar"><div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button><button class="pswp__button pswp__button--share" title="Share"></button><button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button><button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button><button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button><div class="pswp__caption"><div class="pswp__caption__center"></div></div></div></div></div>

</body>

</html>