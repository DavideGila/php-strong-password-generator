<?php
include __DIR__ . "/partials/template/header.php";
include __DIR__ . "/partials/template/footer.php";
if (empty($_SESSION['password'])) {
    header('Location: login.php');
    die();
}
?>

<main class="container">
    <div class="alert alert-success">
        <h2>
            <?php echo $_SESSION['password'] ?>
        </h2>
    </div>
</main>