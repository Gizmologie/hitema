<?php
require_once __DIR__ . '/../_includes/header.php';
require_once __DIR__ . '/../_includes/nav.php';
?>

<?php
    //var_dump($form->getMessages());
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h4>Formulaire</h4>
            <?php
               $html = '<ul>';
                foreach ($form->getMessages() as $message) {
                    $html .= "<li>$message</li>";
                }
                $html.= '</ul>';
                echo $html;
                ?>
            <form method="post" enctype="multipart/form-data">
                <p class="form-group">
                    <label>Nom :</label>
                    <input name="name" value="<?=$form->getValues()['name']['value'];?>" class="form-control">
                </p>
                <p class="form-group">
                    <label>Prix :</label>
                    <input name="price" value="<?=$form->getValues()['price']['value'];?>" class="form-control">
                </p>
                <p class="form-group">
                    <label>Date :</label>
                    <input name="date" value="<?=$form->getValues()['date']['value'];?>" type="date" class="form-control">
                </p>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="poster">
                    <label class="custom-file-label" for="customFileLang">Poster : </label>
                </div>
                <p class="form-group">
                    <input type="submit" name="submit" value="valider" class="btn btn-primary">
                </p>
            </form>
        </div>
    </div>
</div>
<?php
require_once __DIR__ . '/../_includes/footer.php'
?>

