<!DOCTYPE html>
<html lang="pt_BR" class="h-100">
<!--Inicio do Head da página-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://pbs.twimg.com/profile_images/436902827105861633/v4FChdyA_400x400.jpeg">
	<title>Cadastro do Paciente - Hospital Santa Cruz</title>

	<!-- Conexão com a cdn bootstrap para o uso do css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<!--Inicio do Body-->
<body class="d-flex flex-column h-100">
<!-- Barra de topo do site -->
<?php $this->load->view('commons/header');?>

<!-- Conteúdo do Cadastro Paciente -->
<div class="jumbotron jumbotron-fluid">
	<div class="container">
	<blockquote class="blockquote text-center">
		<h2 class="display-4" style="padding-bottom: .5;">Cadastro do Paciente</h2>
		
		<p class="paragrafo" style="padding-top: 3em;">Cadastre o paciente no formulário abaixo.</p>
		<p class="paragrafo"style="padding-bottom: 3em">Após o cadastro será possível realizar uma consulta.</p>
	</blockquote>
	</div>
</div>
<?php if ($this->session->flashdata('errors')) {?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('errors'); ?>
	</div>
<?php } ?>
<!-- Formulário de cadastro do paciente -->
<?= form_open_multipart(base_url('pacientes/create'), array("class" => "form-horizontal", "method"=>"POST")); ?>
<div class="container" style="padding-bottom: 3em">
	
	<h2>Informações do paciente</h2>
	<fieldset class="form-group">
		<div class="form-group" style="padding-bottom: 1em;">
			<label for="name">Nome do paciente:</label>
			<input type="text" class="form-control" id="name" placeholder="" name="name" maxlength="80" required>
		</div>
		<div class="form-group" style="padding-bottom: 1em;">
			<label for="name">Data de Nascimento:</label>
			<input type="date" class="form-control" id="birthday" placeholder="" name="birthday" required>
		</div>
		<legend class="col-form-label col-sm-2 pt-0">Sexo:</legend>
		<div class="form-group" style="padding-bottom: 1em;">
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios1" id="gridRadios1" value="M">
				<label class="form-check-label" for="gridRadios2">
					M
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios1" id="gridRadios1" value="F">
				<label class="form-check-label" for="gridRadios2">
					F
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios1" id="gridRadios1" value="X">
				<label class="form-check-label" for="gridRadios2">
					X
				</label>
			</div>
			<div class="form-input" style="padding-bottom: 1em;">
				<label for="rg">RG: </label>
				<input type="text" class="form-control" id="rg" placeholder="" name="rg" maxlength="12">
			</div>
			<div class="form-input" style="padding-bottom: 1em;">
				<label for="endereco">Endereço: </label>
				<input type="text" class="form-control" id="endereco" placeholder="" name="endereco" maxlength="100">
			</div>
			<div class="form-input" style="padding-bottom: 1em;">
				<label for="cep">CEP: </label>
				<input type="number" class="form-control" id="cep" placeholder="" name="cep" maxlength="16">
			</div>
		<legend class="col-form-label col-sm-2 pt-0">Estado Civil:</legend>
		<div class="form-group" style="padding-bottom: 1em;">
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2" value="1">
				<label class="form-check-label" for="gridRadios2">
					Solteiro
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2" value="2">
				<label class="form-check-label" for="gridRadios2">
					Casado
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2" value="3">
				<label class="form-check-label" for="gridRadios2">
					Separado
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2" value="4">
				<label class="form-check-label" for="gridRadios2">
					Divorciado
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios2" id="gridRadios2" value="5">
				<label class="form-check-label" for="gridRadios2">
					Viúvo
				</label>
			</div>
		</div>
	</fieldset>
	<legend class="col-form-label col-sm-2 pt-0">Nome do bairro:</legend>
	<select class="form-select" aria-label="Default select example" id="district" name="district">
		<option selected>Selecione o bairro</option>
		<option value="1">Aviário</option>
		<option value="2">Bom Parto</option>
		<option value="3">Cidade Nova</option>
		<option value="4">Novo Buritizal</option>
		<option value="5">Cajazeiras</option>
		<option value="6">Aldeota</option>
		<option value="7">Asa Norte</option>
		<option value="8">Aeroporto</option>
		<option value="9">Setor Oeste</option>
		<option value="10">Jardim Eldorado</option>
		<option value="11">Sagrada Família</option>
		<option value="12">América</option>
		<option value="13">Coxipó da Ponte</option>
		<option value="14">Ariramba</option>
		<option value="15">Quadramares</option>
		<option value="16">Cabanga</option>
		<option value="17">Cabral</option>
		<option value="18">Bigorrilho</option>
		<option value="19">Ipanema</option>
		<option value="20">Lagoa Seca</option>
		<option value="21">Cohab</option>
		<option value="22">Asa Branca</option>
		<option value="23">Partenon</option>
		<option value="24">Barra da Lagoa</option>
		<option value="25">Aeroporto</option>
		<option value="26">Mirandópolis</option>
		<option value="27">Taquaralto</option>
		<option value="28">Queens</option>
	</select>
    <legend class="col-form-label col-sm-2 pt-5">Tipo de convênio:</legend>
	<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios4" id="gridRadios4" value="1">
			<label class="form-check-label" for="gridRadios1">
			Individual (A partir de R$129)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios4" id="gridRadios4" value="2">
			<label class="form-check-label" for="gridRadios2">
			Familiar (A partir de R$340)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios4" id="gridRadios4" value="3">
			<label class="form-check-label" for="gridRadios2">
			Empresarial (A partir de R$1290)
			</label>
		</div>
		<br>
		<button type="submit" class="btn btn-danger">Enviar</button>
		</div>
	</div>
	<?=form_close();?>
</div>

<!-- Barra inferior do site -->
<?php $this->load->view('commons/footer');?>

<!-- Conexão com a cdn bootstrap para o uso do js -->
<!-- jQuery, Popper.js e Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
</body>
</html>