<?php include 'common/header.php'; ?>



<div class="side-bar">
    <div class="page_width">
        <div class="breadcrumbs">


            <p class="text-uppercase mb-0"><a href="./index.php">HOME</a> &nbsp;/ &nbsp; <a href="./cards.php">Cards</a> &nbsp;/ &nbsp; <a href="./cards.php">credit cards</a> &nbsp;/<br> <a href="./ApplyForInstallment.php">apply for installment plan</a> &nbsp;/ &nbsp; <span> <a href="./ReferAFriend.php">refer a friend</a> </span> </p>



        </div>
        <div class="row">
            <div class="col-lg-3">

                <h2 class="heading mb-4">
                    <span class="dark m-0">Credit</span>
                    <span class="light m-0">Cards</span>
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
                    <h3 class="mb-4">Refer a Friend</h3>
                </div>
                <img src="assets/images/Refer a friend.png" alt="image" width="100%">
                <div class="m-lg-0 mx-4">

                    <div class="form-group col-lg-12 col-md-12 col-12  p-0 mb-4 mt-5">
                        <div class=" col-md-12 pl-0 ">
                            <input class="form-control" placeholder="Your Name" name="Contact[Your Name]" id="Contact_first_name" type="text">
                        </div>

                    </div>

                    <div class="form-group row col-lg-12 col-md-12 col-12  p-0  mb-4 ml-1">
                        <div class="col-md-2 col-sm-12 ">
                            <p class="mb-lg-0 ml-2 mb-3 text-center  form-text">CNIC Number</p>
                        </div>
                        <div class=" col-md-4 col-sm-12 pl-0 m-lg-0  mb-4">
                            <input class="form-control" placeholder="4200xxx" name="Contact[code]" id="Contact_code" type="text">
                        </div>
                        <div class="col-md-4 m-lg-0  mb-4">
                            <input class="form-control" placeholder="xxxxxxxxxxxx" name="Contact[code]" id="Contact_code" type="text">

                        </div>
                        <div class="col-md-2 pl-0  ">
                            <input class="form-control" placeholder="xxxxx" name="Contact[code]" id="Contact_code" type="text">

                        </div>
                    </div>


                    <div class="form-group col-lg-12 col-md-12 col-12  p-0 ml-1">
                        <div id="my-radio" class="col-md-6 d-flex align-items-center radio-button ">
                            <p class="form-text ml-3 mt-1 mr-4 mb-0">Are you a silkbank customer?</p>
                            <div class="d-flex justify-content-center align-items-center ">
                                <input class=" mr-2 radio-button" type="radio" id="html" name="fav_language" value="HTML">
                                <label class="m-0 mr-4 form-text" for="html">Yes</label><br>
                                <input class=" mr-2 radio-button" type="radio" id="css" name="fav_language" value="CSS">
                                <label class="m-0 form-text" for="css">No</label><br>
                            </div>


                        </div>


                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-12 row  p-0 mb-0 ml-1">
                        <div class="col-md-6">
                            <p class="form-text ml-3">Your Friend’s Contact Detail</p>

                        </div>


                    </div>


                    <div class="form-group col-lg-12 col-md-12 col-12 row  p-0 mb-4">
                        <div class="col-md-6 pl-0  m-lg-0 mb-4">
                            <input class="form-control" placeholder="Mobile or landline No." name="Contact[first_name]" id="Contact_first_name" type="text">


                        </div>
                        <div class="col-md-6 ">
                            <input class="form-control" placeholder="Email ID" name="Contact[first_name]" id="Contact_first_name" type="text">

                        </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-12 row  p-0">
                        <div class=" col-md-6 pl-0  m-lg-0 mb-4">
                            <select class="form-control" name="Contact[reason]" id="Contact_reason">
                                <option value="">Product your friend is interested in</option>
                                <option value="Distribution">Distribution</option>
                                <option value="Complaints">Complaints</option>
                                <option value="Career">Career</option>
                                <option value="Other">Other</option>
                            </select>




                        </div>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="City" name="Contact[first_name]" id="Contact_first_name" type="text">


                        </div>
                    </div>
                    <div class="form-group row col-lg-12 col-md-12 col-12  p-0 mb-4 align-items-baseline">
                        <div class="security-code col-md-6 d-flex align-items-center">
                            <div>
                                <p class="mb-0 form-text"> Security Code</p>
                            </div>
                            <div> <img src="assets/images/Security-Code.png" alt="image" width="100%">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <input class="form-control m-lg-0 mt-2 mb-4" placeholder="Enter Security Code" name="Contact[last_name]" id="Contact_last_name" type="text">
                            <p class="mb-0 form-underline-text pl-3 mt-2">Cant read this image? Click Here to refresh</p>

                        </div>
                    </div>
                </div>

                <!-- <div class="form-group col-lg-12 col-md-12 col-12 row  p-0 mb-4 align-items-baseline">
                    <div class="col-md-6 d-flex align-items-center">


                        <div>
                            <p class="mb-0 form-text"> Security Code</p>
                        </div>
                        <div> <img src="assets/images/Security-Code.png" alt="image" width="100%">
                        </div>




                    </div>




                    <div class="col-md-6">
                        <input class="form-control" placeholder="Enter Security Code" name="Contact[last_name]" id="Contact_last_name" type="text">
                        <p class="mb-0 form-underline-text pl-3 mt-2">Cant read this image? Click Here to refresh</p>

                    </div>
                </div> -->








                <div class=" button-portion d-flex justify-content-center my-lg-5 my-sm-2">
                    <div class="button-container my-lg-0 my-2">
                        <a class="Button" href="#">Submit</a>
                    </div>
                    <div class="button-container my-lg-0 my-2">


                        <a class="Button" href="./ReferAFriend.php">Refer a friend</a>
                    </div>
                    <div class="button-container my-lg-0 my-2">


                        <a class="Button" href="./EMICalculator.php">EMI Calculator</a>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>




<?php include 'common/footer.php'; ?>