<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            $v = array(2=>2, 4=>4, 6=>6, 8=>8);
            $v[] = 10;

            print_r($v);

            unset($v[4]);

            print_r($v);
        ?>
    </pre>
</body>
</html>