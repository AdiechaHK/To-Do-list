<?php 
include 'db1.php';
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>main page </title> 

	<!-- Google online fonts -->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<!-- Templa te CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">

</head>
<body>
	<section class="w3l-header">
		<nav class="navbar navbar-expand-lg navbar-light py-3">
			<div class="container">
				<a class="navbar-brand" href="index.html"><span class="fa fa-smile-o"></span>To Do<label class="logo-view">-List</label></a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
      <div class="header-right d-flex align-items-center">
      	<a href="logout.php?logout=true" class="btn btn-outline-dark d-none d-md-block btn-outline-style mr-4">Logout</a>

      	<section class="w3l-menu">
      		<div class="menu-btn">
      			<span class="top"></span>
      			<span class="mid"></span>
      			<span class="bot"></span>
      		</div>
      		<div id="nav">
      			<ul class="nav-inner">

      				<li>
      					<a href="index.html">Home</a>
      				</li>
      			</body>  
      		</li>
      		<li>
      			<a href="about.html">About</a>
      		</li>
      		<li>
      			<a href="contact.html">Contact</a>
      		</li>
      	</ul>
      </div>
    </section>
  </div>
</div>
</nav>
</section>

<!-- contact-form -->
<section class="w3l-contact" id="contact">
	<div class="contact-infubd py-5">
		<div class="container py-lg-3">
			<div class="contact-grids row">
				<div class="col-lg-6 contact-left">
					<div class="partners">
						<div class="cont-details">

						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5 contact-right">
					<form action="addnotes.php" method="post">
						<div class="input-grids">
							<div class="form-group">
							</div>
							<div class="form-group">
								<textarea name="notes" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
								<div class="form-group">
									<input type="text" name="userid" value="<?php 
									echo($_SESSION["uid"]);  
									?>">
									<div class="text-right">
										<button class="btn btn-primary btn-style" name="submit">Send Message</button>
									</div>
								</form>
							</div>

						</div>

					</div>
				</section>
				<!-- /contact-form -->
				<!-- footer -->
				<footer class="w3l-footer">
					<div class="footer-29 py-5">
						<div class="container pb-lg-3">
							<div class="row footer-top-29">
								<div class="col-md-6 footer-list-29 footer-1 mt-md-4">

								</form>
							</ul>
						</div>
					</div>
					<div class="row bottom-copies">
						<p class="copy-footer-29 col-lg-7 text-lg-left text-center">© 2020 Worksmart. All rights reserved | Design by <a
							href="https://w3layouts.com/">W3Layouts</a></p>
							<ul class="list-btm-29 col-lg-5 text-lg-right text-center">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- move top -->
				<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
					<span class="fa fa-angle-up"></span>
				</button>
				<script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
        	scrollFunction()
        };

        function scrollFunction() {
        	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        		document.getElementById("movetop").style.display = "block";
        	} else {
        		document.getElementById("movetop").style.display = "none";
        	}
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        	document.body.scrollTop = 0;
        	document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->
    </footer>
    <!-- // footer -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- disable body scroll which navbar is in active -->
    <script>
    	$(function () {
    		$('.navbar-toggler').click(function () {
    			$('body').toggleClass('noscroll');
    		})
    	});
    </script>
    <!-- disable body scroll which navbar is in active -->



    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for teams1-->
    <script>
    	$(document).ready(function () {
    		$('.owl-carousel').owlCarousel({
    			loop: true,
    			margin: 0,
    			responsiveClass: true,
    			responsive: {
    				0: {
    					items: 1,
    					nav: true
    				},
    				667: {
    					items: 2,
    					nav: true,
    					margin: 20
    				},
    				1000: {
    					items: 4,
    					nav: true,
    					loop: true,
    					margin: 25
    				}
    			}
    		})
    	})
    </script>
    <!-- //script for teams1-->

    <script>
    	$(document).ready(function () {

    		var $menuBtn = $('.menu-btn');
    		var $nav = $('#nav');
    		var $stylebox = $('#style-box');
    		var $styleli = $stylebox.find('li');

    		$menuBtn.on('click', function () {
    			var $this = $(this);
    			var styles = $stylebox.data('styles');
    			$this.toggleClass("active");
    			$this.next('#nav').toggleClass("open");
    			$stylebox.toggleClass(styles);
    		});

    		$nav.addClass('topslide');

    		$styleli.on('click', function () {
    			var $this = $(this);
    			$this.siblings().removeClass('now');
    			$this.addClass('now');
    			var styles = $this.data('styles');
    			$nav.removeClass();
    			$nav.addClass(styles);
    			$nav.siblings('#style-box').removeClass();
    			$nav.siblings('#style-box').data('styles', styles);
    		});
    	});
    </script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
    	$(document).ready(function () {
    		$('.popup-with-zoom-anim').magnificPopup({
    			type: 'inline',

    			fixedContentPos: false,
    			fixedBgPos: true,

    			overflowY: 'auto',

    			closeBtnInside: true,
    			preloader: false,

    			midClick: true,
    			removalDelay: 300,
    			mainClass: 'my-mfp-zoom-in'
    		});

    		$('.popup-with-move-anim').magnificPopup({
    			type: 'inline',

    			fixedContentPos: false,
    			fixedBgPos: true,

    			overflowY: 'auto',

    			closeBtnInside: true,
    			preloader: false,

    			midClick: true,
    			removalDelay: 300,
    			mainClass: 'my-mfp-slide-bottom'
    		});
    	});
    </script>
  </body>
  </html>


