<div class="container">
	<?php if($resultados[0]['status'] == 'error'): ?>
		<div class="p-3 mb-2 bg-danger text-white" align="center"><?php echo $resultados[0]['mensagem']; ?></div>
	<?php endif; ?>

	<?php if($resultados[0]['status'] == 'success'): ?>
		<div class="p-3 mb-2 bg-success text-white" align="center"><?php echo $resultados[0]['mensagem']; ?></div>
	<?php endif; ?>

	<?php if(!empty($registros)): ?>
		<div class="row">
			<?php foreach ($registros as $row) { ?>
				<div class="col-md-4">
					<a href="<?php echo PATH; ?>/empresas_publicas/<?php echo $row['id']; ?>/<?php echo urlencode($row['nome']); ?>">
						<h5 class="card-title"><?php echo $row['nome']; ?></h5>
					</a>
				</div>
			<?php } ?>
		</div>
	<?php endif; ?>

	<?php if( !empty($_SESSION['usuario_id']) ): ?>
		<div class="div-formulario">
			<h5>Contribua com a página - Cadastrar dados</h5>
			<form action="<?php echo PATH; ?>/empresas_publicas/?send=1" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
				</div>

				<div class="form-group">
					<label for="conteudo">Subtítulo</label>
					<textarea class="form-control" name="conteudo" id="conteudo" placeholder="Subtítulo"></textarea>
				</div>

				<div class="form-group">
					<label for="logo">Logo</label>
					<input type="file" class="form-control" name="logo" id="logo" required>
				</div>
				
				<div class="form-group">
					<label for="info1">O que é?</label>
					<textarea class="form-control" name="info1" id="info1" placeholder="O que é?"></textarea>
				</div>

				<div class="form-group">
					<label for="info2">Informações</label>
					<textarea class="form-control" name="info2" id="info2" placeholder="Informações"></textarea>
				</div>

				<div class="form-group">
					<label for="link">Redirecionamento</label>
					<input type="text" class="form-control" name="link" id="link" placeholder="Redirecionamento">
				</div>

				<button type="submit" class="btn btn-primary">Cadastrar</button>
			</form>
		</div>
	<?php endif; ?>
</div>