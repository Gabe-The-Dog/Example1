<?php
/*$filestream = fopen('Fileee2.txt', 'r')
or die('Не получилось');
while (!feof($filestream)) {
    echo fgets($filestream) . '<br>';
}
//echo fread($filestream,filesize('Fileee2.txt'));
fclose($filestream);
*/

/*$filestream = fopen('Title.txt','r')
or die('Не получилось');
while($char = fgetc($filestream))
{echo $char.' * ';}
fclose($filestream);
*/

/*$poem = "\r\n\tНет, не смотрел никто из нас ";
$poem .= "\r\n\tС такой тоской в глазах ";
$poem .= "\r\n\tНа лоскуток голубизны ";
$poem .= "\r\n\tВ тюремных небесах ";
$filename = 'poem.txt';
$filestream = fopen($filename,'w')
or die('Не получилось');
$num = fwrite($filestream, $poem);
if ($num)
{
    echo "$num байт записано в файл $filename";
}
fclose($filestream);
*/

/*$info = "\r\n\r\n\tБаллада Рэдингской тюрьмы";
$info .= "\r\n\t\t\tОскар Уайлд, 1898";
$filename = 'poem.txt';
$filestream = fopen($filename,'a')
or die('Не получилось');
$num = fwrite($filestream, $info);
if ($num)
{
    echo "$num байт добавлено в файл $filename";
}
fclose($filestream);
*/

/*$filestream = fopen('poem.txt', 'w')
or die('Не получилось');
fwrite($filestream, 'Файл Габе!');
fclose($filestream);
*/

/*function error_handler($level, $message)
{
    switch ($level)
    {
        case 2: $str = 'Внимание!'; break;
        case 8: $str = 'Предупреждение!'; break;
        default: $str = 'Ошибка!';
    }
    echo "<b>$str</b><br>$message<hr>";
}
set_error_handler('error_handler');
echo($var);
$file = fopen('nonsuch.txt', 'r');
$number = 2;
if($number >= 1)
{
    trigger_error('Числовое значение должно быть 1 или меньше');
}
*/

/*class CustomException extends Exception
{
    public function get_details()
    {
        $details = 'Файл:  ' . $this->getFile() . '<br>Строка:  ' . $this->getLine() . '<br>' . $this->getMessage();
        return $details;
    }
}

function check_size($num)
{
    if ($num < 10) {
        throw new Exception("Число: $num<br>Значение должно быть больше 10");
    }
}

function check_parity($num)
{
    if ($num % 2 !== 0) {
        throw new CustomException("Число: $num<br>Значение должно быть четным");
    }
}

try {
    check_size(5);
} catch (Exception $e) {
    echo '<b>Исключение размера!</b><br>' . $e->getMessage() . '<hr>';
}

try {
    check_parity(5);
} catch (CustomException $e) {
    echo '<b>Исключение равенства!</b><br>' . $e->get_details() . '<hr>';
}
*/