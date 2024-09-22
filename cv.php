<?php
// get json file as string
$cv_contents = file_get_contents("./cv.json");
$cv = json_decode($cv_contents, associative: true);


echo "<pre>";
print_r($cv);
echo "</pre>";



?>





<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "name"; ?></title>
</head>

<body>

</body>

</html> -->