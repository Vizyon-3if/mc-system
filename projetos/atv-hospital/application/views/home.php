<!DOCTYPE html>
<html lang="pt_BR" class="h-100">
<!--Inicio do Head da pagina-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://pbs.twimg.com/profile_images/436902827105861633/v4FChdyA_400x400.jpeg">
    <title>Hospital Santa Cruz</title>
    <!-- Conexão com a cdn bootstrap para o uso do css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="icon" href="http://example.com/favicon.png">

    <!-- Estilo do paragrafo e corpo da página home -->
    <style>
        .paragrafo {
            font-family: Arial; 
            font-size: 12;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<!--Inicio do Body-->
<body class="d-flex flex-column h-100">
    <!-- Barra de topo do site -->
    <?php $this->load->view('commons/header');?>
    
    <!-- Conteúdo da Home -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <blockquote class="blockquote text-center">
                <h2 class="display-4" style="padding-bottom: .5;">Bem vindo(a)!</h2>
                <h1 class="display-1">Hospital Santa Cruz</h1>

                <p class="paragrafo" style="padding-top: 3em;">O Hospital Santa Cruz é um hospital de qualidade e excelência, sendo reconhecido como um dos maiores da América Latina. Aqui, apresentamos um atendimento digno para você e sua família.</p>
                <p class="paragrafo" style="padding-bottom: 3em;">Estamos sempre preparados para oferer consultas e atendimento médico com os melhores profissionais e tecnologia de ponta.</p>
            </blockquote>
        </div>
    </div>

    <div style="margin: auto; padding-bottom: 3em;">
        <img style="border-radius: 20px" src="https://cdn.pixabay.com/photo/2014/12/10/20/48/laboratory-563423_960_720.jpg" class="img-fluid" alt="Responsive image">
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