<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Каталог</title>
</head>
<body>
<?php
    // На платформе Windows, необходимо экранировать все обратные
    // слеши в пути к файлу или использовать прямые слеши
    $file_name='user.json';
    $data = file_get_contents($file_name);
    $data = json_decode($data,true);
    foreach ($data as $user){
        if($_REQUEST['login']==$user["login"]) {
            $result="Пользователь уже зарегистрирован";
            break;
        }
    }
    if (!isset($result)) {
        $data[] = $_REQUEST;
        $success = file_put_contents($file_name, json_encode($data));
        if ($success) {
            $result = "Пользователь зарегистрирован";
        } else {
            $result = "Что-то пошло нетак, найдите другого кодера";
        }
    }
    echo $result;
?>
</body>
</html>
