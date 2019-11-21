<!DOCTYPE html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<title>WDV341 Intro PHP - Events Form</title>

<style>


#orderArea	

{

  border:thin solid black;

  padding:20px;

  margin:20px;

}


#orderArea h3	

{

  text-align:center;

  padding-bottom:20px;

}

.error	

{

	color:red;

	font-style:italic;	

}


</style>


<script>

$(document).ready(function() {

  $("textarea").keypress(function(event) {

    if(event.which == '13') {

      return false;

    }

  });

});

</script>


<?php 


  include("eventFormValidation.php");

  $formValidations = new validations();


  $event_name="";

  $event_presenter="";

  $event_description="";

  $event_date="";

  $event_time="";


  if( isset($_POST['submit']) )

	{

    //ASSIGNMENTS

    $event_name=$_POST["eventName"];

    $event_presenter=$_POST["eventPresenter"];

    $event_description=$_POST["eventDescription"];

    $event_date=$_POST["eventDate"];

    $event_time=$_POST["eventTime"];


    //INDIVIDUAL VALIDATIONS

    if($formValidations->validateName($event_name))

    {

      $name_validation="good";

    }

    else

    {

      $name_validation="bad";

      echo "<div class='error'>Event name is invalid</div>";

    }


    if($formValidations->validatePresenter($event_presenter))

    {

      $presenter_validation="good";

    }

    else

    {

      $presenter_validation="bad";

      echo "<div class='error'>Presenter name is invalid</div>";

    }


    if($formValidations->validateDescription($event_description))

    {

      $description_validation="good";

    }

    else

    {

      $description_validation="bad";

      echo "<div class='error'>Description is invalid</div>";

    }


    if($formValidations->validateDate($event_date))

    {

      $date_validation="good";

    }

    else

    {

      $date_validation="bad";

      echo "<div class='error'>Please enter a valid date</div>";

    }


    if($formValidations->validateTime($event_time))

    {

      $time_validation="good";

    }

    else

    {

      $date_validation="bad";

      echo "<div class='error'>Please enter a valid time</div>";

    }

    //VALIDATION CHECKER

    if($name_validation=="good"&&$presenter_validation=="good"&&$description_validation=="good"&&$date_validation=="good"&&$time_validation=="good")

    {

        $serverName = "localhost";

        $database = "wdv341";

        $username = "root";

        $password = "root";


        try 

        {

            $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }


        catch(PDOException $e)

        {

            echo "Connection failed: " . $e->getMessage();

        }


        $sql = "INSERT INTO wdv341 (event_name,event_presenter,event_description,event_date,event_time) VALUES ('$event_name','$event_presenter','$event_description','$event_date','$event_time')";


        $statementObject=$conn->prepare($sql);

    
        $statementObject->execute();


        echo "<span style='color:red;'>The form has been successfully submitted</span>";

    }

  }

?>

</head>


<body>


<div id="orderArea">

<form name="form3" method="post" action="">

  <h3>Event Registration Form</h3>


      <p>

        <label for="eventName">Event Name: </label>

        <input type="text" name="eventName" value="<?php echo $event_name; ?>">

        <input type="text" name="eventName_" style="display:none;" value="<?php echo $event_name; ?>">

      </p>


      <p>

        <label for="eventPresenter">Presenter Name: </label>

        <input type="text" name="eventPresenter" value="<?php echo $event_presenter; ?>">

        <input type="text" name="eventPresenter_" style="display:none;" value="<?php echo $event_presenter; ?>">

      </p>


      <p>

        <label for="eventDescription">Description: </label>

        <textarea name="eventDescription" cols="40" rows="5" maxlength="200"><?php if (isset($_POST['eventDescription'])){echo $event_description;}?></textarea>

        <textarea name="eventDescription_" style="display:none;" cols="40" rows="5" maxlength="200"><?php if (isset($_POST['eventDescription'])){echo $event_description;}?></textarea>

      </p>


      <p>

        <label for="eventDate">Date (yyyy-mm-dd format): </label>

        <input type="text" name="eventDate" value="<?php echo $event_date; ?>">

        <input type="text" name="eventDate_" style="display:none;" value="<?php echo $event_date; ?>">

      </p>


      <p>

        <label for="eventTime">Time (hh:mm format): </label>

        <input type="text" name="eventTime" value="<?php echo $event_time; ?>">

        <input type="text" name="eventTime_" style="display:none;" value="<?php echo $event_time; ?>">

      </p>

  <p>

    <input type="submit" name="submit" value="Submit">

    <input type="submit" name="submit_" value="Submit_" style="display:none;">


    <input type="reset" value="Reset" onclick="clearForm()">


    <p style="color:red;"></p>

  </p>

</form>


</div>


</body>

</html>
