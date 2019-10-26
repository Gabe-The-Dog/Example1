<form action="<?php $_SERVER['PHP_SELF'] ?>"
      method="POST" enctype="multipart/formdata">
    Выберите изображение для выгрузки на сервер:
    <input type="file" name="image">
    <input type="submit" value="Отправить файл">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    $size = $_FILES['image']['size'];

    $ext = pathinfo($name, PATHINFO_EXTENSION);
    $ext = strtolower($ext);

    if ($ext != 'png' && $ext != 'jpg' && $ext != 'gif') {
        echo 'Изображение должно быть формата PNG, JPG или GIF';
        exit();
    }
    if ($size > 512000) {
        echo 'Файл не должен превышать 500 Кб';
        exit();
    }
    if (file_exists($name)) {
        echo "Файл $name уже был выгружен";
        exit();
    }

    try {
        move_uploaded_file($temp, $name);
        echo 'Файл выгружен: ' . $name;
        echo '<br<img src="' . $name . '">';
    } catch (Exception $e) {
        echo 'Сбой выгрузки файла!';
    }
}