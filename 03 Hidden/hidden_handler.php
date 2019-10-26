<?php
if (!empty($_POST['comment'])) {
    $comment = $_POST['comment'];
} else {
    $comment = NULL;
    echo 'Необходимо указать комментарий';
}

$time = (!isset($_POST['time'])) ? NULL : $_POST['time'];
$user = (!isset($_POST['time'])) ? NULL : $_POST['user'];

if (($comment != NULL) && ($time != NULL) && ($user != NULL)) {
    echo "<p>Получаем комментарий: \" $comment \"<br>От $user в $time </p>";
}