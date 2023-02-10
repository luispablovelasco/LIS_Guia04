<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Uso de la función range</title>
</head>
<body>
        <div class="container">
        <header class="navbar navbar-light bg-light">
                <a class="navbar-brand" class="id-inline-block aling-top" href="#">
                        <h4>Generación de series con función de matrices</h4>
                </a>
        </header>
        <form action="<?$_SERVER['PHP_SELF']; ?>" method="POST" class="formoid-solid-purple">
        <div class="form_group">
                <lable>Tipos de serie</lable>
                <select name="seltipo" class="form-control">
                        <option value="Alfabetomin" selected="selected">Alfabeto en minúsculas</option>
                        <option value="AlfabetoMay">Alfabeto en maypusculas</option>
                        <option value="NumeroPares">Números Pares</option>
                        <option value="NumeroImpares">Números Impares</option>
                </select>
        </div>
        <div class="submit">
                <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
        </div>
        </form>
      </div>
      <?php
        if(isset($_POST['enviar'])){
                $tiposecuencia = isset($_POST['seltipo']) ? $_POST['seltipo'] : "";
                switch($tiposecuencia){
                        case "AlfabetoMin":
                                $inicio = 'a';
                                $final = 'z';
                                $salto = '1';
                                break;
                        case "AlfabetoMay":
                                $inicio = 'A';
                                $final = 'Z';
                                $salto = '1';
                                break;
                        case "NumerosPares":
                                $inicio = '0';
                                $final = '50';
                                $salto = '2';
                                break;
                }
                $secuencia = range($inicio, $final, $salto);
                echo "<div id=\"box\">";
                foreach($secuencia as $letra){
                        echo "<span class =\"caracter\">" . $letra . "</span>&nbsp;&nbsp;\n";
                        echo "</div>";
                }
        }
      ?>  
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/formoid-solid-purple.js"></script>
</html>