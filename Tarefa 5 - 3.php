<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
	<title>Calculadora de consumo médio de combustível | Leandro Lacorte - Info 2B</title>
</head>
<body style=
	"font-family: Arial Narrow, Arial; 
	color: black; 
	background-color: rgba(255, 255, 255, 0.486);
  background-blend-mode: overlay;
	font-size: 12pt; 
	background-image: url(https://i.ibb.co/8cTKCLy/Fundo.gif); 
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
								<img src="https://i.ibb.co/4Yd6S90/Cabe-alho.jpg" height="250" width="650">
							</a>
						</td>
				</tr>
			</table>
	<form method="get" action="">

<?php

$dados_do_site = file_get_contents('https://precodoscombustiveis.com.br/pt-br/city/brasil/rio-grande-do-sul/santa-maria/4967');

$menor = explode('Menor preço:</span><span class="text-success text-right float-right font-weight-normal" style="font-size:18px;">', $dados_do_site);
$var1 = explode('</span>', $menor[1]);

list($j) = $var1;

$j = str_replace(".",",",$j);

$maior = explode('Maior preço:</span><span class="text-danger text-right float-right font-weight-normal" style="font-size:18px;">', $dados_do_site);
$var1 = explode('</span>', $maior[1]);

list($k) = $var1;

$k = str_replace(".",",",$k);

$menorposto = explode('alt="Ir para o posto ', $dados_do_site);
$var3 = explode('"', $menorposto[1]);

list($q) = $var3;

$maiorposto = explode('Menor preço', $dados_do_site);
$var4 = explode('Maior preço', $maiorposto[1]);
$var5 = explode('Ir para o posto ', $var4[0]);
$var6 = explode('" title="Ir para', $var5[1]);

list($w) = $var6;

if(isset($_GET["litros"])){

	$_GET["litros"] = str_replace(".","",$_GET['litros']);

	$_GET["litros"] = str_replace(",",".",$_GET['litros']);

	$_GET["quilometros"] = str_replace(".","",$_GET['quilometros']);

	$_GET["quilometros"] = str_replace(",",".",$_GET['quilometros']);

	$_GET["capacidade"] = str_replace(".","",$_GET['capacidade']);

	$_GET["capacidade"] = str_replace(",",".",$_GET['capacidade']);

	$capacidade = (float) $_GET["capacidade"];

	$quilometros = (float) $_GET["quilometros"];

	$litros = (float) $_GET["litros"];

	$consumo = $quilometros / $litros . " km/l";

	$restante = $capacidade - $litros . " litros";
}
else{
	$consumo=0;
	$restante=0;
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
	<td>Capacidade do tanque do automóvel:</td>
	<td>
	<input style="width: 250px; background-color: white; border-color: orange; color: black; font-family: Caimbra Math;font-size:15px;" class="reais" type="text" id="capacidade" name="capacidade" required>
	<label class="litros" for="capacidade">litros</label>
	<style type="text/css">
	.litros{
  font-size:14px;
  font-family:sans-serif;
  margin-left:-40px;
}
.quilometros{
  font-size:14px;
  font-family:sans-serif;
  margin-left:-30px;
}
</style>
	</td>
</tr>
	<tr>
		<td>
	Quantidade de litros abastecidos (considera-se que o tanque é totalmente cheio a cada abastecimento):
</td>
<td>
	<input style="width: 250px; background-color: white; border-color: orange; color: black; font-family: Caimbra Math;font-size:15px;" class="reais" id="abastecidos" type="text" name="litros" required>
	<label class="litros" for="abastecidos">litros</label>
	<script type="text/javascript" 
				src="http://files.rafaelwendel.com/jquery.js">
    			</script>
   				<script type="text/javascript" 
    			src="http://files.rafaelwendel.com/jquery.maskMoney.js">
    			</script>
	<script type="text/javascript">
  													$(function() {
  				$("input.reais").maskMoney({precision:3, decimal: ',', thousands: '.'});
				});
												</script>
</td>
<tr>
	<tr>
		<td>
	Quilometragem percorrida desde o último abastecimento:
</td>
<td>
	<input style="width: 250px; background-color: white; border-color: orange; color: black; font-family: Caimbra Math;font-size:15px;" class="reais" id="quilometros" type="text" name="quilometros" required>
	<label class="quilometros" for="quilometros">km</label>
</td>
<tr>
			<td align="center" colspan="2" style="padding-top: 10px">
			<b>UTILIDADE - Valor da gasolina em Santa Maria/RS em tempo real (retirado de <a target="_blank" href="https://precodoscombustiveis.com.br/pt-br/city/brasil/rio-grande-do-sul/santa-maria/4967"><FONT style="color:blue">Preço dos Combustíveis</a></FONT>):</a></b>
		</td>
		</tr>
	<tr align="center">
		<td colspan="2">
	Valor mais barato encontrado:
	<input style="padding-top:5px; width: 58px; font-family: Caimbra Math; font-size:15.5px; background-color: white; color: red; border-color: transparent;" disabled type="text" name="Dolar" value="<?php echo $j; ?>">
	<input style="padding-top:5px; width: 125px; font-family: Caimbra Math; font-size:15.5px; background-color: yellow; color: red; border-color: transparent;" disabled type="text" name="Dolar" value="Em: <?php echo $q; ?>">
</td>
</tr>
<tr align="center">
		<td colspan="2">
	Valor mais caro encontrado:
	<input style="padding-top:5px; width: 58px; font-family: Caimbra Math; font-size:15.5px; background-color: white; color: red; border-color: transparent;" disabled type="text" name="Dolar" value="<?php echo $k; ?>">
	<input style="padding-top:5px; width: 125px; font-family: Caimbra Math; font-size:15.5px; background-color: yellow; color: red; border-color: transparent;" disabled type="text" name="Dolar" value="Em: <?php echo $w; ?>">
</td>
</tr>
<tr>
	<td align="center" style="padding-top: 8px" colspan="2">
	<input style="background-color: green; cursor: pointer; color: white; border-color: yellow"; type="submit" value="CALCULAR">
</td>
</tr>
<tr>
			<td align="center" colspan="2" style="padding-top: 10px; color: red">
			<div style="border: solid 4px; border-color:rgba(51, 0, 102, 0.8); background-color:rgba(0, 204, 204, 0.5)"><b>RESULTADO:</b></div>
		</td>
		</tr>
	<tr>
		<td>
	Consumo médio de combustível desse automóvel:
</td>
<td>
	<input style="width: 250px; font-weight: bold; background-color: white; border-color: orange; color: black; font-family: Caimbra Math; font-size:17px;" disabled type="text" name="Convertido" value="<?php echo $consumo?>">
</td>
</tr>
<tr>
		<td>
	Quantidade de gasolina que havia no tanque antes de abastecer:
</td>
<td>
	<input style="width: 250px; font-weight: bold; background-color: white; border-color: orange; color: black; font-family: Caimbra Math; font-size:17px;" disabled type="text" name="Convertido" value="<?php echo $restante?>">
</td>
</tr>
	</table>
	</form>
</body>
</html>