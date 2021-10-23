<div class="container">
	<?php if(!empty($registros)): ?>
		<div class="row">
			<?php foreach ($registros as $row) { ?>
				<a href="<?php echo PATH; ?>/documentos/<?php echo $row['id']; ?>/<?php echo $row['nome']; ?>">
					<div class="col-md-4">
						<h5 class="card-title"><?php echo $row['nome']; ?></h5>
					</div>
				</a>
			<?php } ?>
		</div>
	<?php endif; ?>
</div>