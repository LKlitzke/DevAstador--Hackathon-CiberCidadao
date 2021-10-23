<?php include_once("config/path.php"); ?>

<html>
    <head>
        <!-- Import básico -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Import de CSS, Favicon e fontes da Google -->
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Busca ES - Erro 404</title>
    </head>
    <body>
        <div>
            <img src="<?php echo PATH_PUBLIC; ?>/img/construcao.svg" width="40%" height="40%">
            <hr>
            <h4>Esta página não existe pois o nosso protótipo possui um tamanho limitado! :)</h4>
        
            <br><a href="<?php echo PATH; ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-home"></i>&nbsp; <b>Voltar ao Home</b></a>
        </div>        
    </body>
</html>

<style>
  html body {
    font-family: 'Encode Sans', sans-serif;
    color: rgb(0, 0, 0);

  }
  div {
    margin-top: 10%;
    width: 40%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
  }
  h4 {
    line-height: 150%;
  }
</style>