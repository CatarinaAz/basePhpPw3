<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt - BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home - Site PW</title>
	<link rel= "stylesheet" href="<?php echo base_url() ?>assets/reset.css">
    <link rel= "stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel= "stylesheet" href="<?php echo base_url() ?>assets/css/principal.css">
</head>
<body>
	
	
	<div class="container">
		<div class="row">
			<div class="col-12">
			<div class="jumbotron">
  				<h1 class="display-4">Bem vindo!</h1>
  				<p class="lead">Pet lovers, o site para quem ama seu animalzinho♥</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link active" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Adoção</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Produtos pet</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li>
				</ul>
			</div>
		</div>
		<div class="row cont">
			<div class="col-6">
				<h3>Shih-tzu</h3>
				<img src = "<?php echo base_url() ?>/assets/imagens/jiu_shitzu.jpg" alt="" class = "img-fluid">
				<p>
					Focinho achatado, olhos amendoados um pouco saltados e personalidade marcante: este é o Shih Tzu! 
					Conhecidos por serem muito companheiros, os Shih Tzus não são cães de caça ou esportistas, o propósito 
					de suas vidas é amar e ser amado pelos seus pais humanos, servindo como um incrível cão de companhia.
				</p>
			</div>
			<div class="col-6">
				<h3>Chihuahua</h3>
				<img src = "<?php echo base_url() ?>/assets/imagens/chibalba.jpg" alt="" class = "img-fluid">
				<p>
					Considerado um dos menores cães do mundo, o chihuahua só não tem tamanho: 
					seu jeito atrevido e brincalhão faz com que os pais humanos desta raça sejam 
					realmente apaixonados por seus pequenos filhotes. Se engana quem acha que, 
					por seu pequeno porte, ele é do tipo medroso. Ao contrário disso, o cachorro 
					chihuahua tende a ser destemido e cheio de coragem.
				</p>
			</div>
			<div class="col-6">
				<h3>Pug</h3>
				<img src = "<?php echo base_url() ?>/assets/imagens/pugo.jpg" alt="" class = "img-fluid">
				<p>
					Pug é uma raça de cão de companhia de pequeno porte, com focinho achatado e cauda enrolada. São cães braquicefálicos, ou seja, têm o focinho "achatado". 
					Cães com essa características tem o sistema respiratório superior comprimido e portanto não toleram muito exercício físico.
				</p>
			</div>
			<div class="col-6">
				<h3>Lulu da Pomerania</h3>
				<img src = "<?php echo base_url() ?>/assets/imagens/lula_da_pomerania.jpg" alt="" class = "img-fluid">
				<p>
					Se trata de uma raça de cachorro de companhia muito dócil e brincalhona, 
					que além de se dar muito bem com seus pais humanos. É muito afetuoso e 
					não é considerado um cão agressivo, mas pode ser receoso com desconhecidos num 
					primeiro momento. 
				</p>
			</div>
			<div class="col-6">
				<h3>Yorkshire Terrier</h3>
				<img src = "<?php echo base_url() ?>/assets/imagens/nhocxaire.jpg" alt="" class = "img-fluid">
				<p>
					Acredita-se que a raça tenha sido criada por camponeses para auxiliar na caça de roedores 
					(já que o seu tamanho permitia fácil acesso às tocas). Através do cruzamento de diversos 
					outros Terriers e também do Maltês, surgiram os Yorkshire Terriers. Hoje em dia o Yorkshire 
					é um cãozinho muito popular no mundo todo.
				</p>
			</div>
			<div class="col-6">
				<h3>Poodle</h3>
				<img src = "<?php echo base_url() ?>/assets/imagens/poodle.jpg" alt="" class = "img-fluid">
				<p>
					Uma das raças mais conhecidas no mundo todo, o Poodle possui diversas características 
					que faz com sejam amados por todos. São ótimos nadadores e amam brincar na água. Extre-
					mamente apegados ao dono e inteligentes, possuem facilidade em se relacionar com crianças 
					e outros animais.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 rodape">
				<p></p>
			</div>
		</div>
	</div>
				
</body>
</html>
