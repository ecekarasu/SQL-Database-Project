<?php

    session_start();

    if (isset($_POST["text"]))
    {
    $text = $_POST['text'];
    $user = $_POST["text"];

    $_SESSION["text"] = $text; 
    
    // echo $user;
    // echo " is your text";
    } 
    else 
    {
    $user = null; 
    // echo "no text supplied";
    }

    if (isset($_POST["post_topic"]))
    {
    $post_topic = $_POST['post_topic'];  
    $user = $_POST["post_topic"];

    $_SESSION["post_topic"] = $post_topic; 
    
    // echo $user;
    // echo " is your post_topic";
    } 
    else 
    {
    $user = null;
    // echo "no post_topic supplied";
    }


    if (isset($_SESSION["text"]))
    {
    $text = $_SESSION['text'];
    $user = $_SESSION["text"];
    
    // echo $user;
    // echo " is your text";
    } 
    else 
    {
    $user = null; 
    // echo "no text supplied";
    }

    if (isset($_SESSION["post_topic"]))
    {
    $post_topic = $_SESSION['post_topic'];  
    $user = $_SESSION["post_topic"];
    
    // echo $user;
    // echo " is your post_topic";
    } 
    else 
    {
    $user = null;
    // echo "no post_topic supplied";
    }

    include "config.php";

    $URL = $URL = "https://cs306-project-385dc-default-rtdb.firebaseio.com/Users.json";

    header("refresh: 60");

    function get_messages() { 
        global $URL;
        $ch = curl_init();
        curl_setopt_array($ch, [ CURLOPT_URL => $URL,
                                CURLOPT_POST => false, // It will be a get request 
                                CURLOPT_RETURNTRANSFER => true, ]);
        $response = curl_exec($ch); 
        curl_close($ch);
        return json_decode($response, true); 
    }

    function send_msg($post_name, $post_topic, $sender_name, $time, $msg) { 
        global $URL;
        $ch = curl_init();
        $myObj = new stdClass();
        $myObj->post_name = $post_name;
        $myObj->post_topic = $post_topic;
        $myObj->sender_name = $sender_name; 
        $myObj->time = date("Y-m-d H:i:s");
        $myObj->msg = $msg;
        $encoded_json_obj = json_encode($myObj); 
        curl_setopt_array($ch, array(CURLOPT_URL => $URL,
                                    CURLOPT_POST => TRUE,
                                    CURLOPT_RETURNTRANSFER => TRUE,
                                    CURLOPT_HTTPHEADER => array('Content-Type: application/json' ),
                                    CURLOPT_POSTFIELDS => $encoded_json_obj ));
        $response = curl_exec($ch); 
        return $response;
    }

    $msg_res_json = get_messages();

    if (isset($_POST['usermsg']) && isset($_SESSION['text']) && isset($_SESSION['post_topic'])) {
        $new_text = $_SESSION['text'];
        $new_post_topic = $_SESSION['post_topic'];
        $user_msg = $_POST['usermsg'];
        $text = $new_text;
        $post_topic = $new_post_topic;
        send_msg($text, $post_topic, "User", date("Y-m-d H:i:s"), $user_msg);
        echo $user_msg;
        header("Refresh:0");
    } 
    
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
</head>
<div class="menu">
<div class="back"><i class="fa fa-chevron-left"></i> <img src="https://i.imgur.com/DY6gND0.png" draggable="false"/></div>
<div class="name">Support</div>
</div>
<ol class="chat">
<?php 

    $keys = array_keys($msg_res_json);

    for ($i = 0; $i < count($keys); $i++){
        $chat_msg = $msg_res_json[$keys[$i]];
        $post_name = $chat_msg['post_name'];
        $post_topic = $chat_msg['post_topic'];
        $sender_name = $chat_msg['sender_name'];
        $time = $chat_msg['time'];
        $msg = $chat_msg['msg'];
        $from = ''; 

        if (isset($_SESSION['text']) && isset($_SESSION['post_topic'])) {
            $username = $_SESSION['text'];
            $topic = $_SESSION['post_topic'];
            if($username == $post_name && $topic == $post_topic){ 
                if ($sender_name == 'Admin') {
                    $from = 'other';
                } else {
                    $from = 'self';
                }
                echo  '
                <li class="'.$from.'">
                <div class="avatar">
                            <img src="https://i.imgur.com/DY6gND0.png" draggable="false"/>
                        </div>
                            <div class="msg">
                                <p><b>'.$post_name.'</b></p>
                                <p>'.$msg.'</p>
                                <time>'.$time.'</time>
                            </div>
                        </li>';
            }
        }
    }
?>
</ol>
<form name="form" action = "support_page_msg.php" method="POST">
    <input name="usermsg" class="textarea" type="text" placeholder="Type here!"/>
    <input type="submit" style="display: none" />
</form>