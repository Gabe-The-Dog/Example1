<?php
$page_title = 'PHP-форум';
include('include/header.html');
require('..\connect_db.php');
$sql = 'SELECT * FROM forum';
$result = mysqli_query($dbc, $sql);
if (mysqli_num_rows($result) > 0) {
    echo '<table><tr><th>Автор</th><th>Тема</th><th
    id = "msg">Сообщение</th></tr>';
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    }
} else {
    echo '<p>В настоящее время сообщений нет.</p>';
}