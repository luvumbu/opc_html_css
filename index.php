<?php
session_start();
include("class/php/ip.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	include("link.html"); // ajout des liens externes 
	include("link_php.php"); // pour toutes les classe php 
	include("link_js.html"); // pour toutes les class Javascript
	//include("check_bdd.php"); // test 	
	?>
	<title>Bokonzi</title>
</head>

<body>
	<div id="body">
		<header>
			<?php
	 	include("model/header.php");
			?>
		</header>
		<section>
			<?php
			include("model/section.php");
			?>
		</section>
		<footer>
			<?php
			include("model/footer.php");
			?>
		</footer>
		<?php
		include("vue.html");
		?>
	</div>
</body>
<style>
	.containt_opc_header{
		display: flex;		
		justify-content: space-around;
		border-bottom: 1px solid rgba(0,0,0,0.2);
	}
	.containt_opc_header h3 {
		padding: 10px;
	}
	.containt_opc_header h4 {
		padding-top: 20px;
	}
	.cursor-pointer:hover{
		cursor: pointer;
	}
 
	.containt_opc_header h3:hover,.containt_opc_header h4:hover{
		cursor: pointer;
	}
	@media screen and (max-width: 1280px)
{
	.containt_opc_header{
		display: block;	
		text-align: center;	
 
	}
}
</style>

<script>
	function activite_n(_value){
		Ajax("sources_id","pages/activite"+_value+".php");
	}
	function sources_id(){
		Ajax("sources_id","pages/exercices.php");
	}
 
</script>

</html>