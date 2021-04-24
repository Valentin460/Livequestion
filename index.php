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
				<?php
                    include("includes/menu.php");
                ?>
                <div class="container">
  				    <div class="arrondi1"></div>
  				    <div class="arrondi2"></div>
  			    </div>
				<div class="presentation">
					<div class="texte-presentation">
						<h2 class="titre-presentation">Lorem ipsum dolor sit amet.</h2>
						<p class="para-presentation">Sed elit libero, accumsan et volutpat id, aliquam tristique odio. Mauris sed lectus a justo malesuada dapibus. Morbi eleifend tellus nisi, sed ullamcorper mi tincidunt faucibus. Mauris justo tortor, tempor ut odio in, dictum malesuada eros. </span></p>
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
					<p class="para-accueil">Drogon sed ut perspiciatis unde omnis iste error sit volupatmen accusantium doloremque laudantium, totam aperiam, eaque Arya.</p>
				</div>
				<div class="conteneur mr-5">
					<div class="icone-accueil marqueur"></div>
					<h3 class="sous-titre-accueil">Ut posuere molestie</h3>
					<p class="para-accueil">Duis convallis convallis tellus imp interdum. Non diam phasellus vestibulum lorem sed risus ultricies Tyrion. Enim blandit volutpat</p>
				</div>
				<div class="conteneur">
					<div class="icone-accueil cadre-logo"></div>
					<h3 class="sous-titre-accueil">Vestibulum ut erat consectetur</h3>
					<p class="para-accueil">Eunuch sed blandit libero volutpat sed cras. Cersei quis imperdiet tincidunt unuch pulvinar sapien. Habitasse platea Davos vestibulum.</p>
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
        <div class="tout_faq">
			<h2>FAQ</h2>
			<p class="phrases_haut_faq">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<div class="questions_faq">
				<a class="bouton_faq" id="bouton_faq" data-toggle="collapse" href="#reponse_faq0" role="button" aria-expanded="false" aria-controls="reponse_faq0">
				    <div class="question_faq">
					    <p class="titre_question_faq">Can I upgrade later on ?</p>
							<div class="fleche_droite_faq">
							    <svg class="svg-inline--fa fa-caret-right fa-w-6 icone_fleche_droite_faq" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg=""><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"></path></svg><!-- <i class="fas fa-caret-right icone_fleche_droite_faq"></i> -->
							</div>
					</div>
				</a>
				<div class="reponse_faq collapse" id="reponse_faq0">
					<p>lorem ipsum dolor sit amet</p>
				</div>
                <a class="bouton_faq" id="bouton_faq" data-toggle="collapse" href="#reponse_faq1" role="button" aria-expanded="false" aria-controls="reponse_faq1">
				    <div class="question_faq">
					    <p class="titre_question_faq">Can I port my data from another provider ?</p>
						    <div class="fleche_droite_faq">
							    <svg class="svg-inline--fa fa-caret-right fa-w-6 icone_fleche_droite_faq" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg=""><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"></path></svg><!-- <i class="fas fa-caret-right icone_fleche_droite_faq"></i> -->
						    </div>
				    </div>
				</a>
				<div class="reponse_faq collapse" id="reponse_faq1">
					<p>lorem ipsum dolor sit amet</p>
				</div>
                <a class="bouton_faq" id="bouton_faq" data-toggle="collapse" href="#reponse_faq2" role="button" aria-expanded="false" aria-controls="reponse_faq2">
				    <div class="question_faq">
					    <p class="titre_question_faq">Are my food photos stored forever in the cloud ?</p>
						    <div class="fleche_droite_faq">
							    <svg class="svg-inline--fa fa-caret-right fa-w-6 icone_fleche_droite_faq" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg=""><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"></path></svg><!-- <i class="fas fa-caret-right icone_fleche_droite_faq"></i> -->
						    </div>
				    </div>
			    </a>
				<div class="reponse_faq collapse" id="reponse_faq2">
				    <p>lorem ipsum dolor sit amet</p>
				</div>
                <a class="bouton_faq" id="bouton_faq" data-toggle="collapse" href="#reponse_faq3" role="button" aria-expanded="false" aria-controls="reponse_faq3">
					<div class="question_faq">
						<p class="titre_question_faq">Who foots the bill for that ?</p>
							<div class="fleche_droite_faq">
								<svg class="svg-inline--fa fa-caret-right fa-w-6 icone_fleche_droite_faq" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg=""><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"></path></svg><!-- <i class="fas fa-caret-right icone_fleche_droite_faq"></i> -->
					        </div>
				    </div>
				</a>
				<div class="reponse_faq collapse" id="reponse_faq3">
					<p>lorem ipsum dolor sit amet</p>
				</div>
                <a class="bouton_faq" id="bouton_faq" data-toggle="collapse" href="#reponse_faq4" role="button" aria-expanded="false" aria-controls="reponse_faq4">
					<div class="question_faq">
						<p class="titre_question_faq">What's the real cost ?</p>
							<div class="fleche_droite_faq">
								<svg class="svg-inline--fa fa-caret-right fa-w-6 icone_fleche_droite_faq" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg=""><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"></path></svg><!-- <i class="fas fa-caret-right icone_fleche_droite_faq"></i> -->
							</div>
					</div>
				</a>
				<div class="reponse_faq collapse" id="reponse_faq4">
					<p>lorem ipsum dolor sit amet</p>
				</div>
                <a class="bouton_faq" id="bouton_faq" data-toggle="collapse" href="#reponse_faq5" role="button" aria-expanded="false" aria-controls="reponse_faq5">
					<div class="question_faq">
						<p class="titre_question_faq">Can my company request a custom plan ?</p>
							<div class="fleche_droite_faq">
								<svg class="svg-inline--fa fa-caret-right fa-w-6 icone_fleche_droite_faq" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg=""><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"></path></svg><!-- <i class="fas fa-caret-right icone_fleche_droite_faq"></i> -->
							</div>
						</div>
				</a>
				<div class="reponse_faq collapse" id="reponse_faq5">
					<p>lorem ipsum dolor sit amet</p>
				</div>			
            </div>
			<p class="phrase_bas_faq">Still have unanswered questions? <a href="#" class="get_in_touch_faq"> Get in touch</a></p>
		</div>
        <?php
            include("includes/footer.php");
        ?>
    </body>
</html>