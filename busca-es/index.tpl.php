<!DOCTYPE html>
<html>
	<!-- HEADER -->
	<?php include_once("includes/header.php"); ?>
	<!-- HEADER -->

	<!-- LIBRAS - INCLUSÃO -->
	<?php include_once("includes/libras.php"); ?>
	<!-- LIBRAS - INCLUSÃO -->
	
	<!-- BODY -->
	<?php include_once("paginas/" . $secao . "/" . $secao . $sufixo . ".php"); ?>
	<!-- BODY -->

	<!-- FOOTER -->
	<?php include_once("includes/footer.php"); ?>
	<!-- FOOTER -->
</html>