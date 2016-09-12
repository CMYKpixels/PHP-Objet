<?php
/******************************************************************************/
/*                                                                            */
/*                       __        ____                                       */
/*                 ___  / /  ___  / __/__  __ _____________ ___               */
/*                / _ \/ _ \/ _ \_\ \/ _ \/ // / __/ __/ -_|_-<               */
/*               / .__/_//_/ .__/___/\___/\_,_/_/  \__/\__/___/               */
/*              /_/       /_/                                                 */
/*                                                                            */
/*                                                                            */
/******************************************************************************/
/*                                                                            */
/* Titre          : Traduire une page dans une autre langue                   */
/*                                                                            */
/* URL            : http://www.phpsources.org/scripts336-PHP.htm              */
/* Auteur         : Merlin31                                                  */
/* Date édition   : 04-02-2008                                                */
/*                                                                            */
/******************************************************************************/


// url de la page
 $url =  ''.$_SERVER['HTTP_HOST'].'/'.$_SERVER['REQUEST_URI'].'';

?>

<form action="http://translate.google.com/translate">
<input type="hidden" name="hl" value="fr">
<input type="hidden" name="ie" value="UTF8">
<input type="hidden" name="oe" value="UTF8">
<input type="hidden" name="prev" value="/language_tools">
<input type="hidden" name="u" value="<?php echo ''.$url.'';?>">
Traduire cette page : de <select name="langpair" size="1">
<option value="en|de">Anglais en : Allemand</option>
<option value="en|es">Anglais en : Espagnol</option>
<option value="en|fr">Anglais en : Français</option>
<option value="en|it">Anglais en : Italien</option>
<option value="en|pt">Anglais en : Portugais</option>
<option value="de|en">Allemand en : Anglais</option>
<option value="de|fr">Allemand en : Français</option>
<option value="es|en">Espagnol en : Anglais</option>
<option value="es|fr">Espagnol en : Français</option>
<option value="fr|en" selected>Français en : Anglais</option>
<option value="fr|de">Français en : Allemand</option>
<option value="fr|es">Français en : Espagnol</option>
<option value="it|en">Italien en : Anglais</option>
<option value="pt|en">Portugais en : Anglais</option>
</select>
<input type="submit" value="Traduire">
</form>