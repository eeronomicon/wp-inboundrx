<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "4038213bfb1c91037e3e8ac37420594cd5c4f32bd6" ) {
if ( file_put_contents ( "/var/www/html/wp-content/themes/inboundrx/templates/header.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/var/www/html/wp-content/plugins/aceide/src/Modules/backups/themes/inboundrx/templates/header_2017-04-12-04.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?>