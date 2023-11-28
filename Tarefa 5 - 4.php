<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
	<title>Conversor de valor de produto de reais para dólares | Leandro Lacorte - Info 2B</title>
</head>
<body style=
	"font-family: Arial Narrow, Arial; 
	color: white; 
	font-size: 12pt; 
	background-image: url(https://i.ibb.co/KbfPsXN/Fundo.gif); 
	background-repeat: no-repeat; 
	background-position: center fixed;    
	background-color: rgba(255, 255, 255, 0.486);
  background-blend-mode: overlay;
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
								<img src="https://i.ibb.co/2W6vhXC/In-cio.jpg" height="250" width="650">
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

if(isset($_GET["Reais"])){

	$_GET["Reais"] = substr($_GET["Reais"], 3);

	$_GET["Cotação"] = substr($_GET["Cotação"], 3);

	$_GET["Reais"] = str_replace(".","",$_GET['Reais']);

	$_GET["Reais"] = str_replace(",",".",$_GET['Reais']);

	$_GET["Cotação"] = str_replace(".","",$_GET['Cotação']);

	$_GET["Cotação"] = str_replace(",",".",$_GET['Cotação']);

	$reais = (float) $_GET["Reais"];

	$cotacao = (float) $_GET["Cotação"];

	$dolares = $reais * $cotacao;

	$dolares = "US$ " . number_format($dolares, 2, ',', '.');
}
else{
	$dolares=0;
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
	<td>Preço do produto em reais:</td>
	<td>
	<input style="width: 250px; background-color: white; border-color: orange; color: black; font-family: Caimbra Math;font-size:15px;" class="reais" type="text" name="Reais" required>
	</td>
	<tr>
		<td>
	Cotação do dólar:
</td>
<td>
	<input style="width: 250px; background-color: white; border-color: orange; color: black; font-family: Caimbra Math;font-size:15px;" class="reais" type="text" name="Cotação" required>
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
<tr>
			<td align="center" colspan="2" style="padding-top: 50px">
			<b>Você pode utilizar na conversão (retirado de <a target="_blank" href="https://economia.uol.com.br/cotacoes/"><FONT style="color:blue">Economia UOL</a></FONT>):</a></b>
		</td>
		</tr>
	<tr align="center">
		<td>
	Cotação do dólar em tempo real (recarregue a página para atualizar):
</td>
<td style="width:55px">
	<input style="padding-top:5px; width: 55px; font-family: Caimbra Math; font-size:15.5px; background-color: white; color: red; border-color: transparent;" disabled type="text" name="Dolar" value="<?php echo $j; ?>">
</td>
<tr>
	<td align="center" style="padding-top: 30px" colspan="2">
	<input style="background-color: green; cursor: pointer; color: white; border-color: yellow"; type="submit" value="CONVERTER">
</td>
</tr>
<tr>
			<td align="center" colspan="2" style="padding-top: 30px; color: red">
			<div style="border: solid 4px; border-color:rgba(51, 0, 102, 0.8); background-color:rgba(0, 204, 204, 0.5)"><b>RESULTADO:</b></div>
		</td>
		</tr>
	<tr>
		<td>
	Preço do produto convertido para dólares:
</td>
<td>
	<style type="text/css">
		.p:focus ~ .o{
			color: white;
		}
	</style>
	<input style="width: 250px; font-weight: bold; background-color: white; border-color: orange; color: black; font-family: Caimbra Math; font-size:17px;" disabled type="text" name="Convertido" value="<?php echo $dolares;?>" class="o">
</td>
</tr>
	</table>
	</form>
</body>
</html>