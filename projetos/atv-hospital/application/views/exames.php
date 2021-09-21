<!DOCTYPE html>
<html lang="pt_BR" class="h-100">
<!--Inicio do Head da página-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://pbs.twimg.com/profile_images/436902827105861633/v4FChdyA_400x400.jpeg">
	<title>Cadastro do exame - Hospital Santa Cruz</title>

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
		<h2 class="display-4" style="padding-bottom: .5;">Cadastro do Exame</h2>
		
		<p class="paragrafo" style="padding-top: 3em;">Cadastre o exame do paciente no formulário abaixo.</p>
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
<?= form_open_multipart(base_url('exames/create'), array("class" => "form-horizontal", "method"=>"POST")); ?>
<div class="container" style="padding-bottom: 3em">
	
	<h2>Informações do paciente</h2>
	<fieldset class="form-group">
		<div class="form-group" style="padding-bottom: 1em;">
			<label for="patientcode">Código do paciente:</label>
			<input type="number" class="form-control" id="patientcode" placeholder="" name="patientcode" required>
		</div>
		<div class="form-group" style="padding-bottom: 1em;">
			<label for="Date">Data do Exame:</label>
			<input type="date" class="form-control" id="date" placeholder="" name="date" required>
		</div>
	</fieldset>
	<legend class="col-form-label col-sm-2 pt-0">Tipo de exame:</legend>
	<select class="form-select" aria-label="Default select example" id="exam_type" name="exam_type">
		<option selected>Selecione o exame</option>
		<option value="1">Hemograma</option>
		<option value="2">Glicemia em jejum</option>
		<option value="3">Colesterol e Triglicerídeos</option>
		<option value="4">Ureia e Creatina</option>
		<option value="5">TGO (AST) e TGP (ALT)</option>
		<option value="6">TSH e T4 livre</option>
		<option value="7">Ácido Úlrico</option>
		<option value="8">Exames de urina</option>
	</select>
	<br>
	<div class="form-group" style="padding-bottom: 1em;">
        <label for="observacao">Observação:</label>
        <textarea class="form-control" id="observacao" placeholder="Escreva aqui sua observação" name="observacao" style="height: 10em; max-height: 10em; min-height: 10em;"></textarea>
    </div>
		<button type="submit" class="btn btn-danger">Enviar</button>
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