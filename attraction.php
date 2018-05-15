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
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/flight_result.css" rel="stylesheet" type="text/css" />
  <link href="css/hotel_result.css" rel="stylesheet" type="text/css" />
  <link href="css/attraction.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet">

</head>
<body>

<?php include('header.php') ?>

<div class="clearfix"></div>



  <div class="contentsdw">
    <div class="container">
        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8 nopad">
          <div class="pad_ten">
            <div class="left_icon sprite marker_icon"></div>
            <div class="from_to_place">
              <input type="hidden" name="my_trip" id="my_xtrip" value="R">
              <h4 class="placename">India</h4>
              <h3 class="contryname">Bangalore </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6 hidden-sm hidden-xs nopad">
          <div class="col-xs-6 nopad">
            <div class="pad_ten">
              <div class="left_icon sprite calendar_icon"></div>
              <div class="from_to_place">
                <div class="boxlabl">Check in</div>
                <div class="datein">
                  <span class="calinn"> 17-Apr-2018 </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 nopad ">
            <div class="pad_ten">
              <div class="left_icon sprite calendar_icon"></div>
              <div class="from_to_place">
                <div class="boxlabl">Check Out</div>
                <div class="datein">
                  19 -Apr- 2018<span class="calinn">  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 hidden-md hidden-sm hidden-xs nopad">
          <div class="pad_ten">
            <div class="left_icon sprite pasnger_icon"></div>
            <div class="from_to_place">
              <div class="boxlabl textcentr">Passenger(s)</div>
              <div class="countlbl">1</div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-4 nopad">
          <div class="pad_ten">
            <button class="modifysrch" data-toggle="collapse" data-target="#modify"><strong>Modify Search</strong> <span class="down_caret"></span></button>
          </div>
        </div>
      </div>
</div>
<div class="clearfix"></div>


<!--Why Book With Tripitnow?-->
<section class="flightwrap">
  <div class="container">
    <div class="">
      <div class="col-md-3 nopad flightinfo">
        <div class="">
          
          <div class="col-md-12">
            <h4 class="num_hotels">113 Hotels Found</h4>
            <div class="flighttools">
              <div class="srt_padd">
                <div class="toolsheading" data-toggle="collapse" data-target="#price">Price</div>
                <div class="filt_pad">
                  <div class="rowfilter" id="price" class="collapse">
                     <input type="text"  class="level" id="amount" readonly >
                      <div id="slider-range"></div>
                  </div>
                  <br />
                  <hr />
                </div>
              </div>
              <div class="srt_padd">
                <div class="toolsheading" data-toggle="collapse" data-target="#stop">Amenities</div>
                  <div class="filt_pad fbtns">
                  <ul>
                    <li>
                      <input name="" type="checkbox" value=""  id="stop1"  />
                      <label for="stop1">Wifi</label>
                    </li>
                    <li>
                      <input name="" type="checkbox" value=""  id="stop2"  />
                      <label for="stop2">Breakfast</label>
                    </li>
                    <li>
                      <input name="" type="checkbox" value=""  id="stop3"  />
                      <label for="stop3">Parking</label>
                    </li>
                    <li>
                      <input name="" type="checkbox" value=""  id="stop4" />
                      <label for="stop4">Swimming Pool</label>
                    </li>                 
                  </ul>
                  <br />
                  <hr />
                </div>
              </div>
              <div class="srt_padd">
              <div class="toolsheading">Hotel Name</div>
                <div class="filt_pad departtns">
                  <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="" placeholder="Hotel Name">
                <br />
                <hr />
                </div>
              </div>
              <div class="srt_padd">
              <div class="toolsheading">Hotel Free Cancellation</div>
                <div class="filt_pad departtns">
                  <ul>
                    <li>
                      <input name="" type="checkbox" value=""  id="cancel1"  />
                      <label for="cancel1">Free Cancellation</label>
                    </li>
                  </ul>
                  <br />
                  <hr />
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="srt_padd">
              <div class="toolsheading">Hotel Location</div>
                <div class="filt_pad departtns">
                  <ul>
                    <li>
                      <input name="" type="checkbox" value=""  id="cancel1"  />
                      <label for="cancel1">Bangalore(178)</label>
                    </li>
                    <li>
                      <input name="" type="checkbox" value=""  id="cancel1"  />
                      <label for="cancel1">Dubai(148)</label>
                    </li>
                    <li>
                      <input name="" type="checkbox" value=""  id="cancel1"  />
                      <label for="cancel1">Bangalore(178)</label>
                    </li>
                    <li>
                      <input name="" type="checkbox" value=""  id="cancel1"  />
                      <label for="cancel1">Bangalore(178)</label>
                    </li>
                  </ul>
                  <br />
                  <hr />
                </div>
              </div>
             <!--  <div class="col-md-12 airlinebtn">
                <div class="toolsheading">Hotel Location</div>
                <div class="clearfix"></div>
                <ul>
                  <li>
                    <input name="" type="checkbox" value=""  id="test1"  />
                    <label for="test1">Bangalore(178)</label>
                  </li>                  
                </ul>
                <div class="clearfix"></div>
              </div> -->
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="attraction_all">
          <div class="col-sm-4">
            <div class="attr_imgs">
              <div>
                <img src="images/sightseeng_img1.jpg">
              </div>
              <div class="attr_txt">
                <h5>A Sumptuous Persion food Trail Feast in Bangalore</h5>
                <span><i class="fa fa-marker"></i> Bangalore, India</span>
              </div>
            </div>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-sm-4"></div>
        </div>
        <div class="clearfix"></div>
      </div>
  </div>
</section>
<!--Why Book With Tripitnow?--> 

<div class="clearfix"></div>

<?php include("footer.php") ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery_ui.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();  
  });
</script>
<script>
  $(document).ready(function(){
    $("#owl-demo2").owlCarousel({
        items : 6, 
        itemsDesktop : [1000,6],
        itemsDesktopSmall : [900,4], 
        itemsTablet: [600,2], 
        itemsMobile : [479,1], 
        navigation : true,
        navigationText: [],
        pagination : false,
        autoPlay : 5000
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

  // header fixed
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
  // header fixed
  
  </script>

</body>
</html>
