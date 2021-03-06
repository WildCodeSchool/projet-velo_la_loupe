<?php
	$menu_actif = 1;
	include('includes/header.php');
?>
<div class="container-fluid">
	<div id="carousel-example-generic" class="carousel slide vertical" data-ride="carousel">
		<!-- Wrapper for slides --> 
		<div class="carousel-inner" role="listbox">
		  <div class="item active photos">
		    <img src="images/1.jpg" style="width: 100%" alt="...">
		  </div>
		  <div class="item photos">
		    <img src="images/2.jpg" style="width: 100%" alt="...">
		  </div>
		  <div class="item photos">
		    <img src="images/3.jpg" style="width: 100%" alt="...">
		  </div>
		</div>
	</div>
	
	<section>
		<!-- bienvenue -->
		<div class="container">

			<div class="row bienvenue">
				<div class="col-md-12">
					<h2 class="text-center">Bienvenue chez <span>KM120.CYCLE</span></h2>
					<p class="sous-titre">Réparations, ventes, entretien et gardiennage de votre vélo</p>
				</div>
			</div>
			
			<!-- Bidouille separateur de section -->
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-5"><hr></div>
        <div class ="col-md-2 col-sm-2 col-xs-2 text-center">
					<i class="fa fa-star section-icone"></i>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-5"><hr></div>
      </div>
      <div class="row">
      	<div class="col-md-12 col-sm-12 col-xs-12">
      		<h3 class="text-center titre-section">Un professionnel à votre service</h3>
      	</div>
      </div>
      <!-- Fin Bidouille separateur de section -->

      <div class="row presentation">
      	<div class="col-md-7 col-sm-7">
					<p>
						<i class="fa fa-quote-left fa-2x icone-texte"></i>Féru de vélo depuis toujours et ayant couru dans des équipes telles "la Pomme" à 
						Marseille ou encore le VS Chartres, notre magasin est la concrétisation de notre  passion. Soucieux de la qualité
						du service et des produits, de la satisfaction de notre clientèle, nous mettons à votre disposition notre expérience et nos conseils
						afin de vous servir au mieux.</p>
					<p>
						Vous trouverez dans notre magasin des prestations de :
					</p>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<ul class="list-unstyled">
								<li><i class="fa fa-check icone-liste"></i>Ventes de vélos neufs et occasions</li>
								<li><i class="fa fa-check icone-liste"></i>Gardiennage au mois, à l'année</li>
								<li><i class="fa fa-check icone-liste"></i>Réparations et entretien</li>
								<li><i class="fa fa-check icone-liste"></i>Stylisation de votre vélo</li>
							</ul>
						</div>
						<div class="col-md-6 col-sm-12">
							<ul class="list-unstyled">
								<li><i class="fa fa-check icone-liste"></i>Vélos tous types</li>
								<li><i class="fa fa-check icone-liste"></i>Pièces détachées</li>
								<li><i class="fa fa-check icone-liste"></i>Accessoires et équipements</li>
							</ul>
						</div>
					</div>

					<div class="row">
						<a href="contact.php" class="btn btn-block btn-lg btn-default" style="margin-top: 17px;"><span class="glyphicon glyphicon-envelope"></span> Contactez-nous</a>
					</div>

				</div>
				<div class="col-md-5 col-sm-5 hidden-xs">
						<img src="images/devanture.jpg" class="img-responsive img-rounded" alt="Devanture">
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="accueil">
			<div class="container">	
				
			<!-- Bidouille separateur de section -->
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-5"><hr></div>
        <div class ="col-md-2 col-sm-2 col-xs-2 text-center">
					<i class="fa fa-map-marker section-icone"></i>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-5"><hr></div>
      </div>
      <div class="row">
      	<div class="col-md-12 col-sm-12 col-xs-12">
      		<h3 class="text-center titre-section">Notre magasin à La Loupe</h3>
      	</div>
      </div>
      <!-- Fin Bidouille separateur de section -->

				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div id="map" style="width: 100%; height: 450px;"></div>
					</div>
					<div class="col-sm-6">

            <div class="row liste-icones">
              <div class="col-sm-12 text-center">
                <div class="icon-wrap icon-circle contrast-bg icon-md">
                  <i class="fa fa-clock-o text-white"></i>
                </div>
                <h4>Nos Horaires</h4>
                <ul class="list-unstyled">
	                <li>
	                  Lundi, Mercredi, Vendredi &mdash;
	                  <strong>10:00 - 19:00</strong>
	                </li>
	                <li>
	                Mardi &mdash;
	                <strong>09:00 - 19:00</strong>
	                </li>
	                <li>
	                	Samedi
	                	&mdash;
	                	<strong>10:00 - 19:00</strong>
	                </li>
	                <li>
	                	Jeudi, Dimanche, Jours fériés
	                	&mdash;
	                	<strong>Fermé</strong>
	                </li>
              	</ul>
              </div>
            </div>

						<div class="row liste-icones"> 
              <div class="col-sm-4 text-center">
                <div class="icon-wrap icon-circle contrast-bg icon-md">
                  <i class="fa fa-phone text-white"></i>
                </div>
                <h4>Téléphone</h4>
                <ul class="list-unstyled">
                  <li>02.37.XX.XX.XX.</li>
                  <li>06.47.73.10.64</li>
                </ul>
              </div>
              <div class="col-sm-4 text-center">
                <div class="icon-wrap icon-circle contrast-bg icon-md">
                  <i class="fa fa-envelope text-white"></i>
                </div>
                <h4>Mail</h4>
                <ul class="list-unstyled">
                  <li><a href="mailto:km120.cycle@gmail.com">km120.cycle@gmail.com</a></li>
                  <li><a href="mailto:site@domaine.fr">site@domain.fr</a></li>
                </ul>
              </div>
              <div class="col-sm-4 text-center">
                <div class="icon-wrap icon-circle contrast-bg icon-md">
                  <i class="fa fa-map-marker text-white"></i>
                </div>
                <h4>Adresse</h4>
                <ul class="list-unstyled">
                  <li>18 rue de la gare</li>
                  <li>28240 La Loupe</li>
                </ul>
              </div>
            </div>

          </div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			
			<!-- Bidouille separateur de section -->
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-5"><hr></div>
        <div class ="col-md-2 col-sm-2 col-xs-2 text-center">
					<i class="fa fa-comments-o section-icone"></i>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-5"><hr></div>
      </div>
      <div class="row">
      	<div class="col-md-12">
      		<h3 class="text-center titre-section">Nos témoignages clients</h3>
      	</div>
      </div>
      <!-- Fin Bidouille separateur de section -->

			
		  <div class="row">
		    <div class="col-md-12">
		      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
		        <!-- Bottom Carousel Indicators -->
		        <ol class="carousel-indicators">
		          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
		          <li data-target="#quote-carousel" data-slide-to="1"></li>
		          <li data-target="#quote-carousel" data-slide-to="2"></li>
		        </ol>
		        
		        <!-- Carousel Slides / Quotes -->
		        <div class="carousel-inner">
		        
		          <!-- Quote 1 -->
		          <div class="item active">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-3 text-center">
		                  <img class="img-circle" src="http://www.reactiongifs.com/r/overbite.gif" style="width: 100px;height:100px;">
		                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
		                </div>
		                <div class="col-sm-9">
		                  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
		                  <small>Someone famous</small>
		                </div>
		              </div>
		            </blockquote>
		          </div>
		          <!-- Quote 2 -->
		          <div class="item">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-3 text-center">
		                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg" style="width: 100px;height:100px;">
		                </div>
		                <div class="col-sm-9">
		                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
		                  <small>Someone famous</small>
		                </div>
		              </div>
		            </blockquote>
		          </div>
		          <!-- Quote 3 -->
		          <div class="item">
		            <blockquote>
		              <div class="row">
		                <div class="col-sm-3 text-center">
		                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
		                </div>
		                <div class="col-sm-9">
		                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor.</p>
		                  <small>Someone famous</small>
		                </div>
		              </div>
		            </blockquote>
		          </div>
		        </div>
		        
		        <!-- Carousel Buttons Next/Prev -->
		        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
		        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
		      </div>                          
		    </div>
		  </div>

		</div>
	</section>
</div>
	
<?php
	include('includes/footer.php');
?>	


	