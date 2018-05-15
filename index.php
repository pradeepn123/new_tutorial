<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Matrix </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <link href="css/flight_result.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/backslider.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet">

</head>
<body>

<?php include('header.php') ?>

<div class="clearfix"></div>
  <div class="captngrp">
      <div id="big1" class="bigcaption"><a href="#" target="_blank">BOOK NOW THE BEST DEALS  </a></div>
      <div id="desc" class="smalcaptn">Book securely and with confidence</div>
  </div>
<div class="clearfix"></div>




<!-- search bar section -->

<div class="search_bar searchbgcolor">
  <div class="container">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs cus_nav1" role="tablist">
        <li role="presentation" class="active"><a href="#flight" aria-controls="home" role="tab" data-toggle="tab"><img src="images/flight_icon.png" width="30">Flight</a></li>
        <li role="presentation"><a href="#hotel" aria-controls="profile" role="tab" data-toggle="tab"><img src="images/hotel_icon.png" width="30"> Hotel</a></li>
        <li role="presentation"><a style="border-right:none;" href="#flight_hotel" aria-controls="profile" role="tab" data-toggle="tab"><img src="images/attrac_icon.png" width="30"> Attraction</a></li>
        <!-- <li role="presentation"><a href="#tour_holiday" aria-controls="profile" role="tab" data-toggle="tab">Tour + Tour holiday</a></li>
        <li role="presentation"><a href="#transfer" aria-controls="profile" role="tab" data-toggle="tab">Transfer</a></li> -->
      </ul>

    
  </div>
  <!-- Tab panes -->
    <div class="tab-content smalbgcolor">
      <div role="tabpanel" class="tab-pane active container" id="flight">
        <form action="" method="POST" role="form">
        <div class="col-xs-12 col-md-12 nopadding">
           <!--  <input type="radio" name="journey_type" id="oneway" value="ONEWAY" class="css-checkbox one_way one_way_radio">
           <label for="oneway" class="css-label radGroup1">Oneway</label> -->

            

           
       </div>

        <div class="col-sm-12 nopad">
         

          <div class="all_ways4">
          <div class="one_radio rnd_one">
          <input type="radio" name="journey_type" id="radio1" value="ONEWAY" class="css-checkbox one_way one_way_radio">
            <label for="radio1" class="css-label radGroup1">Oneway</label>
            </div>
            <!-- <div class="one_radio rnd_one">
                <input id="radio1" type="radio" name="radio" value="1">
                <label for="radio1"><span><span></span></span>One Way</label>
            </div> -->
            <div class="one_radio rnd_sec">
            <input type="radio" name="journey_type" id="radio2" value="ROUNDTRIP" checked="checked" class="css-checkbox round_trip ">
            <label for="radio2" class="css-label radGroup1">Round Way</label>
            </div>
            <!-- <div class="one_radio rnd_sec">
                <input id="" type="radio" name="radio" value="2" checked="checked"><label for="radio2"><span><span></span></span></label>
            </div> -->
            <div class="one_radio rnd_multi">
              <input type="radio" name="journey_type" id="radio3" value="MULTICITY" class="css-checkbox round_trip ">
            <label for="radio3" class="css-label radGrofup1">Multicity</label> 
              </div>
            <!-- <div class="one_radio rnd_multi">
                       <input id="radio3" type="radio" name="radio" value="3"><label for="radio3"><span><span></span></span>Multicity</label>
                   </div> -->       
          </div>                   
        </div>
        
        <div class="all_panel_search">
          <div class="col-sm-3 nopad">
            <div class="form-group">
              <label for="">From</label>
              <div class="relativemask">
                <span class="maskimg mfrom"></span>
                <input type="text" class="form-control ft" id="" placeholder="City or Airport">
              </div>
            </div>
          </div>
          <div class="col-sm-1 nopad text-center wd5">
            <div class="form-group">
              <span class="formlabel">&nbsp;</span>
              <img src="images/round.png" alt="round">
            </div>
          </div>
          <div class="col-sm-2 nopad">
            <div class="form-group">
              <label for="">To</label>
              <div class="relativemask">
                <span class="maskimg mto"></span>
                <input type="text" class="form-control ft" id="" placeholder="City or Airport">
              </div>
            </div>
          </div>
          <div class="col-sm-3 pd5">
            <div class="form-group">
              <label for="">Departure Date</label>
              <div class="relativemask">
                <span class="maskimg caln"></span>
                <input type="text" class="form-control ft" id="departure" placeholder="Choose the day">
              </div>
            </div>
          </div>
          <div class="col-sm-3 nopad">
            <div class="form-group rnddate_opac">
              <label for="">Return Date</label>
              <div class="relativemask">
                <span class="maskimg caln"></span>
                <input type="text" class="form-control ft" id="return" placeholder="Choose the day">
              </div>
            </div>
          </div>
          
          <div class="col-sm-9 nopad">
            <div class="col-sm-6 nopad">
              <div class="wdth45 fullwidth_tab">
               <div class="marginbotom10">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 nopad">
                    
                     <div class="selectedwrapnum">
                        <div class="onlynumwrap">
                           <div class="onlynum">
                              <div class="onlynum">
                                 <button type="button" class="btn btn-default btn-number btnpot" data-type="minus" data-field="adult" > <span class="fa fa-minus"></span> </button>
                                 <input type="text" name="adult" id="adult" class="form-control input-number centertext valid" value="1" data-min="1" data-max="9" aria-invalid="false">
                                 <button type="button" class="btn btn-default btn-number btnpot btn_right" data-type="plus" data-field="adult"> <span class="fa fa-plus"></span> </button>
                              </div>
                           </div>
                        </div>
                     </div>
                      <span class="formlabel">Adult</span>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 fiveh pad10">
                    
                     <div class="selectedwrapnum">
                        <div class="onlynumwrap">
                           <div class="onlynum">
                              <button type="button" class="btn btn-default btn-number btnpot" data-type="minus" data-field="child"> <span class="fa fa-minus"></span> </button>
                              <input type="text" name="child" id="child" class="form-control input-number centertext" value="0" data-min="0" data-max="8">
                              <button type="button" class="btn btn-default btn-number btnpot btn_right" data-type="plus" data-field="child"> <span class="fa fa-plus"></span> </button>
                           </div>
                        </div>
                     </div>
                      <span class="formlabel">Child<strong>(2-11 yrs)</strong></span>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 nopad">
                   
                     <div class="selectedwrapnum">
                        <div class="onlynumwrap">
                           <div class="onlynum">
                              <button type="button" class="btn btn-default btn-number btnpot" data-type="minus" data-field="infant"> <span class="fa fa-minus"></span> </button>
                              <input type="text" id="infant" name="infant" class="form-control input-number centertext" value="0" data-min="0" data-max="9">
                              <button type="button" class="btn btn-default btn-number btnpot btn_right" data-type="plus" data-field="infant"> <span class="fa fa-plus"></span> </button>
                           </div>
                        </div>
                     </div>
                       <span class="formlabel">Infant<strong>(0-2 yrs)</strong></span>
                  </div>
               </div>
            </div>
            </div>
            <div class="col-sm-6">
              <div class="col-sm-6 text-right">
                <span class="formlabel">&nbsp;</span>
                <span class="formlabel"><span class="cls">Class</span></span>
              </div>
              <div class="col-sm-6">
                <span class="formlabel">&nbsp;</span>
                <div class="plcetogo selctmark">
                <select name="" id="input" class="normalsel form-control" required="required">
                  <option value="">Economy</option>
                  <option value="">Business</option>
                </select> 
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-sm-3">
            <span class="formlabel">&nbsp;</span>
            <button type="button" class="btn btn_pnl_search srch">SEARCH</button>
          </div>

        </div>
        
        </form>
      </div>
      <div role="tabpanel" class="tab-pane container" id="hotel">
        <div class="hotel_search_all">
          <div class="col-sm-4 nopad">
            <div class="form-group">
              <label for="">Going to</label>
              <div class="relativemask">
                <span class="maskimg mfrom"></span>
                <input type="text" class="form-control ft" id="" placeholder="City or Airport">
              </div>
            </div>
          </div>
          <div class="col-sm-2 pd5">
            <div class="form-group">
              <label for="">Checkin Date</label>
              <div class="relativemask">
                <span class="maskimg caln"></span>
                <input type="text" class="form-control ft" id="departure" placeholder="Choose the day">
              </div>
            </div>
          </div>
          <div class="col-sm-2 nopad">
            <div class="form-group rnddate_opac">
              <label for="">Checkout Date</label>
              <div class="relativemask">
                <span class="maskimg caln"></span>
                <input type="text" class="form-control ft" id="return" placeholder="Choose the day">
              </div>
            </div>
          </div>
          <div class="col-sm-2 pd5">
            <div class="form-group rnddate_opac">
              <span class="formlabel">&nbsp;</span>
              <div class="relativemask">
              <select name="" id="input" class="normalsel form-control" required="required">
                <option value="">No of Nights</option>
                <option value="">Business</option>
              </select> 
              </div>
            </div>
          </div>
          <div class="col-sm-2 nopad">
            <div class="form-group rnddate_opac">
              <span class="formlabel">&nbsp;</span>
              <div class="relativemask">
              <select name="" id="input" class="normalsel form-control" required="required">
                <option value="">Select Country</option>
                <option value="">India</option>
              </select> 
              </div>
            </div>
          </div>

          <div class="col-sm-3 nopad">
            <span class="formlabel">&nbsp;</span>
            <button type="button" class="btn btn_pnl_search srch">SEARCH</button>
          </div>

        </div>
      </div>
      <div role="tabpanel" class="tab-pane container" id="flight_hotel">
        <div class="attractin_search">
          <form action="#" method="POST">
            <div class="col-sm-4 nopad">
              <div class="form-group">
                <label for="">Going to</label>
                <div class="relativemask">
                  <span class="maskimg mfrom"></span>
                  <input type="text" class="form-control ft" id="" placeholder="City or Airport">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- <div role="tabpanel" class="tab-pane container" id="tour_holiday">tour t</div>
      <div role="tabpanel" class="tab-pane container" id="transfer">transfer</div> -->
    </div>
    <div class="enjy text-center">
      <div class="container"> 
        <h3>ENJOY SHOPPING DISCOUNT UP TO 50% ON 800+ MALLS & OUTLETS ACROSS THE GLOBE</h3>
        <img src="images/google_play.jpg" width="70px;">
        <img src="images/app_store.jpg" width="70px;">
      </div>
    </div>
</div>
<!-- search bar section ends here -->



<div class="top_destination">
  <div class="container">
    <div class="pagehed">Beautiful trips with .... <strong>Top Destinations</strong>
      <span class="txt_head">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.</span>
    </div>
    <div class="centersep">
      <div class="comn_icons"> <span class="fa fa-star"></span> </div>
    </div>
    <div class="clearfix"></div>
    <div class="dest_out">  
     
      <div class="">
        <div id="owl-demo1" class="owl-carousel owlindex2 owl-theme">
        <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/1.png" draggable="false"></a>
                </figure>
                <div class="text-center">
                  <h4>America</h4>
                  <h5>Statue of Liberty</h5>
                </div>
            </article>
          </li>
        </div>
         <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/2.png" draggable="false"></a>
                </figure> 
                <div class="text-center">
                  <h4>Australia</h4>
                  <h5>Opera House</h5>
                </div>              
            </article>
          </li>
        </div>

         <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/3.png" draggable="false"></a>
                </figure>     
                <div class="text-center">
                  <h4>France</h4>
                  <h5>Paris Tower</h5>
                </div>           
            </article>
          </li>
        </div>

         <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/4.png" draggable="false"></a>
                </figure>    
                <div class="text-center">
                  <h4>India</h4>
                  <h5>Tajmahal</h5>
                </div>            
            </article>
          </li>
        </div>

         <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/5.png" draggable="false"></a>
                </figure>      
                <div class="text-center">
                  <h4>London</h4>
                  <h5>Big Ben Watch</h5>
                </div>          
            </article>
          </li>
        </div>

        <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/6.png" draggable="false"></a>
                </figure>                
                <div class="text-center">
                  <h4>Russia</h4>
                  <h5>Statue of Liberty</h5>
                </div>
            </article>
          </li>
        </div>
        
        <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/5.png" draggable="false"></a>
                </figure>      
                <div class="text-center">
                  <h4>London</h4>
                  <h5>Big Ben Watch</h5>
                </div>          
            </article>
          </li>
        </div>

        <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/6.png" draggable="false"></a>
                </figure>                
                <div class="text-center">
                  <h4>Russia</h4>
                  <h5>Statue of Liberty</h5>
                </div>
            </article>
          </li>
        </div>


        </div>
      </div>

      </div>

    </div>
  </div>



<div class="clearfix"></div>


<div class="top_deals back_grndimg">
  <div class="container">
    <div class="pagehed">Beautiful trips with .... <strong>Top Destinations</strong>
      <span class="txt_head">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.</span>
    </div>
    <div class="centersep">
      <div class="comn_icons"> <span class="fa fa-star"></span> </div>
    </div>


    <div id="owl-demo2" class="owl-carousel owlindex2 owl-theme">
        <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/des_1.jpg" draggable="false"></a>
                </figure>
                <div class="text-center txt_bg_effect">
                  <h4>SIGHTSEEING TOUR</h4>
                </div>
            </article>
          </li>
        </div>
         <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/des_2.jpg" draggable="false"></a>
                </figure> 
                <div class="text-center txt_bg_effect">
                  <h4>BRIDGE CLIMBING</h4>
                </div>              
            </article>
          </li>
        </div>

         <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/des_3.jpg" draggable="false"></a>
                </figure>     
                <div class="text-center txt_bg_effect">
                  <h4>FAMILY AND FUN</h4>
                </div>           
            </article>
          </li>
        </div>

         <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/des_4.jpg" draggable="false"></a>
                </figure>    
                <div class="text-center txt_bg_effect">
                  <h4>FOOD AND DRINKS</h4>
                </div>            
            </article>
          </li>
        </div>

         <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/des_1.jpg" draggable="false"></a>
                </figure>      
                <div class="text-center txt_bg_effect">
                  <h4>SIGHTSEEING TOUR</h4>
                </div>          
            </article>
          </li>
        </div>

        <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/des_2.jpg" draggable="false"></a>
                </figure>                
                <div class="text-center txt_bg_effect">
                  <h4>BRIDGE CLIMBING</h4>
                </div>
            </article>
          </li>
        </div>
        
        <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/des_3.jpg" draggable="false"></a>
                </figure>      
                <div class="text-center txt_bg_effect">
                  <h4>FAMILY AND FUN</h4>
                </div>          
            </article>
          </li>
        </div>

        <div class="item">
          <li style="">
            <article class="box">
                <figure>
                    <a href="#" class="hover-effect popup-gallery"><img alt="" src="images/des_4.jpg" draggable="false"></a>
                </figure>                
                <div class="text-center txt_bg_effect">
                  <h4>FOOD AND DRINKS</h4>
                </div>
            </article>
          </li>
        </div>


        </div>
    

  </div>
</div>





<div class="clearfix"></div>


<div class="advertisement">
  <div class="container">
    <div class="out_advertise">
        
    <div class="pagehed">Beautiful trips with .... <strong>Top Hotel Destinations</strong>
      <span class="txt_head">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.</span>
    </div>
    <div class="centersep">
      <div class="comn_icons"> <span class="fa fa-star"></span> </div>
    </div>
     

    <div class="all_des_dv">
      <div class="col-sm-3">
        <div class="des_wthimg">
          <img src="images/hotel_des_img1.jpg">
        </div>
        <div class="des_txt">
          <h4>CONSECTETUR ADIPISCING</h4>
          <h5><i class="fa fa-map-marker"></i> Italy</h5>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="des_wthimg">
          <img src="images/hotel_des_img2.jpg">
        </div>
        <div class="des_txt">
          <h4>CONSECTETUR ADIPISCING</h4>
          <h5><i class="fa fa-map-marker"></i> London</h5>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="des_wthimg">
          <img src="images/hotel_des_img3.jpg">
        </div>
        <div class="des_txt">
          <h4>CONSECTETUR ADIPISCING</h4>
          <h5><i class="fa fa-map-marker"></i> Turkey</h5>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="des_wthimg">
          <img src="images/hotel_des_img4.jpg">
        </div>
        <div class="des_txt">
          <h4>CONSECTETUR ADIPISCING</h4>
          <h5><i class="fa fa-map-marker"></i> Dubai</h5>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="des_wthimg">
          <img src="images/hotel_des_img5.jpg">
        </div>
        <div class="des_txt">
          <h4>CONSECTETUR ADIPISCING</h4>
          <h5><i class="fa fa-map-marker"></i> India</h5>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="des_wthimg">
          <img src="images/hotel_des_img6.jpg">
        </div>
        <div class="des_txt">
          <h4>CONSECTETUR ADIPISCING</h4>
          <h5><i class="fa fa-map-marker"></i> Italy</h5>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="des_wthimg">
          <img src="images/hotel_des_img7.jpg">
        </div>
        <div class="des_txt">
          <h4>CONSECTETUR ADIPISCING</h4>
          <h5><i class="fa fa-map-marker"></i> Jordan</h5>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="des_wthimg">
          <img src="images/hotel_des_img8.jpg">
        </div>
        <div class="des_txt">
          <h4>CONSECTETUR ADIPISCING</h4>
          <h5><i class="fa fa-map-marker"></i> Italy</h5>
        </div>
      </div>
    </div>


    </div>
  </div>
</div>


<div class="clearfix"></div>
<div class="test_cus">
  <div class="container">
    <!-- <h3><strong>Testimonial</strong></h3> -->
    <div class="seprator"></div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
       <!-- Wrapper for slides -->
       <div class="carousel-inner">
          <div class="item active">
             <div class="row" style="padding: 20px">
                <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                
                <div class="row">
                    <div class="col-sm-2 nopad text-center">
                      <div class="rounded_img">
                          <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/jack.jpg" class="img-responsive" style="width: 120px;margin:0 auto;">
                        </div>
                    </div>
                    <div class="col-sm-10 nopad">
                        <p class="testimonial_para">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p>
                        <h4><strong>Jack Andreson</strong></h4>    
                    <br>
                    </div>
                </div>
             </div>
          </div>
          <div class="item">
             <div class="row" style="padding: 20px">
                <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>               
                <div class="row">
                    <div class="col-sm-2">
                      <div class="rounded_img">
                          <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/kiara.jpg" class="img-responsive" style="width: 120px;margin:0 auto;">
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <p class="testimonial_para">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p>
                        <h4><strong>Kiara Andreson</strong></h4>
                    <br>
                    </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="controls testimonial_control pull-right">
       <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carousel-example-generic"
          data-slide="prev"></a>
       <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carousel-example-generic"
          data-slide="next"></a>
    </div>
  </div>
</div>




<div class="clearfix"></div>

<?php include("footer.php") ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery_ui.js"></script>
<script src="js/backslider.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script>

//homepage slide show
$(function($){
  
        var url = 'images';

        $.supersized({
        
          // Functionality
          slide_interval          :   5000,   // Length between transitions
          transition              :   1,      // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
          transition_speed    : 700,    // Speed of transition
                                 
          // Components             
          slide_links       : 'blank',  // Individual links for each slide (Options: false, 'num', 'name', 'blank')
          slides          :   [     // Slideshow Images
                        
              /*          {image : url1+'/slide1.jpg' ,title : 'BOOK NOW THE BEST DEALS' ,description:'Book securely and with confidence'},
                        {image : url1+'/slide2.jpg' ,title : 'BOOK NOW THE BEST DEALS' ,description:'Book securely and with confidence'},
                        {image : url1+'/slide3.jpg' ,title : 'BOOK NOW THE BEST DEALS' ,description:'Book securely and with confidence'}, 
              */          
                  {image : url+'/slider1.jpg',title : 'BOOK NOW THE BEST DEALS' ,description:'Book securely and with confidence' ,},
                  {image : url+'/slider2.jpg',title : 'BOOK NOW THE BEST DEALS' ,description:'testing banner' ,},
              ]
          
        });
        });

//homepage slide show end
  $(document).ready(function($) {
    $("#owl-demo1").owlCarousel({
        items : 6, 
        itemsDesktop : [1000,3],
        itemsDesktopSmall : [900,3], 
        itemsTablet: [768,2], 
        itemsMobile : [479,1], 
        navigation : true,
        pagination : false,
        autoPlay : true
    });
  });

  $("#farecal").owlCarousel({
    items : 5,
    itemsDesktop : [1200, 4],
    itemsDesktopSmall : [991,3],
    itemsTablet: [600, 2],
    itemsMobile: [479, 1],
    navigation: true,
    pagination: false,
    autoPlay : false,
    autoplayTimeout : 3000,
    autoplayHoverPause : true
  });
</script>
  <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );

  </script>

  <script type="text/javascript">
    $(document).ready(function(){$('.close_activation').click(function(){$('#confirmation').modal('toggle');});$('.dropdown-menu').click(function(e){e.stopPropagation();});$('.fadeandscaleforget_open').click(function(){$('.logins').fadeOut(500,function(){$('.forgets').fadeIn();});});$('.fadeandscalereg_open').click(function(){$('.logins').fadeOut(500,function(){$('.registers').fadeIn();});});$('.fadeandscale_open').click(function(){$('.registers').fadeOut(500,function(){$('.forgets').fadeOut(500,function(){$('.logins').fadeIn();});});});$(window).scroll(function(){var yPos=($(window).scrollTop());if(yPos>150){$('.topssec').addClass('fixed');}
else{$('.topssec').removeClass('fixed');}});});
  </script>


<script>
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#departure" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#return" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>
  <script type="text/javascript">
    
$(document).ready(function(){

  $('#advancedSearchHide').hide();
  $("#advancedSearchShow").click(function() {
    $('#advancedSearchHide').slideToggle();
  }); 
   $('#multi_city').hide();
  // hotel child ages display on child value
  $(document).on('click', '.agecount', function(e){
    var value=$(this).attr('data-type');
    var field=$(this).attr('data-field');
    var childs = $('#'+field).val();
    //alert(childs);
    if(value == 'plus'){
      childs = parseInt(parseInt(childs)+1);
    } else {
      childs = parseInt(parseInt(childs)-1);
    }
    if(childs > 0){
      $('#'+field+'_ages').empty();
      $("."+field+"_age").show();
      for(var i=0; i<childs; i++){
        var cid = parseInt(parseInt(i)+1);
       var childsdata = '<span class="formlabel">Child age '+cid+'</span><div class="selectedwrapnum"><div class="onlynumwrap"><div class="onlynum"><button type="button" class="btn btn-default btn-number btnpot" disabled="disabled" data-type="minus" data-field="'+field+'_age'+cid+'"> <span class="fa fa-minus"></span> </button><input type="text" name="'+field+'[]" id="'+field+'_age'+cid+'" class="form-control input-number centertext" value="0" data-min="0" data-max="12"><button type="button" class="btn btn-default btn-number btnpot" data-type="plus" data-field="'+field+'_age'+cid+'"> <span class="fa fa-plus"></span> </button></div></div></div>';
        $('#'+field+'_ages').append(childsdata);
      }
    } else {
      $('#'+field+'_ages').empty();
      $("."+field+"_age").hide();
    }
    });
    
  });
// Number field button function 
  
$(document).on('click', '.btn-number', function(e){
//$('.btn-number').on('click', function(e){
    e.preventDefault();
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[id='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('data-min')) {
               if(fieldName == 'adult' || fieldName == 'child'){
                    //flight
                    var max = 9;
                    var chd = parseInt($('#child').val()); 
                    var adt = parseInt($('#adult').val());
                    var inf = parseInt($('#infant').val());
                    var persons = adt + chd;
                    
                    if(persons < max){
                        input.val(currentVal - 1).change();
                    }

                    if(fieldName == 'adult'){
                        console.log(inf +'>='+ adt);
                        if(inf >= adt){
                            $('#infant').val(adt-1).change();
                        } 
                    }
                                        
                }if(fieldName == 'infant'){
                    var adt = parseInt($('#adult').val());
                    var inf = parseInt($('#infant').val());
                    if(inf <= adt){
                        input.val(currentVal - 1).change();
                    }                    
                }else{
                    input.val(currentVal - 1).change();
                }
            } 
            if(parseInt(input.val()) == input.attr('data-min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('data-max')) {
                if(fieldName == 'adult' || fieldName == 'child' || fieldName == 'infant'){
                    //flight
                    var max = 9;
                    var chd = parseInt($('#child').val());
                    var adt = parseInt($('#adult').val());
                    var inf = parseInt($('#infant').val());
                    var persons = adt + chd + inf;
                    if(persons < max){
                        //console.log(persons +'<'+ max);
                        input.val(currentVal + 1).change();
                    }                    
                }/*else if(fieldName == 'infant'){
                    var adt = parseInt($('#adult').val());
                    var inf = parseInt($('#infant').val());
                    if(inf < adt){
                        input.val(currentVal + 1).change();
                    }
                }*/else{
                    input.val(currentVal + 1).change();
                } 
            }
            if(parseInt(input.val()) == input.attr('data-max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});



  </script>
<script type="text/javascript">
  $(document).ready(function($) {
   $("#owl-demo2").owlCarousel({
        items : 4, 
        itemsDesktop : [1000,3],
        itemsDesktopSmall : [900,3], 
        itemsTablet: [768,2], 
        itemsMobile : [479,1], 
        navigation : true,
        pagination : false,
        // autoPlay : true
    });
});

$('.rnd_one').click(function() {
  $('.rnddate_opac').css("opacity", "0.5");
});
$('.rnd_sec').click(function() {
  $('.rnddate_opac').css("opacity", "1");
});



$(document).ready(function(){
 $(window).scroll(function(){
  if($(document).scrollTop() > 0){
     //$("p").css({"background": "#ff0000", "color": "#fff" });
     $(".out_head").addClass("headfix");
}
else{
     // $("p").css({"background": "", "color": "" });
     $(".out_head").removeClass("headfix");
 }});
});

</script>
</body>
</html>
