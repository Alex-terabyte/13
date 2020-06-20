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

        if($_REQUEST['password']==$user['password']){
            $result="Пароль введен верно";
        }
        else{
            $result="Логин или пароль введен  не верно";
        }
        break;
    }
}
echo $result;
?>
</body>
</html>
