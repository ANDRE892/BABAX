<?php
session_start();
require_once 'bd.php';

$errors = array(); // Массив для хранения ошибок

if (isset($_POST['submit'])) {
    $emailOrPhone = $_POST['emailOrPhone'] ?? '';
    $pass = $_POST['pass'] ?? '';

    if (empty($emailOrPhone) || empty($pass)) {
        $errors[] = "Введите почту/телефон и пароль";
    } else {
        // Проверка входа пользователя
        $sql = "SELECT * FROM `users` WHERE (email = '$emailOrPhone' OR phone = '$emailOrPhone') AND pass = '$pass'";
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            // Пользователь аутентифицирован
            $_SESSION['user'] = $result->fetch_assoc();
            header("Location: index.php");
            exit();
        } else {
            $errors[] = "Неправильная почта/телефон или пароль";
        }
    }
}
?>
<form class="form-1" action="" method="post">
    <div class="form-group">
        <input type="text" class="r-input undefined" pattern=".*" name="emailOrPhone">
        <label class="label">Почта или Телефон</label>
    </div>
    <div class="form-group">
        <input type="password" class="r-input undefined" pattern=".*" name="pass">
        <label class="label">Пароль</label>
    </div>
    <div class="form-group">
        <input type="password" class="r-input undefined" pattern=".*" name="repass">
        <label class="label">Повторите пароль</label>
    </div>
    <?php if (!empty($errors)): ?>
        <div class="errors-but">
            <?php foreach ($errors as $error): ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <button class="buttom-vxod" name="submit">Войти</button>
</form>
