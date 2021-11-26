<?php

include('class/Autoloader.php');

foreach (Bdd::search($_POST['search']) as $index => $rue) { ?>
    <p><?=$rue['nom']?></p>
<?php }