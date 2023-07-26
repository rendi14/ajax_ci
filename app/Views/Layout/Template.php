<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" href="../Assets/Img/Logo/logo-atas-fix.png" type="image/x-icon">
    <link rel="shortcut icon" href="../Assets/Img/Logo/logo-atas-fixk.png" type="image/x-icon">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?= $this->include('/Layout/Source/Css') ?>
</head>

<body>
    <?= $this->include('/Layout/Header') ?>
    <?= $this->include('/Layout/Sidebar') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('/Layout/Source/Js');  ?>
</body>

</html>