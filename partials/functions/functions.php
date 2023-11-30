<?php
function generatePassword()
{
    $symbols = '!?&%$<>^+-\*/()[]{}@#\_=';
    $letters = 'qwertyuiopasdfghjklzxcvbnm';
    $upper_letters = strtoupper($letters);
    $numbers = '0123456789';

    if (isset($_GET['password_length'])) {
        $password_length = $_GET['password_length'];
        $new_password = '';
        while (strlen($new_password) < $password_length) {
            $valori_disponibili = $symbols . $letters . $upper_letters . $numbers;
            $new_character = $valori_disponibili[rand(0, strlen($valori_disponibili) - 1)];
            if (!strpos($new_password, $new_character)) {
                $new_password .= $new_character;
            }
        }
        $_SESSION['password'] = $new_password;
        header('Location: index.php');
        die();
    }
    return false;
}

?>
