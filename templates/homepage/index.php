<?php
    require_once __DIR__ . '/../_includes/header.php';
    require_once __DIR__ . '/../_includes/nav.php';
?>





<div class="container">
    <div class="row">
        <!--<div>Homepage</div>-->
    </div>
    <div class="row">
        <?php
        $html = '';
        foreach ($results as $game) {
            $date = (new DateTime($game->getDate()))->format('d/m/Y');
            $price = number_format($game->getPrice(), 2, ',', '');
            $html .= "<div class='col-sm-4'>
                <img src='/img/{$game->getPoster()}' class='img-fluid'>
                <h3>{$game->getName()}</h3>    
                <time>Date de sortir : $date</time>
                <p>Prix : $price</p>
                <p>Editeur : {$game->getEditor()}</p>
            </div>";
        }
        echo $html;
        ?>
    </div>
</div>

<?php
require_once __DIR__ . '/../_includes/footer.php'
?>