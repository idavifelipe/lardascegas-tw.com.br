<?php
	require_once("admin/conexao/conecta.php");
	require("admin/functions/limita-texto.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Associa&ccedil;&atilde;o de Cegos Louis Braille: ACLB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="imagens/favicon.ico" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); 
      width: 100%; 
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
  <link rel="stylesheet" type="text/css" href="css/estilo.css" media="all">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">ASSOCIA&Ccedil;&Atilde;O DE CEGOS LOUIS BRAILLE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#associacao">ASSOCIA&Ccedil;&Atilde;O</a></li>
        <li><a href="#eventos">EVENTOS</a></li>
        <li><a href="#contato">CONTATO</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imagens/banner-01.jpg" alt="Braille" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Braille</h3>
          <p>O Braile &eacute; um sistema de escrita t&aacute;til utilizado por pessoas cegas ou com baixa vis&atilde;o. &Eacute; tradicionalmente escrito em papel em relevo.</p>
        </div>      
      </div>

      <div class="item">
          <img src="imagens/banner-02.jpg" alt="Bengala" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Bengala</h3>
          <p>Bengala &eacute; um acess&oacute;rio para o aux&iacute;lio no caminhar, sendo mais usada por pessoas que t&ecirc;m dificuldades na locomo&ccedil;&atilde;o em raz&atilde;o da idade, ou em raz&atilde;o de doen&ccedil;a, problemas traumatol&oacute;gicos, como fraturas, ou cegueira.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="imagens/banner-03.jpg" alt="Piso t&aacute;til" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Piso t&aacute;til</h3>
          <p>Piso t&aacute;til, superf&iacute;cie t&aacute;til, pavimento t&aacute;til ou podot&aacute;teis s&atilde;o faixas em alto-relevo fixadas no ch&atilde;o para fornecer aux&iacute;lio na locomo&ccedil;&atilde;o pessoal de deficientes visuais.</p>
        </div>      
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Proximo</span>
    </a>
</div>


<div id="associacao" class="container text-center">
  <h3>A ASSOCIA&Ccedil;&Atilde;O DE CEGOS LOUIS BRAILLE</h3>
  <p><em>Contribuir para a integra&ccedil;&atilde;o social das pessoas cegas e de vis&atilde;o subnormal</em></p>
  <p>Fundada em 14 de abril de 1933, teve como primeiro objetivo prestar, aos cegos, assist&ecirc;ncia material e moral, assim como cuidar do aproveitamento e encaminhamento dos ex-alunos do Instituto S&atilde;o Rafael. Heitor Menin fundou tamb&eacute;m o &quot;Lar das Cegas&quot; como primeira obra da referida Associa&ccedil;&atilde;o. O estatuto que rege o funcionamento da Associa&ccedil;&atilde;o de Cegos Louis Braille, passou por diversas altera&ccedil;&otilde;es sempre com o nobre objetivo de transform&aacute;-lo num instrumento din&acirc;mico e atual, que especifique, satisfatoriamente, as normas que conduzem o bom andamento de suas atividades.</p>
  <p><strong>A nossa vis&atilde;o:</strong> "Ser um Centro de Refer&ecirc;ncia,  reconhecido nacionalmente, em identifica&ccedil;&atilde;o, uso  e difus&atilde;o das tecnologias de  apoio ao desenvolvimento e a plena inclus&atilde;o social do deficiente visual."</p>
</div>

<div id="eventos" class="bg-1">
  <div class="container">

      <div class="divcenter">
    	<ul class="boxposts">
        
        <?php

        if(empty($_GET['pg'])){}
        else{ 
        $pg =$_GET['pg'];
        if(!is_numeric($pg)){
                echo '<script language= "JavaScript"> location.href="index.php"; </script>';
        }
        }


        if(isset($pg)){ $pg = $_GET['pg'];}else{ $pg = 1;}

        $quantidade = 1;
        $inicio = ($pg*$quantidade) - $quantidade;


                $sql = "SELECT * from tb_postagens WHERE exibir='Sim' ORDER BY id DESC LIMIT $inicio, $quantidade";
                try{
                        $resultado = $conexao->prepare($sql);
                        $resultado->execute();
                        $contar = $resultado->rowCount();

                        if($contar > 0 ){
                                while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
        ?>        
                        <li>            	
             
                        <span class="content01">
                            <span class="thumb">
                                <img src="upload/postagens/<?php echo $exibe->imagem;?>" alt="<?php echo $exibe->titulo;?>" title="<?php echo $exibe->titulo;?>" width="166" height="166">
                            </span>   
                            <h1><?php echo $exibe->titulo;?></h1>
                            <p style="text-align:justify;"><?php echo limitarTexto($exibe->descricao, $limite=380)?></p> 
                            <div class="footer_post">
                                <a target="_blank" style="margin-left: 5px;" href="post.php?id=<?php echo $exibe->id;?>">Leia o artigo completo</a>
                                <span class="datapost">Data de Publica&ccedil;&atilde;o: <strong><?php echo $exibe->data;?></strong></span>                        
                            </div><!-- footer post -->                    
                        </span>                
                    </li>  
        <?php
        }
                }else{
                        echo '<li>Nao existe post cadastrados no sistema</li>';
                }

                }catch(PDOException $erro){ echo $erro;}
        ?>                                        
                </ul>
                <style>
                .paginas{width:100%;padding:10px 0;text-align:center;background:none;height:auto;margin:10px auto;}
                .paginas a{width:auto;padding:4px 10px;background:#eee;color:#333;margin:0px 2.5px;text-decoration:none;font-family:tahoma, "Trebuchet Ms", arial;font-size:13px; }
                .paginas a:hover{text-decoration:none;background:#666; color:#fff;}

        <?php
                if(isset($_GET['pg'])){
                        $num_pg = $_GET['pg'];	
                }else{$num_pg = 1;}
        ?>

                .paginas a.ativo<?php echo $num_pg;?>{background:#666; color:#fff;}

                </style>
        <?php
                $sql = "SELECT * from tb_postagens";
                try{
                                $result = $conexao->prepare($sql);			
                                $result->execute();
                                $totalRegistros = $result->rowCount();
                        }catch(PDOException $e){
                                echo $e;
                        }

                        if($totalRegistros <=$quantidade){}
                        else{
                                $paginas = ceil($totalRegistros/$quantidade);
                                if($pg > $paginas){
                                        echo '<script language= "JavaScript">
                                                location.href="index.php";
                                                </script>';}
                                $links = 5;	

                                if(isset($i)){}
                                else{$i = '1';}

        ?>

        <div class="paginas">
        <a href="index.php?pg=1">Primeira Pagina</a>
        <?php
            if(isset($_GET['pg'])){
                    $num_pg = $_GET['pg'];	
            }

            for($i = $pg-$links; $i <= $pg-1; $i++){
                    if($i<=0){}
                    else{ 
        ?> 
        <a href="index.php?pg=<?php echo $i;?>"  class="ativo<?php echo $i;?>"><?php echo $i;?></a>           
        <?php  }} ?>
            <a href="index.php?pg=<?php echo $pg;?>" class="ativo<?php echo $i;?>"><?php echo $pg;?></a> 
        <?php
                for($i = $pg+1; $i <= $pg+$links; $i++){
                        if($i>$paginas){}
                        else{
        ?>
        <a href="index.php?pg=<?php echo $i;?>" class="ativo<?php echo $i;?>"><?php echo $i;?></a>				
        <?php
                        }
                }
        ?>
        <a href="index.php?pg=<?php echo $paginas;?>">Ultima pagina</a>		   
        </div>
        <?php
                        }
        ?>  
    </div>
      
  </div>
</div>
  
<div id="contato" class="container">
  <h3 class="text-center">Contato</h3>
  <p class="text-center"><em>O Lar das Cegas sempre est&aacute; aberto a novas sugest&otilde;es</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Entre em contato conosco!</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Rua  Geraldo Teixeira da Costa, 202, Floresta, Belo Horizonte &ndash; MG 30150-120</p>
      <p><span class="glyphicon glyphicon-phone"></span> Tel: (31) 3273-5858</p>
      <p><span class="glyphicon glyphicon-envelope"></span> faleconosco@deficientesvisuais.org.br</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="nome" placeholder="Nome" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="E-mail" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comentario" placeholder="Coment&aacute;rio" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="googleMap"></div>
<script>
    function myMap() {
    var myCenter = new google.maps.LatLng(-19.9197047,-43.9318804);
    var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFT2-kgrGn8NHdMpWpxlIEEvGlM-YqhRI&callback=myMap"></script>

<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="PARA TOPO">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <a style="cursor:pointer;" href="#"><i class="fa fa-facebook-official" style="font-size:36px; margin-right: 20px;"></i></a>
  <a style="cursor:pointer;" href="#"><i class="fa fa-twitter" style="font-size:36px; margin-bottom: 10px;"></i></a>
  <p>Copyright &copy; 2017 Associa&ccedil;&atilde;o de Cegos Louis Braille</p>
</footer>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
  
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    if (this.hash !== "") {

      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        window.location.hash = hash;
      });
    } 
  });
})
</script>

</body>
</html>