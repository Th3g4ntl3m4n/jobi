

@extends('Template')
@section('main_content')

<!-- Jobs Section Start -->
<section class="job-section jobs-grid-section pt-100 pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>Tus Ofertas de empleo</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus</p>
				</div>


            <!-- Publish your job -->
                <a href="{{ route('Comp.create')}}" class="signin-btn">Publish a new Job</a>
            <!-- End Publish your job --> 

			<h1>{{$offers[0]['companyname']}}</h1>


			

				<div class="row">
				@foreach($offers as $offer)
					<div class="col-md-6">
						<div class="job-card">
							<div class="row align-items-center">

							
								<div class="col-lg-3">
									<div class="thumb-img">
										
											<img src="assets/img/company-logo/1.png" alt="company logo">
										</a>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="job-info">
										<a href="{{$offer['id'] }}/details"><h3> {{$offers[0]['jobtitle']}}</h3></a>
											
										<ul>
											<li>Via <a href="#">{{$offers[0]['jobcategory']}}</a></li>
											<li>
												<i class='bx bx-location-plus'></i>
												{{$offers[0]['companylocation']}}
											</li>
											<li>
												<i class='bx bx-filter-alt' ></i>
												{{$offers[0]['jobtsalary']}}
											</li>
											<li>
												<i class='bx bx-briefcase' ></i>
												{{$offers[0]['jobtype']}}
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
											1 Hr Ago
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					@endforeach
<!-- End PostJObs -->

<!--
					<div class="col-md-6">
						<div class="job-card">
							<div class="row align-items-center">
								<div class="col-lg-3">
									<div class="thumb-img">
										<a href="job-details.html">
											<img src="assets/img/company-logo/2.png" alt="company logo">
										</a>
									</div>
								</div>

							<div class="col-lg-6">
								<div class="job-info">
									<h3>
										<a href="job-details.html">Data Entry</a>
									</h3>
									<ul>
										<li>Via <a href="#">Techno Inc.</a></li>
										<li>
											<i class='bx bx-location-plus'></i>
											Street 40/A, London
										</li>
										<li>
											<i class='bx bx-filter-alt' ></i>
											Data Entry
										</li>
										<li>
											<i class='bx bx-briefcase' ></i>
											Freelance
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-3">
								<div class="job-save">
								<a href="#">
									<i class='bx bx-heart'></i>
								</a>
								<p>
									<i class='bx bx-stopwatch' ></i>
									3 Hr Ago
								</p>
								</div>
							</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="job-card">
							<div class="row align-items-center">
								<div class="col-lg-3">
									<div class="thumb-img">
										<a href="job-details.html">
											<img src="assets/img/company-logo/3.png" alt="company logo">
										</a>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="job-info">
										<h3>
											<a href="job-details.html">Graphic Designer</a>
										</h3>
										<ul>
											<li>Via <a href="#">Devon Design</a></li>
											<li>
											<i class='bx bx-location-plus'></i>
											West Sight, USA
											</li>
											<li>
											<i class='bx bx-filter-alt' ></i>
											Graphics
											</li>
											<li>
											<i class='bx bx-briefcase' ></i>
											Freelance
											</li>
										</ul>
									</div>
								</div>

								<div class="col-lg-3">
									<div class="job-save">
										<a href="#">
											<i class='bx bx-heart'></i>
										</a>
										<p>
											<i class='bx bx-stopwatch' ></i>
											4 Hr Ago
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="job-card">
							<div class="row align-items-center">
								<div class="col-lg-3">
									<div class="thumb-img">
										<a href="job-details.html">
											<img src="assets/img/company-logo/4.png" alt="company logo">
										</a>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="job-info">
										<h3>
											<a href="job-details.html">Web Developer</a>
										</h3>
										<ul>
											<li>Via <a href="#">MegaNews</a></li>
											<li>
												<i class='bx bx-location-plus'></i>
												San Francisco, California
											</li>
											<li>
												<i class='bx bx-filter-alt' ></i>
												Development
											</li>
											<li>
												<i class='bx bx-briefcase' ></i>
												Freelance
											</li>
										</ul>
									</div>
								</div>

								<div class="col-lg-3">
									<div class="job-save">
										<a href="#">
											<i class='bx bx-heart'></i>
										</a>
										<p>
											<i class='bx bx-stopwatch' ></i>
											5 Hr Ago
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="job-card">
							<div class="row align-items-center">
								<div class="col-lg-3">
									<div class="thumb-img">
										<a href="job-details.html">
											<img src="assets/img/company-logo/5.png" alt="company logo">
										</a>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="job-info">
										<h3>
											<a href="job-details.html">Digital Marketor</a>
										</h3>
										<ul>
											<li>Via <a href="#">AB Marketer LTD</a></li>
											<li>
												<i class='bx bx-location-plus'></i>
												Wellesley Rd, London
											</li>
											<li>
												<i class='bx bx-filter-alt' ></i>
												Marketing
											</li>
											<li>
												<i class='bx bx-briefcase' ></i>
												Freelance
											</li>
										</ul>
									</div>
								</div>

								<div class="col-lg-3">
									<div class="job-save">
										<a href="#">
											<i class='bx bx-heart'></i>
										</a>
										<p>
											<i class='bx bx-stopwatch' ></i>
											6 Hr Ago
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="job-card">
							<div class="row align-items-center">
								<div class="col-lg-3">
									<div class="thumb-img">
										<a href="job-details.html">
											<img src="assets/img/company-logo/6.png" alt="company logo">
										</a>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="job-info">
										<h3>
											<a href="job-details.html">UI/UX Designer</a>
										</h3>
										<ul>
											<li>Via <a href="#">Design Hunter</a></li>
											<li>
											<i class='bx bx-location-plus'></i>
											Zoo Rd, London
											</li>
											<li>
											<i class='bx bx-filter-alt' ></i>
											Accountancy
											</li>
											<li>
											<i class='bx bx-briefcase' ></i>
											Freelance
											</li>
										</ul>
									</div>
								</div>

								<div class="col-lg-3">
									<div class="job-save">
										<a href="#">
											<i class='bx bx-heart'></i>
										</a>
										<p>
											<i class='bx bx-stopwatch' ></i>
											8 Hr Ago
										</p>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    
                    <div class="col-md-6">
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
											<a href="job-details.html">Accountants</a>
										</h3>
										<ul>
											<li>Via <a href="#">Tourt Design LTD</a></li>
											<li>
												<i class='bx bx-location-plus'></i>
                                                Green View, Australia
											</li>
											<li>
												<i class='bx bx-filter-alt' ></i>
												Finance
											</li>
											<li>
												<i class='bx bx-briefcase' ></i>
												Full Time
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
											1 Hr Ago
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="job-card">
							<div class="row align-items-center">
								<div class="col-lg-3">
									<div class="thumb-img">
										<a href="job-details.html">
											<img src="assets/img/company-logo/2.png" alt="company logo">
										</a>
									</div>
								</div>

							<div class="col-lg-6">
								<div class="job-info">
									<h3>
										<a href="job-details.html">Budget Analysts</a>
									</h3>
									<ul>
										<li>Via <a href="#">Techno Inc.</a></li>
										<li>
											<i class='bx bx-location-plus'></i>
											Street 40/A, London
										</li>
										<li>
											<i class='bx bx-filter-alt' ></i>
											Data Entry
										</li>
										<li>
											<i class='bx bx-briefcase' ></i>
											Full Time
										</li>
									</ul>
								</div>
							</div>
							

                                <div class="col-lg-3">
                                    <div class="job-save">
                                    <a href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <p>
                                        <i class='bx bx-stopwatch' ></i>
                                        3 Hr Ago
                                    </p>
                                    </div>
                                </div>

								-->

								
							</div>
						</div>
					</div>
                </div>
                
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <i class='bx bx-chevrons-left bx-fade-left'></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link active" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class='bx bx-chevrons-right bx-fade-right'></i>
                            </a>
                        </li>
                    </ul>
                </nav>
			</div>

		</section>
		<!-- Jobs Section End --> 
        
@endsection