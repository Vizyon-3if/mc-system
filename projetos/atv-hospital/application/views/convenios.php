<!DOCTYPE html>
<html lang="pt_BR" class="h-100">
<!--Inicio do Head da página-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://pbs.twimg.com/profile_images/436902827105861633/v4FChdyA_400x400.jpeg">
    <title>Convênios - Hospital Santa Cruz</title>

    <!-- Conexão com a cdn bootstrap para o uso do css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Estilo do card da página de convenios -->
    <style>
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }
    </style>
</head>
<!--Inicio do Body-->
<body class="d-flex flex-column h-100">
    <!-- Barra de topo do site -->
    <?php $this->load->view('commons/header');?>
   
    <!-- Conteúdo de Convenios -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <blockquote class="blockquote text-center">
                <h2 class="display-1">Convênios médicos</h2>
                <p class="paragrafo" style="padding-top: 3em;">Aqui no hospital Santa Cruz possuímos diversos convênios e planos de saúde, com três opções pré-estabelecidas e diversas customizações possíveis ao seu gosto e a sua preferência.</p>
                <p class="paragrafo" style="padding-bottom: 3em;">Caso queria um plano customizado nos contate <a href="<?=base_url('contato')?>"> aqui</a></p>
            </blockquote>
        </div>
    </div>

    <!-- Corpo -->
    <!-- Parte Superior -->
    <div class="containe d-flex justify-content-center">
        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <div class="card-body">
            <h2 class="card-text" style="padding-bottom: .5;">Plano de Saúde Individual</h2>
            </div>
        </div>

        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <div class="card-body">
            <h2 class="card-text" style="padding-bottom: .5;">Plano de Saúde Familiar</h2>
            </div>
        </div>

        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <div class="card-body">
            <h2 class="card-text" style="padding-bottom: .5;">Plano de Saúde Empresarial</h2>
            </div>
        </div>
    </div>

    <!-- Parte Inferior -->
    <div class="containe d-flex justify-content-center">
        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <div class="card-body">
            <p class="card-text" style="padding-bottom: .15;">A partir de R$129</p>
            </div>
        </div>

        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <div class="card-body">
            <p class="card-text" style="padding-bottom: .15;">A partir de R$340</p>
            </div>
        </div>

        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <div class="card-body">
            <p class="card-text" style="padding-bottom: .15;">A partir de R$1.290</p>
            </div>
        </div>
    </div>

    <div style="margin: auto; padding-bottom: 3em;"> 
        <img style="border-radius: 20px" src="http://minutoligado.com.br/wp-content/uploads/2016/11/Conv%C3%AAnios-M%C3%A9dicos-Tope-Seguros.png">
    </div>

    <!-- Formulário de Convenios -->
    <div class="container col-md-4 col-md-offset-4" style="padding-bottom: 3em">
	<fieldset class="form-group">
	<div class="row" style="padding-bottom: 1em;">
		<legend class="col-form-label col-sm-2 pt-0">Tipo de Plano de Saúde:</legend>
		<div class="col-sm-10">
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
			<label class="form-check-label" for="gridRadios1">
			Individual (A partir de R$129)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
			<label class="form-check-label" for="gridRadios2">
			Familiar (A partir de R$129)
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
			<label class="form-check-label" for="gridRadios2">
			Empresarial (A partir de R$129)
			</label>
		</div>
	</div>
</div>
	<button type="submit" class="btn btn-danger">Enviar</button>
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