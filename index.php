<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Livequestion</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/d8cf10d130.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <section class="main">
			<div class="accueil col-xl-8 col-10">
				<nav class="navbar">
					<h1 class="titre-logo">Saint Vincent BTS 1</h1>
					<ul class="navbar">
						<li class="nav-item">
							<a href="#" class="nav-link lien-nav">Lien1</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link lien-nav">Lien2</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link lien-nav">Lien3</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link lien-nav">Lien4</a>
						</li>
						<li class="nav-item-connect">
							<div class="btn-connexion">
								<a href="connexion.php" class="nav-link">Se connecter</a>
							</div>
						</li>
						<div class="dropdown">
							<button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-bars fa-3x"></i>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							  <a class="dropdown-item" href="#">Lien1</a>
							  <a class="dropdown-item" href="#">Lien2</a>
							  <a class="dropdown-item" href="#">Lien3</a>
							  <a class="dropdown-item" href="#">Lien4</a>
							</div>
						</div>
					</ul>
				</nav>
				<div class="presentation">
					<div class="texte-presentation">
						<h2 class="titre-presentation">Lorem ipsum dolor sit amet.</h2>
						<p class="para-presentation">Quod id modi obcaecati, eos officia odio numquam ex ipsa tenetur minima laborum facere soluta natus libero molestias, corrupti beatae maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos officia libero, quam reprehenderit ipsum nemo repellendus.</p>
						<div class="btn-cta">Bouton CTA</div>
					</div>
					<div class="image-presentation"></div>
				</div>
			</div>
		</section>
		<div class="arrondi_haut_presentation"></div>


		<section class="main2">
			<div class="description-presentation col-xl-8 col-10 container-fluid">
				<div class="conteneur mr-5">
					<div class="icone-accueil eclair"></div>
					<h3 class="sous-titre-accueil">Suits Your Style</h3>
					<p class="para-accueil">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta at cum laudantium omnis. Amet saepe architecto dolorum voluptatibus aperiam? Nesciunt repudiandae cumque velit expedita eum quasi quisquam a, voluptatem veritatis.</p>
				</div>
				<div class="conteneur mr-5">
					<div class="icone-accueil marqueur"></div>
					<h3 class="sous-titre-accueil">Ut posuere molestie</h3>
					<p class="para-accueil">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, fuga. Perspiciatis reiciendis, eos commodi odio amet optio tempora sapiente ut porro voluptatibus repellat. Ex unde cum, aut ut excepturi suscipit.</p>
				</div>
				<div class="conteneur">
					<div class="icone-accueil cadre-logo"></div>
					<h3 class="sous-titre-accueil">Vestibulum ut erat consectetur</h3>
					<p class="para-accueil">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, voluptas iste dolor deserunt accusamus quis cum unde consequatur mollitia, deleniti asperiores laborum consequuntur. Autem quam illum fugit nostrum blanditiis eaque.</p>
				</div>
			</div>
		</section>
        <section id="link">
            <div class="container">
                <section id="linkHeader">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 id="titre">Aenean magna odio</h2>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p id="paragraphe">Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
                                    <p>accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="lesLiens">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn-group btn-group-toggle" datat-toggle="buttons">
                                <label id="first">
                                    <a href="#slide" id="b1" data-slide-to="0">Link1</a>
                                </label>
                                <label id="second">
                                    <a href="#slide" id="b2" data-slide-to="1">Link2</a>
                                </label>
                                <label id="third">
                                    <a href="#slide" id="b3" data-slide-to="2">Link3</a>
                                </label>
                            </div>
                            <p><span class="badge badge-info"></span></p>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="slide" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row align-items-center">
                                        <div class="col-lg order-last" class="slideComments">
                                            <h2>Praesent viate velit tristique <span>old alos</span></h2>
                                            <p>Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa.</p>
                                            <div id="comment">
                                                <img src="images/persona3.jpg" class="align-middle" id="photoH1">
                                                <span class="align-middle">"Proin vel dolor dictum, congue tellus at, lobortis neque"</span>
                                            </div>
                                        </div>
                                        <div class="col-lg order-lg-1 col-sm order-last">
                                            <img class="d-block w-55" src="images/step-2.jpg" id="image1">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row align-items-center">
                                        <div class="col-lg slideComments">
                                            <h2>Duis et eros lorem.</h2>
                                            <p>Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa.</p>
                                            <div id="comment">
                                                <img src="images/persona2.jpg" class="align-middle" id="photoF">
                                                <span class="align-middle">"Aliquam gravida magna ut"</span>
                                            </div>
                                        </div>
                                        <div class="col-lg" class="align-middle">
                                            <img class="d-block w-200" src="images/step-3.jpg" id="image2">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row align-items-center">
                                        <div class="col-lg slideComments">
                                            <h2>Curabitur gravida metus at mi <span>malesuada</span>.</h2>
                                            <p>Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa.</p>
                                            <div id="comment">
                                                <img src="images/persona1.jpg" class="align-middle" id="photoH2">
                                                <span class="align-middle">"malesuada."</span>
                                            </div>
                                        </div>
                                        <div class="col-lg align-middle">
                                            <img class="d-block w-55" src="images/step-4.png" id="image3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="blackBloc">
            <div class="container">
                <img src="images/iplay.png" class="align-middle">
                <span class="align-middle">  "Nulla venenatis magna fringilla"</span>
            </div>
        </section>
        <!--Partie 5 de page d'accueil -->
        <section id="part5">
            <div class="container-fluid">
                <p>Etiam laot, <span class="background-underline">alique sceleris</span></p>
                <h6>Sed ut  perspiciatis unde omnis iste natus error sit volupattem </h6>
                <h6>accusantium doloremque lauudantium, totam rem aperiam, eaque ipsa.</h6>
            </div>
            <div class="container-fluid">
                <div class="ent">
                    <a href=""><button class="btn btn-light"><img src="images/marque1.jpg"><span>Kyan boards</span></button></a>
                    <a href=""><button class="btn btn-light"><img src="images/marque2.jpg"><span>Atica</span></button></a>
                    <a href=""><button class="btn btn-light"><img src="images/marque3.jpg"><span>Treva</span></button></a>
                    <a href=""><button class="btn btn-light"><img src="images/marque4.jpg"><span>Kanba</span></button></a>
                </div>
                <div class="ent">
                    <a href=""><button class="btn btn-light"><img src="images/marque5.jpg"><span>Triv Forms</span></button></a>
                    <a href=""><button class="btn btn-light"><img src="images/marque7.jpg"><span>Aven</span></button></a>
                    <a href=""><button class="btn btn-light"><img src="images/marque6.jpg"><span>Utosia</span></button></a>
                </div>
            </div>
        </section>
        <!--Partie 6(FAQ) du site -->
        <section id="faq">
            <p>FAQ</p>
            <h6>Sed ut perspiciatis unde omnis iste natus error sit volupattem </h6>
            <h6>accusantium doloremque lauudantium, totam rem aperiam, eaque ipsa.</h6>
            <div class="more">
                <div class="container">
                    <div class="dark-divider"></div>
                    <div>
                        <button class="button1" target="_blank">Can I upgrade later on? <i class="fas fa-caret-right"></i></button>
                        <br>
                        <div class="cadre">
                            <p class="ab">Integer ut Oberyn massa. Sed feugiat vitae turpis a porta. Aliquam sagittis interdum Melisandre. Vivamus ornare phareta diam sit amet tincidunt. Eunuch sit amet phareta odio. Vivamus in tempor ipsum, si amet elementum neque. Sed faucibus posuere phareta. In imperdied eleifend dui a aliquet. Aliquam imperdiet Tyrion purus vitae rutrum. Donec eu commodo nunc. Mauris dignissim lectus massa, eget cursus quam mollis id. Eddart sit amet ex Jon nibh maximus cursus at vitae mi. Duis tincidunt aliquam mi sed sagittis.</p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="button2" target="_blank">Can I port my data? <i class="fas fa-caret-right"></i></button>
                        <br>
                        <div class="cadre">
                            <p class="bc">Integer ut Oberyn massa. Sed feugiat vitae turpis a porta. Aliquam sagittis interdum Melisandre. Vivamus ornare phareta diam sit amet tincidunt. Eunuch sit amet phareta odio. Vivamus in tempor ipsum, si amet elementum neque. Sed faucibus posuere phareta. In imperdied eleifend dui a aliquet. Aliquam imperdiet Tyrion purus vitae rutrum. Donec eu commodo nunc. Mauris dignissim lectus massa, eget cursus quam mollis id. Eddart sit amet ex Jon nibh maximus cursus at vitae mi. Duis tincidunt aliquam mi sed sagittis.</p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="button3" target="_blank">Are my food photos stored forever in the cloud? <i class="fas fa-caret-right"></i></button>
                        <br>
                        <div class="cadre">
                            <p class="cd">Integer ut Oberyn massa. Sed feugiat vitae turpis a porta. Aliquam sagittis interdum Melisandre. Vivamus ornare phareta diam sit amet tincidunt. Eunuch sit amet phareta odio. Vivamus in tempor ipsum, si amet elementum neque. Sed faucibus posuere phareta. In imperdied eleifend dui a aliquet. Aliquam imperdiet Tyrion purus vitae rutrum. Donec eu commodo nunc. Mauris dignissim lectus massa, eget cursus quam mollis id. Eddart sit amet ex Jon nibh maximus cursus at vitae mi. Duis tincidunt aliquam mi sed sagittis.</p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="button4" target="_blank">Who foots the bill for that? <i class="fas fa-caret-right"></i></button>
                        <br>
                        <div class="cadre">
                            <p class="de">Integer ut Oberyn massa. Sed feugiat vitae turpis a porta. Aliquam sagittis interdum Melisandre. Vivamus ornare phareta diam sit amet tincidunt. Eunuch sit amet phareta odio. Vivamus in tempor ipsum, si amet elementum neque. Sed faucibus posuere phareta. In imperdied eleifend dui a aliquet. Aliquam imperdiet Tyrion purus vitae rutrum. Donec eu commodo nunc. Mauris dignissim lectus massa, eget cursus quam mollis id. Eddart sit amet ex Jon nibh maximus cursus at vitae mi. Duis tincidunt aliquam mi sed sagittis.</p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="button5" target="_blank">What's the real cost? <i class="fas fa-caret-right"></i></button>
                        <br>
                        <div class="cadre">
                            <p class="ef">Integer ut Oberyn massa. Sed feugiat vitae turpis a porta. Aliquam sagittis interdum Melisandre. Vivamus ornare phareta diam sit amet tincidunt. Eunuch sit amet phareta odio. Vivamus in tempor ipsum, si amet elementum neque. Sed faucibus posuere phareta. In imperdied eleifend dui a aliquet. Aliquam imperdiet Tyrion purus vitae rutrum. Donec eu commodo nunc. Mauris dignissim lectus massa, eget cursus quam mollis id. Eddart sit amet ex Jon nibh maximus cursus at vitae mi. Duis tincidunt aliquam mi sed sagittis.</p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="button6" target="_blank">Can my company request a custom plan? <i class="fas fa-caret-right"></i></button>
                        <br>
                        <div class="cadre">
                            <p class="fg">Integer ut Oberyn massa. Sed feugiat vitae turpis a porta. Aliquam sagittis interdum Melisandre. Vivamus ornare phareta diam sit amet tincidunt. Eunuch sit amet phareta odio. Vivamus in tempor ipsum, si amet elementum neque. Sed faucibus posuere phareta. In imperdied eleifend dui a aliquet. Aliquam imperdiet Tyrion purus vitae rutrum. Donec eu commodo nunc. Mauris dignissim lectus massa, eget cursus quam mollis id. Eddart sit amet ex Jon nibh maximus cursus at vitae mi. Duis tincidunt aliquam mi sed sagittis.</p>
                        </div>
                    </div>
                </div>
                <h6 class="questions">Still have unanswered questions ?<a href="vuequestion.php"> Get in touch.</a></h6>
            </div>
        </section>
        <footer>
            <div class="whitebloc">
                <div class="trait"></div>
                <p id="infosite">@ Page protected by reCAPTCHA and subject to Google's Privacy Policy and Terms of Service</p>
                <img src="images/links.jpg" id="logos">
            </div>
        </footer>
    </body>
</html>