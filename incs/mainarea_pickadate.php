<section id="mainarea">

    <?php

    $locarray = array();


    $_SESSION['locarray'] = $locarray;



    array_push($_SESSION['locarray'], $_GET['location']);
    array_push($_SESSION['locarray'], $_GET['name']);
   // echo $_GET['location'];
    $_SESSION['location'] =  $_GET['location'];
   // echo $_GET['name'];
    ?>
    <p id="event_name_big">
        <?php echo $_GET['name']; ?>
    </p>

    <br>
    <hr>

<br>
    <h2>Please choose your check in and check out date.</h2>
    <div id="date_form">
        <form action="hotels.php">

            <div id="cin">

                <p>Check In Date:</p>
                <input type="text" id="datepicker3" name="check_in_date">

            </div>

            <div id="cout">
                <p >Check Out Date: </p>
                <input type="text" id="datepicker4" name="check_out_date">

            </div>



            <input class="datebtn" type="submit">


        </form>

    </div>

</section>
<script>
    $(function() {
        $( "#datepicker3" ).datepicker();
    });

    $(function() {
        $( "#datepicker4" ).datepicker();
    });
</script>