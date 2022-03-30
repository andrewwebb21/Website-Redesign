
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<html>
    <head>
      <script type="text/javascript">
        function CheckScheduler(val){
         var element=document.getElementById('scheduler');
         console.log(val)
         if(val=="Scheduled"){
           element.style.display='';
           console.log("ran Scheduled")
         }
         else{
           element.style.display='none';
           console.log("ran ADR")
         }
        }
      </script>

      <title>Smart Home Manager</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/uikit.min.css" />
      <script src="js/uikit.min.js"></script>
      <script src="js/uikit-icons.min.js"></script>
    </head>

    <body>

      <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
        <form>
          <fieldset class="uk-fieldset">

          <legend class="uk-legend">Light #1</legend>

          <div class="uk-margin" >
              <select class="uk-select" onload='CheckScheduler(this.value);' onchange='CheckScheduler(this.value);'>
                  <option value="Scheduled">Scheduled Time</option>
                  <option value="ADR">Automatic Demmand Response</option>
              </select>
          </div>
          <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Input" id="scheduler">
          </div>

          </fieldset>
        </form>
      </div>

    </body>
</html>
