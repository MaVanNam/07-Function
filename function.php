<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
<?php
function createBox()
{
    $value = "<h1 style='color: red; text-align: center; border: 1px solid green'>  
              Hello my name is Nam!  
              </h1>";

    return $value;
}

createBox();
createBox();

?>

</body>
</html>