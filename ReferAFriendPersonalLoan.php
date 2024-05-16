<?php include 'common/header.php'; ?>



<div class="side-bar">
    <div class="page_width">
        <div class="breadcrumbs">
            <!-- <p class="text-uppercase mb-0"> HOME &nbsp;/ &nbsp; Cards &nbsp;/ &nbsp; credit cards &nbsp;/ <br><span>refer a friend</span></p> -->


            <p class="text-uppercase mb-0"><a href="./index.php">HOME</a> &nbsp;/ &nbsp; <a href="./cards.php">Cards</a> &nbsp;/ &nbsp;<a href="./cards.php"> credit cards</a> &nbsp;/ <br><span><a href="./ReferAFriendPersonalLoan.php">refer a friend</a></span></p>


        </div>
        <div class="row">
            <div class="col-lg-3">



                <h2 class="heading mb-4">
                    <span class="dark m-0">Personal</span>
                    <span class="light m-0">Loan</span>
                </h2>

                <!-- <div class="links">
                   
                    <div><a href="#">Silkbank Credit Cards</a></div>
                    <div><a href="#">General Features & Benefits</a></div>
                    <div><a href="#">VBV</a></div>
                    <div><a href="#">Value Added Services</a></div>
                    <div><a href="./CreditCardReward.php">Cashback & Rewards Program</a></div>
                    <div><a href="./Discount.php">Alliances & Discounts</a></div>
                    <div><a href="./ApplyForInstallment.php">Flexible Installment Plans</a></div>
                    <div><a href="#">Design my Card</a></div>
                    <div><a href="#">Silkbank Credit Card Campaigns</a></div>
                    <div><a href="./ApplyOnline.php">Apply Online</a></div>
                    <div><a href="#">Download</a></div>
                    <div><a href="#">Understanding Credit Cards</a></div>
                    <div><a href="./TipsForCardSecurity.php">Tips for Card Security</a></div>
                    <div><a href="./Faqs.php">FAQs</a></div>
                    <div><a href="#">Contacts</a></div>
                </div> -->
            </div>

            <div class="col-lg-9 apply-online">

                <div class="form-heading">
                    <h3 class="mb-4 text-uppercase">Refer a Friend</h3>
                </div>
                <div class="m-lg-0 mx-4">

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 row p-0 mb-4">
                        <div class=" col-md-6 col-sm-12 pl-0 m-lg-0  mb-4 ">
                            <input class="form-control" placeholder="Your Name" name="Contact[Your Name]" id="Contact_first_name" type="text">


                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="form-control" placeholder="Your Friend Name " name="Contact[Your City]" id="Contact_last_name" type="text">

                        </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-12 row p-0 align-items-center mb-4">

                        <!-- <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="col-md-3 p-0">
                                    <p class="mb-0 form-text">CNIC Number</p>
                                </div>
                                <div class="col-md-3 pr-0">
                                    <input class="form-control text-center" placeholder="420xx" name="Contact[code]" id="Contact_code" type="text">

                                </div>
                                <div class="col-md-4">
                                    <input class="form-control text-center" placeholder="xxxxxxxxxxxx" name="Contact[code]" id="Contact_code" type="text">

                                </div>
                                <div class="col-md-2 p-0">
                                    <input class="form-control text-center" placeholder="x" name="Contact[code]" id="Contact_code" type="text">

                                </div>
                            </div>


                        </div> -->

                        <div class="col-md-6 col-sm-12">
                            <div class="row align-items-center  mx-0">
                                <div class="col-md-3 col-sm-12 p-0 m-lg-0  mb-4">
                                    <p class="mb-0 form-text">CNIC Number</p>
                                </div>
                                <div class="col-md-3 col-sm-12 pr-0 m-lg-0  mb-4">
                                    <input class="form-control text-center" placeholder="420xx" name="Contact[code]" id="Contact_code" type="text">

                                </div>
                                <div class="col-md-4  col-sm-12 m-lg-0  mb-4">
                                    <input class="form-control text-center" placeholder="xxxxxxxxxxxx" name="Contact[code]" id="Contact_code" type="text">

                                </div>
                                <div class="col-md-2  col-sm-12 p-0 m-lg-0  mb-4">
                                    <input class="form-control text-center" placeholder="x" name="Contact[code]" id="Contact_code" type="text">

                                </div>
                            </div>


                        </div>

                        <div class="col-md-6">

                            <input class="form-control" placeholder="Your Friend Contact Detail | Mobile Or Landline No." name="Contact[Your Name]" id="Contact_first_name" type="number">


                        </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-12 row p-0 align-items-center">
                        <div class="col-md-6 col-sm-12 m-lg-0 mb-3">
                            <p class="form-text mt-0 mb-0">Are you a silkbank customer?</p>
                            <div id="my-radio" class="d-flex radio-labels ">
                                <input class="mb-1 mr-4 radio-button" type="radio" id="html" name="fav_language" value="HTML">
                                <label class="mr-5 form-text" for="html">Yes</label><br>
                                <input class="mb-1 mr-4 radio-button" type="radio" id="css" name="fav_language" value="CSS">
                                <label class="form-text" for="css">No</label><br>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 m-lg-0 mb-1">
                            <input class="form-control" placeholder="EMAIL ID " name="Contact[Your Name]" id="Contact_first_name" type="text">
                        </div>


                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-12 row p-0 mb-4">
                        <div class=" col-md-6 pl-0 m-lg-0 mb-4">
                            <input class="form-control" placeholder="City " name="Contact[first_name]" id="Contact_first_name" type="text">



                        </div>
                        <div class="col-md-6">
                            <select class="form-control" placeholder="Product your friend is interested in " name="Product your friend is interested in " id="Contact_reason">
                                <option value="">Product your friend is interested in </option>
                                <option value="Personal Installment Loan">Personal Installment Loan</option>
                                <option value="Ready Line">Ready Line</option>
                                <option value="Career">Credit Card</option>
                                <option value="Other">Flexi Munafa Term Deposit</option>
                            </select>


                        </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-12 row p-0 mb-0 align-items-center">
                        <div class="col-md-6">
                            <div class="row align-items-center">
                                <div class="col-md-3 p-0">
                                    <p class="mb-0 form-text"> Security Code</p>
                                </div>
                                <div class="col-md-3 security-captcha m-lg-0 mb-3">
                                    <img src="assets/images/Security-Code.png" alt="image" width="100%">
                                </div>
                                <div class="col-md-6 m-lg-0 mb-4">
                                    <input class="form-control text-center" placeholder="Enter Security Code" name="Contact[last_name]" id="Contact_last_name" type="text">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 m-lg-0 mb-3 d-flex justify-content-end personal-loan-refer-friend-submit-button">
                            <div class="button">
                                <a href="https://www.google.com/">Submit</a>
                            </div>
                        </div>



                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 ">
                            <p class=" form-underline-text m-0 mt-2">Cant read this image? Click <a class="primary-color" href="#">Here</a> to refresh</p>

                        </div>

                    </div>




                    <div class="row button-portion my-lg-5 my-3">
                        <div class="button-portion personal-loan-refer-friend-button d-flex">
                            <a style="color: #ffffff;" class="button  my-lg-0 my-2" href="./ApplyOnlinePersonalLoan.php">APPLY ONLINE
                                <!-- <div class="button  my-lg-0 my-2"> -->
                                <div class="image">
                                    <img src="assets/images/ApplyOnline-image.png" alt="icon" width="25%">
                                </div>
                                <!-- <a href="./ApplyOnlinePersonalLoan.php">APPLY ONLINE </a> -->
                                <!-- </div> -->
                            </a>


                            <!-- <div class="personal-loan-refer-friend-button d-flex"> -->
                            <a style="color: #ffffff;"  class="button  my-lg-0 my-2" href="./EMICalculator.php">EMI
                                <!-- <div class="button  my-lg-0 my-2"> -->
                                    <div class="image">
                                        <img src="assets/images/emi-icon.png" alt="icon" width="25%">
                                    </div>
                                    <!-- <a href="./EMICalculator.php">EMI</a> -->
                                <!-- </div> -->
                            </a>
                            <!-- </div> -->

                        </div>
                    </div>

                </div>

















            </div>




        </div>
    </div>
</div>



<?php include 'common/footer.php'; ?>