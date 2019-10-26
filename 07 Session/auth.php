<?php
session_start();
$mysqli = null;
$admin = 'admin';
$email = 'admin@site.com';
$password = '123456';

function createMysql()
{
    $GLOBALS['$mysqli'] = new mysqli("localhost", "root", "", "example_1");
    if ($GLOBALS['$mysqli']->connect_errno) {
        throw new Exception("Failed to connect to MySQL: (" . $GLOBALS['$mysqli']->connect_errno . ") " . $GLOBALS['$mysqli']->connect_error);
    }
}

createMysql();

/**
 * Создание пользователя (регистрация)
 * @param string $login Логин пользователя (используется при входе)
 * @param string $email Email пользователя
 * @param string $password Пароль пользователя
 * @return bool
 */
function createUser(string $login, string $email, string $password): bool
{
    $query = "INSERT INTO `users` (`login`, `email`, `token`) VALUES ('$login','$email','$password');";
    return $GLOBALS['$mysqli']->query($query);
}

/**
 * Выход из акккаунта (сброс сессий)
 */
function logout()
{
    session_destroy();
}

/**
 * Вход (авторизация)
 * @param string $login Логин пользователя
 * @param string $password Пароль пользователя
 * @return bool
 * @throws Exception
 */
function login(string $login, string $password): bool
{
    $query = "select * from `users` where login='$login' and token='$password';";
    $res = $GLOBALS['$mysqli']->query($query);
    $res->data_seek(0);
    if (isset($res)) {
        $_SESSION["userid"] = ($res->fetch_assoc())["ID"];
        return true;
    }
    return false;
}

/**
 * Получить текущего авторизованного пользователя
 * @return array
 */
function getCurrentUser(): array
{
    $query = "select * from `users` where id='" . $_SESSION["userid"] . "';";
    $res = $GLOBALS['$mysqli']->query($query);
    $res->data_seek(0);
    return $res->fetch_assoc();
}

/**
 * Валидация пароля
 * @param string $password Пароль пользователя
 * @param string $token Токен пользователя из БД
 * @return bool
 */
function validatePassword(string $password, string $token): bool
{
    return password_verify($password, $token);
}

/* Генерация пароля */
/**
 * @param string $password Создание пароля
 * @return string
 */
function createPassword($password): string
{
    return password_hash($password, PASSWORD_BCRYPT);
}

/**
 * Получить пользователя по его ID
 * @param int $id ID пользователя
 * @return array
 */
function getUserById(int $id): array
{
    $query = "select * from `users` where `id` = $id;";
    return $GLOBALS['$mysqli']->query($query);
}

if (createUser($admin, $email, $password)) {
    echo 'Пользователь создан <br>';
}

if (login($admin, $password)) {
    echo 'Пользователь вошел <br>';
}

$user = getCurrentUser();
if (getCurrentUser()) {
    echo 'Пользователь ' . $user['email'] . ' авторизован <br>';
}

logout();
echo 'Пользователь вышел <br>';

if (!getCurrentUser()) {
    echo 'Пользователь не авторизован <br>';
}