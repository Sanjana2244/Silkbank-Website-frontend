<?php include 'common/header.php'; ?>



<div class="side-bar current-account">
    <div class="page_width">
        <div class="breadcrumbs">
            <p class="text-uppercase mb-0"><a href="./index.php"> HOME</a> &nbsp;/ &nbsp; <span><a
                        href="./deposits.php">deposits</a></span></p>

        </div>
        <div class="row">
            <div class="col-lg-3">
                <h2 class="heading mb-4">
                    <span class="dark" style="font-size: 40px;">Deposits</span>
                </h2>

                <div class="links">
                    <div class="dropdown current-account-dropdown">

                        <a class="dropbtn" href="./AccountOpening.php">Account Opening Process</a>
                        <div id="tab-data" class="dropdown-content">
                            <a href="AccountOpening.php#accountoprningprocessforbranchcustomer">Account Opening Process
                                for In-Branch Customer</a>
                            <a href="AccountOpening.php#accountoprningprocessfordigitalonboarding">Account Opening
                                Process for Digital Onboarding</a>


                        </div>
                    </div>
                    <div class="dropdown current-account-dropdown">

                        <a class="dropbtn" href="./CurrentAccount.php">Current Account</a>
                        <div id="tab-data" class="dropdown-content">
                            <a href="CurrentAccount.php#asaanaccount">Asaan Account</a>
                            <a href="CurrentAccount.php#allinoneaccount">All in One Account</a>
                            <a href="CurrentAccount.php#basicbankingaccount">Basic Banking Account</a>
                            <a href="CurrentAccount.php#businessvalueaccountplus">Business Value Account Plus</a>
                            <a href="CurrentAccount.php#businessvalueaccount">Business Value Account</a>
                            <a href="CurrentAccount.php#salarypremiumaccount">Salary Premium Account</a>
                            <a href="CurrentAccount.php#salarypremiumplus">Salary Premium Plus</a>
                            <a href="CurrentAccount.php#onlineexpress">Online Express</a>

                        </div>
                    </div>
                    <div class="dropdown saving-account-dropdown">
                        <a class="dropbtn" id="saving" href="./SavingAccount.php">Saving Account</a>
                        <div id="tab-data" class="dropdown-content">
                            <a href="SavingAccount.php#munafarozana">Munafa Rozana</a>
                            <a href="SavingAccount.php#plssavings">PLS Savings</a>
                            <a href="SavingAccount.php#supersaver">Super Saver</a>

                        </div>
                    </div>
                    <div class="dropdown term-deposits-dropdown">
                        <a class="dropbtn" id="term" href="./TermDeposits.php">Term Deposits</a>
                        <div id="tab-data" class="dropdown-content">
                            <a href="TermDeposits.php#fleximunafadeposit">Flexi Munafa Term Deposit</a>
                            <a href="TermDeposits.php#salanamunafa">Salana Munafa</a>
                            <a href="TermDeposits.php#mahanamunafa">Mahana Munafa</a>
                            <a href="TermDeposits.php#specialnoticedeposit">Special Notice Deposit Account</a>
                            <a href="TermDeposits.php#othertermdeposit">Other Term Deposit</a>
                        </div>
                    </div>
                    <!-- <div><a href="#">Treasure Chest</a></div> -->
                    <div class="dropdown other-account-dropdown">
                        <a class="dropbtn" href="./OtherAccount.php">Other Accounts</a>
                        <div id="tab-data" class="dropdown-content">
                            <a href="OtherAccount.php#foregincurrencyaccount">Foreign Currency Accounts</a>
                            <!-- <a href="OtherAccount.php#remittances">Remittances</a> -->

                        </div>
                    </div>

                    <!-- <div class="dropdown other-account-dropdown">
                        <a class="dropbtn" href="./insurance.php">Insurance</a>
                        <div id="tab-data" class="dropdown-content">
                            <a href="insurance.php#EFUSunehraKalPlusPlan">EFU Sunehra Kal Plus Plan</a>
                            <a href="insurance.php#DFTSecureTakafulPlan">DFT Secure Takaful Plan</a>
                            <a href="insurance.php#SLICEndowmentPlan">SLIC Endowment Plan</a>
                            <a href="insurance.php#AdamjeeLifeTahaffuzPlan">Adamjee Life Tahaffuz Plan</a>
                            <a href="insurance.php#IGILifeWTOAlHayatTakafulPlan">IGI Life -WTO Al-Hayat Takaful Plan</a>
                            <a href="insurance.php#AskariLifeZaminPlan">Askari Life Zamin Plan</a>



                        </div>
                    </div> -->

                    <div class="dropdown other-account-dropdown">
                        <a class="dropbtn" href="./remittances.php">Remittances</a>
                        <div id="tab-data" class="dropdown-content">
                            <a href="remittances.php#becomeasilkbankagent">Become a Silkbank Agent</a>
                            <a href="remittances.php#silkfaureetransfer">Silk Fauree Transfer </a>
                            <a href="remittances.php#westernunion">Western Union</a>


                        </div>
                    </div>





                </div>
            </div>

            <div class="col-lg-9">
                <div class="current-account-page">
                    <h3>Current Account</h3>
                    <p>A secure pathway for your funds &amp; transactions, Silkbank offers verity of current accounts
                        for
                        their customer’s daily banking needs on their fingertips, as per their demands.</p>
                </div>
                <section class="tabbed-content">
                    <nav class="current-account-Tabs-section">
                        <ul id="tabs" class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a id="tab-asaan" class="nav-link active" data-toggle="tab" href="#asaanaccount">Asaan
                                    Account</a>

                            </li>
                            <li class="nav-item">
                                <a id="tab-allinone" class="nav-link" data-toggle="tab" href="#allinoneaccount">All in
                                    One Account</a>
                            </li>
                            <li class="nav-item">
                                <a id="tab-basicbanking" class="nav-link" data-toggle="tab"
                                    href="#basicbankingaccount">Basic Banking Account</a>
                            </li>
                            <li class="nav-item">
                                <a id="tab-businessvalue" class="nav-link" data-toggle="tab"
                                    href="#businessvalueaccountplus">Business Value Account Plus</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a id="tab-business" class="nav-link" data-toggle="tab" href="#businessvalueaccount">Business Value Account</a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a id="tab-salary" class="nav-link" data-toggle="tab" href="#salarypremiumaccount">Salary Premium Account</a>
                            </li> -->
                            <li class="nav-item">
                                <a id="tab-salaryplus" class="nav-link" data-toggle="tab"
                                    href="#salarypremiumplus">Salary Premium Plus</a>
                            </li>
                            <li class="nav-item">
                                <a id="tab-express" class="nav-link" data-toggle="tab" href="#onlineexpress">Online
                                    Express</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="tab-content" id="content-container" role="tablist">
                        <div class="card tab-pane fade show active" id="asaanaccount" role="tabpanel"
                            aria-labelledby="tab-asaan">
                            <div class="card-header" role="tab" id="heading-A">
                                <h5 class="mb-0" onclick="toggle('#1');">

                                    <a data-toggle="collapse" href="#collapse-A" aria-expanded="false"
                                        aria-controls="collapse-A">
                                        Asaan Account
                                        <i id="1" class="tabIcon d-block fa fa-chevron-down float-right"
                                            style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-A" class="collapse show" data-parent="#content-container" role="tabpanel"
                                aria-labelledby="heading-A">
                                <div class="TabAsaanAccount card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/Asaan-Account-banner.jpg" alt="image"
                                        width="100%">
                                    <div class="TabHeading mb-2"> Asaan Account</div>
                                    <div class="TabPara">
                                        <p>Silkbank Asaan Account provides you with a banking solution that is easy for
                                            everyone. Open your Asaan Account with Silkbank and experience banking that
                                            meets your everyday financial needs.</p>
                                        <p>You can now open your Silkbank Asaan Account, a Current Account, with just
                                            your CNIC, an initial deposit of Rs. 100 and by filling out a one-page form.
                                            You can open one Asaan Account (single or joint) on your CNIC. Isn’t that
                                            simple!</p>
                                        <p>Not only that, there is no minimum balance requirement and as a customer you
                                            are also entitled to a host of banking facilities including Silkbank Visa
                                            Debit Card Facility which provides exclusive discounts at over 100 partner
                                            outlets nationwide. You also receive a free first Chequebook, free
                                            SilkMobile, free E-statements and much more!</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Other product features include:</p>
                                    </div>
                                    <div class="tabmiddlepara mb-lg-5 mb-md-5">
                                        <div class="row icons-section  mb-0">
                                            <div class="col-md-4">
                                                <div class="row align-items-center">

                                                    <div class="col-md-4">
                                                        <img src="assets/images/icon12.png" alt="icon" width="100%">
                                                    </div>
                                                    <div class="col-md-7">

                                                        <p class="mb-0">Total debit per month cannot exceed Rs. 500,000
                                                        </p>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-4">
                                                <div class="row align-items-center">

                                                    <div class="col-md-4 ">
                                                        <img src="assets/images/icon12.png" alt="icon" width="100%">
                                                    </div>
                                                    <div class="col-md-7">

                                                        <p class="mb-0">Total credit balance limit cannot exceed Rs.
                                                            500,000
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="row align-items-center">

                                                    <div class="col-md-4">
                                                        <img src="assets/images/icon12.png" alt="icon" width="100%">
                                                    </div>
                                                    <div class="col-md-7">

                                                        <p class="mb-0">To get this amazing offer, call now at
                                                            021-111-100-333 or visit your nearest Silkbank branch.

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>




                                    </div>

                                    <!-- <div class="button-container">
                                        <a class="Button" href="./assets/pdf/AsaanAccount60003-SOC Booklet for Silkbank Jul-Dec 15 (1).pdf" target="blank">Schedule of Charges</a>
                                    </div> -->


                                </div>

                            </div>
                        </div>
                        <div class="card tab-pane fade" id="allinoneaccount" role="tabpanel"
                            aria-labelledby="tab-allinone">
                            <div class="card-header" role="tab" id="heading-B">
                                <h5 class="mb-0 " onclick="toggle('#2');">

                                    <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false"
                                        aria-controls="collapse-B">
                                        All In One Account
                                        <i id="2" class="tabIcon d-block fa fa-chevron-down float-right"
                                            style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-B" class="collapse " data-parent="#content-container" role="tabpanel"
                                aria-labelledby="heading-B">
                                <div class="TabAllinOneAccount card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/All-in-One (AIO).jpg" alt="image"
                                        width="100%">
                                    <div class="TabHeading mb-2">All in One Account</div>
                                    <div class="TabPara">
                                        <p>All-in-One Current Account is an ultimate power pack account that provides
                                            various complimentary protections and benefits. There is no minimum balance
                                            requirement however the account offers range of free unlimited features
                                            including waiver of several banking charges while providing free insurance
                                            coverage on maintaining a minimum monthly average balance of Rs. 100,000 and
                                            above.</p>
                                        <p>Silkbank All-In-One account now offers a wide range of free features
                                            including waiver of several banking charges while providing free insurance
                                            coverage on maintaining a <b>minimum monthly average balance of Rs.100,000/-
                                                and above.</b></p>
                                    </div>
                                    <div class="tabMiddleHeading mb-4">
                                        <p>Free Banking Transaction Benefits:</p>
                                    </div>
                                    <div class="row icons-section">
                                        <div class="col-md-4">
                                            <div class="row align-items-center mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/sms-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free SMS Alerts for
                                                        ADC Transactions</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-4">
                                                <div class="col-md-4">
                                                    <img src="assets/images/checque book-icon.png" alt="icon"
                                                        width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0 ">Free Cheque Books</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <img src="assets/images/IBFT-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free IBFT</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="row  align-items-center mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/payorder-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free Pay Order &
                                                        Demand Draft
                                                        Issuance</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <img src="assets/images/countercash-icon.png" alt="icon"
                                                        width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free Over the Counter Cash Withdrawal</p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4">
                                            <div class="row align-items-center mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/atm-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free ATM Transaction from Other Bank’s ATM</p>
                                                </div>
                                            </div>
                                            <div class="row  align-items-center">
                                                <div class="col-md-4">
                                                    <img src="assets/images/debitcard-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Reversal of Debit Card Fee on Annual basis</p>
                                                </div>
                                            </div>


                                        </div>

                                    </div>

                                    <div class="tabMiddleHeading mt-5 mb-4">
                                        <p>Complimentary Insurance Coverage’s:</p>
                                    </div>
                                    <div class="row icons-section">
                                        <div class="col-md-4">
                                            <div class="row align-items-center mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/accidental-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free Natural & Accidental Death Coverage</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <img src="assets/images/icon8.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free Over the Counter /ATM Cash Withdrawal Coverage
                                                    </p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4">
                                            <div class="row align-items-center mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/free-child-education.png" alt="icon"
                                                        width="100%">
                                                </div>
                                                <div class="col-md-6">

                                                    <p class="mb-0">Free Child Education Plan Coverage</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <img src="assets/images/free-hospitilizer.png" alt="icon"
                                                        width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0 ">Free Hospitalisation Coverage</p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4">
                                            <div class="row align-items-center mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/icon1.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free Income Continuation Plan</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <img src="assets/images/free travel.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free Travel Insurance on Domestic & International
                                                        Traveling</p>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                    <div class="lastpara mt-5">
                                        <p class="mb-0">For more information regarding All-in-One account, visit your
                                            nearest Silkbank branch or call 021-111-100-333 , where phone bankers ready
                                            to assist
                                            you round the clock.</p>

                                    </div>
                                    <div class="button-container">

                                        <a class="Button"
                                            href="./assets/pdf/Eligibility Criteria & Terms & Conditions.pdf"
                                            target="blank">Eligibility Criteria and Terms & Conditions</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="card tab-pane fade " id="basicbankingaccount" role="tabpanel"
                            aria-labelledby="tab-basicbanking">
                            <div class="card-header" role="tab" id="heading-C">
                                <h5 class="mb-0 " onclick="toggle('#3');">

                                    <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false"
                                        aria-controls="collapse-C">
                                        Basic Banking Account
                                        <i id="3" class="tabIcon d-block fa fa-chevron-down float-right"
                                            style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-C" class="collapse " data-parent="#content-container" role="tabpanel"
                                aria-labelledby="heading-C">

                                <div class="TabBasicBankingAccount card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/Basic-Banking-Account-banner.jpg"
                                        alt="image" width="100%">
                                    <div class="TabHeading mb-2">Basic Banking Account</div>
                                    <div class="TabPara">
                                        <p>Opening an account was never so easy! You can now open your account with only
                                            Rs.1,000 and guess what? There are no minimum balance requirements.</p>
                                        <p>Your Basic Banking Account allows you to conduct two debit transactions and
                                            two credit transactions, free of charge, per month. Bank will charge Rs.100
                                            per transaction over and above the allowed free transactions.
                                        </p>
                                        <p class="mb-0">For more information regarding the Silkbank Basic Banking
                                            Account, call now at 021-111-100-333 or visit your nearest Silkbank branch.
                                        </p>
                                    </div>
                                    <div class="button-container">

                                        <a class="Button" href="./assets/pdf/Basic banking Account.pdf"
                                            target="blank">Schedule of Charges</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card tab-pane fade" id="businessvalueaccountplus" role="tabpanel"
                            aria-labelledby="tab-businessvalue">
                            <div class="card-header" role="tab" id="heading-D">
                                <h5 class="mb-0" onclick="toggle('#4');">

                                    <a class="collapsed" data-toggle="collapse" href="#collapse-D" aria-expanded="false"
                                        aria-controls="collapse-D">
                                        Business Value Account Plus
                                        <i id="4" class="tabIcon d-block fa fa-chevron-down float-right"
                                            style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-D" class="collapse " data-parent="#content-container" role="tabpanel"
                                aria-labelledby="heading-D">

                                <div class="TabBusinessValuePlus card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/BVAPlus-banner.jpg" alt="image"
                                        width="100%">
                                    <div class="TabHeading mb-2">Business Value Account Plus</div>
                                    <div class="TabPara">
                                        <p> Silkbank Business Value Account Plus is a unique business current account
                                            that offers protection & transactional benefits specifically designed for
                                            catering to your daily business requirements.</p>
                                        <p>Finally, a Current Account that provides complete peace of mind and
                                            convenience to the Businessman! Introducing Silkbank Business Value Account
                                            Plus, which provides you with Free Business Inventory Insurance Coverage up
                                            to Rs.1 Crore, Free Protection against cash snatching for Cash Withdrawals
                                            from all ATMs across Pakistan, Free Funds Transfer, Free Intercity
                                            Transactions and much more!</p>

                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>As a Business Value Account Plus customer you are entitled to the following
                                            benefits:</p>
                                    </div>
                                    <div class="row icons-section">
                                        <div class="col-md-4">
                                            <div class="row  align-items-center mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/IBFT-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free Intercity Transactions</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <img src="assets/images/debitcard-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free PayPak Debit Card
                                                    </p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4">
                                            <div class="row align-items-center mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/payorder-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free Payorder and Demand Drafts</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <img src="assets/images/sms-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free SMS Alerts for ADC transactions</p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4">
                                            <div class="row align-items-center mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/checque book-icon.png" alt="icon"
                                                        width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0 p-1">Free Cheque Books</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <img src="assets/images/icon15.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7 ">

                                                    <p class="mb-0">Free Mobile & Internet Banking</p>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                    <div class="tabMiddleHeading mt-5">
                                        <p>Benefits based on a balance maintenance of Rs 100,000</p>
                                    </div>
                                    <div class="row icons-section my-4">
                                        <div class="col-md-4">
                                            <div class="row  align-items-center mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/free business.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free Business Inventory Insurance Coverage</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <img src="assets/images/atm-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free ATM transactions from other banks’ ATMs
                                                    </p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4">
                                            <div class="row align-items-center mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/atm-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free ATM cash withdrawal insurance coverage</p>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="col-md-4">
                                            <div class="row align-items-center mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/IBFT-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-7">

                                                    <p class="mb-0">Free Interbank funds transfer</p>
                                                </div>
                                            </div>



                                        </div>

                                    </div>

                                    <div class="button-container">
                                        <a class="Button"
                                            href="./assets/pdf/AsaanAccount60003-SOC Booklet for Silkbank Jul-Dec 15 (1).pdf"
                                            target="blank">BVA Plus handbook</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- <div class="card tab-pane fade" id="businessvalueaccount" role="tabpanel" aria-labelledby="tab-business">
                            <div class="card-header" role="tab" id="heading-E">
                                <h5 class="mb-0 tab-icon" onclick="toggle('#5');">

                                    <a class="collapsed" data-toggle="collapse" href="#collapse-E" aria-expanded="false" aria-controls="collapse-E">
                                        Business Value Account
                                        <i id="5" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-E" class="collapse " data-parent="#content-container" role="tabpanel" aria-labelledby="heading-E">

                                <div class="TabBusinessValueAccount card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/BVA-banner.jpg" alt="image" width="100%">
                                    <div class="TabHeading mb-2">Business Value Account</div>
                                    <div class="TabPara">
                                        <p>Silkbank Business Value Account is a unique business current account that offers protection & transactional benefits specifically designed for catering to your daily business requirements.</p>
                                        <p>Now introducing for the first time in Pakistan, Silkbank Business Value Account which provides you with free comprehensive business inventory coverage up to Rs.1 Crore, arranged through Saudi Pak Insurance Company Limited. Not only that, you will also receive free protection against cash snatching for cash withdrawals from ATMs or Silkbank branches.
                                        </p>
                                        <p>As a customer you are also entitled to a host of free banking facilities including cheque books, pay orders, intercity transactions and your very own Silkbank VISA Debit Card which provides exclusive discounts at over 100 partner outlets nationwide, in addition to free statements, SMS Alerts and Silkbank-Direct Internet Banking.</p>
                                        <p class="mb-0">To get this amazing offer, call now at 021-111-100-333 or visit your nearest Silkbank branch.</p>
                                    </div>
                                  
                                    <div class="d-lg-flex">
                                        <div class="button-container">
                                            <a class="Button" href="./assets//pdf/businessvalueaccount1.pdf" target="blank">Schedule of Charges</a>
                                        </div>
                                        <div class="button-container">

                                            <a class="Button" href="./assets/pdf/30497-bva_insurance_claim_form_new2.pdf" target="blank">Insurance Claim Form</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="card tab-pane fade" id="salarypremiumaccount" role="tabpanel" aria-labelledby="tab-salary">
                            <div class="card-header" role="tab" id="heading-F">
                                <h5 class="mb-0 " onclick="toggle('#6');">

                                    <a class="collapsed" data-toggle="collapse" href="#collapse-F" aria-expanded="false" aria-controls="collapse-F">
                                        Salary Premium Account
                                        <i id="6" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-F" class="collapse " data-parent="#content" role="tabpanel" aria-labelledby="heading-F">

                                <div class="TabSalarypremiumAccount card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/Salary-Premium-Account-banner.jpg" alt="image" width="100%">
                                    <div class="TabHeading mb-2">Salary Premium Account</div>
                                    <div class="TabPara mb-5">
                                        <p>Silkbank’s Salary Premium Account is an exceptional current account that offers additional perks with your salary!
                                            As a Silkbank Salary Premium Account Holder, you can avail a host of financial convenience, protection and lifestyle benefits.</p>
                                        <p>1. Hassle Free Salary Processing</p>
                                        <p>2. Cash Snatching Coverage</p>
                                        <p>3. Discounted Auto Insurance at 2.5%!</p>
                                        <p>You will also be entitled to a host of banking facilities including cheque books, pay orders, intercity transactions and VISA Debit Card.
                                        </p>
                                        <p>To find out more about the Salary Premium Account and to start your payroll relationship with Silkbank, call now at 021-111-100-333 or visit your nearest Silkbank branch.</p>
                                    </div>
                                    <div class="TabmiddleHeadingcolored">
                                        <p>CASH PROTECTION</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Worry-free Cash Withdrawals</p>
                                    </div>
                                    <div class="TabPara">
                                        <p> Liberate yourself from the fear of being robbed of your cash. Silkbank Salary Premium Account provides you coverage against hold-up and cash snatching up to Rs. 50,000 per annum for ATM and over-the-counter cash withdrawals across Pakistan.
                                        </p>
                                        <p>Through this facility you are covered for ATM cash withdrawal snatching within a 2 km radius from the ATM as long as you inform the Bank within 30 minutes of withdrawing your cash. You are also covered for over-the-counter cash withdrawal snatching within a 1 km radius from the Silkbank branch where you made the withdrawal as long as you inform the Bank within 30 minutes of withdrawing your cash. Four such theft instances per year will be covered and the aggregate cover amount will be Rs. 50,000. The coverage applies to the primary account holder or authorized signatory.</p>

                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Incidents Not Covered</p>
                                    </div>
                                    <div class="tabmiddlepara">
                                        <p>Strikes, war, riots, civil commotion and terrorism</p>
                                        <p>Fraud or dishonesty by the account holder’s employees - permanent or contractual

                                        </p>
                                        <p>Cash withdrawals made by any person other than the account holder</p>

                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Claims Process</p>
                                    </div>
                                    <div class="TabPara">
                                        <p>To file a claim, contact your nearest Silkbank branch or call Silkbank Contact Center on 021-111-100-777 to inform about the incident immediately. Once your incident has been reported, fill out the Insurance Claim Form, which is available at all Silkbank branches.
                                        </p>

                                    </div>
                                    <div class="lastpara">
                                        <p>Please also attach the following documents with it:</p>

                                    </div>
                                    <div class="tabmiddlepara mb-5">
                                        <p>ATM receipt (in case of ATM withdrawals)</p>
                                        <p>Bank statement (in case of over-the-counter withdrawals)

                                        </p>
                                        <p>Police report</p>
                                        <p>CNIC copy</p>
                                        <p class="mb-4">Other important documents (specified by the Bank)</p>

                                    </div>
                                    <div class="tabMiddleHeading mb-4">
                                        <p>FREE BANKING FACILITIES</p>
                                    </div>
                                    <div class="row  icons-section mb-5">
                                        <div class="col-md-4">
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/internet-banking-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Internet Banking - Free!</h5>
                                                    <p> With the Silkbank Salary Premium Account, you can experience internet and mobile banking through Silkbank-Direct Internet Banking free of charge. You can view balances, avail services and conduct transactions at your own time and convenience.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="assets/images/icon2.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8  mt-2 p-0">
                                                    <h5>E-Statements - Free!</h5>
                                                    <p class="para1">With the Silkbank Salary Premium Account, you can receive E-statements through your email account at a frequency of your choice absolutely free.</p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="assets/images/icon4.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8  mt-2 p-0">
                                                    <h5>Silkbank Mobile Banking - Free!</h5>
                                                    <p class="para1">You can experience mobile banking through Silkbank’ s own SilkMobile app, free of charge. You can view balances, avail many services and conduct transactions at your own time and convenience.</p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="assets/images/icon7.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8  mt-2 p-0">
                                                    <h5>SMS Alerts - Free!</h5>
                                                    <p class="para1">With the Silkbank Salary Premium Account, you can now get free SMS alerts for transactions on your account of your choice.
                                                    </p>
                                                </div>
                                            </div>



                                        </div>
                                    </div>

                                    <div class="tabMiddleHeading mb-4">
                                        <p>TRANSACTION BENEFITS</p>
                                    </div>
                                    <div class="row  icons-section mb-5">
                                        <div class="col-md-4">
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/icon1.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Free Cheque Book</h5>
                                                    <p> With your Silkbank Salary Premium Account, you are entitled to a free starter cheque book allowing you instant access to your funds.</p>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="assets/images/icon4.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8  mt-2 p-0">
                                                    <h5>Pay Order & Demand Drafts</h5>
                                                    <p>Silkbank Salary Premium Account enables you to issue pay orders and demand drafts from your account as per the Bank’s Schedule of Charges.
                                                    </p>
                                                </div>
                                            </div>


                                        </div>

                                    </div>


                                    <div class="tabMiddleHeading mb-4">
                                        <p>LIFESTYLE BENEFITS</p>
                                    </div>
                                    <div class="row  icons-section">
                                        <div class="col-md-4">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <img src="assets/images/icon1.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Enjoy Cash & Shopping Access
                                                        through VISA Debit Card – Free</h5>
                                                    <p>You can now avail a host of special discounts and privileges at over 100 outlets nationwide with your Silkbank VISA Debit Card. Your free VISA Debit Card can be utilized at over 54,000 retailers in Pakistan and millions internationally. You can also use it to withdraw cash at over 4,500 ATMs nationwide including Silkbank’s own network.</p>
                                                </div>
                                            </div>



                                        </div>


                                    </div>

                                    <div class="d-lg-flex">
                                        <div class="button-container">

                                            <a class="Button" href="./assets/pdf/SalaryPremium1.pdf" target="blank">Schedule of Charges</a>
                                        </div>
                                        
                                        <div class="button-container">

                                            <a class="Button" href="./assets/pdf/43356-salary_premium_form.pdf" target="blank">Insurance Application Form</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> -->

                        <div class="card tab-pane fade" id="salarypremiumplus" role="tabpanel"
                            aria-labelledby="tab-salaryplus">
                            <div class="card-header" role="tab" id="heading-G">
                                <h5 class="mb-0 tab-icon" onclick="toggle('#7');">

                                    <a class="collapsed" data-toggle="collapse" href="#collapse-G" aria-expanded="false"
                                        aria-controls="collapse-G">
                                        Salary Premium Plus
                                        <i id="7" class="tabIcon d-block fa fa-chevron-down float-right"
                                            style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-G" class="collapse " data-parent="#content-container" role="tabpanel"
                                aria-labelledby="heading-G">

                                <div class="TabSalaryPremiumPlus card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/Salary-Premium-Plus-banner.jpg"
                                        alt="image" width="100%">
                                    <div class="TabHeading mb-2">Salary Premium Plus</div>
                                    <div class="TabPara mb-5">
                                        <p>Silkbank’s Salary Premium Plus Account is a complete banking solution that
                                            offers additional perks and benefits along with smooth and efficient salary
                                            processing to ensure that you enjoy unparalleled insurance coverage plans,
                                            transactional benefits, convenience, specialized consumer products in
                                            addition to exceptional service and security of funds all in one account.
                                            Our highly qualified, trained and dedicated Relationship Managers deliver a
                                            personalized banking experience to ensure seamless and best in class banking
                                            service.</p>
                                        <p>As a Silkbank Salary Premium Plus Account Holder, you can avail a host of
                                            financial convenience, protection and lifestyle benefits. </p>
                                        <ul class="list-group">
                                            <li class="list-item">Efficient salary processing</li>
                                            <li class="list-item">Provides an entire range of products and services with
                                                easy processing</li>
                                            <li class="list-item">Transactional, Convenience, Protection and Lifestyle
                                                benefits</li>
                                        </ul>
                                        <p class="mt-4">
                                            You will also be entitled to a host of banking facilities including cheque
                                            books, pay orders, intercity transactions and VISA Debit Card.
                                        </p>
                                        <p>To find out more about the Salary Premium Plus Account and to start your
                                            payroll relationship with Silkbank, call now at 021-111-100-333 or visit
                                            your nearest Silkbank branch.</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>TRANSACTION & CONVENIENCE BENEFITS:</p>
                                    </div>
                                
                                    <div class="row  icons-section">
                                        <div class="col-md-4">
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/checque book-icon.png" alt="icon"
                                                        width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Free Cheque Book</h5>
                                                    <p class="minimize">With your Silkbank Salary Premium Plus Account, you are entitled
                                                        to a cheque book allowing you instant access to your funds</p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4">
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/payorder-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Free Pay order/Demand draft:</h5>
                                                    <p class="minimize">You can experience mobile banking through Silkbank’ s own
                                                        SilkMobile app, free of charge. You can view balances, avail
                                                        many services and conduct transactions at your own time and
                                                        convenience.

                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/chip-chin-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>E-Statements - Free!</h5>
                                                    <p class="minimize">With the Silkbank Salary Premium Plus Account, you can now get
                                                        free SMS alerts for ADC transactions on your account.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row icons-section">
                                    <div class="col-md-4">
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/silkmobile-icon.png" alt="icon"
                                                        width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Free Silkmobile</h5>
                                                    <p class="minimize">You can experience mobile banking through Silkbank’ s own
                                                        SilkMobile app, free of charge. You can view balances, avail
                                                        many services and conduct transactions at your own time and
                                                        convenience.

                                                        Silkbank Salary premium plus Advance Salary facility enables you
                                                        to avail upto 50% one month’s net, which you can utilize in case
                                                        of a cash based emergency or to meet any unforeseen needs.</p>
                                                </div>
                                            </div>

                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/debit-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Free VISA Debit Card</h5>
                                                    <p class="minimize">You can experience mobile banking through Silkbank’ s own
                                                        SilkMobile app, free of charge. You can view balances, avail
                                                        many services and conduct transactions at your own time and
                                                        convenience.</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/internet-banking-icon.png" alt="icon"
                                                        width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Free Internet Banking-Silkdirect</h5>
                                                    <p class="minimize">With the Silkbank Salary Premium Plus Account, you can now get
                                                        free SMS alerts for ADC transactions on your account. You can
                                                        also receive E-statements through your email account at a
                                                        frequency of your choice free.

                                                    </p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row icons-section">
                                       
                                        <div class="col-md-4">
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/advance-salary-icon.png" alt="icon"
                                                        width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Advance Salary</h5>
                                                    <p class="minimize">Silkbank Salary premium plus Advance Salary facility enables you
                                                        to avail upto 50% one month’s net, which you can utilize in case
                                                        of a cash based emergency or to meet any unforeseen needs.</p>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- <div class="col-md-4">
                                        <div class="row mb-4">

                                            <div class="col-md-4">
                                                <img src="assets/images/icon1.png" alt="icon" width="100%">
                                            </div>
                                            <div class="col-md-8 mt-2 p-0">
                                                <h5>Make Unlimited
                                                    Transactions from
                                                    Anywhere…Free!</h5>
                                                <p>With On-line Express Account you can access your account from any of the Silkbank branches and enjoy a real time banking experience. Based on your balance, On-line Express Account enables you to enjoy unlimited transactions absolutely Free!</p>
                                            </div>
                                        </div>

                                    </div> -->

                                    </div>

                                    

                                    <div class="tabMiddleHeading">
                                        <p>LIFESTYLE BENEFITS</p>
                                    </div>
                                    <div class="row  icons-section mb-5">
                                        <div class="col-md-4">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <img src="assets/images/debit-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Enjoy Cash & Shopping Access through VISA Debit Card – Free</h5>
                                                    <p class="minimize">You can now avail a host of special discounts and privileges at
                                                        over 100 outlets nationwide with your Silkbank VISA Debit Card.
                                                        Your free VISA Debit Card can be utilized at over 54,000
                                                        retailers in Pakistan and millions internationally. You can also
                                                        use it to withdraw cash at over 4,500 ATMs nationwide including
                                                        Silkbank’s own network</p>
                                                </div>
                                            </div>



                                        </div>


                                    </div>

                                    <div class="TabmiddleHeadingcolored">
                                        <p>CASH PROTECTION</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>WORRY-FREE CASH WITHDRAWALS</p>
                                    </div>
                                    <div class="TabPara">
                                        <p>Liberate yourself from the fear of being robbed of your cash. Silkbank Salary
                                            Premium Plus Account provides you coverage against hold-up and cash
                                            snatching up to Rs. 50,000 per annum for ATM and over-the-counter cash
                                            withdrawals across Pakistan.</p>
                                    </div>
                                    <div class="TabPara">
                                        <p>Through this facility you are covered for ATM cash withdrawal snatching
                                            within a 2 km radius from the ATM as long as you inform the Bank within 30
                                            minutes of withdrawing your cash. You are also covered for over-the-counter
                                            cash withdrawal snatching within a 1 km radius from the Silkbank branch
                                            where you made the withdrawal as long as you inform the Bank within 30
                                            minutes of withdrawing your cash. Four such theft instances per year will be
                                            covered and the aggregate cover amount will be Rs. 50,000. The coverage
                                            applies to the primary account holder or authorized signatory.</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Incidents Not Covered</p>
                                    </div>
                                    <div class="tabmiddlepara">
                                        <ul class="list-group">
                                            <li class="list-item">Strikes, war, riots, civil commotion and terrorism
                                            </li>
                                            <li class="list-item">Fraud or dishonesty by the account holder’s employees
                                                - permanent or contractual</li>
                                            <li class="list-item">Cash withdrawals made by any person other than the
                                                account holder</li>
                                        </ul>




                                    </div>
                                    <div class="tabMiddleHeading mt-4">
                                        <p>Claims Process</p>
                                    </div>
                                    <div class="TabPara">
                                        <p>To file a claim, contact your nearest Silkbank branch or call Silkbank
                                            Contact Center on 021-111-100-777 to inform about the incident immediately.
                                            Once your incident has been reported, fill out the Insurance Claim Form,
                                            which is available at all Silkbank branches.</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Please also attach the following documents with it:</p>
                                    </div>
                                    <div class="tabmiddlepara mb-4">
                                        <ul class="list-group">
                                            <li class="list-item">ATM receipt (in case of ATM withdrawals)</li>
                                            <li class="list-item">Bank statement (in case of over-the-counter
                                                withdrawals)</li>
                                            <li class="list-item">Police report</li>
                                            <li class="list-item">CNIC copyOther important documents (specified by the
                                                Bank)</li>
                                            <li class="list-item">Related Products</li>

                                        </ul>


                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="card tab-pane fade" id="onlineexpress" role="tabpanel"
                            aria-labelledby="tab-express">
                            <div class="card-header" role="tab" id="heading-H">
                                <h5 class="mb-0 " onclick="toggle('#8');">

                                    <a class="collapsed" data-toggle="collapse" href="#collapse-H" aria-expanded="false"
                                        aria-controls="collapse-H">
                                        Online Express
                                        <i id="8" class="tabIcon d-block fa fa-chevron-down float-right"
                                            style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-H" class="collapse " data-parent="#content-container" role="tabpanel"
                                aria-labelledby="heading-H">

                                <div class="TabOnlineExpress card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/Online-Express-banner.jpg" alt="image"
                                        width="100%">
                                    <div class="TabHeading mb-2">Online Express</div>
                                    <div class="TabPara">
                                        <p>No more hustling and bustling to your branch, with the Online Express Account
                                            you can conveniently get services from ANY Silkbank branch and enjoy
                                            Unlimited Transactions across the nation, absolutely FREE!</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>TRANSACTION & CONVENIENCE BENEFITS:</p>
                                    </div>

                                    <div class="row  icons-section">
                                        <div class="col-md-4">
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/icon4.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Make Unlimited Transactions from Anywhere…Free!</h5>
                                                    <p class="minimize">With On-line Express Account you can access your account from any
                                                        of the Silkbank branches and enjoy a real time banking
                                                        experience. Based on your balance, On-line Express Account
                                                        enables you to enjoy unlimited transactions absolutely Free!</p>
                                                    </p>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4">
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/internet-banking-icon.png" alt="icon"
                                                        width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Enjoy Internet Banking…Free! </h5>
                                                    <p class="minimize">Why visit the branch when you can access your account at your own
                                                        time and convenience, Free of charge! Your Online Express
                                                        Account can be accessed through Silkbank-Direct Internet Banking
                                                        enabling you to enjoy services such as: Balance Inquiry, Funds
                                                        Transfer, Utility Bill Payment, Mobile Top Up, Credit Card
                                                        History & Bill Payments and many more!</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/statments-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Get Statements Through Your Email…Free!</h5>
                                                    <p class="minimize">Want a detailed summary of your transactions more often? With
                                                        On-line Express Account you can receive E-statements through
                                                        your email account at a frequency of your choice, absolutely
                                                        Free.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row icons-section">
                                        <div class="col-md-4">
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <img src="assets/images/sms-icon.png" alt="icon" width="100%">
                                                </div>
                                                <div class="col-md-8 mt-2 p-0">
                                                    <h5>Be Informed Through SMS Alerts…Free!</h5>
                                                    <p class="minimize">Want to stay up-to-date with your transactions? With On-line
                                                        Express Account, we enable you to receive SMS Alerts for all
                                                        your account transactions Free of charge based on your balance.
                                                        For more information, visit your nearest Silkbank Branch or call
                                                        now at 021-111-100-333, and Take the Express Route to Unlimited
                                                        Free Transactions!</p>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- <div class="col-md-4">
                                        <div class="row mb-4">

                                            <div class="col-md-4">
                                                <img src="assets/images/icon1.png" alt="icon" width="100%">
                                            </div>
                                            <div class="col-md-8 mt-2 p-0">
                                                <h5>Make Unlimited
                                                    Transactions from
                                                    Anywhere…Free!</h5>
                                                <p>With On-line Express Account you can access your account from any of the Silkbank branches and enjoy a real time banking experience. Based on your balance, On-line Express Account enables you to enjoy unlimited transactions absolutely Free!</p>
                                            </div>
                                        </div>

                                    </div> -->
                                        <!-- <div class="col-md-4">
                                        <div class="row mb-4">

                                            <div class="col-md-4">
                                                <img src="assets/images/icon1.png" alt="icon" width="100%">
                                            </div>
                                            <div class="col-md-8 mt-2 p-0">
                                                <h5>Make Unlimited
                                                    Transactions from
                                                    Anywhere…Free!</h5>
                                                <p>With On-line Express Account you can access your account from any of the Silkbank branches and enjoy a real time banking experience. Based on your balance, On-line Express Account enables you to enjoy unlimited transactions absolutely Free!</p>
                                            </div>
                                        </div>

                                    </div> -->

                                    </div>

                                    <!-- </div> -->

                                    <!-- <div > -->
                                    <div class="button-container">

                                        <a class="Button"
                                            href="./assets/pdf/onlineexpress48323-SOC Booklet for Silkbank Jul-Dec 15 (1).pdf"
                                            target="blank">Schedule of Charges</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                </section>
            </div>
        </div>
    </div>
</div>

<?php include 'common/footer.php'; ?>