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
              <h4 class="placename">Round Trip</h4>
              <h3 class="contryname">Bangalore(BLR) To Chennai(MAA)</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xs-6 hidden-sm hidden-xs nopad">
          <div class="col-xs-6 nopad">
            <div class="pad_ten">
              <div class="left_icon sprite calendar_icon"></div>
              <div class="from_to_place">
                <div class="boxlabl">Departure</div>
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
                <div class="boxlabl">Return</div>
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
    <div class="modify_search">
        <div class="">
          <div class="modi_filter">
            <ul>
              <li><span class="flt_name">Filter</span> </li>
              <li>
                <a href="javascript:void(0);" class="timeout_clk" id="time_out">
                  <i class="fa fa-clock-o"></i> Time
                </a>
                <ul class="navSection_secondary hidden-xs navTimeSlot timesFilter">
                  <li>
                    <strong class="navTimeSlotHdr">Depart Time</strong>
                    <div class="navTimeSlotWrap timeSlotContainerO">
                      <span class="navTimeSlotBlk" id="onw_before11">
                        <img src="images/b_fore.png">
                        <small>Before 11AM</small>
                      </span>
                    </div>
                  </li>
                  <li>
                    <div class="navTimeSlotWrap timeSlotContainerO">
                      <span class="navTimeSlotBlk" id="onw_before11">
                        <img src="images/b_fore1.png">
                        <small>11AM - 5PM</small>
                      </span>
                    </div>
                  </li>
                  <li>
                    <div class="navTimeSlotWrap timeSlotContainerO">
                      <span class="navTimeSlotBlk" id="onw_before11">
                        <img src="images/b_fore2.png">
                        <small>5PM - 9PM</small>
                      </span>
                    </div>
                  </li>
                  <li>
                    <div class="navTimeSlotWrap timeSlotContainerO">
                      <span class="navTimeSlotBlk" id="onw_before11">
                        <img src="images/b_fore3.png">
                        <small>After 9</small>
                      </span>
                    </div>
                  </li>
                  <div>
                    <strong class="navTimeSlotHdr">Return Time</strong>
                    <div class="navTimeSlotWrap timeSlotContainerR" id="returnSlot">
                      <span class="navTimeSlotBlk " id="ret_before11">
                        <img src="images/b_fore.png">
                        <small>Before 11AM</small>
                      </span>
                      <span class="navTimeSlotBlk " id="ret_11-5">
                        <img src="images/b_fore1.png">
                        <small>11AM - 5PM</small>
                      </span>
                      <span class="navTimeSlotBlk " id="ret_5-9">
                        <img src="images/b_fore2.png">
                        <small>5PM - 9PM</small>
                      </span>
                      <span class="navTimeSlotBlk " id="ret_after9">
                        <img src="images/b_fore3.png">
                        <small>After 9</small>
                      </span>
                    </div>
                  </div>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0);" class="timeout_clk" id="time_out">
                  <i class="fa fa-stop-circle"></i> Stops
                </a>
                <ul class="navSection_secondary hidden-xs timesFilter">
                  <li><input type="checkbox" id="all_stops" name="allFSt" class="customCheck stopsCheckbox" value="-1"><label for="all_stops">All Stops</label></li>
                  <li><input type="checkbox" id="0_stops" name="allFSt" class="customCheck stopsCheckbox" value="-1"><label for="0_stops">0 Stops</label></li>
                  <li><input type="checkbox" id="1_stops" name="allFSt" class="customCheck stopsCheckbox" value="-1"><label for="1_stops">1 Stops</label></li>
                  <li><input type="checkbox" id="2_stops" name="allFSt" class="customCheck stopsCheckbox" value="-1"><label for="2_stops">2 Stops</label></li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0);" class="timeout_clk" id="time_out">
                  <i class="fa fa-plane"></i> Airlines
                </a>
                <ul class="navSection_secondary hidden-xs timesFilter">
                  <li><input type="checkbox" id="all_air" name="allFSt" class="customCheck stopsCheckbox" value="-1"><label for="all_air">All Airlines</label></li>
                  <li><input type="checkbox" id="0_air" name="allFSt" class="customCheck stopsCheckbox" value="-1"><label for="0_air">Jet Airways</label></li>
                  <li><input type="checkbox" id="1_air" name="allFSt" class="customCheck stopsCheckbox" value="-1"><label for="1_air">Etihad Airways</label></li>
                  <li><input type="checkbox" id="2_air" name="allFSt" class="customCheck stopsCheckbox" value="-1"><label for="2_air">Emirates</label></li>
                </ul>
              </li>
              <li>
                <a href="javascript:void(0);" class="timeout_clk" id="time_out">Price</a>
                <ul class="navSection_secondary hidden-xs timesFilter">
                  <li>
                    <input type="text"  class="level" id="amount" readonly >
                    <div id="slider-range"></div>
                  </li>
                </ul>
              </li>
              
              <li class="ref_lbel"><input type="checkbox" id="refud" name="allFSt" class="customCheck stopsCheckbox" value="-1"><label for="refud">Refundable</label></li>
            </ul>
          </div>
        </div>
      </div>
    <div class="">
      <!-- <div class="col-md-3  flightinfo">
        <div class="row">
         
          <div class="col-md-12">
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
                <div class="toolsheading" data-toggle="collapse" data-target="#stop">No. of Stops</div>
                  <div class="filt_pad fbtns">
                  <ul>
                    <li>
                      <input name="" type="checkbox" value=""  id="stop1"  />
                      <label for="stop1">Select all</label>
                    </li>
                    <li>
                      <input name="" type="checkbox" value=""  id="stop2"  />
                      <label for="stop2">Non Stop</label>
                    </li>
                    <li>
                      <input name="" type="checkbox" value=""  id="stop3"  />
                      <label for="stop3">1 Stop</label>
                    </li>
                    <li>
                      <input name="" type="checkbox" value=""  id="stop4" />
                      <label for="stop4">1+ Stop</label>
                    </li>                 
                  </ul>
                  <br />
                  <hr />
                </div>
              </div>
              <div class="srt_padd">
              <div class="toolsheading">Departure Time</div>
                <div class="filt_pad departtns">
                <ul class="list-inline">
                  <li><a href="javascript:void(0);" class="morning"> <span class="sprice">12-6 AM</span> </a></li>
                  <li><a href="javascript:void(0);" class="morning"> <span class="sprice">6-12 PM</span> </a></li>
                  <li><a href="javascript:void(0);" class="rain"> <span class="sprice">12-6 AM</span> </a></li>
                  <li><a href="javascript:void(0);" class="night"> <span class="sprice">6-12 PM</span> </a></li>
                </ul>
                <br />
                <hr />
              </div>
              </div>
              <div class="srt_padd">
              <div class="toolsheading">Arrival Time</div>
                <div class="filt_pad departtns">
                  <ul class="list-inline">
                    <li><a href="javascript:void(0);" class="morning"> <span class="sprice">12-6 AM</span> </a></li>
                    <li><a href="javascript:void(0);" class="morning"> <span class="sprice">6-12 PM</span> </a></li>
                    <li><a href="javascript:void(0);" class="rain"> <span class="sprice">12-6 AM</span> </a></li>
                    <li><a href="javascript:void(0);" class="night"> <span class="sprice">6-12 PM</span> </a></li>
                  </ul>
                  <br />
                  <hr />
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-12 airlinebtn">
                <div class="toolsheading">Airlines</div>
                <div class="clearfix"></div>
                <ul>
                  <li>
                    <input name="" type="checkbox" value=""  id="test1"  />
                    <label for="test1">SriLankan Airlines Limited</label>
                  </li>
                  <li>
                    <input name="" type="checkbox" value=""  id="test2"  />
                    <label for="test2">Jet Airways</label>
                  </li>
                  <li>
                    <input name="" type="checkbox" value=""  id="test3"  />
                    <label for="test3">Etihad Airways</label>
                  </li>
                  <li>
                    <input name="" type="checkbox" value=""  id="test4" />
                    <label for="test4">Emirates</label>
                  </li>
                  <li>
                    <input name="" type="checkbox" value=""  id="test5" />
                    <label for="test5"> Qatar Airways</label>
                  </li>
                  <li>
                    <input name="" type="checkbox" value=""  id="test6" />
                    <label for="test6">Oman Aviation</label>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="col-md-12">
        <div class="row">
          
          <div class="clearfix"></div>
          <div class="col-md-12 nopad">
            <div class="farenewcal">
              <div id="farecal" class="owl-carousel matrixcarsl owl-theme">
                <div class="item" title="Indigo-6E">
                  <a class="pricedates add_days_todate" data-journey-date="2017-12-01 06:30:00">
                    <div class="imgemtrx_plusmin">
                      <img alt="Flight" src="images/6E.gif">
                    </div>
                    <div class="alsmtrx"><strong>Dec 01</strong>
                      <span class="mtrxprice">Rs 4921</span>
                    </div>
                  </a>
                </div>
                <div class="item" title="Indigo-6E">
                  <a class="pricedates add_days_todate" data-journey-date="2017-12-01 06:30:00">
                    <div class="imgemtrx_plusmin">
                      <img alt="Flight" src="images/6E.gif">
                    </div>
                    <div class="alsmtrx"><strong>Dec 01</strong>
                      <span class="mtrxprice">Rs 4921</span>
                    </div>
                  </a>
                </div>
                <div class="item" title="Indigo-6E">
                  <a class="pricedates add_days_todate" data-journey-date="2017-12-01 06:30:00">
                    <div class="imgemtrx_plusmin">
                      <img alt="Flight" src="images/9W.gif">
                    </div>
                    <div class="alsmtrx"><strong>Dec 01</strong>
                      <span class="mtrxprice">Rs 4921</span>
                    </div>
                  </a>
                </div>
                <div class="item" title="Indigo-6E">
                  <a class="pricedates add_days_todate" data-journey-date="2017-12-01 06:30:00">
                    <div class="imgemtrx_plusmin">
                      <img alt="Flight" src="images/6E.gif">
                    </div>
                    <div class="alsmtrx"><strong>Dec 01</strong>
                      <span class="mtrxprice">Rs 4921</span>
                    </div>
                  </a>
                </div>
                <div class="item" title="Indigo-6E">
                  <a class="pricedates add_days_todate" data-journey-date="2017-12-01 06:30:00">
                    <div class="imgemtrx_plusmin">
                      <img alt="Flight" src="images/6E.gif">
                    </div>
                    <div class="alsmtrx"><strong>Dec 01</strong>
                      <span class="mtrxprice">Rs 4921</span>
                    </div>
                  </a>
                </div>
                <div class="item" title="Indigo-6E">
                  <a class="pricedates add_days_todate" data-journey-date="2017-12-01 06:30:00">
                    <div class="imgemtrx_plusmin">
                      <img alt="Flight" src="images/9W.gif">
                    </div>
                    <div class="alsmtrx"><strong>Dec 01</strong>
                      <span class="mtrxprice">Rs 4921</span>
                    </div>
                  </a>
                </div>
                <div class="item" title="Indigo-6E">
                  <a class="pricedates add_days_todate" data-journey-date="2017-12-01 06:30:00">
                    <div class="imgemtrx_plusmin">
                      <img alt="Flight" src="images/6E.gif">
                    </div>
                    <div class="alsmtrx"><strong>Dec 01</strong>
                      <span class="mtrxprice">Rs 4921</span>
                    </div>
                  </a>
                </div>
                <div class="item" title="Indigo-6E">
                  <a class="pricedates add_days_todate" data-journey-date="2017-12-01 06:30:00">
                    <div class="imgemtrx_plusmin">
                      <img alt="Flight" src="images/9W.gif">
                    </div>
                    <div class="alsmtrx"><strong>Dec 01</strong>
                      <span class="mtrxprice">Rs 4921</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="filterforall addtwofilter" id="top-sort-list-wrapper">
             <div class="topmisty" id="top-sort-list-1">
                <div class="col-xs-12 nopad">
                   <div class="divinsidefltr">
                      <div class="insidemyt col-xs-12 nopad">
                         <ul class="sortul">
                            <li class="sortli hide_lines"><a class="sorta name-l-2-h loader asc"> <strong>Airline</strong></a><a class="sorta name-h-2-l hide loader des"> <strong>Airline</strong></a></li>
                            <li class="sortli"><a class="sorta departure-l-2-h loader asc"> <strong>Depart</strong></a><a class="sorta departure-h-2-l hide loader des"> <strong>Depart</strong></a></li>
                            <li class="sortli hide_lines"><a class="sorta duration-l-2-h loader asc"> <strong>Duration</strong></a><a class="sorta duration-h-2-l hide loader des"> <strong>Duration</strong></a></li>
                            <li class="sortli"><a class="sorta arrival-l-2-h loader asc"> <strong>Arrive</strong></a><a class="sorta arrival-h-2-l hide loader des"> <strong>Arrive</strong></a></li>
                            <li class="sortli"><a class="sorta price-l-2-h loader asc"> <strong>Price</strong></a><a class="sorta price-h-2-l hide loader des"> <strong>Price</strong></a></li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
             <div class="topmisty" id="top-sort-list-2">
                <div class="col-xs-12 nopad divinsidefltr">
                   <div class="insidemyt">
                      <ul class="sortul">
                         <li class="sortli hide_lines"><a class="sorta name-l-2-h loader asc"> <strong>Airline</strong></a><a class="sorta name-h-2-l hide loader des"> <strong>Airline</strong></a></li>
                         <li class="sortli"><a class="sorta departure-l-2-h loader asc"><strong>Depart</strong></a><a class="sorta departure-h-2-l hide loader des"><strong>Depart</strong></a></li>
                         <li class="sortli hide_lines"><a class="sorta duration-l-2-h loader asc"><strong>Duration</strong></a><a class="sorta duration-h-2-l hide loader des"><strong>Duration</strong></a></li>
                         <li class="sortli"><a class="sorta arrival-l-2-h loader asc"><strong>Arrive</strong></a><a class="sorta arrival-h-2-l hide loader des"><strong>Arrive</strong></a></li>
                         <li class="sortli"><a class="sorta price-l-2-h loader asc"><strong>Price</strong></a><a class="sorta price-h-2-l hide loader des"><strong>Price</strong></a></li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
            
          <div class="allresult" id="flight_search_result">
            <div class="round-domestk">
              <!-- repeating the loop -->
              <div class="rondnone r-w-g nopad">
                <div class="rowresult p-0 r-r-i t-w-i-1 active">
                   <div class="madgrid" data-key="10">
                      <div class="onlmob">
                         <form method="POST" id="form-id-10" action="#" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value="47d57922755febc2adf11d24be1331b4"><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="promotional_plan_type[]" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                      </div>
                      <div class="f-s-d-w col-xs-8 nopad wayeght full_same">
                         <div class="allsegments outer-segment-0">
                            <div class="quarter_wdth nopad col-xs-3">
                               <div class="fligthsmll"><img class="airline-logo" alt="G8 icon" src="images/9W.gif"></div>
                               <div class="m-b-0 text-center">
                                  <div class="a-n airlinename" data-code="G8">GoAir</div>
                                  <strong> G8 601</strong>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fdtv hide">0720</span>
                                  <div class="f-d-t bigtimef">07:20</div>
                                  <div class="from-loc smalairport_code">MAA</div>
                                  <div class="from-loc smalairport">Chennai</div>
                                  <span class="dep_dt hide" data-category="2" data-datetime="1523843400000"></span>
                               </div>
                            </div>
                            <div class="col-md-1 p-tb-10 hide">
                               <div class="arocl fa fa-long-arrow-right"></div>
                            </div>
                            <div class="smal_udayp nopad col-xs-3">
                               <span class="f-d hide">70</span>
                               <div class="insidesame">
                                  <div class="durtntime">1h 10m </div>
                                  <div class="stop_image"><img src="<?php echo ASSETS;?>images/stop_0.png" alt="stop_0"></div>
                                  <div class="stop-value">Stop:0</div>
                                  <div class="cabinclass hide">Economy</div>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fatv hide">0830</span>
                                  <div class="f-a-t bigtimef">08:30</div>
                                  <div class="to-loc smalairport">Hyderabad</div>
                                  <div class="smalairport_code">HYD</div>
                                  <span class="arr_dt hide" data-category="2" data-datetime="1523847600000"></span>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xs-4 nopad wayfour full_same">
                         <span class="hide stp" data-stp="0" data-category="1"></span>
                         <div class="priceanbook">
                            <div class="col-xs-6 nopad wayprice">
                               <div class="insidesame">
                                  <div class="priceflights"><strong> Rs </strong><span class="f-p">1949</span></div>
                                  <span class="hide price" data-price="1949" data-currency="Rs"></span>
                                  <div data-val="1" class="n-r n-r-t">Refundable</div>
                               </div>
                            </div>
                            <div class="col-xs-6 nopad waybook">
                               <div class="form-wrapper bookbtlfrt">
                                  <form method="POST" id="form-id-10" action="" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value=""><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="mrinfrmtn"><a class="detailsflt iti-btn" data-id="fdp_10">Flight Details</a><i></i></div>
                   </div>
                   
                </div>
              </div>
              <!-- repeating the loop -->
               <!-- repeating the loop -->
              <div class="rondnone r-w-g nopad">
                <div class="rowresult p-0 r-r-i t-w-i-1 active">
                   <div class="madgrid" data-key="10">
                      <div class="onlmob">
                         <form method="POST" id="form-id-10" action="#" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value="47d57922755febc2adf11d24be1331b4"><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="promotional_plan_type[]" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                      </div>
                      <div class="f-s-d-w col-xs-8 nopad wayeght full_same">
                         <div class="allsegments outer-segment-0">
                            <div class="quarter_wdth nopad col-xs-3">
                               <div class="fligthsmll"><img class="airline-logo" alt="G8 icon" src="images/9W.gif"></div>
                               <div class="m-b-0 text-center">
                                  <div class="a-n airlinename" data-code="G8">GoAir</div>
                                  <strong> G8 601</strong>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fdtv hide">0720</span>
                                  <div class="f-d-t bigtimef">07:20</div>
                                  <div class="from-loc smalairport_code">MAA</div>
                                  <div class="from-loc smalairport">Chennai</div>
                                  <span class="dep_dt hide" data-category="2" data-datetime="1523843400000"></span>
                               </div>
                            </div>
                            <div class="col-md-1 p-tb-10 hide">
                               <div class="arocl fa fa-long-arrow-right"></div>
                            </div>
                            <div class="smal_udayp nopad col-xs-3">
                               <span class="f-d hide">70</span>
                               <div class="insidesame">
                                  <div class="durtntime">1h 10m </div>
                                  <div class="stop_image"><img src="images/stop_0.png" alt="stop_0"></div>
                                  <div class="stop-value">Stop:0</div>
                                  <div class="cabinclass hide">Economy</div>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fatv hide">0830</span>
                                  <div class="f-a-t bigtimef">08:30</div>
                                  <div class="to-loc smalairport">Hyderabad</div>
                                  <div class="smalairport_code">HYD</div>
                                  <span class="arr_dt hide" data-category="2" data-datetime="1523847600000"></span>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xs-4 nopad wayfour full_same">
                         <span class="hide stp" data-stp="0" data-category="1"></span>
                         <div class="priceanbook">
                            <div class="col-xs-6 nopad wayprice">
                               <div class="insidesame">
                                  <div class="priceflights"><strong> Rs </strong><span class="f-p">1949</span></div>
                                  <span class="hide price" data-price="1949" data-currency="Rs"></span>
                                  <div data-val="1" class="n-r n-r-t">Refundable</div>
                               </div>
                            </div>
                            <div class="col-xs-6 nopad waybook">
                               <div class="form-wrapper bookbtlfrt">
                                  <form method="POST" id="form-id-10" action="" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value=""><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="mrinfrmtn"><a class="detailsflt iti-btn" data-id="fdp_10">Flight Details</a><i></i></div>
                   </div>
                   
                </div>
              </div>
              <!-- repeating the loop -->
               <!-- repeating the loop -->
              <div class="rondnone r-w-g nopad">
                <div class="rowresult p-0 r-r-i t-w-i-1">
                   <div class="madgrid" data-key="10">
                      <div class="onlmob">
                         <form method="POST" id="form-id-10" action="#" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value="47d57922755febc2adf11d24be1331b4"><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="promotional_plan_type[]" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                      </div>
                      <div class="f-s-d-w col-xs-8 nopad wayeght full_same">
                         <div class="allsegments outer-segment-0">
                            <div class="quarter_wdth nopad col-xs-3">
                               <div class="fligthsmll"><img class="airline-logo" alt="G8 icon" src="images/9W.gif"></div>
                               <div class="m-b-0 text-center">
                                  <div class="a-n airlinename" data-code="G8">GoAir</div>
                                  <strong> G8 601</strong>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fdtv hide">0720</span>
                                  <div class="f-d-t bigtimef">07:20</div>
                                  <div class="from-loc smalairport_code">MAA</div>
                                  <div class="from-loc smalairport">Chennai</div>
                                  <span class="dep_dt hide" data-category="2" data-datetime="1523843400000"></span>
                               </div>
                            </div>
                            <div class="col-md-1 p-tb-10 hide">
                               <div class="arocl fa fa-long-arrow-right"></div>
                            </div>
                            <div class="smal_udayp nopad col-xs-3">
                               <span class="f-d hide">70</span>
                               <div class="insidesame">
                                  <div class="durtntime">1h 10m </div>
                                  <div class="stop_image"><img src="images/stop_0.png" alt="stop_0"></div>
                                  <div class="stop-value">Stop:0</div>
                                  <div class="cabinclass hide">Economy</div>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fatv hide">0830</span>
                                  <div class="f-a-t bigtimef">08:30</div>
                                  <div class="to-loc smalairport">Hyderabad</div>
                                  <div class="smalairport_code">HYD</div>
                                  <span class="arr_dt hide" data-category="2" data-datetime="1523847600000"></span>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xs-4 nopad wayfour full_same">
                         <span class="hide stp" data-stp="0" data-category="1"></span>
                         <div class="priceanbook">
                            <div class="col-xs-6 nopad wayprice">
                               <div class="insidesame">
                                  <div class="priceflights"><strong> Rs </strong><span class="f-p">1949</span></div>
                                  <span class="hide price" data-price="1949" data-currency="Rs"></span>
                                  <div data-val="1" class="n-r n-r-t">Refundable</div>
                               </div>
                            </div>
                            <div class="col-xs-6 nopad waybook">
                               <div class="form-wrapper bookbtlfrt">
                                  <form method="POST" id="form-id-10" action="" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value=""><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="mrinfrmtn"><a class="detailsflt iti-btn" data-id="fdp_10">Flight Details</a><i></i></div>
                   </div>
                   
                </div>
              </div>
              <!-- repeating the loop -->
              <!-- repeating the loop -->
              <div class="rondnone r-w-g nopad">
                <div class="rowresult p-0 r-r-i t-w-i-1">
                   <div class="madgrid" data-key="10">
                      <div class="onlmob">
                         <form method="POST" id="form-id-10" action="#" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value="47d57922755febc2adf11d24be1331b4"><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="promotional_plan_type[]" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                      </div>
                      <div class="f-s-d-w col-xs-8 nopad wayeght full_same">
                         <div class="allsegments outer-segment-0">
                            <div class="quarter_wdth nopad col-xs-3">
                               <div class="fligthsmll"><img class="airline-logo" alt="G8 icon" src="images/9W.gif"></div>
                               <div class="m-b-0 text-center">
                                  <div class="a-n airlinename" data-code="G8">GoAir</div>
                                  <strong> G8 601</strong>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fdtv hide">0720</span>
                                  <div class="f-d-t bigtimef">07:20</div>
                                  <div class="from-loc smalairport_code">MAA</div>
                                  <div class="from-loc smalairport">Chennai</div>
                                  <span class="dep_dt hide" data-category="2" data-datetime="1523843400000"></span>
                               </div>
                            </div>
                            <div class="col-md-1 p-tb-10 hide">
                               <div class="arocl fa fa-long-arrow-right"></div>
                            </div>
                            <div class="smal_udayp nopad col-xs-3">
                               <span class="f-d hide">70</span>
                               <div class="insidesame">
                                  <div class="durtntime">1h 10m </div>
                                  <div class="stop_image"><img src="images/stop_0.png" alt="stop_0"></div>
                                  <div class="stop-value">Stop:0</div>
                                  <div class="cabinclass hide">Economy</div>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fatv hide">0830</span>
                                  <div class="f-a-t bigtimef">08:30</div>
                                  <div class="to-loc smalairport">Hyderabad</div>
                                  <div class="smalairport_code">HYD</div>
                                  <span class="arr_dt hide" data-category="2" data-datetime="1523847600000"></span>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xs-4 nopad wayfour full_same">
                         <span class="hide stp" data-stp="0" data-category="1"></span>
                         <div class="priceanbook">
                            <div class="col-xs-6 nopad wayprice">
                               <div class="insidesame">
                                  <div class="priceflights"><strong> Rs </strong><span class="f-p">1949</span></div>
                                  <span class="hide price" data-price="1949" data-currency="Rs"></span>
                                  <div data-val="1" class="n-r n-r-t">Refundable</div>
                               </div>
                            </div>
                            <div class="col-xs-6 nopad waybook">
                               <div class="form-wrapper bookbtlfrt">
                                  <form method="POST" id="form-id-10" action="" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value=""><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="mrinfrmtn"><a class="detailsflt iti-btn" data-id="fdp_10">Flight Details</a><i></i></div>
                   </div>
                   
                </div>
              </div>
              <!-- repeating the loop -->
              <!-- repeating the loop -->
              <div class="rondnone r-w-g nopad">
                <div class="rowresult p-0 r-r-i t-w-i-1">
                   <div class="madgrid" data-key="10">
                      <div class="onlmob">
                         <form method="POST" id="form-id-10" action="#" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value="47d57922755febc2adf11d24be1331b4"><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="promotional_plan_type[]" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                      </div>
                      <div class="f-s-d-w col-xs-8 nopad wayeght full_same">
                         <div class="allsegments outer-segment-0">
                            <div class="quarter_wdth nopad col-xs-3">
                               <div class="fligthsmll"><img class="airline-logo" alt="G8 icon" src="images/9W.gif"></div>
                               <div class="m-b-0 text-center">
                                  <div class="a-n airlinename" data-code="G8">GoAir</div>
                                  <strong> G8 601</strong>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fdtv hide">0720</span>
                                  <div class="f-d-t bigtimef">07:20</div>
                                  <div class="from-loc smalairport_code">MAA</div>
                                  <div class="from-loc smalairport">Chennai</div>
                                  <span class="dep_dt hide" data-category="2" data-datetime="1523843400000"></span>
                               </div>
                            </div>
                            <div class="col-md-1 p-tb-10 hide">
                               <div class="arocl fa fa-long-arrow-right"></div>
                            </div>
                            <div class="smal_udayp nopad col-xs-3">
                               <span class="f-d hide">70</span>
                               <div class="insidesame">
                                  <div class="durtntime">1h 10m </div>
                                  <div class="stop_image"><img src="images/stop_0.png" alt="stop_0"></div>
                                  <div class="stop-value">Stop:0</div>
                                  <div class="cabinclass hide">Economy</div>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fatv hide">0830</span>
                                  <div class="f-a-t bigtimef">08:30</div>
                                  <div class="to-loc smalairport">Hyderabad</div>
                                  <div class="smalairport_code">HYD</div>
                                  <span class="arr_dt hide" data-category="2" data-datetime="1523847600000"></span>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xs-4 nopad wayfour full_same">
                         <span class="hide stp" data-stp="0" data-category="1"></span>
                         <div class="priceanbook">
                            <div class="col-xs-6 nopad wayprice">
                               <div class="insidesame">
                                  <div class="priceflights"><strong> Rs </strong><span class="f-p">1949</span></div>
                                  <span class="hide price" data-price="1949" data-currency="Rs"></span>
                                  <div data-val="1" class="n-r n-r-t">Refundable</div>
                               </div>
                            </div>
                            <div class="col-xs-6 nopad waybook">
                               <div class="form-wrapper bookbtlfrt">
                                  <form method="POST" id="form-id-10" action="" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value=""><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="mrinfrmtn"><a class="detailsflt iti-btn" data-id="fdp_10">Flight Details</a><i></i></div>
                   </div>
                   
                </div>
              </div>
              <!-- repeating the loop -->
              <!-- repeating the loop -->
              <div class="rondnone r-w-g nopad">
                <div class="rowresult p-0 r-r-i t-w-i-1">
                   <div class="madgrid" data-key="10">
                      <div class="onlmob">
                         <form method="POST" id="form-id-10" action="#" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value="47d57922755febc2adf11d24be1331b4"><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="promotional_plan_type[]" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                      </div>
                      <div class="f-s-d-w col-xs-8 nopad wayeght full_same">
                         <div class="allsegments outer-segment-0">
                            <div class="quarter_wdth nopad col-xs-3">
                               <div class="fligthsmll"><img class="airline-logo" alt="G8 icon" src="images/9W.gif"></div>
                               <div class="m-b-0 text-center">
                                  <div class="a-n airlinename" data-code="G8">GoAir</div>
                                  <strong> G8 601</strong>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fdtv hide">0720</span>
                                  <div class="f-d-t bigtimef">07:20</div>
                                  <div class="from-loc smalairport_code">MAA</div>
                                  <div class="from-loc smalairport">Chennai</div>
                                  <span class="dep_dt hide" data-category="2" data-datetime="1523843400000"></span>
                               </div>
                            </div>
                            <div class="col-md-1 p-tb-10 hide">
                               <div class="arocl fa fa-long-arrow-right"></div>
                            </div>
                            <div class="smal_udayp nopad col-xs-3">
                               <span class="f-d hide">70</span>
                               <div class="insidesame">
                                  <div class="durtntime">1h 10m </div>
                                  <div class="stop_image"><img src="images/stop_0.png" alt="stop_0"></div>
                                  <div class="stop-value">Stop:0</div>
                                  <div class="cabinclass hide">Economy</div>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fatv hide">0830</span>
                                  <div class="f-a-t bigtimef">08:30</div>
                                  <div class="to-loc smalairport">Hyderabad</div>
                                  <div class="smalairport_code">HYD</div>
                                  <span class="arr_dt hide" data-category="2" data-datetime="1523847600000"></span>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xs-4 nopad wayfour full_same">
                         <span class="hide stp" data-stp="0" data-category="1"></span>
                         <div class="priceanbook">
                            <div class="col-xs-6 nopad wayprice">
                               <div class="insidesame">
                                  <div class="priceflights"><strong> Rs </strong><span class="f-p">1949</span></div>
                                  <span class="hide price" data-price="1949" data-currency="Rs"></span>
                                  <div data-val="1" class="n-r n-r-t">Refundable</div>
                               </div>
                            </div>
                            <div class="col-xs-6 nopad waybook">
                               <div class="form-wrapper bookbtlfrt">
                                  <form method="POST" id="form-id-10" action="" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value=""><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="mrinfrmtn"><a class="detailsflt iti-btn" data-id="fdp_10">Flight Details</a><i></i></div>
                   </div>
                   
                </div>
              </div>
              <!-- repeating the loop -->
              <!-- repeating the loop -->
              <div class="rondnone r-w-g nopad">
                <div class="rowresult p-0 r-r-i t-w-i-1">
                   <div class="madgrid" data-key="10">
                      <div class="onlmob">
                         <form method="POST" id="form-id-10" action="#" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value="47d57922755febc2adf11d24be1331b4"><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="promotional_plan_type[]" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                      </div>
                      <div class="f-s-d-w col-xs-8 nopad wayeght full_same">
                         <div class="allsegments outer-segment-0">
                            <div class="quarter_wdth nopad col-xs-3">
                               <div class="fligthsmll"><img class="airline-logo" alt="G8 icon" src="images/9W.gif"></div>
                               <div class="m-b-0 text-center">
                                  <div class="a-n airlinename" data-code="G8">GoAir</div>
                                  <strong> G8 601</strong>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fdtv hide">0720</span>
                                  <div class="f-d-t bigtimef">07:20</div>
                                  <div class="from-loc smalairport_code">MAA</div>
                                  <div class="from-loc smalairport">Chennai</div>
                                  <span class="dep_dt hide" data-category="2" data-datetime="1523843400000"></span>
                               </div>
                            </div>
                            <div class="col-md-1 p-tb-10 hide">
                               <div class="arocl fa fa-long-arrow-right"></div>
                            </div>
                            <div class="smal_udayp nopad col-xs-3">
                               <span class="f-d hide">70</span>
                               <div class="insidesame">
                                  <div class="durtntime">1h 10m </div>
                                  <div class="stop_image"><img src="images/stop_0.png" alt="stop_0"></div>
                                  <div class="stop-value">Stop:0</div>
                                  <div class="cabinclass hide">Economy</div>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fatv hide">0830</span>
                                  <div class="f-a-t bigtimef">08:30</div>
                                  <div class="to-loc smalairport">Hyderabad</div>
                                  <div class="smalairport_code">HYD</div>
                                  <span class="arr_dt hide" data-category="2" data-datetime="1523847600000"></span>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xs-4 nopad wayfour full_same">
                         <span class="hide stp" data-stp="0" data-category="1"></span>
                         <div class="priceanbook">
                            <div class="col-xs-6 nopad wayprice">
                               <div class="insidesame">
                                  <div class="priceflights"><strong> Rs </strong><span class="f-p">1949</span></div>
                                  <span class="hide price" data-price="1949" data-currency="Rs"></span>
                                  <div data-val="1" class="n-r n-r-t">Refundable</div>
                               </div>
                            </div>
                            <div class="col-xs-6 nopad waybook">
                               <div class="form-wrapper bookbtlfrt">
                                  <form method="POST" id="form-id-10" action="" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value=""><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="mrinfrmtn"><a class="detailsflt iti-btn" data-id="fdp_10">Flight Details</a><i></i></div>
                   </div>
                   
                </div>
              </div>
              <!-- repeating the loop -->
              <!-- repeating the loop -->
              <div class="rondnone r-w-g nopad">
                <div class="rowresult p-0 r-r-i t-w-i-1">
                   <div class="madgrid" data-key="10">
                      <div class="onlmob">
                         <form method="POST" id="form-id-10" action="#" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value="47d57922755febc2adf11d24be1331b4"><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="promotional_plan_type[]" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                      </div>
                      <div class="f-s-d-w col-xs-8 nopad wayeght full_same">
                         <div class="allsegments outer-segment-0">
                            <div class="quarter_wdth nopad col-xs-3">
                               <div class="fligthsmll"><img class="airline-logo" alt="G8 icon" src="images/9W.gif"></div>
                               <div class="m-b-0 text-center">
                                  <div class="a-n airlinename" data-code="G8">GoAir</div>
                                  <strong> G8 601</strong>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fdtv hide">0720</span>
                                  <div class="f-d-t bigtimef">07:20</div>
                                  <div class="from-loc smalairport_code">MAA</div>
                                  <div class="from-loc smalairport">Chennai</div>
                                  <span class="dep_dt hide" data-category="2" data-datetime="1523843400000"></span>
                               </div>
                            </div>
                            <div class="col-md-1 p-tb-10 hide">
                               <div class="arocl fa fa-long-arrow-right"></div>
                            </div>
                            <div class="smal_udayp nopad col-xs-3">
                               <span class="f-d hide">70</span>
                               <div class="insidesame">
                                  <div class="durtntime">1h 10m </div>
                                  <div class="stop_image"><img src="images/stop_0.png" alt="stop_0"></div>
                                  <div class="stop-value">Stop:0</div>
                                  <div class="cabinclass hide">Economy</div>
                               </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                               <div class="insidesame">
                                  <span class="fatv hide">0830</span>
                                  <div class="f-a-t bigtimef">08:30</div>
                                  <div class="to-loc smalairport">Hyderabad</div>
                                  <div class="smalairport_code">HYD</div>
                                  <span class="arr_dt hide" data-category="2" data-datetime="1523847600000"></span>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xs-4 nopad wayfour full_same">
                         <span class="hide stp" data-stp="0" data-category="1"></span>
                         <div class="priceanbook">
                            <div class="col-xs-6 nopad wayprice">
                               <div class="insidesame">
                                  <div class="priceflights"><strong> Rs </strong><span class="f-p">1949</span></div>
                                  <span class="hide price" data-price="1949" data-currency="Rs"></span>
                                  <div data-val="1" class="n-r n-r-t">Refundable</div>
                               </div>
                            </div>
                            <div class="col-xs-6 nopad waybook">
                               <div class="form-wrapper bookbtlfrt">
                                  <form method="POST" id="form-id-10" action="" class="book-form-wrapper"><input type="hidden" name="is_domestic" class="" value="1"><input type="hidden" name="token[]" class="token data-access-key" value=""><input type="hidden" name="token_key[]" class="token_key" value=""><input type="hidden" name="search_access_key[]" class="search-access-key" value=""><input type="hidden" name="" class="promotional-plan-type" value=""><input type="hidden" name="booking_source" class="booking-source" value=""><button class="bookallbtn mfb-btn" type="button">Select</button></form>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="mrinfrmtn"><a class="detailsflt iti-btn" data-id="fdp_10">Flight Details</a><i></i></div>
                   </div>
                   
                </div>
              </div>
              <!-- repeating the loop -->
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

<?php include('footer.php') ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery_ui.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
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

   $(document).ready(function(){
      $(".timeout_clk").click(function(){
        if($(this).next('.navSection_secondary').is(":visible")){
           $('.navSection_secondary').hide();
            $(this).next('.navSection_secondary').hide();
        }else{
          $('.navSection_secondary').hide();
          $(this).next('.navSection_secondary').show();
        }
      });
    
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
