<!DOCTYPE html>
<html>
<head>
	<title>Matrix</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!--   <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" />    
    <link href="css/flight_result.css" rel="stylesheet" type="text/css" />    
    <link href="css/booking.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">    
    <link href="css/b2c_dashboard.css" rel="stylesheet">
  </head>
<body>

<?php include('header.php') ?>

<div class="clearfix"></div>


<div class="fldealsec padtobtm">
   <div class="container">
      <div class="clearfix"></div>
      <div class="col-xs-12 nopad tabdash">
         <div class="col-sm-2 col-xs-12 nopad">
            <ul class="nav nav-tabs profile">
               <li class="active"><a data-toggle="tab" href="#profile"><span class="fa fa-user"></span><br class="noprofm"><span class="noprofm">PROFILE</span></a></li>
 
               <li class=""><a data-toggle="tab" href="#booking"><span class="fa fa-suitcase"></span><br class="noprofm"><span class="noprofm">BOOKINGS</span></a></li>
            </ul>
         </div>
         <div class="col-sm-10 col-xs-12 bgwite">
            <div class="tab-content">
               <div id="profile" class="tab-pane fade active in">
                  <div class="name col-xs-12 nopad">Hi, Mr Swadesh Ranjan Dash</div>
                  <div class="clearfix"></div>
                  <div class="col-lg-8 col-md-12 col-xs-12 nopad">
                     <h3 class="myprof arimo">My Profile</h3>
                     <div class="col-sm-3 col-xs-12 nopad">
                        <div class="profileimg"><img src="http://192.168.0.145/utravel_v1/assets/images/support.jpg" alt=""></div>
                     </div>
                     <div class="col-sm-9 col-xs-12 padtab sixfive">
                        <div class="allinone">
                           <div class="profdet" id="prof_dtls">
                              <ul>
                                 <li class="usernamepro arimo">Mr Swadesh Ranjan Dash</li>
                                 <li><span class="fa fa-envelope"></span>swadesh.provab@gmail.com</li>
                                 <li><span class="fa fa-phone"></span>91-8908713340</li>
                                 <li><span class="fa fa-map-marker"></span>Bangalore,Karnataka India-560037</li>
                              </ul>
                              <a class="fa faedit  fa-pencil" id="prof_edit"></a>
                           </div>
                           <div class="profdet" id="edit_prof" style="display:none;">
                              <form id="profile" name="profile" method="post" action="#">
                                 <div id="loginLdrReg" class="lodrefrentrev imgLoader">
                                    <div class="centerload"></div>
                                 </div>
                                 <div class="popuperror" style="display:none;"></div>
                                 <ul>
                                    <li>
                                       <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                          <div class="col-xs-12 sixnopad sixfive">
                                             <div class="labledit">Full Name</div>
                                             <div class="col-xs-3 noleftpad">
                                                <select name="salution" id="salution" class="select">
                                                   <option value="Miss">Miss</option>
                                                   <option value="Mrs">Mrs</option>
                                                   <option value="Mr" selected="">Mr</option>
                                                </select>
                                             </div>
                                             <div class="col-xs-3 nopad">                               
                                                <input class="passno" placeholder="Type First Name" type="text" name="fname" id="fname" value="Swadesh" minlength="4" required="">
                                             </div>
                                             <div class="col-xs-3 padrgtnone1">
                                                <input class="passno" placeholder="Type Middle Name" type="text" name="mname" id="mname" value="Ranjan" required="">
                                             </div>
                                             <div class="col-xs-3 padrgtnone1">
                                                <input class="passno" placeholder="Type Last Name" type="text" name="lname" id="lname" value="Dash" required="">
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                          <div class="col-xs-12 sixnopad sixfive">
                                             <div class="labledit">Phone Number</div>
                                             <div class="col-xs-3 noleftpad">
                                                <input class="passno" placeholder="Type Country Code" type="text" name="country_code" id="country_code" value="91" minlength="2" required="">
                                             </div>
                                             <div class="col-xs-1 nopad"> - </div>
                                             <div class="col-xs-7 padrgtnone1">
                                                <input class="passno" placeholder="Type Phone Number" type="text" name="phone" id="phone" value="91-8908713340" minlength="10" required="">
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                          <div class="col-xs-4 nopad sixfive">
                                             <input class="passno" placeholder="Type Email" type="hidden" name="email" id="email" value="swadesh.provab@gmail.com" minlength="5" maxlength="50">
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                          <div class="col-xs-6 sixnopad sixfive">
                                             <div class="labledit">City</div>
                                             <input class="passno" placeholder="Type City Name" type="text" name="city" id="city" value="Bangalore" required="">
                                          </div>
                                          <div class="col-xs-5 sixnopad sixfive">
                                             <div class="labledit">State</div>
                                             <input class="passno" placeholder="Type State Name" type="text" name="state" id="state" value="Karnataka">
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                          <div class="col-xs-6 sixnopad sixfive">
                                             <div class="labledit">Country</div>
                                             <select class="select" id="country" name="country">
                                                <option value="240">Afghanistan</option>
                                                <option value="241">Albania</option>                                                
                                             </select>
                                          </div>
                                          <div class="col-xs-5 sixnopad sixfive">
                                             <div class="labledit">Pin Code</div>
                                             <input class="passno" placeholder="Type Zip Code" type="text" name="zipcode" id="zipcode" value="560037" required="">
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col-xs-6 spllty">
                                          <button class="savebtn">SAVE</button>
                                       </div>
                                       <div class="col-xs-6 spllty">
                                          <a class="cancelbtnde" id="save_prof">CANCEL</a>
                                       </div>
                                    </li>
                                 </ul>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-xs-12 nopad">
                     <div class="infltnhtl">
                        <h3 class="myprof">Travel Prefernces</h3>
                        <div class="alltwobx">
                           <div class="col-xs-6 nopadding">
                              <div class="travelpref trcol1">
                                 <span class="spec fa fa-plane"></span>
                                 <div class="clearfix"></div>
                                 <span class="flightdet">Flight</span>
                              </div>
                           </div>
                           <div class="col-xs-6 nopadding">
                              <div class="travelpref trcol1">
                                 <span class="spec fa fa-hotel"></span>
                                 <div class="clearfix"></div>
                                 <span class="flightdet">Hotel</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-xs-12 nopad">
                     <ul class="nav nav-tabs proftab">
                        <li class="active sixfive"><a data-toggle="tab" href="#passport">Passport Information</a></li>
                        <li class="sixfive"><a data-toggle="tab" href="#visa">Visa Information</a></li>
                        <li class="sixfive"><a data-toggle="tab" href="#membership">Frequent Flyer Membeship</a></li>
                        <li class="sixfive"><a data-toggle="tab" href="#creditcard">Credit Card Information</a></li>
                     </ul>
                     <div class="tab-content">
                        <div id="passport" class="tab-pane fade in active">
                           <div id="passport_div">
                              <div class="col-xs-12 nopad totmar">
                                 <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                    <div class="col-xs-4 nopad sixfive">
                                       <div class="issucoun">Name : </div>
                                    </div>
                                    <div class="col-xs-4 nopad sixfive">
                                       <div class="issucoun">Mr Swadesh Ranjan Dash</div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                    <div class="col-xs-4 nopad sixfive">
                                       <div class="issucoun">Nationality : </div>
                                    </div>
                                    <div class="col-xs-4 nopad sixfive">
                                       <div class="issucoun">India</div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                    <div class="col-xs-4 nopad sixfive">
                                       <div class="issucoun">Expiry Date  : </div>
                                    </div>
                                    <div class="col-xs-4 nopad sixfive">
                                       <div class="issucoun">09-08-2020</div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                    <div class="col-xs-4 nopad sixfive">
                                       <div class="issucoun">Passport Number : </div>
                                    </div>
                                    <div class="col-xs-4 nopad sixfive">
                                       <div class="issucoun">BSDP45669</div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                    <div class="col-xs-4 nopad sixfive">
                                       <div class="issucoun">Issued Country :</div>
                                    </div>
                                    <div class="col-xs-4 nopad sixfive">
                                       <div class="col-xs-4 noleftpad">
                                          <div class="issucoun">
                                             India                          
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                    <div class="col-xs-4 noleftpad sixfive">
                                       <button id="passport_edit" class="savebtn">Edit</button>
                                    </div>
                                    <div class="col-xs-4 noleftpad">
                                       &nbsp;
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div id="passport_edit_div" class="tab-pane fade in active" style="display:none;">
                              <form id="passport_form" name="passport_form" method="post" action="http://192.168.0.145/utravel_v1/profile/passport_save">
                                 <div id="loginLdrReg_passport" class="lodrefrentrev imgLoader">
                                    <div class="centerload"></div>
                                 </div>
                                 <div class="popuperror" style="display:none;"></div>
                                 <div class="col-xs-12 nopad totmar">
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Issuing Country :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <select class="select" id="passport_country" name="passport_country" required="">
                                             <option value="240">Afghanistan</option>
                                             
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Passport Nationality :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <select class="select" id="passport_nation" name="passport_nation" required="">
                                             <option value="240">Afghanistan</option>
                                             
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Passport Number :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <input type="text" class="passno" value="BSDP45669" id="passport_no" name="passport_no" required="" placeholder="Type Number">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Date Of Expiry :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <input type="text" class="passno hasDatepicker" readonly="" placeholder="Select Date" id="passport_exp_date" name="passport_exp_date" value="09-08-2020" onclick="this.select();" required="">
                                          <div class="col-xs-4 noleftpad">
                                             <button id="save_passport" class="savebtn">SAVE</button>
                                          </div>
                                          <div class="col-xs-4 noleftpad">
                                             &nbsp;
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                        <div id="visa" class="tab-pane fade in">
                           <div id="visa_div">
                              <div class="col-xs-12 nopad totmar">
                                 <div class="col-xs-12 nopad totmar">
                                    Data Not Found...!!!
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                    <div class="col-xs-4 noleftpad sixfive">
                                       &nbsp;
                                    </div>
                                    <div class="col-xs-4 noleftpad">
                                       <button id="visa_edit" class="savebtn">Edit</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div id="visa_edit_div" class="tab-pane fade in active" style="display:none;">
                              <form id="visa_form" name="visa_form" method="post" action="http://192.168.0.145/utravel_v1/profile/visa_save">
                                 <div id="loginLdrReg_visa" class="lodrefrentrev imgLoader">
                                    <div class="centerload"></div>
                                 </div>
                                 <div class="popuperror" style="display:none;"></div>
                                 <div class="col-xs-12 nopad totmar">
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Issuing Country :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <select class="select" id="visa_country" name="visa_country" required="">
                                             <option value="240">Afghanistan</option>
                                             
                                          </select>
                                       </div>
                                    </div>
                                    <!--<div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                        <div class="issucoun">Visa Nationality :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                        <select class="select" id="visa_nation" name="visa_nation" required>
                                                                            <option value=""></option>
                                                                      </select>
                                       </div>
                                       </div>-->
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Visa Number :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <input type="text" class="passno" value="" id="visa_no" name="visa_no" required="" placeholder="Type Visa Number">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Date Of Expiry :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <input type="text" class="passno hasDatepicker" readonly="" placeholder="Select Date" id="visa_exp_date" name="visa_exp_date" value="" onclick="this.select();" required="">
                                          <div class="col-xs-4 noleftpad">
                                             &nbsp;
                                          </div>
                                          <div class="col-xs-4 noleftpad">
                                             <button id="save_visa" class="savebtn">SAVE</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                        <div id="creditcard" class="tab-pane fade in">
                           <div id="creditcard_div">
                              <div class="col-xs-12 nopad totmar">
                                 <div class="col-xs-12 nopad totmar">
                                    Data Not Found...!!!
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                    <div class="col-xs-4 noleftpad">
                                       &nbsp;
                                    </div>
                                    <div class="col-xs-4 noleftpad sixfive">
                                       <button id="creditcard_edit" class="savebtn">ADD</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div id="creditcard_edit_div" class="tab-pane fade in active" style="display:none;">
                              <form id="creditcard_form" name="creditcard_form" method="post" action="http://192.168.0.145/utravel_v1/profile/creditcard_save">
                                 <div id="loginLdrReg_membership" class="lodrefrentrev imgLoader">
                                    <div class="centerload"></div>
                                 </div>
                                 <div class="popuperror" style="display:none;"></div>
                                 <div class="col-xs-12 nopad totmar">
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Card Type :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <select class="select" id="cardtype" name="cardtype" required="">
                                             <option value="VI">Visa</option>
                                             <option value="MC">Mastercard</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Card Number :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <input type="text" class="passno" name="credit_card_no" id="credit_card_no" value="" required="" placeholder="Type Card Number">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Card Secirity Code :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <input type="password" class="passno" name="security_card_no" id="security_card_no" value="" required="" placeholder="Type Security Code">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Expiry Date :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <input type="text" class="passno hasDatepicker" name="credit_exp_date" id="credit_exp_date" value="" onclick="this.select();" required="" placeholder="Type Expriry Date">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Nationality :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <select class="select" id="creditcard_nationality" name="creditcard_nationality" required="">
                                             <option value="240">Afghanistan</option>
                                             
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">City :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <input type="text" class="passno" name="city" id="city" value="" required="" placeholder="Type City Name">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">State :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <input type="text" class="passno" name="state" id="state" value="" required="" placeholder="Type State Name">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Postal Code/Zip Code :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <input type="text" class="passno" name="pin_code" id="pin_code" value="" required="" placeholder="Type Postal Code">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad six  pull-right sixfive">
                                          <div class="col-xs-4 six sixnopad pull-right">
                                             <button id="save_creditcard" class="savebtn">SAVE</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                        <div id="membership" class="tab-pane fade in">
                           <div id="membership_div">
                              <div class="col-xs-12 nopad totmar">
                                 <div class="col-xs-12 nopad totmar">
                                    Data Not Found...!!!
                                 </div>
                                 <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                    <div class="col-xs-4 noleftpad">
                                       &nbsp;
                                    </div>
                                    <div class="col-xs-4 noleftpad sixfive">
                                       <button id="membership_edit" class="savebtn">Edit</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div id="membership_edit_div" class="tab-pane fade in active" style="display:none;">
                              <form id="membership_form" name="membership_form" method="post" action="#">
                                 <div id="loginLdrReg_membership" class="lodrefrentrev imgLoader">
                                    <div class="centerload"></div>
                                 </div>
                                 <div class="popuperror" style="display:none;"></div>
                                 <div class="col-xs-12 nopad totmar">
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Airline :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <select class="select" id="airline" name="airline" required="">
                                             <option value="1">Adria Airways</option>
                                             <option value="2">Aer Arann Express</option>
                                            
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad sixfive">
                                          <div class="issucoun">Flyer Number :</div>
                                       </div>
                                       <div class="col-xs-4 nopad sixfive">
                                          <input type="text" class="passno" name="airline_no" id="airline_no" value="" required="" placeholder="Type Number">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-xs-12 nopad mrgbtm">
                                       <div class="col-xs-4 nopad six  pull-right sixfive">
                                          <div class="col-xs-4 six sixnopad pull-right">
                                             <button id="save_membership" class="savebtn">SAVE</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            
               <div id="booking" class="tab-pane fade">
                  <div class="col-xs-12 nopad">
                     <h3 class="myprof">My Bookings</h3>
                     <div class="col-xs-12 nopad totmar">
                        <div class="profdet">
                          <table class="table table-striped table-bordered dataTable" id="myTable">
                            <thead>
                             <tr class="datatblehed">
                                <th class="sorting_asc">S No</th>
                                <th class="sorting">PNR No</th>
                                <th class="sorting">Booking Id</th>
                                <th class="sorting">Lead Pax</th>
                                <th class="sorting">Type</th>
                                <th class="sorting">Total Amount</th>
                                <th class="sorting">Voucher Date</th>
                                <th class="sorting">Status</th>
                                <th class="sorting">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="odd">
                          <td class="sorting_1">1</td>
                          <td class=" "></td>
                          <td class=" ">UT171004152832</td>
                          <td class=" ">Swadesh Ranjan Dash</td>
                          <td class=" ">Hotel </td>
                          <td class=" ">USD 70.03</td>
                          <td class=" ">2017-10-04 15:28:32</td>
                          <td class=" ">PROCESS</td>
                          <td class=" ">
                          <a href="#" class="btn btn-primary btn-xs has-tooltip" data-placement="top" title="View Voucher" target="_blank">
                            <span class="glyphicon glyphicon-eye-open"></span>
                          </a>
                                                      
                            <a id="btnclick0" class="btnclick btn btn-primary btn-xs has-tooltip" title="Mail Voucher"><span class="glyphicon glyphicon-envelope"></span> </a>   
                                
                          </td>
                        </tr>
                            </tbody>
                          </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="clearfix"></div>

<?php include('footer.php') ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery_ui.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script type="text/javascript">
  $(document).ready(function(){
   $(window).scroll(function(){
    if($(document).scrollTop() > 0){
       //$("p").css({"background": "#ff0000", "color": "#fff" });
       $(".out_head").addClass("headfix");
    }
  else{
       // $("p").css({"background": "", "color": "" });
       $(".out_head").removeClass("headfix");
      }
    });
  });
   //profile show and hide
     $('#prof_edit').click(function(){
      $('#prof_dtls').css('display', 'none');
      $('#edit_prof').css('display', '');
    });
     $('#save_prof').click(function(){
            $('#prof_dtls').css('display', '');
            $('#edit_prof').css('display', 'none');
     });
     
     //passport edit in profile
     $('#passport_edit').click(function(){
       $('#passport_div').css('display', 'none');
      $('#passport_edit_div').css('display', '');
    });
    
      //visa edit in profile
     $('#visa_edit').click(function(){
       $('#visa_div').css('display', 'none');
      $('#visa_edit_div').css('display', '');
    });
    
      //membership edit in profile
     $('#membership_edit').click(function(){
       $('#membership_div').css('display', 'none');
      $('#membership_edit_div').css('display', '');
    });
    
    //CreditCard info edit in profile
     $('#creditcard_edit').click(function(){
       $('#creditcard_div').css('display', 'none');
      $('#creditcard_edit_div').css('display', '');
    });

</script>

</body>
</html>