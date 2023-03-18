<?php 

$file = 'user.json';
$json = json_decode(file_get_contents($file), true);

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $json[$_POST['random']]['username'] && $_POST['password'] == $json[$_POST['random']]['password']) {
        header("Location: selamat.php");
    } else {
        echo "Wrong username or password";
        echo "<br>";
        echo "Silahkan coba lagi";
        echo "<br>";
        echo "<a href='index.php'>Back</a>";
    }
} else {
    echo "Wrong username or password";
    echo "<br>";
    echo "Silahkan coba lagi";
    echo "<br>";
    echo "<a href='index.php'>Back</a>";
}