<?php
class event{
    
     public $name;
     public $sdate;
     public $edate;
     public $location;
     public $summary;
     public $plink;
     public $logo;
     public $elink;
    
    
    public function __construct($name,$sdate,$edate,$location,$summary,$plink,$elink,$logo) {
        
        $this->name = $name;
        $this->sdate = $sdate;
        $this->edate = $edate;
        $this->location = $location;
        $this->summary = $summary;
        $this->plink = $plink;
        $this->elink = $elink;
        $this->logo = $logo;
    }
    
    
    public function display_event(){
        echo '   <div class="events">
             <div class="summary">
                <p>' . $this->summary . '</p>
            </div>
            <div class="evalues">
                <p class="title">' . $this->name . '</p>
                <p class="date">' . $this->sdate . ' - ' . $this->edate .'</p>
               <p><a href="pickadate.php?location=' . $this->location .   '&name='. $this->name .    '  ">Find a hotel nearby.</a></p>
                 <p><a href="' . $this->elink . '" target="_blank">Go to event page..</a></p>
            </div>
            <div class="eimage" >
                    <img class="event_img" src="' . $this->logo . '">
            </div>

             <div class="seemore">
                <i class="fa fa-info"></i>
            </div>
            <div class="location">
              <p>' . $this->location . '</p>
            </div>


        
        </div>';
    }
    
    
}