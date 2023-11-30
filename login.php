<?php
include __DIR__ . "/partials/template/header.php";
$error = generatePassword();
?>

<main class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" class='py-5'>
        <input type="number" name="password_length">
        <button type='submit'>Genera</button>
        <button type='reset'>Reset</button>
    </form>
</main>