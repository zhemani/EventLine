<?php 


if(isset($_POST['add_book'])){
   $submitbutton = $_POST['add_book'];
}

if (isset($submitbutton)){

    //echo "Button pressed";
    
    
    if(!isset($_POST['book_name']) || strlen(trim($_POST['book_name'])) == 0){
        $errors['nobookname'] = 'You have to input a book name.';
    }
    
    else{
   
        $bname = trim($_POST['book_name']);
        $bgenre = trim($_POST['genre']);
        $bauthor = trim($_POST['author']);
        $bpublisher = trim($_POST['publisher']);
        $blocation = trim($_POST['location']);
        $bbook_id = $i;
    
        $newbook = new book($user_id,$bname,$bauthor,$bgenre,$bpublisher,$blocation,$bbook_id);
        
        
        if($user->addbook($user_id,$newbook)){
            $check = true;
            $lastbookadded['name'] = $bname;
            $lastbookadded['genre'] = $bgenre;
            $lastbookadded['author'] = $bauthor;
            $lastbookadded['publisher'] = $bpublisher;
            $lastbookadded['location'] = $blocation;
            $_SESSION['lastbookadded'] = $lastbookadded;
            header('Location: newbook.php');
            exit();
         }
        else {
            $check = false;
        }
    }
    
}
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
		  
                    </span>
                    <span class="tabpage" id="tabpage_2" style="display:none;">
                        <div class="searchbooks">
	                   	
	                   	<form action="home.php" method="post" id="searchbookform">
	                   		<div>
	                   			<input type="text" name="book_name" placeholder="Book Name" maxlength="120" required/>
	                   		</div> 
                                   
	                   		<div>
	                   			<input type="text" name="author" placeholder="Author" maxlength="100"/>

	                   		</div>
                                   
	                   		<div>
	                   			<input type="text" name="genre" placeholder="Genre" maxlength="40"/>
	                   		</div>
	                   		
                            <div>
	                   			<input type="text" name="publisher" placeholder="Publisher" maxlength="40"/>
	                   		</div>
                                   
	                   		<div>
	                   			<input type="text" name="location" placeholder="Location" maxlength="40"/>
	                   		</div>
                                   
	                   		<div id="addsubmit">
	                   			<input type="submit" name="add_book" value="Add"/>
	                   		</div>
	                   	</form>
	                   </div>
                          

	               </span>
                    
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