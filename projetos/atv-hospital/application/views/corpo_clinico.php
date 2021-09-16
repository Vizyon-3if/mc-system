<!DOCTYPE html>
<html lang="pt_BR" class="h-100">
<!--Inicio do Head da página-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://pbs.twimg.com/profile_images/436902827105861633/v4FChdyA_400x400.jpeg">
    <title>Corpo clínico - Hospital Santa Cruz</title>

    <!-- Conexão com a cdn bootstrap para o uso do css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <!-- Estilo do card da página de corpo clinico -->
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

    <!-- Conteúdo do Corpo Clinico -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <blockquote class="blockquote text-center" style="padding-bottom: 3em;">
                <h2 class="display-4" style="padding-bottom: .5;">Corpo Clínico</h2>

                <p class="paragrafo" style="padding-top: 3em;">O Hospital Santa Cruz conta com uma vasta gama de profissionais qualificados em diversas áreas da medicina.</p>
                <p class="paragrafo">Todos os nossos profissionais tem uma vasta experiencia no exercicio de medicina.</p>
            </blockquote>
        </div>
    </div>


    <!-- Fileira Superior -->    
    <div class="containe d-flex justify-content-center">
        <!-- Card 1 -->
        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <img src="https://jooinn.com/images/specialist-doctor.jpg" class="card-img-top" alt="cardiologia">
            <div class="card-body">
                <h2 class="card-text" style="padding-bottom: .5;">Dr. Felipe Gonçalves Moura</h2>
                <p>Cardiologista | 50 anos de experiencia</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <img src="https://img3.stockfresh.com/files/k/kurhan/m/60/590683_stock-photo-doctor.jpg" class="card-img-top" alt="oncologia">
            <div class="card-body">
                <h2 class="card-text" style="padding-bottom: .5;">Dr. Jorge Rogério Cenna Jr.</h2>
                <p>Oncologista | 15 anos de experiencia</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <img src="https://c8.alamy.com/comp/K89B07/handsome-experienced-neurologist-studying-an-electroencephalogram-K89B07.jpg" class="card-img-top" alt="neurologia">
            <div class="card-body">
                <h2 class="card-text" style="padding-bottom: .5;">Dr. Rogerio Ceninha</h2>
                <p>Neurologista | 30 anos de experiencia</p>
            </div>
        </div>
    </div>

    <!-- Fileira Inferior-->
    <div class="containe d-flex justify-content-center">
        <!-- Card 4 -->
        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <img src="https://t4.ftcdn.net/jpg/02/60/04/09/360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpg" class="card-img-top" alt="geriatria">
            <div class="card-body">
                <h2 class="card-text" style="padding-bottom: .5;">Dr. João Felipe Basilio Nadu</h2>
                <p>Geriatra | 10 anos de experiencia</p>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <img src="https://c8.alamy.com/comp/D9PT2A/angry-doctor-woman-using-syringe-D9PT2A.jpg" class="card-img-top" alt="pediatria">
            <div class="card-body">
                <h2 class="card-text" style="padding-bottom: .5;">Dra. Heitora Rodrigues Silva</h2>
                <p>Pediatra | 16 anos de experiencia</p>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="card blockquote text-center embed-responsive embed-responsive-16by9" style="width: 18rem;">
            <img src="https://thumbs.dreamstime.com/z/smiling-senior-doctor-thumb-up-smiling-senior-doctor-thumb-up-happy-old-caucasian-physician-bright-blurred-background-113565555.jpg" class="card-img-top" alt="ortopedia">
            <div class="card-body">
                <h2 class="card-text" style="padding-bottom: .5;">Dr. Casa Couto Soares</h2>
                <p>Ortopedista | 24 anos de experiencia</p>
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