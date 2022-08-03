@extends('dashboard')

@section('content')

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
        <!-- Owl Carousel Theme Default CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
        <!-- Box Icon CSS-->
        <link rel="stylesheet" href="{{ asset('css/boxicon.min.css')}}">
        <!-- Flaticon CSS-->
        <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css')}}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
		<!-- Dark CSS -->
        <link rel="stylesheet" href="{{ asset('css/dark.css')}}">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
       
        <link rel="icon" type="image/png" href="assets/img/favicon.png">  
		
    <meta name="csrf-token" content="{{ csrf_token() }}">

	</head>
        

        <!-- Resume Area Start -->
        <section class="resume-section ptb-100">
            <div class="container">
                <div class="resume-area">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="resume-thumb-area text-center">
                                <img src="{{ asset('img/account.jpg')}}" alt="account image">
                                <h3>{{ $user->name }}</h3>
                                <p>{{$companies[0]['phone']}}</p>
                                
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
                                    <span></span>
                                    <h5></h5>
                                    <h4></h4>
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
                                    <span></span>
                                    <h5></h5>
                                    <h4></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="experience-info">
                                    <span></span>
                                    <h5></h5>
                                    <h4></h4>
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

       
        <div class="copyright-text text-center">
            <p>© Jobi is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">ILTO</a></p>
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