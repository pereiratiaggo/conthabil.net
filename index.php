<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="TP Soft">

    <title>Conthábil Assessoria - (41) 3072-0764 | (41) 3072-0753</title>
	
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
	
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
div.noticias 
{
    z-index: 1;
    position: absolute;
    bottom: 25px;
    left: 25px;
    background: rgba(255, 255, 255, .4);
    border-radius: 5px;
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .3);
}
div.noticias-sm
{
    bottom: 35px;
    left: 10px;
}
div.noticias-sm a
{
    color: red;
}
</style>
<script type="text/javascript" src="http://www.w3schools.com/lib/w3data.js"></script>
</head>

<body id="page-top">
<?php
    require_once 'comunicado.php';
?>
<div class="noticias col-md-4 hidden-xs hidden-sm">
    <h4>
    <a href="http://noticias.conthabil.net" target="_blank">Noticias</a>
    </h4>
    <marquee direction="up" scrolldelay="5" onmouseover="this.stop();" onmouseout="this.start();">
        <?php require_once 'noticias.php';?>
    </marquee>
</div>
<div class="noticias noticias-sm col-md-3 hidden-md hidden-lg">
<h4>
    <a href="http://noticias.conthabil.net" target="_blank">
        Noticias (clique aqui para ler todas)
    </a>
</div>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Conthábil Assessoria</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Sobre nós</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Serviços</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contato</a>
                    </li>
                    <?php require_once 'download.php';?>
                    <li>
                        <a class="page-scroll" target="_blank" href="http://noticias.conthabil.net">Noticias&nbsp;&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a class="page-scroll" target="_blank" href="https://conthabil.net/cliente/">Espaço do Cliente&nbsp;&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
				<br />
                <!-- <h1 id="homeHeading">Conthábil assessoria</h1> -->
				<img src="img/logo.png" style="width:50%" alt="Conthábil Assessoria" title="Conthábil Assessoria" />
                <hr>
                <p>
					Atendimento em toda a Curitiba e região metropolitana<br />
					(41) 3072-0764 <br />
					(41) 3072-0753 <br />
                                        (41) 9 9801-9799 <br />
                                        (41) 9 8509-0764
				</p>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Sobre nós</h2>
                    <hr class="light">
                    <p class="text-faded">
					A CONTHÁBIL ASSESSORIA é uma empresa especializada em serviços na área contábil.<br />
					<br />
					Utilizando tecnologia e um método de trabalho que prioriza rapidez e excelência no atendimento, temos como missão, prestar serviços de forma rápida e transparente para que o nosso cliente tenha tempo de cuidar da sua empresa.<br />
					<br />
					Conheça um pouco mais nosso escritório, fique por dentro das vantagens em contar com os nossos serviços e veja o que podemos fazer por você e sua empresa.<br />
					</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Serviços</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-check-circle-o text-primary sr-icons"></i>
                        <h3>Geral</h3>
                        <p class="text-muted">
							Abertura, Alteração e Encerramento de empresas nos órgãos competentes;<br />
							Emissão de Certidões em diversos órgãos; <br />
							Dívida Ativa; <br />
							Parcelamento de débitos em repartições Públicas, Legalização da Empresas e Licitações.
						</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-check-circle-o text-primary sr-icons"></i>
                        <h3>Contabilidade</h3>
                        <p class="text-muted">
						Balanços e Demonstrações Contábeis, Balancetes, Demonstração de Resultados, Apuração e controle de Lucro Real/Presumido, Controle de estoque, Consultoria Contábil e IRPJ e Emissão de livros obrigatórios.<br />
						Retenções de CSLL / IRPJ / INSS / ISS / PIS-PASEP / COFINS e Carnê Leão.<br />
						DCTF - Declaração de Créditos, DACON - Declaração Empresas Lucro Real e DIF. <br />
						DIPJ, IRPF, DIRF e Declarações de Simples, de Isentas, de Extinção e Inativas.
						</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-check-circle-o text-primary sr-icons"></i>
                        <h3>Escrita Fiscal</h3>
                        <p class="text-muted">
							Serviços nas áreas de ISS, ICMS, IPI, PIS, COFINS e SIMPLES;<br />
							Escrituração de livros obrigatórios; <br />
							GIA, SINTEGRA, DECLARAÇÃO DO SIMPLES
						</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-check-circle-o text-primary sr-icons"></i>
                        <h3>Departamento Pessoal</h3>
                        <p class="text-muted">
							Admissão de funcionários, Atualização de livro, registro e CTPS do funcionário, Rescisão e homologação;<br />
							Elaboração de folha de Pagamento, Emissão de Recibo de pagamento;<br />
							Emissão de Guias de GPS, Folha e Recibo de autônomos;<br />
							Emissão de Guias de GPS de contribuinte individual;<br />
							Emissão de Darf's de IR, Emissão da Guia GFIP;<br />
							Transmissão de CAGED e Contribuições Sindicais;<br />
							Férias, 13º Salário, RAIS, Contribuições e Emissão de Informe de Rendimentos dos funcionários.
						</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contato</h2>
                    <hr class="primary">
                </div>
				<div class="col-lg-8 col-lg-offset-2 text-center">
                    <i class="fa fa-map-marker fa-3x sr-contact"></i>
                    <p>
						<a href="https://goo.gl/maps/beCXn3dGAV22" target="_blank">
							Rua Raúl Pompéia, 1599 - Sobreloja - Curitiba - Paraná - CEP 81.260-142
						</a>
					</p>
					<br />
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>
						+55 41 3072-0764<br />
						+55 41 3072-0753<br />
						+55 41 998-019-979<br />
					</p>
					<br />
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:conthabil@conthabil.net">conthabil@conthabil.net</a></p>
					<br />
                </div>
            </div>
        </div>
    </section>
	
	<section id="powered">
        <div class="container text-center">
			<hr />
			<h6>2016 - Conthábil Assessoria  - Website por TPSoft<br />(Bootstrap Creative Template)</h6>
        </div>
    </section>
	
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
    
    <?php
    if(isset($_REQUEST['dotheharlemshake']) || isset($_REQUEST['harlem']))
    {
        echo '<script src="js/harlem.js"></script>';
    }
    ?>

</body>

</html>