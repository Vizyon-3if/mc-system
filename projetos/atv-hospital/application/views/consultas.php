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
	
	<h2>Informações da consulta</h2>
	<fieldset class="form-group">
		<div class="form-group" style="padding-bottom: 1em;">
			<label for="name">Código do Paciente:</label>
			<input type="text" class="form-control" id="name" placeholder="" name="name">
		</div>
		<div class="form-group" style="padding-bottom: 1em;">
			<label for="name">Data da Consulta:</label>
			<input type="date" class="form-control" id="birthday" placeholder="" name="birthday">
		</div>
		<legend class="col-form-label col-sm-2 pt-0">Horário da consulta:</legend>
	<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios4" id="gridRadios4" value="option4">
			<label class="form-check-label" for="gridRadios1">
			06:30
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios4" id="gridRadios4" value="option4">
			<label class="form-check-label" for="gridRadios2">
			13:30
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios4" id="gridRadios4" value="option4">
			<label class="form-check-label" for="gridRadios2">
			16:00
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios4" id="gridRadios4" value="option4">
			<label class="form-check-label" for="gridRadios2">
			19:00
			</label>
		</div>
		<legend class="col-form-label col-sm-2 pt-0">Médicos Disponíveis:</legend>
		<div class="col-sm-10">
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios3" id="gridRadios3" value="option3">
			<label class="form-check-label" for="gridRadios1">
				Cardiologia
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios3" id="gridRadios3" value="option3">
			<label class="form-check-label" for="gridRadios2">
				Oncologia
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios3" id="gridRadios3" value="option3">
			<label class="form-check-label" for="gridRadios2">
				Neurologia
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios3" id="gridRadios3" value="option3">
			<label class="form-check-label" for="gridRadios2">
				Geriatria
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios3" id="gridRadios3" value="option3">
			<label class="form-check-label" for="gridRadios2">
				Pediatria
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios3" id="gridRadios3" value="option3">
			<label class="form-check-label" for="gridRadios2">
				Ortopedia
			</label>
		</div>
	</fieldset>
	<div class="form-group" style="padding-bottom: 1em;">
			<label for="name">Diagnostico:</label>
			<input type="text" class="form-control" id="diagnostico" placeholder="" name="diagnostico">
	</div>
	<div class="form-group" style="padding-bottom: 1em;">
        <label for="pwd">Observação:</label>
        <textarea class="form-control" id="mensagem" placeholder="Escreva aqui sua observação" name="observacao" style="height: 10em; max-height: 10em; min-height: 10em;"></textarea>
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