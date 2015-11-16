<section id="mainarea">

    <div id="events_wrapper">

<?php
    $location = $_SESSION['location'];
    $checkindate = $_GET['check_in_date'];
    $checkoutdate = $_GET['check_out_date'];

echo '<p id="date_title"> Date range  ' . $_GET['check_in_date'] . " - " . $_GET['check_out_date'] . '</p>';

//$city = substr($location, 0, strpos($location, ','));
//echo $city;

list($city, $region, $name, $address) = explode(',',$location);

$city = str_replace(' ', '%20', $city);
$region = str_replace(' ', '', $region);



$address = str_replace(' ', '%20', $address);
//echo $address;

$temp = substr($checkindate, 0, 6);
$temp2 = substr($checkindate, 6, 11);
$temp3 = $temp2 . $temp;
$checkindate1 = str_replace('/', '', $temp3);

$tempx = substr($checkoutdate, 0, 6);
$temp2x = substr($checkoutdate, 6, 11);
$temp3x = $temp2x . $tempx;
$checkoutdate1 = str_replace('/', '', $temp3x);

$checkindate = str_replace('/', '-', $checkindate);
$checkoutdate = str_replace('/', '-', $checkoutdate);

//echo $checkindate;
//echo $checkoutdate;

$tempm = substr($checkindate, 5, 10);
$tempn = substr($checkindate,0,5);
$tempm = str_replace('-', '', $tempm);
$checkindate = $tempm .'-' . $tempn;

$tempm = substr($checkoutdate, 5, 10);
$tempn = substr($checkoutdate,0,5);
$tempm = str_replace('-', '', $tempm);
$checkoutdate = $tempm .'-' . $tempn;

//echo '<br/>';
//echo $checkindate;
//echo $checkoutdate;




$url1 = "https://www.priceline.com/pws/v0/stay/retail/listing/". $city . "?rguid=3459hjdfdf&check-in=".$checkindate1 ."&check-out=".$checkoutdate1 ."&max-price=".$filter1a."&min-price=".$filter1b."&star-ratings=".$filter1c."&searchTerm=".$address ."&rooms=1&sort=HDR&offset=0&page-size=5";
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

$obj1 = json_decode($result1, true);
//var_dump($obj1);

$name;
$address;
$city;
$province;
$country;
$price;
$logo;
$star_rating;
$hotel_id;
$book_url;
$summary;
//$amenities

$x = 0;
if (isset($obj1['hotels'])) {


    foreach ($obj1['hotels'] as $hotel) {


        $name = $obj1['hotels'][$x]['name'];
        $price = $obj1['hotels'][$x]['ratesSummary']['minPrice'];
        $logo = $obj1['hotels'][$x]['thumbnailUrl'];
        $star_rating = $obj1['hotels'][$x]['starRating'];
        $hotel_id = $obj1['hotels'][$x]['hotelId'];
        $address = $obj1['hotels'][$x]['location']['address']['addressLine1'];
        $city = $obj1['hotels'][$x]['location']['address']['cityName'];
        $province = $obj1['hotels'][$x]['location']['address']['provinceCode'];
        $country = $obj1['hotels'][$x]['location']['address']['countryName'];

        $url2 = "http://www.priceline.com/pws/v0/stay/retail/listing/detail/".$hotel_id."?check-in=".$checkindate1."&check-out=".$checkoutdate1;
//  Initiate curl
        $ch2 = curl_init();
// Disable SSL verification
        curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
// Set the url
        curl_setopt($ch2, CURLOPT_URL, $url2);
// Execute
        $result2 = curl_exec($ch2);
// Closing
        curl_close($ch2);

// Will dump a beauty json :3

        $obj2 = json_decode($result2, true);

        $summary = $obj2['hotel']['description'];







//        $tempm = substr($checkindate,0,2);
//        $tempd = substr($checkindate,3,5);
//        $tempy = substr($checkindate,6,10);
//
//        $checkindate = $tempy . '-' . $tempm . '-' . $tempd;
//
//        $tempm = substr($checkoutdate,0,2);
//        $tempd = substr($checkoutdate,4,6);
//        $tempy = substr($checkoutdate,6,10);
//
//        $checkoutdate = $tempy . '-' . $tempm . '-' . $tempd;

        $book_url = "https://www.priceline.com/m/stay/retail-hotels/details/city/".$city.",".$province."/".$hotel_id."/".$hotel_id."/".$checkindate."/".$checkoutdate."/1";



        https://www.priceline.com/m/stay/retail-hotels/details/city/Atlanta,GA/2419505/2419505/2015-12-20/2015-12-21/1
        //$amenities = $obj1['hotels'][$x]['hotelFeatures']['hotelAmenityCodes'];

//        $sdate = $obj['events'][$x]['start']['local'];
//        $edate = $obj['events'][$x]['end']['local'];
//        $summary = $obj['events'][$x]['description']['text'];
//        $logo = $obj['events'][$x]['logo']['url'];
//        $elink = $obj['events'][$x]['url'];

        $thotel = new hotel($name,$address,$city,$province,$country,$price,$logo,$star_rating,$hotel_id,$book_url,$summary);

        $thotel->display_hotel();
        //echo $name;
        $x++;

        $loc = $address . ',' . $city . ',' . $province;
        array_push($_SESSION['locarray'], $loc);
        array_push($_SESSION['locarray'], $name);
        //echo $_SESSION['locarray'][$x];

    }
}

?>


</div>
</section>