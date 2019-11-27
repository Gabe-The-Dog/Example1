<?php

$dbc = mysqli_connect('сервер', 'пользователь', 'пароль', 'база_данных')
OR die (mysqli_connect_error());
mysqli_set_charset($dbc, 'utf-8');