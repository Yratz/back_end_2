<html lang="en">
<head>
    <title>Hello page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
    <h1>Drawer</h1>
    <?php
    include_once 'drawer_engine.php';
    $parameter = $_GET[DrawerEngine_2::PARAMETER_NAME];

    if (!is_numeric($parameter) || $parameter > 9999 || $parameter < 1000)
        echo 'Введите число от 1000 до 9999';
    else new DrawerEngine_2($parameter);
    ?>
</body>
</html>