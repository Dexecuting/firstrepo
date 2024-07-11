<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Document</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body onload="startTime();">
        <div id="demo">Here</div>

        <script>
            document.getElementById("demo").innerHTML = "My first JS code";
        </script>
        <br>
        <br>
        <button onclick="document.getElementById('myImg').src='images/bulb on.jpg'">Turn on</button>
        <img src="images/bulb on.jpg" alt="" id="myImg" width="200px" >
        
        <button onclick="document.getElementById('myImg').src='images/bulb off.jpg'">Turn off</button>
        <br>
        <br>
        <a href=""onclick="return confirm('Are you sure?')">Delete</a>
        <br>
        <br>

        <script>
            document.write(5-2);
        </script>
        <br>
        <br>

        <script>
            window.alert('Record created')
        </script>
        <br>
        <br>

        <script>
            console.log(45-12);
        </script>

        <button onclick="window.print();">Print this page</button>

        <script>
            let myAge = 45;
            const fullname = 'Alex Okama'
            document.write(fullname + ' is ' + myAge + 'years old.');
        </script>
        <br>
        <br>

        <script>
            var firstname = prompt('What is your first name?');
            document.write(firstname);
        </script>
<br>
<?php
    date_default_timezone_set ("Africa/Nairobi");
    print "Static timer: " . date("H:i:s");
?>
 <script>
    
     

 </script>
 <br>
 Dynamic time:
 <span id="txt"></span>
 

 <script src="js/script.js"></script>
    </body>
</html>