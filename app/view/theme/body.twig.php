<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>{% block title %} {% endblock %}</title>
    <!--  Bootstrap Style -->
    <link rel="icon" href="{{BASE}}img/icon.png"/>
    <link href="{{BASE}}vendor/css/bootstrap.css" rel="stylesheet" />
     <!--  Font-Awesome Style -->
    <link href="{{BASE}}vendor/css/font-awesome.min.css" rel="stylesheet" />
     <!--  Font-Awesome Animation Style -->
    <link href="{{BASE}}vendor/css/font-awesome-animation.css" rel="stylesheet" />
     <!--  Pretty Photo Style -->
    <link href="{{BASE}}vendor/css/prettyPhoto.css" rel="stylesheet" />
        <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!--  Custom Style -->
    <link href="{{BASE}}vendor/css/style.css" rel="stylesheet" />
    <link href="{{BASE}}css/scroll.css" rel="stylesheet" />
    <link href="{{BASE}}css/style_main.css" rel="stylesheet" />
    
    <!-- HTML5 shim and Respond.js IE8 garatindo of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>
 
<div class="navbar navbar-default navbar-fixed-top menu-back">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar" style="color:#fff;"></span>
                    <span class="icon-bar"  style="color:#fff;"></span>
                    <span class="icon-bar"  style="color:#fff;"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <img src="{{BASE}}img/logoff.png" class="navbar-brand-logo " alt="" />
                </a>
            </div>
            <div class="navbar-collapse collapse" >
                <ul class="nav navbar-nav navbar-right">
                   
                    <li class="dropdown" >
                        <a href="index.php"style="border-top:none;">Pagina Inicial<i class="fa fa-home"></i>
                            <span>Tudo Sobre Nós</span>
                            
	

	 

                        </a>
                                           </li>
                    <li class="dropdown">
                        <a href="our-services.php">Emitir cartões <i class="fa fa-credit-card"></i>
                            <span>Cria seu cartão online</span>

                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li>
                                <a href="our-services.php">
                                    <i class="fa fa-edit"></i>
                                </a>

                            </li>
                            <li>
                                <a href="team-members.php">
                                    <i class="fa fa-bullhorn"></i>
                                </a>

                            </li>
                          

                        </ul>
                    </li>


                   
                    <li class="dropdown">
                        <a href="#">Troca de divisas<i class="fa fa-dollar"></i>
                            <span>Compra e venda de divisas</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                             <li>
                                <a href="pricing.php">
                                    <i class="fa fa-tag"></i>Pacotes De Pagamento
                                </a>

                            </li>
                            <li>
                                <a href="blog-home.php">
                                    <i class="fa fa-map-marker"></i>Pagamento
                                </a>

                            </li>
                           
                           
                           
                        </ul>
                    </li>
                     <li class="dropdown">
                        <a href="contact.php" class="active">Salário adiantado  <i class="fa fa-money"></i>
                            <span>Adiante o salário aqui !</span>
                        </a>

                    </li>

                    
                    <li class="dropdown">
                        <a href="#">Sobre Initercambio<i class="fa fa-globe"></i>
                            <span>Faça já um intercambio </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">

                            <li>
                                <a href="4column-portfolio.php">
                                    <i class="fa fa-paper-plane-o"></i>Programação 
            
                                </a>

                            </li>
                            <li>
                                <a href="3column-portfolio.php">
                                    <i class="fa fa-folder-open-o"></i>Matematica
                                </a>

                            </li>
                            <li>
                                <a href="2column-portfolio.php">
                                    <i class="fa fa-bullhorn"></i>Fisica
                                </a>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--./ Top Menu End 
    <div class="div-social-top" >
<center>
        <i class="fa fa-globe "></i>E-mail:  geral.fncompany.ao@gamil.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile "></i>Tel: (+244)  +244 930 607 565  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-map-marker "></i>Localização : Angola,Namibe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="#">
                  <i class="fa fa-facebook-square "></i>
              </a>

        <a href="#">
            <i class="fa fa-linkedin-square "></i>
        </a>
        <a href="#">
            <i class="fa fa-pinterest-square "></i>
        </a>

</center>
    </div>-->
    <!--./ Social Div End -->
  <main>
    <div id="index2-header">
        <div class="overlay">
            <div class="container">
            <div class="row ">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12" >
                     <h1></h1>
            <p >
            A FN COMPANY é uma empresa de direito Angolano vocacionada para a área de
desenvolvimento & Financeiro. 
            </p>
                    </div>
                </div>
                </div>
           
        </div>
        

    </div>
    <!--./ Main Slider End -->
    <div id="welocme-note">

        <div class="welcome-div">
         <span>Empresa Fn Company, Prestação De Serviços Financeiro & Despachos De Mercadoria | NIF: 006723495CA041</span>
        </div>

    </div>
    <!--./ Plano-Two Table End -->
   <section id="vedio-sec">
        <div class="container">
            <div class="row pad-top-botm">
                <div class="col-lg-6 col-md-6">
                    <h2>Quem somos nós ? </h2>
                    <p>
A FN COMPANY é uma empresa de direito Angolano vocacionada para a área de
desenvolvimento & Financeiro.
Website, Marketing Digital, Emissões de Cartões VISA e MASTERCARD, Vendas de
Divisas, Salário Adiantado. A FN Company, nasce do seguimento do trabalho
desenvolvido em Angola através da FN Company que actua há cerca de 1 ano no
mercado nacional e internacional, especialmente em Angola,<a href="timo-web.com"></a>
                    </p>
                    <button class="btn btn-primary" type="button">
                        Mais Informações <span class="badge">+</span>
                    </button>
                    <br />
                    <br />
                </div>
            
                <div class="col-lg-6 col-md-6">
                   
                        <iframe class="vedio-style" src="https://www.youtube.com/embed/qJg4ovTgI-0" frameborder="0" allowfullscreen></iframe>

                </div>
            </div>
        </div>
    </section>  </main>
    <hr>
    <section>
        <div class="container">
            <div class="row text-center pad-row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h1> <i class="fa fa-credit-card"></i></h1>
                        </div>
                        <div class="panel-body">
                            <div class="round-body">
                                <div class="price-main">
                                    <span class="price-Unit"><i class="fa fa-dollar"></i>10</span>
                                    <small>Promoção</small>
                                </div>
                            </div>
                            <ul class="Plano-two">
                                <li><strong>50</strong> Aulas</li>
                                <li><strong>Suporte</strong> garatindo</li>
                            </ul>
                            <a href="#" class="btn btn-success btn-lg btn-block">ADQUIRIR</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="panel  panel-info active-Plan-price">
                        <div class="panel-heading">
                        <h1> <i class="fa fa-dollar"></i></h1>
                        </div>
                        <div class="panel-body">
                            <div class="round-body">
                                <div class="price-main">
                                    <span class="price-Unit"><i class="fa fa-dollar"></i>20</span>
                                    <small>Promoção</small>
                                </div>
                            </div>
                            <ul class="Plano-two ">
                                <li><strong>51</strong> Aulas</li>
                                <li><strong>Suporte</strong> garatindo</li>
                            </ul>
                            <a href="#" class="btn btn-info btn-lg btn-block">ADQUIRIR</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="panel  panel-danger">
                        <div class="panel-heading">
                        <h1> <i class="fa fa-globe"></i></h1>
                        </div>
                        <div class="panel-body">
                            <div class="round-body">
                                <div class="price-main">
                                    <span class="price-Unit"><i class="fa fa-dollar"></i>50</span>
                                    <small>Promoção</small>
                                </div>
                            </div>
                            <ul class="Plano-two ">
                                <li><strong>59</strong> Aulas</li>
                                <li><strong>Suporte</strong> garatindo</li>
                            </ul>
                            <a href="#" class="btn btn-danger btn-lg btn-block">ADQUIRIR</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="panel  panel-primary">
                        <div class="panel-heading">
                        <h1> <i class="fa fa-money"></i></h1>
                        </div>
                        <div class="panel-body">
                            <div class="round-body">
                                <div class="price-main">
                                    <span class="price-Unit"><i class="fa fa-dollar"></i>75</span>
                                    <small>Promoção</small>
                                </div>
                            </div>
                            <ul class="Plano-two ">
                                <li><strong>53</strong> Aulas</li>
                                <li><strong>Suporte</strong> garatindo</li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-lg btn-block">ADQUIRIR</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

<div>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>


<header>
  <h2>Nossos Serviços</h2> <span>Conscientes da evolução do mercado e das novas exigências, estamos preparados
para os novos desafios que se apresentam no mercado Angolano e Global,
preparando-nos como o melhor e mais capacitado capital humano bem como com
recursos técnicos de última geração</span>
</header>

<div id="top"></div>
<section class="gallery">
	<div class="row">
		<ul>
			<a href="#" class="close"></a>
			<li>
				<a href="#item02">
					<img src="{{BASE}}img/2.jpg" alt="">
				</a>
			</li>

			<li>
				<a href="#item02">
					<img src="{{BASE}}img/2.jpg" alt="">
				</a>
			</li>

			<li>
				<a href="#item02">
					<img src="{{BASE}}img/2.jpg" alt="">
				</a>
			</li>
			<li>
				<a class="image" href="#item01">
					<img src="{{BASE}}img/2.jpg" alt="">
				</a>
			</li>
			<li>
				<a class="image" href="#item02">
					<img src="{{BASE}}img/2.jpg" alt="">
				</a>
			</li>
			<li>
				<a class="image" href="#item01">
					<img src="{{BASE}}img/2.jpg" alt="">
				</a>
			</li>
			<li>
				<a class="image" href="#item01">
					<img src="{{BASE}}img/2.jpg" alt="">
				</a>
			</li>
			<li>
				<a class="image" href="#item01">
					<img src="{{BASE}}img/2.jpg" alt="">
				</a>
			</li>
		</ul>
	</div> <!-- / row -->

	<!-- Item 01 -->
	<div id="item01" class="port">
	
		<div class="row">
			<div class="description">
				<h1>Item 01</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis libero erat. Integer ac purus est. Proin erat mi, pulvinar ut magna eget, consectetur auctor turpis.</p>
			</div>

				<img src="{{BASE}}img/2.jpg" alt="">
			</div>
		</div> <!-- / row -->

	</div> <!-- / Item 02 -->

	<!-- Item 02 -->
	<div id="item02" class="port">
	
		<div class="row">
			<div class="description">
				<h1>Item 02</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis libero erat. Integer ac purus est. Proin erat mi, pulvinar ut magna eget, consectetur auctor turpis.</p>
			</div>
			<img src="{{BASE}}img/2.jpg" alt="">
		</div> <!-- / row -->

	</div> <!-- / Item 02 -->

</section> <!-- / projects -->


 
                        </div>










    <!--./ vedio-sec End -->
    <div class="middle-section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12 ">
                    <h3>Feedback com os nossos clientes</h3>
                    <div id="testimonials" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#testimonials" data-slide-to="0" class=""></li>
                            <li data-target="#testimonials" data-slide-to="1" class=""></li>
                            <li data-target="#testimonials" data-slide-to="2" class="active"></li>
                        </ol>

                        <div class="carousel-inner">
                        <div class="item active">
                                <div class="container center">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                        <h4><i class="fa fa-quote-left"></i>Gostei bastante dos do atendimento e do suporte tecnico da empresa<i class="fa fa-quote-right"></i></h4>
                                        <div class="user-img pull-right">
                                            <img src="{{BASE}}img/2.jpg" alt="" class="img-u image-responsive" />
                                        </div>
                                        <h5 class="pull-right"><strong class="c-black">Alfredo Manuel</strong></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ Testimonials End -->
  
    
    <!--./ stats div end -->

    <!--./ Media Section End -->
   <div id="footer-sec">
        <div class="container">
            <div class="row" style="font-family:calibri;"> 
                <div class="col-lg-4 col-md-4" id="about-ftr">
                 
                    <h4>Sobre FN Company</h4>
                    <p>
                    Nasce do seguimento do trabalho
desenvolvido em Angola através da FN Company que actua há cerca de 1 ano no
mercado nacional e internacional, especialmente em Angola, Portugal e noutros
Países Lusofonos e Europeus na área do Marketing Digital nas mais diversas
vertentes. .
                    </p>
                </div>
                <div class="col-lg-4 col-md-4">
                  
                    <h3></h3>
                    <small>Ganhamos a confiança e reconhecimento de vários clientes, como resultado da
nossa profunda experiencia no sector.</small>
                    <div id="blog-footer-div">
                        <p>
                        <div class="media">
                          
                            <div class="media-body">
                               
                         <button style="background:transparent;color:#fff;border:none;"><i class="fa fa-key"></i>Iniciar Minha Conta!</button>
                            </div>
                        </div>
                        <div class="media">
                         
                            <div class="media-body">
                            <button style="background:transparent;color:#fff;border:none;"> <i class="fa fa-user"></i>Criar Minha Conta</button>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
             
                    <h4>Fale Conosco</h4>
                    <small>Agora já podes entrar em conctacto para suporete tecnico</small>
                    Moçamedes/Namibe, Rua Comadante Gika, Prédio 2166º .
                    <br />
                    Tel: +244 922 329 574
                     <br />
                    email: geral.fncompany.ao@gamil.com
                    <br />
                    <a href="#">
                  <i class="fa fa-facebook-square "></i>
              </a>

        <a href="#">
            <i class="fa fa-linkedin-square "></i>
        </a>
        <a href="#">
            <i class="fa fa-whatsapp"></i>
        </a>
      
                    <br />
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Digite o Seu Email" required />
                            <span class="input-group-btn">
                                <button class="btn " type="button" style="background:#0042c7;">Subscrever-se</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         </div>
    <!--./ footer-sec  End -->
    <div id="footser-end">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">
               	
{{ "now"|date("Y") }} &copy; Todos Direitos Reservados <a href="http://binarytheme.com" target="_blank" style="color:#fff" > | FN Company</a>
                    
                </div>
            </div>

        </div>
    </div>    
    
 
    <!--./ footer-end End -->
    <!--  Jquery Core Script -->
    <script src="{{BASE}}js/jquery-3.5.1.js"></script>
    <script src="{{BASE}}vendor/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->  
  
    <script src="{{BASE}}vendor/js/bootstrap.js"></script>
 <script src="{{BASE}}js/script_main.js"></script>

    <script src="{{BASE}}vendor/js/custom.js"></script>
   
</body>
</html>

