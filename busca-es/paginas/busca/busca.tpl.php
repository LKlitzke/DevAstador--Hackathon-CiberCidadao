<header class="py-5 bg-image-full" style="background-color: #a86f87;">
	<div class="text-center my-5">
		<img class="img-fluid rounded-circle mb-4" src="<?php echo PATH_PUBLIC; ?>/img/busca/busca_logo.png" alt="...">
		<h1 class="text-white fs-3 fw-bolder">Resultados da sua busca</h1>
	</div>
</header>

<section class="py-5">
    <div class="container my-5">
        <div class="">
            <?php if(!empty($resultados[0]['status'])): ?>
				<div class="row">
					<div class="col-md-12">
						<h5 class="card-title"><?php echo $resultados[0]['mensagem']; ?></h5>
					</div>
				</div>
			<?php else: ?>
				<?php foreach ($resultados as $row) { ?>
					<?php if( $row['tipo'] == 'tabela' ): ?>
						<div class="jumbotron">
							<h1><?php echo $row['pagina']; ?></h1>
							<p class="lead"><?php echo $row['conteudo']; ?></p>
							<a class="btn btn-lg btn-primary" href="<?php echo $row['link']; ?>" role="button">Visualizar</a>
						</div>
					<?php elseif( $row['tipo'] == 'detalhes' ): ?>
						<div class="jumbotron">
							<h1><?php echo $row['pagina']; ?></h1>
							<p class="lead"><?php echo $row['conteudo']; ?></p>
							<a class="btn btn-lg btn-primary" href="<?php echo $row['link']; ?>" role="button">Visualizar</a>
						</div>
					<?php endif; ?>
				<?php } ?>
			<?php endif; ?>
        </div>
    </div>
</section>