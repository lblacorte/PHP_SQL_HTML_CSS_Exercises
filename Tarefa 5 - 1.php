<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
	<title>Conversor de valor de produto de reais para dólares | Leandro Lacorte - Info 2B</title>
</head>
<body style=
	"font-family: Arial Narrow, Arial; 
	color: black; 
	font-size: 12pt; 
	background-image: url(https://i.ibb.co/fYWqgN6/Fundo.gif);
	background-color: rgba(255, 255, 255, 0.486);
  background-blend-mode: overlay;
	background-repeat: no-repeat; 
	background-position: center fixed;    
	-webkit-background-size: cover;   
	-moz-background-size: cover;   
	-o-background-size: cover;   
	background-size: cover;" 
	bgproperties="fixed" topmargin="0">
	<table border="0" align=center class="cabeçalho" style="border-collapse: collapse">
				<tr>
					<style type="text/css">
						.cabeçalho{
							margin-top: 7px;
						}
					</style>
						<td colspan="5">
							<a href="">
								<img src="https://i.ibb.co/PjdHtmV/In-cio.jpg" height="250" width="650">
							</a>
						</td>
				</tr>
			</table>
	<form method="get" action="">

		<?php

$dados_do_site = file_get_contents('https://economia.uol.com.br/cotacoes/');

$dolar = explode('Dólar Comercial <svg class="svg-single-arrow-right linkDolar svgStyle">', $dados_do_site);
$var1 = explode('</h3>', $dolar[1]);
$var2 = explode('class="subtituloGrafico subtituloGraficoValor">', $var1[0]);

list($dolares, $i) = $var2;

$j = substr($i,0,8);

if(isset($_GET["P"])){

	$_GET["P"] = substr($_GET["P"], 3);

	$_GET["Cotação"] = substr($_GET["Cotação"], 3);

	$_GET["P"] = str_replace(".","",$_GET['P']);

	$_GET["P"] = str_replace(",",".",$_GET['P']);

	$_GET["Cotação"] = str_replace(".","",$_GET['Cotação']);

	$_GET["Cotação"] = str_replace(",",".",$_GET['Cotação']);

	$P = (float) $_GET["P"];

	$Q = (float) $_GET["Q"];

	if($_GET["T"] == 'A' && $Q>50){
		echo "<script>alert('A quantidade máxima para o tipo A é 50, portanto essa será a quantidade calculada!');</script>";
		$Q=50;
	}

	if($_GET["T"] == 'B' && $Q>30){
		echo "<script>alert('A quantidade máxima para o tipo B é 30, portanto essa será a quantidade calculada!');</script>";
		$Q=30;
	}

	if($_GET["T"] == 'C' && $Q>20){
		echo "<script>alert('A quantidade máxima para o tipo C é 20, portanto essa será a quantidade calculada!');</script>";
		$Q=20;
	}

	$Cotação = (float) $_GET["Cotação"];

	$PT = $P * $Q;

	$PTD = $PT * $Cotação;

	$PT = "R$ " . number_format($PT, 2, '.', ',');

	$PTD = "US$ " . number_format($PTD, 2, ',', '.');
}
else{
	$PT = 0;
	$PTD = 0;
}

?>
	<table align="center">
		<tr>
			<td align="center" colspan="2" style="padding-top:1px; color: red">
			<div style="border: solid 4px; border-color:rgba(51, 0, 102, 0.8); background-color:rgba(0, 204, 204, 0.5)"><b>RECEBIMENTO DE DADOS:</b></div>
		</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
			<b>Insira os seguintes dados:</b>
		</td>
		</tr>
		<tr>
	<td>Tipo de ovo de Páscoa (só é possível solicitar ovos de um tipo por pedido):</td>
	<td>
	<input style="width: 250px; background-color: white; border-color: orange; color: black; font-family: Caimbra Math;font-size:15px;" id="tipo" type="text" maxlength="1" name="T" required>
	</td>
</tr>
	<tr>
		<td>
	Preço do ovo de Páscoa desse tipo:
</td>
<td>
	<input style="width: 250px; background-color: white; border-color: orange; color: black; font-family: Caimbra Math;font-size:15px;" class="reais" type="text" name="P" required>
	<script type="text/javascript" 
				src="http://files.rafaelwendel.com/jquery.js">
    			</script>
   				<script type="text/javascript" 
    			src="http://files.rafaelwendel.com/jquery.maskMoney.js">
    			</script>
	<script type="text/javascript">
  													$(function() {
  				$("input.reais").maskMoney({showSymbol:true, symbolStay: true, symbol:'R$ ', decimal: ',', thousands: '.'});
				});
												</script>
</td>
</tr>
<tr>
	<td>Quantidade de ovos de Páscoa:</td>
	<td>
	<input style="width: 250px; background-color: white; border-color: orange; color: black; font-family: Caimbra Math;font-size:15px;" maxlength="2" id="número" type="text" name="Q" required>
	</td>
</tr>
<tr>
	<td>Cotação do dólar:</td>
	<td>
	<input style="width: 250px; background-color: white; border-color: orange; color: black; font-family: Caimbra Math;font-size:15px;" class="reais" type="text" name="Cotação" required>
	</td>
</tr>
<tr>
			<td align="center" colspan="2" style="padding-top: 10px">
			<b>Você pode utilizar no cálculo (retirado de <a target="_blank" href="https://economia.uol.com.br/cotacoes/"><FONT style="color:blue">Economia UOL</a></FONT>):</a></b>
		</td>
		</tr>
		<script type="text/javascript">
						$("#número").on("input", function(){
  						var regexp = /[^0-9]/g;
  						if(this.value.match(regexp)){
   						 $(this).val(this.value.replace(regexp,''));
 						 }
						});
					</script>
					<script type="text/javascript">
						$("#tipo").on("input", function(){
  						var regexp = /[^ABC]/g;
  						if(this.value.match(regexp)){
   						 $(this).val(this.value.replace(regexp,''));
 						 }
						});
					</script>
	<tr align="center">
		<td>
	Cotação do dólar em tempo real (recarregue a página para atualizar):
</td>
<td style="width:55px">
	<input style="padding-top:5px; width: 55px; font-family: Caimbra Math; font-size:15.5px; background-color: white; color: red; border-color: transparent;" disabled type="text" name="Dolar" value="<?php echo $j; ?>">
</td>
<tr>
	<td align="center" style="padding-top: 10px" colspan="2">
	<input style="background-color: green; cursor: pointer; color: white; border-color: yellow"; type="submit" value="CALCULAR">
</td>
</tr>
<tr>
			<td align="center" colspan="2" style="padding-top: 15px; color: red">
			<div style="border: solid 4px; border-color:rgba(51, 0, 102, 0.8); background-color:rgba(0, 204, 204, 0.5)"><b>RESULTADO:</b></div>
		</td>
		</tr>
	<tr>
		<td>
	Valor da compra em reais:
</td>
<td>
	<style type="text/css">
		.p:focus ~ .o{
			color: white;
		}
	</style>
	<input style="width: 250px; font-weight: bold; background-color: white; border-color: orange; color: black; font-family: Caimbra Math; font-size:17px;" disabled type="text" name="Convertido" value="<?php echo $PT;?>" class="o">
</td>
</tr>
<tr>
		<td>
	Valor da compra em dólares:
</td>
<td>
	<style type="text/css">
		.p:focus ~ .o{
			color: white;
		}
	</style>
	<input style="width: 250px; font-weight: bold; background-color: white; border-color: orange; color: black; font-family: Caimbra Math; font-size:17px;" disabled type="text" name="Convertido" value="<?php echo $PTD;?>" class="o">
</td>
</tr>
	</table>
	</form>
</body>
</html>