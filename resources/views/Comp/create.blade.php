@extends('template')

@section('main_content')




                <!-- Post Job Section Start -->
     <div class="job-post ptb-100">
            <div class="container">

           
                <form class="job-post-from" action="{{ route ('Comp.store') }}" method="POST" >
                @csrf    
                
                <h2>Fill Up Your Job information</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" class="form-control" id="exampleInput1" name="jobtitle" placeholder="Job Title or Keyword" required value="{{ old('jobtitle'), $offers->jobtitle }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Category</label>
                                <input type="text" class="form-control" id="exampleInput1" name="jobcategory" placeholder="Job Category" required value="{{ old('jobcategory'), $offers->jobcategory }}">

                                <!--
                                <select class="category">
                                    <option data-display="Category">Category</option>
                                    <option value="1">Web Development</option>
                                    <option value="2">Graphics Design</option>
                                    <option value="4">Data Entry</option>
                                    <option value="5">Visual Editor</option>
                                    <option value="6">Office Assistant</option>
                                </select>
                                    -->
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" class="form-control" id="exampleInput2" name="companyname" placeholder="Company Name" required value="{{ old('companyname'), $offers->companyname }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Email</label>
                                <input type="email" class="form-control" id="exampleInput3" name="companyemail" placeholder="e.g. hello@company.com" required  value="{{ old('companyemail'), $offers->companyemail }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Website (Optional)</label>
                                <input type="text" class="form-control" id="exampleInput4" name="companyweb" placeholder="e.g www.companyname.com" value="{{ old('companyweb'), $offers->companyweb }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" id="exampleInput5" name="companylocation" placeholder="e.g. London" required value="{{ old('companylocation'), $offers->companylocation }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Type</label>
                                <input type="text" class="form-control" id="exampleInput1" name="jobtype" placeholder="Full time" required value="{{ old('jobtype'), $offers->jobtype }}">
                                <!--
                                <select class="category">
                                    <option data-display="Job Type">Job Type</option>
                                    <option value="1">Full Time</option>
                                    <option value="2">Part Time</option>
                                    <option value="4">Freelancer</option>
                                </select>
                                -->
                              
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job Tags</label>
                                <input type="text" class="form-control" id="exampleInput6" name="jobtags" placeholder="e.g. web design, graphics design, video editing" required value="{{ old('jobtags'), $offers->jobtags }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Salary (Optional)</label>
                                <input type="number" class="form-control" id="exampleInput7" name="jobsalary" placeholder="e.g. $20,000" value="{{ old('jobsalary'), $offers->jobsalary }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Experience</label>
                                <input type="text" class="form-control" id="exampleInput8" name="jobexperience" placeholder="e.g. 1 year" required value="{{ old('jobexperience'), $offers->jobexperience }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Apply Before</label>
                                <input type="datetime-local" class="form-control" id="exampleInput9" name="applybefore" placeholder="04 agt 2022" required value="{{ old('applybefore'), $offers->applybefore }}">
                            </div>
                        </div>   
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Requisitos</label>
                                <textarea class="form-control description-area" id="exampleFormControlTextarea2" rows="6" name="requirements" placeholder="Job requirements" required value="{{ old('requirements'), $offers->requirements }}"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Job Description</label>
                                <textarea class="form-control description-area" id="exampleFormControlTextarea1" rows="6" name="jobdescription" placeholder="Job Description" required value="{{ old('jobdescription'), $offers->jobdescription }}"></textarea>
                            </div>
                        </div>


                        <div class="col-md-12 text-center">
                            <button type="submit" class="post-btn">
                                Post A Job
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Post Job Section End -->
                    


@endsection
     

