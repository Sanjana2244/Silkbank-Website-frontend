<?php include 'common/header.php'; ?>



<div class="side-bar">
    <div class="page_width">

        <div class="breadcrumbs">

            <p class="text-uppercase mb-0"><a href="./index.php">HOME</a> &nbsp;/ &nbsp; <a href="./cards.php">Cards</a>
                &nbsp;/ &nbsp; <a href="./cards.php">credit cards</a> &nbsp;/ <br><span><a href="./EMICalculator.php">emi calculator</a></span></p>




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

            <div class="col-lg-9 Emi-calculator">

                <div class="form-heading">
                    <h3 class="mb-4 text-uppercase">emi calculator</h3>
                </div>

                <div class="form-group row col-lg-12 col-md-12 col-12  p-0 p-sm-2">
                    <div class=" col-lg-6 col-md-12 col-sm-12 pl-0 m-lg-0  mb-3">
                        <!-- <input class="form-control" placeholder="Tenure" name="Tenure" id="Tenure" type="text"> -->
                        <select class="form-control" name="Contact[reason]" id="Contact_reason">
                            <option value="">Tenure </option>
                            <option value="Distribution">1 Year</option>
                            <option value="Complaints">2 Year</option>
                            <option value="Career">3 Year</option>
                            <option value="Other">4 Year</option>
                            <option value="Other">5 Year</option>

                        </select>


                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <select class="form-control" name="Contact[reason]" id="Contact_reason">
                            <option value="">Salaried </option>
                            <option value="Distribution">Self Employeed</option>
                            <!-- <option value="Complaints">Complaints</option>
                            <option value="Career">Career</option>
                            <option value="Other">Other</option> -->
                        </select>


                    </div>
                </div>

                <div class="form-group row  col-lg-12 col-md-12 col-12  p-0 p-sm-2 mb-4">
                    <div class=" col-md-6 pl-0 m-lg-0  mb-3">
                        <input class="form-control " placeholder="Enter Your Current Monthly Income Here (PKR)" name="Contact[Your Name]" id="Contact_first_name" type="text">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Enter Your Desired Loan Amount Here (PKR)" name="Contact[Your City]" id="Contact_last_name" type="text">
                    </div>
                </div>

                <div class="form-group row col-lg-12 col-md-12 col-12  p-0 p-sm-2  ">
                    <div class="col-md-6">
                        <p class="form-text mt-1 mb-0">Are you using any similar products?</p>
                        <div id="my-radio" class=" radio-labels d-flex">
                            <input class="mb-1 mr-4 radio-button" type="radio" id="html" name="fav_language" value="HTML">
                            <label class="mr-5 form-text" for="html">Yes</label><br>
                            <input class="mb-1 mr-4 radio-button" type="radio" id="css" name="fav_language" value="CSS">
                            <label class="form-text" for="css">No</label><br>
                        </div>
                    </div>
                    <div class="form-text col-md-6">
                        <p class="Text m-lg-0 mb-3">How long have you been using them for?</p>
                        <select class="form-control" name="Contact[reason]" id="Contact_reason">
                            <option value="">more than 12 month </option>
                            <option value="Distribution">Distribution</option>
                            <option value="Complaints">Complaints</option>
                            <option value="Career">Career</option>
                            <option value="Other">Other</option>
                        </select>
                        <p class="form-underline-text text-right">Disclaimers</p>

                    </div>



                </div>


                <div class="row button-portion my-lg-5 my-2 ">
                    <div class="Emi-calculator-button d-lg-flex m-0 mx-sm-2">
                        <!-- <div>
                            <a class="btn btn-primary" href="#" role="button" style="position:relative">Apply Online
                                <div style="position: absolute; left:0; top:0; background-color:red; border: solid red; border-radius:50%; width: 50px; height:50px;">
                                    <div class="d-flex justify-content-center">
                                        <img src="./assets/images/applyOnline-Icon.png" alt="" width="40%">
                                    </div>
                                </div>
                            </a>
                        </div> -->
                        <a style="color: #ffffff;" class="Button" href="./ApplyOnlinePersonalLoan.php">APPLY ONLINE




                            <div class="image">
                                <img src="assets/images/ApplyOnline-image.png" alt="icon" width="25%">
                            </div>


                        </a>
                        <a style="color: #ffffff;" class="Button m-lg-0 mt-md-3" href="./ReferAFriendPersonalLoan.php">REFER A FRIEND


                            <div class="image">
                                <img src="assets/images/referFriend-icon.png" alt="icon"  width="25%">
                            </div>

                        </a>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">

                            <div class="Emi-calculator-submit-button">
                                <!-- <div class="button"> -->
                                <a class="button" href="#">Calculate</a>
                                <!-- </div> -->
                            </div>
                        </div>


                    </div>


                </div>

            </div>
        </div>
    </div>
</div>


<?php include 'common/footer.php'; ?>