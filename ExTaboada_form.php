<?php
  $NumeroCaixa = $_GET ['txtTabuada'] ?? '';;
?>
<html>
<head>
    <meta charset="uft-8">
    <meta name= "viewport" content="width=device-width, initial-scalet=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form action="ExTaboada.php" method="GET">
    <label for="usr">Tabuada:</label>
       <input class="form-control" type="text" name="txtTabuada" id="txtTabuada" value="<?php echo $NumeroCaixa?>"><br>

       <input class="btn btn-dark btn-lg btn-block" type="submit" value="Calcular Tabuada">
    </form>

    <?php
       $resposta = $_GET['txtResposta'] ?? '';
       echo $resposta;
    ?>
</div>
</body>
</html>