<?php

$filter1a = "";
$filter1b = "";

if($_POST){
    $eventloc = $_SESSION['locarray'][0];
    $eventname = $_SESSION['locarray'][1];

    unset($_SESSION['locarray']);

    $locarray = array();
    $_SESSION['locarray'] = $locarray;



    array_push($_SESSION['locarray'], $eventloc);
    array_push($_SESSION['locarray'], $eventname);

}

if(isset($_POST['pricerange'])){


if($_POST['pricerange'] == 'l100'){
    $filter1a = 100;
}
elseif($_POST['pricerange'] == 'l150'){
    $filter1a = 150;
}
elseif($_POST['pricerange'] == 'l200'){
    $filter1a = 200;
}
elseif($_POST['pricerange'] == 'l300'){
    $filter1a = 300;
}
elseif($_POST['pricerange'] == 'l500'){
    $filter1a = 500;
}
elseif($_POST['pricerange'] == 'l600'){
    $filter1a = 600;
}
elseif($_POST['pricerange'] == 'l800'){
    $filter1a = 800;
}
elseif($_POST['pricerange'] == 'l1000'){
    $filter1a = 1000;
}
elseif($_POST['pricerange'] == 'm1000'){
    $filter1b = 1000;
}

}


$filter1c = "";

if(isset($_POST['starrank'])){
    if($_POST['starrank'] == '1s'){
        $filter1c = "0,0.5,1";
    }
    elseif($_POST['starrank'] == '2s'){
        $filter1c = "1,1.5,2";
    }
    elseif($_POST['starrank'] == '3s'){
        $filter1c = "2,2.5,3";
    }
    elseif($_POST['starrank'] == '4s'){
        $filter1c = "3,3.5,4";
    }
    elseif($_POST['starrank'] == '5s'){
        $filter1c = "4,4.5,5";
    }
}


$filter1d = "";

if(isset($_POST['test2'])) {
    $filter1d = ",BUSCNTR" . $filter1d;
}
if(isset($_POST['test3'])) {
    $filter1d = ",AIRSHUTTL" . $filter1d;
}
if(isset($_POST['test4'])) {
    $filter1d = ",FITSPA,FINTRRM" . $filter1d;
}
if(isset($_POST['test5'])) {
    $filter1d = ",RESTRNT" . $filter1d;
}
if(isset($_POST['test6'])) {
    $filter1d = ",NSMKFAC" . $filter1d;
}
if(isset($_POST['test7'])) {
    $filter1d = ",HANDFAC" . $filter1d;
}
if(isset($_POST['test9'])) {
    $filter1d = ",FPRKING" . $filter1d;
}
if(isset($_POST['test10'])) {
    $filter1d = ",SPOOLIN" . $filter1d;
}
if(isset($_POST['test11'])) {
    $filter1d = ",SPOOLOUT" . $filter1d;
}

if($filter1d != "") $filter1d = substr($filter1d,1,strlen($filter1d));

echo $filter1d;
?>

<section id="searcharea">
    <div id="tabContainer">
        <div id="tabs">

            <ul id="tabsul">
                <li id="tabHeader_1">Search</li>
                <li id="tabHeader_2" style="position: fixed; visibility: hidden;"></li>
            </ul>

        </div>
        <div id="tabs_wrapper">
            <div id="down" draggable="true">

            </div>
                <span id="tabscontent">
                    <span class="tabpage" id="tabpage_1" style="display:none;">

	                   <div class="searchbooks">

                           <form action="search.php" id="searchbookform">

                               <div>
                                   <input id="gensearch" type="text" name="general_search" placeholder="General Search" maxlength="100"/>
                               </div>



                               <p>Start Date: <input type="text" id="datepicker" name="start_date"></p>
                               <p>End Date: <input type="text" id="datepicker1" name="end_date"></p>


                               <div id="searchsubmit">
                                   <input type="submit" name="search_book" value="Search"/>
                               </div>
                           </form>
                       </div>

                        <div id="filters">
                            <p id="tabHeader_1" style="margin-left: 10px;">Filter</p>
                        <form method="post">
                            <div id="price_range">


                                <select name="pricerange">
                                    <option value="prange">Price Range</option>
                                    <option value="m1000">>1000</option>
                                    <option value="l1000"><1000</option>
                                    <option value="l800"><800</option>
                                    <option value="l600"><600</option>
                                    <option value="l500"><500</option>
                                    <option value="l300"><300</option>
                                    <option value="l200"><200</option>
                                    <option value="l150"><150</option>
                                    <option value="l100"><100</option>
                                </select>
                            </div>

                            <div id="star_rank">
                                <select name="starrank">
                                    <option value="srank">Star Rank</option>
                                    <option value="1s">0-1</option>
                                    <option value="2s">1-2</option>
                                    <option value="3s">2-3</option>
                                    <option value="4s">3-4</option>
                                    <option value="5s">4-5</option>
                                </select>


                            </div>

                            <div id="amenities">

                                <input type="checkbox" name="test2" value="bizcntr"> Business Center<br>
                                <input type="checkbox" name="test3" value="airshut"> Airport Shuttle<br>
                                <input type="checkbox" name="test4" value="fitspa"> Fitness Center/Room<br>
                                <input type="checkbox" name="test5" value="restrnt"> Restaurant <br>
                                <input type="checkbox" name="test6" value="nosmoke"> No Smoking Rooms<br>
                                <input type="checkbox" name="test7" value="hndcp"> Handicapped Rooms<br>
                                <input type="checkbox" name="test9" value="parking"> Free Parking<br>
                                <input type="checkbox" name="test10" value="poolin"> Indoor Pool<br>
                                <input type="checkbox" name="test11" value="poolout"> Outdoor Pool<br>


                            </div>
                            <input type="submit" value="Submit" id="filter_submit">
                            </form>
                        </div>

                    <p class="seemap"><a href="map.php" target="_blank"><i class="fa fa-map-marker"></i> See map view</a> </p>

                </span>
        </div>
    </div>
    <p>
        <?php
        if(isset($errors['nobookname'])){
            echo $errors['nobookname'];
        }
        ?>
    </p>
</section>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });

    $(function() {
        $( "#datepicker1" ).datepicker();
    });
</script>