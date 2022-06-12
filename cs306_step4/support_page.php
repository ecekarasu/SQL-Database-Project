<?php 

    session_start();

    include "config.php"; 


    if (isset($_POST['text'])) {
        $_SESSION['text'] = $_POST['text'];
    }

    if (isset($_POST['post_topic'])) {
        $_SESSION['post_topic'] = $_POST['post_topic'];
    }

?>

<form method="post" action="support_page_msg.php"> 

<input type="text" name="text" placeholder="Enter your name">

<br>
<br>

<body>

    <select name="post_topic">
    <option post_topic="select">Please select... </options>
    <option post_topic="1">Inmate Search</option>
    <option post_topic="2">Communicating/Visiting An Inmate</option>
    <option post_topic="3">Addressing A Letter To An Inmate</option>
    <option post_topic="4">Sending An Inmate Money</option>
    <option post_topic="5">Lawyers/Professional Visits</option>
    <option post_topic="6">Human Resources</option>
    <option post_topic="7">Contact Us</option>
    </select>

</body>

<br>
<br>

<button>Go</button>

</form>