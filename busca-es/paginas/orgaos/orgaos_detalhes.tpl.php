<header class="py-5 bg-image-full" style="background-color: #a86f87;">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<div class="text-center my-5">
		<img class="img-fluid rounded-circle mb-4" src="<?php echo PATH_PUBLIC; ?>/img/orgaos/<?php echo $info['logo']; ?>" alt="...">
		<h1 class="text-white fs-3 fw-bolder"><?php echo $info['nome']; ?></h1>
        <h1 class="text-white fs-3 fw-bolder"><?php echo $info['conteudo']; ?></h1>
		<!-- <p class="text-white-50 mb-0">Landing Page Template</p> -->
	</div>
</header>

<section class="py-2">
    <div class="container my-2">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- <h2>Full Width Backgrounds</h2> -->
                
                <?php if(!empty($info['info1'])){ ?>
                    <h4>O que é?</h4>
                    <p style="text-align: justify; text-justify: inter-word;"><?php echo $info['info1'];?></p>
                <?php } ?>
                
                <?php if(!empty($info['info2'])){ ?>
                    <h4>Informações</h4>
                    <p style="text-align: justify; text-justify: inter-word;"><?php echo $info['info2']; ?></p>
                <?php } ?>

                <?php if(!empty($info['link'])){ ?>
                <h4>Redirecionamento</h4>
                <a target="_blank" href="<?php echo $info['link'];?>">Site da <?php echo $info['nome'];?></a><br>
                <?php } ?>
            </div>
        </div>
    </div>
</section>