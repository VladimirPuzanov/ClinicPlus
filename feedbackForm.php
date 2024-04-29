<?php
require 'config.php';
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $name = trim($_POST['userName']);
    $email = trim($_POST['userEmail']);
    $tel = str_replace(" ", "", $_POST['userTel']);
	$pattern_mail = '/\w+@\w+/';
	$pattern_tel = '/^((\+7|7|8)+([0-9]){10})$/';
if (preg_match($pattern_mail, $email) && preg_match($pattern_tel, $tel)) {
    $datetime = date("Y-m-d G:i:s", idate("U"));
    $query = "SELECT * FROM user_feedback WHERE name = '{$name}' AND email = '{$email}' AND telephone = '{$tel}' AND TIMESTAMPDIFF(SECOND, datetime, '{$datetime}') < 300";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0){
        echo json_encode(array('success' => 0, 'error' => "RF"));
    }
    else{
        $query = "INSERT INTO user_feedback(name, email, telephone) VALUES('{$name}', '{$email}', '{$tel}')";
        mysqli_query($db, $query);
        echo json_encode(array('success' => 1));
    }
} else {
    echo json_encode(array('success' => 0, 'error' => "NVD"));
}