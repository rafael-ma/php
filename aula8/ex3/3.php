<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php    
            $txt = isset($_POST["t"])?$_POST["t"]:"[não informado]";
            $tam = isset($_POST["tam"])?$_POST["tam"]:"14pt";
            $cor = isset($_POST["cor"])?$_POST["cor"]:"#000000";
        ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Personalizar texto</title>
        <style>
            .text {
                color: <?php echo $cor;?>;
                font-size: <?php echo $tam;?>;  
            }
        </style>
    </head>
    <body>
        <form action="3.php" method="post">
            <label for="itext">Texto:</label>
            <input type="text" name="t" id="itxt"><br>

            <label for="itam">Tamanho:</label>
            <select name="tam" id="itam">
                <option value="8pt">8</option>
                <option value="10pt">10</option>
                <option value="14pt" selected>14</option>
                <option value="20pt">20</option>
                <option value="40pt">40</option>
            </select><br>

            <label for="icor">Cor:</label>
            <input type="color" name="cor" id="icor"><br>

            <button type="submit">Gerar</button>
        </form>

        <?php
            echo "<span class='text'>$txt</span";
        ?>
    </body>
</html>