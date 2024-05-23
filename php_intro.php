<?php
print "This is the first  lesson";
print "<br>";
echo 'Today is <span style="color: #FF0040;"> Monday</span>';//because we have double quotes outside we'll have single quotes inside
//placing a semi-colon at the end of a statement is referred to a termination
print '<br>';
print 1586;//This is an integer because it does not have quotes
print '<br>';
print "8976";//This is a string
print '<br>';
print "15+45";
print '<br>';
print 15+45;
print '<br>';
print date('l', strtotime("tomorrow"));
print '<br>';
print date('l', strtotime("+5 days"));
print '<br>';
print date('l');//Display current weekday
print '<br>';
date_default_timezone_set("Africa/Nairobi");
print "Today is: " . date('jS-F-Y, l H:i:s');
print '<br>';
$fname="Alex";//Creating/declaring a PHP variable
print $fname;
$yob="1999";
print '<br>';
$user_dob=$yob . "-05-24";
print '<br>';
$age=date('Y')-$yob;
print '<br>';
print $user_dob;
print '<br>';
$birthdate=new DateTime($user_dob);
$today=new DateTime('today');

$interval = $birthdate->diff($today);

echo '<pre>';
print_r($interval);
echo '</pre>';
print $fname . " was born on " . date('l, F jS Y', strtotime($user_dob));
print '<br>';
print $fname . " is " . $interval->y . " years " . $interval->m . " months  and " . $interval->d . " days old. " ;
$adult_age=18;
print '<br>';
if($age >= $adult_age){
    print $fname . " is an adult";
}else{
    print $fname . "is not an adult";
}
print '<br>';
//Variable characteristics
$lname="Okama";
print "His last name is $lname";//works
print '<br>';
print 'His last name is $lname';//won't  work with single quotes unless we concantenate
print '<br>';
print 'His last name is ' . $lname;//works as although there are single quotes  we have concatenated
print '<br>';
$pers ['lname']="Okama";
print $pers['lname'];
print '<br>';
define ('lname', 'Okama');
print lname;
?>