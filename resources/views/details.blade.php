@extends('template')
@section('main_content')
@CSRF



 <!-- Page Title Start -->
 <section class="page-title title-bg6">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Job Details</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Job Details</li>
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

        <!-- Job Details Section Start -->
        <section class="job-details ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="job-details-text">
                                    <div class="job-card">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <div class="company-logo">
                                                    <img src="assets/img/company-logo/1.png" alt="logo">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="job-info">
                                                    <!-- Tomar el id de la oferta -->
                                                    <input type="hidden" id="id_job" name="id_job" value="{{$details ->id}}">
                                                    <!-- fin Tomar el id de la oferta -->
                                                    <h3>{{$details ->jobtitle}}</h3>
                                                    <ul>
                                                        <li>
                                                            <i class='bx bx-location-plus'></i>
                                                            {{$details ->companylocation}}
                                                        </li>
                                                        <li>
                                                            <i class='bx bx-filter-alt' ></i>
                                                            {{$details ->jobtype}}
                                                        </li>
                                                        <li>
                                                            <i class='bx bx-briefcase' ></i>
                                                            Freelance
                                                        </li>
                                                    </ul>
                                                    
                                                    <span>
                                                        <i class='bx bx-paper-plane' ></i>
                                                        Apply Before: June 01,2021
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="details-text">
                                        <h3>Description</h3>
                                        <p>{{$details ->jobdescription}}</p>

                                        <p>{{$details ->jobdescription}}</p>
                                    </div>
                                    
                                    <div class="details-text">
                                        <h3>Requirements</h3>
                                       <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                        <ul>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                Work experience
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                Skills (soft skills and/or technical skills)
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                WPersonal qualities and attributes.
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                Support software roll-outs to production.
                                            </li>
                                            <li>
                                                <i class='bx bx-check'></i>
                                                Guide and mentor junior engineers. Serve as team lead if appropriate.

                                            </li>
                                        </ul>
                                    </div>

                                    <div class="details-text">
                                        <h3>Job Details</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td><span>Company </span></td>
                                                            <td>{{$details ->companyname}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Location </span></td>
                                                            <td>{{$details ->companylocation}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Job Type </span></td>
                                                            <td>{{$details ->jobtype}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Email </span></td>
                                                            <td>{{$details ->companyemail}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td><span>Experince </span></td>
                                                            <td>{{$details ->jobexperience}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Language </span></td>
                                                            <td>English</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Salary </span></td>
                                                            <td>{{$details ->jobsalary}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Website </span></td>
                                                            <td>{{$details ->companyweb}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="theme-btn">
                                       
                                        @if ($apply_flag == 0)
                                        <input type="button" disable href="#" class="" id="apply" value="Apply">
                                        <label id="response"></label>
                                        @else
                                            <div class="alert alert-success" role="alert">
                                            Ya esta postulado a la oferta
                                            </div>
                                            
                                     @endif
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-lg-4">
                        <!-- 
                        <div class="job-sidebar">
                            <h3>Posted By</h3>
                            <div class="posted-by">
                                <img src="assets/img/client-1.png" alt="client image">
                                <h4>John Doe</h4>
                                <span>CEO of Tourt Design LTD</span>
                            </div>
                        </div>

                            -->

                        <div class="job-sidebar">
                            <h3>Location</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.27991517034!2d-74.25987556253516!3d40.697670063539654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1588772651198!5m2!1sen!2sbd" frameborder="0"></iframe>
                        </div>

                        <div class="job-sidebar">
                            <h3>Keywords</h3>
                        
                            <ul>
                                <li>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">Data Sceince</a>
                                </li>
                                <li>
                                    <a href="#">SEO</a>
                                </li>
                                <li>
                                    <a href="#">Content Writter</a>
                                </li>
                                <li>
                                    <a href="#">Finance</a>
                                </li>
                                <li>
                                    <a href="#">Business</a>
                                </li>
                                <li>
                                    <a href="#">Education</a>
                                </li>
                                <li>
                                    <a href="#">Graphics</a>
                                </li>
                                <li>
                                    <a href="#">Video</a>
                                </li>
                            </ul>
                           

                        </div>

                        <div class="job-sidebar social-share">
                            <h3>Share In</h3>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- Job Details Section End -->

       
        <!-- Subscribe Section End -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script>



          //confirm new no register payment

          $('#apply').click(function(e){
            
            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }



            });

             e.preventDefault();

              //var confirmation = confirm("Do you want to register the payment?");

              var id_job = $('#id_job').val();

             
            //  if(confirmation == true){

                $.ajax({

                  url: "{{ route('makeApply') }}",

                  type: "POST",

                  data:{

                    id_job: id_job, 

                  },

                  dataType: 'json',

                  success: function(response) {

                    if(response) {

                        document.getElementById("response").innerHTML = response;                 

                        

                    }

                  }

                })

             //}



          });



      </script>

@endsection