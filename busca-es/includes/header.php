<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Busca ES</title>

    <?php /* <link rel="stylesheet" href="<?php echo PATH; ?>/bootstrap/css/bootstrap.min.css"> */ ?>
    <link rel="stylesheet" href="<?php echo PATH_CSS; ?>/header.css">
    <?php /* <script src="<?php echo PATH; ?>/bootstrap/js/bootstrap.min.js"></script> */ ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo PATH; ?>">Pagina Inicial</a>
                </li>
                <?php if( empty($_SESSION['usuario_id']) ): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo PATH; ?>/login"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Fazer login</a>
                    </li>
                <?php else: ?>
                    <nav class="navbar navbar-light" style="font-size: 1rem;">
                        <a class="navbar-brand" href="#">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <?php echo $_SESSION['usuario_nome']; ?>
                            <a href="<?php echo PATH; ?>/login/?logout=1">sair</a>
                        </a>
                    </nav>
                <?php endif; ?>
            </ul>
            <?php // if($secao != 'home'): ?>
                <form action="<?php echo PATH; ?>/busca/?send=1" method="POST" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" name="palavra_chave" placeholder="Busca rápida" aria-label="Busca rápida">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            <?php // endif; ?>
        </div>
    </nav>