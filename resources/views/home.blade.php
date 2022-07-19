@extends('template')

@section('main_content')

<!-- Banner Section Start -->

<div class="banner-section">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container"> 
						<div class="banner-content text-center">
							<p>Find Jobs, Employment & Career Opportunities</p>
							<h1>Drop Resume & Get Your Desire Job!</h1>

							<form action="{{ route('home')}}" method="GET" class="banner-form">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail1">Keyword:</label>
											<input type="text" class="form-control" name="search" id="exampleInputEmail1" placeholder="Job Title" value="{{ request('search')}}">
										</div>
									</div>
				
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail2">Location:</label>
											<input type="text" class="form-control" id="exampleInputEmail2" placeholder="City or State">
										</div>
									</div>
				
									<div class="col-md-4">
										<button type="submit" class="find-btn">
											Find A Job
											<i class='bx bx-search'></i>
										</button>
									</div>
								</div>
							</form>

							<ul class="keyword">
								<li>Trending Keywords:</li>
								<li><a href="#">Automotive,</a></li>
								<li><a href="#">Education,</a></li>
								<li><a href="#">Health</a></li>
								<li>and</li>
								<li><a href="#">Care Engineering</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Banner Section End -->


		<section class="job-section pb-70">
			<div class="container">
				<div class="section-title text-center">
					<br>
					<h2>Quiza te pueda interezar</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
				</div>
		<div>

		<!-- Publicacion geenral de empleos -->
			<div class="row">
			@foreach($companies as $company)
					<div class="col-sm-6">					
						<div class="job-card">						
							<div class="row align-items-center">
								<div class="col-lg-3">
									<div class="thumb-img">
										<a href="job-details.html">
											<img src="assets/img/company-logo/1.png" alt="company logo">
										</a>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="job-info">
										<h3>
											<a href="{{$company['id'] }}/details">{{$company['jobtitle']}}</a>
										</h3>
										<ul>
											<li>Via <a href="#">{{$company['companyname']}}</a></li>
											<li>
												<i class='bx bx-location-plus'></i>
												{{$company['companylocation']}}
											</li>
											<li>
												<i class='bx bx-filter-alt' ></i>
												{{$company['jobcategory']}}
											</li>
											<li>
												<i class='bx bx-briefcase' ></i>
												{{$company['jobtype']}}
											</li>
										</ul>
									</div>
								</div>

								<div class="col-lg-3">
									<div class="job-save">
										<span>Full Time</span>
										<a href="#">
											<i class='bx bx-heart'></i>
										</a>
										<p>
											<i class='bx bx-stopwatch' ></i>
											{{$company['jobexperience']}}
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

			@endforeach
		</div>
		</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Companies Section Start -->
		<section class="company-section pt-100 pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>Top Companies</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
				</div>

				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="company-card">
							<div class="company-logo">
								<a href="job-grid.html">
									<img src="assets/img/top-company/1.png" alt="company logo">
								</a>
							</div>
							<div class="company-text">
								<h3>Trophy  & Sans</h3>
								<p>
									<i class='bx bx-location-plus'></i>
									Green Lanes, London
								</p>
								<a href="job-grid.html" class="company-btn">
									25 Open Position
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="company-card">
							<div class="company-logo">
								<a href="job-grid.html">
									<img src="assets/img/top-company/2.png" alt="company logo">
								</a>
							</div>
							<div class="company-text">
								<h3>Trout Design</h3>
								<p>
									<i class='bx bx-location-plus'></i>
									Park Avenue, Mumbai
								</p>
								<a href="job-grid.html" class="company-btn">
									35 Open Position
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="company-card">
							<div class="company-logo">
								<a href="job-grid.html">
									<img src="assets/img/top-company/3.png" alt="company logo">
								</a>
							</div>
							<div class="company-text">
								<h3>Resland LTD</h3>
								<p>
									<i class='bx bx-location-plus'></i>
									Betas Quence, London
								</p>
								<a href="job-grid.html" class="company-btn">
									20 Open Position
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="company-card">
							<div class="company-logo">
								<a href="job-grid.html">
									<img src="assets/img/top-company/4.png" alt="company logo">
								</a>
							</div>
							<div class="company-text">
								<h3>Lawn Hopper</h3>
								<p>
									<i class='bx bx-location-plus'></i>
									Wellesley Rd, London
								</p>
								<a href="job-grid.html" class="company-btn">
									45 Open Position
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Companies Section End -->

		<!-- Job Info Section Start -->
		<div class="job-info pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="looking-job">
							<div class="media">
								<i class='flaticon-group align-self-start mr-3'></i>
								<div class="media-body">
									<h5 class="mt-0">Looking For a Job</h5>
									<p>Your next role could be with one of these top leading organizations</p>

									<a href="job-list.html">
										Apply Now
										<i class='bx bx-chevrons-right'></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="recruiting-card">
							<div class="media">
								<i class='flaticon-resume align-self-start mr-3'></i>
								<div class="media-body">
									<h5 class="mt-0">Are You Recruiting?</h5>
									<p>Your next role could be with one of these top leading organizations</p>

									<a href="post-job.html">
										Apply Now
										<i class='bx bx-chevrons-right'></i>
									</a>
								</div>
							</div>
						</div>  
					</div>
				</div>
			</div>
		</div>
		<!-- Job Info Section End -->

		<!-- Blog Section Start -->
		<section class="blog-section pt-100 pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>News, Tips & Articles</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus</p>
				</div>

				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="blog-card">
							<div class="blog-img">
								<a href="blog-details.html">
									<img src="assets/img/blog/1.jpg" alt="blog image">
								</a>
							</div>
							<div class="blog-text">
								<ul>
									<li>
										<i class='bx bxs-user'></i>
										Admin
									</li>
									<li>
										<i class='bx bx-calendar'></i>
										7 Feb, 2021
									</li>
								</ul>

								<h3>
									<a href="blog-details.html">
										How to Indroduce in Yourself in Job Interview?
									</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>

								<a href="blog-details.html" class="blog-btn">
									Read More
									<i class='bx bx-plus bx-spin'></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="blog-card">
							<div class="blog-img">
								<a href="blog-details.html">
									<img src="assets/img/blog/2.jpg" alt="blog image">
								</a>
							</div>
							<div class="blog-text">
								<ul>
									<li>
										<i class='bx bxs-user'></i>
										Admin
									</li>
									<li>
										<i class='bx bx-calendar'></i>
										7 Feb, 2021
									</li>
								</ul>

								<h3>
									<a href="blog-details.html">
										Looking for Highly Motivated Product to Build
									</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>

								<a href="blog-details.html" class="blog-btn">
									Read More
									<i class='bx bx-plus bx-spin'></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
						<div class="blog-card">
							<div class="blog-img">
								<a href="blog-details.html">
									<img src="assets/img/blog/3.jpg" alt="blog image">
								</a>
							</div>
							<div class="blog-text">
								<ul>
									<li>
										<i class='bx bxs-user'></i>
										Admin
									</li>
									<li>
										<i class='bx bx-calendar'></i>
										7 Feb, 2021
									</li>
								</ul>

								<h3>
									<a href="blog-details.html">
										The Reason Why Software Develope is the Best Job
									</a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>

								<a href="blog-details.html" class="blog-btn">
									Read More
									<i class='bx bx-plus bx-spin'></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Blog Section End -->
		

@endsection