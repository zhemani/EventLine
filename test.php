<?php

$pagetitle = "Liby.io";

include 'incs/header.php';

echo '<div id="wrapper">';

    include 'incs/searcharea.php';



?>

   <section id="mainarea">

       <?php
//       $url1 = "https://www.priceline.com/pws/v0/stay/retail/listing/toronto?rguid=3459hjdfdf&check-in=20151201&check-out=20151202&searchTerm=62%20Herbert%20Wales%20Cresent&max-price=150&rooms=1&sort=HDR&offset=0&page-size=5";
//       //  Initiate curl
//       $ch1 = curl_init();
//       // Disable SSL verification
//       curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
//       // Will return the response, if false it print the response
//       curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
//       // Set the url
//       curl_setopt($ch1, CURLOPT_URL, $url1);
//       // Execute
//       $result1 = curl_exec($ch1);
//       // Closing
//       curl_close($ch1);
//
//       // Will dump a beauty json :3
//
//       $obj1 = json_decode($result1, true);
//       //var_dump($obj1);
//
//       $x = 0;
//       if (isset($obj1['hotels'])) {
//
//
//           foreach ($obj1['hotels'] as $hotel) {
//
//
//               $name = $obj1['hotels'][$x]['name'];
////        $sdate = $obj['events'][$x]['start']['local'];
////        $edate = $obj['events'][$x]['end']['local'];
////        $summary = $obj['events'][$x]['description']['text'];
////        $logo = $obj['events'][$x]['logo']['url'];
////        $elink = $obj['events'][$x]['url'];
//
//               echo $name;
//               $x++;
//
//           }
//       }
       ?>



<p>This is the main area.</p>

           <div id="hotels_wrapper">


        <div class="hotels">
            <div class="summary_hotels">
                <p>Get ready to Socialise, Network, Dance  party with us Sat. 14th November for our grand Autumn Party II our last opportunity to enjoy the Heated gardens perhaps a BBQ outside before the weather turns to cold.
Located 100 feet above Kensington High Street, the Roof Gardens is as glamorous as it comes. SILVER PIANO BAR exclusively for us till 10pm with complimentary Cocktail reception.</p>
            </div>
            <div class="hvalues">
                <p class="htitle">Christmas kdadasdasdasdadassd;klasdk;lasj gfdhdfhasdasdasfgdas</p>
                <p class="hdate">Starting from <span class="bolder" style="font-size: 30px;"> $129 </span></p>
                <p style="margin-top: -18px;">Hotel Rating: <span class="bolder" style="font-size: 19px;"> 4.5/5 </span></p>
                <p>Click to book hotel now!</p>
            </div>
            <div class="himage">
                <img class="hotel_img" src="https://img.evbuc.com/http%3A%2F%2Fcdn.evbuc.com%2Fimages%2F8142917%2F21971803490%2F1%2Foriginal.jpg?h=200&w=450&s=72923ae87955faa688a3419e83543eaf">
            </div>

            <div class="hseemore">
                <i class="fa fa-info"></i>
            </div>
            <div class="hlocation">
              <p>  Drive BC Pacific Gateway Hotel 3500 Cessna Drive BC Pacific Gateway Hotel1455 Queasdmnbvasdajgsvbec</p>
            </div>

        </div>

                       <div class="events">
                        <div class="summary">
                <p>Get ready to Socialise, Network, Dance  party with us Sat. 14th November for our grand Autumn Party II our last opportunity to enjoy the Heated gardens perhaps a BBQ outside before the weather turns to cold.
Located 100 feet above Kensington High Street, the Roof Gardens is as glamorous as it comes. SILVER PIANO BAR exclusively for us till 10pm with complimentary Cocktail reception.</p>
            </div>
            <div class="evalues">
                <p class="title">Christmas kdadasdasdasdadassd;klasdk;lasj gfdhdfhasdasdasfgdas</p>
                <p class="date">12 Sep 2015 - 13 Sep 2015</p>
                <p><a href="#">Find a hotel nearby.</a></p>
                <p>Go to event page.</p>
            </div>
            <div class="eimage" >
                <img class="event_img" src="https://img.evbuc.com/http%3A%2F%2Fcdn.evbuc.com%2Fimages%2F8142917%2F21971803490%2F1%2Foriginal.jpg?h=200&w=450&s=72923ae87955faa688a3419e83543eaf">
            </div>

            <div class="seemore">
                <i class="fa fa-info"></i>
            </div>

        </div>

                       <div class="events">
                        <div class="summary">
                <p>Get ready to Socialise, Network, Dance  party with us Sat. 14th November for our grand Autumn Party II our last opportunity to enjoy the Heated gardens perhaps a BBQ outside before the weather turns to cold.
Located 100 feet above Kensington High Street, the Roof Gardens is as glamorous as it comes. SILVER PIANO BAR exclusively for us till 10pm with complimentary Cocktail reception.</p>
            </div>
            <div class="evalues">
                <p class="title">Christmas kdadasdasdasdadassd;klasdk;lasj gfdhdfhasdasdasfgdas</p>
                <p class="date">12 Sep 2015 - 13 Sep 2015</p>
                <p>Find a hotel nearby.</p>
                <p>Go to event page.</p>
            </div>
            <div class="eimage" >
            </div>

            <div class="seemore">
                <i class="fa fa-info"></i>
            </div>

        </div>


    </div>
    
</section>


<?php
echo '</div>';

include 'incs/footer.php';

?>