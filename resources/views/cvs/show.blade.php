@php

@endphp
@extends('Template')
@section('main_content')
        <!-- Page Title Start -->
        <section class="page-title title-bg11">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Resume</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Resume</li>
                    </ul>
                </div>
            </div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </section>
        <!-- Page Title End -->

        <!-- Resume Area Start -->
        <section class="resume-section ptb-100">
            <div class="container">
                <div class="resume-area">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="resume-thumb-area text-center">
                                <img src="{{ asset('img/account.jpg')}}" alt="account image">
                                <h3>{{ $user->name }}</h3>
                                <p>{{$academys[0]['schooltitle']}}</p>
                                
                                <div class="social-links">
                                    <a href="#" target="-blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                    <a href="#" target="-blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                    <a href="#" target="-blank">
                                        <i class="bx bxl-github"></i>
                                    </a>
                                    <a href="#" target="-blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="resume-content about-text">
                                <h3>
                                    <i class='bx bx-user-circle'></i>
                                    About Me
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                            <div class="resume-content basic-info-text">
                                <h3>
                                    <i class='bx bx-book-alt'></i>
                                    Basic Info
                                </h3>
                                <ul>
                                    <li>
                                        <span>Age:</span>
                                        26
                                    </li>
                                    <li>
                                        <span>Category:</span>
                                        Web Development
                                    </li>
                                    <li>
                                        <span>Experience:</span>
                                        4 years
                                    </li>
                                    <li>
                                        <span>Gender:</span>
                                        Male
                                    </li>
                                    <li>
                                        <span>Status:</span>
                                        Full Time
                                    </li>
                                    <li>
                                        <span>Experience:</span>
                                        4 years
                                    </li>
                                </ul>
                            </div>

                            <div class="resume-content education-text">
                                <h3>
                                    <i class='bx bx-book-reader'></i>
                                    Education Background
                                </h3>

                                <div class="education-info">
                                    <span>{{$academys[0]['endyear']}}</span>
                                    <h5>{{$academys[0]['schooltitle']}}</h5>
                                    <h4>{{$academys[0]['school']}}</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <!--
                                <div class="education-info">
                                    <span>2010-2014</span>
                                    <h5>Bachelor in Computer Science</h5>
                                    <h4>Oxford university, UK</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="education-info">
                                    <span>2008-2010</span>
                                    <h5>Higher School certificate</h5>
                                    <h4>Stanton College, USA</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                -->
                            </div>

                            <div class="resume-content  experience-text">
                                <h3>
                                    <i class='bx bx-briefcase'></i>
                                    Work Expericence
                                </h3>

                                <div class="experience-info">
                                    <span>{{$experiences[0]['yearfinishtwork']}}</span>
                                    <h5>{{$experiences[0]['position']}}</h5>
                                    <h4>{{$experiences[0]['company']}}</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="experience-info">
                                    <span>{{$experiences[0]['yearfinishtwork']}}</span>
                                    <h5>{{$experiences[0]['position']}}</h5>
                                    <h4>{{$experiences[0]['company']}}</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
<!--
                            <div class="resume-content skill">
                                <h3>
                                    <i class='bx bx-check-shield'></i>
                                    Skills
                                </h3>
                                <span>HTMl</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                </div>

                                <span>JS</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                </div>

                                <span>PHP</span>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                </div>

                                <span>SQL</span>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                                </div>
                            </div>

                            <div class="theme-btn">
                                <a href="#" class="default-btn">
                                    Download
                                    <i class='bx bx-download bx-fade-down' ></i>
                                </a>
                            </div>
                        </div>
-->
                    </div>
                </div>
            </div>
        </section>
        <!-- Resume Area End -->

        <!-- Subscribe Section Start -->
        <section class="subscribe-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="section-title">
                            <h2>Get New Job Notifications</h2>
                            <p>Subscribe & get all related jobs notification</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
    
                            <button class="default-btn sub-btn" type="submit">
                                Subscribe
                            </button>
    
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscribe Section End -->

        <!-- Footer Section Start -->
		<footer class="footer-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.html">
									<img src="assets/img/logo.png" alt="logo">
								</a>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna. Sed eiusmod tempor incididunt ut.</p>

							<div class="footer-social">
								<a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
								<a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
								<a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
								<a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget pl-60">
							<h3>For Candidate</h3>
							<ul>
								<li>
									<a href="job-grid.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Browse Jobs
									</a>
								</li>
								<li>
									<a href="account.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Account
									</a>
								</li>
								<li>
									<a href="catagories.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Browse Categories
									</a>
								</li>
								<li>
									<a href="resume.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Resume
									</a>
								</li>
								<li>
									<a href="job-list.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Job List
									</a>
								</li>
								<li>
									<a href="sign-up.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Sign Up
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget pl-60">
							<h3>Quick Links</h3>
							<ul>
								<li>
									<a href="index.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Home
									</a>
								</li>
								<li>
									<a href="about.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										About
									</a>
								</li>
								<li>
									<a href="faq.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										FAQ
									</a>
								</li>
								<li>
									<a href="pricing.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Pricing
									</a>
								</li>
								<li>
									<a href="privacy.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Privacy
									</a>
								</li>
								<li>
									<a href="contact.html">
										<i class='bx bx-chevrons-right bx-tada'></i>
										Contact
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget footer-info">
							<h3>Information</h3>
							<ul>
								<li>
									<span>
										<i class='bx bxs-phone'></i>
										Phone:
									</span>
									<a href="tel:882569756">
										+101 984 754
									</a>
								</li>

								<li>
									<span>
										<i class='bx bxs-envelope'></i>
										Email:
									</span>
									<a href="mailto:info@jovie.com">
										info@jovie.com
									</a>
								</li>

								<li>
									<span>
										<i class='bx bx-location-plus'></i>
										Address:
									</span>
									123, Denver, USA
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
        <div class="copyright-text text-center">
            <p>© Jovie is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrp</a></p>
        </div>
        <!-- Footer Section End -->

        <!-- Back To Top Start -->
		<div class="top-btn">
			<i class='bx bx-chevrons-up bx-fade-up'></i>
		</div>
		<!-- Back To Top End -->

		<!-- jQuery first, then Bootstrap JS -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Nice Select JS -->
		<script src="assets/js/jquery.nice-select.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Subscriber Form JS -->
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Velidation JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact Form -->
		<script src="assets/js/contact-form-script.js"></script>
		<!-- Meanmenu JS -->
		<script src="assets/js/meanmenu.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/custom.js"></script>
  	</body>
</html>

@endsection