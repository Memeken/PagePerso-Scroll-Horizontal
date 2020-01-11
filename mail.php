<?php
if(isset($_POST['mailform'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
        $nom=$_POST['nom'];
        $mail=$_POST['mail'];
        $corps=$_POST['message'];
      $header = 'MIME-Version:1.0\r\n';
      $header.='From:CoraliePage.com"<damerycoralie@gmail.com>'."\n";
      $header.='Content-Type:text/html;charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding:8bit';
      $message='
        <html>
            <body>
                <div align="center">
                <br />
                <u>Nom de l\'expéditeur :</u>'.$nom.'<br />
                <u>Mail de l\'expéditeur :</u>'.$mail.'<br />
                <br />
                '.nl2br($corps).'
                <br />
                </div>
            </body>
        </html>
      ';
      mail("coralie2319@hotmail.fr", "Contact du site CV", $message, $header);
        $msg="Votre message a bien été envoyé !";
        
   } else {
        $msg="Tous les champs doivent être complétés !";
        
   }
}
?>