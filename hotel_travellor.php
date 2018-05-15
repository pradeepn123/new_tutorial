<!DOCTYPE html>
<html>
   <head>
      <title>Matrix</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
      <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/jquery-ui.css">
      <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
      <link href="css/style.css" rel="stylesheet" type="text/css" />
      <link href="css/flight_result.css" rel="stylesheet" type="text/css" />
      <link href="css/booking.css" rel="stylesheet" type="text/css" />
      <link href="css/owl.carousel.css" rel="stylesheet">
   </head>
   <body>
      <?php include("header.php") ?>
      <div class="clearfix"></div>
      <!-- results start here -->
      <div class="flight_results">
         <div class="newmodify">
            <div class="container">
               <div class="col-md-12 no-pad">
                  <div class="payment_process">
                     <div class="col-md-4 col-sm-4 col-xs-4 no-pad">
                        <div class="center_pro">
                           <div class="fabols"><i class="fa fa-th"></i></div>
                           <div class="center_labl">Review</div>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4 no-pad">
                        <div class="center_pro active">
                           <div class="fabols"><i class="fa fa-briefcase"></i></div>
                           <div class="center_labl">Travellers</div>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4 no-pad">
                        <div class="center_pro">
                           <div class="fabols"><i class="fa fa-usd"></i></div>
                           <div class="center_labl">Payment</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="mn_back">
            <div class="container">
               <div class="col-md-12">
                  <div class="prebooking">
                     <div class="col-md-8">
                        <div class="row mrntvlr10">
                           <div class="flight-list-main">
                              <div class="col-md-3 col-sm-3 text-center airline_name">
                                 <h6>Airlink Airlines</h6>
                                 <img src="images/SG.gif" alt="">
                              </div>
                              <div class="col-md-9 col-sm-9 nopad">
                                 <div class="col-md-4 col-sm-4 col-xs-4 departure">
                                    <h3><strong>22 Apr,</strong> 10:55</h3>
                                    <h6>Indira Gandhi Intl</h6>
                                 </div>
                                 <div class="col-md-1 col-sm-1 col-xs-1 stop-duration">
                                    <i class="fa fa-arrow-right"></i>
                                 </div>
                                 <div class="col-md-4 col-sm-4 col-xs-4 destination">
                                    <h3><strong>22 Apr,</strong> 13:30</h3>
                                    <h6>Goa</h6>
                                 </div>
                                 <div class="col-md-3 col-sm-3 col-xs-3 destination">
                                    <h3><strong>2h</strong>35m</h3>
                                    <h6>Stop : 0</h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 text-right">
                        <div class="int_mn">
                           <h4>Travellers : <i class="fa fa-male"></i> 1 | <i class="fa fa-child"></i> 0 | <img src="images/inft.png" alt=""> 0</h4>
                           <h3>Total Amount Rs 5280.86</h3>
                           <h3><a href="#"> Flight Details </a></h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="tab-content">
                     <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="col-md-12 col-sm-12 nopad">
                           <div class="prebooking">
                              <div class="login-box prebooking1">
                                 <div class="prebok_hding pd54">Please Enter Names as on Passport</div>
                                 <div class="rw_rj">
                                   <div class="col-md-12">
                                          <h3>1. Bangalore (BLR) -&gt; Dubai (DXB)</h3>
                                       </div>
                                    <div class="col-md-1 nopad">
                                       <span class="review_adlt " data-toggle="collapse" data-target="#demo">
                                       <i class="fa fa-male"></i>
                                       </span>
                                    </div>
                                    <div class="col-md-11 nopad" id="demo">
                                       
                                       <div class="col-md-3 col-sm-12 col-xs-12 rspmrn8">
                                          <div class="selectedwrap">
                                             <select class="flpayinput" name="">
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-sm-12 col-xs-12 rspmrn8">
                                          <input placeholder="First Name" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                       <div class="col-md-3 col-sm-12 col-xs-12 rspmrn8">
                                          <input placeholder="First Name" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                       <div class="col-md-3 col-sm-12 col-xs-12 rspmrn8">
                                          <input placeholder="First Name" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 rspmrn8 mtp8">
                                          <input placeholder="Adult Date of Birth" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 rspmrn8 mtp8">
                                          <input placeholder="Passport Number" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 rspmrn8 mtp8">
                                          <input placeholder="Passport Expire Date" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 rspmrn8 mtp8">
                                          <div class="selectedwrap">
                                             <select class="flpayinput" name="">
                                                <option value="Mr">Select Passport Issued Country</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 rspmrn8 mtp8">
                                          <div class="selectedwrap">
                                             <select class="flpayinput" name="">
                                                <option value="Mr">Frequent Flyer Number</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 rspmrn8 mtp8">
                                          <input placeholder="Passport Expire Date" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                    </div>
                                 </div>
                                 <!--child-->
                                 <div class="rw_rj">
                                    <div class="col-md-1 nopad">
                                       <span class="review_adlt" data-toggle="collapse" data-target="#demo1">
                                       <i class="fa fa-child"></i>
                                       </span>
                                    </div>
                                    <div class="col-md-11 nopad" id="demo1">
                                      
                                       <div class="col-md-3 col-sm-12 col-xs-12 rspmrn8">
                                          <div class="selectedwrap">
                                             <select class="flpayinput" name="">
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-sm-12 col-xs-12 rspmrn8">
                                          <input placeholder="First Name" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                       <div class="col-md-3 col-sm-12 col-xs-12 rspmrn8">
                                          <input placeholder="First Name" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                       <div class="col-md-3 col-sm-12 col-xs-12 rspmrn8">
                                          <input placeholder="First Name" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 rspmrn8 mtp8">
                                          <input placeholder="Adult Date of Birth" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 rspmrn8 mtp8">
                                          <input placeholder="Passport Number" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 rspmrn8 mtp8">
                                          <input placeholder="Passport Expire Date" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 rspmrn8 mtp8">
                                          <div class="selectedwrap">
                                             <select class="flpayinput" name="">
                                                <option value="Mr">Select Passport Issued Country</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 rspmrn8 mtp8">
                                          <div class="selectedwrap">
                                             <select class="flpayinput" name="">
                                                <option value="Mr">Frequent Flyer Number</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 rspmrn8 mtp8">
                                          <input placeholder="Passport Expire Date" name="" type="text" class="payinput" value="" required="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="prebooking">
                              <div class="prebok_hding pd54">Contact Details</div>
                              <div class="col-md-6">
                                 <div class="signing_detis">
                                    <form name="login" id="login_prebook" novalidate="">
                                       <div class="clearfix"></div>
                                       <div class="clearfix"></div>
                                       <div class="sign_twosec">
                                          <div id="i_have_account" class="section_sign" style="display: none;">
                                             <div class="col-md-12 no-pad">
                                                <div class="wrp_pre" style="padding:7px;">
                                                   <input type="password" placeholder="Password" id="pswd_p" name="password" class="form-control logpadding pre_put">
                                                   <a id="forgtpsw" class="fadeandscale_close fadeandscaleforget_open forgtpsw pre_forgot">Forgot password?</a> 
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="wrp_pre">
                                                   <input type="submit" value="Continue" name="continue" class="btn btn_book">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="clearfix"></div>
                                          <div id="con_as_guest" class="section_sign" style="display: block;">
                                             <div class="col-md-12 no-pad">
                                                <div class="wrp_pre"  style="padding:15px 7px 7px 7px;">
                                                   <div class="col-md-2 col-sm-2 col-xs-2 nopad">
                                                      <input type="text" placeholder="+91" class="pre_put form-control" required="" name="pn_country_code" aria-required="true">
                                                   </div>
                                                   <div class="col-md-1 col-sm-1 col-xs-1 nopad">
                                                      <div class="mob_hi">-</div>
                                                   </div>
                                                   <div class="col-md-9 col-sm-9 col-xs-9 nopad">
                                                      <input type="text" id="booking_user_mobile" placeholder="Mobile Number" required="" class="form-control pre_put" name="pn_mobil_no" maxlength="10" aria-required="true">
                                                   </div>
                                                   <div class="clearfix"></div>
                                                </div>
                                                <div class="col-md-12 nopad">
                                                   <div class="wrp_pre" style="padding:7px">
                                                      <input type="email" required="" placeholder="Email Address" name="email" class="form-control logpadding pre_put" aria-required="true">
                                                   </div>
                                                </div>
                                                <div class="col-md-12">
                                                   <div class="wrp_pre" style="padding:0px">
                                                      <div class="form-group">
                                                         <label for="sel1">Billing Country</label>
                                                            <div class="selectedwrap">
                                                         <select class="flpayinput sell" id="sel1">
                                                            <option>Select Country</option>
                                                            <option>Select Country</option>
                                                            <option>Select Country</option>
                                                            <option>Select Country</option>
                                                         </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="clearfix"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="wrp_pre">
                                    Your mobile number will be used only for sending flight  related communication
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="rdd">
                                 <input type="checkbox" value="None" name="check" id="alreadyacnt">
                                 <label for="alreadyacnt">Terms and Condition</label>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="wrp_pre">
                                 <input type="submit" value="Book as Guest" name="continue_c" class="btn btn_book">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 booking-sidebar">
                  <div class="sidebar-item">
                     <h4> Fare Summary</h4>
                     <div class="sidebar-body">
                        <div class="col-md-12 nopad">
                           <div class="adt">
                              <h4>Base Fare</h4>
                              <div class="col-md-6 text-left">1ADT (s) (1*4760.19)</div>
                              <div class="col-md-6 text-right">Rs 4760.19</div>
                           </div>
                        </div>
                        <div class="col-md-12 nopad">
                           <div class="adt">
                              <h4>Taxes</h4>
                              <div class="col-md-6 text-left">Tax & Fees</div>
                              <div class="col-md-6 text-right">Rs572.53</div>
                           </div>
                        </div>
                        <div class="col-md-12 nopad">
                           <div class="adt grnd_ttl">
                              <div class="col-md-6 text-left">GRAND TOTAL</div>
                              <div class="col-md-6 text-right">Rs 5,281.86</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sidebar-item contact-box">
                     <h4 class="pcd">Promo code</h4>
                     <div class="sidebar-body text-center">
                        <form novalidate="" id="promocode" name="promocode" action="">
                           <div class="col-md-8 col-xs-8 nopad">
                              <div class="cartprc">
                                 <div class="payblnhm singecartpricebuk ritaln">
                                    <input type="text" aria-required="true" class="promocode" id="code" name="code" placeholder="Enter Promo" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-xs-4 nopad">
                              <input type="submit" class="promosubmit" name="apply" value="Apply">
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- results end here -->
      <div class="clearfix"></div>
      <?php include("footer.php") ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="js/jquery_ui.js"></script>
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
   </body>
</html>