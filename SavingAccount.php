<?php include 'common/header.php'; ?>



<div class="side-bar saving-account">
    <div class="page_width">
        <div class="breadcrumbs">
            <p class="text-uppercase mb-0"><a href="./index.php"> HOME</a> &nbsp;/ &nbsp; <span><a href="./deposits.php">deposits</a></span></p>

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
                            <a href="AccountOpening.php#accountoprningprocessforbranchcustomer">Account Opening Process for In-Branch Customer</a>
                            <a href="AccountOpening.php#accountoprningprocessfordigitalonboarding">Account Opening Process for Digital Onboarding</a>


                        </div>
                    </div>
                    <div class="dropdown current-account-dropdown">
                        <a class="dropbtn" id="current" href="./CurrentAccount.php">Current Account</a>
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
                        <a class="dropbtn" href="./TermDeposits.php">Term Deposits</a>
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
                <div class="saving-account-page">
                    <h3>Saving Account</h3>
                    <p>Remunerative accounts which offer a certain profit rate. Provides the flexibility of withdrawing
                        the cash as per need basis</p>

                </div>
                <section class="tabbed-content">

                    <nav class="saving-account-Tabs-section">
                        <ul id="tabs" class="nav nav-tabs" role="tablist">
                            <li class="nav-item ">
                                <a id="tab-munafa" class="nav-link active show" data-toggle="tab" role="tab" href="#munafarozana">Munafa Rozana</a>
                            </li>
                            <li class="nav-item">
                                <a id="tab-savings" class="nav-link" data-toggle="tab" href="#plssavings" role="tab">PLS Savings</a>
                            </li>
                            <li class="nav-item">
                                <a id="tab-saver" class="nav-link" data-toggle="tab" href="#supersaver" role="tab">Super Saver</a>
                            </li>

                        </ul>
                    </nav>
                    <div class="tab-content" id="content-container2" role="tablist">
                        <div class="card tab-pane fade show active " id="munafarozana" role="tabpanel" aria-labelledby="tab-munafa">
                            <div class="card-header" role="tab" id="heading-A">
                                <h5 class="mb-0 " onclick="toggle('#1');">

                                    <a data-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
                                        Munafa Rozana Account
                                        <i id="1" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-A" class="collapse show " data-parent="#content-container2" role="tabpanel" aria-labelledby="heading-A">

                                <div class="TabMunafaRozanaAccount card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/Munafa-Rozana-banner.jpg" alt="image" width="100%">
                                    <div class="TabHeading mb-2">Munafa Rozana Account</div>
                                    <div class="TabPara">
                                        <p>Introducing Silkbank`s Munafa Rozana Account - the only savings account in Pakistan that pays profit in cash, DAILY! With Silkbank Munafa Rozana, profit on your funds is calculated and paid out into your account, DAILY.</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Profit Payment Daily!</p>
                                    </div>
                                    <div class="TabPara">
                                        <p>Silkbank Munafa Rozana is a unique account that offers cash DAILY. Earn profit on your ever-increasing balances day after day, significantly increasing the effective rate of return on your savings! You can also withdraw your profit DAILY or whenever you want.</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Higher The Deposit, Higher The Profit</p>
                                    </div>
                                    <div class="TabPara">
                                        <p>With the Silkbank Munafa Rozana Account, your profit is calculated DAILY based on the applicable profit rate on your deposit. Our tier-based rates allow you to enjoy higher profit rates on higher deposits, giving you the opportunity to earn up to 7% profit per annum.</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Benefits Of A Checking Account</p>
                                    </div>
                                    <div class="TabPara">
                                        <p>Your Silkbank Munafa Rozana Account gives you the flexibility to access ones your funds through their cheque book, VISA Debit Card and Silkbank-Direct Internet Banking. You can write cheques, and conduct a range of transactions through ATMs and Silkbank-Direct Internet Banking, including Inter Bank Funds Transfers, Mini-Statements and much more.</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Intercity Banking Facility</p>
                                    </div>
                                    <div class="TabPara">
                                        <p>You can use your Munafa Rozana Account to make intercity transactions, across 32 cities of Pakistan.</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Keep Track of Your Balances Through E-Statements - Free!</p>
                                    </div>
                                    <div class="TabPara">
                                        <p>With the Silkbank Munafa Rozana Account, you can track your account through daily, weekly, monthly, quarterly or half-yearly e-statements, which will be emailed to you at the frequency of their your choice, absolutely free.</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Be Informed Through SMS Alerts!</p>
                                    </div>
                                    <div class="TabPara">
                                        <p>With the Silkbank Rozana Munafa Account, you can now get SMS alerts for transactions on your account.</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Enjoy Cash & Shopping Access through your VISA Debit Card!</p>
                                    </div>
                                    <div class="TabPara">
                                        <p>You can use your VISA Debit Card at over 54,000 retailers in Pakistan and over millions of retailers internationally. You can use it to withdraw cash at over 4,500 ATMs nationwide, including Silkbank’s own network. You can also enjoy a host of discounts at leading retail outlets nationwide.</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>Enjoy Internet Banking - Free!</p>
                                    </div>
                                    <div class="TabPara">
                                        <p>With the Silkbank Munafa Rozana Account, you can experience internet and mobile banking through Silkbank-Direct Internet Banking, free of charge. You can view balances, avail services and conduct transactions at your own time and convenience.</p>
                                    </div>
                                    <div class="lastpara">
                                        <p class="mb-0">To get this amazing offer, visit your nearest Silkbank branch or call now at 021-111-100-333, and get cash profit in cash DAILY!</p>

                                    </div>
                                    <!-- <div> -->
                                    <a class="Button" href="./assets/pdf/Indicative Profit Rates for Deposit Products effective July 15 2022.pdf" target="blank">Schedule of Charges</a>
                                    <!-- </div> -->
                                    <!-- <div> -->
                                    <a class="Button" href="./assets/pdf/MunafarozanaIndicative Profit Rates for Deposit Products effective 1st August 2022.pdf" target="blank">Profit Rate Sheet</a>
                                    <!-- </div> -->



                                </div>
                            </div>

                        </div>

                        <div class="card tab-pane fade " id="plssavings" role="tabpanel" aria-labelledby="tab-savings">
                            <div class="card-header" role="tab" id="heading-B">
                                <h5 class="mb-0 " onclick="toggle('#2');">

                                    <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                        PLS Savings
                                        <i id="2" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-B" class="collapse " data-parent="#content-container2" role="tabpanel" aria-labelledby="heading-B">

                                <div class="TabPlsSavingAccount card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/PLS-Savings-banner.jpg" alt="image" width="100%">
                                    <div class="TabHeading mb-2">PLS Savings</div>
                                    <div class="TabPara">
                                        <p>Through your Silkbank Savings PLS account, you can now avail the benefits of a Savings Account with the convenience of a Current Account.</p>

                                    </div>

                                    <div class="tabmiddlepara">
                                        <p>Profit paid out twice a year</p>
                                        <p>
                                            Monthly profit of 4% on all tiers
                                        </p>
                                        <p>
                                            VISA Debit Card
                                        </p>
                                        <p>
                                            Profit calculated on minimum balance every month
                                        </p>
                                        <p>
                                            Can be operated by individuals or companies
                                        </p>


                                    </div>
                                    <div class="lastpara">
                                        <p class="mb-0">For more information regarding the Silkbank Savings PLS Account, visit your nearest Silkbank Branch or call 021-111-100-333 where our Phone Bankers are ready to assist you round the clock.</p>

                                    </div>



                                    <a class="Button" href="./assets/pdf/PlsSaving1Indicative Profit Rates for Deposit Products effective 1st July 2020.pdf" target="blank">Schedule of Charges</a>



                                    <a class="Button" href="./assets/pdf/PlsSaving2Indicative Profit Rates for Deposit Products effective 1st August 2022.pdf" target="blank">Profit Rate Sheet</a>


                                </div>
                            </div>
                        </div>
                        <div class="card tab-pane fade" id="supersaver" role="tabpanel" aria-labelledby="tab-saver">
                            <div class="card-header" role="tab" id="heading-C">
                                <h5 class="mb-0 " onclick="toggle('#3');">

                                    <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
                                        Super Saver
                                        <i id="3" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-C" class="collapse " data-parent="#content-container2" role="tabpanel" aria-labelledby="heading-C">
                                <div class="TabSuperSaverAccount">
                                    <img class="my-lg-4 my-0" src="assets/images/Super-Saver-banner.jpg" alt="image" width="100%">
                                    <div class="TabHeading mb-2">Super Saver</div>
                                    <div class="TabPara">
                                        <p>Open your Silkbank Super Saver account today to enjoy high profit every month.</p>
                                    </div>
                                    <div class="tabmiddlepara">
                                        <p>Highest returns</p>
                                        <p>
                                            VISA Debit Card
                                        </p>
                                        <p>
                                            Higher the deposit, higher the returns
                                        </p>
                                        <p>
                                            Profit calculated on Daily Product Basis
                                        </p>
                                        <p>
                                            Can be operated by individuals or companies
                                        </p>
                                        <p>
                                            Profit is payable monthly
                                        </p>
                                    </div>
                                    <div class="lastpara">
                                        <p class="mb-0">For more information regarding the Silkbank Super Saver PLS Account, visit your nearest Silkbank Branch or call 021-111-100-333 where our Phone Bankers are ready to assist you round the clock.</p>

                                    </div>

                                    <a class="Button" href="./assets/pdf/Supersaver1Indicative Profit Rates for Deposit Products effective 1st July 2020.pdf" target="blank">Schedule of Charges</a>


                                    <a class="Button" href="./assets/pdf/Supersaver2Indicative Profit Rates for Deposit Products effective 1st August 2022.pdf" target="blank">Profit Rate Sheet</a>

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