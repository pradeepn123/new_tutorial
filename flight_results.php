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
              <h3 class="contryname">Bangalore(BLR) To Chennai(MAA) </h3>
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
<div class="modfictions">
  <div id="modify" class="collapse">
    <div class="splmodify">
      <div class="container">
        <div class="tabspl">

          <div class="col-sm-9 nopad">
            <div class="col-sm-8 nopad">
              <div class="col-xs-6 nopad">
                <div class="lablform">From</div>
                <div class="plcetogo deprtures sidebord">
                  <input type="text" autocomplete="off" name="from" class="normalinput form-control" id="from" placeholder="Type Departure City" value="Chennai (MAA)" required="">
                </div>
              </div>
              <div class="col-xs-6 nopad">
                <div class="lablform">To</div>
                <div class="plcetogo deprtures sidebord">
                  <input type="text" autocomplete="off" name="from" class="normalinput form-control" id="from" placeholder="Type Departure City" value="Chennai (MAA)" required="">
                </div>
              </div>
            </div>
            <div class="col-sm-4 nopad">
              <div class="col-sm-6 nopad">
                <div class="lablform">Departure</div>
                <div class="plcetogo datemark sidebord">
                  <input type="text" readonly="" class="normalinput form-control" id="flight_datepicker1" placeholder="Select Date" value="" name="depature" required="">
                </div>
              </div>
              <div class="col-sm-6 nopad">
                <div class="lablform">Return</div>
                <div class="plcetogo datemark sidebord">
                  <input type="text" readonly="" class="normalinput form-control" id="flight_datepicker1" placeholder="Select Date" value="" name="depature" required="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 nopad">
            <div class="col-sm-6 nopad">
              <div class="lablform">&nbsp;</div>
              <div class="totlall">
                 <span class="remngwd"><span class="total_pax_count">1</span> <span id="travel_text">Traveller</span></span>
                 <div class="roomcount pax_count_div">
                    <div class="mobile_adult_icon">Travellers<i class="fa fa-male"></i></div>
                    <div class="inallsn">
                       <div class="oneroom fltravlr">
                          <div class="roomrow">
                             <div class="celroe col-xs-4">Adults<span class="agemns">(12+)</span></div>
                             <div class="celroe col-xs-8">
                                <div class="input-group countmore pax-count-wrapper adult_count_div"> <span class="input-group-btn"><button type="button" class="btn btn-default btn-number" data-type="minus" data-field="adult"> <span class="glyphicon glyphicon-minus"></span> </button></span><input type="text" id="OWT_adult" name="adult" class="form-control input-number centertext valid_class pax_count_value" value="1" min="1" max="9" readonly=""><span class="input-group-btn"><button type="button" class="btn btn-default btn-number" data-type="plus" data-field="adult"> <span class="glyphicon glyphicon-plus"></span> </button></span> </div>
                             </div>
                          </div>
                          <div class="roomrow">
                             <div class="celroe col-xs-4">Children<span class="agemns">(2-11)</span></div>
                             <div class="celroe col-xs-8">
                                <div class="input-group countmore pax-count-wrapper child_count_div"> <span class="input-group-btn"><button type="button" class="btn btn-default btn-number" data-type="minus" data-field="child"> <span class="glyphicon glyphicon-minus"></span> </button></span><input type="text" id="OWT_child" name="child" class="form-control input-number centertext pax_count_value" value="0" min="0" max="9" readonly=""><span class="input-group-btn"><button type="button" class="btn btn-default btn-number" data-type="plus" data-field="child"> <span class="glyphicon glyphicon-plus"></span> </button></span> </div>
                             </div>
                          </div>
                          <div class="roomrow">
                             <div class="celroe col-xs-4">Infants<span class="agemns">(0-2)</span></div>
                             <div class="celroe col-xs-8">
                                <div class="input-group countmore pax-count-wrapper infant_count_div"> <span class="input-group-btn"><button type="button" class="btn btn-default btn-number" data-type="minus" data-field="infant"> <span class="glyphicon glyphicon-minus"></span> </button></span><input type="text" id="OWT_infant" name="infant" class="form-control input-number centertext pax_count_value" value="0" min="0" max="9" readonly=""><span class="input-group-btn">search_flight<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="infant"> <span class="glyphicon glyphicon-plus"></span> </button></span> </div>
                             </div>
                          </div>
                          <!-- Infant Error Message-->
                          <div class="roomrow">
                             <div class="celroe col-xs-8">
                                <div class="alert-wrapper hide">
                                   <div role="alert" class="alert alert-error"><span class="alert-content"></span></div>
                                </div>
                             </div>
                          </div>
                          <a class="done1 comnbtn_room1"><span class="fa fa-check"></span> Done</a><!-- Infant Error Message-->
                       </div>
                    </div>
                 </div>
              </div>
            </div>
            <div class="col-sm-6 nopad">
              <div class="lablform">&nbsp;</div>
              <button type="button" class="btn btn_pnl_search srch">SEARCH</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="clearfix"></div>


<!--Why Book With Tripitnow?-->
<section class="flightwrap">
  <div class="container">
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
      <div class="clearfix"></div>
      <div class="col-md-12">
        <div class="row">
          
          
          <div class="clearfix"></div>
          <div class="col-md-12 nopad">
            <!-- <div class="farenewcal">
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
            </div> -->
            <div class="col-xs-12 nopad">
              <div class="divinsidefltr">
                <div class="insidemyt col-xs-12 nopad">
                <ul class="sortul">
                  <li class="sortli hide_lines">
                    <a class="sorta name-l-2-h loader asc">
                      <i class="fa fa-plane"></i> 
                      <strong>Airline</strong>
                    </a>
                  </li>
                  <li class="sortli">
                    <a class="sorta departure-l-2-h loader asc">
                      <i class="fa fa-calendar"></i> 
                      <strong>Depart</strong>
                    </a>              
                  </li>
                  <li class="sortli hide_lines">
                    <a class="sorta duration-l-2-h loader asc">
                      <i class="fa fa-clock-o"></i> 
                      <strong>Duration</strong>
                    </a>
                  </li>
                  <li class="sortli">
                    <a class="sorta arrival-l-2-h loader asc">
                      <i class="fa fa-calendar"></i> 
                      <strong>Arrive</strong>
                    </a>
                  </li>
                  <li class="sortli">
                    <a class="sorta price-l-2-h loader asc">
                      <i class="fa fa-tag"></i> 
                      <strong>Price</strong>
                    </a>
                  </li>
                </ul>
                </div>
              </div>
            </div>
            <div class="col-md-12 fresults">
              <div class="row">
                <div class="col-md-9 fresultsinfo nopadright">
                  <div class="row">
                    <!-- <div class="col-md-12 cname"></div> -->
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12 rightseperetor"><span class="cname"> SpiceJet </span><img src="images/9W.gif" class="flogos"/> </div>
                        <div class="col-md-3 col-sm-3 col-xs-4 depart rightseperetor"><span class="cty_nam">BLR</span>  <br><span class="dte_srt">23 Mar 18 20:30</span> <span class="departplace">Bangalore</span> </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 time rightseperetor">
                          <div class="mints">45 min</div>
                          <div class="buleline"></div>
                          <div class="stops">Non Stop</div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 arive"> <span class="cty_nam"> MAA </span> <br><span class="dte_srt">23 Mar 18 20:30 </span>  <span class="departplace">Chennai</span> </div>
                      </div>
                    </div>
                    <div class="col-md-12 nopadright">
                      <hr />
                    </div>
                    
                    <div class="col-md-12 rbottom"> 
                      <span class="sdetails">
                        <a class="bookview toggle-visibility" data-target="#view1">Flight details</a>
                      </span> 
                      <span class="frules">Fare Rules</span> 
                      <span class="fare_brk">Fare Breakdown</span>
                      <div class="viewmore" id="view1">
                        <hr>
                        <p> Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 fresultsprice">
                  <div  class="row">
                    <div class="col-md-12 col-sm-6 col-xs-6">
                      <div class="price"><span class="pricesine">$</span>599.00</div>
                      <div class="tprice">Refundable</div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-6">
                      <button class="btn redbtn">Select</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-12 fresults">
              <div class="row">
                <div class="col-md-9 fresultsinfo nopadright">
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12 rightseperetor"><span class="cname"> SpiceJet </span> <img src="images/9W.gif" class="flogos"/> </div>
                        <div class="col-md-3 col-sm-3 col-xs-4 depart rightseperetor"><span class="cty_nam"> BLR </span><br><span class="dte_srt">23 Mar 18 20:30</span> <span class="departplace">Bangalore</span> </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 time rightseperetor">
                          <div class="mints">45 min</div>
                          <div class="buleline"></div>
                          <div class="stops">Non Stop</div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 arive"><span class="cty_nam"> MAA </span><br><span class="dte_srt">23 Mar 18 20:30</span> <span class="departplace">Chennai</span> </div>
                      </div>
                    </div>
                    <div class="col-md-12 nopadright">
                      <hr />
                    </div>
                    
                    <div class="col-md-12 rbottom"> <span class="sdetails"><a class="bookview toggle-visibility" data-target="#view1">Flight details</a></span> <span class="frules">Fare Rules</span> <span class="fare_brk">Fare Breakdown</span>
                      <div class="viewmore" id="view1">
                        <hr>
                        <p> Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 fresultsprice">
                  <div  class="row">
                    <div class="col-md-12 col-sm-6 col-xs-6">
                      <div class="price"><span class="pricesine">$</span>489.00</div>
                      <div class="tprice">Non-refundable</div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-6">
                      <button class="btn redbtn">Select</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <div class="col-md-12 fresults">
              <div class="row">
                <div class="col-md-9 fresultsinfo nopadright">
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12 rightseperetor"><span class="cname"> SpiceJet </span> <img src="images/9W.gif" class="flogos"  /> </div>
                        <div class="col-md-3 col-sm-3 col-xs-4 depart rightseperetor"><span class="cty_nam"> BLR </span><br><span class="dte_srt">23 Mar 18 20:30</span><span class="departplace">Bangalore</span> </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 time rightseperetor">
                          <div class="mints">45 min</div>
                          <div class="buleline"></div>
                          <div class="stops">1 Stop</div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 arive"><span class="cty_nam">MAA</span><br><span class="dte_srt">23 Mar 18 20:30</span>  <span class="departplace">Chennai</span> </div>
                      </div>
                    </div>
                    <div class="col-md-12 nopadright">
                      <hr />
                    </div>                                        
                    <div class="col-md-12 rbottom"> <span class="sdetails"><a class="bookview toggle-visibility" data-target="#view1">Flight details</a></span> <span class="frules">Fare Rules</span> <span class="fare_brk">Fare Breakdown </span>
                      <div class="viewmore" id="view1">
                        <hr>
                        <p> Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 fresultsprice">
                  <div  class="row">
                    <div class="col-md-12 col-sm-6 col-xs-6">
                      <div class="price"><span class="pricesine">$</span>654.00</div>
                      <div class="tprice">Refundable</div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-6">
                      <button class="btn redbtn">Select</button>
                    </div>
                  </div>
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

  // $("#time_out").mouseleave(function(){
  //   $(".timesFilter").css({"display": "none"});
  // });
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


  $(document).ready(function() {
    $('.advncebtn').click(function() {
        $(this).parent('.togleadvnce').toggleClass('open')
    });
    $('.totlall').click(function() {
        $('.roomcount').toggleClass("fadeinn")
    });
    $('.totlall, .roomcount').click(function(e) {
        e.stopPropagation()
    });

    $('.done1').click(function() {
       $('.roomcount').removeClass("fadeinn")
   });
    $(document).click(function() {
        $('.roomcount').removeClass("fadeinn")
    });
    $('.alladvnce').click(function() {
        $('.advncedown').removeClass("fadeinn");
        $(this).children('.advncedown').toggleClass("fadeinn")
    });
    $('.alladvnce, .advncedown').click(function(e) {
        e.stopPropagation()
    });
    $(document).click(function() {
        $('.advncedown').removeClass("fadeinn")
    });
    $('.btn-number').click(function(e) {
       
        e.preventDefault();
        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var current_pax_count_wrapper = $(this).closest('.pax-count-wrapper');        
        var input = $("input[name='" + fieldName + "']", current_pax_count_wrapper);
        var currentVal = parseInt(input.val()); 
       
        if (!isNaN(currentVal)) {
            if (type == 'minus') {
                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change()
                }
                if (parseInt(input.val()) == input.attr('min')) {}
            } else if (type == 'plus') {
                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change()
                }
                if (parseInt(input.val()) == input.attr('max')) {}
            }
       
            
        
        } else {
            input.val(0)
        }
        manage_infant_count(fieldName);
        var form_id = $(this).closest('form').attr('id');
        total_pax_count(form_id)
    });
    $('.input-number').focusin(function() {
        $(this).data('oldValue', $(this).val())
    });
    $('.input-number').change(function() {
        minValue = parseInt($(this).attr('min'));
        maxValue = parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());
        var current_pax_count_wrapper = $(this).closest('.pax-count-wrapper');
        name = $(this).attr('name');
        if (valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='" + name + "']", current_pax_count_wrapper).removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'))
        }
        if (valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='" + name + "']", current_pax_count_wrapper).removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'))
        }
    });
    $(".input-number").keydown(function(e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode >= 35 && e.keyCode <= 39)) {
            return
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault()
        }
    })
});

function total_pax_count(form_id) {
    if (form_id != '') {
        var pax_count = $('input.pax_count_value', 'form#' + form_id + ' div.pax_count_div').map(function() {
          if(this.value != '') {
            return parseInt(this.value)
          }
        }).get();
        var total_pax_count = 0;
        $.each(pax_count, function() {
            total_pax_count += this
        });
        if(total_pax_count > 1){
            $('#travel_text').text('Travellers');
        }
        else{
              $('#travel_text').text('Traveller');
        }
        $('.total_pax_count', 'form#' + form_id).empty().text(total_pax_count)
    }
}
  </script>

</body>
</html>
