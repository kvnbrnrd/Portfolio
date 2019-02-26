<?php 

 if (isset($_POST['message'])) {
    $email_destinataire = "kevin.be@codeur.online";
    $sujet = htmlspecialchars($_POST['sujet']);


     // Transforme les valeurs Post en variables, évite la faille XSS avec htmlspecialchars
     $nom = htmlspecialchars($_POST['nom']);
     $email = htmlspecialchars($_POST['email']);
     $contenu = htmlspecialchars($_POST['message']);

    


    if(isset($nom, $email, $sujet, $contenu)) {

        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $email)) // On filtre les serveurs qui rencontrent des bogues.
        {
            $passage_ligne = "\r\n";
        }

        else
        {
            $passage_ligne = "\n";
        };
    }

// Déclaration des messages au format texte et au format HTML.

$message_txt = "Kevin Bernard | Portfolio";

$message_html = '<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><title></title><!--[if !mso]><!-- --><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style type="text/css">#outlook a { padding:0; }
.ReadMsgBody { width:100%; }
.ExternalClass { width:100%; }
.ExternalClass * { line-height:100%; }
body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
p { display:block;margin:13px 0; }</style><!--[if !mso]><!--><style type="text/css">@media only screen and (max-width:480px) {
  @-ms-viewport { width:320px; }
  @viewport { width:320px; }
}</style><!--<![endif]--><!--[if mso]>
<xml>
<o:OfficeDocumentSettings>
<o:AllowPNG/>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]--><!--[if lte mso 11]>
<style type="text/css">
.outlook-group-fix { width:100% !important; }
</style>
<![endif]--><!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,700" rel="stylesheet" type="text/css"><style type="text/css">@import url(https://fonts.googleapis.com/css?family=Lato:300,400,500,700);</style><!--<![endif]--><style type="text/css">@media only screen and (min-width:480px) {
.mj-column-per-33 { width:33.333333333333336% !important; max-width: 33.333333333333336%; }
.mj-column-per-66 { width:66% !important; max-width: 66%; }
.mj-column-per-100 { width:100% !important; max-width: 100%; }
}</style><style type="text/css">@media only screen and (max-width:480px) {
table.full-width-mobile { width: 100% !important; }
td.full-width-mobile { width: auto !important; }
}</style></head><body style="background-color:#e0f2ff;"><div style="background-color:#e0f2ff;"><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#2a5cab;background-color:#2a5cab;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#2a5cab;background-color:#2a5cab;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:10px 0;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:198px;" ><![endif]--><div class="mj-column-per-33 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 0;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr><td style="width:150px;"><img alt="logo" height="auto" src="Assets/Images/logoVk.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="150"></td></tr></tbody></table></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td><td class="" style="vertical-align:top;width:396px;" ><![endif]--><div class="mj-column-per-66 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="left" style="font-size:0px;padding:18px 0px;word-break:break-word;"><div style="font-family:Lato, Helvetica, Arial, sans-serif;font-size:20px;line-height:1;text-align:left;color:#ffffff;">Kevin Bernard | Portfolio</div></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:200px;" ><![endif]--><div class="mj-column-per-33 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="center" vertical-align="top" style="font-size:0px;padding:0px 25px;word-break:break-word;"><div style="font-family:Lato, Helvetica, Arial, sans-serif;font-size:20px;line-height:1;text-align:center;color:#EC652D;"><strong>Nom</strong><br><p style="font-size: 15px;color:#000000;">'.$nom.'</p></div></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td><td class="" style="vertical-align:top;width:200px;" ><![endif]--><div class="mj-column-per-33 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="center" vertical-align="top" style="font-size:0px;padding:0px 25px;word-break:break-word;"><div style="font-family:Lato, Helvetica, Arial, sans-serif;font-size:20px;line-height:1;text-align:center;color:#EC652D;"><strong>De</strong><br><p style="font-size: 15px;color:#000000;">'.$email.'</p></div></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td><td class="" style="vertical-align:top;width:200px;" ><![endif]--><div class="mj-column-per-33 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="center" vertical-align="top" style="font-size:0px;padding:0px 25px;word-break:break-word;"><div style="font-family:Lato, Helvetica, Arial, sans-serif;font-size:20px;line-height:1;text-align:center;color:#EC652D;"><strong>Sujet</strong><br><p style="font-size: 15px;color:#000000;">'.$sujet.'</p></div></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:0px;padding-top:20px;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="center" style="font-size:0px;padding:0px 30px 30px 30px;word-break:break-word;"><div style="font-family:Lato, Helvetica, Arial, sans-serif;font-size:18px;line-height:1;text-align:center;color:#000000;">'.$contenu.'</div></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></div></body></html>';



// =====Création de la boundary
$boundary = "-----=".md5(rand());

//=====Création du header de l'e-mail.
$header = "From: ".$email.$passage_ligne;
$header.= "Reply-to: ".$email_destinataire.$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;


//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;

$message.= $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format HTML

$message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

//=====Envoi de l'e-mail.
$envoi = mail($email_destinataire,$sujet,$message,$header);

       if($envoi){
           echo "Votre message a été envoyé.";
       }
        else {
            echo "Suite à une erreur, votre message n'a pas été envoyé.";
        }

}

elseif (isset($_POST['messageEn'])) {
    $email_destinataireEn = "kevin.be@codeur.online";
    $sujetEn = htmlspecialchars($_POST['sujetEn']);


     // Transforme les valeurs Post en variables, évite la faille XSS avec htmlspecialchars
     $nomEn = htmlspecialchars($_POST['nomEn']);
     $emailEn = htmlspecialchars($_POST['emailEn']);
     $contenuEn = htmlspecialchars($_POST['messageEn']);

    


    if(isset($nomEn, $emailEn, $sujetEn, $contenuEn)) {

        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $emailEn)) // On filtre les serveurs qui rencontrent des bogues.
        {
            $passage_ligneEn = "\r\n";
        }

        else
        {
            $passage_ligneEn = "\n";
        };
    }

// Déclaration des messages au format texte et au format HTML.

$message_txtEn = "Kevin Bernard | Portfolio";

$message_htmlEn = '<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><title></title><!--[if !mso]><!-- --><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style type="text/css">#outlook a { padding:0; }
.ReadMsgBody { width:100%; }
.ExternalClass { width:100%; }
.ExternalClass * { line-height:100%; }
body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
p { display:block;margin:13px 0; }</style><!--[if !mso]><!--><style type="text/css">@media only screen and (max-width:480px) {
  @-ms-viewport { width:320px; }
  @viewport { width:320px; }
}</style><!--<![endif]--><!--[if mso]>
<xml>
<o:OfficeDocumentSettings>
<o:AllowPNG/>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]--><!--[if lte mso 11]>
<style type="text/css">
.outlook-group-fix { width:100% !important; }
</style>
<![endif]--><!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,700" rel="stylesheet" type="text/css"><style type="text/css">@import url(https://fonts.googleapis.com/css?family=Lato:300,400,500,700);</style><!--<![endif]--><style type="text/css">@media only screen and (min-width:480px) {
.mj-column-per-33 { width:33.333333333333336% !important; max-width: 33.333333333333336%; }
.mj-column-per-66 { width:66% !important; max-width: 66%; }
.mj-column-per-100 { width:100% !important; max-width: 100%; }
}</style><style type="text/css">@media only screen and (max-width:480px) {
table.full-width-mobile { width: 100% !important; }
td.full-width-mobile { width: auto !important; }
}</style></head><body style="background-color:#e0f2ff;"><div style="background-color:#e0f2ff;"><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#2a5cab;background-color:#2a5cab;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#2a5cab;background-color:#2a5cab;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:10px 0;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:198px;" ><![endif]--><div class="mj-column-per-33 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 0;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr><td style="width:150px;"><img alt="logo" height="auto" src="Assets/Images/logoVk.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="150"></td></tr></tbody></table></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td><td class="" style="vertical-align:top;width:396px;" ><![endif]--><div class="mj-column-per-66 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="left" style="font-size:0px;padding:18px 0px;word-break:break-word;"><div style="font-family:Lato, Helvetica, Arial, sans-serif;font-size:20px;line-height:1;text-align:left;color:#ffffff;">Kevin Bernard | Portfolio</div></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:200px;" ><![endif]--><div class="mj-column-per-33 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="center" vertical-align="top" style="font-size:0px;padding:0px 25px;word-break:break-word;"><div style="font-family:Lato, Helvetica, Arial, sans-serif;font-size:20px;line-height:1;text-align:center;color:#EC652D;"><strong>Name</strong><br><p style="font-size: 15px;color:#000000;">'.$nomEn.'</p></div></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td><td class="" style="vertical-align:top;width:200px;" ><![endif]--><div class="mj-column-per-33 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="center" vertical-align="top" style="font-size:0px;padding:0px 25px;word-break:break-word;"><div style="font-family:Lato, Helvetica, Arial, sans-serif;font-size:20px;line-height:1;text-align:center;color:#EC652D;"><strong>From</strong><br><p style="font-size: 15px;color:#000000;">'.$emailEn.'</p></div></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td><td class="" style="vertical-align:top;width:200px;" ><![endif]--><div class="mj-column-per-33 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="center" vertical-align="top" style="font-size:0px;padding:0px 25px;word-break:break-word;"><div style="font-family:Lato, Helvetica, Arial, sans-serif;font-size:20px;line-height:1;text-align:center;color:#EC652D;"><strong>Subject</strong><br><p style="font-size: 15px;color:#000000;">'.$sujetEn.'</p></div></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:0px;padding-top:20px;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="center" style="font-size:0px;padding:0px 30px 30px 30px;word-break:break-word;"><div style="font-family:Lato, Helvetica, Arial, sans-serif;font-size:18px;line-height:1;text-align:center;color:#000000;">'.$contenuEn.'</div></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></div></body></html>';



// =====Création de la boundary
$boundaryEn = "-----=".md5(rand());

//=====Création du header de l'e-mail.
$headerEn = "From: ".$emailEn.$passage_ligneEn;
$headerEn.= "Reply-to: ".$email_destinataireEn.$passage_ligneEn;
$headerEn.= "MIME-Version: 1.0".$passage_ligneEn;
$headerEn.= "Content-Type: multipart/alternative;".$passage_ligneEn." boundary=\"$boundaryEn\"".$passage_ligneEn;


//=====Création du message.
$messageEn = $passage_ligneEn."--".$boundaryEn.$passage_ligneEn;

//=====Ajout du message au format texte.
$messageEn.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligneEn;
$messageEn.= "Content-Transfer-Encoding: 8bit".$passage_ligneEn;
$messageEn.= $passage_ligneEn.$message_txtEn.$passage_ligneEn;

$messageEn.= $passage_ligneEn."--".$boundaryEn.$passage_ligneEn;

//=====Ajout du message au format HTML

$messageEn.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligneEn;
$messageEn.= "Content-Transfer-Encoding: 8bit".$passage_ligneEn;
$messageEn.= $passage_ligneEn.$message_htmlEn.$passage_ligneEn;

//==========

$messageEn.= $passage_ligneEn."--".$boundaryEn."--".$passage_ligneEn;
$messageEn.= $passage_ligneEn."--".$boundaryEn."--".$passage_ligneEn;

//=====Envoi de l'e-mail.
$envoiEn = mail($email_destinataireEn,$sujetEn,$messageEn,$headerEn);

       if($envoiEn){
           echo "Your message has been sent.";
       }
        else {
            echo "Due to an error, your message has not been sent.";
        }

}




