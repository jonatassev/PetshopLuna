<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Petshop Luna</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/home.css">
        <script src="../js/progressbar.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="container" id="nav-container">
                <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
                    <a class="navbar-brand">
                        <img id="logo" src="../imagens/avatar.png" alt="hDC Agency"> Petshop Luna
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" id="home-menu" href="#">Home</span></a>
                            <a class="nav-item nav-link" id="about-menu" href="#">Sobre n??s</a>
                            <a class="nav-item nav-link" id="contact-menu" href="#">Contato</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    
        <main>
            <div class="container-fluid">
                <div id="mainSlider" class="carousel slide" data-ride="carousel">
                   <ol class="carousel-indicators">
                       <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                       <li data-target="#mainSlider" data-slide-to="1"></li>
                       <li data-target="#mainSlider" data-slide-to="2"></li>
                   </ol>
                   <div class="carousel-inner">
                       <div class="carousel-item active">
                           <img src="../imagens/1.jpg" class="d-block w-100" alt="Veterin??rio">
                           <div class="carousel-caption d-md-block">
                               <h2>Veterin??rio</h2>
                               <p>N??s cuidamos do seu pet como se fosse nosso.</p>
                           </div>
                       </div>
                       <div class="carousel-item">
                           <img src="../imagens/2.jpg" class="d-block w-100" alt="Banho e Tosa">
                           <div class="carousel-caption d-md-block">
                               <h2>Banho e Tosa</h2>
                                   <p>Nossa equipe est?? pronta para lhe atender.</p>
                           </div>
                       </div>
                       <div class="carousel-item">
                           <img src="../imagens/3.png" class="d-block w-100" alt="Produtos do Petshop">
                           <div class="carousel-caption d-md-block">
                               <h2>Produtos do Petshop</h2>
                               <p>A nossa loja conta com uma variedade de brinquedos, roupas e acess??rios incr??veis para seu pet.</p>
                           </div>
                       </div>
                   </div>
                    <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <br>
            <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12"> 
                            <h3 class="main-title">Sobre o Petshop Luna</h3>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="../imagens/avatar.png" alt="Ag??ncia hDC">
                        </div>
                        <div class="col-md-6">
                            <h3 class="about-title">Um petshop preocupado com seu cliente</h3>
                            <p>Nossa miss??o ?? muito mais que ser simplesmente um neg??cio pet. </br>
                            Nosso objetivo maior, ?? encantar os tutores e seus filhos de patas </br>
                            com uma experi??ncia emocional positiva??? Ajudar ???pais e m??es??? de </br> 
                            pets a melhorarem a sa??de e qualidade de vida de seus peludos.</p>
                            <p>Veja nossos diferenciais:</p>
                            <ul id="about-list">
                                <li><i class="fas fa-check"></i> Variados tipos de ra????o e petiscos.</li>
                                <li><i class="fas fa-check"></i> Vasta quantidade de camas e almofadas para o conforto do seu pet</li>
                                <li><i class="fas fa-check"></i> </li>
                                <li><i class="fas fa-check"></i> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div id="contact-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="main-title">Entre em contato conosco</h3>
                        </div>
                        <div class="col-md-3 contact-box">
                            <i class="bx bx-alarm"></i>
                            <p><span class="contact-tile">Hor??rios:</span> 08:00 - 19:00</p>
                        </div>
                        <div class="col-md-3 contact-box">
                            <i class="bx bx-phone"></i>
                            <p><span class="contact-tile">Telefone:</span> (48) 98484-0861</p>
                        </div>
                        <div class="col-md-3 contact-box">
                            <i class="bx bx-envelope"></i>
                            <p><span class="contact-tile">Email:</span> brigido.viniciuss@gmail.com</p>
                        </div>
                        <div class="col-md-3 contact-box">
                            <i class="bx bx-map"></i>
                            <p><span class="contact-tile">Endere??o:</span> Rua Santos Dumont, 343, Centro - Tubar??o, SC</p>
                        </div>
                        <div class="col-md-6" id="msg-box">
                            <p>Ou nos deixe uma mensagem:</p>
                        </div>
                        <div class="col-md-6" id="contact-form">
                            <form action="home.php" method="POST">
                                <input type="text" class="form-control" placeholder="E-mail" name="email" required>
                                <input type="text" class="form-control" placeholder="Assunto" name="subject" required>
                                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message" required></textarea>
                                <input type="submit" class="main-btn">
                            </form>
                            <?php

                                if (isset($_POST["email"])) {
                                    
                                    echo "<h4>Enviado com sucesso!</h4>";

                                }

                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <div id="copy-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Desenvolvido por <a href="https://www.linkedin.com/in/jonatas-severino-5a2855180/" target="_blank">Jonatas Severino</a>, <a href="https://www.linkedin.com/in/vin%C3%ADcius-brigido-721673212/" target="_blank">Vin??cius Brigido</a>, 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="../js/home.js"></script>
    </body>
</html>