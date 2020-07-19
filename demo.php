<?php
require_once(__DIR__ . "/lang/language.php");
$l = new Lang("de-DE");
?>

<h1><?= $l->t("general.text1") ?></h1>
<p><?= $l->t("general.group1.text1") ?></p>
<p><?= $l->t("general.with_variables", "replaceme:This text was inserted by argument.", "replaceme2:This one too.") ?></p>
<p><?= $l->t("more.another") ?></p>
