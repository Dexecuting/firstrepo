<h1>Loops</h1>
<h4>While loop</h4>
<?php
//While loop
$init=0;
while($init < 10){
    print $init. "<br>";
    $init++;
}
?>
<h4>do-While loop</h4>
<?php
//d0-While loop-there will always be one iteration before this loop processes the condition
$i=110;
do{
    print $i. "<br>";
    $i++;
}while($i < 16);
?>
<h4>for loop</h4>
<?php
//for loop
for($s=45; $s<55; $s+=2){
    print $s. "<br>";
}
?>
<h4>foreach</h4>
<?php
$months=["January", "February", "March", "April", "May"];

foreach($months AS $month) {
    print $month. ", "; //or "<br>"
}

?>
<form action="">
    <select name="" id="">
        <option value="">--Months--</option>
        <?php
        foreach($months AS $month) {
            echo "<option value=''>$month</option>";
        }
        ?>
    </select>
    <select name="" id="">
        <option value="">--Years--</option>
        <?php
        $y=2015;
        while($y<2030){
            print"option value=''>$y</option>";
            $y++;
        }
        ?>
        </select>
    </form>
