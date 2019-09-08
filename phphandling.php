
<?php
if (isset($_POST['submit'])) {
    $myinput = fopen("data.txt", "a+");
    $name = $_POST['name']. "\n";
    fwrite($myinput, $name);
    $title = $_POST['title']. "\n";
    fwrite($myinput, $title);
    $email = $_POST['email']. "\n";
    fwrite($myinput, $email);
    $message = $_POST['message']. "\n";
    fwrite($myinput, $message);
    fclose($myinput);
    echo "you are all done moving on";
}
?>