<!DOCTYPE html>
<html lang="pt_BR" class="h-100">
<!--Inicio do Head da página-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://pbs.twimg.com/profile_images/436902827105861633/v4FChdyA_400x400.jpeg">
	<title>Consultas - Hospital Santa Cruz</title>

	<!-- Conexão com a cdn bootstrap para o uso do css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<!--Inicio do Body-->
<body class="d-flex flex-column h-100">
<!-- Barra de topo do site -->
<?php $this->load->view('commons/header');?>

<!-- Conteúdo do Consultas -->
<div class="jumbotron jumbotron-fluid">
	<div class="container">
	<blockquote class="blockquote text-center">
		<h2 class="display-4" style="padding-bottom: .5;">Consultas</h2>
		
		<p class="paragrafo" style="padding-top: 3em;">Marque as suas consultas no formulário abaixo.</p>
		<p class="paragrafo"style="padding-bottom: 3em">A comunicação sera efetuada em até 2 dias úteis.</p>
	</blockquote>
	</div>
</div>

<!-- Formulário de consultas -->
<?= form_open_multipart(base_url('consultas'), array("class" => "form-horizontal", "method"=>"POST")); ?>
<div class="container" style="padding-bottom: 3em">
	
	<h2>Informações do paciente</h2>
	<fieldset class="form-group">
		<div class="form-group" style="padding-bottom: 1em;">
			<label for="name">Nome do paciente:</label>
			<input type="text" class="form-control" id="name" placeholder="" name="name">
		</div>
		<div class="form-group" style="padding-bottom: 1em;">
			<label for="name">Data de Nascimento:</label>
			<input type="date" class="form-control" id="birthday" placeholder="" name="birthday">
		</div>
		<legend class="col-form-label col-sm-2 pt-0">Sexo:</legend>
		<div class="form-group" style="padding-bottom: 1em;">
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
				<label class="form-check-label" for="gridRadios2">
					M
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
				<label class="form-check-label" for="gridRadios2">
					F
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
				<label class="form-check-label" for="gridRadios2">
					X
				</label>
			</div>
			<div class="form-input" style="padding-bottom: 1em;">
				<label for="rg">RG: </label>
				<input type="text" class="form-control" id="rg" placeholder="" name="rg" maxlength="11">
			</div>
			<div class="form-input" style="padding-bottom: 1em;">
				<label for="endereco">Endereço: </label>
				<input type="text" class="form-control" id="endereco" placeholder="" name="endereco">
			</div>
			<div class="form-input" style="padding-bottom: 1em;">
				<label for="cep">RG: </label>
				<input type="text" class="form-control" id="endereco" placeholder="" name="endereco">
			</div>
		<legend class="col-form-label col-sm-2 pt-0">Estado Civil:</legend>
		<div class="form-group" style="padding-bottom: 1em;">
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
				<label class="form-check-label" for="gridRadios2">
					Solteiro
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
				<label class="form-check-label" for="gridRadios2">
					Casado
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
				<label class="form-check-label" for="gridRadios2">
					Separado
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
				<label class="form-check-label" for="gridRadios2">
					Divorciado
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
				<label class="form-check-label" for="gridRadios2">
					Viúvo
				</label>
			</div>
		</div>
		<div class="row" style="padding-bottom: 1em;">
		<legend class="col-form-label col-sm-2 pt-0">Tipo de consulta:</legend>
		<div class="col-sm-10">
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
			<label class="form-check-label" for="gridRadios1">
				Cardiologia
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
			<label class="form-check-label" for="gridRadios2">
				Oncologia
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
			<label class="form-check-label" for="gridRadios2">
				Neurologia
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
			<label class="form-check-label" for="gridRadios2">
				Geriatria
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
			<label class="form-check-label" for="gridRadios2">
				Pediatria
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
			<label class="form-check-label" for="gridRadios2">
				Ortopedia
			</label>
		</div>
	</fieldset>
	<h2>Informações para contato</h2>
		<div class="form-group" style="padding-bottom: 1em;">
			<label for="email">E-mail:</label>
			<input type="email" class="form-control" id="email" placeholder="" name="email">
		</div>
		<div class="form-group" style="padding-bottom: 1em;">
			<label for="pwd">Número de celular:</label>
			<input type="text" class="form-control" id="celular" placeholder="Com DDD" name="celular">
		</div>
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