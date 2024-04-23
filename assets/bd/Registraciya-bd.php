<?php
session_start();
require_once 'bd.php';

$errors = array(); // Массив для хранения ошибок

$login = $_POST['login'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];

if (isset($_POST['submit'])) { // Проверка, была ли отправлена форма
    if (empty($login) || empty($phone) || empty($email) || empty($pass) || empty($repass)) {
        $errors[] = "Все поля должны быть заполнены";
    } elseif ($pass != $repass) {
        $errors[] = "Пароли не совпадают";
    } else {
        $sql = "INSERT INTO `users` (login, phone, email, pass) VALUES ('$login', '$phone', '$email', '$pass')";
        
        if ($conn->query($sql) === TRUE) {
            $errors[] = "Успешная регистрация";
            header('Location: Vxod.php');
        } else {
            $errors[] = "Ошибка при выполнении запроса: " . $conn->error;
        }
    }
}
?>

<form class="form-1" action="" method="post">
    <div class="form-group">
        <input type="text" class="r-input undefined" pattern=".*" name="login">
        <label class="label">Логин</label>
    </div>
    <div class="form-group">
        <input type="text" class="r-input undefined" pattern=".*" name="email">
        <label class="label">Почта</label>
    </div>
    <div class="form-group">
        <input type="text" class="r-input undefined" pattern=".*" name="phone">
        <label class="label">Телефон</label>
    </div>
    <div class="form-group">
        <input type="text" class="r-input undefined" pattern=".*" name="pass">
        <label class="label">Пароль</label>
    </div>
    <div class="form-group">
        <input type="text" class="r-input undefined" pattern=".*" name="repass">
        <label class="label">Повторите пароль</label>
    </div>
    <?php if (!empty($errors)): ?>
        <div class="errors-but">
            <?php foreach ($errors as $error): ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <button class="buttom-vxod" name="submit">Зарегистрироваться</button>
</form>
