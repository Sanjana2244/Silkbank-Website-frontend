<?php include 'common/header.php'; ?>

<div class="profit_rates">
    <div class="Banner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-lg-4 mt-0">
                <img src="assets/images/Career-banner.jpg" alt="item" width="100%" />
            </div>

        </div>
    </div>


    <section class="career_form py-6">
        <div class="container">
            <form class="contact_us_form">
                <div class="form-row">
                    <div class="col-md-9 mt-5">
                        <label class="careers">Careers</label>
                    </div>

                    <div class="col-md-9">
                        <p class="career-para">Be it an internship or a job, we nurture and help you grow in your professional life. Silkbank will support you in your professional growth through extensive training and experiential learning. We provide numerous benefits along with a diverse, energetic and dedicated work environment.</p>
                    </div>


                    <div class="col-md-7 text-center mt-5 mb-3">
                        <label class="mb-3 applying-for">Submit Your Profile</label>
                    </div>
                </div>
                <div class="m-lg-0 mx-3">


                    <div class="form-row">
                        <div class="col-md-9 mt-3">
                            <div class="form-group">
                                <input type="text" placeholder="Name" name="name" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" placeholder="Last Name" name="Last_name" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-9">
                            <select class="form-control" name="Contact[reason]" id="Contact_reason">
                                <option value="">Select City</option>
                                <option value="Karachi">Karachi</option>
                                <option value="Faisalabad">Faisalabad</option>
                                <option value="Lahore">Lahore</option>
                                <option value="Multan">Multan</option>
                                <option value="Islamabad">Islamabad </option>
                                <option value="Rawalpindi">Rawalpindi</option>
                                <option value="Peshawar">Peshawar</option>
                                <option value="Quetta">Quetta</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row my-3">
                        <div class="col-md-9">
                            <select class="form-control" name="Contact[reason]" id="Contact_reason">
                                <option value="">Area of Interest</option>
                                <option value="HR">HR</option>
                                <option value="Branch Banking">Branch Banking</option>
                                <option value="Marketing of Financial Services">Marketing of Financial Services</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" placeholder="Phone Number" name="phone" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-9">
                            <select class="form-control" name="Contact[reason]" id="Contact_reason">
                                <option value="">Select Employment Status</option>
                                <option value="Employed">Employed</option>
                                <option value="Unemployed">Unemployed</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row my-3">
                        <div class="col-md-9">
                            <select class="form-control" name="Contact[reason]" id="Contact_reason">
                                <option value="">Select Education Level</option>
                                <option value="High School">High School</option>
                                <option value="Undergraduate">Undergraduate</option>
                                <option value="Postgraduate">Postgraduate</option>
                                <option value="Professional Education">Professional Education</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-9">
                            <select class="form-control" name="Contact[reason]" id="Contact_reason">
                                <option value="">Select Experience Level</option>
                                <option value="Fresh Graduate">Fresh Graduate</option>
                                <option value="1-2 years">1-2 years</option>
                                <option value="3-5 years">3-5 years</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col-md-9">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message" style="height:250px" name="message" value="" spellcheck="false"></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="file">
                    <!-- <div class="file-upload">
                        <label for="upload" class="file-upload__label"> upload your Resume here </label>
                        <input id="upload" class="file-upload__input" type="file" name="file-upload">
                    </div> -->
                    <div class="form-row text-center text-sm-center text-md-left text-lg-left mt-3">
                        <div class="col-md-5 ">
                            <button type="submit" class="btn btn-submit btn-info w-100 contact-submit-btn">Apply Now</button>
                        </div>
                    </div>

                    <p class="text-center mb-0 primary-color my-2">OR</p>


                    <div class="form-row  text-center text-sm-center text-md-left text-lg-left justify-content-center mb-5">
                        <div class="mr-3">
                            <label class="email-resume">Email Your Resume</label>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <p><a href="mailto:recruitment@silkbank.com.pk">recruitment@silkbank.com.pk</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>




    <?php include 'common/footer.php'; ?>