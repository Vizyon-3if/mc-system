<!DOCTYPE html>
<html lang="pt_BR" class="h-100">
<!--Inicio do Head da pagina-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://pbs.twimg.com/profile_images/436902827105861633/v4FChdyA_400x400.jpeg">
    <title>Contato - Hospital Santa Cruz</title>
    
    <!-- Conexão com a cdn bootstrap para o uso do css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">  
</head>
<!--Inicio do Body-->
<body class="d-flex flex-column h-100">
    <!-- Barra de topo do site -->
    <?php $this->load->view('commons/header');?>

    <!-- Conteúdo do Contato -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <blockquote class="blockquote text-center">
                <h2 class="display-4" style="padding-bottom: .5;">Contato</h2>

                <p class="paragrafo" style="padding-top: 3em;">Escreva sua mensagem para a equipe do portal do Hospital Santa Cruz logo abaixo:</p>
                <p class="paragrafo"style="padding-bottom: 3em">A comunicação será efetuada em até 2 dias úteis.</p>
            </blockquote>
        </div>
    </div>

    <!-- Espaço para Mensagens de erro -->
    <div class="col-md-8 d-flex justify-content-center">
      <?php if($formErrors){?>
        <div class="alert alert-danger">
          <?=$formErrors?>
        </div>
      <?php }else{
         if($this->session->flashdata('success_msg')) {?>
        <div class="alert alert-success">
          <?=$this->session->flashdata('success_msg')?>
        </div>
    <?php } } ?>
    </div>
    <!-- Formulário de contato -->
    <div class="container" style="padding-bottom: 3em;">
    <?= form_open_multipart(base_url('contato'), array("class" => "form-horizontal", "method"=>"POST")); ?>
        <div class="form-group" style="padding-bottom: 1em;">
        <label for="email">Nome:</label>
        <input type="text" class="form-control" id="nome" placeholder="Coloque seu nome" name="nome" required>
        </div>
        <div class="form-group" style="padding-bottom: 1em;">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" placeholder="Coloque seu e-mail" name="email" required>
        </div>
        <div class="form-group" style="padding-bottom: 1em;">
        <label for="pwd">Mensagem:</label>
        <textarea class="form-control" id="mensagem" placeholder="Escreva aqui sua mensagem" name="mensagem" style="height: 10em; max-height: 10em; min-height: 10em;"></textarea>
        </div>
        <fieldset class="form-group">
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