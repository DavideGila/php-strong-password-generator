<?php
include __DIR__ . "/partials/template/header.php";
$error = generatePassword();
?>

<main class="container">
    <?php if ($error) { ?>
        <div class="alert alert-danger">
            <?php echo $error ?>
        </div>
    <?php } ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" class='py-5'>
        <input type="number" min='6' max='20' name="password_length">
        <button type='submit'>Genera</button>
        <button type='reset'>Reset</button>
    </form>
</main>