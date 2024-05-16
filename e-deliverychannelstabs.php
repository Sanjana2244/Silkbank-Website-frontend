<?php include 'common/header.php'; ?>



<div class="side-bar e-delivery-tabs">
    <div class="page_width">
        <div class="breadcrumbs">
            <p class="text-uppercase mb-0"><a href="./index.php"> HOME</a> &nbsp;/ &nbsp; <span><a
                        href="./e-deliverychannels.php">E-DELIVERY CHANNELS</a></span></p>

        </div>
        <div class="row">
            <div class="col-lg-3">


                <h2 class="heading mb-4">
                    <span class="dark" style="font-size: 27px;">E-Delivery Channels</span>
                </h2>


                <div class="links" id="tab-data">
                    <div><a href="e-deliverychannelstabs.php#SilkbankDigital"
                            onclick="openAccordion('#collapse-EA');">Silk Bank Digital</a></div>
                    <div><a href="e-deliverychannelstabs.php#EStatements"
                            onclick="openAccordion('#collapse-EB');">E-Statements</a></div>
                    <div><a href="e-deliverychannelstabs.php#InterBankFundTransfer"
                            onclick="openAccordion('#collapse-EC');">Inter Bank Fund Transfer</a></div>
                    <div><a href="e-deliverychannelstabs.php#PhoneBanking"
                            onclick="openAccordion('#collapse-ED');">Phone Banking</a></div>
                    <div><a href="e-deliverychannelstabs.php#SMSAlert" onclick="openAccordion('#collapse-EE');">SMS
                            Alert</a></div>
                    <div><a href="e-deliverychannelstabs.php#UtilityBills "
                            onclick="openAccordion('#collapse-EF');">Utility Bills</a></div>
                    <div><a href="e-deliverychannelstabs.php#SilkMobile" onclick="openAccordion('#collapse-EG');">Silk
                            Mobile</a></div>
                    <div><a href="e-deliverychannelstabs.php#SMSBanking" onclick="openAccordion('#collapse-EH');">SMS
                            Banking</a></div>
                    <div><a href="e-deliverychannelstabs.php#WhatsappBanking"
                            onclick="openAccordion('#collapse-EI');">Whatsapp Banking</a></div>

                </div>
            </div>

            <div class="col-lg-9">
                <div class="current-account-Tabs-section">
                    <ul id="current_account" class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a id="tab-digital" class="nav-link active show" data-toggle="tab"
                                href="#SilkbankDigital">Silkbank Digital</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-statements" class="nav-link" data-toggle="tab"
                                href="#EStatements">E-Statements</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-interbank" class="nav-link" data-toggle="tab" href="#InterBankFundTransfer">Inter
                                Bank Fund Transfer</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-phone" class="nav-link" data-toggle="tab" href="#PhoneBanking">Phone Banking</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-sms" class="nav-link" data-toggle="tab" href="#SMSAlert">SMS Alerts</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-utility" class="nav-link" data-toggle="tab" href="#UtilityBills">Utility
                                Bills</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-mobile" class="nav-link" data-toggle="tab" href="#SilkMobile">Silk Mobile</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-smsbanking" class="nav-link" data-toggle="tab" href="#SMSBanking">SMS Banking</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-whatsappbanking" class="nav-link" data-toggle="tab"
                                href="#WhatsappBanking">Whatsapp Banking</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="content-container6" role="tablist">

                    <div class="card tab-pane fade show active" id="SilkbankDigital" role="tabpanel"
                        aria-labelledby="tab-digital">
                        <div class="card-header" role="tab" id="heading-A">
                            <h5 class="mb-0" onclick="toggle('#1');">

                                <a data-toggle="collapse" href="#collapse-EA" aria-expanded="true"
                                    aria-controls="collapse-EA">
                                    Silkbank Digital
                                    <i id="1" class="tabIcon d-block fa fa-chevron-down float-right"
                                        style="color:#808080"></i>
                                </a>

                            </h5>
                        </div>
                        <div id="collapse-EA" class="collapse show " data-parent="#content-container6" role="tabpanel"
                            aria-labelledby="heading-A">
                            <div class="TabSilkbankDigital card-body">
                                <img class="my-lg-4 my-0" src="assets/images/Silkbank-Digital-banner.jpg" alt="image"
                                    width="100%">

                                <div class="TabHeading mb-2"> Silkbank Digital</div>
                                <div class="TabPara">
                                    <p>Welcome to the world of Silkbank Digital. Click & Bank at your convenience in the
                                        most secure and simple way. With Silkbank Internet Banking service you can
                                        access and manage your accounts anywhere, anytime.
                                        Now your bank is just a click away.
                                    </p>


                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>With Silkbank Digital you can enjoy these amazingly convenient internet banking
                                        facilities:</p>
                                </div>
                                <div class="row icons-section mb-lg-4 mb-0">
                                    <div class="col-md-4">
                                        <div class="row align-items-center">

                                            <div class="col-md-4">
                                                <img src="assets/images/balance-inquiry-icon.png" alt="icon"
                                                    width="100%">
                                            </div>
                                            <div class="col-md-7">

                                                <p class="mb-0">Balance Inquiry/Mini Statements/Transaction Details/Low
                                                    Balance Alerts</p>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-4">
                                        <div class="row align-items-center">

                                            <div class="col-md-4 ">
                                                <img src="assets/images/icon3.png" alt="icon" width="100%">
                                            </div>
                                            <div class="col-md-7">

                                                <p class="mb-0">Account Statement Requests
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="row align-items-center">

                                            <div class="col-md-4">
                                                <img src="assets/images/icon2.png" alt="icon" width="100%">
                                            </div>
                                            <div class="col-md-7">

                                                <p class="mb-0">Fund Transfers

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row icons-section mb-lg-5 mb-0">
                                    <div class="col-md-4">
                                        <div class="row align-items-center">

                                            <div class="col-md-4">
                                                <img src="assets/images/payorder-icon.png" alt="icon" width="100%">
                                            </div>
                                            <div class="col-md-7">

                                                <p class="mb-0">Pay Order/Demand Draft Requests</p>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="col-md-4">
                                        <div class="row align-items-center">

                                            <div class="col-md-4">
                                                <img src="assets/images/checque book-icon.png" alt="icon" width="100%">
                                            </div>
                                            <div class="col-md-7">

                                                <p class="mb-0">Cheque Book Requests</p>
                                            </div>
                                        </div>



                                    </div>


                                </div>

                                <div class="tabmiddlepara">
                                    <p class="mb-0"><b>And Much More</b></p>
                                    <p>
                                        To register for Silkbank Digital, please <a
                                            href="https://digital.silkbank.com/apps/digi/#_frmLogin"
                                            target="blank">CLICK HERE</a> or visit your nearest Silkbank branch. For
                                        more information, call <a href="">021-111-100-777</a> where our Phone
                                        Bankers are ready to assist you round the clock.</p>

                                </div>

                                <!-- <div class="Button"> -->
                                <div class="button-container">

                                    <a class="Button" href="https://digital.silkbank.com/apps/digi/#_frmLogin"
                                        target="blank">Access Silkbank Digital</a>
                                </div>



                            </div>
                        </div>

                    </div>
                    <div class="card tab-pane fade" id="EStatements" role="tabpanel" aria-labelledby="tab-statements">
                        <div class="card-header" role="tab" id="heading-B">
                            <h5 class="mb-0 " onclick="toggle('#2');">

                                <a class="collapsed" data-toggle="collapse" href="#collapse-EB" aria-expanded="false"
                                    aria-controls="collapse-EB">
                                    E-Statements
                                    <i id="2" class="tabIcon d-block fa fa-chevron-down float-right"
                                        style="color:#808080"></i>
                                </a>

                            </h5>
                        </div>
                        <div id="collapse-EB" class="collapse " data-parent="#content-container6" role="tabpanel"
                            aria-labelledby="heading-B">
                            <div class="TabEStatements card-body">
                                <img class="my-lg-4 my-0" src="assets/images/E-Statement.jpg" alt="image" width="100%">

                                <div class="TabHeading mb-2">E-Statements</div>
                                <div class="TabPara">
                                    <p>Simplify your life with Silkbank E-statement. You can request e-statement on a
                                        daily, weekly, monthly, quarterly, half-yearly or annual frequency.</p>
                                    <p>Register yourself by filling out the application form and drop it at your
                                        Silkbank branch. An email will be generated confirming your Silkbank E-statement
                                        facility.</b></p>
                                    <p>To register for this service, please visit your nearest Silkbank Branch. For more
                                        information regarding e-statements, call 021-111-100-333 where our Phone Bankers
                                        are ready to assist you round the clock.</p>
                                </div>

                                <div class="button-container">
                                    <a class="Button"
                                        href="./assets/pdf/EStatement81980-SOC Booklet for Silkbank Jul-Dec 15.pdf"
                                        target="blank">Schedule of Charges</a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="card tab-pane fade" id="InterBankFundTransfer" role="tabpanel"
                        aria-labelledby="tab-interbank">
                        <div class="card-header" role="tab" id="heading-C">
                            <h5 class="mb-0 " onclick="toggle('#3');">

                                <a class="collapsed" data-toggle="collapse" href="#collapse-EC" aria-expanded="false"
                                    aria-controls="collapse-EC">
                                    Inter Bank Fund Transfer
                                    <i id="3" class="tabIcon d-block fa fa-chevron-down float-right"
                                        style="color:#808080"></i>
                                </a>

                            </h5>
                        </div>
                        <div id="collapse-EC" class="collapse " data-parent="#content-container6" role="tabpanel"
                            aria-labelledby="heading-C">
                            <div class="TabInterBankFundTransfer card-body">
                                <img class="my-lg-4 my-0" src="assets/images/Inter-Bank-Fund-Transfer-Facility.jpg"
                                    alt="image" width="100%">

                                <div class="TabHeading mb-2">Inter Bank Fund Transfer</div>
                                <div class="TabPara">
                                    <p>In line with international banking standards, Silkbank is introducing the
                                        enhanced International Bank Account Number (IBAN) to enable you to easily and
                                        conveniently conduct international transactions as mandated by the State Bank of
                                        Pakistan (SBP) Circular, PSD Circular No. 02, of 2012, dated May 15, 2012.</p>



                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Please note that the revision in your Silkbank IBAN account numbers is as
                                        follows:</p>
                                </div>
                                <div class="tabmiddlepara">
                                    <p><b>Enhanced International Bank Account Number:</b> PKKK BBBB CCCC CCCC CCCC CCCC
                                    </p>
                                    <p>

                                        <b>Old International Bank Account Number:</b> PKKK BBBB CCCC CCCC CCCC CCCC


                                    </p>
                                    <p>
                                        <b>Silkbank Account Number:</b> 0001-2000111111

                                    </p>



                                </div>
                                <div class="TabPara mb-lg-5">
                                    <p>You will continue to enjoy the same banking services as before with your enhanced
                                        IBAN. For daily banking or domestic transactions, you may use either your
                                        Silkbank Account Number or IBAN.</p>
                                    <p>Should you have further inquiries, please feel free to call our 24 hours Customer
                                        Contact Center on the helpline: 021-111-100-777.</p>



                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card tab-pane fade" id="PhoneBanking" role="tabpanel" aria-labelledby="tab-phone">
                        <div class="card-header" role="tab" id="heading-D">
                            <h5 class="mb-0" onclick="toggle('#4');">

                                <a class="collapsed" data-toggle="collapse" href="#collapse-ED" aria-expanded="false"
                                    aria-controls="collapse-ED">
                                    Phone Banking
                                    <i id="4" class="tabIcon d-block fa fa-chevron-down float-right"
                                        style="color:#808080"></i>
                                </a>

                            </h5>
                        </div>
                        <div id="collapse-ED" class="collapse " data-parent="#content-container6" role="tabpanel"
                            aria-labelledby="heading-D">
                            <div class="TabPhoneBanking card-body">
                                <img class="my-lg-4 my-0" src="assets/images/Phone-Banking-banner.jpg" alt="image"
                                    width="100%">

                                <div class="TabHeading mb-2">Phone Banking</div>
                                <div class="tabMiddleHeading mt-4">
                                    <p>Why walk to bank when you can talk to the Bank!</p>
                                </div>
                                <div class="TabPara">
                                    <p> With Silkbank Phone Banking, your account is on your finger tips. Silkbank Phone
                                        Banking officers ensure that your financial needs are taken care of with
                                        ultimate accessibility, convenience and security, 24/7 throughout the year.</p>


                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Facilities through phone banking:</p>
                                </div>
                                <div class="tabmiddlepara">
                                    <p>You can now avail the following facilities by simply calling our 24-hours phone
                                        banking.</p>
                                    <ul class="list-group">
                                        <li class="list-item">

                                            Issuance of Pay Order and Cheque Book


                                        </li>
                                        <li class="list-item">
                                            Credit Cards and Accounts Balance Inquiry/Transaction Details

                                        </li>
                                        <li class="list-item">
                                            Issuance of Credit Card and Bank Account Statement / E-statement


                                        </li>
                                        <li class="list-item">
                                            Enrollment of E-statement and SMS alerts

                                        </li>
                                        <li class="list-item">
                                            Activation, Blocking & Re-issuance of Silkbank Visa Debit Card and Credit
                                            Card </li>
                                        <li class="list-item">
                                            ATM Claims against unsuccessful cash withdrawals</li>
                                        <li class="list-item">ATM PIN Re-issuance for Credit Cards & Visa Debit Cards
                                        </li>
                                        <li class="list-item">Internet Banking Enrollment/Modification/Password Reset
                                        </li>
                                        <li class="list-item">Account Linking/De-Linking for Visa debit Card</li>
                                        <li class="list-item">Registration of Insurance Claims for products offering
                                            Insurance Benefits</li>
                                    </ul>
                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Facilities through Interactive voice response (IVR):</p>
                                </div>
                                <div class="tabmiddlepara">
                                    <p>In addition to product information , now you can access the following services
                                        for Bank Account and Credit Card through our Self-Service IVR :</p>
                                    <ul class="list-group">
                                        <li class="list-item">Balance enquiry
                                        </li>
                                        <li class="list-item">Transaction Details</li>
                                        <li class="list-item">Statement Request via Fax/Mail Post/Email</li>
                                        <li class="list-item">ATM PIN Change</li>
                                        <li class="list-item">Silkbank Direct Banking Password Reset</li>
                                        <li class="list-item">Fund Transfers (for Bank Accounts) , Credit Card Bill
                                            Payment , Utility Bills Payment and Mobile Top-Ups</li>
                                    </ul>
                                </div>
                                <div class="tabmiddlepara mb-5">
                                    <p class="mt-3">You can access self-service banking facilities using a secure
                                        4-digit TPIN number.</p>
                                    <p>

                                        You can generate your TPIN by calling Silkbank Phone Banking.


                                    </p>
                                    <p>
                                        Subscribe to Silkbank phone banking by calling 021-111-100-777 NOW!

                                    </p>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card tab-pane fade" id="SMSAlert" role="tabpanel" aria-labelledby="tab-sms">
                        <div class="card-header" role="tab" id="heading-E">
                            <h5 class="mb-0 tab-icon" onclick="toggle('#5');">

                                <a class="collapsed" data-toggle="collapse" href="#collapse-EE" aria-expanded="false"
                                    aria-controls="collapse-EE">
                                    SMS Alerts
                                    <i id="5" class="tabIcon d-block fa fa-chevron-down float-right"
                                        style="color:#808080"></i>
                                </a>

                            </h5>
                        </div>
                        <div id="collapse-EE" class="collapse " data-parent="#content-container6" role="tabpanel"
                            aria-labelledby="heading-E">
                            <div class="TabSMSAlert card-body">
                                <img class="my-lg-4 my-0" src="assets/images/SMS-Alert.jpg" alt="image" width="100%">

                                <div class="TabHeading mb-2">SMS Alerts</div>
                                <div class="TabPara">
                                    <p>Silkbank SMS Alerts Offer our customers the ability to stay informed around the
                                        clock, anywhere, any time.</p>
                                    <p>Once enrolled for SMS Alerts, you will receive alerts on the transaction amount
                                        you select, from the following set of options:
                                    </p>

                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Banking Transactions:</p>
                                </div>
                                <div class="tabmiddlepara">
                                    <ul class="list-group">


                                        <li class="list-item">All Transactions</li>
                                        <li class="list-item">Transactions of Rs.50,000 & above</li>
                                        <li class="list-item">Transactions of Rs.250,000 & above</li>
                                    </ul>

                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Internet/ATM Transactions:</p>
                                </div>
                                <div class="tabmiddlepara">
                                    <ul class="list-group">


                                        <li class="list-item">All Transactions</li>
                                        <li class="list-item">Transactions of Rs.10,000 & above</li>
                                    </ul>


                                </div>
                                <div class="lastpara">
                                    <p class="mb-0 mt-5">For more information regarding product details or to find out
                                        how to
                                        register for this service, visit your nearest Silkbank Branch or call
                                        021-111-100-333 where our Phone Bankers are ready to assist you round the clock.
                                    </p>

                                </div>
                                <div class="d-lg-flex ">
                                    <div class="button-container">
                                        <a class="Button"
                                            href="./assets/pdf/SMSALERT36549-SOC Booklet for Silkbank Jul-Dec 15 (1).pdf"
                                            target="blank">Schedule of Charges</a>
                                    </div>
                                    <div class="button-container">

                                        <a class="Button" href="./assets/pdf/30497-bva_insurance_claim_form_new2.pdf"
                                            target="blank">Frequently Asked Questions</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card tab-pane fade" id="UtilityBills" role="tabpanel" aria-labelledby="tab-utility">
                        <div class="card-header" role="tab" id="heading-F">
                            <h5 class="mb-0 " onclick="toggle('#6');">

                                <a class="collapsed" data-toggle="collapse" href="#collapse-EF" aria-expanded="false"
                                    aria-controls="collapse-EF">
                                    Utility Bills
                                    <i id="6" class="tabIcon d-block fa fa-chevron-down float-right"
                                        style="color:#808080"></i>
                                </a>

                            </h5>
                        </div>
                        <div id="collapse-EF" class="collapse " data-parent="#content-container6" role="tabpanel"
                            aria-labelledby="heading-F">
                            <div class="TabUtilityBills card-body">
                                <img class="my-lg-4 my-0" src="assets/images/Utility-Bills.jpg" alt="image"
                                    width="100%">

                                <div class="TabHeading mb-2">Utility Bills</div>
                                <div class="TabPara mb-5">
                                    <p>Silkbank now offers its customers unmatched convenience and comfort with the
                                        launch of its Utility Bills Payment Service (UBPS). Customers can now use their
                                        Silkbank VISA Debit Card (VDC) at any Silkbank ATM to pay their utility bills or
                                        top up their mobile phones, around the clock, free of charge!</p>

                                </div>

                                <div class="tabMiddleHeading">
                                    <p>Customers Can:</p>
                                </div>
                                <div class="tabmiddlepara">
                                    <ul class="list-group">
                                        <li class="list-item"> Pay utility bills
                                        </li>
                                        <li class="list-item">Settle post-paid mobile bills</li>
                                        <li class="list-item">Recharge pre-paid mobile phone</li>
                                    </ul>

                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Incidents Not Covered</p>
                                </div>
                                <div class="tabmiddlepara">
                                    <ul class="list-group">
                                        <li class="list-item">Strikes, war, riots, civil commotion and terrorism</li>
                                        <li class="list-item">Fraud or dishonesty by the account holder’s employees -
                                            permanent or contractual

                                        </li>
                                        <li class="list-item">Cash withdrawals made by any person other than the account
                                            holder</li>
                                    </ul>

                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Benefits</p>
                                </div>
                                <div class="tabmiddlepara">
                                    <p>You can now enjoy the following benefits with UBPS:
                                    </p>
                                    <ul class="list-group">
                                        <li class="list-item">Real-time utility bill payments</li>
                                        <li class="list-item">Round the clock accessibility through a network of 70 ATMs
                                            across Pakistan</li>
                                        <li class="list-item">Fast, transparent and reliable transfer of funds</li>
                                    </ul>

                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Utilities</p>
                                </div>
                                <div class="tabmiddlepara">
                                    <p>You can make payments using your VDC at any Silkbank ATM to the following
                                        companies:</p>


                                </div>
                                <div style="overflow-x: auto;">

                                    <table>
                                        <tr>

                                            <th>Companies</th>
                                            <th>Mobile Operators</th>

                                        </tr>
                                        <tr>
                                            <td>KESC</td>
                                            <td>Ufone</td>


                                        </tr>
                                        <tr>
                                            <td>SSGC</td>
                                            <td>Warid</td>

                                        </tr>
                                        <tr>
                                            <td>SNGPL</td>
                                            <td>Telenor</td>

                                        </tr>
                                        <tr>
                                            <td>LEPCO</td>
                                            <td>Mobilink</td>

                                        </tr>
                                        <tr>
                                            <td>GEPCO </td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>PTCL</td>
                                            <td></td>

                                        </tr>




                                    </table>
                                </div>

                                <div class="tabMiddleHeading mt-5">
                                    <p>How to Make Payments</p>
                                </div>
                                <div class="TabPara">
                                    <p>Follow these simple steps to make your utility or mobile bill payments”
                                    </p>

                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Utility Bills</p>
                                </div>
                                <div class="tabmiddlepara">
                                    <ul class="list-group">
                                        <li class="list-item">Select Bill Payments</li>
                                        <li class="list-item">Select Utility Payments (Electric or Gas)</li>
                                        <li class="list-item">Select Utility Company</li>
                                        <li class="list-item">If you are paying a utility bill for the first time, click
                                            on “New Bill” to enter
                                            your Consumer Number if it is already showing on the screen</li>
                                        <li class="list-item">Bill details will appear on the screen; click “Pay” to
                                            settle bill</li>
                                        <li class="list-item">A confirmation slip will print out for your reference and
                                            your bill will be
                                            settled immediately</li>
                                    </ul>

                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Mobile Bills</p>
                                </div>

                                <div class="tabmiddlepara">
                                    <ul class="list-group">
                                        <li class="list-item">Select Bill Payments
                                        </li>
                                        <li class="list-item">Select Utility Payments (Telephone)</li>
                                        <li class="list-item">Select Mobile Operator</li>
                                        <li class="list-item">Select pre-paid or post-paid</li>
                                        <li class="list-item">If you are paying your mobile bill for the first time,
                                            click on “New Bill” to
                                            enter your mobile number (only once per mobile number)</li>
                                        <li class="list-item">Select your mobile number if it is already showing on the
                                            screen</li>
                                        <li class="list-item">Enter amount for post-paid numbers and click “Pay”</li>
                                        <li class="list-item">Select denomination for pre-paid numbers and click “Pay”
                                        </li>
                                        <li class="list-item">A confirmation slip will print out for your reference</li>
                                    </ul>
                                </div>
                                <div class="lastpara mb-5 mt-4">
                                    <p>For more information,Visit your nearest Silkbank branch or call 021-111-100-777
                                    </p>

                                </div>




                            </div>
                        </div>
                    </div>

                    <div class="card tab-pane fade" id="SilkMobile" role="tabpanel" aria-labelledby="tab-mobile">
                        <div class="card-header" role="tab" id="heading-G">
                            <h5 class="mb-0 tab-icon" onclick="toggle('#7');">

                                <a class="collapsed" data-toggle="collapse" href="#collapse-EG" aria-expanded="false"
                                    aria-controls="collapse-EG">
                                    Silk Mobile
                                    <i id="7" class="tabIcon d-block fa fa-chevron-down float-right"
                                        style="color:#808080"></i>
                                </a>

                            </h5>
                        </div>
                        <div id="collapse-EG" class="collapse " data-parent="#content-container6" role="tabpanel"
                            aria-labelledby="heading-G">
                            <div class="TabSilkMobile  card-body">
                                <img class="my-lg-4 my-0" src="assets/images/Silk-Mobile.jpeg" alt="image" width="100%">
                                <div class="TabHeading mb-2">Silk Mobile</div>
                                <div class="TabPara mb-5">
                                    <p>Silkbank brings you an amazing and innovative Mobile banking app that provides
                                        you with convenience and ease of performing secure transactions on the go,
                                        Anywhere, Anytime!</p>


                                </div>

                                <div class="tabMiddleHeading">
                                    <p>Not only that, but you can also perform several other functions such as:</p>
                                </div>
                                <div class="tabmiddlepara">
                                    <ul class="list-group">
                                        <li class="list-item">Guard Your Card: Protect yourself from Skimming and block
                                            your card when not in
                                            use, and unblock it when you want to use it</li>
                                        <li class="list-item">Stop Cheque Facility: Stop your cheque in real time,
                                            Instantly!</li>
                                        <li class="list-item">Pay-Order request: Request for a pay order while sitting
                                            at home and collect it
                                            at your convenience</li>
                                        <li class="list-item">Funds Transfer: Transfer funds, anywhere, anytime.</li>
                                        <li class="list-item">Inter-Bank Funds Transfer: Transfer funds to other banks
                                            without leaving the
                                            comfort of your home or office</li>
                                        <li class="list-item">Bill Payments: Pay your utility bills with ease, on the
                                            go.</li>
                                        <li class="list-item">Credit card bill payment: Pay your Credit Card bill with
                                            ease</li>
                                        <li class="list-item">Mobile Top-up: Top-up your mobile balance</li>
                                        <li class="list-item">Balance Inquiry: View your relationships and transaction
                                            details</li>
                                        <li class="list-item">Mini Statement: Stay updated with your latest transaction
                                            details</li>
                                        <li class="list-item">Cheque Book Request: Request for a 25 or 50 leaf
                                            Chequebook from the comfort of
                                            your home</li>
                                        <li class="list-item">SMS Alert Registration: Stay on top of each transaction by
                                            enrolling for SMS
                                            alert via SilkMobile</li>
                                        <li class="list-item">E-Statement Registration: Register and get transaction
                                            details for your account
                                            on your email</li>
                                    </ul>
                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>HOW TO SUBSCRIBE</p>
                                </div>
                                <div class="lastpara mb-5">
                                    <p>To register for this service, download the app from your respective app store and
                                        call our phone bankers at 021-111-100-777 to generate your MPIN. After that, you
                                        are free to transact away!</p>
                                    <p>For further information, visit our website <a href="https://www.silkbank.com.pk"
                                            target="blank">https://www.silkbank.com.pk.</a></p>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card tab-pane fade" id="SMSBanking" role="tabpanel" aria-labelledby="tab-smsbanking">
                        <div class="card-header" role="tab" id="heading-H">
                            <h5 class="mb-0 " onclick="toggle('#8');">

                                <a class="collapsed" data-toggle="collapse" href="#collapse-EH" aria-expanded="false"
                                    aria-controls="collapse-EH">
                                    SMS Banking
                                    <i id="8" class="tabIcon d-block fa fa-chevron-down float-right"
                                        style="color:#808080"></i>
                                </a>

                            </h5>
                        </div>
                        <div id="collapse-EH" class="collapse " data-parent="#content-container6" role="tabpanel"
                            aria-labelledby="heading-H">
                            <div class="TabSMSBanking card-body">
                                <img class="my-lg-4 my-0" src="assets/images/sms-banking-banner.jpg" alt="image"
                                    width="100%">
                                <div class="TabHeading mb-2">SMS Banking</div>
                                <div class="tabMiddleHeading">
                                    <p>How to register for Silkbank SMS Banking?</p>
                                </div>
                                <div class="tabMiddleHeading">
                                    <p>To start using SMS banking:</p>
                                </div>
                                <div class="tabmiddlepara">
                                    <ul class="list-group">
                                        <li class="list-item">Type REG space enter your desired 4-digit SPIN</li>
                                        <li class="list-item">
                                            Send it to 9873.
                                        </li>
                                    </ul>


                                </div>
                                <div class="TabPara my-4">
                                    <p>For example, if you select ‘1234’ as your pin then the SMS will be REG 1234
                                        Once you register for the SMS banking, you will receive detailed SMS with short
                                        codes for the following services:</p>


                                </div>
                                <div class="tabmiddlepara">
                                    <ul class="list-group">
                                        <li class="list-item">Balance Inquiry,</li>
                                        <li class="list-item">
                                            Mini Statements,
                                        </li>
                                        <li class="list-item">Credit Card Bill Inquiry</li>
                                        <li class="list-item">Credit Card Cashback Points</li>
                                        <li class="list-item">SOA Statement</li>
                                        <li class="list-item">Ready Line Bill Inquiry</li>
                                        <li class="list-item">Block/unblock SMS Banking</li>
                                        <li class="list-item">Change SPIN</li>
                                    </ul>


                                </div>
                                <div class="TabmiddleHeadingcolored mt-5">
                                    <p>TERMS AND CONDITIONS FOR SMS BANKING</p>
                                </div>

                                <div class="TabPara">
                                    <p>These terms and conditions shall form the agreement between Silkbank’s Customer
                                        and Silkbank Limited.</p>
                                </div>
                                <div class="tabMiddleHeading">
                                    <p> Definition:</p>
                                </div>
                                <div class="TabPara">
                                    <p>In these terms and conditions, the following terms shall have the following
                                        meanings: “Facility” means the SMS banking facility granted by the Bank to the
                                        holder(s) of Silkbank Limited VISA/MasterCard and of any account and/or joint
                                        account and/or any other accounts or services as determined by the Bank from
                                        time to time. (“Account(s)”) means any or all bank accounts being maintained by
                                        the Customer with the Bank in any manner whatsoever for access to information on
                                        Accounts as may be prescribed by the Bank from time to time and usage of
                                        products and/or services as may be made available and included on mobile phone
                                        by the Bank from time to time. ”Bank” means any branch in Pakistan of Silkbank
                                        Limited with which the Customer’s Account is maintained; ”Customer” means the
                                        person who holds an Account with the Bank; “MSP” means any mobile service
                                        provider through whom the Customer or the Bank receives the mobile services as
                                        notified by the Bank. “Service Provider (s)” definition includes but is not
                                        limited to MSPs, organizations or individuals whose services the Bank uses in
                                        relation to SMS banking service in any capacity. “SPIN” means the 4 digit SPIN
                                        as provided by the Customer for authentication / verification by Bank of his /
                                        her identity. Customer will be able to obtain a range of financial information
                                        as determined by the Bank related to his/her relevant Account(s) through the use
                                        of SPIN and such other means of identification assigned to the Customer in
                                        connection with the Account(s) and Facility. “Alerts” means the customized
                                        messages sent either by short messaging service / text (“SMS”) over the
                                        Customer’s mobile phone, email, or fax or any other modes of communication
                                        determined by the Bank from time to time.</p>
                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Availability</p>
                                </div>
                                <div class="TabPara">
                                    <p>The Customer has requested for this Facility which the Bank at its sole
                                        discretion may discontinue at any time without any prior notice. The Facility is
                                        currently available only to resident Pakistani Customers with Account(s)
                                        maintained with the Bank.
                                        The Bank may wherever feasible shall extend the Facility to other MSP’s from
                                        time to time.
                                        The Customer assumes full responsibility for the security and confidentiality of
                                        his / her mobile phone / mobile phone number and SPIN to be used in initially
                                        gaining access to his / her enrolled Account(s) through the use of his/her
                                        mobile phone.
                                        The Facility may be extended by the Bank to any other accounts, products and /
                                        or services being offered by the Bank or otherwise at the sole discretion of the
                                        Bank from time to time.
                                        The Bank also reserves the right to make any additions or deletions in the
                                        services offered through Facility at any time and discretion of the Bank.
                                        The Customer shall inform the Bank immediately on surrendering / discontinuing
                                        use of the MSP’s mobile connection.
                                        The facility requiring telephonic verification against financial or other
                                        transactions as deem fit by the Bank will only be provided / performed within 1
                                        working day after verification from the Customer of the request made via SMS
                                        banking.
                                    </p>
                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Process</p>
                                </div>
                                <div class="TabPara">
                                    <p> The Customer is duly bound to acquaint himself with the detailed process for
                                        using the Facility and the Bank is not responsible for any error / omissions by
                                        the Customer.
                                        The Customer acknowledges that this Facility of the Bank will be implemented in
                                        a phased manner and the Bank may at a later stage, as and where feasible; add
                                        more features to send the available Alerts. The Bank may, at its discretion,
                                        from time to time change the features of any Alerts / Facility. The Customer
                                        will be solely responsible for keeping himself updated of the available Alerts,
                                        which shall, on best-effort basis, be notified by the Bank from time to time
                                        through its website or through any other legally recognized medium of
                                        communication.
                                        The Bank is not bound to acknowledge the receipt of any query instructions nor
                                        shall the Bank be held responsible to verify any instructions. The Bank shall
                                        endeavour to provide instructions on a best effort basis and wherever
                                        operationally possible for the Bank.
                                        The Customer is solely responsible for intimating in writing to the Bank any
                                        change in his mobile phone number and the Bank will not be liable for sending
                                        Alerts or other information over the Customer’s mobile phone number in any way
                                        whatsoever.
                                        The Customer acknowledges that the Facility is dependent on the
                                        telecommunications infrastructure, connectivity and services within Pakistan.
                                        The Customer accepts that timeliness of Alerts sent by the Bank will depend on
                                        factors affecting the telecommunications industry. Neither the Bank nor its
                                        Service Providers shall be liable for non-delivery or delayed delivery of
                                        Alerts, error, loss, distortion in transmission of and wrongful transmission of
                                        Alerts to the Customer.
                                        The Bank shall endeavour to provide the Facility on a best effort basis and the
                                        Customer shall not hold the Bank or its partner(s) responsible / liable for
                                        non-availability of the Facility or any loss or damage caused to the Customer as
                                        a result of use of the Facility (including relying on the Alerts for the
                                        Customer’s investment or business purposes). The Bank or its Service Providers
                                        shall not be held liable in any manner to the Customer in connection with the
                                        use of the Facility by MSP.
                                        The Customer accepts that each Alert may contain certain Account(s) information
                                        relating to the Customer. The Customer authorizes the Bank to send Account
                                        related information, though not specifically requested, if the Bank deems that
                                        the same is relevant.
                                        The Customer must keep the SIM card and his / her mobile phone in secure / safe
                                        custody at all times. The Customer shall be solely responsible for the
                                        consequences in case the Customer fails to adhere to the above and / or in case
                                        of any unauthorized use of his/her mobile phone or SIM card.
                                        By agreeing to the terms and conditions of SMS banking, the Customer accepts the
                                        option to use the enhanced options, as and when they are made available by the
                                        Bank, which may include but not be limited to; transferring of funds, making
                                        bill payments, transferring from one currency to another. Upon the Bank offering
                                        the enhanced options, the Customer shall be advised the fees charged if any for
                                        the various enhanced options made available. Such Alerts shall be charged on a
                                        per transaction basis or otherwise as determined by the Bank from time to time.
                                    </p>
                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Addition and Withdrawal or Termination of Facility</p>
                                </div>
                                <div class="TabPara">
                                    <p> The Bank reserves the right to introduce additional service(s) with or without
                                        giving any notice to the Customer. The Bank reserves the right to send messages
                                        to the registered mobile phones regarding its products, services or any related
                                        matter, without the express consent of the Customer.
                                        The Bank may, in its discretion, withdraw temporarily or terminate the Facility,
                                        either wholly or in part, at any time without any liabilities on the part of
                                        Bank. The Bank may, without prior notice, suspend temporarily the Facility at
                                        any time during which any maintenance work or repair is required to be carried
                                        out or in case of any emergency or for security reasons, which require the
                                        temporary suspension of the Facility.
                                        Notwithstanding the terms laid down in clause 4.2 above, either the Customer or
                                        the Bank may, for any reason whatsoever, terminate this agreement at any time
                                        upon prior written notice that can be sent via SMS. Liabilities incurred by the
                                        Customer shall, however, survive the termination of this agreement.</p>
                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p> Charges</p>
                                </div>
                                <div class="TabPara">
                                    <p>The Customer will bear charges of sending commands via SMS to avail services.
                                        There are no charges on SMS Banking levied from the Bank to the Customer.
                                        However, Bank reserves the right to introduce any fee/charge on this facility in
                                        future as deemed fit. The same will be notified to the customer via schedule of
                                        charges and any other appropriate medium as deemed fit.</p>
                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p> Disclaimer</p>
                                </div>
                                <div class="TabPara">
                                    <p>The Bank or its employee/contractual staff will not be liable for:
                                        any unauthorized use of the Customer’s SPIN or
                                        mobile phone number/instrument or unauthorized access to e-mails received at his
                                        notified email address for any fraudulent, duplicate or erroneous instructions
                                        given by use of the same;
                                        acting in good faith on any instructions received by the Bank;
                                        error, default, delay or inability of the Bank to act on all or any of the
                                        instructions;
                                        loss of any information/instructions/Alerts in transmission/due to network
                                        failure;
                                        unauthorized access by any other person to any information/instructions given by
                                        the Customer or breach of confidentiality;
                                        The Bank shall not be concerned with and will not be held liable for any dispute
                                        that may arise between the Customer and the MSP and makes no representation or
                                        gives no warranty with respect to the quality of the Service Provided by the MSP
                                        or guarantee for timely delivery of the contents of each Alert.
                                        The Bank shall not be held liable for any disruption or failure of providing
                                        mobile telecommunication services by MSP. The customer agrees that any complaint
                                        in connection with the failure of mobile telecommunication services shall be
                                        referred to and addressed by the MSP.
                                        All responsibility of use of Facility by secondary cardholder/joint account
                                        holder shall be binding on all joint account holder and primary credit card
                                        holders.</p>
                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Liability and Indemnity</p>
                                </div>
                                <div class="TabPara">
                                    <p>Service Provider(s)/Bank shall be free and harmless from and against all
                                        liabilities, losses, litigations, claims and damages arising from negligence,
                                        fraud, collusion or violation of the terms of this agreement on the part of the
                                        Customer and/or a third party. In addition, the Bank shall not be liable for any
                                        expense, claim, loss or damage arising out or in connection with this including
                                        but not limited to war, rebellion, typhoon, earthquake, electrical, computer or
                                        mechanical failures. The Customer shall indemnify and keep the Bank and its
                                        Service Providers.</p>
                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p> Amendment</p>
                                </div>
                                <div class="TabPara">
                                    <p>The Customer hereby, agrees to abide by, without need of notice and express
                                        consent, any and all future modifications, innovations, amendments or
                                        alterations to these terms and conditions made by the Bank from time to time.
                                    </p>
                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Governing Law & Jurisdiction</p>
                                </div>
                                <div class="TabPara">
                                    <p>This terms and conditions shall be governed and construed in accordance with the
                                        laws of Pakistan whose courts shall be courts of competent jurisdiction. This
                                        clause shall survive termination of this agreement.</p>
                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Customer Agreement to these Terms</p>
                                </div>
                                <div class="TabPara">
                                    <p>The use of short codes to avail service/information from the Bank via SMS banking
                                        will be considered as customer’s consent and agreement to the terms and
                                        conditions mentioned above for SMS banking.</p>
                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Severability</p>
                                </div>
                                <div class="TabPara">
                                    <p>If any part, term, provision or clause of the agreement proves to be invalid or
                                        unenforceable, the validity or enforceability of the remaining parts, terms,
                                        provisions and clauses will not be affected. The rights and obligations of the
                                        parties will be construed as if the agreement did not contain the particular
                                        invalid or unenforceable part, term, provision or clause.</p>
                                </div>
                                <div class="tabMiddleHeading mt-5">
                                    <p>Governing Law</p>
                                </div>
                                <div class="TabPara mb-5">
                                    <p>These terms and conditions shall be governed by the laws of Islamic Republic of
                                        Pakistan.</p>
                                </div>




                            </div>
                        </div>
                    </div>

                    <div class="card tab-pane fade" id="WhatsappBanking" role="tabpanel"
                        aria-labelledby="tab-whatsappbanking">
                        <div class="card-header" role="tab" id="heading-I">
                            <h5 class="mb-0 " onclick="toggle('#9');">

                                <a class="collapsed" data-toggle="collapse" href="#collapse-EI" aria-expanded="false"
                                    aria-controls="collapse-EI">
                                    Whatsapp Banking
                                    <i id="8" class="tabIcon d-block fa fa-chevron-down float-right"
                                        style="color:#808080"></i>
                                </a>

                            </h5>
                        </div>
                        <div id="collapse-EI" class="collapse " data-parent="#content-container6" role="tabpanel"
                            aria-labelledby="heading-I">
                            <div class="TabSMSBanking card-body">
                                <img class="my-lg-4 my-0" src="assets/images/Silk Whatsapp.jpeg" alt="image"
                                    width="100%">
                                <div class="TabHeading mb-2">Whatsapp Banking</div>
                                <div class="TabPara">
                                    <p>In the fast-paced digital age, convenience and accessibility are key when it
                                        comes to managing your finances. That's why we're thrilled to introduce our
                                        revolutionary WhatsApp Banking Service.. With this cutting-edge offering, we've
                                        transformed the way you can interact with the bank, making it easier than ever
                                        to access your accounts, perform transactions, and get the information you need,
                                        all from the comfort of your favorite messaging app. Say goodbye to long queues
                                        and hello to hassle-free banking at your fingertips. </p>


                                </div>

                                <div class="tabMiddleHeading">
                                    <p>Silkbank WhatsApp banking solution offers: </p>
                                </div>
                                <div class="tabmiddlepara mb-5">
                                    <ul class="list-group">
                                        <li class="list-item">Balance Inquiry</li>
                                        <li class="list-item">Mini-statement</li>
                                        <li class="list-item">Guard your card</li>
                                        <li class="list-item">Reward points Redemption</li>
                                        <li class="list-item">Personal Loan Repayment Schedule</li>
                                        <li class="list-item">Card Replacement</li>
                                        <li class="list-item">Top-up / Limit Enhancement</li>
                                        <li class="list-item">Order Cheque Book / Pay Order</li>
                                        <li class="list-item">Card Upgrade</li>
                                        <li class="list-item">Email Registration</li>
                                        <li class="list-item">Account Statement</li>
                                        <li class="list-item">Supplementary Card Request</li>
                                        <li class="list-item">Activate International Card Usage</li>
                                        <li class="list-item">Credit Card & Ready Line Available Limit / Utilized Amount / Latest Bill</li>
                                        <li class="list-item">Withholding Tax Certificate</li>
                                        <li class="list-item">And Much More……..</li>











                                    </ul>


                                </div>






                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'common/footer.php'; ?>