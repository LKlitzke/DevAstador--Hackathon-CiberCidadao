<div class="container">
	<?php if(!empty($registros)): ?>
		<div class="row">
			<?php foreach ($registros as $row) { ?>
				<a href="<?php echo PATH; ?>/<?php echo $row['nome_label']; ?>">
					<div class="col-md-4">
						<h5 class="card-title"><?php echo $row['nome_setor']; ?></h5>
					</div>
				</a>
			<?php } ?>
		</div>
	<?php endif; ?>
</div>