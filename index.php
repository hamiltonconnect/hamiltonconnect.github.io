<?php header('Access-Control-Allow-Origin: *'); 
<!DOCTYPE html>
<html lang="en-us" class="no-js">

	<head>
		<meta charset="utf-8">
        <title>Hamilton Connect</title>
        <meta name="description" content="Hamilton Connect is a volunteer platform for students who want to make a difference in the local community.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Madeon08">

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="img/favicon.png">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon-retina-ipad.png">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon-retina-iphone.png">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon-standard-ipad.png">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon-standard-iphone.png">

        <!-- ============== Resources style ============== -->
        <link rel="stylesheet" href="css/style.css" />

		<!-- Modernizr runs quickly on page load to detect features -->
		<script src="js/modernizr.custom.js"></script>
	</head>

	<body>

		<!-- Page preloader -->
		<div id="loading">
			<div id="preloader">
				<span></span>
				<span></span>
			</div>
		</div>

		<!-- Overlay and Constellation effect -->
		<div class="global-overlay">

			<canvas id="constellationel"></canvas>

			<div class="overlay skew-part"></div>

		</div>

		<!-- START - Home/Left Part -->
		<section id="left-side">

			<!-- Your logo -->
			<img src="img/logo.png" alt="" class="brand-logo" />

			<div class="content">
                <h1 class="text-intro opacity-0">Hamilton Connect</h1>

				<h2 class="text-intro opacity-0">Get matched with volunteering opportunities tailored to your interests and skills.<h2>
				<nav>
					<ul>
						<li>
							<a href="#" id="open-more-info" data-target="right-side" class="light-btn text-intro opacity-0">More Information</a>
						</li>
						<li>
							<a data-dialog="somedialog" class="light-btn trigger text-intro opacity-0" style="padding: 0.7em 2.3em">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign Me Up&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
						</li>
					</ul>
				</nav>

			</div>

			<!-- Social icons -->
			<div class="social-icons" style="overflow:visible">

				<a href="#"><i class="fa fa-facebook"></i>
				    <b>&nbsp;&nbsp;Are you a McMaster Student?  Join the FB group for Exclusive Opportunities!</b></a>

			</div>

		</section>
		<!-- END - Home/Left Part -->

		<!-- START - More Informations/Right Part -->
		<section id="right-side" class="hide-right">

			<div class="content">

				<h3>It's time to give back to your community! </h3>

				<p>Explain what Hamilton connect is</p>

				<br><br>

				<div class="photo-line">

					<div class="my-gallery row" itemscope itemtype="http://schema.org/ImageGallery">

						<!-- Item -->
						<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-xs-12 col-sm-6 col-lg-6 clear-second">

							<!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
							<a class="box-picture" href="img/gallery-1.jpg" itemprop="contentUrl" data-size="1920x1280">

								<!-- Your picture -->
								<img src="img/gallery-1.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
								<p>Click</p>

							</a>

							<!-- Picture's description below this one -->
							<figcaption itemprop="caption description">

								<div class="photo-details">

									<h4>Like helping kids?</h4>

									<span class="border"></span>

									<p>We've got you. This is what I love, and can't stop loving! I'm told to enjoy every moment, every hour, every minute.</p>

								</div>

							</figcaption>

						</figure>

						<!-- Item -->
						<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-xs-12 col-sm-6 col-lg-6">

							<!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
							<a class="box-picture" href="img/gallery-2.jpg" itemprop="contentUrl" data-size="1920x1280">

								<!-- Your picture -->
								<img src="img/gallery-2.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
								<p>Click</p>

							</a>

							<!-- Picture's description below this one -->
							<figcaption itemprop="caption description">

								<div class="photo-details">

									<h4>Support the Community</h4>

									<span class="border"></span>

									<p>This is what I love, and can't stop loving! I'm told to enjoy every moment, every hour, every minute.</p>

								</div>

							</figcaption>

						</figure>

						<!-- Item -->
						<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-xs-12 col-sm-6 col-lg-6 clear-second">

							<!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
							<a class="box-picture" href="img/gallery-3.jpg" itemprop="contentUrl" data-size="1920x1280">

								<!-- Your picture -->
								<img src="img/gallery-3.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
								<span class="widget-angle-bottom-left">
									<span class="icon-text">
										<i class="icon ion-ios-star"></i>
									</span>
								</span>
								<p>Click</p>

							</a>

							<!-- Picture's description below this one -->
							<figcaption itemprop="caption description">

								<div class="photo-details">

									<h4>Make the community greener</h4>

									<span class="border"></span>

									<p>This is what I love, and can't stop loving! I'm told to enjoy every moment, every hour, every minute.</p>

								</div>

							</figcaption>

						</figure>

						<!-- Item -->
						<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="col-xs-12 col-sm-6 col-lg-6">

							<!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
							<a class="box-picture" href="img/gallery-4.jpg" itemprop="contentUrl" data-size="1920x1280">

								<!-- Your picture -->
								<img src="img/gallery-4.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
								<span class="widget-angle-top-right">
									<span class="icon-text">
										<i class="icon ion-ios-star"></i>
									</span>
								</span>
								<p>Click</p>

							</a>

							<!-- Picture's description below this one -->
							<figcaption itemprop="caption description">

								<div class="photo-details">

									<h4>Help Seniors</h4>

									<span class="border"></span>

									<p>This is what I love, and can't stop loving! I'm told to enjoy every moment, every hour, every minute.</p>

								</div>

							</figcaption>

						</figure>

					</div>

				</div>

				<span class="separator"></span>

				<div class="info-contact row">

                    <div class="col-xs-12 col-sm-6 col-lg-6 item-map">
                        <div class="contact-item"><i class="icon ion-ios-email"></i>
                            <p><a href="mailto:hamiltonconnectme@gmail.com">hamiltonconnectme@gmail.com</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-lg-6 item-map">
                        <div class="contact-item"><i class="icon ion-ios-location"></i>
                            <p>McMaster University
                                <br>Hamilton, ON</p>
                        </div>
                    </div>

                </div>

			</div>
			<!-- /. Content -->

			<footer>

				<p>© Hamilton Connect - Finding you the best opportunities</p>

			</footer>

		</section>
		<!-- START - More Informations/Right Part -->

		<!-- Button Cross to close the More Informations/Right Part -->
		<button id="close-more-info" class="hide-close"><i class="icon ion-ios-close-outline"></i></button>

		<!-- START - Newsletter Popup -->
		<div id="somedialog" class="dialog">

			<div class="dialog__overlay"></div>

			<div class="dialog__content">

				<div class="dialog-inner">

					<h4>Want to join?</h4>

					<p>Whether you're a student interested in community service or an organization looking for skilled volunteers, we're here to help all. <strong>Submit your email below and keep an eye out in your inbox to get started!</strong>
</p>

					<!-- Newsletter Form -->
					<div id="subscribe">

		                <form action="https://formspree.io/hamiltonconnectme@gmail.com" method="POST" id="notifyMe" >

		                    <div class="form-group">

		                        <div class="controls">

		                        	<!-- Field  -->
		                        	<input type="text" id="mail-sub" name="email" placeholder="Click here to write your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Click here to write your email'" class="form-control email srequiredField" />

		                        	<!-- Spinner top left during the submission -->
		                        	<i class="fa fa-spinner opacity-0"></i>

		                            <!-- Button -->
		                            <button class="btn btn-lg submit">Find Me Opportunities</button>

		                            <div class="clear"></div>

		                        </div>

		                    </div>

		                </form>

						<!-- Answer for the newsletter form is displayed in the next div, do not remove it. -->
						<div class="block-message">

							<div class="message">

								<p class="notify-valid"></p>

							</div>

						</div>

        			</div>
        			<!-- /. Newsletter Form -->

				</div>
				<!-- /. dialog-inner -->

				<!-- Button Cross to close the Newsletter Popup -->
				<button class="close-newsletter" data-dialog-close><i class="icon ion-close-round"></i></button>

			</div>
			<!-- /. dialog__content -->

		</div>
		<!-- END - Newsletter Popup -->

		<!-- Root element of PhotoSwipe, the gallery. Must have class pswp. -->
		<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		    <!-- Background of PhotoSwipe.
	        	It's a separate element as animating opacity is faster than rgba(). -->
		    <div class="pswp__bg"></div>

		    <!-- Slides wrapper with overflow:hidden. -->
		    <div class="pswp__scroll-wrap">

		        <!-- Container that holds slides.
		            PhotoSwipe keeps only 3 of them in the DOM to save memory.
		            Don't modify these 3 pswp__item elements, data is added later on. -->
		        <div class="pswp__container">
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		        </div>

		        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		        <div class="pswp__ui pswp__ui--hidden">

		            <div class="pswp__top-bar">

		                <!--  Controls are self-explanatory. Order can be changed. -->

		                <div class="pswp__counter"></div>

		                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

		                <button class="pswp__button pswp__button--share" title="Share"></button>

		                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

		                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

		                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
		                <!-- element will get class pswp__preloader--active when preloader is running -->
		                <div class="pswp__preloader">
		                    <div class="pswp__preloader__icn">
		                      <div class="pswp__preloader__cut">
		                        <div class="pswp__preloader__donut"></div>
		                      </div>
		                    </div>
		                </div>

		            </div>

		            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
		                <div class="pswp__share-tooltip"></div>
		            </div>

		            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
		            </button>

		            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
		            </button>

		            <div class="pswp__caption">
		                <div class="pswp__caption__center"></div>
		            </div>

		        </div>

		    </div>

		</div>
		<!-- /. Root element of PhotoSwipe. Must have class pswp. -->

	<!-- ///////////////////\\\\\\\\\\\\\\\\\\\ -->
    <!-- ********** Resources jQuery ********** -->
    <!-- \\\\\\\\\\\\\\\\\\\/////////////////// -->

	<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easings.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- Accelerated JavaScript animation JS file -->
	<script src="js/velocity.min.js"></script>

	<!-- Accelerated JavaScript animation UI JS file -->
	<script src="js/velocity.ui.min.js"></script>

	<!-- Newsletter plugin -->
	<script src="js/notifyMe.js"></script>

	<!-- Contact form plugin -->
	<script src="js/contact-me.js"></script>

	<!-- Slideshow/Image plugin -->
	<script src="js/vegas.js"></script>

	<!-- Scroll plugin -->
	<script src="js/jquery.mousewheel.js"></script>

	<!-- Custom Scrollbar plugin -->
	<script src="js/jquery.mCustomScrollbar.js"></script>

	<!-- Popup Newsletter Form -->
	<script src="js/classie.js"></script>
	<script src="js/dialogFx.js"></script>

	<!-- PhotoSwipe Core JS file -->
	<script src="js/photoswipe.js"></script>

	<!-- PhotoSwipe UI JS file -->
	<script src="js/photoswipe-ui-default.js"></script>

	<!-- Constellation effect -->
	<script src="js/constellation.js"></script>

	<!-- Main JS File -->
	<script src="js/main.js"></script>

	<!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

	</body>

</html>
?>