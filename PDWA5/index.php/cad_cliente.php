	<div class="titulo-cadastros on-off"> <img src="../img/cad.jpg" height="30" width="30">Cadastro de Clientes</div><br/>
	
	<div class="container-img">
	<div class="container-cadastros">
	
	<fieldset class="fieldset-cliente">
	
	<table width="100%" border="0" cellspacing="" cellpadding="3">	
	<tr>
	<div class="subtitulo-cadstro">Dados Cadastrais</div><br/>
	
	<form name="formCadastro" id="formulario" method="post" action="cad_cliente.php" onsubmit="return(tipo,nome,cpf,Rg,cnpj,Endereco,Numero,Bairro,Cidade,CEP,'formulario','erroFormulario','field')"/>
	<fieldset id="field" style="display:none;wigth:10px;height:40px;background-color:#ececec">
	<label id="erroFormulario"></label>
	</fieldset>
		Nome:<br/>
	<input type="text"  name="txtNome" id="nome" size="60" onkeyup="mudarTamanho(this)" /><br/>
	Tipo<br/>
	<select name="tipo" id="tipo" onclick="tipo_Pessoa(this,'fisica','juridica')"/> 
				<option  value="0">Razao Social</option>
				<option  value="1">Pessoa Fisica</option> 
				<option  value="2">Pessoa Juridica</option> 
	</select> <br/>
	
                Sexo:<select name="txtSexo" id="sexo"/> 
				<option  value="M">M</option>
				<option  value="F">F</option></select> <br/>
                CPF: <br/><input type="text" name="txtCpf" id="cpf"  title="Gravar Cliente" onblur="valida_cpf(cpf)" onkeypress="mascara_cpf(this)"/>
	 <label id="Cpfl"> </label><br/>
                RG:<br/><input type="texte" id="Rg" name="txtRg" onblur="validaRg(Rg)"/><br/>
                Endereco (Rua, Av., Trav.,):<br/>
	<input type="text" name="txtEndereco" id="Endereco" size="40" onkeyup="mudarTamanho(this)"><br/>
                Numero.:<br/>
	<input type="text" name="txtNumero" id="Numero" size="10"><br/>
                Bairro:<br/>
	<input type="text" name="txtBairro" id="Bairro" size="40"onkeyup="mudarTamanho(this)"><br/>
                Cidade:<br/>
	<input type="text"  name="txtCidade" id="Cidade" size="25"onkeyup="mudarTamanho(this)"><br/>
                Estado:<br/>
	<select name="txtUf" id="Estado">
	<option value="Acre">Acre</option> 
	<option value="Alagoas">Alagoas</option> 
	<option value="Amap&aacute;">Amap&aacute;</option> 
	<option value="Amazonas">Amazonas</option> 
	<option value="Bahia">Bahia</option>
	<option value="Cear&aacute;">Cear&aacute;</option> 
	<option value="Distrito Federal">Distrito Federal</option> 
	<option value="Esp&iacute;rito Santo">Esp&iacute;rito Santo</option> 
	<option value="Goi&aacute;s">Goi&aacute;s</option> 
	<option value="Maranh&atilde;o">Maranh&atilde;o</option> 
	<option value="Mato Grosso">Mato Grosso</option> 
	<option value="Mato Grosso do Sul">Mato Grosso do Sul</option> 
	<option value="Minas Gerais">Minas Gerais</option> 
	<option value="Par&aacute;">Par&aacute;</option> 
	<option value="Para&iacute;ba">Para&iacute;ba</option> 
	<option value="Paran&aacute;">Paran&aacute;</option> 
	<option value="Pernambuco">Pernambuco</option> 
	<option value="Piau&iacute;">Piau&iacute;</option> 
	<option value="Rio de Janeiro">Rio de Janeiro</option> 
	<option value="Rio Grande do Norte">Rio Grande do Norte</option> 
	<option value="Rio Grande do Sul">Rio Grande do Sul</option> 
	<option value="Rond&ocirc;nia">Rond&ocirc;nia</option> 
	<option value="Ror&acirc;ima">Ror&acirc;ima</option> 
	<option value="Santa Catarina">Santa Catarina</option> 
	<option value="S&atilde;o Paulo">S&atilde;o Paulo</option> 
	<option value="Sergipe">Sergipe</option> 
	<option value="Tocantins">Tocantins</option>
	</select><br/>
                CEP.:<br/>
	<input type="text" name="txtCep" id="CEP" size="25" onkeypress="mascara_Numero(this,'errocepj','Apenas N�mero')"><label id="errocepj"></label><br/><br/>
	
	<div class="subtitulo-cadstro">Dados Adicionais</div><br/>
                Nome Fantasia:<br/>
	<input type="text"  name="txtNomeFantasia" id="NomeFantasia" size="60" onkeyup="mudarTamanho(this)"><br/>
                Data:<br/>
	<input type="text"  name="txtData" id="Data" onkeypress="mascaraData(this)" size="15"><br/>
                Status:<br/>
	<select name="txtStatus" id="Status">
	<option value="s"id="select-ativo">Ativo</option>
	<option value="n"id="select-inativo">Inativo</option>
	</select><br/>
                Telefone:<br/>
	<input type="text" name="txtTelefone" id="Telefone" size="20" onkeypress=" mascaraTelefone(this)"><br/>
                Fax:<br/>
	<input type="text" name="txtFax" id="Fax" size="20"onkeypress=" mascaraTelefone(this)"><br/>
                Celular:<br/>
	<input type="text" name="txtCelular" id="Celular" size="20"><br/>
                Comercial:<br/>
	<input type="text" name="txtComercial" id="Comercial" size="20"><br/>
                E-mail:<br/>
	<input type="text" name="txtEmail" id="E-mail" size="60" onkeyup="mudarTamanho(this)"><br/>
                Senha:<br/>
        <input type="password" name="txtSenha1" id="valor1" size="45"/><br/>
                Confirmar Senha:<br/>
        <input type="password" name="txtSenha2" id="valor2" size="45" onblur="mascaraSenha(txtSenha1,txtSenha2,'erro')"/><label id="erro"></label><br/>


    CNPJ:<br/> <input type="text" name ="txtCnpj" id="cnpj" onkeypress="valida_cpf(this)"/>
    <br/>
	
	Endereco (Rua, Av., Trav.,):<br/>
	
	<input type="text" name="txtEnderecos" id="Enderecos" size="40" onkeyup="mudarTamanho(this)"><br/>
	Numero.:<br/>
	<input type="text" name="txtNumers" id="Numeros" size="10"><br/>
	Bairro:<br/>
	<input type="text" name="txtBairros" id="Bairros" size="40"onkeyup="mudarTamanho(this)"><br/>
	Cidade:<br/>
	<input type="text"  name="txtCidades" id="Cidades" size="25"onkeyup="mudarTamanho(this)"><br/>
	Estado:<br/>
	<select name="txtUfs" id="Estado">
	<option value="Acre">Acre</option> 
	<option value="Alagoas">Alagoas</option> 
	<option value="Amap&aacute;">Amap&aacute;</option> 
	<option value="Amazonas">Amazonas</option> 
	<option value="Bahia">Bahia</option>
	<option value="Cear&aacute;">Cear&aacute;</option> 
	<option value="Distrito Federal">Distrito Federal</option> 
	<option value="Esp&iacute;rito Santo">Esp&iacute;rito Santo</option> 
	<option value="Goi&aacute;s">Goi&aacute;s</option> 
	<option value="Maranh&atilde;o">Maranh&atilde;o</option> 
	<option value="Mato Grosso">Mato Grosso</option> 
	<option value="Mato Grosso do Sul">Mato Grosso do Sul</option> 
	<option value="Minas Gerais">Minas Gerais</option> 
	<option value="Par&aacute;">Par&aacute;</option> 
	<option value="Para&iacute;ba">Para&iacute;ba</option> 
	<option value="Paran&aacute;">Paran&aacute;</option> 
	<option value="Pernambuco">Pernambuco</option> 
	<option value="Piau&iacute;">Piau&iacute;</option> 
	<option value="Rio de Janeiro">Rio de Janeiro</option> 
	<option value="Rio Grande do Norte">Rio Grande do Norte</option> 
	<option value="Rio Grande do Sul">Rio Grande do Sul</option> 
	<option value="Rond&ocirc;nia">Rond&ocirc;nia</option> 
	<option value="Ror&acirc;ima">Ror&acirc;ima</option> 
	<option value="Santa Catarina">Santa Catarina</option> 
	<option value="S&atilde;o Paulo">S&atilde;o Paulo</option> 
	<option value="Sergipe">Sergipe</option> 
	<option value="Tocantins">Tocantins</option>
	</select><br/>
                CEP.:<br/>
	<input type="text" name="txtCepes" id="CEPS" size="25" onkeypress="mascara_Numero(this,'errocep','Apenas Numero')"><label id="errocep"><label><br/><br/>
	
	<button name="salvar" id="salvar" value="salvar" type="submit" title="Salvar Cliente">    
      Salvar
    </button>
    <button name="cancelar" name="btnCancelar" id="Cancelar" value="cancelar" type="submit" title="Cancelar Cadastro" onclick="confirm('Deseja  Realmente cancelar!')">    
      Cancelar
    </button>
		<br/><br/>
	
	</tr>
	</table>
		
	</fieldset>
	
</div>	
</div>
<?php
include_once '../conexao/conexao.php';
 
?>