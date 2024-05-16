<?php include 'common/header.php'; ?>

<div class="profit_rates ">
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

                    <div class="col-md-9 text-lg-left text-center mt-lg-5 mt-md-5">
                        <label class="mb-3 for-queries">For queries, suggestions and feedback, please fill the
                            following form</label>
                    </div>
                </div>
                <div class="m-lg-0 mx-3">


                    <div class="form-row">
                        <div class="col-md-9 mt-3">
                            <div class="form-group">
                                <select class="form-control" name="Contact[reason]" id="Contact_reason">
                                    <option value="">Select Type</option>
                                    <option value="Complain">Complain</option>
                                    <option value="Request">Request</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-9">
                            <select class="form-control" name="Contact[reason]" id="Contact_reason" required="true">
                                <option value="">Select Product</option>
                                <option value="Distribution">Credit Cards</option>
                                <option value="Complaints">Personal Loan</option>
                                <option value="Career">E-banking</option>
                                <option value="Other">Utility bill</option>
                                <option value="Distribution">Mobile Banking/SMS Banking/Mobile App</option>
                                <option value="Complaints">ATM/Debit Card</option>
                                <option value="Career">Account Maintanance</option>
                                <option value="Other">Call center/Phone Banking Issues</option>
                                <option value="Distribution">Distribution</option>
                                <option value="Complaints">Complaints</option>
                                <option value="Career">Career</option>
                                <option value="Other">Other</option>
                                <option value="Distribution">Distribution</option>
                                <option value="Complaints">Complaints</option>
                                <option value="Career">Career</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row my-3">
                        <div class="col-md-9">
                            <select class="form-control" name="Contact[reason]" id="Contact_reason" required="true">
                                <option value="">Issue Type</option>
                                <option value="Distribution">Distribution</option>
                                <option value="Complaints">Complaints</option>
                                <option value="Career">Career</option>
                                <option value="Other">Other</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" placeholder="First Name" name="Contact[first_name]" value="" class="form-control" required="true">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" placeholder="Last Name" name="Contact[last_name]" value="" class="form-control" required="true">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" placeholder="Mobile/Landline No." name="phone" value="" class="form-control" required="true">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" placeholder="CNIC" name="CNIC" value="" class="form-control" required="true">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <select class="form-control" name="Contact[reason]" id="Contact_reason" required="true">
                                    <option value="">Select Customer</option>
                                    <option value="Distribution">Distribution</option>
                                    <option value="Complaints">Complaints</option>
                                    <option value="Career">Career</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" placeholder="Email" name="Email" value="" class="form-control" required="true">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" placeholder="City" name="City" value="" class="form-control" required="true">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" placeholder="Country" name="Country" value="" class="form-control" required="true">
                            </div>
                        </div>
                    </div>




                    <div class="form-row mt-3">
                        <div class="col-md-9">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message/Comments" style="height:250px" name="message" value="" spellcheck="false" required="true"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-row text-center text-sm-center text-md-left text-lg-left mb-lg-5 mb-md-5">
                        <div class="col-md-5 ">
                            <button type="submit" class="btn btn-submit btn-info w-100 contact-submit-btn">Submit</button>
                        </div>
                    </div>

                    <!-- <div class="form-row mt-3 mb-2 text-center text-sm-center text-md-left text-lg-left justify-content-center">


                        <div class="">
                            <p><a href="#">Click here to view Complaints
                                    History</a></p>
                        </div>

                    </div> -->


                </div>
            </form>
        </div>
    </section>
</div>




<?php include 'common/footer.php'; ?>