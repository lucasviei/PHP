<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Estrutura Do-While - Caso de uso - Curso PHP - eXcript </title>
</head>

<body>

    <?php
        if(isset($_POST["dependentes"])){
            $dependentes = $_POST["dependentes"];
            if(! is_numeric($dependentes)){
                $dependentes =  1;
                echo "não numérico";
            }
            $conta = 0;
            echo "
                <table border='1'>
                    <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Nasc</th>
                    </tr>
                ";
            do{
                $conta = $conta + 1;
                echo "
                    <tr>
                        <td>Dependente $conta</td>
                        <td><input type='text' name='nome'></td>
                        <td><input type='text' name='nasc'></td>
                    </tr>
                ";
            }while($conta<$dependentes);
            
            echo "</table>";
        }
    ?>

    <form method="POST">
        <input type="text" name="dependentes">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>