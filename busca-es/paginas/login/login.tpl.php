<section class="py-5">
    <div class="container my-5">
		<form action="<?php echo PATH; ?>/login/?send=1" method="POST">
			<div class="form-group">
				<label for="email_login">E-mail ou login cadastrado</label>
				<input type="text" class="form-control" name="email_login" id="email_login" aria-describedby="emailHelp" placeholder="E-mail ou Login">
				<small id="emailHelp" class="form-text text-muted">Nunca compartilhe esse dado com ninguém!</small>
			</div>
			<div class="form-group">
				<label for="senha">Sua Senha</label>
				<input type="senha" class="form-control" name="senha" id="senha" placeholder="Senha">
			</div>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>
</section>