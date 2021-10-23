<div class="container">
	<?php if(!empty($registros)): ?>
		<div class="row">
			<?php foreach ($registros as $row) { ?>
				<div class="col-md-4">
					<a href="<?php echo PATH; ?>/orgaos/<?php echo $row['id']; ?>/<?php echo urlencode($row['nome']); ?>">
						<h5 class="card-title"><?php echo $row['nome']; ?></h5>
					</a>
				</div>
			<?php } ?>
		</div>
	<?php endif; ?>
</div>