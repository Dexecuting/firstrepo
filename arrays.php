<h1>Arrays</h1>
<?php
//Indexed or numeric arrays

$fnames=["Alex", "Peter", "James"];

//printing arrays syntax
print_r($fnames);

echo '<br>';

 $colors=array("Black", "Green");
?>

<pre>
    <?php print_r($colors); ?>
</pre>
<?php print $fnames[1];  ?>


//Associative Arrays
<?php
$user=[
 "fullname"=> "Alex Okama",
 "email"=>"AOkama@yahoo.com",
 "phone"=>"+25467" 
    ];
    ?>

<pre>
    <?php print_r($user); ?>
</pre>


//Multidimentional Arrays
<?php
$user_details=[
    "Director" => array(
        "fullname"=> "Alex Okama",
 "email"=>"AOkama@yahoo.com",
 "address"=> "Mada",
 "phone"=>[
    "Mobile"=>"+25496782",
    "Work"=>"+2569346639",
    "Cell"=>"+2548956297"
    ]
    ),  
    "Manager" => array(
        "fullname"=> "Peter Okama",
 "email"=>"POkama@yahoo.com",
 "address"=> "Mada",
 "phone"=>[
    "Mobile"=>"+254996782",
    "Work"=>"+2569926639",
    "Cell"=>"+2549356297"
    ]
    ), 
    "Secretary" => array(
        "fullname"=> "Ann Okama",
 "email"=>"Okama@yahoo.com",
 "address"=> "Mada",
 "phone"=>[
    "Mobile"=>"+25496862",
    "Work"=>"+2569304639",
    "Cell"=>"+2548796297"
    ]
    )  
    
 ];
 print  $user_datils["Secretary"]["phone"]["Work"];

    ?>
<pre>
    <?php print_r($user_details); ?>
</pre>
<?php
$items  = ["book", "pen", 456, 45.5, "File54"];
?>

<pre>
    <?php var_dump($items); ?>
</pre>

<?php

$age= [45, 42, 28];

$user_age =  array_combine($user, $age);

$user_data =  array_merge($user, $age);
?>

<pre>
    <?php print_r($user_age); ?>
</pre>
