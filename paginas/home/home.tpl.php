<div class="container">
	<?php if(!empty($registros)): ?>
		<div class="row">
			<?php foreach ($registros as $row) { ?>
					<div class="col-md-4">
						<a href="<?php echo PATH; ?>/<?php echo $row['nome_label']; ?>">
							<h5 class="card-title"><?php echo $row['nome_setor']; ?></h5>
						</a>
					</div>
			<?php } ?>
		</div>
	<?php endif; ?>
</div>