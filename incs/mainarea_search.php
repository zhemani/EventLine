<section id="mainarea">
    <div id="events_wrapper">
<?php
//include('simple_html_dom.php');





if($_GET['general_search'] == ""){
    echo "Please input something to search";
}
else {

    //echo $_GET['general_search'];
    $searchkey = $_GET['general_search'];

    $searchkey = str_replace(' ', '%20', $searchkey);


    $startdate = $_GET['start_date'];
    $enddate = $_GET['end_date'];


    $startdate = str_replace('/', '-', $startdate);
    $enddate = str_replace('/', '-', $enddate);

    $temp = substr($startdate, 0, 5);
    $temp2 = substr($enddate, 0, 5);

    $temp3 = substr($startdate, 6, 10);
    $temp4 = substr($enddate, 6, 10);

    $startdate = $temp3 . '-' . $temp . 'T00:00:00Z';
    $enddate = $temp4 . '-' . $temp2 . 'T00:00:00Z';


   // $startdate = "2015-11-20T00:00:00Z";
    //$enddate = "2015-12-29T00:00:00Z";




//    $json = file_get_contents('https://www.eventbriteapi.com/v3/events/search/?q=christmas&popular=on&token=XEMRMDS4TVNXZWO7GIWH');
//    $obj = json_decode($json);
//    echo $obj->access_token;

    //$url = 'https://www.eventbriteapi.com/v3/events/search/?q=' . $searchkey . '&popular=on&start_date.range_start=' . $startdate . '&start_date.range_end=' . $enddate . '&token=F4A2DRXYN3WCFE5VJJCW';
    $url = 'https://www.eventbriteapi.com/v3/events/search/?q=' . $searchkey . '&popular=on&start_date.range_start=' . $startdate . '&start_date.range_end=' . $enddate . '&token=BTZIXLON5LE3S4HGCFXK';
    //  Initiate curl
    $ch = curl_init();
// Disable SSL verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
    curl_setopt($ch, CURLOPT_URL, $url);
// Execute
    $result = curl_exec($ch);
// Closing
    curl_close($ch);

// Will dump a beauty json :3
//var_dump(json_decode($result, true));
    $obj = json_decode($result, true);

//    echo $obj['events']->name;
//foreach ( $obj->events->name as $name) {
//   echo $name;
//}

//var_dump($obj);    
    $name;
    $sdate;
    $edate;
    $location;
    $summary;
    $elink;
    $logo;

    $events = array();

    echo '<p id="date_title"> Date range  ' . $_GET['start_date'] . " - " . $_GET['end_date'] . '</p>';

    $x = 0;
    if (isset($obj['events'])) {


        foreach ($obj['events'] as $event) {


            $name = $obj['events'][$x]['name']['text'];
            $sdate = $obj['events'][$x]['start']['local'];
            $edate = $obj['events'][$x]['end']['local'];
            $summary = $obj['events'][$x]['description']['text'];
            $logo = $obj['events'][$x]['logo']['url'];
            $elink = $obj['events'][$x]['url'];
            $plink = "Click";
            $location_number = $obj['events'][$x]['venue_id'];



            $sdate = str_replace('T', ' ', $sdate);
            $edate = str_replace('T', ' ', $edate);



            $sdate = substr($sdate, 0, 16);
            $edate = substr($edate, 0, 16);


            //$url1 = "https://www.eventbriteapi.com/v3/venues/" . $location_number . "/?token=F4A2DRXYN3WCFE5VJJCW";
            $url1 = "https://www.eventbriteapi.com/v3/venues/" . $location_number . "/?token=BTZIXLON5LE3S4HGCFXK";
            //  Initiate curl
            $ch1 = curl_init();
// Disable SSL verification
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
// Set the url
            curl_setopt($ch1, CURLOPT_URL, $url1);
// Execute
            $result1 = curl_exec($ch1);
// Closing
            curl_close($ch1);

// Will dump a beauty json :3
//var_dump(json_decode($result, true));
            $obj1 = json_decode($result1, true);
            //var_dump($obj1);
            $address1 = $obj1['address']['address_1'];
            $address2 = $obj1['address']['city'];
            $address3 = $obj1['address']['region'];
            $address4 = $obj1['name'];
            $location = $address2 . ', ' . $address3 . ',  ' . $address4 . ', ' . $address1;


            // echo $location;


            $eventx = new event($name, $sdate, $edate, $location, $summary, $plink, $elink, $logo);
            $events[] = $eventx;

            //echo "boo";
            $eventx->display_event();
            //echo $location;
            //echo " " . "\xA";
            $x++;

            if ($x == 10) break;

        }

        //echo $events[3]->$logo;
        $y = 0;
//    foreach($events as $event){
//        $event->display_event();
//        if($y == 5 ) break;
//    }


        //echo $event->elink;


    } else {
        echo '<p>Sorry there are no events in the given date range.</p>';
    }
}
?>




    </div>

<section/>
