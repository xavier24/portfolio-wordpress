<?php get_header(); ?>

<section id="contenu" class="contact">
			<form class="contact" method="post" action="<?php echo home_url('/wp-content/themes/portfolio/'); ?>page-formulaire.php"> 
				 
					<h5>Une idée&nbsp? / Un projet&nbsp? / Une question&nbsp? </h5> 
					<label class="nom"><span>Nom/Entreprise</span>
					<input type="text" class="input_text" name="name" id="nom"/>
					</label>
					
					<label class="email"><span>Email</span>
					<input type="text" class="input_text" name="email" id="email"/>             </label>
					
					<label class="objet"><span>Objet</span>
					<input type="text" class="input_text" name="subject" id="objet"/>             </label>
					
					<label class="textarea"><span>Message</span>
					<textarea class="message" name="message" id="message"></textarea>             
					</label> 
					
					<input type="submit" class="boutton" value="Envoyer" />
					
				
			</form>

		</section>
<?php get_footer(); ?>

