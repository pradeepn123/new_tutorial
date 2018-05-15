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
    <div class="row">
      <div class="col-md-3 flightinfo">
        <div class="row">
          
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
        <div class="row">
          
          <div class="clearfix"></div>
          <div class="col-md-12 nopad">
            
            <div class="col-xs-12 nopad">
              <div class="divinsidefltr">
                <div class="insidemyt col-xs-10 nopad">
                <ul class="sortul">
                  <li class="sortli threonly" data-sort="hn"><a class="sorta name-l-2-h asc" data-order="asc"><strong>Sort By</strong></a><a class="sorta name-h-2-l hide des" data-order="desc"><i class="fa fa-sort-alpha-desc"></i> <strong>Name</strong></a></li>
                  <li class="sortli threonly" data-sort="hn"><a class="sorta name-l-2-h asc" data-order="asc"><i class="fa fa-sort-alpha-asc"></i> <strong>Name</strong></a><a class="sorta name-h-2-l hide des" data-order="desc"><i class="fa fa-sort-alpha-desc"></i> <strong>Name</strong></a></li>
                  <li class="sortli threonly" data-sort="sr"><a class="sorta star-l-2-h asc" data-order="asc"><i class="fa fa-star"></i> <strong>Star</strong></a><a class="sorta star-h-2-l hide  des" data-order="desc"><i class="fa fa-star"></i> <strong>Star</strong></a></li>
                  <li class="sortli threonly" data-sort="p"><a class="sorta price-l-2-h asc" data-order="asc"><i class="fa fa-tag"></i> <strong>Price</strong></a><a class="sorta price-h-2-l hide  des" data-order="desc"><i class="fa fa-tag"></i> <strong>Price</strong></a></li>
               </ul>
              </div>
            </div>
          </div>
            

            <div class="allresult">
              <div class="rowresult r-r-i item">
                 <div class="madgrid forhtlpopover shapcs" data-key="0" data-hotel-code="H0280882">
                    <div class="col-xs-4 nopad listimage full_mobile">
                       <div class="imagehtldis">
                          <!--<img src="" alt="Hotel img" data-src="" class="lazy h-img"> --><img src="images/hotel_img5.jpg" alt="Hotel img" class="lazy h-img" style="display: inline-block;"> <a class="hotel_location" data-lat="12.979274" data-lon="77.751204"></a>
                       </div>
                    </div>
                    <div class="col-xs-8 nopad listfull full_mobile">
                       <div class="sidenamedesc">
                          <div class="celhtl width70">
                             <div class="innd">
                                <div class="imptpldz">
                                   <div class="property-type" data-property-type="hotel"></div>
                                   <div class="shtlnamehotl"> <span class="h-name">The Chettinad Serviced Suites</span> </div>
                                   <div class="starrtinghotl rating-no"><span class="h-sr hide">3</span><span class="star 1 "></span><span class="star 2 "></span><span class="star 3 active"></span><span class="star 4 "></span><span class="star 5 "></span></div>
                                   <div class="adreshotle h-adr" data-toggle="tooltip" data-placement="top" data-original-title="5/3 1st Main, 1st Cross, Abhaya Dhama Road, Whitefield, Bangalore 560066">5/3 1st Main, 1st Cross, Abhaya Dhama Road, Whitefield, Bangalore 560066</div>
                                   <div class="preclsdv"> <input type="hidden" class="free_cancel" value="0" data-free-cancel="0">                 </div>
                                   <div class="bothicntri">
                                      <div class="mwifdiv">
                                         <ul class="htl_spr">
                                            <li class="wf"></li>
                                            <li class="bf"></li>
                                            <li class="pr"></li>                        
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                                <div class="maprew">
                                   <div class="hoteloctnf">  <a href="#" class="location-map  fa fa-map-marker" target="map_box_frame" data-toggle="tooltip" data-placement="top" data-original-title="View Map"></a>   </div>
                                </div>
                             </div>
                          </div>
                          <div class="celhtl width30">
                             <div class="sidepricewrp">
                                <div class="priceflights">
                                   <strong> Rs </strong><span class="h-p">1324</span>
                                   <div class="prcstrtingt">Avg / Night</div>
                                </div>
                                <form action=""><input type="hidden" id="" value="" name="ResultIndex" data-key="0" data-hotel-code="H0280882" class="result-index"><input type="hidden" id="" value="" name="booking_source" data-key="0"><input type="hidden" value="get_details" name="op" class="operation"><button class="confirmBTN b-btn bookallbtn splhotltoy" type="submit">Book</button></form>
                                <!-- <div class="viewhotlrmtgle hide"><button class="vwrums room-btn" type="button">View Rooms</button></div> -->
                             </div>
                          </div>
                       </div>
                    </div>        
                   
                    <div class="clearfix"></div>
                    <!-- <div class="room-list" style="display:none">
                       <div class="room-summ romlistnh">
                          <div class="text-center loader-image" style="display: none;">Please Wait</div>
                       </div>
                    </div>
                    <span class="deal-status hide" data-deal="0"></span> -->
                 </div>
                
              </div>

              <div class="rowresult r-r-i item">
                 <div class="madgrid forhtlpopover shapcs" data-key="0" data-hotel-code="H0280882">
                    <div class="col-xs-4 nopad listimage full_mobile">
                       <div class="imagehtldis">
                          <!--<img src="" alt="Hotel img" data-src="" class="lazy h-img"> --><img src="images/hotel_img4.jpg" alt="Hotel img" class="lazy h-img" style="display: inline-block;"> <a class="hotel_location" data-lat="12.979274" data-lon="77.751204"></a>
                       </div>
                    </div>
                    <div class="col-xs-8 nopad listfull full_mobile">
                       <div class="sidenamedesc">
                          <div class="celhtl width70">
                             <div class="innd">
                                <div class="imptpldz">
                                   <div class="property-type" data-property-type="hotel"></div>
                                   <div class="shtlnamehotl"> <span class="h-name">The Chettinad Serviced Suites</span> </div>
                                   <div class="starrtinghotl rating-no"><span class="h-sr hide">3</span><span class="star 1 "></span><span class="star 2 "></span><span class="star 3 active"></span><span class="star 4 "></span><span class="star 5 "></span></div>
                                   <div class="adreshotle h-adr" data-toggle="tooltip" data-placement="top" data-original-title="5/3 1st Main, 1st Cross, Abhaya Dhama Road, Whitefield, Bangalore 560066">5/3 1st Main, 1st Cross, Abhaya Dhama Road, Whitefield, Bangalore 560066</div>
                                   <div class="preclsdv"> <input type="hidden" class="free_cancel" value="0" data-free-cancel="0">                 </div>
                                   <div class="bothicntri">
                                      <div class="mwifdiv">
                                         <ul class="htl_spr">
                                            <li class="wf"></li>
                                            <li class="bf"></li>
                                            <li class="pr"></li>                        
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                                <div class="maprew">
                                   <div class="hoteloctnf">  <a href="#" class="location-map  fa fa-map-marker" target="map_box_frame" data-toggle="tooltip" data-placement="top" data-original-title="View Map"></a>   </div>
                                </div>
                             </div>
                          </div>
                          <div class="celhtl width30">
                             <div class="sidepricewrp">
                                <div class="priceflights">
                                   <strong> Rs </strong><span class="h-p">1324</span>
                                   <div class="prcstrtingt">Avg / Night</div>
                                </div>
                                <form action=""><input type="hidden" id="" value="" name="ResultIndex" data-key="0" data-hotel-code="H0280882" class="result-index"><input type="hidden" id="" value="" name="booking_source" data-key="0"><input type="hidden" value="get_details" name="op" class="operation"><button class="confirmBTN b-btn bookallbtn splhotltoy" type="submit">Book</button></form>
                                <!-- <div class="viewhotlrmtgle hide"><button class="vwrums room-btn" type="button">View Rooms</button></div> -->
                             </div>
                          </div>
                       </div>
                    </div>        
                   
                    <div class="clearfix"></div>
                    <!-- <div class="room-list" style="display:none">
                       <div class="room-summ romlistnh">
                          <div class="text-center loader-image" style="display: none;">Please Wait</div>
                       </div>
                    </div>
                    <span class="deal-status hide" data-deal="0"></span> -->
                 </div>
                
              </div>
              <div class="rowresult r-r-i item">
                 <div class="madgrid forhtlpopover shapcs" data-key="0" data-hotel-code="H0280882">
                    <div class="col-xs-4 nopad listimage full_mobile">
                       <div class="imagehtldis">
                          <!--<img src="" alt="Hotel img" data-src="" class="lazy h-img"> --><img src="images/hotel_img2.jpg" alt="Hotel img" class="lazy h-img" style="display: inline-block;"> <a class="hotel_location" data-lat="12.979274" data-lon="77.751204"></a>
                       </div>
                    </div>
                    <div class="col-xs-8 nopad listfull full_mobile">
                       <div class="sidenamedesc">
                          <div class="celhtl width70">
                             <div class="innd">
                                <div class="imptpldz">
                                   <div class="property-type" data-property-type="hotel"></div>
                                   <div class="shtlnamehotl"> <span class="h-name">The Chettinad Serviced Suites</span> </div>
                                   <div class="starrtinghotl rating-no"><span class="h-sr hide">3</span><span class="star 1 "></span><span class="star 2 "></span><span class="star 3 active"></span><span class="star 4 "></span><span class="star 5 "></span></div>
                                   <div class="adreshotle h-adr" data-toggle="tooltip" data-placement="top" data-original-title="5/3 1st Main, 1st Cross, Abhaya Dhama Road, Whitefield, Bangalore 560066">5/3 1st Main, 1st Cross, Abhaya Dhama Road, Whitefield, Bangalore 560066</div>
                                   <div class="preclsdv"> <input type="hidden" class="free_cancel" value="0" data-free-cancel="0">                 </div>
                                   <div class="bothicntri">
                                      <div class="mwifdiv">
                                         <ul class="htl_spr">
                                            <li class="wf"></li>
                                            <li class="bf"></li>
                                            <li class="pr"></li>                        
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                                <div class="maprew">
                                   <div class="hoteloctnf">  <a href="#" class="location-map  fa fa-map-marker" target="map_box_frame" data-toggle="tooltip" data-placement="top" data-original-title="View Map"></a>   </div>
                                </div>
                             </div>
                          </div>
                          <div class="celhtl width30">
                             <div class="sidepricewrp">
                                <div class="priceflights">
                                   <strong> Rs </strong><span class="h-p">1324</span>
                                   <div class="prcstrtingt">Avg / Night</div>
                                </div>
                                <form action=""><input type="hidden" id="" value="" name="ResultIndex" data-key="0" data-hotel-code="H0280882" class="result-index"><input type="hidden" id="" value="" name="booking_source" data-key="0"><input type="hidden" value="get_details" name="op" class="operation"><button class="confirmBTN b-btn bookallbtn splhotltoy" type="submit">Book</button></form>
                                <!-- <div class="viewhotlrmtgle hide"><button class="vwrums room-btn" type="button">View Rooms</button></div> -->
                             </div>
                          </div>
                       </div>
                    </div>        
                   
                    <div class="clearfix"></div>
                    <!-- <div class="room-list" style="display:none">
                       <div class="room-summ romlistnh">
                          <div class="text-center loader-image" style="display: none;">Please Wait</div>
                       </div>
                    </div>
                    <span class="deal-status hide" data-deal="0"></span> -->
                 </div>
                
              </div>
            </div>

            


            
            
        
        </div>
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
