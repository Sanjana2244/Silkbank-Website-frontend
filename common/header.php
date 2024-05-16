<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <title>Silkbank Limited - Yes We Can !!!|</title>
    <link rel="icon" type="image/x-icon" href="./assets/logo.png" />

    <link rel="stylesheet" href="assets/css/style.css" />


    <!-- Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Bootstrap Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/Font-awesome/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>
    <div class="page_width">
        <nav class="navbar navbar-expand-lg" id="nav-container">
            <div class="w-100 top-container d-lg-none">
                <div class="top-row">
                    <button onclick="$('#menu').toggleClass('fa-sharp fa-regular fa-xmark').toggleClass('fa-sharp fa-solid fa-bars')" class="navbar-toggler" id="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" style="color:#A40046;font-size:1.5rem">
                            <i class="fa-sharp fa-solid fa-bars" id="menu"></i>
                        </span>
                    </button>
                    <div class="logo">
                        <a class=" d-lg-none d-inline-block" href="index.php">
                            <img src="assets/images/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="Search">
                    <div class="input-group">
                        <input type="text" placeholder="Search">
                        <div class="input-group-pretend">
                            <span class="input-group-text">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>


            </div>


            <div class="nav-container" id="navbar-hide">
                <div class="UpperNavigation collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="ContactUS.php">Contact Us</a>
                        </li>
                        <div class="Separator"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="Careers.php">Careers</a>
                        </li>
                        <div class="Separator"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sitemap</a>
                        </li>
                        <div class="Separator"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="sbpRegulations.php" target="blank">SBP Regulations</a>
                        </li>
                        <div class="Separator"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.silkbank.com.pk/admin/upload/PDF/FX%20Digital%20Portal%20SB%20Booklet%20(Apr-21)(6).pdf" target="blank">FX User Manual Guide</a>
                        </li>
                        <div class="Separator"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.silkcashmanagerplus.com/SLK_SSO/Masterpage/SystemLogin.aspx" target="blank">FX Digital Portal</a>
                        </li>
                        <div class="Separator"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="e-deliverychannelstabs.php#SilkbankDigital">Silkbank Digital</a>
                        </li>
                    </ul>
                    <div class="logo ">
                        <a class="d-none d-sm-none d-lg-inline-block" href="index.php">
                            <img src="assets/images/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg">

                    <div class="LowerNavigation collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="Auth">

                            <a class="Button mr-lg-4 mr-2" href="https://digital.silkbank.com/apps/digi/#_frmLogin" target="blank">Register</a>


                            <a class="Button" href="https://digital.silkbank.com/apps/digi/#_frmLogin" target="blank">Login</a>

                        </div>
                        <ul class="navbar-nav mr-auto" id="content">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>

                            </li>
                            <hr>


                            <div class="dropdown">
                                <div class=" d-flex w-100 justify-content-between align-items-center">
                                    <a href="deposits.php" class="dropbtn ">Deposits</a>
                                    <div class="w-75" data-toggle="collapse" data-target="#deposit" aria-expanded="false" aria-controls="deposit">
                                        <i class="d-lg-none dropbtn1 fa fa-chevron-down float-right"></i>

                                    </div>
                                </div>


                                <div class="collapse d-lg-none" id="deposit" data-parent="#content">
                                    <ul class="nav mobile-nav d-lg-none d-flex flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="AccountOpening.php">Account Opening Process</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="CurrentAccount.php">Current Account</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="SavingAccount.php">Saving Account</a>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link" href="TermDeposits.php">Term Deposites</a>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link" href="OtherAccount.php">Other Accounts</a>
                                        </li>


                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="insurance.php">Insurance</a>
                                        </li> -->


                                        <li class="nav-item">
                                            <a class="nav-link" href="remittances.php">Remittances</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-content">

                                    <div class="tabs-section m-5">
                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="pills-opening-Account-tab" data-toggle="pill" href="#pills-opening-Account" role="tab" aria-controls="pills-opening-Account" aria-selected="true">Account
                                                    Opening Process</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link " id="pills-Current-Account-tab" data-toggle="pill" href="#pills-Current-Account" role="tab" aria-controls="pills-Current-Account" aria-selected="false">Current
                                                    Account</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="pills-Saving-Account-tab" data-toggle="pill" href="#pills-Saving-Account" role="tab" aria-controls="pills-Saving-Account" aria-selected="false">Saving
                                                    Account</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="pills-Term-Deposites-tab" data-toggle="pill" href="#pills-Term-Deposites" role="tab" aria-controls="pills-Term-Deposites" aria-selected="false">Term
                                                    Deposites</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="pills-Other-Accounts-tab" data-toggle="pill" href="#pills-Other-Accounts" role="tab" aria-controls="pills-Other-Accounts" aria-selected="false">Other
                                                    Accounts</a>
                                            </li>
                                            <!-- <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="pills-Insurance-tab" data-toggle="pill" href="#pills-Insurance" role="tab" aria-controls="pills-Insurance" aria-selected="false">Insurance</a>
                                            </li> -->
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="pills-Remittances-tab" data-toggle="pill" href="#pills-Remittances" role="tab" aria-controls="pills-Remittances" aria-selected="false">Remittances</a>
                                            </li>


                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-opening-Account" role="tabpanel" aria-labelledby="pills-opening-Account-tab">
                                                <div class="row">
                                                    <div class="col-md-5">

                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="AccountOpening.php#accountoprningprocessforbranchcustomer">
                                                                    Account Opening Process for In-Branch Customer </a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>




                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="AccountOpening.php#accountoprningprocessfordigitalonboarding">Account Opening Process for Digital Onboarding</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>
                                                            </div>

                                                        </div>


                                                    </div>

                                                </div>
                                            </div>


                                            <div class="tab-pane fade " id="pills-Current-Account" role="tabpanel" aria-labelledby="pills-Current-Account-tab">
                                                <div class="row">
                                                    <div class="col-md-4">

                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10 pr-md-5">
                                                                <a href="CurrentAccount.php#asaanaccount">Asaan
                                                                    Account</a>
                                                                <p>Banking made easy with Silkbank Asaan Account.</p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>

                                                        <!-- <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="CurrentAccount.php#businessvalueaccount">Business
                                                                    Value Account</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium</p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div> -->

                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="CurrentAccount.php#salarypremiumplus">Salary
                                                                    Premium Plus</a>
                                                                <p>Get more out of your salary with Silkbank Salary Premium Account Plus.</p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="CurrentAccount.php#allinoneaccount">All in One
                                                                    Account</a>
                                                                <p>Experience convenience and flexibility with Silkbank All-in-One Account.</p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="CurrentAccount.php#businessvalueaccountplus">Business
                                                                    Value Account Plus</a>
                                                                <p>Maximize your business potential with Silkbank Business Value Account Plus.</p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>
                                                        <!-- <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="CurrentAccount.php#salarypremiumaccount">Salary
                                                                    Premium Account</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="CurrentAccount.php#basicbankingaccount">Basic
                                                                    Banking Account</a>
                                                                <p>Experience hassle-free banking with Silkbank Basic Banking Account. </p>
                                                            </div>
                                                        </div>
                                                        <div class="row margin-bottom">


                                                            <div class="col-md-10">
                                                                <a href="CurrentAccount.php#onlineexpress">Online
                                                                    Express</a>
                                                                <p>Bank from anywhere, anytime with Silkbank Online Express. </p>
                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-Saving-Account" role="tabpanel" aria-labelledby="pills-Saving-Account-tab">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="SavingAccount.php#munafarozana">Munafa
                                                                    Rozana</a>
                                                                <p>Save more and earn more with Silkbank Munafa Rozana Savings Account.</p>
                                                            </div>
                                                            <div class="Vertical"></div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="SavingAccount.php#plssavings">PLS Savings</a>
                                                                <p>Enjoy exclusive privileges with Silkbank PLS Account.</p>
                                                            </div>
                                                            <div class="Vertical"></div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="SavingAccount.php#supersaver">Super Saver</a>
                                                                <p>Maximize your savings with Silkbank Super Saving Account.</p>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-Term-Deposites" role="tabpanel" aria-labelledby="pills-Term-Deposites-tab">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="TermDeposits.php#fleximunafadeposit">Flexi
                                                                    Munafa Term Deposit</a>
                                                                <p>Get the best returns on your savings with Silkbank Flexi Munafa Term Deposit Account.</p>


                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="TermDeposits.php#specialnoticedeposit">Special
                                                                    Notice Deposit Account</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>

                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="TermDeposits.php#salanamunafa">Salana
                                                                    Munafa</a>
                                                                <p>Make your savings grow with Silkbank's Salana Munafa Account.</p>

                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>
                                                        <div class="row margin-bottom">


                                                            <div class="col-md-10">
                                                                <a href="TermDeposits.php#othertermdeposit">Other Term
                                                                    Deposit</a>
                                                                <p>Grow your savings with Silkbank Rupee Term Deposit. </p>

                                                            </div>


                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="TermDeposits.php#mahanamunafa">Silkbank Mahana
                                                                    Munafa</a>
                                                                <p>Get monthly profits on your savings with Silkbank's Mahana Munafa Account.</p>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-Other-Accounts" role="tabpanel" aria-labelledby="pills-Other-Accounts-tab">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="OtherAccount.php#foregincurrencyaccount">Foreign
                                                                    Currency Account</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>
                                                            </div>
                                                            <div class="Vertical"></div>

                                                        </div>


                                                    </div>


                                                </div>
                                            </div>
                                            <!-- <div class="tab-pane fade" id="pills-Insurance" role="tabpanel"
                                                aria-labelledby="pills-Insurance-tab">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="insurance.php#EFUSunehraKalPlusPlan">EFU
                                                                    Sunehra Kal Plus Plan</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="insurance.php#DFTSecureTakafulPlan">DFT Secure
                                                                    Takaful Plan</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>
                                                            </div>
                                                            <div class="Vertical"></div>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="insurance.php#SLICEndowmentPlan">SLIC Endowment
                                                                    Plan</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="insurance.php#AdamjeeLifeTahaffuzPlan">Adamjee
                                                                    Life Tahaffuz Plan</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="insurance.php#IGILifeWTOAlHayatTakafulPlan">IGI
                                                                    Life -WTO Al-Hayat Takaful Plan</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>
                                                            </div>
                                                            <div class="Vertical"></div>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="insurance.php#AskariLifeZaminPlan">Askari Life
                                                                    Zamin Plan</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div> -->
                                            <div class="tab-pane fade" id="pills-Remittances" role="tabpanel" aria-labelledby="pills-Remittances">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="remittances.php#becomeasilkbankagent">Become a
                                                                    Silkbank Agent</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="remittances.php#silkfaureetransfer">Silk Fauree
                                                                    Transfer</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>
                                                            </div>

                                                            <div class="Vertical"></div>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="remittances.php#westernunion">Western Union</a>
                                                                <p>Silkbank welcomes you to a world of convenience
                                                                    and security. Our Credit cards offer premium </p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr>

                            <div class="dropdown">
                                <div class=" d-flex w-100 justify-content-between align-items-center">
                                    <a href="loans.php" class="dropbtn ">Loan</a>
                                    <div class="w-75 " data-toggle="collapse" data-target="#loan" aria-expanded="false" aria-controls="loan">

                                        <i class="d-lg-none dropbtn1  fa fa-chevron-down float-right"></i>
                                    </div>
                                </div>
                                <div class="collapse d-lg-none" id="loan" data-parent="#content">
                                    <ul class=" nav mobile-nav d-flex flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="consumer.php">Consumer
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="SME.php">SME
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-content ">
                                    <div class="tabs-section m-5">
                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="pills-Loan-Current-Account-tab" data-toggle="pill" href="#pills-Loan-Current-Account" role="tab" aria-controls="pills-Current-Account" aria-selected="true">Consumer
                                                </a>
                                            </li>
                                            <li class="nav-item ml-4" role="presentation">
                                                <a class="nav-link" id="pills-Loan-Saving-Account-tab" data-toggle="pill" href="#pills-Loan-Saving-Account" role="tab" aria-controls="pills-Loan-Saving-Account" aria-selected="false">SME
                                                </a>
                                            </li>



                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-Loan-Current-Account" role="tabpanel" aria-labelledby="pills-Loan-Current-Account-tab">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row">

                                                            <div class="col-md-10">
                                                                <a href="consumer.php#personalloan">Personal Loan</a>
                                                                <p>Personal Loan is there to make your dreams come true by giving you the cash you need for your personal use.</p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">

                                                            <div class="col-md-10">
                                                                <a href="consumer.php#personalloansmartplan">Personal
                                                                    Loan Smart Plan</a>
                                                                <p>Silkbank Personal Loan Smart Plan helps you fulfil your needs with flexibility and convenience with payment tenures of up to 5 years.</p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">

                                                            <div class="col-md-10 pr-0">
                                                                <a href="consumer.php#readyline">Readyline</a>
                                                                <p>Silkbank Ready Line is an evergreen running finance facility which provides you speedy access to credit line with complete peace of mind and utmost convenience.</p>
                                                            </div>
                                                        </div>




                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-Loan-Saving-Account" role="tabpanel" aria-labelledby="pills-Loan-Saving-Account-tab">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row  margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="SME.php#MPower">M’Power</a>
                                                                <p>Silkbank`s M’Power is a running finance facility which is structured to helps you to leverage every business opportunity that comes your way</p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-10">
                                                                <a href="SME.php#SMEAgri">SME Agri</a>
                                                                <p>SME-Agri is specifically designed for agri-based customers as it accommodates cash flow and enables them to meet their requirements.</p>
                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">

                                                            <div class="col-md-10">
                                                                <a href="SME.php#SMECashEase">SME Cash Ease</a>
                                                                <p>A liquidity solution for SME level businesses to maintain a profitable working relationship with their client companies.</p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row">

                                                            <div class="col-md-10">
                                                                <a href="SME.php#SMERelationship">SME Relationship</a>
                                                                <p>Silkbank’s SME Banking Group offers banking facilities for individuals and companies which are categorized by the State Bank as SMEs. </p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <hr>


                            <div class="dropdown">
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <a href="e-deliverychannels.php" class="dropbtn "> E-Delivery Channels</a>
                                    <div class="w-75 " data-toggle="collapse" data-target="#edelivery" aria-expanded="false" aria-controls="edelivery">

                                        <i class="d-lg-none dropbtn1  fa fa-chevron-down float-right"></i>
                                    </div>
                                </div>
                                <div class="collapse d-lg-none" id="edelivery" data-parent="#content">
                                    <ul class=" nav mobile-nav d-flex flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="consumer.php">Consumer
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="SME.php">SME
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <a href="e-deliverychannels.php" class="dropbtn">
                                    E-Delivery Channels</a> -->



                                <div class="dropdown-content ">
                                    <div class="tabs-section mx-5">
                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-Loan-Current-Account" role="tabpanel" aria-labelledby="pills-Loan-Current-Account-tab">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="e-deliverychannelstabs.php#SilkbankDigital">Silkbank
                                                                    Digital</a>
                                                                <p>With Silkbank Digital Internet Banking service you can access and manage your accounts anywhere, anytime. </p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="e-deliverychannelstabs.php#SMSBanking">SMS
                                                                    Banking</a>
                                                                <p>Banking on the go with Silkbank SMS Banking. Once you register for SMS banking, you will receive detailed SMS
                                                                    with short codes for various services.</p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="e-deliverychannelstabs.php#PhoneBanking">Phone
                                                                    Banking</a>
                                                                <p>Banking on finger tips with Silkbank Phone Banking, ensure that your financial needs are taken care of with ultimate
                                                                    accessibility, convenience and security, 24/7 throughout the year. </p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10 pr-0">
                                                                <a href="e-deliverychannelstabs.php#SilkMobile">Silk
                                                                    mobile</a>
                                                                <p>An amazing and innovative Mobile banking app that provides you with convenience and ease of performing secure
                                                                    transactions on the go, Anywhere, Anytime! </p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="e-deliverychannelstabs.php#EStatements">E-Statements</a>
                                                                <p>Simplify your life with Silkbank E-statement. You can request e-statement on a daily, weekly, monthly, quarterly, half-
                                                                    yearly or annual frequency via email. </p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="e-deliverychannelstabs.php#SMSAlert">SMS
                                                                    Alerts</a>
                                                                <p>Silkbank SMS Alerts Offer our customers the ability to stay informed around the clock, anywhere, any time. </p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="e-deliverychannelstabs.php#WhatsappBanking">Whatsapp
                                                                    Banking</a>
                                                                <p>Silkbank Whatsapp banking allows you to perform various banking operations over Whatsapp through
                                                                    your registered mobile accounts. </p>
                                                            </div>
                                                        </div>
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="e-deliverychannelstabs.php#InterBankFundTransfer">Interbank
                                                                    Funds Transfer</a>
                                                                <p>Introducing the enhanced International Bank Account Number (IBAN) to enable you to easily and conveniently
                                                                    conduct international transactions </p>
                                                            </div>
                                                        </div>
                                                        <div class="row margin-bottom">

                                                            <div class="col-md-10">
                                                                <a href="e-deliverychannelstabs.php#UtilityBills">Utility
                                                                    Bills Payment Service</a>
                                                                <p>Pay utility bills or top up mobile phones using Silkbank VISA Debit Card (VDC) at any Silkbank ATM or using Silk
                                                                    Mobile around the clock, free of charge! </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <hr>

                            <div class="dropdown">
                                <div class=" d-flex w-100 justify-content-between align-items-center">
                                    <a href="cards.php" class="dropbtn ">
                                        Cards</a>
                                    <div class="w-75 " data-toggle="collapse" data-target="#cards" aria-expanded="false" aria-controls="cards">

                                        <i class="d-lg-none dropbtn1 fa fa-chevron-down float-right"></i>
                                    </div>
                                </div>

                                <div class="collapse d-lg-none" id="cards" data-parent="#content">
                                    <ul class="nav mobile-nav d-flex flex-column ">
                                        <li class="nav-item">
                                            <a class="nav-link " href="cards.php">Silkbank Credit
                                                Cards</a>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link" href="debitcards.php">Silkbank
                                                Debit Cards</a>
                                        </li>



                                    </ul>
                                </div>
                                <div class="dropdown-content ">
                                    <div class="tabs-section m-5">
                                        <ul class="nav nav-pills " id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="pills-Silkbank-Credit-Cards-tab" data-toggle="pill" href="#pills-Silkbank-Credit-Cards" role="tab" aria-controls="pills-Current-Account" aria-selected="true">Silkbank
                                                    Credit
                                                    Cards</a>
                                            </li>
                                            <li class="nav-item ml-4" role="presentation">
                                                <a class="nav-link" id="pills-Silkbank-Debit-Cards-tab" data-toggle="pill" href="#pills-Silkbank-Debit-Cards" role="tab" aria-controls="pills-Silkbank-Debit-Cards" aria-selected="false">Silkbank
                                                    Debit Cards</a>
                                            </li>



                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-Silkbank-Credit-Cards" role="tabpanel" aria-labelledby="pills-Silkbank-Credit-Cards-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row margin-bottom">
                                                            <div class="col-md-3">
                                                                <img src="assets/images/Credit-Card-4.png" alt="card" width="85%">
                                                            </div>
                                                            <div class="col-md-7 p-0">
                                                                <a href="VisaSignatureCreditCard.php">Silkbank VISA
                                                                    Signature Credit Card</a>
                                                                <p>Enter The Premium World Of Silkbank Visa Signature
                                                                    Credit Card, Which is Unique in Nature, Just Like
                                                                    You.</p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>
                                                        <div class="row margin-bottom">
                                                            <div class="col-md-3">
                                                                <img src="assets/images/Credit-Card-3-new.png" alt="card" width="85%">
                                                            </div>
                                                            <div class="col-md-7 p-0">
                                                                <a href="VisaPlatinumCreditCard.php">Silkbank VISA
                                                                    Platinum Credit Card</a>
                                                                <p>Silkbank VISA Platinum Credit Card has been designed
                                                                    to complement your premium lifestyle, </p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>
                                                        <div class="row margin-bottom">
                                                            <div class="col-md-3">
                                                                <img src="assets/images/Credit-Card-1.png" alt="card" width="85%">
                                                            </div>
                                                            <div class="col-md-7 p-0">
                                                                <a href="SilkbankVisaGoldCard.php">Silkbank VISA Gold
                                                                    Credit Card</a>
                                                                <p>Silkbank VISA Gold Credit Card opens up a world of
                                                                    opportunities and
                                                                    flexibility for you. </p>
                                                            </div>

                                                            <div class="Vertical"></div>
                                                        </div>
                                                        <div class="row margin-bottom">
                                                            <div class="col-md-3">
                                                                <img src="assets/images/Credit-Card-2.png" alt="card" width="85%">
                                                            </div>
                                                            <div class="col-md-7 p-0">
                                                                <a href="VisaClassicCreditCard.php">Silkbank VISA
                                                                    Classic Credit Card</a>
                                                                <p>Silkbank VISA Classic Credit Card has been designed
                                                                    for ease of use, global recognition, and acceptance
                                                                </p>
                                                            </div>

                                                            <div class="Vertical"></div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row margin-bottom">
                                                            <div class="col-md-3">
                                                                <img src="assets/images/MasterCard-Silkbank-Cards-Platinum.png" alt="card" width="85%">
                                                            </div>
                                                            <div class="col-md-7 p-0">
                                                                <a href="MasterCardPlatinum.php">Silkbank MasterCard
                                                                    Platinum Credit Card</a>
                                                                <p>The
                                                                    Silkbank Platinum
                                                                    Mastercard credit Card is for people who want life
                                                                    to be
                                                                    more rewarding. </p>
                                                            </div>

                                                        </div>
                                                        <div class="row margin-bottom ">
                                                            <div class="col-md-3">
                                                                <img src="assets/images/MasterCard-Silkbank-Cards-Titanium.png" alt="card" width="85%">
                                                            </div>
                                                            <div class="col-md-7 p-0">
                                                                <a href="MasterCardTitanium.php">Silkbank MasterCard
                                                                    Titanium Credit Card</a>
                                                                <p>The Silkbank
                                                                    Titanium Credit
                                                                    Card, crafted for the most discerning customers,
                                                                    improves your
                                                                    lifestyle.</p>
                                                            </div>

                                                        </div>
                                                        <div class="row margin-bottom ">
                                                            <div class="col-md-3">
                                                                <img src="assets/images/MasterCard-Silkbank-Cards-Gold.png" alt="card" width="85%">
                                                            </div>
                                                            <div class="col-md-7 p-0">
                                                                <a href="MasterCardGold.php">Silkbank MasterCard Gold
                                                                    Credit Card</a>
                                                                <p>The Silkbank
                                                                    Gold Mastercard
                                                                    Credit Card is your lifestyle ally, offering you
                                                                    discounts and
                                                                    extra perks on dining etc</p>
                                                            </div>

                                                        </div>
                                                        <div class="row margin-bottom ">
                                                            <div class="col-md-3">
                                                                <img src="assets/images/MasterCard-Silkbank-Cards-Standard.png" alt="card" width="85%">
                                                            </div>
                                                            <div class="col-md-7 p-0">
                                                                <a href="MasterCardStandard.php">Silkbank MasterCard
                                                                    Standard Credit Card</a>
                                                                <p>The
                                                                    Mastercard Standard tier
                                                                    credit card is the beginner tier available, but it
                                                                    still comes
                                                                    with plenty of perks.</p>
                                                            </div>

                                                        </div>





                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-Silkbank-Debit-Cards" role="tabpanel" aria-labelledby="pills-Silkbank-Debit-Cards-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row margin-bottom">
                                                            <div class="col-md-3">
                                                                <img src="assets/images/VDC-SB-Platinum-Front.png" alt="card" width="85%">
                                                            </div>
                                                            <div class="col-md-7 p-0">
                                                                <a href="EMVPlatinumDebitCard.php">EMV Platinum Debit
                                                                    Card</a>
                                                                <p>Silkbank Platinum Debit Card Provides better security
                                                                    than ever with enhanced... </p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>
                                                        <div class="row margin-bottom">
                                                            <div class="col-md-3">
                                                                <img src="assets/images/VDC-SB-Gold-Front.png" alt="card" width="85%">
                                                            </div>
                                                            <div class="col-md-7 p-0">
                                                                <a href="EMVGoldDebitCard.php">EMV Gold Debit Card</a>
                                                                <p>A card to match your lifestyle. Silkbank Gold Debit
                                                                    card with unique discount offerings on 500+
                                                                    brands,...</p>
                                                            </div>
                                                            <div class="Vertical"></div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row margin-bottom">
                                                            <div class="col-md-3">
                                                                <img src="assets/images/VDC-SB-Basic-Front.png" alt="card" width="85%">
                                                            </div>
                                                            <div class="col-md-7 p-0">
                                                                <a href="EMVClassicDebitCard.php">EMV Classic Debit
                                                                    Card</a>
                                                                <p>Access your funds anytime of the day with Silkbank
                                                                    Classic Debit card. Now with higher and better
                                                                    transactional wants,... </p>
                                                            </div>
                                                            <!-- <div class="Vertical"></div> -->
                                                        </div>
                                                        <div class="row margin-bottom">
                                                            <div class="col-md-3">
                                                                <img src="assets/images/VDC-PayPak-SB-Front.png" alt="card" width="85%">
                                                            </div>
                                                            <div class="col-md-7 p-0">
                                                                <a href="EMVPayPakDebitCard.php">EMV PayPak Debit
                                                                    Card</a>
                                                                <p>Silkbank PayPak Debit card provides a smooth
                                                                    experience to its user. Any time of the day.</p>
                                                            </div>
                                                            <!-- <div class="Vertical"></div> -->
                                                        </div>



                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <hr>

                            <li class="nav-item">
                                <a class="nav-link" href="https://emaan.silkbank.com.pk/">Emaan Islamic Banking</a>
                            </li>
                        </ul>
                        <div class="Search">
                            <div class="input-group">
                                <input type="text" placeholder="Search">
                                <div class="input-group-pretend">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                            </div>
                        </div>










                    </div>
                </nav>
            </div>
        </nav>

    </div>

    <div class="Ticker">
        <marquee behavior direction="left" onmouseover="this.stop()" onmouseout="this.start()">
            <div class="customline">
                Silkbank and PSO partner to offer even more convenience to Mastercard credit card customers, who can
                redeem their reward points (Perks) at selected PSO outlets nationwide.
                <div class="dot"></div>
                Silkbank launches All In One Current Account, which offers range of free features including waiver off
                several banking charges while providing free insurance coverages.
                <div class="dot"></div>
                Flood victims need the nation’s support, Donate to Prime Minister’s Flood Reflief Fund, 2022, at any
                Silkbank branch near you!
            </div>
        </marquee>
    </div>
    <div class="background-image">