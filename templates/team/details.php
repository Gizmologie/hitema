<?php
require_once __DIR__ . '/../_includes/header.php';
?>

<link rel="stylesheet" href="/public/css/style.css">

<?php
require_once __DIR__ . '/../_includes/nav.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            nom : <?= $nom?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            prenom : <?= $prenom?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            email : <?= $email?>
        </div>
    </div>
</div>


<?php
require_once __DIR__ . '/../_includes/footer.php'
?>

