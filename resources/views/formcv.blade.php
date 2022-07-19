

@csrf
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
	
	<nav>
		<ul class="cd-primary-nav">
			<li><a href="{{ route('home')}}" class="animated_link">Home</a></li>
			<li><a href="index-2.html" class="animated_link">Version 2</a></li>
			<li><a href="index-3.html" class="animated_link">Version 3</a></li>
			<li><a href="index-4.html" class="animated_link">File Attachment demo</a></li>
			<li><a href="about.html" class="animated_link">About Us</a></li>
			<li><a href="contacts.html" class="animated_link">Contact Us</a></li>
			<li><a href="#0" class="animated_link">Purchase Template</a></li>
		</ul>
	</nav>
	<!-- /menu -->
	
	<div class="container-fluid">
	    <div class="row row-height">


	        <div class="col-xl-4 col-lg-4 content-left">
	            <div class="content-left-wrapper">
	                <a href="index.html" id="logo"><img src="{{ asset('img/logojobi.png')}}" alt="" width="100" height="45"></a>
	                <div id="social">
	                    <ul>
	                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
	                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
	                        <li><a href="#0"><i class="icon-google"></i></a></li>
	                        <li><a href="#0"><i class="icon-linkedin"></i></a></li>
	                    </ul>
	                </div>
	                <!-- /social -->
	                <div>
	                    <figure><img src="{{ asset('formassets/img/info_graphic_1.svg')}}" alt="" class="img-fluid" width="270" height="270"></figure>
	                    <h2>We are Hiring</h2>
	                    <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
	                    <a href="#0" class="btn_1 rounded yellow">Purchase this template</a>
	                    <a href="#start" class="btn_1 rounded mobile_btn yellow">Start Now!</a>
	                </div>
	                <div class="copy">© 2022 JOBI</div>
	            </div>
	            <!-- /content-left-wrapper -->
	        </div>
	        <!-- /content-left -->
	        <div class="col-xl-8 col-lg-8 content-right" id="start">
	            <div id="wizard_container">
	                <div id="top-wizard">
	                    <span id="location"></span>
	                    <div id="progressbar"></div>
	                </div>
	                <!-- /top-wizard -->
	                <form id="wrapped" method="post" enctype="multipart/form-data">
	                    <input id="website" name="website" type="text" value="">
	                    <!-- Leave for security protection, read docs for details -->
	                    <div id="middle-wizard">
	                        <div class="step">
	                            <h2 class="section_title">Presentacion</h2>
	                            <h3 class="main_question">Informacion Personal</h3>

	                            <div class="form-group add_top_30">
	                                <label for="name">Nombre y Apellido</label>
									<span class="text-xs text-red-600">@error('name') {{ $message }} @enderror</span>
	                                <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');" value="{{ old('name'), $cv->name }}">
	                            </div>
	                            <div class="form-group">
	                                <label for="email">Email Address</label>
									<span class="text-xs text-red-600">@error('email') {{ $message }} @enderror</span>
									<input type="text" name="email"  class="form-control required" onchange="getVals(this, 'email_field');" value="{{ old('email'), $cv->email }}">
	                            </div>
								
	                            <div class="form-group">
	                                <label for="phone">Telefono</label>
									<span class="text-xs text-red-600">@error('phone') {{ $message }} @enderror</span>
                   					 <input type="text" name="phone" class="form-control required" value="{{ old('phone'), $cv->phone }}">
	                            </div>
                                
								<!--
                                <label>Tipo de documento</label>
								<div class="form-group radio_input">
								    <label class="container_radio mr-3">DNI
								        <input type="radio" name="gender" value="Male" class="required">
								        <span class="checkmark"></span>
								    </label>
								    <label class="container_radio">Pasaporte
								        <input type="radio" name="gender" value="Female" class="required">
								        <span class="checkmark"></span>
								    </label>
								</div>

-->
								<div class="form-group">

									<label class="uppercase text-gray-700 text-xs">DniNumber</label>
									<!-- Mensaje de feedback para no enviar el formulario en blanco -->
									<span class="text-xs text-red-600">@error('DniNumber') {{ $message }} @enderror</span>
									<input type="text" name="DniNumber"  class="form-control required" value="{{ old('DniNumber'), $cv->DniNumber }}">
								</div>


								<!-- <label>Gender</label>
								<div class="form-group radio_input">
								    <label class="container_radio mr-3">Male
								        <input type="radio" name="gender" value="Male" class="required">
								        <span class="checkmark"></span>
								    </label>
								    <label class="container_radio">Female
								        <input type="radio" name="gender" value="Female" class="required">
								        <span class="checkmark"></span>
								    </label>
								</div> -->
	                            <div class="form-group add_bottom_30 add_top_20">
	                                <label>Carga tu CV<br><small>(File accepted: .pdf, .doc/docx - Max file size: 150KB for demo limit)</small></label>
	                                <div class="fileupload">
	                                    <input type="file" name="fileupload" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="required">
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step-->

	                        <!-- /Start Branch ============================== -->
	                        <div class="step" data-state="branchtype">
	                            <h2 class="section_title">Work Availability</h2>
	                            <h3 class="main_question">Are you available for work?</h3>
	                            <div class="form-group">
	                                <label class="container_radio version_2">Full time availability
	                                    <input type="radio" name="availability" value="Full-time" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                                <label class="container_radio version_2">Part time availability
	                                    <input type="radio" name="availability" value="Part-time" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                                <label class="container_radio version_2">Freelance / Contract availability
	                                    <input type="radio" name="availability" value="Freelance-Contract" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                            </div>
	                            <small>* Start branch radio based </small>
                                <br>
                                <h2 class="section_tittle">Cargo deseado</h2>
                                <div class="form-group">
	                                <label for="name">Cargo Deseado</label>
	                                <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'email_field');">
	                            </div>
	                        </div>
                            

	                        <!-- /Work Availability > Full-time ============================== -->
	                        <div class="branch" id="Full-time">
	                            <div class="step" data-state="end">
	                                <h2 class="section_title">Work Availability</h2>
	                                <h3 class="main_question">Additional info about "Full Time" availability</h3>
	                                <div class="form-group add_bottom_30">
	                                    <label>Salario Deseado (in USD)</label>
	                                    <label for="minimum_salary_full_time">Choose a range</label>
	                                    <div class="styled-select">
	                                        <select class="form-control required" id="minimum_salary_full_time" name="minimum_salary_full_time">
	                                            <option value="">Choose a range</option>
	                                            <option value="&lt;10k">&lt;10k</option>
	                                            <option value="10-15k">10-15k</option>
	                                            <option value="15-20k">15-20k</option>
	                                            <option value="20-25k">20-25k</option>
	                                            <option value="25-30k">25-30k</option>
	                                            <option value="30-35k">30-35k</option>
	                                            <option value="35-40k">35-40k</option>
	                                            <option value="45-50k">45-50k</option>
	                                            <option value="&gt;50k">&gt;50k</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class="form-group add_bottom_30">
	                                    <label>Cuando podria iniciar labrores?</label>
	                                    <label for="start_availability_full_time">Choose your availability</label>
	                                    <div class="styled-select">
	                                        <select class="form-control required" id="start_availability_full_time" name="start_availability_full_time">
	                                            <option value="">Choose your availability</option>
	                                            <option value="I can start immediately">I can start immediately</option>
	                                            <option value="I need to give 2 or 4 weeks notice">I need to give 2–4 weeks notice</option>
	                                            <option value="I am passively browsing">I am passively browsing</option>
	                                            <option value="I will be available in a couple months">I will be available in a couple months</option>
	                                            <option value="I am not sure">I am not sure</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <label class="custom">Estas dispuesto(a) a trabajar de manera remota?</label>
	                                <div class="form-group radio_input">
	                                    <label class="container_radio mr-3">Yes
	                                        <input type="radio" name="remotely_full_time" value="Yes" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio">No
	                                        <input type="radio" name="remotely_full_time" value="No" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step-->

	                        <!-- /Work Availability > Part-time ============================== -->
	                        <div class="branch" id="Part-time">
	                            <div class="step" data-state="end">
	                                <h2 class="section_title">Work Availability</h2>
	                                <h3 class="main_question">Additional info about "Part Time" availability</h3>
	                                <div class="form-group add_bottom_30">
	                                    <label>Minimum salary? (in USD)</label>
	                                    <label for="minimum_salary_part_time">Choose a range</label>
	                                    <div class="styled-select clearfix">
	                                        <select class="form-control required" id="minimum_salary_part_time" name="minimum_salary_part_time">
	                                            <option value="">Choose a range</option>
	                                            <option value="&lt;2k">&lt;2k</option>
	                                            <option value="3-5k">3-5k</option>
	                                            <option value="5-7k">5-7k</option>
	                                            <option value="7-10k">7-10k</option>
	                                            <option value="&gt;10k">&gt;10k</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class="form-group add_bottom_30">
	                                    <label>How soon would you be looking to start?</label>
	                                     <label for="start_availability_part_time">Choose your availability</label>
	                                    <div class="styled-select clearfix">
	                                        <select class="form-control required" id="start_availability_part_time" name="start_availability_part_time">
	                                            <option value="">Choose your availability</option>
	                                            <option value="I can start immediately">I can start immediately</option>
	                                            <option value="I need to give 2 or 4 weeks notice">I need to give 2–4 weeks notice</option>
	                                            <option value="I am passively browsing">I am passively browsing</option>
	                                            <option value="I will be available in a couple months">I will be available in a couple months</option>
	                                            <option value="I am not sure">I am not sure</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <label class="custom">When you prefer to work?</label>
	                                <div class="form-group radio_input">
	                                    <label class="container_radio mr-3">Morning
	                                        <input type="radio" name="day_preference_part_time" value="Morning" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio mr-3">Afternoon
	                                        <input type="radio" name="day_preference_part_time" value="Afternoon" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio">No Preferences
	                                        <input type="radio" name="day_preference_part_time" value="No Preferences" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step-->

	                        <!-- /Work Availability > Freelance-Contract ============================== -->
	                        <div class="branch" id="Freelance-Contract">
	                            <div class="step" data-state="end">
	                                <h2 class="section_title">Work Availability</h2>
	                                <h3 class="main_question">Additional info about "Freelance/Contract" availability</h3>
	                                <div class="form-group">
	                                    <label for="fixed_rate_contract">Minimum fixed rate? (in USD)</label>
	                                    <input type="text" name="fixed_rate_contract" id="fixed_rate_contract" class="form-control required">
	                                </div>
	                                <div class="form-group">
	                                    <label for="hourly_rate_contract">Minimum hourly rate? (in USD)</label>
	                                    <input type="text" name="hourly_rate_contract" id="hourly_rate_contract" class="form-control required">
	                                </div>
	                                <div class="form-group">
	                                    <label for="minimum_hours_conctract">Minimum hours for a contract?</label>
	                                    <input type="text" name="minimum_hours_conctract" id="minimum_hours_conctract" class="form-control required">
	                                </div>
	                                <label class="custom">Are you willing to work remotely?</label>
	                                <div class="form-group radio_input">
	                                    <label class="container_radio mr-3">Yes
	                                        <input type="radio" name="remotely_contract" value="Yes" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio">No
	                                        <input type="radio" name="remotely_contract" value="No" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step-->

	                        <div class="submit step" id="end">
	                            <div class="summary">
	                                <div class="wrapper">
	                                    <h3>Thank your for your time<br><span id="name_field"></span>!</h3>
	                                    <p>We will contat you shorly at the following email address <strong id="email_field"></strong></p>
	                                </div>
	                                <div class="text-center">
	                                    <div class="form-group terms">
	                                        <label class="container_check">Please accept our <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">Terms and conditions</a> before Submit
	                                            <input type="checkbox" name="terms" value="Yes" class="required">
	                                            <span class="checkmark"></span>
	                                        </label>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step last-->

	                    </div>
	                    <!-- /middle-wizard -->
	                    <div id="bottom-wizard">
	                        <button type="button" name="backward" class="backward">Prev</button>
	                        <button type="button" name="forward" class="forward">Next</button>
	                        <button type="submit" name="process" class="submit">Submit</button>
	                    </div>
	                    <!-- /bottom-wizard -->
	                </form>
	            </div>
	            <!-- /Wizard container -->
	        </div>
	        <!-- /content-right-->
	    </div>
	    <!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	<!-- /menu button -->
	
	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
	<script src="{{ asset('formassets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('formassets/js/common_scripts.min.js')}}"></script>
	<script src="{{ asset('formassets/js/velocity.min.js')}}"></script>
	<script src="{{ asset('formassets/js/common_functions.js')}}"></script>
	<script src="{{ asset('formassets/js/file-validator.js')}}"></script>

	<!-- Wizard script-->
	<script src="{{ asset('formassets/js/func_1.js')}}"></script>

</body>
</html>