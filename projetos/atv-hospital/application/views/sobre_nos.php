<!DOCTYPE html>
<html lang="pt_BR" class="h-100">
<!--Inicio do Head da pagina-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://pbs.twimg.com/profile_images/436902827105861633/v4FChdyA_400x400.jpeg">
    <title>Sobre nós - Hospital Santa Cruz</title>
    <!-- Conexão com a cdn bootstrap para o uso do css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
<!-- Estilo do paragrafo e body da página convenios -->   
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
    
    <!-- Conteúdo do Sobre nós -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <blockquote class="blockquote text-center">
                <h2 class="display-4" style="padding-bottom: 1;">Sobre nós</h2>
                    <div style="margin: auto; padding-top: 3em;">
                        <img style="border-radius: 20px" src="https://upload.wikimedia.org/wikipedia/commons/0/07/Augsburg_Josefium_26_April_2003.jpg" class="img-fluid" alt="Hospital">
                    </div>
                    <p class="paragrafo" style="padding-top: 3em;">O Hospital Santa Cruz foi fundado em 1964, na cidade de Jundiaí, como uma pequena unidade de saúde.
                    Desde então, o prédio foi se expandindo e, junto com ele, nossa capacidade de trazer a você o melhor atendimento hospitalar possível.
                    Sempre visamos pelo melhor que nós podemos oferecer, e não contaremos esforços para fazer o que for preciso por sua saúde.</p>
                    
                    <div style="margin: auto; padding-top: 3em;">
                        <img style="border-radius: 20px" src="https://upload.wikimedia.org/wikipedia/commons/1/18/13981206000856637182540935380304_%D8%A8%D8%AE%D8%B4_%D9%88%DB%8C%DA%98%D9%87_%C2%AB%D8%A8%DB%8C%D9%85%D8%A7%D8%B1%D8%A7%D9%86_%DA%A9%D8%B1%D9%88%D9%86%D8%A7%C2%BB_%D8%A8%DB%8C%D9%85%D8%A7%D8%B1%D8%B3%D8%AA%D8%A7%D9%86_%D8%A8%D9%82%DB%8C%D9%87_%D8%A7%D9%84%D9%84%D9%87.jpg" class="img-fluid" alt="Médico">
                    </div>
                    <p class="paragrafo" style="padding-top: 3em;">Nossa equipe conta com profissionais de último nível de diversas áreas da saúde, sejam enfermeiros, clínicos, radiologistas etc., todos prontamente preparados para atender suas necessidades.</p>
                    
                    <div style="margin: auto; padding-top: 3em;">
                        <img style="border-radius: 20px" src="https://upload.wikimedia.org/wikipedia/commons/7/78/Intensivstation_%2801%29_2007-03-03.jpg" class="img-fluid" alt="Hospital 2">
                    </div>
                    <p class="paragrafo" style="padding-bottom: 3em; padding-top: 3em;">Santa Cruz é um exemplo de excelência no serviço médico e oferece várias soluções, como convênios, consultas, clínica, e atendimento médico periódico, urgente e UTI.
                    Nesse portal, os recursos estão muito mais próximos de você! Aproveite o que o nosso hostpital tem a lhe oferecer de melhor!</p>

                    <div style="margin: auto; padding-bottom: 3em;">
                        <img src="https://pbs.twimg.com/profile_images/436902827105861633/v4FChdyA_400x400.jpeg" width="160" height="160">
                    </div> 
            </blockquote>
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