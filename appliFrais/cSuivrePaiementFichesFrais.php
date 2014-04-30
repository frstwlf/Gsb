<?php
/** 
 * Script de contrôle et d'affichage du cas d'utilisation "Consulter une fiche de frais"
 * @package default
 * @todo  RAS
 */
  $repInclude = './include/';
  require($repInclude . "_init.inc.php");

  // page inaccessible si visiteur non connecté
  if ( ! estConnecte() ) {
      header("Location: cSeConnecter.php");  
  }
  
  // page inaccessible si comptable
  if ( ! estComptable()) {
	  header("Location: cAccueil.php");
  }
  
  require($repInclude . "_entete.inc.html");
  require($repInclude . "_sommaire.inc.php");
  

  require($repInclude . "_pied.inc.html");
  require($repInclude . "_fin.inc.php");
?> 