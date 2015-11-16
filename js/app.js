$( document ).ready(function() {
    
    
    
    $( "#gensearch" ).focus(function() {
         var field= document.getElementById('spesificsearch');
        field.value= '';
    });
    
    $( "#spesificsearch" ).focus(function() {
         var field= document.getElementById('gensearch');
        field.value= '';
    });
    
        
    
    $( "#mainarea .events .seemore" ).hover(
        function() {
            //alert("dada");

            $(this).siblings('.summary').css({"visibility": "visible", "position": "relative"});
            $(this).siblings('.summary').css({"display": "inline-block", "position": "relative"});
             $(this).siblings('.eimage').css({"visibility": "hidden", "position": "fixed"});
             $(this).siblings('.evalues').css({"visibility": "hidden"  , "position": "fixed"});
            $(this).siblings('.location').css({"visibility": "hidden"  , "position": "fixed"});

        }, function() {
           $(this).siblings('.summary').css({"visibility": "hidden", "position": "fixed"});
             $(this).siblings('.eimage').css({"visibility": "visible", "position": "relative"});
             $(this).siblings('.evalues').css({"visibility": "visible", "position": "relative"});
            $(this).siblings('.location').css({"visibility": "visible", "position": "relative"});
        }
    );


    $( "#mainarea .hotels .hseemore" ).hover(
        function() {
            //alert("dada");

            $(this).siblings('.summary_hotels').css({"visibility": "visible", "position": "relative"});
            $(this).siblings('.summary_hotels').css({"display": "inline-block", "position": "relative"});
            $(this).siblings('.himage').css({"visibility": "hidden", "position": "fixed"});
            $(this).siblings('.hvalues').css({"visibility": "hidden"  , "position": "fixed"});
            $(this).siblings('.hlocation').css({"visibility": "hidden"  , "position": "fixed"});

        }, function() {
            $(this).siblings('.summary_hotels').css({"visibility": "hidden", "position": "fixed"});
            $(this).siblings('.himage').css({"visibility": "visible", "position": "relative"});
            $(this).siblings('.hvalues').css({"visibility": "visible", "position": "relative"});
            $(this).siblings('.hlocation').css({"visibility": "visible", "position": "relative"});
        }
    );
   
    
   $('#down').on('click',function(){
       if($('#tabs_wrapper').css('height') == "0px"){
            $('#tabs_wrapper').css({"height": "280px", "visibility": "visible"});
            $('#searcharea').animate({"height": "380px"},300);
            $(this).css({"transform": "rotate(180deg)"});
           //alert($(window).innerWidth());
       }
       else{
            $('#tabs_wrapper').css({"height": "0px", "visibility": "hidden"});
            $('#searcharea').animate({"height": "100px"},300);
            $(this).css({"transform": "rotate(360deg)"});
       }

       
    });
    
    
        $('#tabsul').on('click',function(){
            if($(window).innerWidth() > 766 ){
            }
            else{
                $('#tabs_wrapper').css({"height": "280px", "visibility": "visible"});
                $('#searcharea').animate({"height": "380px"},300);
                $('#down').css({"transform": "rotate(180deg)"});  
            }
        });
    
    
    
    window.onresize = function(event) {
        if($(window).innerWidth() > 766 ){
             $('#tabs_wrapper').css({"height": "90%", "visibility": "visible"});
        }
        else{
             //$('#tabs_wrapper').css({"height": "0px", "visibility": "hidden"});
        }
    };
  
    
    
    //Outside click
    $('body').click(function(){
        $('#bookmain .book_info_wrapper .book_info_edit').css({"position": "fixed", "visibility": "hidden"});
        
       
        
        
    });
    
   

});