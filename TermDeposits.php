<?php include 'common/header.php'; ?>



<div class="side-bar term-deposit">
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
                        <a class="dropbtn" href="./SavingAccount.php">Saving Account</a>
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
                <div class="term-deposits-page">
                    <h3>Term Deposits</h3>
                    <p>Accounts that offer a higher rate of profit than savings account. Attractive rates offered on the
                        basis of tenors &amp; deposit is fixed for that particular time period.</p>

                </div>
                <section class="tabbed-content">

                    <nav class="term-deposits-Tabs-section">
                        <ul id="tabs" role="tablist" class="nav nav-tabs">
                            <li class="nav-item">
                                <a id="tab-flexi" class="nav-link active show" data-toggle="tab" role="tab" href="#fleximunafadeposit">Flexi Munafa Term Deposit</a>
                            </li>
                            <li class="nav-item">
                                <a id="tab-salana" class="nav-link" data-toggle="tab" role="tab" href="#salanamunafa">Salana Munafa</a>
                            </li>
                            <li class="nav-item">
                                <a id="tab-mahana" class="nav-link" data-toggle="tab" role="tab" href="#mahanamunafa">Mahana Munafa</a>
                            </li>
                            <li class="nav-item">
                                <a id="tab-special" class="nav-link" data-toggle="tab" role="tab" href="#specialnoticedeposit">Special Notice Deposit Account</a>
                            </li>
                            <li class="nav-item">
                                <a id="tab-other" class="nav-link" data-toggle="tab" role="tab" href="#othertermdeposit">Other Term Deposit</a>
                            </li>

                        </ul>
                    </nav>
                    <div class="tab-content" id="content-container3" role="tablist">
                        <div class="card tab-pane fade show active " id="fleximunafadeposit" role="tabpanel" aria-labelledby="tab-flexi">
                            <div class="card-header" role="tab" id="heading-A">
                                <h5 class="mb-0" onclick="toggle('#1');">

                                    <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                        Flexi Munafa Term Deposit
                                        <i id="1" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-A" class="collapse show" data-parent="#content-container3" role="tabpanel" aria-labelledby="heading-A">
                                <div class="Tabfleximunafadeposit card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/Flexi-Munafa-SB-banner.jpg" alt="image" width="100%">
                                    <div class="TabHeading mb-2">Flexi Munafa Term Deposit</div>
                                    <div class="TabPara">
                                        <p>“Silkbank Flexi Munafa One Year Term Deposit provides individual customers with a flexible, convenient and secure platform to save and earn profits.</p>

                                    </div>
                                    <div class="TabPara">
                                        <p>With Flexi Munafa, customers can choose from different payout options:</p>

                                    </div>
                                    <div class="tabMiddleHeading my-4">
                                        <p class="mb-0">Profit Rates:</p>
                                    </div>
                                    <div style="overflow-x: auto;" class="Tabpersonalloansmartplan">
                                        <table>
                                            <tr>

                                                <th>Tiers</th>
                                                <th>Flexi Advance</th>
                                                <th>Flexi Mahana</th>
                                                <th>Flexi Salana</th>

                                            </tr>
                                            <tr>
                                                <td>Rs.100,000 and above</td>
                                                <td>14.00%</td>
                                                <td>14.50%</td>
                                                <td>15.00%</td>


                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <p class="mb-1">Note: No special rates to be provided.</p>
                                                    <p class="mb-0">Tax and Zakat is applicable on profit.</p>
                                                </td>



                                            </tr>




                                        </table>
                                    </div>

                                    <div class="TabPara">
                                        <p class="mt-3 mb-0">Open your Flexi Munafa Term Deposit with an investment of Rs. 100,000/- & above. For more information regarding Flexi Munafa Term Deposit, visit your nearest Silkbank Branch or call 021-111-100-333, where our Phone Bankers are ready to assist you round the clock.</p>

                                    </div>
                                    <div class="d-lg-flex">
                                        <div class="button-container">
                                            <a class="Button" href="./ApplyOnline.php" target="blank">Apply Online</a>
                                        </div>
                                        <div class="button-container">

                                            <a class="Button" href="./assets/pdf/FleximunafaIndicative Profit Rates for Deposit Products effective 1st August 2022.pdf" target="blank">Profit Rate Sheet</a>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card tab-pane fade" id="salanamunafa" role="tabpanel" aria-labelledby="tab-salana">
                            <div class="card-header" role="tab" id="heading-B">
                                <h5 class="mb-0 " onclick="toggle('#2');">

                                    <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                        Salana Munafa
                                        <i id="2" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-B" class="collapse " data-parent="#content-container3" role="tabpanel" aria-labelledby="heading-B">
                                <div class="Tabsalanamunafa card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/Salana-Munafa-banner.jpg" alt="image" width="100%">
                                    <div class="TabHeading mb-2">Salana Munafa</div>
                                    <div class="TabPara">
                                        <p>With the Salana Munafa Term Deposit Account, you can earn the highest profit with payout on maturity. Additional benefits include:</p>

                                    </div>

                                    <div class="tabmiddlepara">
                                        <p>Overdraft facility of up to 90%</p>
                                        <p>
                                            Free Online banking, E-Statement and Internet Banking facilities on profit-nominated account
                                        </p>
                                        <p>
                                            Pay Order/Demand Drafts on profit-nominated account
                                        </p>
                                        <p>
                                            VISA Debit Card with profit-nominated account
                                        </p>
                                        <p>
                                            SMS Alerts
                                        </p>

                                    </div>

                                    <div class="TabPara">
                                        <p>Open your Salana Munafa Term Deposit Account with an investment of Rs.100,000 & above.</p>

                                    </div>
                                    <div class="lastpara">
                                        <p class="mb-0">For more information regarding the Salana Munafa Term Deposit Account, visit your nearest Silkbank Branch or call 021-111-100-333, where our Phone Bankers are ready to assist you round the clock.</p>

                                    </div>
                                    <div class="d-lg-flex">

                                        <div class="button-container">
                                            <a class="Button" href="./assets/pdf/salanamunafa1Indicative Profit Rates for Deposit Products effective 1st July 2020.pdf" target="blank">Schedule of Charges</a>
                                        </div>
                                        <div class="button-container">
                                            <a class="Button" href="./assets/pdf/salanamunafa2Indicative Profit Rates for Deposit Products effective 1st August 2022.pdf" target="blank">Profit Rate Sheet</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="card tab-pane fade" id="mahanamunafa" role="tabpanel" aria-labelledby="tab-mahana">
                            <div class="card-header" role="tab" id="heading-C">
                                <h5 class="mb-0 " onclick="toggle('#3');">

                                    <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
                                        Mahana Munafa
                                        <i id="3" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-C" class="collapse " data-parent="#content-container3" role="tabpanel" aria-labelledby="heading-C">
                                <div class="Tabmahanamunafa card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/Mahana-Munafa-banner.jpg" alt="image" width="100%">
                                    <div class="TabHeading mb-2">Mahana Munafa</div>
                                    <div class="TabPara">
                                        <p>With the Silkbank Mahana Munafa Term Deposit Account, you can earn the highest profit with monthly payout. Additional benefits include:</p>
                                    </div>
                                    <div class="tabmiddlepara">
                                        <p>Overdraft facility of up to 90%</p>
                                        <p>
                                            Free Online banking, E-Statement and Internet Banking facilities
                                        </p>
                                        <p>
                                            Pay Order/Demand Draft facility with profit nominated account
                                        </p>
                                        <p>
                                            VISA Debit Card with profit nominated account
                                        </p>
                                        <p>
                                            SMS Alerts
                                        </p>

                                    </div>
                                    <div class="TabPara">
                                        <p>Open your Silkbank Mahana Munafa Term Deposit Account with an investment of Rs.100,000 & above.</p>

                                    </div>
                                    <div class="lastpara">
                                        <p class="mb-0">For more information regarding the Silkbank Mahana Munafa Term Deposit Account, visit your nearest Silkbank Branch or call 021-111-100-333, where our Phone Bankers are ready to assist you round the clock.</p>

                                    </div>
                                    <div class="d-lg-flex">
                                        <div class="button-container">

                                            <a class="Button" href="./assets/pdf/mahanamunafa1Indicative Profit Rates for Deposit Products effective 1st July 2020.pdf" target="blank">Schedule of Charges</a>
                                        </div>
                                        <div class="button-container">

                                            <a class="Button" href="./assets/pdf/mahanamunafa2Indicative Profit Rates for Deposit Products effective 1st August 2022.pdf" target="blank">Profit Rate Sheet</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card tab-pane fade" id="specialnoticedeposit" role="tabpanel" aria-labelledby="tab-special">
                            <div class="card-header" role="tab" id="heading-D">
                                <h5 class="mb-0" onclick="toggle('#4');">

                                    <a class="collapsed" data-toggle="collapse" href="#collapse-D" aria-expanded="false" aria-controls="collapse-D">
                                        Special Notice Deposit Account
                                        <i id="4" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-D" class="collapse " data-parent="#content-container3" role="tabpanel" aria-labelledby="heading-D">
                                <div class="Tabspecialnoticedeposit card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/SpecialNDA-banner.jpg" alt="image" width="100%">
                                    <div class="TabHeading mb-2">Special Notice Deposit Account</div>
                                    <div class="TabPara">
                                        <p>For our valued account holders, the Silkbank Special Notice Deposit Account is also available for 7 and 30 days.</p>


                                    </div>
                                    <div class="lastpara">
                                        <p class="mb-0">For more information regarding profit rates, visit your nearest Silkbank Branch or call 021-111-100-333 where our Phone Bankers are ready to assist you round the clock.</p>

                                    </div>

                                    <div class="d-lg-flex">

                                        <div class="button-container">

                                            <a class="Button" href="./assets/pdf/specialnotice1Indicative Profit Rates for Deposit Products effective 1st July 2020.pdf" target="blank">Schedule of Charges</a>
                                        </div>
                                        <div class="button-container">

                                            <a class="Button" href="./assets/pdf/specialnotice2Indicative Profit Rates for Deposit Products effective 1st August 2022.pdf" target="blank">Profit Rate Sheet</a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                        <div class="card tab-pane fade" id="othertermdeposit" role="tabpanel" aria-labelledby="tab-other">
                            <div class="card-header" role="tab" id="heading-E">
                                <h5 class="mb-0 tab-icon" onclick="toggle('#5');">

                                    <a class="collapsed" data-toggle="collapse" href="#collapse-E" aria-expanded="false" aria-controls="collapse-E">
                                        Other Term Deposit
                                        <i id="5" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-E" class="collapse " data-parent="#content-container3" role="tabpanel" aria-labelledby="heading-E">
                                <div class="Tabothertermdeposit card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/Other-Term-Deposit-banner.jpg" alt="image" width="100%">
                                    <div class="TabHeading mb-2">Other Term Deposit</div>
                                    <div class="TabPara">
                                        <p>With the Other Term Deposit Account, you can choose from a wide range of tenures of 1 month, 3 months & 6 months, based on your requirements. With an investment of Rs.100,000 & above, you now have the opportunity to earn higher returns on your deposits. Additional benefits include:</p>

                                    </div>
                                    <div class="tabmiddlepara">
                                        <p>Overdraft facility of up to</p>
                                        <p>
                                            90% Free Online banking, E-Statement and Internet Banking facilities on profit-nominated account
                                        </p>
                                        <p>
                                            Pay Order/Demand Drafts on profit-nominated account
                                        </p>
                                        <p>
                                            VISA Debit Card with profit-nominated account
                                        </p>
                                        <p>
                                            SMS Alerts
                                        </p>

                                    </div>
                                    <div class="lastpara">
                                        <p class="mb-0">For more information regarding other term deposit accounts, visit your nearest Silkbank Branch or call 021-111-100-333, where our Phone Bankers are ready to assist you round the clock.</p>

                                    </div>
                                    <div class="d-lg-flex">
                                        <div class="button-container">

                                            <a class="Button" href="./assets/pdf/othertermdeposite1Indicative Profit Rates for Deposit Products effective 1st July 2020.pdf" target="blank">Schedule of Charges</a>
                                        </div>
                                        <div class="button-container">


                                            <a class="Button" href="./assets/pdf/othertermdeposit2Indicative Profit Rates for Deposit Products effective 1st August 2022.pdf" target="blank">Profit Rate Sheet</a>
                                        </div>
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