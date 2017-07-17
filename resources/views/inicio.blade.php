<!DOCTYPE html>
<html lang="en">
<head>
<title>DJ Beto Andrade | Official Website</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link rel="stylesheet" href="/css/bootstrap.css" />
 	<!-- boostrap -->

	<link rel="stylesheet" href="/animate.css">
	<link rel="stylesheet" href="/style.css">

</head>
<body>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=249078091804020&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Header Starts -->
<div class="navbar-wrapper ">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top animated fadeInDown" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="/images/logo.png" height="80" alt="logo"/></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right" >
                  <li class="active"><a href="#home">Home</a></li>
                 <li><a href="#about">Sobre</a></li>
                 <li><a href="#album">Albuns</a></li>
                 <li><a href="#blogevent">Eventos & Blog</a></li>
                 <li><a href="#playlist">Playlist</a></li>
                 <li><a href="#contact">Contato</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->

<!-- overlay -->
<div class="container overlay">


<!-- home banner starts -->
<div id="home" class="homeinfo">
<div class="row">
	<div class="col-sm-6 col-xs-12">
	<div class="fronttext">
	 	<h2 class="bgcolor  animated fadeInUpBig"><span class="glyphicon glyphicon-headphones"></span> DJ Beto Andrade</h2><br>
		<p class=" animated fadeInUp">Há mais de vinte anos no mercado dos eventos.</p>
	</div>
	</div>

	<div class="col-sm-5 col-xs-12 col-sm-offset-1">
	<div class="player">
	<img src="/images/dj.png" class="graphics hidden-xs  animated fadeInRightBig" alt="dj"/>
		<iframe allowtransparency="true" width="100%" height="170" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/327354789&amp;color=ff0000&amp;theme_color=000000&amp;auto_play=true&amp;hide_related=true&amp;show_artwork=false"></iframe>
    </div>
	</div>

</div>
</div>
<!-- home banner ends -->

@php
  $caminho = public_path().'/images/';
@endphp

<!-- blockblack -->
<div class="blockblack">

<!-- About Starts -->
<div id="about" class="spacer">
<h3><span class="glyphicon glyphicon-user"></span> About Me</h3>
<div class="row">
<div class="col-lg-4 col-sm-4  col-xs-12">
<img src= {!! url($caminho.$editions->img_about) !!} class="img-responsive" alt="img-about"/>
</div>
<div class="col-lg-5 col-sm-8  col-xs-12">
<p>Especializado em casamentos. Contudo, inclui em sua lista outros tipos de festas: 15 anos, formaturas, aniversários, confraternizações... Já tocou em vários eventos por Mato Grosso do Sul e também no interior de São Paulo e Goiás. Foi o DJ oficial do carnaval em Fátima do Sul (de onde é natural) por sete anos, e do Fátima Fest por quatro anos seguidos. Já atuou e atua nos principais buffets e salões de Campo Grande. É também editor de áudio há vinte e cinco anos.</p>
<blockquote>Hoje, além dos eventos, também é DJ do programa de mixagem Planeta Mega e programador musical da MEGA 94 FM. Não abandonando a paixão por música em nenhum instante do seu dia.</blockquote>
</div>
<div class="col-lg-3 visible-lg">
<div class="fb-like-box" data-href="http://www.facebook.com/thebootstrapthemes" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" data-width="255"></div>
</div>
</div>
</div>
<!-- About Ends -->

<!-- latest release starts-->
<div id="album" class="releases spacer">
<h3><span class="glyphicon glyphicon-music"></span> Album Releases</h3>
<div class="row">
	<div class="col-sm-3 col-xs-12"><div class="album"><img src="/images/joia.jpg" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="/images/bN.jpg" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="/images/2.jpg" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="/images/bN2.png" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="/images/123.jpg" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="/images/bN3.jpg" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="/images/3.jpg" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>

	<div class="col-sm-3 col-xs-12"><div class="album"><img src="/images/123.jpg" class="img-responsive" alt="music theme" /><div class="albumdetail"><h5>Crazy Freso</h5><a href="#" class="listen" data-toggle="modal" data-target="#albumdetail"><span class="glyphicon glyphicon-headphones"></span> Listen Song</a></div></div></div>
</div>
</div>
<!-- latest release ends-->

<!--Blog Event Starts-->
<div id="blogevent"  class="blogevent spacer">
<div class="row">

	<!-- events -->
	<div class="col-md-6 col-xs-12">
		<div class="events">
		<h3><span class="glyphicon glyphicon-calendar"></span> Events</h3>
		<ul>
			<li>
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-lg-4"><a href="#" data-toggle="modal" data-target="#blogdetail"><img src="/images/1.jpg" class="img-responsive" alt="music theme" /></a></div>
				<div class="col-xs-12  col-sm-6 col-lg-5 "><h5><a href="#" data-toggle="modal" data-target="#blogdetail">Christmas Eve Party</a></h5><p>Typewriter photo booth vinyl post-ironic, literally keffiyeh locavore tofu lomo pug Odd Future.</p></div>
				<div class="col-xs-12  col-sm-3 col-lg-3 date"><b>2014</b><span>Dec 28</span></div>
			</div>
			</li>
		