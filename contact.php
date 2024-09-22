<?php

$cv_contents = file_get_contents("./cv.json");
$cv = json_decode($cv_contents, true);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title><?= $cv['name'] ?></title>
</head>

<body>
    <include header.php>



        <include footer.php>
</body>

</html>