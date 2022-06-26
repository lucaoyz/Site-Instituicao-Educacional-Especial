<?PHP
require_once('conexao/banco.php');

$sql = "select *
        from tb_objetivo
       ";


$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CIEIA - Centro Institucional Escolar Inclusivo de Americana</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/hero-logo.png" rel="icon">
  <link href="assets/img/hero-logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <a href="index.php" class="hero-logo" data-aos="zoom-in"><img src="assets/img/hero-logo.png" alt="" style="width: 300px"></a>
      <h2 data-aos="fade-up" style="color: #fff; font-size: 20px;">
      <?php while ($dados = mysqli_fetch_array($sql)) { ?>
          <?php echo $dados['obj_texto']; ?>                     
      <?php } ?>
      <br></h2>
      <a data-aos="fade-up" data-aos-delay="200" href="#about" class="btn-get-started scrollto" style="background-color: #8adaf4; color: #fff; font-weight: bold;">Sobre nós</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.php" style="color: #aef3fd"><img src="assets/img/logo.png" alt=""></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#about">SOBRE NOS</a></li>
          <li><a class="nav-link scrollto" href="#services">OQUE FAZEMOS?</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">IMAGENS</a></li>
          <li><a class="nav-link scrollto" href="#team">PROFISSIONAIS</a></li>
          <li><a class="nav-link scrollto" href="#pricing">MATRICULA</a></li>
          <li><a class="nav-link scrollto" href="#contact">CONTATO</a></li>
          <li><a class="nav-link scrollto" href="login.php">PAINEL</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>SOBRE NOS</h2>
          <p>Saiba mais sobre nós</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="image">
              <img src="assets/img/about.jpg"" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
              <h3>Centro Institucional Escolar Inclusivo de Americana</h3>
              <p class="fst-italic">
                Somos a CIEIA! Uma escola especializada no ensino para educandos com deficiência, transtornos globais do desenvolvimento e altas habilidades ou superdotação. 
              </p>
              <p class="fst-italic">
                As atividades pedagógicas/educacionais são planejadas e realizadas coletivamente, com ação e responsabilidade dos envolvidos: famílias, educadores e estudantes. Nós oferecemos um serviço de educação capaz de garantir um ambiente menos restritivo para quem tem deficiência. 
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>OQUE FAZEMOS?</h2>
          <p>Saiba nossos serviços e oque oferecemos para suas crianças!</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
              <i class="bx bx-shield" style="color: #052256"></i>
              <h4>Inclusão</h4>
              <p>Incluímos os alunos em um ambiente menos restritivo para que
                 se desenvolvam ao decorrer da vida. </p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-bookmark" style="color: #052256"></i>
              <h4>Aulas Dinamicas</h4>
              <p>Contamos com aulas dinâmicas e adaptativas para cada tipo de deficiência.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-cube" style="color: #052256"></i>
              <h4>Brinquedos especiais</h4>
              <p>Parquinho com brinquedos especiais para crianças com deficiência visual, auditiva e física. </p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/services.jpg");' data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Imagens</h2>
          <p>Veja imagens de nossa escola!</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/image1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Inclusão</h4>
                <p>Aulas dinamicas e Inclusão</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/services.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Brinquedos especiais</h4>
                <p>Brinquedos especiais para as crianças</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/image3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Jardim</h4>
                <p>Nosso jardim com brinquedos para as crianças</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">
          <h2>Patrocinadores</h2>
        <div class="row">

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="400">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="500">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Profissionais</h2>
          <p>Nosso time de Profissionais especializados em educação especial!</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Thomas Shelby</h4>
                <span style="color: #052256">Diretor Administrativo</span>
                <p>Thomas Shelby é responsavel por toda nossa parte de administração de nossa escola, todos assuntos contabéis é com ele!</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Laura Ipisom</h4>
                <span style="color: #052256">Educadora Especial</span>
                <p>Laura Ipisom especializada em educação especial, possue todos os conhecimentos de Libras, Braile e outras deficiencias especiais.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span style="color: #052256">Educador Especial de Tecnologia</span>
                <p>Walter White especializado em educação especial e em tecnologia, ajuda todas os estudantes a se aproveitarem dos bens atuais da tecnologia!</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Matricula</h2>
          <p>Realize a matricula conosco! <br>
            <span style="color: #052256">Por apenas R$ 99,90 por mês</span>, o seu filho(a) estará no melhor instituição inclusiva.</p>
        </div>

        <div class="row">

            <div class="section-title" style="font-size: 24px; font-weight: bold;" data-aos="fade-up">
                <a href="https://api.whatsapp.com/send?phone=55199999999999&text=Ol%C3%A1%2C%20desejo%20realizar%20uma%20matricula%20no%20CIEIA%20-%20Centro%20Institucional%20escolar%20inclusivo%20de%20Americana." class="btn-buy" style="color: #052256">CLIQUE AQUI</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contato</h2>
          <p>Entre em contato conosco para tirar qualquer dúvida!.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
              <div class="address">
                <i class="bi bi-geo-alt" style="color: #052256"></i>
                <h4>Localização:</h4>
                <p>Rua Vital Brasil, 349, Jardim Girassol<br>
                  Americana, SP</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope" style="color: #052256"></i>
                <h4>Email:</h4>
                <p>contato@cieia.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone" style="color: #052256"></i>
                <h4>Telefone:</h4>
                <p>+55 19 99999-9999</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome aqui" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu emai" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Oque deseja falar para nós?" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Carregando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada!</div>
              </div>
              <div class="text-center"><button type="submit" style="background-color: #052256; color: #fff;">Enviar mensagem para CIEIA!</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h3><img src="assets/img/logo.png" style="max-height: 170px;" alt=""></h3>
            <p>Centro Institucional Escolar Inclusivo de Americana</p>
          </div>
        </div>

       <div class="social-links">
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>CIEIA</span></strong>. Todos direitos reservados
      </div>
      <div class="credits">
        Desenvolvido por<a href="https://instagram.com/lucaoxz"> Lucao</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>