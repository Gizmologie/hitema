<?php
require_once __DIR__ . '/../_includes/header.php';
?>

<link rel="stylesheet" href="/public/css/style.css">

<?php
require_once __DIR__ . '/../_includes/nav.php';
?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">email</th>
    </tr>
    </thead>
    <tbody>

<?php
    $html = '';

    foreach ($fullList as $key => $member){
        $html .= "
     <tr>
        <th scope=\"row\">{$member['id']}</th>
        <td>{$member['nom']}</td>
        <td>{$member['prenom']}</td>
        <td>{$member['email']}</td>
        <td><a class='' href='/team/$key' role='button'>Details</a></td>
    </tr>
        ";
    }
    $html .= "
    </tbody>
</table>";

    echo $html;
;
?>


<?php
require_once __DIR__ . '/../_includes/footer.php'
?>

