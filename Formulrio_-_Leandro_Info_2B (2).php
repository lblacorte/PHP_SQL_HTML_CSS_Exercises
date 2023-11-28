<!DOCTYPE html>
<html>
<head>
	<title>Formulário - Leandro Lacorte | Info 2B</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
</head>
<body style="background-image: url(https://i.ibb.co/MsXDdxR/Imagem-de-fundo.jpg); background-attachment: fixed; background-repeat: no-repeat; background-position: center top" topmargin="0" bgproperties="fixed">
	<form name="Cadastro" method="post">
		<table border="0" width="330" align=center >
				<td colspan=3>
					<FONT style="font-family:Open Sans, Arial Narrow, Gadugi, Arial; font-size:9.5pt">
						<center>Faça seu pré-cadastro e seja um dos primeiros </center>
					</FONT>
				</td>
			</tr>
			<tr class="e1">
					<style type="text/css">
						.e1{
							vertical-align: bottom;
							line-height: 0.6;
						}
					</style>
				<td height="46" colspan=3>
					<FONT style="font-family: Franklin Gothic Medium, Arial Narrow, Gadugi, Arial; font-size:12pt">
						<b>NOME</b>
					</FONT>
					&nbsp;
					<FONT style="font-family:Playbill, Forte, Arial; color:red; font-size:11pt">
						<b>*</b>
					</FONT>
				</td>
			</tr>
			<tr>
				<td colspan=3>
					<input id="nome" type="name" name="NOME" style="border-radius: 3px; border: solid 1.5px; border-color: #b5b5b5; height:19px; width:330px; background-color: transparent" required>
						<script type="text/javascript">
							$("#nome").on("input", function(){
  							var regexp = /[^a-zA-Záàâãéèêíïóôõöúçñ ]/g;
  							if(this.value.match(regexp)){
   							$(this).val(this.value.replace(regexp,''));
  							}
							});
						</script>
				</td>
			</tr>
			<tr class="e1">
				<td height="46" colspan=3>
					<FONT style="font-family:Franklin Gothic Medium, Arial Narrow, Gadugi, Arial; font-size:12pt">
						<b>CONTATO</b>
					</FONT>
					&nbsp;
					<FONT style="font-family:Playbill, Forte, Arial; color:red; font-size:11pt">
						<b>*</b>
					</FONT>
				</td>
			</tr>
			<tr>
				<td>
					<input type="number" name="DDD" min="11" max="99" maxlength="2"  style="border-radius: 3px; border: solid 1.5px; border-color: #b5b5b5; height:19px; width:107px; background-color: transparent" required>
				</td>
				<td style="width:0.8px">
				</td>
				<td>
					<input type="text" id="número" name="TELEFONE" minlength="8" maxlength="9" style="border-radius: 3px; border: solid 1.5px; border-color: #b5b5b5; height:19px; width:206.5px; background-color: transparent" required>
				</td>
					<script type="text/javascript">
						$("#número").on("input", function(){
  						var regexp = /[^0-9]/g;
  						if(this.value.match(regexp)){
   						 $(this).val(this.value.replace(regexp,''));
 						 }
						});
					</script>
			</tr>
			<tr class="e2" style="font-family:Maiandra GD, Arial Narrow, Arial; font-size:8.5pt; color:#363636">
				<style type="text/css">
					.e2{
						vertical-align: bottom;
						line-height: 1.2;
					}
				</style>

				<td colspan="2">
					DDD
				</td>
				<td>
					Número de Telefone
				</td>
			<tr class="e1">
				<td height="33" colspan=3>
					<FONT style="font-family:Dubai, Arial Narrow, Gadugi, Arial; font-size:12pt">
						<b>Renda mensal</b>
					</FONT>
			<tr>
				<script type="text/javascript" 
				src="http://files.rafaelwendel.com/jquery.js">
    			</script>
   				<script type="text/javascript" 
    			src="http://files.rafaelwendel.com/jquery.maskMoney.js">
    			</script>
    			<script type="text/javascript">
        		$(function() {
  				$("input.reais").maskMoney({showSymbol:true, symbol:'R$ ', decimal: ',', thousands: '.'});
				});
    			</script>
				<td colspan=3>
					<input type="text" name="RENDA" style="border-radius: 3px; border: solid 1.5px; border-color: #b5b5b5; height:19px; width:330px; background-color: transparent" class=reais >
				</td>
			</tr>
			<tr class="e1">
				<td height="46" colspan=3>
					<FONT style="font-family:Dubai, Arial Narrow, Gadugi, Arial; font-size:12pt">
						<b>Estado Civil</b>
					</FONT>
				</td>
			</tr>
			<style type="text/css">
		
	input[type="radio"] {
  opacity: 0;
}

input[type="radio"] + label {
  position: relative;
  padding-left: 6px;
  cursor: pointer;
  line-height: 1.29;
}

		input[type="radio"] + label::before {
  		content:'';
  		position: absolute;
  		width: 17.5px;
  		height: 17.5px;
  		color: #828282;
  		left: -20px;
  		bottom: 0px;
  		border: solid 1px;
  		vertical-align: bottom;
}

input[type="radio"]:checked + label::after {
  content:'';
  position: absolute;
  left: -19.15px;
  top: -1.12px;
  border-left: solid 9px;
  border-top: solid 9px;
  border-right: solid 9px;
  border-bottom: solid 9px;
  border-image: url(https://i.ibb.co/PzvrLkN/Imagem-do-radio.gif) 1 round;
}

</style>

			<tr>
			<td colspan=3>
			<input id="SOLTEIRO" name="ESTADO CIVIL" type="radio" value="Solteiro">
			<label for="SOLTEIRO">
			<FONT style="font-family:Arial Narrow, Gadugi, Arial; font-size:12pt">
			Solteiro (a)
			</FONT>
			</label>
			</td>
		</tr>
		<tr>
			<td colspan=3>
			<input id="CASADO" name="ESTADO CIVIL" type="radio" value="Casado">
			<label for="CASADO"> 
			<FONT style="font-family:Arial Narrow, Gadugi, Arial; font-size:12pt">
			Casado (a)
			</FONT>
			</label>
			</td>
		</tr>
		<tr>
			<td colspan=3>
			<input id="DIVORCIADO" name="ESTADO CIVIL" type="radio" value="Divorciado">
			<label for="DIVORCIADO"> 
			<FONT style="font-family:Arial Narrow, Gadugi, Arial; font-size:12pt">
			Divorciado (a)
			</FONT>
			</label>
			</td>
		</tr>
		<tr>
			<td colspan=3>
			<input id="VIÚVO" name="ESTADO CIVIL" type="radio" value="Viúvo">
			<label for="VIÚVO">
			<FONT style="font-family:Arial Narrow, Gadugi, Arial; font-size:12pt">
			Viúvo (a)
			</FONT>
			</label>
			</td>
		</tr>
		<tr class="e1">
			<td height="46" colspan=3>
				<FONT style="font-family:Dubai, Arial Narrow, Gadugi, Arial; font-size:12pt">
					<b>Possui Dependente(s)</b>
				</FONT>
			</td>
		</tr>
		<tr>
			<td colspan=3>
			<input id="SIM" name="POSSUI DEPENDENTE?" type="radio" value="SIM">
			<label for="SIM">
			<FONT style="font-family:Franklin Gothic Book, Arial Narrow, Gadugi, Arial; font-size:12pt">
			SIM
			</FONT>
			</label>
			</td>
		</tr>
		<tr>
			<td colspan=3>
			<input id="NÃO" name="POSSUI DEPENDENTE?" type="radio" value="NÃO">
			<label for="NÃO"> 
			<FONT style="font-family:Franklin Gothic Book, Arial Narrow, Gadugi, Arial; font-size:12pt">
			NÃO
			</FONT>
			</label>
			</td>
		</tr>
		<tr>
			<td colspan=3 align=center height="175">
			<button type="submit" style="width: 73.5px; height:36.5px; border: solid 0.8px; border-radius: 7px; background-color: #4b88a7; border-color: #38799a; cursor: pointer"> <FONT style="font-family: Nirmala UI Semilight, Arial Narrow, Gadugi, Arial; font-size:10.1pt; color: white"> <b>ENVIAR</b> </FONT></button>
			</td>
		</tr>
</body>
</html>