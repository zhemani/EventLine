<?php
class hotel{

    public $name;
    public $address;
    public $city;
    public $province;
    public $country;
    public $price;
    public $logo;
    public $star_rating;
    public $hotel_id;
    public $book_url;
    public $summary;


    public function __construct($name,$address,$city,$province,$country,$price,$logo,$star_rating,$hotel_id,$book_url,$summary) {

        $this->name = $name;
        $this->address = $address;
        $this->city = $city;
        $this->province = $province;
        $this->country = $country;
        $this->price = $price;
        $this->logo = $logo;
        $this->star_rating = $star_rating;
        $this->hotel_id = $hotel_id;
        $this->book_url = $book_url;
        $this->summary = $summary;

    }


    public function display_hotel(){

        echo '   <a href="' . $this->book_url . '" target=_blank>        <div class="hotels">
            <div class="summary_hotels">
                <p>' .$this->summary . '</div>
            <div class="hvalues">
                <p class="htitle">' .$this->name . '</p>
                <p class="hdate">Starting from <span class="bolder" style="font-size: 30px;">$' .$this->price . '</span></p>
                <p style="margin-top: -18px;">Hotel Rating: <span class="bolder" style="font-size: 19px;">' .$this->star_rating . '</span></p>
                <p>Click to book hotel now!</p>
            </div>
            <div class="himage">
                <img class="hotel_img" src="' .$this->logo . '">
            </div>

            <div class="hseemore">
                <i class="fa fa-info"></i>
            </div>
            <div class="hlocation">
              <p>' .$this->city . $this->province . $this->country . $this->address . '</p>
            </div>
            </div></a>';
    }


}