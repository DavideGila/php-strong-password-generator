<?php
include __DIR__ . "/partials/template/header.php";
$error = generatePassword();
?>

<main class="container">
    <div class="bg-light">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" class='py-5'>
            <div class="row">
                <div class="col-8 ps-5">
                    <div>Lunghezza password:</div>
                    <div class="pt-3 pb-5">Consenti ripetizioni di uno o più caratteri:</div>
                    <button type='submit'>Genera</button>
                    <button type='reset'>Reset</button>
                </div>
                <div class="col-4">
                    <input type="number" name="password_length">
                </div>
            </div>
        </form>
    </div>
</main>