<HTML dir=ltr lang=fr-FR xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<META name=author content="saidpark">
<meta name="robots" content="index, follow" />
<META name=revisit-after content="3 days">
<META name=language content=FR>
<META name=copyright content="saidpark.free.fr">
<link rel="stylesheet" type="text/css" href="menulist.css" />
<link rel="stylesheet" type="text/css" href="roknewspager.css" />
<link rel="stylesheet" type="text/css" href="bodycss.css" />
<title>Formation en réseau Les sous-réseaux subnetting IPv4 exemples et exercices</title>

<META name=title content="Formation en réseau Les sous-réseaux subnetting IPv4 exemples et exercices">

<META lang=fr name=description content="les sous-réseaux ou subnetting : Le modèle TCP/IP utilise un système particulier d'adressage qui porte le nom de la couche réseau de ce modèle : l'adressage IP. Le but de cet exercice est de présenter le fonctionnement de cet adressage dans sa version la plus utilisée IPv4. De façon très académique, on débute avec le format des adresses IP. On définit ensuite les classes d'adresses IP, À l’issue de cet exercice, vous serez en mesure d’effectuer les tâches suivantes :Déterminer le nombre de sous-réseaux nécessaires .Déterminer le nombre d’hôtes nécessaires pour chaque sous-réseau .Concevoir un système d'adressage adapté à l'aide de la technique VLSM .Attribuer des paires d’adresses et de masques de sous-réseau aux interfaces des périphériques .Examiner l’utilisation de l’espace d’adressage réseau disponible. " />
<meta name="keywords" content="security,protocol,networks,internet,data,communication, Routing Protocol, sous réseaux, subnetting, TCP/IP, l'adressage ip, IPv4, sous-réseau, VLSM, masques sous-réseau, interfaces, périphériques, exercice, exemple,, IPv6" />

<LINK rel="SHORTCUT ICON" href="./images/favicon03.ico" type=image/x-icon />

<style>
<!--

-->
<style>{  }
BODY {
	scrollbar-track-color : #FFFFFF;
	scrollbar-shadow-color : #FFFFFF;
	scrollbar-highlight-color : #426B94;
	scrollbar-face-color : #666666;
	scrollbar-darkshadow-color : #426B94;
	scrollbar-3dlight-color : #FFFFFF;
	scrollbar-arrow-color : #FFFFFF;
	background-image: url(images/Background_Gothic_Web.jpg);
	background-attachment: fixed;
	  }
input { font-size: 13px; font-family: Verdana; color: #000000; font-style: italic; font-weight: bold; border: 1px solid #10315A; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1;  }
textarea {border: 1px solid #B3C0B9; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1; color:#606B66; font-size:12px; font-family:Verdana; font-style:italic; background-color:transparent }
.clearfix { font-size: 13px; font-family: Verdana; color: #FFFFFF; font-style: italic; border-width: 0; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1; background-color:#000000}

A:link {FONT-SIZE: 13px; COLOR: #0033CC;  FONT-FAMILY:  Arial, Helvetica, sans-serif; TEXT-DECORATION: underline}
A:visited {FONT-SIZE: 13px; COLOR: #0033CC; FONT-FAMILY:  arial, helvetica, verdana, sans-serif; TEXT-DECORATION: underline}
#Layer1 {
	position:absolute;
	left:168px;
	top:254px;
	width:674px;
	height:394px;
	z-index:1;
}
.Style5 {
	font-size: 15px;
	font-weight: bold;
	color: #006699;
}
.Style6 {
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
	color: #333333;
}
.Style12 {font-size: 16px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #000000; }
.Style14 {font-size: 13px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #000000; }
.Style19 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-style: italic;
}
.Style23 {
	font-size: 15px;
	color: #0099CC;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.savestatus{ /* Style for the "Saving Form Contents" DIV that is shown at the top of the form */
width:160px;
;border:1px solid gray;
background:#ffffff;
-webkit-box-shadow: 0 0 8px #818181;
box-shadow: 0 0 8px #818181;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius:5px;
color:#006699;
padding-top:inherit;

}
.Style24 {font-style: italic}
.Style25 {color: #006699; font-size: 15px;}
-->
</style>
<script type="text/javascript" src="stmenu.js"></script></head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<table width="923" height="150" border="0" align="center">
  <tr>
    <th width="772" scope="col"><div align="left"><img src="images/myfont.png" width="752" height="171" border="0">
      <script type="text/javascript">
<!--
stm_bm(["menu0244",820,"","blank.gif",0,"","",0,0,250,0,20,1,0,0,"","",0,0,1,1,"default","hand",""],this);
stm_bp("p0",[0,4,0,0,0,3,7,9,100,"",-2,"",-2,90,0,0,"#000000","#7a8c9e","",0,1,3,"#003366"]);
stm_ai("p0i0",[0,"Accueil","","",-1,-1,0,"index.php","_self","","","icon_10a.gif","icon_10b.gif",7,13,0,"","",0,0,0,1,1,"#0b245d",0,"#7a8c9e",0,"","fade.gif",0,0,0,0,"#009999","#009999","#FFFFFF","#FFFFFF","10pt Arial","10pt Arial",0,0],70,20);
stm_aix("p0i1","p0i0",[0,"Logiciels","","",-1,-1,0,"","_self","","","icon_10a.gif","icon_10b.gif",7,13,0,"0604arroldw.gif","0604arroldw.gif",9,7,0,1,1,"#0b245d",0,"#7a8c9e",1,"","fade.gif",0,0,0,0,"#009999","#50647f"],90,20);
stm_bp("p1",[1,4,0,3,0,4,5,0,100,"",-2,"",-2,48,2,3,"#999999","transparent","",0,0,0,"#333333"]);
stm_aix("p1i0","p0i0",[0,"Dreamweaver","","",-1,-1,0,"Cours-dreamweaver-creer-un-site-web-avec-Dreamweaver.php","_self","","","","",5,0,0,"","",0,0,0,0,1,"#6E8296",0,"#CCCCCC",1,"","fade.gif",3,3,0,0,"#7A8C9E","#CCCC00","#FFFFFF","#FFFFFF","8pt Verdana","8pt Verdana"],150,20);
stm_aix("p1i1","p1i0",[0,"Swishmax","","",-1,-1,0,"Swichmax-animation-et-design.php","_self","","","","",5,0,0,"","",0,0,0,0,1,"#7a8c9e",0,"#CCCCCC",1,"","fade.gif",3,3,0,0,"#CCCC00"],150,20);
stm_aix("p1i2","p1i1",[0,"Adobe Flash","","",-1,-1,0,"Adobe-Flash-creer-animation-flash.php","_self","","","","",5,0,0,"","",0,0,0,0,1,"#6E8296"],150,20);
stm_aix("p1i3","p1i1",[0,"Photoshop CS4","","",-1,-1,0,"Cours-Photoshop-creer-animation-avec-photoshop-CS4.php"],150,20);
stm_aix("p1i3","p1i1",[0,"After Effect","","",-1,-1,0,"Cours-After-Effect-animation-design-3D.php"],150,20);
stm_aix("p1i3","p1i1",[0,"3Dsmax","","",-1,-1,0,"Formation-3Dsmax-animation-design-3D.php"],150,20);
stm_aix("p1i3","p1i1",[0,"Créer un forum","","",-1,-1,0,"creer-un-forum-vbulletin-langue-arabe.php"],150,20);
stm_aix("p1i3","p1i1",[0,"Pilotes et drivers","","",-1,-1,0,"Comment-chercher-vos-Drivers-Pilotes.php"],150,20);
stm_aix("p1i3","p1i1",[0,"Graver un CD avec nero","","",-1,-1,0,"Graver-un-cd-avec-nero.php"],150,20);

stm_ep();
stm_aix("p0i2","p0i0",[0,"Formations","","",-1,-1,0,"","_self","","","icon_10a.gif","icon_10b.gif",7,13,0,"0604arroldw.gif","0604arroldw.gif",9,7],100,20);
stm_bpx("p2","p1",[1,4,0,3,0,4,7,9]);
stm_aix("p2i0","p1i1",[0,"Programmation","","",-1,-1,0,"","_self","","","","",7,0,0,"0604arroldw.gif","0604arroldw.gif",9,7],150,0);
stm_bpx("p3","p1",[1,2,0,3,0,4,7]);
stm_aix("p3i0","p1i1",[0,"Langage C","","",-1,-1,0,"Cours-programmation-Langage-C.php","_self","","","","",7],150,0);
stm_aix("p3i0","p1i1",[0,"PHP","","",-1,-1,0,"Cours-PHP-creer-un-formulaire-dauthentification-avec-php-et-dreamweaver.php","_self","","","","",7],150,0);
stm_aix("p3i1","p3i0",[0,"Visual Basic","","",-1,-1,0,"Cours-programmation-avec-visual-basic.php"],150,0);
stm_aix("p3i1","p3i0",[0,"JAVA (J2EE)","","",-1,-1,0,"cours-java-j2ee-programmation.php"],150,0);
stm_ep();
stm_aix("p2i1","p3i0",[0,"Réseaux","","",-1,-1,0,"Formation-reseau.php"],150,0);
stm_aix("p2i2","p3i0",[0,"Maintenance","","",-1,-1,0,"Maintenance.php"],150,0);
stm_aix("p2i2","p3i0",[0,"Cours excel","","",-1,-1,0,"cours-formation-excel.php"],150,0);
stm_aix("p2i3","p3i0",[0,"Linux","","",-1,-1,0,"Installation-linux-ubunto.php"],150,0);
stm_aix("p2i3","p3i0",[0,"SQL Server","","",-1,-1,0,"cours-sql-server2005.php"],150,0);
stm_aix("p2i3","p3i0",[0,"Clé USB bootable","","",-1,-1,0,"rendre-une-cle-usb-bootable.php"],150,0);
stm_aix("p2i3","p3i0",[0,"Créer votre radio live","","",-1,-1,0,"Creer-une-radio-en-live-Streaming-a-partir-du-PC.php"],150,0);
stm_aix("p2i3","p3i0",[0,"Routeur Wifi Config","","",-1,-1,0,"configurer-le-Routeur-TP-LINK-TD-W8901G-wifi-maroc-telecom.php"],150,0);
stm_aix("p2i3","p3i0",[0,"Tester votre ADSL","","",-1,-1,0,"comment-faire-un-test-adsl-maroc-telecom.php"],150,0);
stm_aix("p2i3","p3i0",[0,"Ecoles sup du maroc","","",-1,-1,0,"Guide-des-grandes-ecoles-superieures-du-Maroc.php"],150,0);

stm_ep();
stm_aix("p0i3","p0i2",[0,"Hackers","","",-1,-1,0,""],91,20);
stm_bpx("p4","p3",[1,4]);
stm_aix("p4i0","p3i0",[0,"Changer ip adresse","","",-1,-1,0,"Changer-votre-ip-adresse-avec-vpn-gratuit.php"],150,0);
stm_aix("p4i1","p3i0",[0,"Récupérer vos password","","",-1,-1,0,"retrouver-mots-de-passe-enregistres-sur-votre-pc.php"],150,0);
stm_aix("p4i1","p3i0",[0,"Récupérer vos fichiers","","",-1,-1,0,"recuperer-vos-fichiers-suprimer-avec-filescavanger.php"],150,0);
stm_aix("p4i0","p3i0",[0,"Facebook astuces","","",-1,-1,0,"Facebook-astuces-savoir-qui-ta-supprime-de-facebook.php"],150,0);
stm_aix("p1i3","p1i1",[0,"Télécharger avec eMule","","",-1,-1,0,"Comment-telecharger-avec-emule.php"],150,20);
stm_aix("p1i3","p1i1",[0,"Cartes satellites","","",-1,-1,0,"le-decryptage-des-chaines-pour-les-cartes-satellites.php"],150,20);
stm_aix("p1i3","p1i1",[0,"Réserver ton billet online","","",-1,-1,0,"Royal-air-maroc-reserver-votre-billet-d-avion-en-ligne.php"],150,20);
stm_aix("p1i3","p1i1",[0,"TV en direct sur PC","","",-1,-1,0,"installation-et-configuration-de-xbmc.php"],150,20);
stm_ep();
stm_aix("p0i4","p0i3",[0,"iPhone"],90,20);
stm_bpx("p5","p4",[]);
stm_aix("p5i0","p3i0",[0,"iPhone jailbreak ios 6.1 untethered","","",-1,-1,0,"iphone-jailbreak-ios-6.php"],150,0);
stm_aix("p5i0","p3i0",[0,"le meilleur remplaçant d'installous ","","",-1,-1,0,"installer-25pp-le-meilleur-remplacant-de-installous.php"],150,0);
stm_aix("p5i0","p3i0",[0,"Créer des sonneries iPhone MP3   ","","",-1,-1,0,"creer-des-sonneries-iphone-partir-du-mp3.php"],150,0);
stm_aix("p5i0","p3i0",[0,"Créer un compte iTunes gratuit    ","","",-1,-1,0,"creer-un-compte-gratuit-sur-itunes-store.php"],150,0);
stm_aix("p5i0","p3i0",[0,"installer apps-iPhone avec iTunes","","",-1,-1,0,"installer-une-application-iphone-depuis-iTunes-et-app-store.php"],150,0);
stm_aix("p5i0","p3i0",[0,"Application installous sur iPhone  ","","",-1,-1,0,"installez-les-applications-sur-iphone-avec-installous.php"],150,0);
stm_aix("p5i0","p3i0",[0,"iPhone jailbreak ios 5.1.1           ","","",-1,-1,0,"iphone-jailbreak-absinthe-2-0-ios-5-1-1-untethered.php"],150,0);
stm_aix("p5i0","p3i0",[0,"Télécharger apps-iPhone gratuite","","",-1,-1,0,"cydia-les-meilleures-applications-pour-iPhone-4s.php"],150,0);
stm_aix("p5i0","p3i0",[0,"Synchroniser les contacts iPhone ","","",-1,-1,0,"Comment-transferer-les-contacts-d-Android-vers-iPhone-et-vice-Versa.php"],150,0);
stm_ep();

stm_aix("p0i4","p0i3",[0," Android"],100,20);
stm_bpx("p5","p4",[]);

stm_ep();

stm_aix("p0i4","p0i3",[0,"Networking"],80,20);
stm_bpx("p5","p4",[]);

stm_ep();

stm_aix("p0i4","p0i3",[0,"Appel Gratuit","","",-1,-1,0,"appels-telephoniques-gratuits.php","_parent"],90,20);
stm_bpx("p5","p4",[]);
stm_aix("p5i0","p3i0",[0,"Envoyer SMS Gratuit","","",-1,-1,0,"sms-gratuit.php","_parent"],150,0);
stm_ep();
stm_em();
//-->
        </script>
    </div></th>
  </tr>
</table>
<table width="922" height="907" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
   <th width="160" rowspan="2" scope="col" class="arrowlistmenu">
      <h2 align="left" class="headerbar">membres</h2>
  
  
      <div class="savestatus">
  <H3 align="center"><img src="images/images544.jpg" width="40" height="40"> <em>Identification</em></H3>
  <FORM name=login action='login.php?do=check' method=post>
  <TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
    <TBODY>
      <TR>
        <TD><LABEL for=mod_login_username><strong>Nom d'utilisateur </strong></LABEL>
          <BR>
          <label>
            <input name="username" type="text" id="username" size="18">
            </label>
          <BR>
          <LABEL for=mod_login_password><strong>Mot de passe </strong></LABEL><BR>
          <label>
            <input name="password" type="password" id="password" size="18">
            </label>
          <BR>
          <INPUT class=inputbox id=mod_login_remember type=checkbox 
      alt="Remember Me" value=yes name=remember> <span class="Style24">
          <LABEL 
      for=mod_login_remember><strong>Se souvenir de moi</strong> </LABEL>
          </span><BR>
          <INPUT class=button type=submit value="Login" name=Submit>    </TD>
    </TR>
      <TR>
        <TD><A 
      href="sendpass.php" class="Style19">Mot 
          de passe oublié?</A> </TD>
    </TR>
      <TR>
        <TD><span class="Style25">Pas encore de compte? </span><A 
      href="enregistrement.php" class="Style19">Enregistrez-vous</A>    </TD>
    </TR></TBODY></TABLE>
  </FORM></DIV></DIV></DIV>
    </DIV></th>
    <th width="588" scope="col"><div align="right"><img src="images/maroc informatique.gif" width="542" height="21"></div>      
<div align="right" bgcolor="#ffffff">
      <img src="images/bann.gif">      </div>      <div align="right"><img src="images/presantation.gif" width="542" height="21"></div></th>
    <th width="160" rowspan="4" scope="col" bgcolor="#FFFFFF" bordercolor="#FFFFFF">
	<div id="pub">
  <p><div class="fb-like-box" data-href="https://www.facebook.com/" data-width="160" data-height="400" data-show-faces="true" data-stream="false" data-show-border="true" data-header="true"></div></p></div>

</th>
  </tr>
  <tr>
    <td height="97">
    <div class="fb-like" data-href="./les-sous-reseaux-subnetting-IPv4-exemples-et-exercices.php" data-send="true" data-layout="button_count" data-width="358" data-show-faces="false"></div>
   
    <p align="center" class="Style14"><a href="./les-sous-reseaux-subnetting-IPv4-exemples-et-exercices.php">Formation réseau </a></p>
    <p align="center" class="Style12"> Les sous réseaux  subnetting IPv4 exemples et exercices</p><br>    </td>
  </tr>
  <tr>
   <td height="21" class="arrowlistmenu">

<h3 align="left" class="headerbar">Annonces</h3></td>
    <td rowspan="2"><table width="583" height="77" border="0">
      <tr>
        <td width="398"><p class="Style12"><span class="Style6">Le modèle TCP/IP utilise un système particulier d'adressage qui porte le nom de la couche réseau.Le but de cet exercice est de présenter  l'adressage IPv4.<br>
          </span><span class="Style23">Objectifs pédagogiques :</span><span class="Style12"><br>
            </span><span class="Style6">À l’issue de cet exercice, vous serez en mesure d’effectuer les tâches suivantes :<br>
            <strong></strong> Déterminer le nombre de sous-réseaux nécessaires<br>
            <strong></strong> Déterminer le nombre d’hôtes nécessaires pour chaque sous-réseau<br>
            <strong></strong> Concevoir un système d'adressage  VLSM<br>
            <strong></strong> Attribuer des paires d’adresses et de masques de sous-réseau aux interfaces <br>
            <strong></strong> Examiner l’utilisation de l’espace d’adressage </span></p>
          </td>
        <td width="175"><p align="right"><img src="images/article-new_ehow_images_a07_b7_v0_rip-1-2-800x800.jpg" alt="adressage sous réseaux" width="197" height="202"></p>
          </td>
      </tr>
    </table>    
      
     </td>
  </tr>
  <tr>
     <td height="340" bgcolor="#ffffff">
	  <div class="arrowlistmenu">

<h3 class="headerbar">Categories</h3>
<ul>
<li><a href="./Le-meilleur-VPN-gratuit-pour-surfer-anonymement.php">Free VPN</a></li>
<li><a href="./creer-des-effets-de-montage-video-avec-ulead-video-studio.php">Montage Video</a></li>
<li><a href="./Comment-recevoir-une-carte-bancaire-MasterCard-gratuitement-a-la-maison.php">Compte bancaire Online</a></li>
<li><a href="./installation-XBMC-Addons-plugin-Navi-X.php">XBMC TV Online</a></li>
<li><a href="./Creation-de-site-web-dynamique-installation-CMS-en-localhost-avec-wampserver.php">Création site web CMS</a></li>
<li><a href="./CCNA-Notions-de-base-sur-les-reseaux-CISCO.php">CCNA Certification</a></li>
<li><a href="./Cours-Photoshop-creer-animation-avec-photoshop-CS4.php"> Cours Photoshop</a></li>
<li><a href="./Hacker-reseau-wifi-password.php">Wifi Password </a></li>
<li><a href="./iphone-jailbreak-ios-6.php">iPhone Jailbreak </a></li>
<li><a href="./comment-faire-un-test-adsl-maroc-telecom.php">Tester votre ADSL </a></li>
<li><a href="./Guide-des-grandes-ecoles-superieures-du-Maroc.php">Les grandes ecoles sup du maroc </a></li>
<li><a href="./configurer-la-connexion-3g-meditel-sur-iphone.php">Connexion 3G Meditel sur iPhone </a></li>
<li><a href="./Cours-informatique-reseaux.php">Cours réseau en Darija</a></li>
<li><a href="./programme-pour-decrypter-les-chaines-TV-sportives-sky-sport-et-jsc+.php">Decrypter les chaines TV </a></li>
<li><a href="./programme-et-exercices-de-musculation.php">Exercices  programme de musculation </a></li>
<li><a href="./kaspersky-antivirus-2013-activation-cle-de-365-jours.php">Activer Kaspersky antivirus 2014</a></li>
<li><a href="./Fabriquer-une-antenne-Wifi-a-la-maison-facilement-pour-optimiser-le-Wifi.php">Fabriquer une antenne Wifi</a></li>
<li><a href="./Formation-Microsoft-Windows-Server-2008-Active-Directory.php">Formation Windows Server 2008</a></li>
<li><a href="./la-technologie-voip-toip.php">La VOIP (Téléphonie sur IP)</a></li>
<li><a href="./Programmer-en-assembleur-un-PIC16F84A.php">Electronique numérique </a></li>
</ul>
</div></td>
  </tr>
  
  <tr>
    <td height="21" class="arrowlistmenu"><h3 class="headerbar">Visiteurs</h3>
    <p>
	</td>
    <td><div align="left">
</div></td>
    <td rowspan="3" bgcolor="#FFFFFF" bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="211" class="Style5"><p align="center"> 
</td>
 
    <td><p class="Style23"> <div class="roknewspager-wrapper">
		<ul class="roknewspager">
		 <li>
	        <div class="roknewspager-div">
	            	            <a href="./Formation-reseau-ccna-switching-commutation-LAN.php" class="roknewspager-title">Formation réseau à la marocaine CCNA : Switching (Commutation LAN)</a>				
	            	            <div class="introtext Style25"><span class="Style6">Switching ou bien Commutation LAN est une forme de commutation de paquets utilisé dans les réseaux locaux . Les technologies de commutation sont cruciales...</span></div>												
                                <div class="published-date">25 juillet  2013</div>	            	            
                                <a href="./Formation-reseau-ccna-switching-commutation-LAN.php" class="readon"><span>Lire plus...</span></a>	        </div>
	      </li>
		  
		<li>
	        <div class="roknewspager-div">
	            	            <a href="./cours-reseau-Le-protocole-frame-relay.php" class="roknewspager-title">Formation  réseaux à la marocaine CCNA : Le protocole Frame Relay</a>				
	            	            <div class="Style6">Le protocole Frame Relay est un protocole à commutation de paquets situé au niveau de la couche 2 du modèle OSI, utilisé pour les échanges intersites (WAN).</div>												
                                <div class="published-date">25 juillet   2013</div>	            	            
                                <a href="./cours-reseau-Le-protocole-frame-relay.php" class="readon"><span>Lire plus...</span></a>	        </div>
	      </li>
		   
		     
		   <li>
	        <div class="roknewspager-div">
	            	            <a href="./Formation-reseau-a-la-marocaine-Le-Protocole-EIGRP.php" class="roknewspager-title">Formation réseau à la marocaine CCNA : Le Protocole EIGRP</a>				
	            	            <div class="introtext Style25"><span class="Style6">EIGRP Enhanced Interior Gateway Routing Protocol est un protocole de routage développé par Cisco dans le but d’améliorer le protocole IGRP et  le rendre plus stable.</span></div>												
                                <div class="published-date">24 juillet   2013</div>	            	            
                                <a href="./Formation-reseau-a-la-marocaine-Le-Protocole-EIGRP.php" class="readon"><span>Lire plus...</span></a>	        </div>
	      </li>


		  
		   <li>
	        <div class="roknewspager-div">
	            	            <a href="./la-technologie-voip-toip.php" class="roknewspager-title">Formation réseaux à la marocaine La  VOIP et TOIP (Téléphonie sur IP)</a>				
	            	            <div class="Style6">La VOIP est une technologie utilisée pour transporter de la voix sur un réseau informatique de type IP (Réseau Internet et la plupart des réseaux locaux).</div>												
                                <div class="published-date">24 juillet 2013</div>	            	            
                                <a href="./la-technologie-voip-toip.php" class="readon"><span>Lire plus...</span></a>	        </div>
	      </li>
		   <li>
	        <div class="roknewspager-div">
	            	            <a href="./Programmer-un-jeu-de-lumiere-et-un-feu-rouge-en-assembleur-pic-16F84-sous-MikroC-et-ISIS.php" class="roknewspager-title">Programmer un jeu de lumière et un feu rouge  Pic 16F84 en MikroC et ISIS</a>				
	            	            <div class="Style6">Le but de ce cours est de créer un jeu de lumiere pic 16F84 en assembleur sous MikroC et ISIS ensuite nous devons réaliser un feu tricolore.</div>												
                                <div class="published-date">23 juillet 2013</div>	            	            
                                <a href="./Programmer-un-jeu-de-lumiere-et-un-feu-rouge-en-assembleur-pic-16F84-sous-MikroC-et-ISIS.php" class="readon"><span>Lire plus...</span></a>	        </div>
	      </li>
		  <li>
	        <div class="roknewspager-div">
	            	            <a href="./programmer-un-afficheur-7-segments-avec-microcontroleur-pic-16f84-en-MiKroC-et-ISIS.php" class="roknewspager-title">Programmer des afficheur 7 segments pic 16F84 en MiKroC (le multiplexage)</a>				
	            	            <div class="Style6">Le but de ce cours est de programmer une cible (un affichage 7 segments) mais surtout de comprendre comment convertir une donnée binaire en donnée décimale.</div>												
                                <div class="published-date">23 juillet     2013</div>	            	            
                                <a href="./programmer-un-afficheur-7-segments-avec-microcontroleur-pic-16f84-en-MiKroC-et-ISIS.php" class="readon"><span>Lire plus...</span></a>	        </div>
	      </li>
		   
		     
		   <li>
	        <div class="roknewspager-div">
	            	            <a href="./Programmer-un-microcontroleur-pic-16f84-en-Entree-avec-MiKroC-et-ISIS.php" class="roknewspager-title">Programmer un microcontrôleur PIC 16F84 en Entée avec MiKroC et ISIS</a>				
	            	            <div class="Style6">Nous allons revenir aujourd'hui plus en détail sur les ports d'Entrées-sorties ainsi que leur mode de configuration.</div>												
                                <div class="published-date">22 juillet 2013</div>	            	            
                                <a href="./Programmer-un-microcontroleur-pic-16f84-en-Entree-avec-MiKroC-et-ISIS.php" class="readon"><span>Lire plus...</span></a>	        </div>
	      </li>
		<li>
	        <div class="roknewspager-div">
	            	            <a href="./afficheur-LCD-avec-microcontroleur-PIC-16F84.php" class="roknewspager-title">Programmer un afficheur LCD avec un PIC 16F84 | Maroc Electronic </a>				
	            	            <div class="Style6">Le but principal de ce projet est d’afficher sur l’écran LCD des valeurs données par différents capteurs.</div>												
                                <div class="published-date">22 juillet   2013</div>	            	            
                                <a href="./afficheur-LCD-avec-microcontroleur-PIC-16F84.php" class="readon"><span>Lire plus...</span></a>	        </div>
	      </li>
								<li>
	        <div class="roknewspager-div">
	            	            <a href="./la-virtualisation-et-le-cloud-computing-formation-gratuite.php" class="roknewspager-title">Enfin au Maroc La virtualisation des serveurs  (Cloud Computing)</a>				
	            	            <div class="Style6">Voici la premiére formation gratuite au Maroc en virtualisation de serveurs basée sur vSphere de VMware. Cette formation vous permettra d’acquérir des compétences</div>												
                                <div class="published-date">21 juillet   2013</div>	            	            
                                <a href="./la-virtualisation-et-le-cloud-computing-formation-gratuite.php" class="readon"><span>Lire plus...</span></a>	        </div>
	      </li></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#10315A"><div align="right" class="Style6">
  <div align="right"><font color="#FFFFFF" face="Verdana"></font>
    <div align="right"><font color="#FFFFFF" face="Verdana">Copyright - 2014  <a href="http://saidpark.free.fr"  style="color:#cccccc";><strong>saidpark</strong></a>  Tous droits réservés.
    </font></div>
  </div>
    </div></td>
  </tr>
</table>
<p align="center"><img src="images/bande_partenaires[1].gif" width="612" height="22"></p>

<p>&nbsp;</p>
</body>

</html>