<?php include 'common/header.php'; ?>



<div class="side-bar consumer">
    <div class="page_width">
        <div class="breadcrumbs">
            <p class="text-uppercase mb-0"><a href="./index.php"> HOME</a> &nbsp;/ &nbsp; <span><a href="./loans.php">Loan</a></span></p>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <h2 class="heading mb-4">
                    <span class="dark" style="font-size: 40px;">Loans</span>

                </h2>

                <div class="links">
                    <div class="dropdown consumer-dropdown">
                        <a class="dropbtn" href="./consumer.php">Consumer</a>
                        <div id="tab-data" class="dropdown-content">
                            <a href="consumer.php#personalloan">Personal Loan</a>
                            <a href="consumer.php#personalloansmartplan">Personal Loan Smart Plan</a>
                            <a href="consumer.php#readyline">Ready Line</a>

                        </div>
                    </div>



                    <div class="dropdown SME-dropdown">
                        <a class="dropbtn" href="./SME.php">SME</a>
                        <div id="tab-data" class="dropdown-content">
                            <a href="SME.php#MPower">M`Power</a>
                            <a href="SME.php#SMECashEase">SME Cash Ease</a>
                            <a href="SME.php#SMERelationship">SME Relationship</a>
                            <a href="SME.php#SMEAgri">SME-Agri</a>

                        </div>
                    </div>




                </div>
            </div>

            <div class="col-lg-9">
                <div class="loan-page-Tabs-section">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#Consumer">Consumer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#SME">SME</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane container active p-lg-2 p-0" id="Consumer">
                        <div class="Tabconsumer">
                            <div class="TabHeading d-block mb-2 mt-3"> Consumer Loans</div>
                            <!-- <img src="assets/images/Loan Slider.png" alt="card" width="100%"> -->
                            <div class="current-account-Tabs-section mt-4 mb-5">
                                <ul id="current_account" class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a id="tab-loan" class="nav-link active " data-toggle="tab" href="#personalloan">Personal
                                            Loan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="tab-smart" class="nav-link" data-toggle="tab" href="#personalloansmartplan">Personal
                                            Loan Smart Plan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="tab-ready" class="nav-link" data-toggle="tab" href="#readyline">Ready Line</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-content" id="content-container15" role="tablist">
                                <div class="card tab-pane fade show active" id="personalloan" role="tabpanel" aria-labelledby="tab-loan">
                                    <div class="card-header" role="tab" id="heading-A">
                                        <h5 class="mb-0" onclick="toggle('#1');">

                                            <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                                Personal Loan
                                                <i id="1" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                            </a>

                                        </h5>
                                    </div>
                                    <div id="collapse-A" class="collapse show " data-parent="#content-container15" role="tabpanel" aria-labelledby="heading-A">
                                        <div class="Tabpersonalloan card-body">
                                            <div class="TabHeading mb-2">Personal Loan</div>
                                            <img src="assets/images/Personal-Loan.jpg" alt="image" width="100%">
                                            

                                            <div class="TabPara mt-4">
                                                <p>If you need extra cash to furnish your home, give the best education to
                                                    your child, plan a perfect wedding or are looking to buy a much desired
                                                    gadget, you don’t have to wait to realize your dreams. Just apply for
                                                    Silkbank Personal Loan to make your dreams come true because “Apnon kay
                                                    liye kuch bhi”. It’s fast flexible and convenient.</p>


                                            </div>
                                            <div class="tabMiddleHeading">
                                                <p>Suitable for people who:</p>
                                            </div>
                                            <div class="tabmiddlepara">
                                                <ul class="list-group">
                                                    <li class="list-item">Have one time borrowing need</li>
                                                    <li class="list-item">Want the peace of mind through monthly payments</li>

                                                </ul>


                                            </div>
                                            <div class="tabMiddleHeading mt-5">
                                                <p>Features and benefits:</p>
                                            </div>

                                            <div class="row icons-section">
                                                <div class="col-md-4">
                                                    <div class="row align-items-center mb-4">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/loan-amount-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Loan amount up to
                                                                Rs. 2 million</p>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center mb-4">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/top-up-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0 ">Top-up facility</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row  align-items-center mb-4">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/flexible-tenures-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Flexible tenures of
                                                                1-5 years</p>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/IBFT-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Balance funds transfer option</p>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row align-items-center mb-4">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/no-security-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">No security, no
                                                                collateral</p>
                                                        </div>
                                                    </div>
                                                    <div class="row  align-items-center">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/icon2.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Pre & Partial payment option available
                                                            </p>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>

                                            <div class="tabMiddleHeading mt-4">
                                                <p>Eligibility</p>
                                            </div>
                                            <div class="tabmiddlepara">
                                                <ul class="list-group">
                                                    <li class="list-item">Pakistani residents</li>
                                                    <li class="list-item">Foreign nationals with approved company guarantee</li>
                                                    <li class="list-item">Salaried individuals</li>
                                                    <li class="list-item"> Age: 21-65 years</li>
                                                    <li class="list-item">Income: minimum Rs. 40,000/- monthly</li>
                                                    <li class="list-item">Offered in major cities of Pakistan: Karachi, Lahore, Rawalpindi,
                                                        Islamabad, Hyderabad, Peshawar, Multan & Faisalabad.</li>





                                                </ul>




                                            </div>
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Flexible</p>
                                            </div>
                                            <div class="tabmiddlepara">
                                                <ul class="list-group">
                                                    <li class="list-item mb-3">Monthly installments with Pre-payment and Partial Payment Facility</li>


                                                </ul>

                                                <p class="mb-0">To apply for Silkbank Personal Loan, email at <a href="mailto:personal.loan@silkbank.com.pk" target="blank">personal.loan@silkbank.com.pk</a> or visit your
                                                    nearest Silkbank Branch.</p>

                                            </div>
                                            <div class="d-lg-flex d-md-flex flex-wrap">
                                                <div class="button-container">
                                                    <a class="Button" href="./EMICalculator.php" target="blank">EMI</a>
                                                    

                                                </div>

                                                <div class="button-container">

                                                    <a class="Button" href="./ApplyOnlinePersonalLoan.php" target="blank">Apply
                                                        Online</a>

                                                </div>
                                                <div class="button-container">

                                                    <a class="Button" href="./ReferAFriendPersonalLoan.php" target="blank">Refer A
                                                        Friend</a>
                                                </div>
                                                <div class="button-container">


                                                    <a class="Button" href="./FaqsPersonalLoan.php" target="blank">FAQS</a>
                                                </div>
                                                <div class="button-container glossary-button">

                                                    <a class="Button" href="./assets/pdf/personalloanSOC Letter Eng - PL SB July-Dec 2022.pdf" target="blank">Schedule of Charges</a>
                                                </div>
                                                <div class="button-container">

                                                    <a class="Button" href="./assets/pdf/personalloan273337-Glossary.pdf" target="blank">Glossary</a>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="card tab-pane fade" id="personalloansmartplan" role="tabpanel" aria-labelledby="tab-smart">
                                    <div class="card-header" role="tab" id="heading-B">
                                        <h5 class="mb-0 " onclick="toggle('#2');">

                                            <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                                Personal
                                                Loan Smart Plan
                                                <i id="2" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                            </a>

                                        </h5>
                                    </div>
                                    <div id="collapse-B" class="collapse " data-parent="#content-container15" role="tabpanel" aria-labelledby="heading-B">
                                        <div class="Tabpersonalloansmartplan card-body">
                                            <div class="TabHeading mb-2">Personal Loan Smart Plan</div>
                                            <img src="./assets/images/Personal-Loan-Smart-Plan.jpg" alt="image" width="100%">

                                            <div class="TabPara mt-4">
                                                <p>Enjoy the flexibility to purchase and pay for your commodity needs with
                                                    Silkbank Personal Loan Smart Plan. It is the most convenient product
                                                    which provides end to end solutions to make your occasions more
                                                    memorable. Whether your house needs an upgrade, planning a dream wedding
                                                    or need accessories for child education, Smart plan has got you covered.
                                                    A range of product categories to choose from together with multiple
                                                    discount options and flexible payment tenures of up to 5 years. Silkbank
                                                    Personal Loan Smart Plan helps you fulfil your needs with flexibility
                                                    and convenience because “Apnon k liye kuch bhi”</p>

                                            </div>
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Features and benefits:</p>
                                            </div>
                                            <div class="row icons-section">
                                                <div class="col-md-4">
                                                    <div class="row align-items-center mb-4">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/loan-amount-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Loan amount up to
                                                                Rs. 2 million</p>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center mb-4">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/advance-salary-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0 ">Get cash against the remaining approved limit
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row  align-items-center mb-4">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/flexible-tenures-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Flexible tenures of
                                                                1-5 years</p>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/discounted-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Avail multiple products on exciting DISCOUNTED
                                                                PRICE
                                                            </p>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row align-items-center mb-4">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/no-security-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">No security, no
                                                                collateral</p>
                                                        </div>
                                                    </div>
                                                    <div class="row  align-items-center">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/icon2.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Pre & Partial payment option available
                                                            </p>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Eligibility</p>
                                            </div>
                                            <div class="tabmiddlepara">
                                                <ul class="list-group">
                                                    <li class="list-item">Pakistani residents</li>
                                                    <li class="list-item">

                                                        Salaried individuals


                                                    </li>
                                                    <li class="list-item">


                                                        Age: 21 - 65 years

                                                    </li>
                                                    <li class="list-item">
                                                        Income: minimum Rs. 40,000/- monthly


                                                    </li>
                                                    <li class="mb-5 list-item">
                                                        Offered in major cities of Pakistan: Karachi, Lahore, Rawalpindi,
                                                        Islamabad, Hyderabad, Peshawar, Multan & Faisalabad.
                                                    </li>
                                                </ul>
                                                <p>
                                                    To apply for Silkbank Personal Loan, email at <a href="mailto:personal.loan@silkbank.com.pk" target="blank">personal.loan@silkbank.com.pk</a> or visit your
                                                    nearest Silkbank Branch.</p>
                                            </div>
                                            <div class="tabMiddleHeading mt-5 mb-4">
                                                <p>Exclusive Discounts</p>
                                            </div>
                                            <div style="overflow-x: auto;">
                                                <table>
                                                    <tr>

                                                        <th>S.No.</th>
                                                        <th>Partners</th>
                                                        <th>Offer Discount</th>
                                                        <th>Product List</th>
                                                        <th>Brochure</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">01.</td>
                                                        <td>Gold Mark</td>
                                                        <td>25% discount on Diamond jewellery only</td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">02.</td>
                                                        <td>Jofa</td>
                                                        <td>25% discount on Diamond jewellery only </td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">03.</td>
                                                        <td>Diamond Gallery</td>
                                                        <td>25% discount on Diamond jewellery only</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">04.</td>
                                                        <td>Habitt Furniture</td>
                                                        <td>10% discount</td>
                                                        <td>
                                                            <a class="d-flex justify-content-around align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>

                                                        </td>
                                                        <td> <a class="d-flex justify-content-between align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">05.</td>
                                                        <td>Gourmet Marquee </td>
                                                        <td>20% discount</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">06.</td>
                                                        <td>Gerry’s Travel </td>
                                                        <td>25% Discount on travel packages</td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">07.</td>
                                                        <td>Dawlance (Home Appliances)</td>
                                                        <td>15%</td>
                                                        <td>
                                                            <a class="d-flex justify-content-between align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>
                                                        </td>
                                                        <td> <a class="d-flex justify-content-between align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">08.</td>
                                                        <td>Honda</td>
                                                        <td>Depending upon product</td>
                                                        <td> <a class="d-flex justify-content-between align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>
                                                        </td>
                                                        <td><a class="d-flex justify-content-between align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a> </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">09.</td>
                                                        <td>Samsung Mobile </td>
                                                        <td>7%</td>
                                                        <td> <a class="d-flex justify-content-between align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>
                                                        </td>
                                                        <td> <a class="d-flex justify-content-between align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">10.</td>
                                                        <td>IPhone</td>
                                                        <td>7%</td>
                                                        <td> <a class="d-flex justify-content-between align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>
                                                        </td>
                                                        <td><a class="d-flex justify-content-between align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">11.</td>
                                                        <td>Dell </td>
                                                        <td>9% </td>
                                                        <td> <a class="d-flex justify-content-between align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>
                                                        </td>
                                                        <td><a class="d-flex justify-content-between align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">12.</td>
                                                        <td>Kenwood (Home Appliances)</td>
                                                        <td>15% </td>
                                                        <td> <a class="d-flex justify-content-between align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>
                                                        </td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">13.</td>
                                                        <td>Homage </td>
                                                        <td>15% </td>
                                                        <td></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">14.</td>
                                                        <td>Almas Jewellers </td>
                                                        <td>50% on the making </td>
                                                        <td></td>
                                                        <td> <a href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">15.</td>
                                                        <td>Canon </td>
                                                        <td>10% </td>
                                                        <td><a class="d-flex justify-content-between align-items-center" href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a></td>
                                                        <td></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">16.</td>
                                                        <td>Nikai</td>
                                                        <td>10% </td>
                                                        <td><a href="https://www.silkbank.com.pk/admin/upload/PDF/SOC%20Letter%20Eng%20-%20PL%20SB%20July-Dec%202022.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a></td>
                                                        <td></td>

                                                    </tr>
                                                </table>
                                            </div>

                                            <!-- sohni table -->
                                            <div class="tabMiddleHeading mt-5 mb-4">
                                                <p>Exclusive Discounts</p>
                                            </div>
                                            <div style="overflow-x: auto;">
                                                <table>
                                                    <tr>

                                                     
                                                        <th>Entity</th>
                                                        <th>Services Offered</th>
                                                        <th>Redemption Flow</th>
                                                     
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td>PIA	</td>
                                                        <td>International Air Tickets Extra Baggage Fee on PIA International Flights	</td>
                                                        <td>
                                                            <a class="d-flex justify-content-around align-items-center" href="./assets/pdf/1109-3rd_Quarterly_Report_2016.pdf" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>

                                                        </td>
                                                        

                                                    </tr>
                                                    <tr>
                                                      
                                                        <td>FBR</td>
                                                        <td>Mobile Phone Duty Payment of Duty on imported Vehicles	</td>
                                                        <td>
                                                            <a class="d-flex justify-content-around align-items-center" href="#" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>

                                                        </td>
                                                       
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td>NADRA</td>
                                                        <td>Renewal of CNIC/NICOP	</td>
                                                        <td>
                                                            <a class="d-flex justify-content-around align-items-center" href="#" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>

                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td>Passport Office	</td>
                                                        <td>Renewal Of Passport	</td>
                                                        <td>
                                                            <a class="d-flex justify-content-around align-items-center" href="#" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>

                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td>State Life	</td>
                                                        <td>Life Insurance/Takaful Premium Payment	</td>
                                                        <td>
                                                            <a class="d-flex justify-content-around align-items-center" href="#" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>

                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td>Overseas Pakistanis Foundation (OPF)	</td>
                                                        <td>School Fee Payment	</td>
                                                        <td>
                                                            <a class="d-flex justify-content-around align-items-center" href="#" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>

                                                        </td>

                                                    </tr>
                                                    <tr>
                                                      
                                                        <td>Utility Stores Corp	</td>
                                                        <td>Retail Purchases	</td>
                                                        <td>
                                                            <a class="d-flex justify-content-around align-items-center" href="#" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>

                                                        </td>
                                                     

                                                    </tr>
                                                    <tr>
                                                      
                                                        <td>Bureau of Emigration & Overseas Employment (BE&OE)	</td>
                                                        <td>Emigrant Registration Fee – OEP Emigrant Registration Fee–Direct Employment	</td>
                                                        <td>
                                                            <a class="d-flex justify-content-around align-items-center" href="#" target="blank"><img src="./assets//images/pdf-img.png" alt="pdf-img">
                                                                Download</a>

                                                        </td>
                                                       

                                                    </tr>
                                                   
                                                    
                                                </table>
                                            </div>
                                             <!-- sohni table -->


                                            <div class="d-lg-flex d-md-flex flex-wrap">
                                                <div class="button-container">
                                                    <a class="Button" href="./EMICalculator.php" target="blank">EMI</a>

                                                </div>
                                                <div class="button-container">

                                                    <a class="Button" href="./ApplyOnlinePersonalLoan.php" target="blank">Apply
                                                        Online</a>
                                                </div>
                                                <div class="button-container">


                                                    <a class="Button" href="./ReferAFriendPersonalLoan.php" target="blank">Refer A
                                                        Friend</a>
                                                </div>
                                                <div class="button-container">


                                                    <a class="Button" href="./FaqsSmartPlan.php" target="blank">FAQS</a>

                                                </div>
                                                <div class="button-container">

                                                    <a class="Button" href="./assets/pdf/personalloansmartplanSOC Letter Eng - PL SB July-Dec 2022.pdf" target="blank">Schedule of Charges</a>
                                                </div>
                                                <div class="button-container">


                                                    <a class="Button" href="./assets/pdf/personalloansmartplan73337-Glossary.pdf" target="blank">Glossary</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card tab-pane fade" id="readyline" role="tabpanel" aria-labelledby="tab-ready">
                                    <div class="card-header" role="tab" id="heading-C">
                                        <h5 class="mb-0 " onclick="toggle('#3');">

                                            <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
                                                Ready Line
                                                <i id="3" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                            </a>

                                        </h5>
                                    </div>
                                    <div id="collapse-C" class="collapse " data-parent="#content-container15" role="tabpanel" aria-labelledby="heading-C">
                                        <div class="Tabreadyline card-body">
                                            <div class="TabHeading mb-2">Ready Line</div>
                                            <img src="assets/images/Ready-Line-banner.jpg" alt="image" width="100%">
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Silkbank Ready Line: Khwahishon ko Chalne do</p>
                                            </div>

                                            <div class="TabPara">
                                                <p>Our financial needs change at different stages of our lives. Whether it
                                                    is realizing your dreams, starting a new career, beginning a new chapter
                                                    with your loved one, or planning your child’s education, Silkbank’s
                                                    Ready Line is here to start that journey with you. Silkbank Ready Line
                                                    is an evergreen running finance facility which provides you speedy
                                                    access to credit line and that too with complete peace of mind and
                                                    utmost convenience.</p>

                                            </div>
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Features & Benefits:</p>
                                            </div>
                                            <div class="row icons-section">
                                                <div class="col-md-4">
                                                    <div class="row align-items-center mb-4">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/sms-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Loan amount up to
                                                                Rs. 2 million</p>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center mb-4">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/checque book-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0 ">Get cash against the remaining approved limit
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row  align-items-center mb-4">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/payorder-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Flexible tenures of
                                                                1-5 years</p>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/countercash-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Avail multiple products on exciting DISCOUNTED
                                                                PRICE
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

                                                            <p class="mb-0">No security, no
                                                                collateral</p>
                                                        </div>
                                                    </div>
                                                    <div class="row  align-items-center">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/debitcard-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Pre & Partial payment option available
                                                            </p>
                                                        </div>
                                                    </div>




                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row align-items-center mb-4">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/sms-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Loan amount up to
                                                                Rs. 2 million</p>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row align-items-center mb-4">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/checque book-icon.png" alt="icon" width="100%">
                                                    </div>
                                                    <div class="col-md-7">

                                                        <p class="mb-0 ">Get cash against the remaining approved limit
                                                        </p>
                                                    </div>
                                                </div> -->

                                                </div>

                                            </div>
                                            <!-- <div class="tabmiddlepara">
                                            <p>Personal Running finance facility of up to Rs 2.0 Million</p>
                                            <p>No collateral requirement.

                                            </p>
                                            <p>Pay off your expensive debts like credit cards and personal loans
                                            </p>
                                            <p>
                                                Variable rates linked to KIBOR.
                                            </p>
                                            <p>Free first Silkbank Visa Debit Card</p>
                                            <p>Attractive discounts on Silkbank Visa Debit Card</p>
                                            <p>Phone banking services available 24 hours a day</p>

                                        </div> -->
                                            <div class="tabMiddleHeading mt-4">
                                                <p>How to spend through Silkbank Ready Line:</p>
                                            </div>
                                            <div class="tabmiddlepara">
                                                <ul class="list-group">
                                                    <li class="list-item">Visa Debit Card</li>
                                                    <li class="list-item">Cheque book</li>
                                                    <li class="list-item">Pay order</li>
                                                    <li class="list-item"> SilkDirect Internet Banking and SilkMobile</li>
                                                </ul>


                                            </div>
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Eligibility:</p>
                                            </div>
                                            <div class="tabmiddlepara">
                                                <ul class="list-group">
                                                    <li class="list-item">Be a Pakistani national residing in Karachi, Lahore, Rawalpindi, Islamabad, Hyderabad, Peshawar or Faisalabad.</li>
                                                    <li class="list-item">Salaried Individual with a minimum monthly income of Rs 40,000</li>
                                                    <li class="list-item">Be 21 to 65 years of age</li>

                                                </ul>
                                               
                                            </div>
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Contact Us:</p>
                                            </div>
                                            <div class="tabmiddlepara">
                                                <p>Get in touch with us now for the instant cash. We will be glad to cater
                                                    your financial needs.</p>
                                                <p><b>Email: ready.line@silkbank.com.pk</b></p>
                                                <p class="mb-0"><b>Telephone: 021-111-100-333</b></p>


                                            </div>
                                            <div class="d-lg-flex d-md-flex flex-wrap">
                                                <div class="button-container">

                                                    <a class="Button" href="./ApplyOnlinePersonalLoan.php" target="blank">Apply
                                                        Online</a>

                                                </div>
                                                <div class="button-container">

                                                    <a class="Button" href="./ReferAFriendPersonalLoan.php" target="blank">Refer A
                                                        Friend</a>
                                                </div>
                                                <div class="button-container">


                                                    <a class="Button" href="./assets/pdf/readylinesilkbank Ready Line- Discount partners list-1.pdf" target="blank">Discount Catalouge</a>

                                                </div>
                                                <div class="button-container">

                                                    <a class="Button" href="./assets/pdf/RL Chip & PIN VDC.pdf" target="blank">Chip
                                                        and Pin Card</a>
                                                </div>
                                                <div class="button-container">

                                                    <!-- <div class="Button mt-0"> -->
                                                    <a class="Button " href="./FaqsReadyLine.php" target="blank">FAQS</a>
                                                </div>
                                                <div class="button-container">

                                                    <!-- </div> -->
                                                    <!-- <div class="Button mt-0"> -->
                                                    <a class="Button " href="./assets/pdf/readylineSOC Letter Eng - RL SB July-Dec 2022.pdf" target="blank">Schedule of Charges</a>

                                                </div>
                                                <div class="button-container">

                                                    <!-- </div> -->
                                                    <!-- <div class="Button mt-0"> -->
                                                    <a class="Button" href="./assets/pdf/personalloan273337-Glossary.pdf" target="blank">Glossary</a>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>

                        </div>

                    </div>

                    <div class="tab-pane container fade p-lg-2 p-0" id="SME">
                        <div class="TabSME">
                            <div class="TabHeading d-block mb-2 mt-3">SME Loans</div>
                            <!-- <img src="assets/images/SME Slider.png" alt="card" width="100%"> -->
                            <div class="saving-account-Tabs-section mt-4 mb-5">
                                <ul id="tabs" class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a id="tab-power" class="nav-link active " data-toggle="tab" href="#MPower">M`Power</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="tab-cash" class="nav-link" data-toggle="tab" href="#SMECashEase">SME Cash Ease</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="tab-relationship" class="nav-link" data-toggle="tab" href="#SMERelationship">SME Relationship</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="tab-agri" class="nav-link" data-toggle="tab" href="#SMEAgri">SME-Agri</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-content" id="content-container16" role="tablist">
                                <div class="card tab-pane fade show active" id="MPower" role="tabpanel" aria-labelledby="tab-power">
                                    <div class="card-header" role="tab" id="heading-D">
                                        <h5 class="mb-0" onclick="toggle('#4');">

                                            <a class="collapsed" data-toggle="collapse" href="#collapse-D" aria-expanded="false" aria-controls="collapse-D">
                                                M`Power
                                                <i id="4" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                            </a>

                                        </h5>
                                    </div>
                                    <div id="collapse-D" class="collapse show" data-parent="#content-container16" role="tabpanel" aria-labelledby="heading-D">
                                        <div class="TabMPower card-body">
                                            <div class="TabHeading mb-2 mt-4">M`Power</div>
                                            <img src="assets/images/M-Power.jpg" alt="image" width="100%">

                                            <div class="TabPara mt-4">
                                                <p>Managing finances is the most crucial component of any business and timely access to funds at competitive rates is the prime business consideration.
                                                </p>
                                                <p>Silkbank`s M’Power is a running finance facility which is structured according to your preferences and provides the best solution to meet your financing needs. It helps you to leverage every business opportunity that comes your way and gives you greater freedom to focus on every important aspect of your business’s growth.</p>
                                            </div>
                                            <div class="tabMiddleHeading">
                                                <p>Features and benefits:</p>
                                            </div>

                                            <div class="row icons-section">
                                                <div class="col-md-4">
                                                    <div class="row align-items-center mb-4">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/icon16.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Loan amount up to
                                                                Rs. 2 million</p>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center mb-4">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/IBFT-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0 ">Free Inter Branch Transactions</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row  align-items-center mb-4">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/rate-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Mark-up rate linked to KIBOR</p>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row align-items-center mb-4">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/rate-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-7">

                                                            <p class="mb-0">Mark-up payable for
                                                                only the amount utilised</p>
                                                        </div>
                                                    </div>



                                                </div>

                                            </div>
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Immediate line of credit of up to Rs. 15 Million</p>
                                            </div>
                                            <div class="TabPara">
                                                <p>With M’Power, you can now get a one year line of credit, which is renewable, ranging from Rs. 1 Million to Rs. 15 Million. We offer loan amount upto 70% of property value. With this product, Silkbank is here to serve as a reliable business partner providing finance in the hour of need and helping you take care of other important matters without worrying about funds.
                                                </p>

                                            </div>
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Competitive Mark-Up Rates</p>
                                            </div>
                                            <div class="TabPara">
                                                <p>Silkbank’s M’Power provides you the most affordable rates in the market. So now invest a high amount in your business with complete peace of mind. Be at ease as you only have to pay only mark-up on monthly basis. The mark-up rate is linked to 3 months KIBOR.
                                                </p>

                                            </div>
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Free Inter-branch Transactions</p>
                                            </div>
                                            <div class="TabPara">
                                                <p>Silkbank offers you the convenience of accessing your account from anywhere in Pakistan through our real-time online network in 32 cities, at no charge. You can operate your account in any way you like. Be it withdrawals, online transfer or getting account statements, you can do it from anywhere without spending a cent.
                                                </p>

                                            </div>
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Pay for only as much as you use</p>
                                            </div>
                                            <div class="TabPara">
                                                <p>Now you don’t need to pay mark-up on the entire credit line that has been extended to you. With M’Power Facility, you only have to pay a mark-up on the utilized amount on daily product basis.
                                                </p>

                                            </div>
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Serving you 24/365</p>
                                            </div>
                                            <div class="TabPara">
                                                <p>In case you have any queries, or need some account-related information, you can call our toll-free line at 021-111-100-333 at any time. Our Phone Banking Officers will be pleased to assist you. You can also visit your nearest Silkbank branch for assistance.
                                                </p>

                                            </div>
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Eligibility</p>
                                            </div>
                                            <div class="tabmiddlepara">
                                                <p>To avail the M’Power facility you should
                                                </p>
                                                <ul class="list-group">

                                                    <li class="list-item">
                                                        Be a Pakistani National;
                                                    </li>
                                                    <li class="list-item">
                                                        Self-employed professionals & businessmen in going concerns over 5 years
                                                    </li>
                                                    <li class="list-item">

                                                        Be in business for at least the last 5 years
                                                    </li>
                                                    <li class="list-item">

                                                        Be between 25 to 65 years of age
                                                    </li>
                                                    <li class="list-item">

                                                        Be having residential or commercial property or land for mortgage
                                                    </li>
                                                </ul>



                                            </div>
                                            <div class="tabMiddleHeading mt-5">
                                                <p>Apply Now</p>
                                            </div>
                                            <div class="TabPara">
                                                <p class="mb-0">For more information regarding M’Power, visit your nearest Silkbank Branch or call 021-111-100-333 where our Phone Banking Officers are ready to
                                                    assist you round the clock.
                                                </p>

                                            </div>
                                            <div class="d-lg-flex">
                                                <div class="button-container">
                                                    <a class="Button" href="./assets/pdf/Mpower48777-Alliances List 2016 - Update 30-11-2016.pdf" target="blank">Discount Catalogue</a>

                                                </div>
                                                <div class="button-container">


                                                    <a class="Button" href="./FaqsMpower.php">Frequently Asked Questions</a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card tab-pane fade" id="SMECashEase" role="tabpanel" aria-labelledby="tab-cash">
                                    <div class="card-header" role="tab" id="heading-E">
                                        <h5 class="mb-0 " onclick="toggle('#5');">

                                            <a class="collapsed" data-toggle="collapse" href="#collapse-E" aria-expanded="false" aria-controls="collapse-E">
                                                SME Cash Ease
                                                <i id="5" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                            </a>

                                        </h5>
                                    </div>
                                    <div id="collapse-E" class="collapse" data-parent="#content-container16" role="tabpanel" aria-labelledby="heading-E">
                                        <div class="TabSMECashEase">
                                            <div class="TabHeading mb-2 mt-4">SME Cash Ease</div>
                                            <img src="assets/images/Cash-Ease.jpg" alt="image" width="100%">

                                            <div class="TabPara mt-4">
                                                <p>SME Cash Ease (Local Bill Discounting Program) is a liquidity solution for SME level businesses to maintain a profitable working relationship with their client companies. Cash Ease offers a bill discounting facility for the suppliers/vendors of large local concerns.</p>
                                                <p>Many times, SME businesses are hard-pressed for operating capital as their supplies are subjected to agreed credit periods with their client companies, for the realization of payment. This pressure is absorbed by the supplier/vendor as part of the cost of goods delivered.</p>

                                            </div>

                                            <div class="tabMiddleHeading mt-4">
                                                <p>Salient Features:</p>
                                            </div>

                                            <div class="row icons-section mb-lg-4 mb-0">
                                                <div class="col-md-4">
                                                    <div class="row align-items-center">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/loan-amount-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-8">

                                                            <p class="mb-0">Avail a loan up to
                                                                Rs. 25 million for one
                                                                year, renewable at expiry.</p>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row ">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/icon10.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-8 mt-2 p-0">

                                                            <p>No collateral required. Invoices discounted serve as security along with Personal Guarantee(s) of Proprietor, Partners & Directors.
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row ">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/rate-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-8 mt-2 p-0">

                                                            <p>Loan amount is up to 90% of the invoices value generated through supplies.

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row icons-section">
                                                <div class="col-md-4">
                                                    <div class="row align-items-center">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/icon11.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-8 mt-2">

                                                            <p class="mb-0">The facility is renewed annually.</p>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row align-items-center">

                                                        <div class="col-md-4">
                                                            <img src="assets/images/rate-icon.png" alt="icon" width="100%">
                                                        </div>
                                                        <div class="col-md-8 mt-2 p-0">

                                                            <p>Pricing is KIBOR-based and negotiable as per business volume/turnovers.</p>
                                                        </div>
                                                    </div>



                                                </div>


                                            </div>






                                            <div class="tabMiddleHeading mt-4">
                                                <p>Rates and Charges:</p>
                                            </div>
                                            <div class="tabmiddlepara">
                                                <p>Processing Fee (Upfront with LAF) </p>
                                                <p>Documents/Legal Charges</p>
                                                <p>As per SOC (non-refundable)</p>
                                                <p>
                                                    The facility is renewed annually.
                                                </p>
                                                <p>
                                                    Actual cost of revenue and special adhesive stamps
                                                </p>

                                            </div>
                                            <div class="tabMiddleHeading mt-4">
                                                <p>Required Documents:</p>
                                            </div>
                                            <div class="tabmiddlepara mb-5">
                                                <ul class="list-group">
                                                    <li class="list-item">Customer Request Letter.</li>
                                                    <li class="list-item">Borrowers’ Basic Fact Sheet.</li>
                                                    <li class="list-item">Audited Financial Statements</li>
                                                    <li class="list-item">
                                                        Business Profile.

                                                    </li>
                                                    <li class="list-item">
                                                        Six Months’ Bank Statement.
                                                    </li>
                                                    <li class="list-item">
                                                        Related Products
                                                    </li>

                                                </ul>




                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card tab-pane fade" id="SMERelationship" role="tabpanel" aria-labelledby="tab-relationship">

                                    <div class="card-header" role="tab" id="heading-F">
                                        <h5 class="mb-0 " onclick="toggle('#6');">

                                            <a class="collapsed" data-toggle="collapse" href="#collapse-F" aria-expanded="false" aria-controls="collapse-F">
                                                SME Relationship
                                                <i id="6" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                            </a>

                                        </h5>
                                    </div>
                                    <div id="collapse-F" class="collapse " data-parent="#content-container16" role="tabpanel" aria-labelledby="heading-F">


                                        <div class="TabSMERelationship card-body">
                                            <div class="TabHeading mb-2 mt-4">SME Relationship</div>
                                            <img src="assets/images/Loan Slider.png" alt="image" width="100%">

                                            <div class="TabPara mt-4">
                                                <p>Silkbank’s SME Banking Group offers banking facilities for individuals and companies which are categorized by the State Bank as SMEs. Our SME business units are located in Karachi, Lahore, Multan, Faisalabad, Sialkot, Gujranwala, Islamabad, Rawalpindi and Peshawar. Each unit is dedicated to service business clusters located within these cities as well as the regions nearby.</p>
                                            </div>
                                            <div class="tabMiddleHeading mt-5">
                                                <p>We provide the following facilities:</p>
                                            </div>
                                            <div class="tabmiddlepara">
                                                <ul class="list-group">
                                                    <li class="list-item">Working Capital Finance: to finance inventories and receivables</li>
                                                    <li class="list-item">
                                                        To finance capital expansion, procurement of machinery and expansion of production facilities
                                                    </li>
                                                    <li class="list-item">
                                                        Export Facilities: to finance pre and/or post export requirements
                                                    </li>
                                                    <li class="list-item">
                                                        Import Facilities: to finance pre and/or post import requirements
                                                    </li>
                                                    <li class="list-item">
                                                        Export/Import Handling: Sight/Usance LCs, Contracts, Bills Collection & Negotiation
                                                    </li>
                                                    <li class="list-item">
                                                        Letter of Guarantees: Bid Bonds, Advance Mobilization and Performance Bonds
                                                    </li>
                                                    <li class="list-item">
                                                        Loan is secured via some tangible security i.e. commercial/residential property
                                                    </li>
                                                    <li class="list-item">
                                                        Loan amount is up to 75% of the market value or 85% of FSV of property
                                                    </li>
                                                    <li class="list-item">
                                                        The facility is renewed annually
                                                    </li>
                                                    <li class="list-item">
                                                        Pricing is KIBOR-based and negotiable as per business volume/turnovers
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tabMiddleHeading mt-5">
                                                <p>Rates and Charges:</p>
                                            </div>
                                            <div style="overflow-x: auto;">



                                                <table>
                                                    <tr>

                                                        <th>Processing Fee (Upfront with LAF)</th>
                                                        <th>As per SOC (non-refundable)</th>

                                                    </tr>
                                                    <tr>
                                                        <td>Documents charges </td>
                                                        <td>Actual cost of revenue and special adhesive stamps</td>


                                                    </tr>
                                                    <tr>
                                                        <td>Legal charges</td>
                                                        <td>Actual & approved charges of lawyers on the Bank’s approved panel</td>

                                                    </tr>



                                                </table>
                                            </div>
                                            <div class="tabMiddleHeading mt-5">
                                                <p>Required Documents:</p>
                                            </div>
                                            <div class="tabmiddlepara mb-5">
                                                <ul class="list-group">
                                                    <li class="list-item">Customer Request Letter</li>
                                                    <li class="list-item">
                                                        Borrowers’ Basic Fact Sheet
                                                    </li>
                                                    <li class="list-item">
                                                        Audited Financial Statements
                                                    </li>
                                                    <li class="list-item">
                                                        Business Profile
                                                    </li>
                                                    <li class="list-item">
                                                        Copy of Property Documents
                                                    </li>
                                                    <li class="list-item">
                                                        Six Months’ Bank Statement
                                                    </li>
                                                </ul>

                                            </div>




                                        </div>
                                    </div>
                                </div>
                                <div class="card tab-pane fade" id="SMEAgri" role="tabpanel" aria-labelledby="tab-agri">
                                    <div class="card-header" role="tab" id="heading-G">
                                        <h5 class="mb-0 " onclick="toggle('#7');">

                                            <a class="collapsed" data-toggle="collapse" href="#collapse-G" aria-expanded="false" aria-controls="collapse-G">
                                                SME-Agri
                                                <i id="7" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                            </a>

                                        </h5>
                                    </div>
                                    <div id="collapse-G" class="collapse " data-parent="#content-container16" role="tabpanel" aria-labelledby="heading-G">
                                        <div class="TabSMEAgri">
                                            <div class="TabHeading mb-2 mt-4">SME-Agri</div>
                                            <img src="assets/images/SME-Agri.jpg" alt="image" width="100%">

                                            <div class="TabPara mt-4">
                                                <p>Since Pakistan is an agricultural country, the importance of financial needs of farmers/growers cannot be ignored. SME-Agri is specifically designed for agri-based customers as it enables them to meet their requirements such as procurement of seeds, fertilizers, pesticides and equipment etc. for their regular crops. SME-Agri also accommodates cash flow requirements of Agri Fertilizer dealers. Moreover, fisheries segment has also been accommodated in order to meet the requirements of fish seeds & feed, manure charges, expansion and rehabilitation of ponds and cold storage etc.</p>
                                            </div>
                                            <div class="tabMiddleHeading">
                                                <p>Salient Features:</p>
                                            </div>
                                            <div class="tabmiddlepara">
                                                <ul class="list-group">
                                                    <li class="list-item">Loan amount varies as per requirements of the customer on case-to-case basis.</li>
                                                    <li class="list-item">
                                                        Facility types under this product include Running Finance for day-to-day cash flow requirements along with guarantee facility as sublimit.
                                                    </li>
                                                    <li class="list-item">
                                                        Facility is sanctioned for one year, renewable at expiry.
                                                    </li>
                                                    <li class="list-item">
                                                        Loan is secured via Agri Land/any other property as collateral.
                                                    </li>
                                                    <li class="list-item">
                                                        Loan amount is up to 60% of the market value of agri property or 85% FSV of residential & commercial property.
                                                    </li>
                                                    <li class="list-item">
                                                        The facility is renewed annually.
                                                    </li>
                                                    <li class="list-item">
                                                        Pricing is KIBOR-based and negotiable as per business volume/turnovers.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tabMiddleHeading mt-5">
                                                <p>Rates and Charges:</p>
                                            </div>
                                            <div style="overflow-x: auto;">

                                                <table>
                                                    <tr>

                                                        <th>Processing Fee (Upfront with LAF)</th>
                                                        <th>As per SOC (non-refundable)</th>

                                                    </tr>
                                                    <tr>
                                                        <td>Documents charges </td>
                                                        <td>Actual cost of revenue and special adhesive stamps</td>


                                                    </tr>
                                                    <tr>
                                                        <td>Legal charges</td>
                                                        <td>Actual & approved charges of lawyers on the Bank’s approved panel</td>

                                                    </tr>



                                                </table>
                                            </div>

                                            <div class="tabMiddleHeading mt-5">
                                                <p>Required Documents:</p>
                                            </div>
                                            <div class="tabmiddlepara mb-5">
                                                <ul class="list-group">
                                                    <li class="list-item">Customer Request Letter</li>
                                                    <li class="list-item">
                                                        Borrowers’ Basic Fact Sheet
                                                    </li>
                                                    <li class="list-item">
                                                        Audited Financial Statements
                                                    </li>
                                                    <li class="list-item">
                                                        Business Profile
                                                    </li>
                                                    <li class="list-item">
                                                        Six Months’ Bank Statement
                                                    </li>
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
        </div>
    </div>
</div>
<?php include 'common/footer.php'; ?>