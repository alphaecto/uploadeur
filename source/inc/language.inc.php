<?php

///////////////////////////////////// GPL //////////////////////////////////////
/*

  This file is part of PHP Web Manager.
  Copyright (c) 2010-2011 SimpleGeek. All rights reserved.
  http://www.simplegeek.fr/

  PHP Web Manager is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License
  as published by the Free Software Foundation; either version 2
  of the License, or (at your option) any later version.

  PHP Web Manager is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
  
*/
/////////////////////////////////////////////////////////////////////////////////

/*
  PHP Web Manager: Reloaded
  Fichier: language.inc.php
  Dernière modification: 10/06/2010
  Copyright (C) SimpleGeek 2010-2011
*/

#######################
##     SECURITE      ##
#######################

  if(!$logged)
	exit;
	
$language = array( // Version FR
					'FR' => array( 
					
								// Page d'accueil
									'PWM_ERROR_WELCOME' => 'Bienvenue sur le script de gestion globale PHP Web Manager',
									'PWM_ERROR_CONTENT' => 'Si vous voyez ce message, c\'est que vous n\'avez pas modifié le fichier de configuration<br />et ne pouvez donc pas utiliser le <abbr title="PHP Web Manager">PWM</abbr>: Reloaded<br /><br />Pour pouvoir utiliser ce script, veuillez éditer la ligne <i>password</i> dans le fichier <i>config.inc.php</i><br />via votre éditeur syntaxique et de ré-uploader le fichier sur votre espace d\'hébergement.',
									'PWM_ERROR_PASS'	=> 'Veuillez modifier le mot de passe dans le fichier <i>config.inc.php</i>',
									
									'PWM_CONNECT_FTP'	=> 'Connexion au FTP',
									'PWM_INDEX_WELCOME'	=> 'Bienvenue sur le script de gestion globale PHP Web Manager, pour commencer, veuillez vous logger.',
									'PWM_INDEX_CONTENT' => 'Voici une liste exhaustive des fonctionalités du <abbr title="PHP Web Manager">PWM</abbr>: Reloaded<br /><br />
										
										<ul class="listing">
										  <li>Listing rapide des fichiers et des dossiers</li>
										  <li>Edition en ligne (coloration syntaxique en temps réel via <a href="http://marijn.haverbeke.nl/codemirror/" target="_blank" alt="Site officiel de CodeMirror">CodeMirror</a>)</li>
										  <li>Download et Upload</li>
										  <li>Player MP3/MWA en HTML5</li>
										  <li>Création de nouveaux fichiers/dossiers</li>
										  <li>Informations sur la configuration PHP (ainsi que du php.ini)</li>
										  <li>Console de configuration simplifiée pour l\'utilisateur lambda</li>
										  <li>Recherches personnalisées dans l\'ensemble de vos fichiers</li>
										  <li>Edition des permissions CHMOD</li>
										  <li>Zip et extraction des fichiers en ligne</li>
										</ul>',
									'PWM_INDEX_PASS'	=> 'Veuillez entrer le mot de passe pour',
									'PWM_LICENCE_GPL' 	=> 'Ce software est distribué sous licence GPL.<br />
										Vous pouvez le modifier à votre guise à condition de ne pas vous l\'approprier ;)<br />',
									'PWM_COPYRIGHT'		=> 'Copyright © Projet PHP Web Manager: Reloaded et ses contributeurs. Tous droits réservés.',
									
								// Listing
									// Menu
									'LISTING_DISCO'		=> 'Déconnexion du FTP',
									'LISTING_NEW_DIR' 	=> 'Nouveau dossier',
									'LISTING_NEW_FILE' 	=> 'Nouveau fichier',
									'LISTING_UPLOAD' 	=> 'Uploader des fichiers',
									'LISTING_PHPINFO' 	=> 'Variables PHP',
									'LISTING_CONFIG' 	=> 'Configuration',
									'LISTING_SEARCH' 	=> 'Lancer une recherche',
									
									// Valeurs
									'LISTING_NAME' 		=> 'Nom',
									'LISTING_SIZE' 		=> 'Poids',
									'LISTING_MODIF' 	=> 'Dernière modification',
									'LISTING_DATE'		=> 'd-m-Y H:i',
									
									// Titre
									'LISTING_PREV'		=> 'Dossier précedent',
									'LISTING_BROWSE'	=> 'Parcourir',
									'LISTING_EDIT'		=> 'Editer',
									'LISTING_VIEW'		=> 'Voir',
									'LISTING_DOWNLOAD'	=> 'Télécharger',
									'LISTING_RENAME'	=> 'Renommer',
									'LISTING_DELETE'	=> 'Supprimer',
									'LISTING_FORCING'	=> 'Forcer l\'édition de ',
									'LISTING_UNZIP'		=> 'Extraire',
									'LISTING_COOKIES'	=> 'Supprimer tous les cookies',
									'LISTING_SHORTCUT'	=> 'Reccourcit clavier',
									
									// Bas
									'LISTING_PATH'		=> 'Chemin:',
									'LISTING_DIR'		=> 'Dossier',
									'LISTING_FILE'		=> 'Fichier',
									'LISTING_SELECTED'	=> ' élément(s) sélectionné(s).',
										// Menu bas
										'LISTING_ROOT' 		=> 'Aller à la racine',
										'LISTING_SELECT'	=> 'Tout sélectionner',
										'LISTING_UNSELECT'	=> 'Tout désélectionner',
										'LISTING_REVERSE'	=> 'Inverser la sélection',
										'LISTING_REMOVE'	=> 'Supprimer la sélection',
										'LISTING_ARCHIVE'	=> 'Ajouter à l\'archive',
										'LISTING_MOVE'		=> 'Déplacer la sélection',
										'LISTING_COPY'		=> 'Copier la sélection',
										'LISTING_CHMOD'		=> 'Changer les permissions',
										'LISTING_LOADING'	=> 'Chargement...',
									
									// CHMOD menu
									'CHMOD_TITLE'		=> 'Veuillez sélectionner les nouveaux attributs pour les fichiers sélectionnés',
									
									'CHMOD_READ'		=> 'Lecture',
									'CHMOD_WRITE'		=> 'Ecriture',									
									'CHMOD_EXECUTE'		=> 'Exécution',
									'CHMOD_PERMS_OWN'	=> 'Propriétaire',
									'CHMOD_PERMS_GPE'	=> 'Groupe ',
									'CHMOD_PERMS_PBC'	=> 'Public',
									'CHMOD_NUM_VALUE'	=> 'Valeur numérique',
									
									'CHMOD_SUBMIT'		=> 'Modifier !',
									'CHMOD_RETURN'		=> 'Retour',
									'CHMOD_OR'			=> 'ou',
									
								// Upload 
									'UPLOAD_TITLE'		=> 'Uploader des fichiers : ',
									'UPLOAD_SELECT'		=> 'Sélectionner les fichiers à uploader',
									'UPLOAD_MAX_SIZE'	=> 'Poids maximum d\'upload : ',
									'UPLOAD_GET_URL'	=> 'Télécharger une URL',
									'UPLOAD_GET_NAME'	=> 'Nom du fichier à télécharger ?',
									'UPLOAD_FOLDER'		=> 'Upload sur le dossier : ',
									'UPLOAD_OVERWRITE'	=> 'Ecrasement : ',
									'UPLOAD_SUBMIT'		=> 'Envoyer',
									
									// Valeurs d'écrasement
									'UPLOAD_OW_ACT'		=> 'Activé',
									'UPLOAD_OW_DEACT'	=> 'Désactivé',
									
								// Edition
									'EDIT_TITLE_SAVE'	=> 'Sauvegarder',
									'EDIT_TITLE_VIEW'	=> 'Aller au fichier',
									'EDIT_TITLE_BACK'	=> 'Retour sur le FTP',
									
									// Alert JS
									'EDIT_ALERT_NOREAD' => 'Erreur: Impossible d\'ouvrir le fichier',
									'EDIT_ALERT_YES'	=> 'Le fichier a bien été sauvegardé !',
									'EDIT_ALERT_NO'		=> 'Erreur : le fichier n\'a pas pu être écrit. \nVisiblement, le fichier n\'est pas accessible en écriture',
									
								// PHP informations
									'INFO_TITLE'		=> 'Tests du PHP Web Manager',
									'INFO_PHP'			=> 'Informations PHP',
									
									// Test
									'INFO_FOLDER'		=> 'Erreur: Le dossier ne peux être créé !',
									'INFO_NEW_FILE_YES'	=> 'La création des fichier est autorisée sur ce serveur.',
									'INFO_NEW_FILE_NO'	=> 'La création des fichiers n\'est pas autorisée sur ce serveur.',
									'INFO_EDIT_YES'		=> 'L\'édition des fichiers est autorisée sur ce serveur.',
									'INFO_EDIT_NO'		=> 'L\'édition des fichiers n\'est pas autorisée sur ce serveur.',
									'INFO_RENAME_YES'	=> 'Le changement de nom d\'emplacement est autorisé sur ce serveur.',
									'INFO_RENAME_NO'	=> 'Le changement de nom d\'emplacement n\'est pas autorisé sur ce serveur.',
									'INFO_DELETE_F_YES'	=> 'La suppression des fichiers est autorisée sur ce serveur.',
									'INFO_DELETE_F_NO'	=> 'La suppression des fichiers n\'est pas autorisée sur ce serveur.',
									'INFO_DELETE_D_YES'	=> 'La suppression des dossiers est autorisée sur ce serveur.',
									'INFO_DELETE_D_NO'	=> 'La suppression des dossiers n\'est pas autorisée sur ce serveur.',
									'INFO_RESULT_1'		=> 'Vous avez obtenu ',
									'INFO_RESULT_2'		=> 'erreur',
									'INFO_RESULT_3'		=> 'Votre <abbr title="PHP Web Manager">PWM</abbr> est ',
									'INFO_RESULT_4'		=> 'fonctionel',
									'INFO_SUBMIT_TEST'	=> 'Lancer les tests avancés',
									
								// Configuration
									'CONFIG_HEAD'		=> 'Panneau de configuration du P.W.M.',
									'CONFIG_TITLE'		=> 'Bienvenue sur l\'assistant de configuration du P.W.M.',
									'CONFIG_UPDATE'		=> 'Mise à jour',
									'CONFIG_CHECK'		=> 'Vérifier la mise à jour',
										
									// 
									'CONFIG_NEWPASS'	=> 'Votre nouveau mot de passe : &nbsp;&nbsp;&nbsp;',									
									'CONFIG_DISPLAY'	=> 'Affichage rapide ? ',
									'CONFIG_HL'			=> 'Activer l\'édition Javascript ? ',
									'CONFIG_OVERWRITE'	=> 'Ecraser les fichiers après un upload ? ',
									'CONFIG_PING'		=> 'Activer l\'envoi "Ping" ? ',
									'CONFIG_BIND'		=> 'Activer les touches "Bind" ? ',
									'CONFIG_SORT'		=> 'Tri par défaut des fichiers',
																								
									'CONFIG_VDISPLAY'	=> 'ne pas calculer la taille des dossiers',
									'CONFIG_VHL'		=> 'édition à coloration syntaxique en temps réel',
									'CONFIG_VOVERWRITE'	=> 'supprimer les fichiers existants lors d\'un upload',
									'CONFIG_VPING'		=> 'permet de savoir qui est <a href="http://www.simplegeek.fr/index?whois" target="_blank" title="Whois ?">connecté</a> sur le PWM',
									'CONFIG_VBIND'		=> '<a href="?type=newconfig&info" onclick="hide(\'bind\');">en savoir plus</a>',
									
									'CONFIG_SORT_NAME'	=> 'Par nom de fichier',
									'CONFIG_SORT_SIZE'	=> 'Par poids',
									'CONFIG_SORT_DATE'	=> 'Par date de modification',
									'CONFIG_SORT_PERM'	=> 'Par permissions',
									'CONFIG_SORT_TYPE'	=> 'Par type de fichier',
									
									'CONFIG_SORT_ASC'	=> 'Ordre ascendant',
									'CONFIG_SORT_DESC'	=> 'Ordre descendant',
									
									// Autres
									'CONFIG_SUBMIT'		=> 'Enregistrer les modifications',
									'CONFIG_TODO'		=> 'Modifier vos paramètres et cliquez sur &quot;Enregistrer&quot;.',
									'CONFIG_SAVED'		=> 'Enregistré !',
									'CONFIG_UPDATE_OK'	=> '<font color="green">Votre version est à jour !</font>',
									'CONFIG_UPDATE_NEW'	=> '<font color="red">Il existe une version plus récente !</font> (<a href="http://www.simplegeek.fr/index?download" title="Nouvelle version" target="_blank">Télécharger la nouvelle</a>)',
									
									// Bind
									'CONFIG_BIND_INFO'	=> '<div id="bind">Depuis la nouvelle version du script, il est possible, en pressant certaines touches prédéfinies, d\'interagir avec les fichiers.<br />
							Voici la liste complète:
							<ul>
								<li> Touche A: <i>Selectionner tous les fichiers/dossiers</i></li>
								<li> Touche Z: <i>Déselectionner tous les fichiers/dossiers</i></li>
								<li> Touche E: <i>Inverser la selection</i></li>
								<li> Touche R: <i>Retour à la racine</i></li>
								<br />
								<li> Touche <abbr title="Supprimer">Del</abbr>: <i>Supprimer les fichiers/dossiers selectionnés</i></li>
								<li> Touche X: <i>Déplacer les fichiers/dossiers selectionnés</i></li>
								<li> Touche C: <i>Copier les fichiers/dossiers selectionnés</i></li>
							</ul>
						</div><br />
						<input style="margin:13px;" type="button" onclick="window.location=\'?type=newconfig\'" value="Retour" />
						',
						
								// Déplacement
									'MOVE_HEAD'			=> 'Déplacer sur le dossier: ',
									'MOVE_TITLE'		=> 'Sélectionnez le dossier où vous voulez déplacer vos fichiers',									
									'MOVE_SUBMIT'		=> 'Déplacer',
									'MOVE_RETURN'		=> 'Annuler',
									'MOVE_NOFILE'		=> 'Aucun fichier n\'est sélectionné !',
						
								// Copie
									'COPY_HEAD'			=> 'Copier sur le dossier: ',
									'COPY_TITLE'		=> 'Sélectionnez le dossier où vous voulez copier vos fichiers',									
									'COPY_SUBMIT'		=> 'Copier',
									'COPY_RETURN'		=> 'Annuler',
									'COPY_NOFILE'		=> 'Aucun fichier n\'est sélectionné !',
									
								// Recherche
									'SEARCH_SEARCH'		=> 'Rechercher',
									'SEARCH_EXEPT'		=> 'exepté',
									'SEARCH_BACK'		=> 'Retour sur le FTP',
									'SEARCH_CASE'		=> 'Respecter la casse  ?',
									'SEARCH_NAME'		=> 'Noms de Fichiers/Dossiers',
									'SEARCH_START'		=> 'Lancer la recherche',
									
									'SEARCH_FILE'		=> 'Fichier',
									'SEARCH_TYPE'		=> 'Type',
									'SEARCH_ONDIR'		=> 'Sur le dossier',
									'SEARCH_ACTION'		=> 'Actions',
									'SEARCH_LINE'		=> 'Ligne ',
									
									'SEARCH_FAIL'		=> 'La recherche a échouée... ',
									'SEARCH_FOUND'		=> 'Aucun fichier n\'a été trouvé.',
									'SEARCH_RESULT_1'	=> 'élément trouvé',
									'SEARCH_RESULT_2'	=> 'élément',
									'SEARCH_RESULT_3'	=> 'trouvé',
									'SEARCH_SECONDS'	=> 'secondes',
									
									'SEARCH_BOTTOM'		=> 'Rechercher des mots clés sur le FTP',
									'SEARCH_HTML'		=> 'Page Web',
									'SEARCH_UNKOWN'		=> 'inconnu',
									
								 ),

					// Version EN		 
					'EN' => array(
								// Index page
									'PWM_ERROR_WELCOME' => 'Welcome on the PHP Web Manager script',
									'PWM_ERROR_CONTENT' => 'If you can see this message, that means you didn\'t edit the configuration file<br />and you can\'t use the <abbr title="PHP Web Manager">PWM</abbr>: Reloaded<br /><br />To use this script, please edit the line <i>password</i> in the file <i>config.inc.php</i><br />via a notepad and upload the file again on your hosting space.',
									'PWM_ERROR_PASS'	=> 'Please, edit the password in the file <i>config.inc.php</i>',
									
									'PWM_CONNECT_FTP'	=> 'Connexion to the FTP',
									'PWM_INDEX_WELCOME'	=> 'Welcome on the PHP Web Manager script, to begin, you have to log in.',
									'PWM_INDEX_CONTENT' => 'Here is a list of features from the <abbr title="PHP Web Manager">PWM</abbr>: Reloaded<br /><br />
										
										<ul class="listing">
										  <li>Fast listing of files and directories</li>
										  <li>Edition online (syntaxic coloration in real time via <a href="http://marijn.haverbeke.nl/codemirror/" target="_blank" alt="Official website of CodeMirror">CodeMirror</a>)</li>
										  <li>Download and Upload</li>
										  <li>Audio player MP3/MWA in HTML5</li>
										  <li>Creation of new files/directories</li>
										  <li>Informations about the PHP configuration (and about the php.ini)</li>
										  <li>Simplified configuration console for any user</li>
										  <li>Customized search in all of your files</li>
										  <li>Edition of CHMOD permissions</li>
										  <li>Zip and extraction of your files online via the library PCLZip</li>
										</ul>',
									'PWM_INDEX_PASS'	=> 'Please, enter the password for',
									
									'PWM_LICENCE_GPL' 	=> 'This software is distributed under licence GNU/GPL.<br />
										You can modify it as you like, but don\'t remove the copyright ;)<br />',
									'PWM_COPYRIGHT'		=> 'Copyright © PHP Web Manager: Reloaded project and its contributors. All rights reserved.',
									
								// Listing page
									// Menu
									'LISTING_DISCO'		=> 'Disconnection',
									'LISTING_NEW_DIR' 	=> '&nbsp;New directory&nbsp;',
									'LISTING_NEW_FILE' 	=> '&nbsp;New file&nbsp;',
									'LISTING_UPLOAD' 	=> '&nbsp;Uploading&nbsp;',
									'LISTING_PHPINFO' 	=> '&nbsp;PHP Informations&nbsp;',
									'LISTING_CONFIG' 	=> '&nbsp;Configuration&nbsp;',
									'LISTING_SEARCH' 	=> '&nbsp;New search&nbsp;',
									
									// Value
									'LISTING_NAME' 		=> 'Name',
									'LISTING_SIZE' 		=> 'Size',
									'LISTING_MODIF' 	=> 'Last modification',
									'LISTING_DATE'		=> 'Y-m-d H:i',
									
									// Title
									'LISTING_PREV'		=> 'Previous directory',
									'LISTING_BROWSE'	=> 'Browse',
									'LISTING_EDIT'		=> 'Edit',
									'LISTING_VIEW'		=> 'View',
									'LISTING_DOWNLOAD'	=> 'Download',
									'LISTING_RENAME'	=> 'Rename',
									'LISTING_DELETE'	=> 'Delete',
									'LISTING_FORCING'	=> 'Force the edition of ',
									'LISTING_UNZIP'		=> 'Unzip',
									'LISTING_COOKIES'	=> 'Removing all cookies',
									'LISTING_SHORTCUT'	=> 'Keyboard shortcut',
									
									// Bottom
									'LISTING_PATH'		=> 'Path:',
									'LISTING_DIR'		=> 'Folder',
									'LISTING_FILE'		=> 'File',
									'LISTING_SELECTED'	=> ' selected element(s).',
										// Bottom Menu
										'LISTING_ROOT' 		=> 'Go to the root',
										'LISTING_SELECT'	=> 'Select all',
										'LISTING_UNSELECT'	=> 'Unselect all',
										'LISTING_REVERSE'	=> 'Reverse the selection',
										'LISTING_REMOVE'	=> 'Delete the selection',
										'LISTING_ARCHIVE'	=> 'Add to the archive',
										'LISTING_MOVE'		=> 'Move the selection',
										'LISTING_COPY'		=> 'Copy the selection',
										'LISTING_CHMOD'		=> 'Change the permissions',
										'LISTING_LOADING'	=> 'Loading...',
									
									// CHMOD menu
									'CHMOD_TITLE'		=> 'Please, select the new values for the selected files',
									
									'CHMOD_READ'		=> 'Read',
									'CHMOD_WRITE'		=> 'Write',									
									'CHMOD_EXECUTE'		=> 'Execution',
									'CHMOD_PERMS_OWN'	=> 'Owner\'s permissions',
									'CHMOD_PERMS_GPE'	=> 'Group\'s permissions',
									'CHMOD_PERMS_PBC'	=> 'Publics permissions',
									'CHMOD_NUM_VALUE'	=> 'Numeric value',
									
									'CHMOD_SUBMIT'		=> 'Submit',
									'CHMOD_RETURN'		=> 'Return',
									'CHMOD_OR'			=> 'or',
									
								// Upload page
									'UPLOAD_TITLE'		=> 'Uploading files : ',
									'UPLOAD_SELECT'		=> 'Select the files to upload',
									'UPLOAD_MAX_SIZE'	=> 'Maximum uploading filesize : ',
									'UPLOAD_GET_URL'	=> 'Get from an URL',
									'UPLOAD_GET_NAME'	=> 'Filename to download ?',
									'UPLOAD_FOLDER'		=> 'Upload on the folder : ',
									'UPLOAD_OVERWRITE'	=> 'Overwriting : ',
									'UPLOAD_SUBMIT'		=> 'Submit',
									
									// Overwrite values
									'UPLOAD_OW_ACT'		=> 'Enabled',
									'UPLOAD_OW_DEACT'	=> 'Disabled',
									
								// Edit page
									'EDIT_TITLE_SAVE'	=> 'Save',
									'EDIT_TITLE_VIEW'	=> 'Go to the file',
									'EDIT_TITLE_BACK'	=> 'Back to the FTP',
									
									// Alert JS
									'EDIT_ALERT_NOREAD' => 'Error: Impossible to open the file',
									'EDIT_ALERT_YES'	=> 'The file has been successfully saved !',
									'EDIT_ALERT_NO'		=> 'Error: The file hasn\'t been written\nObviously, it seems impossible to write in this file',
									
								// PHP informations page
									'INFO_TITLE'		=> 'Test of the PHP Web Manager script',
									'INFO_PHP'			=> 'PHP Informations',
									
									// Test
									'INFO_FOLDER'		=> 'Error: The folder can be created !',
									'INFO_NEW_FILE_YES'	=> 'Creation of new file is allowed on this server.',
									'INFO_NEW_FILE_NO'	=> 'Creation of new file isn\'t allowed on this server.',
									'INFO_EDIT_YES'		=> 'Editing is allowed on this server.',
									'INFO_EDIT_NO'		=> 'Editing isn\'t allowed on this server.',
									'INFO_RENAME_YES'	=> 'Renaming is allowed on this server.',
									'INFO_RENAME_NO'	=> 'Renaming isn\'t allowed on this server.',
									'INFO_DELETE_F_YES'	=> 'Deleting file is allowed on this server.',
									'INFO_DELETE_F_NO'	=> 'Deleting file isn\'t allowed on this server.',
									'INFO_DELETE_D_YES'	=> 'Deleting folder is allowed on this server.',
									'INFO_DELETE_D_NO'	=> 'Deleting folder isn\'t allowed on this server.',
									'INFO_RESULT_1'		=> 'You\'ve got ',
									'INFO_RESULT_2'		=> 'error',
									'INFO_RESULT_3'		=> 'Your <abbr title="PHP Web Manager">PWM</abbr> is ',
									'INFO_RESULT_4'		=> 'fonctional',
									'INFO_SUBMIT_TEST'	=> 'Launch the advanced tests',
									
								// Configuration page
									'CONFIG_HEAD'		=> 'P.W.M. Configuration pannel',
									'CONFIG_TITLE'		=> 'Welcome on the PHP Web Manager configuration pannel',
									'CONFIG_UPDATE'		=> 'Check update',
										'CONFIG_CHECK'		=> 'Check for a new update',
									
									// New Config
									'CONFIG_NEWPASS'	=> 'Your new password : &nbsp;&nbsp;&nbsp;',									
									'CONFIG_DISPLAY'	=> 'Fast display ? ',
									'CONFIG_HL'			=> 'Enable JavaScript edition ? ',
									'CONFIG_OVERWRITE'	=> 'Overwrite after upload ? ',
									'CONFIG_PING'		=> 'Enable the "Ping" ? ',
									'CONFIG_BIND'		=> 'Enable the "Bind" keys ? ',
									'CONFIG_SORT'		=> 'Default sort',
												
										// Value
										'CONFIG_VDISPLAY'	=> 'don\'t calculate the folder size',
										'CONFIG_VHL'		=> 'use the syntaxic coloration in real time',
										'CONFIG_VOVERWRITE'	=> 'remove existing files after an upload',
										'CONFIG_VPING'		=> 'allow to know who is <a href="http://www.simplegeek.fr/index?whois" target="_blank" title="Whois ?">connected</a> on the PWM',
										'CONFIG_VBIND'		=> '<a href="?type=newconfig&info" onclick="hide(\'bind\');">what about bind keys ?</a>',
									
										// Sort
										'CONFIG_SORT_NAME'	=> 'By filename',
										'CONFIG_SORT_SIZE'	=> 'By size',
										'CONFIG_SORT_DATE'	=> 'By date of last modification',
										'CONFIG_SORT_PERM'	=> 'By permissions',
										'CONFIG_SORT_TYPE'	=> 'By filetype',
										
										'CONFIG_SORT_ASC'	=> 'Ascendant',
										'CONFIG_SORT_DESC'	=> 'Descendant',
									
									// Other
									'CONFIG_SUBMIT'		=> 'Save the modifications',
									'CONFIG_TODO'		=> 'Modify your parameters and click on &quot;Save&quot;.',
									'CONFIG_SAVED'		=> 'Configurations saved !',
									'CONFIG_UPDATE_OK'	=> '<font color="green">Your version is the lastest one !</font>',
									'CONFIG_UPDATE_NEW'	=> '<font color="red">There is a new update</font> (<a href="http://www.simplegeek.fr/index?download" title="New version" target="_blank">Download the latest one</a>)',
									
									// Bind
									'CONFIG_BIND_INFO'	=> '<div id="bind">Since there is a new version of this script, it\'s possible now to do more actions with files by pressing defined keys<br />
							Here the full list:
							<ul>
								<li> Key A: <i>Select all files/folders</i></li>
								<li> Key Z: <i>Unselect all files/folders</i></li>
								<li> Key E: <i>Reverse the selection</i></li>
								<li> Key R: <i>Go to the root</i></li>
								<br />
								<li> Key Del: <i>Delete the selected files/folders</i></li>
								<li> Key X: <i>Move the selected files/folders</i></li>
								<li> Key C: <i>Copy the selected files/folders</i></li>
							</ul>
						</div><br />
						<input style="margin:13px;" type="button" onclick="window.location=\'?type=newconfig\'" value="Return" />
						',
						
								// Move page
									'MOVE_HEAD'			=> 'Move on the directory: ',
									'MOVE_TITLE'		=> 'Select the directory where you want to move your files',									
									'MOVE_SUBMIT'		=> ' Move ',
									'MOVE_RETURN'		=> ' Return ',
									'MOVE_NOFILE'		=> 'No file selected !',
						
								// Copy page
									'COPY_HEAD'			=> 'Copy on the directory: ',
									'COPY_TITLE'		=> 'Select the directory where you want to copy your files',									
									'COPY_SUBMIT'		=> ' Copy ',
									'COPY_RETURN'		=> ' Return ',
									'COPY_NOFILE'		=> 'No file selected !',
									
								// Search page
									'SEARCH_SEARCH'		=> 'Search',
									'SEARCH_EXEPT'		=> 'exept',
									'SEARCH_BACK'		=> 'Back to the FTP',
									'SEARCH_CASE'		=> 'Respect the case ?',
									'SEARCH_NAME'		=> 'Files/Folders name',
									'SEARCH_START'		=> ' Start the search ',
									'SEARCH_DIR'		=> 'Folders',
									
									'SEARCH_FILE'		=> 'Files',
									'SEARCH_TYPE'		=> 'Type',
									'SEARCH_ONDIR'		=> 'On the directory',
									'SEARCH_ACTION'		=> 'Actions',
									'SEARCH_LINE'		=> 'Line ',
									
									'SEARCH_FAIL'		=> 'The search has failed ',
									'SEARCH_FOUND'		=> 'No file\'s found.',
									'SEARCH_RESULT_1'	=> 'element found',
									'SEARCH_RESULT_2'	=> 'elements',
									'SEARCH_RESULT_3'	=> 'found',
									'SEARCH_SECONDS'	=> 'seconds',
									
									'SEARCH_BOTTOM'		=> 'Search of keywords on the FTP',
									'SEARCH_HTML'		=> 'Web page',
									'SEARCH_UNKOWN'		=> 'unknown',									
									
								 )
				 );
								