<?php
function encabezado($title_page, $title_enc){
session_start();
?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title><?php echo $title_page; ?></title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<script>
            $(function () {
                $('#myTab a:last').tab('show')
            })
        </script>
	<div id="titulo">
		<p id="header"><?php echo $title_page; ?></p>
		<p id="subheader"><?php echo $title_enc; ?></p>	
		
		</div>
	<header role="tablist" id="myTab">
		<a href="#hamburguesas" class="contenedor" id="uno" data-toggle="tab">
			<img class="icon" src="">
			<p class="texto">Hamburgesas</p>
		</a>
	
		<a href="#refrescos" class="contenedor" id="dos" data-toggle="tab">
			<img class="icon" src="../img/icono2.png">
			<p class="texto">Refrescos</p>
		</a>

		<a href="#papas" class="contenedor" id="tres" data-toggle="tab">
			<img class="icon" src="../img/icono3.png">
			<p class="texto">Papas Fritas</p>
		</a>

		<a href="postres" class="contenedor" id="cuatro" data-toggle="tab">
			<img class="icon" src="../img/icono4.png">
			<p class="texto">Postres</p>
		</a>

		<a href="combos" class="contenedor" id="cinco" data-toggle="tab">
			<img class="icon" src="../img/icono5.png">
			<p class="texto">Combos</p>
		</a>

        <div class="tab-content">
            <div class="tab-pane active" id="hamburguesas">uno</div>
            <div class="tab-pane" id="refrescos">dos</div>
            <div class="tab-pane" id="papas">tres</div>
            <div class="tab-pane" id="postres">cuatro</div>
            <div class="tab-pane" id="combos">cinco</div>
        </div>

        <ul class="nav nav-tabs" role="tablist" id="myTab">
            <li class="active"><a href="#home" role="tab" data-toggle="tab">Home</a></li>
            <li><a href="#profile" role="tab" data-toggle="tab">Profile</a></li>
            <li><a href="#messages" role="tab" data-toggle="tab">Messages</a></li>
            <li><a href="#settings" role="tab" data-toggle="tab">Settings</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="home">...</div>
            <div class="tab-pane" id="profile">...</div>
            <div class="tab-pane" id="messages">...</div>
            <div class="tab-pane" id="settings">...</div>
        </div>

        
</body>
</html>
<?php
}
?>