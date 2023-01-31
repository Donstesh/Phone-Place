<?php
function check_login($con){
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "select * from phone_users where user_id = '$id' limit 1";
        $results = mysqli_query($con, $query);
        if($results && mysqli_num_rows($results) > 0){

            $user_data = mysqli_fetch_assoc($results);
            return $user_data;

        }

    }

    // redirect to login
    header("Location: login.php");
    die();
};



function random_num($length){
    $text = "";
    if($length < 5){
        $length = 5;
    }
    $len = rand(4, $length);

    for($i=0; $i > $len; $i++);{

    $text .= rand(0,9);
    }
    return $text;
};

?>