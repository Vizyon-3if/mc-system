<!DOCTYPE html>
<html lang="pt_BR" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://pbs.twimg.com/profile_images/436902827105861633/v4FChdyA_400x400.jpeg">
    <title>Especialidades - Hospital Santa Cruz</title>
    <!-- Conexão com a cdn bootstrap para o uso do css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Conexão com a cdn bootstrap para o uso do css -->

    <!-- Estilo do card da página de convenios -->
    <style>
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
    <!-- Barra de topo do site -->
    <?php $this->load->view('commons/header');?>
  
    <!-- Conteúdo do Especialidades -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <blockquote class="blockquote text-center">
                <h2 class="display-4" style="padding-bottom: .5;">Especialidades</h2>

                <p class="paragrafo" style="padding-top: 3em;">O Hospital Santa Cruz conta com diversas especialidades médicas.</p>
                <p class="paragrafo">Todas as especialidades possuem profissionais qualificados para realizar as operações necessárias.</p>
            </blockquote>
        </div>
    </div>

    <!-- Card 1 -->
    <div class="containe d-flex justify-content-center">
        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <img src="https://medprev.online/wp-content/uploads/2020/09/0107de20d9f2a69b1cf8d60f88a5614c1569855007-.jpg" class="card-img-top" alt="cardiologia">
            <div class="card-body">
                <h2 class="card-text" style="padding-bottom: .5;">Cardiologia</h2>
            </div>
        </div>

        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <img src="https://institutodecancer.com.br/site/wp-content/uploads/2018/06/2018_06_06_ICB_foto_oncologia-1.jpg" class="card-img-top" alt="oncologia">
            <div class="card-body">
                <h2 class="card-text" style="padding-bottom: .5;">Oncologia</h2>
            </div>
        </div>

        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <img src="https://www.cmmartins.com.br/wp-content/uploads/2019/07/neuro-1024x683.jpg" class="card-img-top" alt="neurologia">
            <div class="card-body">
                <h2 class="card-text" style="padding-bottom: .5;">Neurologia</h2>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="containe d-flex justify-content-center">
        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <img src="https://canalpereira.com.br/uploads/events/2018/06/geriatria.jpg" class="card-img-top" alt="geriatria">
            <div class="card-body">
                <h2 class="card-text" style="padding-bottom: .5;">Geriatria</h2>
            </div>
        </div>

        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <img src="https://images.squarespace-cdn.com/content/59a8480fccc5c52fff14d38a/1606835260361-ISM2LU7TR71IVSB3H0PE/Pediatria.jpg?format=1500w&content-type=image%2Fjpeg" class="card-img-top" alt="pediatria">
            <div class="card-body">
                <h2 class="card-text" style="padding-bottom: .5;">Pediatria</h2>
            </div>
        </div>

        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <img src="https://d3043uog1ad1l6.cloudfront.net/uploads/2019/06/ortopedia.jpg" class="card-img-top" alt="ortopedia">
            <div class="card-body">
                <h2 class="card-text" style="padding-bottom: .5;">Ortopedia</h2>
            </div>
        </div>
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