<?php
$a = "";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Easy Order</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="../Easy/js/jquery-1.11.1.min.js"></script>
		<link href="../Easy/css/estilos.css" rel="stylesheet" type="text/css" />

		<script href="../Easy/css/bootstrap.css" rel="stylesheet" type="text/css"></script>
		<script type="text/javascript" src="../Easy/js/menu.js"></script>
		<script type="text/javascript"> 
			function AbrirV() {
				$(".ppagar").slideDown("fast");

			}

			function CerrarV() {
				$(".ppagar").slideUp("fast");
			}
			function Comenzar(){
				alert("Su Orden fue Registrada, Favor de pasar a ventanilla");
    			document.location.reload(true);
			}
			function Cancelar(){
			  document.location.reload(true);
			}

			function llenar() {
				var s = getTotal();
				var c = getFood();
				var p = getPrice();
				console.log(c);
				$("#table1").html("");
				for (var i = 0; i < c.length; i++) {
					$("#table1").html($("#table1").html() + 
					"<tr>" + 
						"<td>" + c[i] + "</td>" + 
						"<td>" + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + "</td>" + 
						"<td>" + p[i] + "</td>" + 
					"</tr>");
				}
				$("#table1").html($("#table1").html() +
						"<td>" + " <h3> " + " <strong> " + "$ Total" + " </strong> " + " </h3> " + "</td>" + 
						"<td>" + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + "</td>" + 
						"<td>" + " <h3> " + " <strong> " + s  + " </h3> " + " </strong> " + "</td>" + 
				"</tr>");
			}
 
		</script> 
	</head> 
	<body>
		<div class="container">
			<div class="ppagar">
				<div class="tpagar" style="overflow: auto";>
					<div class="cerrar">
						<INPUT TYPE="button" VALUE=" Regresar a Menu " class="btn btn-danger" onClick="window.location.href='javascript:CerrarV()';">
					</div>
					<h1>Total a Pagar</h1>
					<hr />
					<table id="table1">
						<tr>
							<td>Producto </td>

							<td>Precio</td>
						</tr>
						<tr>

						</tr>
					</table>
					<div class="boton" align="center">
						<INPUT TYPE="button" VALUE=" Ordenar " class="btn btn-success" onClick="window.location.href='javascript:Comenzar()';">
					</div>
				</div>
			</div>
		</div>
		<center>
			<button onclick="window.location.href='javascript:AbrirV()';llenar();" class="btn btn-primary btn-lg"  >
				Realizar Pedido !
			</button>
			<button onclick="window.location.href='javascript:Cancelar()';llenar();" class="btn btn-default btn-lg"  >
				<strong>Cancelar Pedido</strong> 
			</button>
		</center>
	</body>
</html>