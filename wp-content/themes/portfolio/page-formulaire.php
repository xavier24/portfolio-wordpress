<?php get_header(); ?>
<?php 
	if($_POST['message'] != null && $_POST['email'] != null){
		$nom = htmlspecialchars($_POST['name'], ENT_QUOTES); 
		$expediteur = htmlspecialchars($_POST['email'], ENT_QUOTES); 
		$objet = htmlspecialchars($_POST['subject'], ENT_QUOTES); 
		$message = htmlspecialchars($_POST['message'], ENT_QUOTES);
		$moi = "Bekaert Xavier";
		$receveur = "xavier24@hotmail.com";

		$msg  = "MIME-Version: 1.0\r\n";
		$msg .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$msg .= 'Bonjour,'."\r\n\r\n";
		$msg .= 'Ce mail a été envoyé depuis monsite.com par '.$nom."\r\n\r\n";
		$msg .= 'Voici le message qui vous est adressé :'."\r\n";
		$msg .= '***************************'."\r\n";
		$msg .= $message."\r\n";
		$msg .= '***************************'."\r\n";

		/* En-têtes de l'e-mail */
		$entete = 'De: '.$nom.' <'.$expediteur.'>'."\r\n\r\n";

		/* Envoi de l'e-mail */
		if(!mail($receveur, $objet, $msg, $entete)){
		 echo "L'email n'a pu être envoyé !";?>
		<a href="http://lettrage-bekaert.eu/xavier/wordpress/contact/">Retour au formulaire de contact</a>
		<?php	
		} 
		else {
		 echo "Votre message a bien été envoyé.";?>
		<a href="http://lettrage-bekaert.eu/xavier/wordpress/contact/">Retour au formulaire de contact</a>
		<?php	
		}
		
	}
	else
	{
		echo "Votre message n'a pu être envoyé car il n'était pas complet. Veuillez introduire au minimum votre email et votre message.";?>
		<a href="http://lettrage-bekaert.eu/xavier/wordpress/contact/">Retour au formulaire de contact</a>
		<?php
	}

 ?>
 <?php get_footer(); ?>