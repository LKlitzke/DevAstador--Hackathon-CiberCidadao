<header>
	<div class="acessibilidade tamanho-maximo">
		<div class="ac"><img src="" alt=""></div>
		<div class="ac"><p>A+</p></div>
		<div class="ac"><p>A-</p></div>
		<div class="ac"><p>A=</p></div>
	</div>
</header>


<style type="text/css">
	*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.tamanho-maximo{
    width: 1024px;
}

header{
    width: 100vw;
    background-color: rgb(252, 177, 255);
    display: flex;
    justify-content: center;
}

header .acessibilidade{
    display: flex;
    justify-content: flex-end;    
}

.ac{
    width: 35px;
    border: 1px solid rgb(187, 57, 219);
    margin: 5px;
    text-align: center;
}

.ac:hover{
    background-color: rgb(255, 255, 255);
    color: rgb(9, 110, 204);
    cursor: pointer;
}

.ac p{
    font-size: 18px;
    margin: 4px;
}
</style>