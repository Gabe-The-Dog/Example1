<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo '
    <form action = "single.php" method = "POST">
    <fieldset>
    <legend>Необходимо указать комментарий</legend>
    <textarea rows="5" cols="40" name="comment">
    </textarea>
    </fieldset>
    <p><input type="submit"></p>
    </form>';
} else {
    if (!empty($_POST['comment'])) {
        $comment = $_POST['comment'];
        echo "Комментарий: $comment ";
    } else {
        $comment = NULL;
        echo 'Необходимо указать комментарий!';
    }
}