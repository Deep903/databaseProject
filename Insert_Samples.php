<html>
<body>
Inserting...
<?php

$usertype = 'user';
$userType = 'User';
$admintype = 'admin';
$adminType = 'Admin';

$db = new mysqli('localhost','root','','animal shelter');

$one = "example@gamil.com"; //------------------------------------UNIQUE
$two = "Hy";
$three = "Nguyen";
$four = "thisisspass";
$five = "Admin";
$six = "animallvr12"; //------------------------------------UNIQUE
$phone = "8171234567"; //------------------------------------UNIQUE
$eight = "2019-04-01";
$nine = "1001"; //------------------------------------UNIQUE

//INSERT USER
$query = "INSERT INTO profile VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$phone', '$eight', '$nine')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);


if($five == $userType || $five == $usertype) {
    $query = "INSERT INTO user VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}

if($five == $adminType || $five == $admintype) {
    $query = "INSERT INTO admin VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}



$one = "example@yahoo.com"; //------------------------------------UNIQUE
$two = "Deep";
$three = "Patel";
$four = "passwordthis";
$five = "Admin";
$six = "iloveanmls34"; //------------------------------------UNIQUE
$phone = "8173335769"; //------------------------------------UNIQUE
$eight = "2019-04-01";
$nine = "1002"; //------------------------------------UNIQUE

//INSERT USER
$query = "INSERT INTO profile VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$phone', '$eight', '$nine')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);

if($five == $userType || $five == $usertype) {
    $query = "INSERT INTO user VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}

if($five == $adminType || $five == $admintype) {
    $query = "INSERT INTO admin VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}



$one = "billyboy@gmail.com"; //------------------------------------UNIQUE
$two = "Bill";
$three = "Bob";
$four = "123ppp";
$five = "User";
$six = "billbob"; //------------------------------------UNIQUE
$seven = "8174321908"; //------------------------------------UNIQUE
$eight = "2019-04-09";
$nine = "1003"; //------------------------------------UNIQUE

//INSERT USER
$query = "INSERT INTO profile VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);


if($five == $userType || $five == $usertype) {
    $query = "INSERT INTO user VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}

if($five == $adminType || $five == $admintype) {
    $query = "INSERT INTO admin VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}


$one = "jake@gmail.com"; //------------------------------------UNIQUE
$two = "Jake";
$three = "Galby";
$four = "password12";
$five = "User";
$six = "jakegalby"; //------------------------------------UNIQUE
$seven = "8173456900"; //------------------------------------UNIQUE
$eight = "2019-04-29";
$nine = "1004"; //------------------------------------UNIQUE

//INSERT USER
$query = "INSERT INTO profile VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);


if($five == $userType || $five == $usertype) {
    $query = "INSERT INTO user VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}

if($five == $adminType || $five == $admintype) {
    $query = "INSERT INTO admin VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}



$one = "fakemail@gmail.com"; //------------------------------------UNIQUE
$two = "Jill";
$three = "Bush";
$four = "passwordwow";
$five = "User";
$six = "jillbushoo"; //------------------------------------UNIQUE
$seven = "6827609458"; //------------------------------------UNIQUE
$eight = "2019-04-09";
$nine = "1005"; //------------------------------------UNIQUE

//INSERT USER
$query = "INSERT INTO profile VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);


if($five == $userType || $five == $usertype) {
    $query = "INSERT INTO user VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}

if($five == $adminType || $five == $admintype) {
    $query = "INSERT INTO admin VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}



$one = "fakegmail@gmail.com"; //------------------------------------UNIQUE
$two = "Jessica";
$three = "Rodrigez";
$four = "querty12";
$five = "User";
$six = "password567"; //------------------------------------UNIQUE
$seven = "6825555555"; //------------------------------------UNIQUE
$eight = "2019-04-04";
$nine = "1006"; //------------------------------------UNIQUE

//INSERT USER
$query = "INSERT INTO profile VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);

if($five == $userType || $five == $usertype) {
    $query = "INSERT INTO user VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}

if($five == $adminType || $five == $admintype) {
    $query = "INSERT INTO admin VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}






$one = "fakeemail45@gmail.com"; //------------------------------------UNIQUE
$two = "John";
$three = "Cenicerors";
$four = "zxcb1234";
$five = "User";
$six = "John123"; //------------------------------------UNIQUE
$seven = "8172340582"; //------------------------------------UNIQUE
$eight = "2019-04-09";
$nine = "1007"; //------------------------------------UNIQUE

//INSERT USER
$query = "INSERT INTO profile VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);


if($five == $userType || $five == $usertype) {
    $query = "INSERT INTO user VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}

if($five == $adminType || $five == $admintype) {
    $query = "INSERT INTO admin VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}



$one = "examplmail@gmail.com"; //------------------------------------UNIQUE
$two = "Bob";
$three = "Ross";
$four = "happypassword";
$five = "User";
$six = "IamBOBROSS"; //------------------------------------UNIQUE
$seven = "8171234678"; //------------------------------------UNIQUE
$eight = "2019-04-17";
$nine = "1008"; //------------------------------------UNIQUE

//INSERT USER
$query = "INSERT INTO profile VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);


if($five == $userType || $five == $usertype) {
    $query = "INSERT INTO user VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}

if($five == $adminType || $five == $admintype) {
    $query = "INSERT INTO admin VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}




$one = "wowza@gmail.com"; //------------------------------------UNIQUE
$two = "Jason";
$three = "Chavaria";
$four = "password0987";
$five = "User";
$six = "JAISONCHAV123"; //------------------------------------UNIQUE
$seven = "8173862954"; //------------------------------------UNIQUE
$eight = "2019-04-19";
$nine = "1009"; //------------------------------------UNIQUE

//INSERT USER
$query = "INSERT INTO profile VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);



if($five == $userType || $five == $usertype) {
    $query = "INSERT INTO user VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}

if($five == $adminType || $five == $admintype) {
    $query = "INSERT INTO admin VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}



$one = "yowza@gmail.com"; //------------------------------------UNIQUE
$two = "Ryan";
$three = "Truong";
$four = "password204";
$five = "User";
$six = "RYNO"; //------------------------------------UNIQUE
$seven = "8173069265"; //------------------------------------UNIQUE
$eight = "2019-04-09";
$nine = "1010"; //------------------------------------UNIQUE

//INSERT USER
$query = "INSERT INTO profile VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);


if($five == $userType || $five == $usertype) {
    $query = "INSERT INTO user VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}

if($five == $adminType || $five == $admintype) {
    $query = "INSERT INTO admin VALUES ('$nine')";
    $val = mysqli_query($db, $query);
    echo mysqli_error($db);
}


//INSERT ANIMAL SAMPLES NOW--------------------------------------------------------------------








$one = "1";
$two = "2019-04-06";
$three = "yellow";
$four = "cat";
$five = "Tom";
$six = "description here";
$seven = "8";
$eight = "tabby";
$nine = "medium";
$ten = "1001"; //------------------------------------UNIQUE

//Adopted information
$eleven = "100";
$twelve = "2019-05-05";
$thirteen = "1001";
$fourteen = $ten;


//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);

//$query = "INSERT INTO adoptions VALUES ('$eleven', '$twelve', '$thirteen', '$fourteen')";
//$val = mysqli_query($db, $query);
//echo mysqli_error($db);




$one = "0";
$two = "2019-04-06";
$three = "brown";
$four = "dog";
$five = "rex";
$six = "description here for rex";
$seven = "3";
$eight = "german shepherd";
$nine = "large";
$ten = "1002"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);




$one = "0";
$two = "2019-04-09";
$three = "green";
$four = "bird";
$five = "Sherry";
$six = "description for sheery bird";
$seven = "2";
$eight = "parrot";
$nine = "small";
$ten = "1004"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);




$one = "0";
$two = "2019-04-08";
$three = "yellow";
$four = "dog";
$five = "Bill";
$six = "Good with birds";
$seven = "1";
$eight = "golden retriever";
$nine = "small";
$ten = "1003"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);





$one = "0";
$two = "2019-04-10";
$three = "brown";
$four = "horse";
$five = "Jake";
$six = "Pretty fast dude";
$seven = "3";
$eight = "friesian";
$nine = "large";
$ten = "1005"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);



$one = "0";
$two = "2019-04-10";
$three = "black";
$four = "dog";
$five = "Goofy";
$six = "Aggressive, barks Lots, not smart.";
$seven = "8";
$eight = "bulldog";
$nine = "small";
$ten = "1006"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);





$one = "0";
$two = "2019-04-11";
$three = "white";
$four = "dog";
$five = "Tommy";
$six = "Hard at hearing";
$seven = "2";
$eight = "siberian husky";
$nine = "medium";
$ten = "1007"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);






$one = "0";
$two = "2019-04-22";
$three = "black";
$four = "dog";
$five = "Timmy";
$six = "Really active";
$seven = "3";
$eight = "siberian husky";
$nine = "medium";
$ten = "1008"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);




$one = "0";
$two = "2019-04-14";
$three = "white";
$four = "bird";
$five = "Donald";
$six = "Really chatty";
$seven = "7";
$eight = "duck";
$nine = "small";
$ten = "1009"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);



$one = "0";
$two = "2019-04-14";
$three = "green";
$four = "other";
$five = "Mars";
$six = "Doesnt talk much";
$seven = "1";
$eight = "Venus flytrap";
$nine = "small";
$ten = "1010"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);





$one = "0";
$two = "2019-04-16";
$three = "orange";
$four = "other";
$five = "Goldy";
$six = "Gets sick often";
$seven = "1";
$eight = "goldfish";
$nine = "small";
$ten = "1011"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);






$one = "0";
$two = "2019-04-17";
$three = "white";
$four = "cat";
$five = "Shelia";
$six = "Super playful, good with kids";
$seven = "1";
$eight = "Persian";
$nine = "small";
$ten = "1012"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);




$one = "0";
$two = "2019-04-19";
$three = "red";
$four = "bird";
$five = "Robert";
$six = "Bad with kids";
$seven = "3";
$eight = "Cardinal";
$nine = "small";
$ten = "1013"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);



$one = "0";
$two = "2019-04-19";
$three = "yellow";
$four = "dog";
$five = "Sunny";
$six = "Loves everyone";
$seven = "5";
$eight = "golden retriever";
$nine = "small";
$ten = "1014"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);



$one = "0";
$two = "2019-04-20";
$three = "blue";
$four = "other";
$five = "THANOS";
$six = "Must have its own tank";
$seven = "2";
$eight = "beta fish";
$nine = "small";
$ten = "1015"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);



$one = "0";
$two = "2019-04-21";
$three = "golden";
$four = "horse";
$five = "Alphonse";
$six = "Feels a bit horse sometimes";
$seven = "12";
$eight = "English horse";
$nine = "large";
$ten = "1016"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);




$one = "0";
$two = "2019-04-21";
$three = "grey";
$four = "dog";
$five = "Timothy";
$six = "Hungry for action";
$seven = "6";
$eight = "terrier";
$nine = "small";
$ten = "1017"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);





$one = "0";
$two = "2019-04-22";
$three = "grey";
$four = "other";
$five = "Gena";
$six = "Needs a loving owner";
$seven = "4";
$eight = "raccoon";
$nine = "medium";
$ten = "1018"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);




$one = "0";
$two = "2019-04-23";
$three = "brown";
$four = "dog";
$five = "Reesa";
$six = "Hates most people";
$seven = "12";
$eight = "malamute";
$nine = "large";
$ten = "1019"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);





$one = "0";
$two = "2019-04-23";
$three = "black";
$four = "cat";
$five = "Shamwow";
$six = "Does not like water";
$seven = "11";
$eight = "alley cat";
$nine = "small";
$ten = "1020"; //------------------------------------UNIQUE

//INSERT Animal
$query = "INSERT INTO animal VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine', '$ten')";
$val = mysqli_query($db, $query);
echo mysqli_error($db);




?><br>


















Complete
</body>
</html>
