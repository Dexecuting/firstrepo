<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 60%;
            padding: 14px 20px;
            font: size 1.6em;
            border-radius: 4px;
            border:2px, solid grey;
            margin: 8px 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<?php 
include_once ("includes/db_connect.php");
if(isset($_POST["save_details"])){
$Fullname  = mysqli_real_escape_string($conn, $_POST["fullname"]);
$Age = mysqli_real_escape_string($conn, $_POST["age"]);
$Pass  = mysqli_real_escape_string($conn,  $_POST["thibitisho"]);
$email   = mysqli_real_escape_string($conn, $_POST["email_address"]);
$Difficulty  = mysqli_real_escape_string($conn, $_POST["level"]);
$Subject_choice  = mysqli_real_escape_string($conn, $_POST["Choice"]);

$insert_message= "INSERT INTO messages (sender_name, sender_age, sender_pass, sender_email, sender_level,sender_subject, sender_text)
VALUES('$Fullname', '$Age', '$Pass',  '$Email_Address', '$Difficulty', '$Subject_choice' )";

if($conn->query($insert_message) === TRUE) {
    header ("Location: i.php");
    exit();
} else {
    echo "Error: " . $insert_message . "<br>" . $conn->error;
}
}
?>
    <h1>Forms</h1>
    <form actions="<?php print htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        <label for="Fn">Fullname:</label><br>
        <input type="text" name="fullname" placeholder="Fullname" required > <br><br>
        <input type="number" name="nambari"placeholder="Age" required ><br><br>
        <input type="password" name="thibitisho" placeholder="Pass" required ><br><br>
        <input type="email" name="email_address" placeholder="Email Address" required ><br><br>
        <input type="colour" placeholder=""><br><br>
        <input type="range" placeholder=""><br><br>

        <label for="Basic">Basic</label>
        <input type="radio" id="Basic" name="level" placeholder="">

        <label for="Intermediate">Intermediate</label>
        <input type="radio" id="Intermediate" name="level" placeholder="">

        <label for="Advanced">Advanced</label>
        <input type="radio" id="Advanced" name="level" placeholder="">

<br><br>
<input type="checkbox" id="Swahili" value="Swahili" name="Swahili">
<label for="Swahili">Swahili</label><br>
<input type="checkbox" id="English" value="English" name="English">
<label for="English">English</label><br>
<input type="checkbox" id="Spanish" value="Spanish" name="Spanish">
<label for="Spanish">Spanish</label><br>

<label for="sb">Subject</label><br>
<select name="subject_line" id="sb">
    <option value=""--->Select  Subject- </option>
    <option value="1">Email Support<option>
    <option value="2">e-learning support<option>
    <option value="3">AMS support<option>
    
</select>

    

<select name="gender_line"  id="">
    <option value="">----Select Gender-</option>
    <option value="1">Female</option>
    <option value="1">Male</option>
    <option value="1">Rather not say</option>
</select>   

<br><br>
<input type="submit" value="save details">

<br>
<br>
<br>
<br>
<br>
<br>

    </form>
</body>
</html>