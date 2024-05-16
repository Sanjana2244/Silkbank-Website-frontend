<?php include 'common/header.php'; ?>



<div class="side-bar remittances">
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

                        <a class="dropbtn" href="./CurrentAccount.php">Account Opening Process</a>
                        <div id="tab-data" class="dropdown-content">
                            <a href="AccountOpening.php#accountoprningprocessforbranchcustomer">Account Opening Process for In-Branch Customer</a>
                            <a href="AccountOpening.php#accountoprningprocessfordigitalonboarding">Account Opening Process for Digital
                                Onboarding</a>


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

            <div class="col-lg-9 remittances">
                <div class="remittances-page">
                    <h3>Account Opening Process</h3>
                    <p>Silkbank welcomes you to a world of convenience and security. Our Credit cards offer premium
                        features, outstanding services and exciting discounts liberating our customers to enjoy a
                        comfortable lifestyle. Silkbank has ventured into following variants of Credit Cards:</p>

                </div>
                <section class="tabbed-content">

                    <nav class="remittances-Tabs-section">
                        <ul id="tabs" class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a id="tab-agent" class="nav-link active" data-toggle="tab" href="#accountoprningprocessforbranchcustomer"> Account Opening Process for
                                    In-Branch Customer </a>
                            </li>
                            <li class="nav-item">
                                <a id="tab-transfer" class="nav-link" data-toggle="tab" href="#accountoprningprocessfordigitalonboarding">Account Opening Process for
                                    Digital Onboarding</a>
                            </li>

                        </ul>
                    </nav>
                    <div class="tab-content" id="content-container5" role="tablist">
                        <div class="card tab-pane fade show active" id="accountoprningprocessforbranchcustomer" role="tabpanel" aria-labelledby="tab-agent">
                            <div class="card-header" role="tab" id="heading-A">
                                <h5 class="mb-0" onclick="toggle('#1');">

                                    <a data-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
                                        Account Opening Process for In-Branch Customer
                                        <i id="1" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-A" class="collapse show" data-parent="#content-container5" role="tabpanel" aria-labelledby="heading-A">
                                <div class="Tabsilkbankagent Tabsilkfaureetransfer card-body">
                                    <img class="my-lg-4 my-0" src="assets/images/Munafa-Rozana-banner.jpg" alt="image" width="100%">
                                    <div class="TabHeading mb-2"> Account Opening Process for In-Branch Customer </div>
                                    <div class="TabPara">
                                        <p>Instant Account opening Process for NTB/Walk-In Individuals/Joint/Sole
                                            Proprietorship Customers (Relationship Managers/Customer Relationship
                                            Managers)</p>
                                    </div>
                                    <div class="tabMiddleHeading">
                                        <p>In-Branch</p>
                                    </div>
                                    <!-- <div class="bullets TabPara">
                                        <div class="d-flex align-items-start mb-3 bullet-button ">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none " alt="">
                                            <p class="ml-3 m-0">Customer visits the branch for a new relationship [Account Opening] with all required documents.</p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">CRO/CRM shall ascertain the customers’ account opening requirements and guide him/her to the Relationship Manager (RM).
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">The Relationship Manager shall explain to the customer of the AOF requirements and Terms and Conditions under which the account shall be operated (minimum balance requirement & product features) and simultaneously perform the scrutiny of the provided documents for completeness.

                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">The Relationship Manager shall further assess customer’s identity by requesting for original CNIC/SNIC and will make photocopy, duly mark notation ‘Original Seen’ on the customer’s CNIC/SNIC copy with signatures.


                                            </p>
                                        </div>
                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">Subsequently RM shall perform online Bio Metric (Refer for details at 2.5.20, P. g. No. 27 of the manual) / NADRA verification and SLS checks of the customer’s identity are also a mandatory requirement. The print outs of NADRA verification and SLS checks (for exact/ phonetic match) will be obtained and signed off by the RM as checker and by the BSOM/BM as verifier. All these verifications print out shall be attached with the AOF.



                                            </p>
                                        </div>
                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">SLS checks will perform by RM`s "authorized person" with name of customer / company / director / partner / mandate holder / signatory as per ID/document name and with ID card number.



                                            </p>
                                        </div>
                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block  d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">Customer name SLS checks will perform with both options of search “exact match and phonetic match”.



                                            </p>
                                        </div>
                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">SLS phonetic check performed, and detail verified confirmation given on exact match printout page with separate signatures.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0"> Customer ID SLS check performed with exact match.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0"> Relationship Manager shall proceed for the account opening in the system.
                                            </p>
                                        </div>


                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">Relationship Manager, while interviewing the customer about the relevant details, shall input all the information in the system on real time basis. All the account opening fields, profile data and KYC related information shall be entered in the system.
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">Mobile number is Mandatory for Individual / Sole Proprietorship Account/s
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">Relationship Manager while opening account shall also input customer’s cheque book and VDC request on the system.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">Relationship Manager, while interviewing the customer about the relevant details, shall input all the information in the system on real time basis. All the account opening fields, profile data and KYC related information shall be entered in the system.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">Relationship Manager after inputting all the fields and before submitting the application shall request the customer to view and validate the entire input done on the system screen. In case any error is identified, same will then be amended by the RM. RM shall mark check on the items obtained from the customer on the account opening checklist in the system.
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">After customer’s validation, RM shall submit the account application in the system and take the printouts of the system generated Account Opening Form.
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">RM shall then present the system generated AOF and Terms and Conditions booklet along with customer awareness form (Urdu/English) to the customer for sign off. The RM shall then stamp and sign off AOF documents and checklist as an in-putter.
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">BSOM or BM shall review and authorize the information input in the system. System would then automatically generate the customer’s CP number and Account number. After further ensuring that the required documents are complete, the BM/BSOM will stamp and sign off the AOF.
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0"> After authorization, SMS confirmation shall be served to the customer meanwhile an intimation email to BSOM/BM/RM/CRO confirming the opening of account shall also be served.
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0"> BSOM shall write the account number on system generated AOF, checklist and SS cards.
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0"> RM, after completion of account opening process, shall process the ADC services (Internet Banking) as requested by the customer.
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">New account opened by the RM shall remain under ‘PND’ status (Post No Debit) until the complete scrutiny is performed by the ASD.
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0"> The account opening range reports shall be generated through Instant account opening portal, verified and signed off by the processor and authorizer and the same will be attached with AOF & related Documents for future reference and audit purpose.
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">CSO shall upload the SS Card on T24. This activity shall be authorized by CSM, BSOM or BM.
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">For “Initial Deposit” requirement a deposit slip with account number and amount be given over to the customer for depositing the cash at the cash counter.
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0"> After proper checking and input the CSO shall get the transaction authorized and shall deliver receipt to customer.
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">Branch authorized officer shall scan the AOF, SS Cards and related documents and send to ASD (COD) for post account opening scrutiny on the same day of account opening.
                                            </p>
                                        </div>

                                        
                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">Branch shall retain the original customer signed AOF along with all related documents, one SS Card in duly locked fireproof cabinet under dual control. Branch will separately retain one SS Card at the Cash counter in SS card trolley.
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">Branch should upload Acknowledgement list of all accounts on Rosetta which were handed over to First Solution (FS).
                                            </p>
                                        </div>
                                        
                                        
                                        
                                    </div> -->
                                    

                                    <ul class="list-group TabPara">
                                        <li class="list-item">Customer visits the branch for a new relationship [Account Opening] with all required documents.</li>
                                        <li class="list-item">CRO/CRM shall ascertain the customers’ account opening requirements and guide him/her to the Relationship Manager (RM).</li>
                                        <li class="list-item">The Relationship Manager shall explain to the customer of the AOF requirements and Terms and Conditions under which the account shall be operated (minimum balance requirement & product features) and simultaneously perform the scrutiny of the provided documents for completeness.</li>
                                        <li class="list-item">The Relationship Manager shall further assess customer’s identity by requesting for original CNIC/SNIC and will make photocopy, duly mark notation ‘Original Seen’ on the customer’s CNIC/SNIC copy with signatures.</li>
                                        <li class="list-item">Subsequently RM shall perform online Bio Metric (Refer for details at 2.5.20, P. g. No. 27 of the manual) / NADRA verification and SLS checks of the customer’s identity are also a mandatory requirement. The print outs of NADRA verification and SLS checks (for exact/ phonetic match) will be obtained and signed off by the RM as checker and by the BSOM/BM as verifier. All these verifications print out shall be attached with the AOF.</li>
                                        <li class="list-item">SLS checks will perform by RM`s "authorized person" with name of customer / company / director / partner / mandate holder / signatory as per ID/document name and with ID card number.</li>
                                        <li class="list-item">Customer name SLS checks will perform with both options of search “exact match and phonetic match”.</li>
                                        <li class="list-item">SLS phonetic check performed, and detail verified confirmation given on exact match printout page with separate signatures. </li>
                                        <li class="list-item"> Customer ID SLS check performed with exact match.</li>
                                        <li class="list-item">Relationship Manager shall proceed for the account opening in the system.</li>
                                        <li class="list-item">Relationship Manager, while interviewing the customer about the relevant details, shall input all the information in the system on real time basis. All the account opening fields, profile data and KYC related information shall be entered in the system.</li>
                                        <li class="list-item">Mobile number is Mandatory for Individual / Sole Proprietorship Account/s</li>
                                        <li class="list-item">Relationship Manager while opening account shall also input customer’s cheque book and VDC request on the system.</li>
                                        <li class="list-item">Relationship Manager after inputting all the fields and before submitting the application shall request the customer to view and validate the entire input done on the system screen. In case any error is identified, same will then be amended by the RM. RM shall mark check on the items obtained from the customer on the account opening checklist in the system.</li>
                                        <li class="list-item">After customer’s validation, RM shall submit the account application in the system and take the printouts of the system generated Account Opening Form.</li>
                                        <li class="list-item"> RM shall then present the system generated AOF and Terms and Conditions booklet along with customer awareness form (Urdu/English) to the customer for sign off. The RM shall then stamp and sign off AOF documents and checklist as an in-putter.</li>
                                        <li class="list-item">BSOM or BM shall review and authorize the information input in the system. System would then automatically generate the customer’s CP number and Account number. After further ensuring that the required documents are complete, the BM/BSOM will stamp and sign off the AOF.</li>
                                        <li class="list-item">After authorization, SMS confirmation shall be served to the customer meanwhile an intimation email to BSOM/BM/RM/CRO confirming the opening of account shall also be served.</li>
                                        <li class="list-item">BSOM shall write the account number on system generated AOF, checklist and SS cards.</li>
                                        <li class="list-item">RM, after completion of account opening process, shall process the ADC services (Internet Banking) as requested by the customer.</li>
                                        <li class="list-item">New account opened by the RM shall remain under ‘PND’ status (Post No Debit) until the complete scrutiny is performed by the ASD.</li>
                                       
                                        <li class="list-item">The account opening range reports shall be generated through Instant account opening portal, verified and signed off by the processor and authorizer and the same will be attached with AOF & related Documents for future reference and audit purpose.</li>
                                        <li class="list-item">CSO shall upload the SS Card on T24. This activity shall be authorized by CSM, BSOM or BM.</li>
                                        <li class="list-item">For “Initial Deposit” requirement a deposit slip with account number and amount be given over to the customer for depositing the cash at the cash counter.</li>
                                        <li class="list-item">After proper checking and input the CSO shall get the transaction authorized and shall deliver receipt to customer.</li>
                                        <li class="list-item">Branch authorized officer shall scan the AOF, SS Cards and related documents and send to ASD (COD) for post account opening scrutiny on the same day of account opening.</li>
                                        <li class="list-item">Branch should upload Acknowledgement list of all accounts on Rosetta which were handed over to First Solution (FS).</li>
                                       


                                    </ul>
                                    <div class="tabMiddleHeading mt-4">
                                        <p>What are the documents will be required:</p>
                                    </div>

                                    <div class="tabMiddleHeading ">
                                        <p>-Documents (individual):</p>
                                    </div>
                                    <ul class="list-group TabPara">
                                        <li class="list-item">CNIC Copy</li>
                                        <li class="list-item">Job ID Card or Appointment Letter or Salary Slip or a Letter from the Employer.</li>

                                    </ul>

                                    <!-- <div class="bullets TabPara">
                                        <div class="d-flex align-items-start mb-3 bullet-button ">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none " alt="">
                                            <p class="ml-3 m-0">CNIC Copy</p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">Job ID Card or Appointment Letter or Salary Slip or a Letter from the Employer.
                                            </p>
                                        </div>











                                    </div> -->

                                    <div class="tabMiddleHeading mt-4">
                                        <p>-Documents (company):</p>
                                    </div>
                                    <ul class="list-group TabPara">
                                        <li class="list-item">CNIC Copy</li>
                                        <li class="list-item">Sole Proprietorship Stamp</li>
                                        <li class="list-item">A/c opening request along with Sole Proprietorship Declaration on firm`s letterhead</li>
                                        <li class="list-item">NTN Certificate or Bank`s reference certificate (at least 6 months old relationship).</li>



                                    </ul>

                                    <!-- <div class="bullets TabPara">
                                        <div class="d-flex align-items-start mb-3 bullet-button ">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none " alt="">
                                            <p class="ml-3 m-0">CNIC Copy</p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0"> Sole Proprietorship Stamp
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">A/c opening request along with Sole Proprietorship Declaration on firm`s letterhead
                                            </p>
                                        </div>

                                        <div class="d-flex align-items-start mb-3 bullet-button">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none" alt="">
                                            <p class="ml-3 m-0">NTN Certificate or Bank`s reference certificate (at least 6 months old relationship).
                                            </p>
                                        </div>












                                    </div> -->

                                    <div class="tabMiddleHeading mt-4">
                                        <p>What shall be the TAT of opening an account with Silkbank.</p>
                                    </div>
                                    <ul class="list-group TabPara mb-4">
                                        <li class="list-item">Instant at the time of visiting the branch and 03 working days for normal account, both are correct. (Provided all required documents are in place)</li>
                                        



                                    </ul>

                                    <!-- <div class="bullets TabPara">
                                        <div class="d-flex align-items-start mb-3 bullet-button ">
                                            <img src="assets/images/favicon.png" class="d-none d-lg-block d-md-block d-sm-none " alt="">
                                            <p class="ml-3 m-0"> Instant at the time of visiting the branch and 03 working days for normal account, both are correct. (Provided all required documents are in place)</p>
                                        </div>


















                                    </div> -->





                                </div>
                            </div>

                        </div>
                        <div class=" card tab-pane fade" id="accountoprningprocessfordigitalonboarding" role="tabpanel" aria-labelledby="tab-transfer">
                            <div class="card-header" role="tab" id="heading-B">
                                <h5 class="mb-0" onclick="toggle('#2');">

                                    <a data-toggle="collapse" href="#collapse-B" aria-expanded="true" aria-controls="collapse-B">
                                        Account Opening Process for Digital Onboarding
                                        <i id="2" class="tabIcon d-block fa fa-chevron-down float-right" style="color:#808080"></i>
                                    </a>

                                </h5>
                            </div>
                            <div id="collapse-B" class="collapse" data-parent="#content-container5" role="tabpanel" aria-labelledby="heading-B">

                                <div class="Tabsilkfaureetransfer card-body">
                                    <!-- <img class="my-lg-4 my-0" src="assets/images/PLS-Savings-banner.jpg" alt="image" width="100%"> -->
                                    <div class="TabHeading mb-2 mt-5">Account Opening Process for Digital Onboarding</div>
                                    <!-- <div class="TabPara">
                                        <p>Remitting funds to your loved ones in an instant was never this easy. Silk Fauree Transfer is a remittance service, which enables you to receive your funds instantly and that too absolutely free from anywhere outside Pakistan. Send money through any of our Authorized Correspondent Banks, Money Transfer Companies or Exchange Companies from around the world.</p>

                                    </div> -->
                                    <div class="tabMiddleHeading">
                                        <p>Coming Soon</p>
                                    </div>
                                    <!-- <div class="TabPara">
                                        <p>Receive cash up to Rs. 500,000 for instant collection from any of our 85 Silkbank branches spread across 32 cities in Pakistan.</p>

                                    </div> -->
                                    <!-- <div class="tabMiddleHeading">
                                        <p>Requirements:</p>
                                    </div> -->
                                    <!-- <div class="tabmiddlepara">
                                        <p>Remittance ID Number and original CNIC of the beneficiary</p>
                                        <p>Valid mobile number of the beneficiary for SMS Alerts</p>

                                    </div> -->
                                    <!-- <div class="tabMiddleHeading">
                                        <p>Fauree Credit</p>
                                    </div> -->
                                    <!-- <div class="TabPara">
                                        <p>Funds can also be directly credited to your existing Silkbank account. You can access funds using your cheque book or your Silkbank Visa Debit Card at over 1.6 million ATMs worldwide and over 4,500 ATMs nationwide.</p>

                                    </div> -->
                                    <!-- <div class="tabMiddleHeading">
                                        <p>Requirements:</p>
                                    </div> -->
                                    <!-- <div class="tabmiddlepara">
                                        <p>Silkbank branch code & complete (10 digits) Account Number</p>


                                    </div> -->
                                    <!-- <div class="tabMiddleHeading">
                                        <p>For more details, please call us at:</p>
                                    </div> -->
                                    <!-- <div class="lastpara">
                                        <p>From outside Pakistan: +92-21-35205565</p>
                                        <p>From within Pakistan: 021-111-100-777</p>
                                        <p>You can also email us at info@silkbank.com.pk for further details.</p>


                                    </div> -->
                                    <!-- <div class="tabMiddleHeading">
                                        <p>Fauree Transfer</p>
                                    </div> -->
                                    <!-- <div class="TabPara">
                                        <p>Even if you are not a Silkbank Account Holder, your funds can be credited to your account maintained with any other bank in Pakistan through IBFT or RTGS module on the same day.</p>

                                    </div> -->
                                    <!-- <div class="tabMiddleHeading">
                                        <p>Requirements:</p>
                                    </div> -->
                                    <!-- <div class="tabmiddlepara">
                                        <p>Complete Bank account number with Branch Code</p>
                                        <p>Beneficiary’s bank and branch name in Pakistan</p>

                                    </div> -->
                                    <!-- <div class="tabMiddleHeading">
                                        <p>Features:</p>
                                    </div> -->
                                    <!-- <div class="tabmiddlepara">
                                        <p>No remittance fee for the sender or the beneficiary</p>
                                        <p>Fast, reliable and hassle free funds transfer anywhere in Pakistan</p>
                                        <p>Same day credit to your account</p>
                                        <p>Instant cash over the counter payment
                                        </p>
                                        <p>Free SMS Alerts for the beneficiary
                                        </p>


                                    </div> -->
                                    <!-- <div class="tabMiddleHeading">
                                        <p>OUR ALLIANCES:</p>
                                    </div> -->
                                    <!-- <div class="tabmiddlepara mb-5">
                                        <p>1. Al-Ghurair Exchange – UAE</p>
                                        <p>2. Hafiz Bros – UK</p>
                                        <p>3. Western Union - Worldwide</p>
                                        <p>4. Sigue Money Transfer – Worldwide
                                        </p>
                                        <p>5. DEX Internatinal – UK </p>
                                        <p>6. MT Global - UK</p>
                                        <p>7. Intercity Money Changers – UK</p>
                                        <p>8. Hello Paisa – South Africa</p>
                                        <p>9. Platinum Exchange - Canada
                                        </p>
                                        <p>10. Arab link Money Transfer - UAE</p>


                                    </div> -->



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