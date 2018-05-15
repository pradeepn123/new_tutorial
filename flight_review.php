<!DOCTYPE html>
<html>
<head>
	<title>Matrix</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!--   <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!--   <link rel="stylesheet" type="text/css" href="css/backslider.css">
<link rel="stylesheet" type="text/css" href="css/animation.css"> -->
<!--   <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/flight_results.css">
<link rel="stylesheet" type="text/css" href="css/booking.css"> -->
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

<?php include('header.php') ?>

<div class="clearfix"></div>

<!-- results start here -->
<div class="flight_results">
<div class="newmodify">
    <div class="container">
      <div class="col-md-12 no-pad">
        <div class="payment_process">
          <div class="col-md-4 col-sm-4 col-xs-4 no-pad">
            <div class="center_pro active">
              <div class="fabols"><i class="fa fa-th"></i></div>
              <div class="center_labl">Review</div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 no-pad">
            <div class="center_pro ">
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
              <div class="col-md-8">
                <div class="tab-content">
                  <div class="tab-pane active" role="tabpanel" id="step1">
                    <div class="col-md-12 col-sm-12 nopad">
                      <div class="prebooking">
                        <div class="prebok_hding pd54">Delhi To Goa(2h 35m)</div>
                        <div class="row mrntvlr10">
                        
                         <div class="flight-list-main">
                          <div class="col-md-3 col-sm-3 text-center airline_name"> 
                           <h5>Airlink Airlines</h5>
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
                      <div class="prebooking">
                        <div class="login-box prebooking1">
                        <div class="prebok_hding pd54">Sign in Now to Book Online</div>
                        <div class="col-md-6">
                        <div class="signing_detis">
              <form name="login" id="login_prebook" novalidate="">
                <div class="col-md-12 no-pad">
                  <div class="wrp_pre">
                    <input type="email" required="" placeholder="Email Address" name="email" class="form-control logpadding pre_put" aria-required="true">
                    <span class="sentmail_id">Your booking details will be sent to this email address.</span> </div>
                </div>
                <div class="clearfix"></div>
               <!--  <div class="wrp_pre">
                 <div class="squaredThree">
                   <input type="checkbox" id="ihave" class="filter_airline" name="confirm" value="0">
                   <label for="ihave"></label>
                 </div>
                 <label class="have_account" for="ihave">I have an Account</label>
               </div> -->
                <div class="clearfix"></div>
                <div class="sign_twosec">
                  <div id="i_have_account" class="section_sign" style="display: none;">
                    <div class="col-md-12 no-pad">
                      <div class="wrp_pre">
                        <input type="password" placeholder="Password" id="pswd_p" name="password" class="form-control logpadding pre_put">
                        <a id="forgtpsw" class="fadeandscale_close fadeandscaleforget_open forgtpsw pre_forgot">Forgot password?</a> </div>
                      <div class="clearfix"></div>
                      <div class="wrp_pre">
                        <input type="submit" value="Continue" name="continue" class="btn btn_book">
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div id="con_as_guest" class="section_sign" style="display: block;">
                    <div class="col-md-12 no-pad">
                      <div class="wrp_pre">
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
                        <div class="sentmail_id">We'll use this number to send
                          possible update alerts.</div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="wrp_pre">
                        <input type="submit" value="Book as Guest" name="continue_c" class="btn btn_book">
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
                  <div class="col-md-6 text-left">
                    <span class="adlt_price">1ADT (s) (1*4760.19)</span>
                  </div>  
                  <div class="col-md-6 text-right">Rs 4760.19</div>  
                </div>
              </div>
              <div class="col-md-12 nopad">
                <div class="adt">
                  <h4>Taxes</h4>
                  <div class="col-md-6 text-left">
                    <span class="adlt_price">Tax & Fees</span>
                  </div>  
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
    </div>
</div></div>
</div>
<!-- results end here -->


<div class="clearfix"></div>

<?php include('footer.php') ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery_ui.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

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
</script>

</body>
</html>