<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?= $favicon ?>" type="image/x-icon">
    <link rel="icon" href="<?= $favicon ?>" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <?php foreach ($css as $_css): ?>
        <link rel="stylesheet" type="text/css" href="<?= $_css ?>">
    <?php endforeach; ?>
</head>
<body>

<?= $content ?>

<?php foreach ($js as $_js): ?>
    <script src="<?= $_js ?>" type="text/javascript"></script>
<?php endforeach; ?>
</body>
</html>