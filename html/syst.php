<html lang="en">
<head>
    <title>Hello page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
    <h1>CMD</h1>
    <?php
    include_once 'syst_engine.php';
    $parameter = $_GET[PARAMETER_NAME];
    try {
        lol($parameter);
    } catch (Exception $e){
        echo 'Wrong input';
    }
    ?>
</body>
</html>