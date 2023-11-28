<!DOCTYPE html>
<html>
<!-- CÓDIGO DA PÁGINA HTML: -->
<head>
	<meta charset="utf-8">
		<title>Formulário com Envio - Leandro Lacorte | Info 2B</title>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="http://digitalbush.com/wp-content/uploads/2014/10/jquery.maskedinput.js"></script>
</head>
<!-- CÓDIGO DO MENU E CABEÇALHO: -->
<body
	style=
	"font-family: Arial Narrow, Arial; 
	color: white; 
	font-size: 12pt; 
	background-image: url(https://i.ibb.co/BgTzvzh/FUNDO.gif); 
	background-repeat: no-repeat; 
	background-position: center fixed;    
	-webkit-background-size: cover;   
	-moz-background-size: cover;   
	-o-background-size: cover;   
	background-size: cover;" 
	bgproperties="fixed" topmargin="0">
		<form name="Cabeçalho">
			<table border="0" align=center class="cabeçalho" style="border-collapse: collapse">
				<tr>
					<style type="text/css">
						.cabeçalho{
							margin-top: 7px;
						}
					</style>
						<td colspan="5">
							<a href="">
								<img src="https://i.ibb.co/j37hnBZ/CABE-ALHO-DO-FORMUL-RIO.jpg">
							</a>
						</td>
				</tr>
				<tr 
				style=
				"background-color: red;
				vertical-align: middle;">
					<td 
						style=
						"border: solid 1px; 
						border-color: black;" 
						width="15">
							<a href="">
								<button type="button" name="INÍCIO" 
									style=
									"background-color: transparent; 
									height: 30px; 
									border-color: transparent; 
									cursor: pointer">
										<FONT 
											style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt;">
												<center><b>INÍCIO</b></center>
										</FONT>
								</button>
							</a>
					</td>
					<td
						style=
						"border: solid 1px; 
						border-color: black" 
						width="50">
							<a href="#GET">
								<button type="button" name="GET" 
									style=
									"background-color: transparent; 
									height: 30px; 
									width: 120px;
									border-color: transparent; 
									cursor: pointer">
										<FONT 
											style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt;">
												<center><b>MÉTODO GET</b></center>
										</FONT>
								</button>
							</a>
					</td>
					<td colspan="2" width="15" 
						style=
						"border: solid 1px; 
						border-color: black">
							<a href="#POST">
								<button type="button" name="POST" 
									style=
									"background-color: transparent; 
									height: 30px; 
									width: 128px; 
									border-color: transparent; 
									cursor: pointer"> 
										<FONT 
											style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt;">
												<center><b>MÉTODO POST</b></center>
										</FONT>
								</button>
							</a>
					</td>
<!-- ALGORITMO DO HORÁRIO ATUALIZADO EM TEMPO REAL: -->
					<td width="761" 
						style=
						"border: solid 1px; 
						border-color: black; 
						text-align: right; 
						padding-right: 15px; 
						vertical-align: middle;">
							<div>
								<FONT 
									style=
									"font-family: Arial Narrow, Arial; 
									color: white; 
									font-size: 10pt;">
										Horário atualizado em tempo real:
										&nbsp;&nbsp;
								</FONT>
									<output id="data" 
										style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt; 
											font-style: italic; 
											text-align: right;">
									</output>
									&nbsp;
									<output id="hora" 
										style=
											"font-family: Arial Narrow, Arial; 
											color: white; 
											font-size: 12pt; 
											font-style: italic; 
											text-align: right;">
									</output>
							</div>
								<script>
									jQuery(window).load(function($){
										horário();
									});
										function horário(){ 
											var agora = new Date();
												var hora = agora.getHours();
												var minuto = agora.getMinutes();
												var segundo = agora.getSeconds();
												var dia = agora.getDate();
												var mês = agora.getMonth() + 1;
												var ano = agora.getFullYear();
										if (dia < 10){ 
											dia = "0" + dia;
										}
										if (mês < 10){ 
											mês = "0" + mês;
										}
										if (hora < 10){ 
											hora = "0" + hora;
										}
										if (minuto < 10){ 
											minuto = "0" + minuto;
										}
										if (segundo < 10){ 
											segundo = "0" + segundo;
										}
											formato_data = dia + "/" + mês + "/" + ano;
											formato_hora = hora + ":" + minuto + ":" + segundo;
												document.getElementById("data").innerHTML = formato_data;
												document.getElementById("hora").innerHTML = formato_hora;
													setTimeout("horário()",1000);
										}
								</script>
					</td>
				</tr>
			</table>
		</form>
<!-- CÓDIGO DO FORMULÁRIO COM ENVIO PELO MÉTODO GET: -->
		<section id="GET">
			<br>
			<br>
				<form id="get" class="get" name="Formulário com envio pelo método GET" method="get" action="" style="margin-top: 20px">
					<table border="15" align=center 
						style=
						"border-image: url(https://i.ibb.co/YT850hT/BORDA-GET.jpg) 10% round; 
						background-color: #001041; 
						color: #ffefbe" 
						width="500">
							<tr>
								<td colspan="2" 
									style=
									"font-style: italic; 
									border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #ffefbe">
										<center>
											<b>
												FORMULÁRIO COM ENVIO PELO MÉTODO
													<FONT style="color: red">
														GET
													</FONT>
														:
											</b>
										</center>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<center><b>Nome:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<input id="nome_get" type="text" name="NOME" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px; 
											background-color: transparent; 
											color: #ffefbe; 
											width: 320px; 
											height: 20px; 
											border: solid 1px; 
											border-color: 001041;">
												<script type="text/javascript">
													$("#nome_get").on("input", function(){
  														var letras_e_acentos = /[^a-zA-Záàâãéèêíïóôõöúçñ ]/g;
  													if(this.value.match(letras_e_acentos)){
   														$(this).val(this.value.replace(letras_e_acentos,''));
  													}
													});
												</script>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<center><b>Sexo:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<select name="SEXO" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px;
											width: 326px; 
											height: 25px; 
											border: solid 1px; 
											border-color: 001041; 
											background-color: transparent; 
											color: #ffefbe;">
												<option style="background-color: #ffefbe;" data-default disabled selected value="">
													Selecione uma das opções.
												</option>
												<option style="background-color: #001041;" value="Masculino">
													Masculino
												</option>
												<option style="background-color: #001041;" value="Feminino">
													Feminino
												</option>
												<option style="background-color: #001041;" value="Prefiro não dizer">
													Prefiro não dizer
												</option>
										</select>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<center><b>CPF:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<input id="cpf_get" type="text" class="cpf_get" name="CPF" maxlength="14" minlength="14" placeholder="XXX.XXX.XXX-XX" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px;
											background-color: transparent; 
											color:#ffefbe;
											width: 320px; 
											height: 20px; 
											border: solid 1px; 
											border-color: 001041;">
												<script type="text/javascript">
													$("#cpf_get").on("input", function(){
  														var caracteres_cpf = /[^0-9./-]/g;
  													if(this.value.match(caracteres_cpf)){
   														$(this).val(this.value.replace(caracteres_cpf,''));
  													}
													});
													jQuery(".cpf_get").mask("999.999.999-99");
												</script>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<center><b>RG:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<input id="rg_get" type="text" name="RG" maxlength="13" minlength="5" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px;
											background-color: transparent; 
											color: #ffefbe;
											width: 320px; 
											height: 20px; 
											border: solid 1px; 
											border-color: 001041;">
												<script type="text/javascript">
													$("#rg_get").on("input", function(){
  														var caracteres_rg = /[^0-9A-Z]/g;
  													if(this.value.match(caracteres_rg)){
   														$(this).val(this.value.replace(caracteres_rg,''));
  													}
													});
												</script>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<center><b>É estrangeiro?</b></center>
								</td>
								<td 
									style=
									"margin-top: 1px; 
									margin-bottom: 3px; 
									height: 25px; 
									border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<input type="radio" name="ESTRANGEIRO" value="Sim" required>
											Sim
											&nbsp;
											&nbsp;
										<input type="radio" class="b" name="ESTRANGEIRO" value="Não">
											Não
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<center><b>E-mail:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<input type="email" id="email_get" name="E-MAIL" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px;
											background-color: transparent; 
											color: #ffefbe;
											width: 320px; 
											height: 20px; 
											border: solid 1px; 
											border-color: 001041;">
												<script type="text/javascript">
													$("#email_get").on("input", function(){
  														var caracteres_email = /[^0-9a-zA-Z!#$%&'*+-/=?^_`{|}~@. (),:;<>[\]]/g;
  													if(this.value.match(caracteres_email)){
   														$(this).val(this.value.replace(caracteres_email,''));
  													}
													});
												</script>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<center><b>Data de nascimento:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<input type="date" name="NASCIMENTO" required 
											style=
											"font-family: Arial Narrow, Arial;
											margin-top: 1px; 
											margin-bottom: 3px;
											background-color: transparent; 
											color: #ffefbe;
											width: 323px; 
											height: 25px; 
											border: solid 1px; 
											border-color: 001041;">
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<center><b>Altura:</b></center>
								</td>
								<td 
									style=
									"margin-top: 1px; 
									margin-bottom: 3px; 
									height: 25px; 
									border-top:0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<input type="range" class="range_get" value="0" style="width: 250px" name="ALTURA" min="0" max="3" step="0.1" required
											oninput="altura_get.value=value" onchange="altura_get.value=value">
												<style type="text/css">
													.range_get{
    													-webkit-appearance: none;
													}
													.range_get::-webkit-slider-runnable-track {
													    width: 300px;
													    height: 5px;
													    background: blue;
													    border: none;
													    border-radius: 3px;
													}
													.range_get::-webkit-slider-thumb {
													    -webkit-appearance: none;
													    border: none;
													    height: 16px;
													    width: 16px;
													    border-radius: 50%;
													    background: red;
													    margin-top: -4px;
													}
													.range_get:focus {
													    outline: none;
													}
													.range_get:focus::-webkit-slider-runnable-track {
													    background: yellow;
													}
												</style>
													<input type="text" 
														style="
														margin-top: 1px; 
														margin-bottom: 3px; 
														background-color: transparent; 
														border-color: transparent; 
														color: white; 
														width: 20px" 
														id="altura_get" value="0" readonly>
															<FONT style="font-size: 13px">
																metros
															</FONT>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<center><b>Senha:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<input type="password" name="SENHA" id="senha_get" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px;
											background-color: transparent; 
											color: #ffefbe;
											width: 320px; 
											height: 20px; 
											border: solid 1px; 
											border-color: 001041;">
												<script type="text/javascript">
													$("#senha_get").on("input", function(){
  														var caracteres_senha = /[^0-9a-zA-Z@.\-_]/g;
  													if(this.value.match(caracteres_senha)){
   														$(this).val(this.value.replace(caracteres_senha,''));
  													}
													});
												</script>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<center><b>Cor dos olhos:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<select name="OLHOS" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px;
											background-color: transparent; 
											color: #ffefbe;
											width: 326px; 
											height: 25px; 
											border: solid 1px; 
											border-color: 001041;">
												<option style="background-color: #ffefbe;" data-default disabled selected value="">
													Selecione uma das opções.
												</option>
												<option style="background-color: #001041;" value="Azul">
													Azul
												</option>
												<option style="background-color: #001041;" value="Azul-esverdeado">
													Azul-esverdeado
												</option>
												<option style="background-color: #001041;" value="Castanho claro">
													Castanho claro
												</option>
												<option style="background-color: #001041;" value="Castanho escuro">
													Castanho escuro
												</option>
												<option style="background-color: #001041;" value="Verde">
													Verde
												</option>
												<option style="background-color: #001041;" value="Avelã (castanhos-esverdeados)">
													Avelã (castanhos-esverdeados)
												</option>
												<option style="background-color: #001041;" value="Âmbar (ocre ou mel)">
													Âmbar (ocre ou mel)
												</option>
												<option style="background-color: #001041;" value="Vermelho (albinismo)">
													Vermelho (albinismo)
												</option>
												<option style="background-color: #001041;" value="Violeta">
													Violeta
												</option>
												<option style="background-color: #001041;" value="Aniridia (ausência da íris/olho preto)">
													Aniridia (ausência da íris/olho preto)
												</option>
												<option style="background-color: #001041;" value="Heterocromia (um olho de cada cor)">
													Heterocromia (um olho de cada cor)
												</option>
												<option style="background-color: #001041;" value="Outra">
													Outra
												</option>
										</select>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<center><b>Telefone:</b></center>
								</td>
								<td 
									style="border-top: 0px;
									border-right: 0px; 
									border-left: 0px; 
									border-color: #ffefbe;">
										<input type="tel" class="tel_get" name="TELEFONE" id="tel_get" maxlength="16" minlength="16" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px;
											background-color: transparent; 
											color: #ffefbe;
											width: 320px; 
											height: 20px; 
											border: solid 1px; 
											border-color: 001041;">
												<script type="text/javascript">
													$("#tel_get").on("input", function(){
  														var numeros = /[^0-9]/g;
  													if(this.value.match(numeros)){
   														$(this).val(this.value.replace(numeros,''));
  													}
													});
													jQuery(".tel_get").mask("(99) 9999-9999");
												</script>
								</td>
							</tr>
							<tr>
								<td align="left" style="border: 0px;">
									<input align="right" 
										style=
										"margin-top: 20px; 
										border: solid 3px; 
										font-weight: bold; 
										border-radius: 30px; 
										border-color: red; 
										font-family: Arial Narrow, Arial; 
										color: white; 
										font-size: 14pt; 
										background-image: url(https://i.ibb.co/zmMNL2Y/FUNDO-BOT-ES-GET.gif);
										cursor: pointer" 
										type="submit" value="ENVIAR" name="ENVIAR_GET" id="ENVIAR_GET" class="ENVIAR_GET">
								<td align="right" style="border: 0px;">
									<input 
										style=
										"margin-top: 20px; 
										border: solid 3px; 
										border-radius: 30px; 
										font-weight: bold; 
										border-color: red; 
										font-family: Arial Narrow, Arial; 
										color: white; 
										font-size: 14pt; 
										background-image: url(https://i.ibb.co/zmMNL2Y/FUNDO-BOT-ES-GET.gif);
										cursor: pointer" 
										type="reset" value="APAGAR">
								</td>
							</tr>
					</table>
				</form>
		</section>
<!-- CÓDIGO DO FORMULÁRIO COM ENVIO PELO MÉTODO POST: -->		
		<section id="POST">
			<br>
			<br>
				<form id="post" class="post" name="Formulário com envio pelo método POST" method="post" action="" style="padding-bottom: 80px">
					<table border="15" align=center 
						style=
						"border-image: url(https://i.ibb.co/JvCh3PF/BORDA-POST.jpg) 10% round; 
						color: #001041; 
						background-color: #ffefbe;" 
						width="500">
							<tr>
								<td colspan="2" 
									style=
									"font-style: italic; 
									border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<center>
											<b>
												FORMULÁRIO COM ENVIO PELO MÉTODO
													<FONT style="color: green">
														POST
													</FONT>
														:
											</b>
										</center>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<center><b>Nome:</b></center>
								</td>
								<td 
									style=
									"margin-top: 10px; 
									border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<input id="nome_post" type="text" name="NOME" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px;
											background-color: transparent; 
											color: #001041; 
											width: 320px; 
											height: 20px; 
											border: solid 1px; 
											border-color: ffefbe;">
												<script type="text/javascript">
													$("#nome_post").on("input", function(){
  														var letras_e_acentos = /[^a-zA-Záàâãéèêíïóôõöúçñ ]/g;
  													if(this.value.match(letras_e_acentos)){
   														$(this).val(this.value.replace(letras_e_acentos,''));
  													}
													});
												</script>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px;
									border-left: 0px; 
									border-color: #001041;">
										<center><b>Sexo:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<select name="SEXO" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px;
											width: 326px; 
											height: 25px; 
											border: solid 1px; 
											border-color: ffefbe; 
											background-color: transparent; 
											color:#001041;">
												<option style="background-color: #001041;" data-default disabled selected value="">
													Selecione uma das opções.
												</option>
												<option style="background-color: #ffefbe;" value="Masculino">
													Masculino
												</option>
												<option style="background-color: #ffefbe;" value="Feminino">
													Feminino
												</option>
												<option style="background-color: #ffefbe;" value="Prefiro não dizer">
													Prefiro não dizer
												</option>
										</select>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<center><b>CPF:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<input id="cpf_post" class="cpf_post" type="text" name="CPF" maxlength="14" minlength="14" placeholder="XXX.XXX.XXX-XX" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px;
											background-color: transparent; 
											color: #001041; 
											width: 320px; 
											height: 20px; 
											border: solid 1px; 
											border-color: ffefbe;">
												<script type="text/javascript">
													$("#cpf_post").on("input", function(){
  														var caracteres_cpf = /[^0-9./-]/g;
  													if(this.value.match(caracteres_cpf)){
   														$(this).val(this.value.replace(caracteres_cpf,''));
  													}
													});
													jQuery(".cpf_post").mask("999.999.999-99");
												</script>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<center><b>RG:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<input id="rg_post" type="text" name="RG" maxlength="13" minlength="5" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px;
											background-color: transparent; 
											color: #001041; 
											width: 320px; 
											height: 20px; 
											border: solid 1px; 
											border-color: ffefbe;">
												<script type="text/javascript">
													$("#rg_post").on("input", function(){
  														var caracteres_rg = /[^0-9A-Z]/g;
  													if(this.value.match(caracteres_rg)){
   														$(this).val(this.value.replace(caracteres_rg,''));
  													}
													});
												</script>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<center><b>É estrangeiro?</b></center>
								</td>
								<td 
									style=
									"margin-top: 1px; 
									margin-bottom: 3px;
									height: 25px; 
									border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<input type="radio" name="ESTRANGEIRO" value="Sim" required>
											Sim
											&nbsp;
											&nbsp;
										<input type="radio" name="ESTRANGEIRO" value="Não">
											Não
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<center><b>E-mail:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px;
									border-right: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<input type="email" name="E-MAIL" id="email_post" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px;
											background-color: transparent; 
											color: #001041; 
											width: 320px; 
											height: 20px; 
											border: solid 1px; 
											border-color: ffefbe;">
												<script type="text/javascript">
													$("#email_post").on("input", function(){
  														var caracteres_email = /[^0-9a-zA-Z!#$%&'*+-/=?^_`{|}~@. (),:;<>[\]]/g;
  													if(this.value.match(caracteres_email)){
   														$(this).val(this.value.replace(caracteres_email,''));
  													}
													});
												</script>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<center><b>Data de nascimento:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<input type="date" name="NASCIMENTO" required 
											style=
											"font-family: Arial Narrow, Arial;
											margin-top: 1px; 
											margin-bottom: 3px;
											background-color: transparent; 
											color: #001041; 
											width: 323px; 
											height: 25px; 
											border: solid 1px; 
											border-color: ffefbe;">
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<center><b>Altura:</b></center>
								</td>
								<td 
									style=
									"margin-top: 1px; 
									margin-bottom: 3px;
									height: 25px; 
									border-top:0px; 
									border-right: 0px;
									border-left: 0px; 
									border-color: #001041;">
										<input type="range" id="range_post" value="0" class="range_post" style="width:250px" name="ALTURA" min="0" max="3" step="0.1" required
												oninput="altura_post.value=value" onchange="display.value=value">
													<style type="text/css">
														.range_post{
    														-webkit-appearance: none;
														}
														.range_post::-webkit-slider-runnable-track {
														    width: 300px;
														    height: 5px;
														    background: yellow;
														    border: none;
														    border-radius: 3px;
														}
														.range_post::-webkit-slider-thumb {
														    -webkit-appearance: none;
														    border: none;
														    height: 16px;
														    width: 16px;
														    border-radius: 50%;
														    background: green;
														    margin-top: -4px;
														}
														.range_post:focus {
														    outline: none;
														}
														.range_post:focus::-webkit-slider-runnable-track {
														    background: red;
														}
													</style>
										<input type="text" 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px; 
											background-color: transparent; 
											border-color: transparent; 
											color: black; 
											width: 20px"
											id="altura_post" value="0" readonly>
												<FONT style="font-size: 13px">
													metros
												</FONT>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<center><b>Senha:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<input type="password" name="SENHA" minlength="8" maxlength="12" id="senha_post" required 
											style=
												"margin-top: 1px; 
												margin-bottom: 3px;
												background-color: transparent; 
												color: #001041; 
												width: 320px; 
												height: 20px; 
												border: solid 1px; 
												border-color: ffefbe;">
													<script type="text/javascript">
														$("#senha_post").on("input", function(){
  															var caracteres_senha = /[^0-9a-zA-Z@./-_]/g;
  														if(this.value.match(caracteres_senha)){
   															$(this).val(this.value.replace(caracteres_senha,''));
  														}
														});
													</script>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<center><b>Cor dos olhos:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<select name="OLHOS" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px; 
											background-color: transparent; 
											color: #001041;
											width: 326px; 
											height: 25px; 
											border: solid 1px; 
											border-color: ffefbe;">
												<option style="background-color: #001041;" data-default disabled selected value="">
													Selecione uma das opções.
												</option>
												<option style="background-color: #ffefbe;" value="Azul">
													Azul
												</option>
												<option style="background-color: #ffefbe;" value="Azul-esverdeado">
													Azul-esverdeado
												</option>
												<option style="background-color: #ffefbe;" value="Castanho claro">
													Castanho claro
												</option>
												<option style="background-color: #ffefbe;" value="Castanho escuro">
													Castanho escuro
												</option>
												<option style="background-color: #ffefbe;" value="Verde">
													Verde
												</option>
												<option style="background-color: #ffefbe;" value="Avelã (castanhos-esverdeados)">
													Avelã (castanhos-esverdeados)
												</option>
												<option style="background-color: #ffefbe;" value="Âmbar (ocre ou mel)">
													Âmbar (ocre ou mel)
												</option>
												<option style="background-color: #ffefbe;" value="Vermelho (albinismo)">
													Vermelho (albinismo)
												</option>
												<option style="background-color: #ffefbe;" value="Violeta">
													Violeta
												</option>
												<option style="background-color: #ffefbe;" value="Aniridia (ausência da íris/olho preto)">
													Aniridia (ausência da íris/olho preto)
												</option>
												<option style="background-color: #ffefbe;" value="Heterocromia (um olho de cada cor)">
													Heterocromia (um olho de cada cor)
												</option>
												<option style="background-color: #ffefbe;" value="Outra">
													Outra
												</option>
										</select>
								</td>
							</tr>
							<tr>
								<td 
									style=
									"border-top: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<center><b>Telefone:</b></center>
								</td>
								<td 
									style=
									"border-top: 0px; 
									border-right: 0px; 
									border-left: 0px; 
									border-color: #001041;">
										<input type="tel" class="tel_post" name="TELEFONE" id="tel_post" maxlength="16" minlength="816" required 
											style=
											"margin-top: 1px; 
											margin-bottom: 3px;
											background-color: transparent; 
											color: #001041; 
											width: 320px; 
											height: 20px; 
											border: solid 1px; 
											border-color: ffefbe;">
												<script type="text/javascript">
													$("#tel_post").on("input", function(){
  														var numeros = /[^0-9]/g;
  													if(this.value.match(numeros)){
   														$(this).val(this.value.replace(numeros,''));
  													}
													});
													jQuery(".tel_post").mask("(99) 9999-9999");
												</script>
								</td>
							</tr>
							<tr>
								<td align="left" style="border: 0px;">
									<input align="right" 
										style=
										"margin-top: 20px; 
										border: solid 3px; 
										border-radius: 30px; 
										border-color: green; 
										font-family: Arial Narrow, Arial; 
										color: white; 
										font-weight: bold; 
										font-size: 14pt; 
										background-image: url(https://i.ibb.co/TmdGctr/FUNDO-BOT-ES-POST.gif);
										cursor: pointer"
										type="submit" value="ENVIAR" name="ENVIAR_POST" id="ENVIAR_POST" class="ENVIAR_POST">
								</td>
								<td align="right" style="border: 0px;">
									<input 
										style=
										"margin-top: 20px; 
										border: solid 3px; 
										border-radius: 30px; 
										border-color: green; 
										font-family: Arial Narrow, Arial; 
										color: white; 
										font-weight: bold; 
										font-size: 14pt; 
										background-image: url(https://i.ibb.co/TmdGctr/FUNDO-BOT-ES-POST.gif);
										cursor: pointer" 
										type="reset" value="APAGAR">
								</td>
							</tr>
					</table>
				</form>
		</section>
<!-- CÓDIGO DO RODAPÉ: -->
			<table align="center" border="0" style="border-collapse: collapse">
				<tr>
					<td 
						style=
						"height: 5px; 
						background-color: #F3581B; 
						width: 1075px; 
						border-top-left-radius: 8px; 
						border-top-right-radius: 8px">
					</td>
				</tr>
				<tr align="center">
					<td align="center" 
						style=
						"background-color: red; 
						height: 30px; 
						width: 1075px">
							<FONT
								style=
								"font-family: Arial Narrow, Arial; 
								color: white; 
								font-size: 12pt">
									<n>Formulário com Envio | Leandro Lacorte - Info 2B | (55) 9 9694 9865 | Copyright © 2021 - IFFar - Campus Júlio de Castilhos - Curso Técnico Integrado em Informática - v1.0</n>
					</td>
				</tr>
</body>
</html>


<?php

//CÓDIGO DO ENVIO POR GET:

//VERIFICAR SE O ENVIO É POR GET:

	if(isset($_GET["NOME"])){

//VERIFICAR SE O NOME JÁ FOI REGISTRADO:

		$endereço = './METÓDO GET - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/USUÁRIO = ' . $_GET['NOME'] . '.txt';

	if(file_exists($endereço)){
		echo "<script>alert('Esse nome já está registrado, digite outro.'); window.location.href='Formulário com envio.php';</script>";
}
	else{
		$cpfs = "./METÓDO GET - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/TODOS OS CPFs REGISTRADOS.txt";

//VERIFICAR SE O CPF JÁ FOI REGISTRADO:

		if (file_exists($cpfs)){
			
			if(strpos(file_get_contents("./METÓDO GET - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/TODOS OS CPFs REGISTRADOS.txt"),$_GET['CPF']) !== false) {
				echo "<script>alert('Esse CPF já está registrado, digite outro.'); window.location.href='Formulário com envio.php';</script>";
}
}

//VERIFICAR SE A PASTA JÁ FOI FEITA:

		else{
			$pasta = './METÓDO GET - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/';

			if (file_exists($pasta)) {
} 
			else{
    			mkdir('./METÓDO GET - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/', 0777, true);
}

//ESCREVER OS DADOS NO ARQUIVO .TXT:

		$arquivo_txt = "./METÓDO GET - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/USUÁRIO = ".$_GET['NOME'].".txt";

		$arquivo = fopen($arquivo_txt,'x');

			fwrite($arquivo, "Nome: " . $_GET['NOME'] . "\n");
			fwrite($arquivo, "Sexo: " . $_GET['SEXO'] . "\n");
			fwrite($arquivo, "CPF: " . $_GET['CPF'] . "\n");
			fwrite($arquivo, "RG: " . $_GET['RG'] . "\n");
			fwrite($arquivo, "Estrangeiro? " . $_GET['ESTRANGEIRO'] . "\n");
			fwrite($arquivo, "E-mail: " . $_GET['E-MAIL'] . "\n");
			fwrite($arquivo, "Altura: " . $_GET['ALTURA'] . "\n");
			fwrite($arquivo, "Data de nascimento: " . substr($_GET['NASCIMENTO'], 8, 2) . "/" . substr($_GET['NASCIMENTO'], 5, 2) . "/" . substr($_GET['NASCIMENTO'], 0, 4) . "\n");
			fwrite($arquivo, "Senha: " . $_GET['SENHA'] . "\n");
			fwrite($arquivo, "Cor dos olhos: " . $_GET['OLHOS'] . "\n");
			fwrite($arquivo, "Telefone: " . $_GET['TELEFONE'] . "\n");

		fclose($arquivo);

		$cpfs = "./METÓDO GET - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/TODOS OS CPFs REGISTRADOS.txt";

		$arquivo_cpf = fopen($cpfs,'x');

			fwrite($arquivo_cpf, $_GET['CPF'] . "\n");

		fclose($arquivo_cpf);

		echo "<script>alert('Usuário registrado com sucesso pelo método GET!')</script>";

?>

<script>

/*MOSTRAR OS DADOS REGISTRADOS:*/

	if(window.confirm('Você deseja ver os dados registrados?')){
		var arquivo_txt = "<?php echo $arquivo_txt;?>";
		var nome_usuário = "<?php echo $_GET['NOME'];?>";
		var overridePopupTitle = function(popup, title, delayFinal, delayRepeat) {
    
   		if(popup.document) setTimeout(function(){ 
   			popup.document.title = 'Dados | ' + nome_usuário; }, delayFinal || 1000);
    
    	else setTimeout(function() {
    		overridePopupTitle(popup, title); }, delayRepeat || 100);
}

	var openPopupWithTitle = function(url, title, settings, delay){
    var mostrar_dados = window.open(arquivo_txt, '_blank', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=YES, SCROLLBARS=YES, TOP=150, LEFT=40, WIDTH=300, HEIGHT=200');

    overridePopupTitle(mostrar_dados, title, delay);
    return mostrar_dados;
}

	openPopupWithTitle();
	window.location.href = "#GET";
}

else{
}

</script>

<?php 

}
}
}

?>

<?php

//CÓDIGO DO ENVIO POR POST:

//VERIFICAR SE O ENVIO É POR GET:

	if(isset($_POST["NOME"])){
		$endereço = './METÓDO POST - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/USUÁRIO = ' . $_POST['NOME'] . '.txt';

//VERIFICAR SE O NOME JÁ FOI REGISTRADO:

	if(file_exists($endereço)){
		echo "<script>alert('Esse nome já está registrado, digite outro.'); window.location.href='Formulário com envio.php';</script>";
}
	else{
		$cpfs = "./METÓDO POST - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/TODOS OS CPFs REGISTRADOS.txt";

//VERIFICAR SE O CPF JÁ FOI REGISTRADO:

		if (file_exists($cpfs)){
			
			if(strpos(file_get_contents("./METÓDO POST - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/TODOS OS CPFs REGISTRADOS.txt"),$_POST['CPF']) !== false) {
				echo "<script>alert('Esse CPF já está registrado, digite outro.'); window.location.href='Formulário com envio.php';</script>";
}
}

//VERIFICAR SE A PASTA JÁ FOI FEITA:

		else{
			$pasta = './METÓDO POST - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/';

			if (file_exists($pasta)) {
} 
			else{
    			mkdir('./METÓDO POST - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/', 0777, true);
}

//ESCREVER OS DADOS NO ARQUIVO .TXT:

		$arquivo_txt = "./METÓDO POST - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/USUÁRIO = ".$_POST['NOME'].".txt";

		$arquivo = fopen($arquivo_txt,'x');

			fwrite($arquivo, "Nome: " . $_POST['NOME'] . "\n");
			fwrite($arquivo, "Sexo: " . $_POST['SEXO'] . "\n");
			fwrite($arquivo, "CPF: " . $_POST['CPF'] . "\n");
			fwrite($arquivo, "RG: " . $_POST['RG'] . "\n");
			fwrite($arquivo, "Estrangeiro? " . $_POST['ESTRANGEIRO'] . "\n");
			fwrite($arquivo, "E-mail: " . $_POST['E-MAIL'] . "\n");
			fwrite($arquivo, "Altura: " . $_POST['ALTURA'] . "\n");
			fwrite($arquivo, "Data de nascimento: " . substr($_POST['NASCIMENTO'], 8, 2) . "/" . substr($_POST['NASCIMENTO'], 5, 2) . "/" . substr($_POST['NASCIMENTO'], 0, 4) . "\n");
			fwrite($arquivo, "Senha: " . $_POST['SENHA'] . "\n");
			fwrite($arquivo, "Cor dos olhos: " . $_POST['OLHOS'] . "\n");
			fwrite($arquivo, "Telefone: " . $_POST['TELEFONE'] . "\n");

		fclose($arquivo);

		$cpfs = "./METÓDO POST - DADOS DOS USUÁRIOS REGISTRADOS - FORMULÁRIO, LEANDRO - INFO 2B/TODOS OS CPFs REGISTRADOS.txt";

		$arquivo_cpf = fopen($cpfs,'x');

			fwrite($arquivo_cpf, $_POST['CPF'] . "\n");

		fclose($arquivo_cpf);

		echo "<script>alert('Usuário registrado com sucesso pelo método POST!')</script>";
?>

<script>

/*MOSTRAR OS DADOS REGISTRADOS:*/

	if(window.confirm('Você deseja ver os dados registrados?')){
		var arquivo_txt = "<?php echo $arquivo_txt;?>";
		var nome_usuário = "<?php echo $_POST['NOME'];?>";
		var overridePopupTitle = function(popup, title, delayFinal, delayRepeat) {
    
   		if(popup.document) setTimeout(function(){ 
   			popup.document.title = 'Dados | ' + nome_usuário; }, delayFinal || 1000);
    
    	else setTimeout(function() {
    		overridePopupTitle(popup, title); }, delayRepeat || 100);
}

	var openPopupWithTitle = function(url, title, settings, delay){
    var mostrar_dados = window.open(arquivo_txt, '_blank', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=YES, SCROLLBARS=YES, TOP=150, LEFT=40, WIDTH=300, HEIGHT=200');

    overridePopupTitle(mostrar_dados, title, delay);
    return mostrar_dados;
}

	openPopupWithTitle();
	window.location.href = "#POST";
}

else{
}

</script>

<?php 

}
}
}

?>