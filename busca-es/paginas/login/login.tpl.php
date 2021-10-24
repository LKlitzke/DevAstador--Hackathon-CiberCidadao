<section class="py-5">
    <div class="container my-5 rounded-2">
		<h2>LOGIN BUSCAES</h2>
		<div class="row">
			<div class="teste col-md-3" align="center">
				
				<img src="<?php echo PATH_PUBLIC; ?>/img/login2.png" height="240px" width="240px" style="margin-bottom: 20px">
			</div>
			<div class="col-md-8">
				<form action="<?php echo PATH; ?>/login/?send=1" method="POST">
					<div class="form-group">
						
						<label for="email_login"><b>E-mail ou Login</b></label>
						<input type="text" class="form-control col-md-8" name="email_login" id="email_login" aria-describedby="emailHelp" placeholder="E-mail ou Login">
						<small id="emailHelp" class="form-text text-muted ">Nunca compartilhe seus dados com ninguém!</small>
					</div>
					<div class="form-group">
						<label for="senha"><b>Senha</b></label>
						<input type="senha" class="form-control col-md-8" name="senha" id="senha" placeholder="Senha">
					</div>
					<button type="submit" class="btn btn-primary col-md-2">Enviar</button>
					<a style="margin-left:20px;" href="#">Esqueci minha senha</a>
				</form>
			</div>
		</div>


		
		
	</div>
</section>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
	.container {
		border: 1px #ccc solid;
	}

	.form-group label {
		margin-top: 5px;
	}

	h2 {
		margin-left: 1%;
		margin-top: 10px;
		font-family: 'Roboto', sans-serif;
	}
</style>