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
	background-image: url(https://i.ibb.co/CWLkD92/Fundo.gif);
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
								<img src="https://i.ibb.co/DpbdswR/In-cio.jpg" height="250" width="650">
							</a>
						</td>
				</tr>
			</table>
	<form method="get" action="">

		<?php

if(isset($_GET["primeiro"])){

	$_GET["primeiro"] = str_replace(",",".",$_GET['primeiro']);

	$_GET["primeiro"] = str_replace("√","r",$_GET['primeiro']);

	$_GET["primeiro"] = str_replace("×","m",$_GET['primeiro']);

	$_GET["segundo"] = str_replace(",",".",$_GET['segundo']);

	$_GET["terceiro"] = str_replace(",",".",$_GET['terceiro']);

	if(preg_match('#r#', $_GET["primeiro"])){

	if(preg_match('#m#', $_GET["primeiro"])){

	$raiz = explode('m', $_GET["primeiro"][1]);

	$mult = explode('m', $_GET["primeiro"][1]);

	list($raiz) = $raiz;

	list($mult) = $mult;

	$_GET["primeiro"] = (float) $_GET["primeiro"];

	}
	else{
	$_GET["primeiro"] = explode('r', $_GET["primeiro"]);

	$_GET["primeiro"] = (float) $_GET["primeiro"];

	$_GET["primeiro"] = sqrt($_GET["primeiro"]);
	}
}

	if(preg_match('#r#', $_GET["segundo"])){

	if(preg_match('#m#', $_GET["segundo"])){

	$raiz = explode('r', $_GET["segundo"]);

	$mult = explode('m', $_GET["segundo"][1]);

	$raiz = (float) $raiz;
	
	$mult = (float) $mult;

	$_GET["segundo"] = sqrt($raiz) * $mult;

	}
	else{
	$_GET["segundo"] = explode('r', $_GET["segundo"]);

	$_GET["segundo"] = (float) $_GET["segundo"];

	$_GET["segundo"] = sqrt($_GET["segundo"]);
	}
}
	
	if(preg_match('#r#', $_GET["terceiro"])){

	if(preg_match('#m#', $_GET["terceiro"])){

	$raiz = explode('r', $_GET["terceiro"]);

	$mult = explode('m', $_GET["terceiro"][1]);

	$raiz = (float) $raiz;

	$mult = (float) $mult;

	$_GET["terceiro"] = sqrt($raiz) * $mult;

	}
	else{
	$_GET["terceiro"] = explode('r', $_GET["terceiro"]);

	$_GET["terceiro"] = (float) $_GET["terceiro"];

	$_GET["terceiro"] = sqrt($_GET["terceiro"]);
	}
}

	$a = pow($_GET["primeiro"], 2) + pow($_GET["segundo"], 2);

	$b = pow($_GET["primeiro"], 2) + pow($_GET["terceiro"], 2);

	$c = pow($_GET["terceiro"], 2) + pow($_GET["segundo"], 2);

	$d = pow($_GET["primeiro"], 2);

	$e = pow($_GET["segundo"], 2);

	$f = pow($_GET["terceiro"], 2);

	if($_GET["primeiro"] == $_GET["segundo"] && $_GET["primeiro"] == $_GET["terceiro"] && $_GET["segundo"] == $_GET["terceiro"]){
		$tipo = 'Triângulo equilátero';
	}
	else{
		if($_GET["primeiro"] == $_GET["segundo"] || $_GET["primeiro"] == $_GET["terceiro"] || $_GET["segundo"] == $_GET["terceiro"]){
			if($d==$c || $e==$b || $f==$a){
				$tipo = 'Triângulo retângulo isósceles';
			}
			else{
				$tipo = 'Triângulo isósceles';
			}
		}
		else{
			if($d==$c || $e==$b || $f==$a){
				$tipo = 'Triângulo retângulo escaleno';
			}
			else{
				$tipo = 'Triângulo escaleno';
			}
		}
	}
}
else{
	$tipo='';
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
			<b>Insira os seguintes dados:<br>Obs. 1: Digite "r" para raiz quadrada e "*" para multiplicação. Ex.: 4*r2 = 4×√2.<br>Obs. 2: O sinal de multiplicação precisa aparecer. Ex.: 3r5 = 3√5 - errado; 3*5r = 3×√5 - certo.<br>Obs. 3: Simplifique o máximo possível, pois você pode usar apenas um "√" e um "×" para cada lado.<br>Obs. 4: Se houver multiplicação, escreva a raiz por último. Ex.: 5r*3 = √5×3 - errado; 3*5r = 3×√5 - certo.</b>
		</td>
		</tr>
	<tr>
	<td>Comprimento do primeiro lado (em pixels):</td>
	<td>
		<style type="text/css">
	.pixels{
  font-size:14px;
  color:black;
  font-family:sans-serif;
  margin-left:-30px;
</style>
	<input style="width: 250px; background-color: white; border-color: orange; color: black; font-family: Caimbra Math;font-size:15px;" id="numero1" type="text" name="primeiro" required>
	<label class="pixels" for="primeiro">px</label>
	</td>
</tr>
<tr>
	<td>Comprimento do segundo lado (em pixels):</td>
	<td>
	<input style="width: 250px; background-color: white; border-color: orange; color: black; font-family: Caimbra Math;font-size:15px;" id="numero2" type="text" name="segundo" required>
	<label class="pixels" for="segundo">px</label>
	</td>
</tr>
<tr>
	<td>Comprimento do terceiro lado (em pixels):</td>
	<td>
	<input style="width: 250px; background-color: white; border-color: orange; color: black; font-family: Caimbra Math;font-size:15px;" id="numero3" type="text" name="terceiro" required>
	<label class="pixels" for="terceiro">px</label>
	</td>
</tr>
<script type="text/javascript">
													$("#numero1").on("input", function(){
  														var numeros = /[^0-9,r×√()*]/g;
  													if(this.value.match(numeros)){
   														$(this).val(this.value.replace(numeros,''));
  													}
  													var vezes = /[^0-9,r()×√]/g;
  													if(this.value.match(vezes)){
   														$(this).val(this.value.replace(vezes,'×'));
  													}
  													var raiz = /[^0-9,*()×√]/g;
  													if(this.value.match(raiz)){
   														$(this).val(this.value.replace(raiz,'√'));
  													}
													});
												</script>
												<script type="text/javascript">
													$("#numero2").on("input", function(){
  														var numeros = /[^0-9,r×√*]/g;
  													if(this.value.match(numeros)){
   														$(this).val(this.value.replace(numeros,''));
  													}
  													var vezes = /[^0-9,r×√]/g;
  													if(this.value.match(vezes)){
   														$(this).val(this.value.replace(vezes,'×'));
  													}
  													var raiz = /[^0-9,*×√]/g;
  													if(this.value.match(raiz)){
   														$(this).val(this.value.replace(raiz,'√'));
  													}
													});
												</script>
												<script type="text/javascript">
													$("#numero3").on("input", function(){
  														var numeros = /[^0-9,r×√*]/g;
  													if(this.value.match(numeros)){
   														$(this).val(this.value.replace(numeros,''));
  													}
  													var vezes = /[^0-9,r×√]/g;
  													if(this.value.match(vezes)){
   														$(this).val(this.value.replace(vezes,'×'));
  													}
  													var raiz = /[^0-9,*×√]/g;
  													if(this.value.match(raiz)){
   														$(this).val(this.value.replace(raiz,'√'));
  													}
													});
												</script>
<tr>
	<td align="center" style="padding-top: 30px" colspan="2">
	<input style="background-color: green; cursor: pointer; color: white; border-color: yellow"; type="submit" value="CALCULAR">
</td>
</tr>
<tr>
			<td align="center" colspan="2" style="padding-top: 30px; color: red">
			<div style="border: solid 4px; border-color:rgba(51, 0, 102, 0.8); background-color:rgba(0, 204, 204, 0.5)"><b>RESULTADO:</b></div>
		</td>
		</tr>
	<tr>
		<td>
	Tipo do triângulo:
</td>
<td>
	<style type="text/css">
		.p:focus ~ .o{
			color: white;
		}
	</style>
	<input style="width: 250px; font-weight: bold; background-color: white; border-color: orange; color: black; font-family: Caimbra Math; font-size:17px;" disabled type="text" name="Convertido" value="<?php echo $tipo;?>" class="o">
</td>
</tr>
	</table>
	</form>
</body>
</html>