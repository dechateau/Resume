<html>

<head>
<title>Max in Australien, Eingabe</title>

<style type="text/css">
   body,td {font-family:Verdana; font-size:10pt;
            background-color:#ff9900; color:#00008b}
   .li     {font-size:8pt}
</style>

<?php
  if (isset($_POST["gesendet"]))
  {
    $con = mysqli_connect("sql266.your-server.de","lebenslauf_5", "shanghai1", "lebenslauf_db1");
    mysqli_select_db($con, "blog");
    
    /* Einfügen Text */
    if($_POST["art"] == 0)
      mysqli_query($con, "insert into blogdaten (art, text)"
        . " values (0, '" . $_POST["text"] . "')");

    /* Einfügen Bild */
    else
    {
      /* Neuer Name */
      $fn = $_FILES["upfile"]["name"];
      $fn_teile = explode(".", $fn);
      $fn_endung = $fn_teile[count($fn_teile) - 1];
      if(strtolower($fn_endung) == "jpg")
      {
        $fn = "blog_" . date("YmdHis") . "." . $fn_endung;

        /* In DB einfügen, Bild kopieren */
        copy($_FILES["upfile"]["tmp_name"], $fn);
        mysqli_query($con, "insert into blogdaten (art, text)"
          . " values (1, '$fn')");

        /* Original-Bildgröße ermitteln */
        $info = getimagesize($fn);
        $width_alt = $info[0];
        $height_alt = $info[1];

        /* Neue Bildgröße festlegen */
        if($width_alt > $height_alt)
        {
          $width_neu = 320;
          $height_neu = ceil($height_alt *
            $width_neu / $width_alt);
        }
        else
        {
          $height_neu = 240;
          $width_neu = ceil($width_alt *
            $height_neu / $height_alt);
        }

        /* Altes und neues Bild-Objekt erzeugen */
        $im_alt = imagecreatefromjpeg($fn);
        $im_neu = imagecreatetruecolor(
          $width_neu, $height_neu);

        /* Bild in neue Größe kopieren, speichern */
        imagecopyresampled($im_neu, $im_alt,
          0, 0, 0, 0, $width_neu, $height_neu,
          $width_alt, $height_alt);
        imagejpeg($im_neu, $fn);

        /* Bild-Objekte löschen */
        imagedestroy($im_alt);
        imagedestroy($im_neu);
      }
      else
        echo "<p><font color='#ff0000'>Bild wurde nicht hochgeladen, muss vom Typ JPG sein!</font></p>";

      mysqli_close($con);
    }
  }
?>

</head>

<body>
<p align="center"><b>Max in Australien, Eingabe</b></p>

<form action="blog_eingabe.php" method="post">
   <input type="hidden" name="art" value="0" />
   <p>Text eingeben und absenden (max. 1000 Zeichen):</p>
   <p><textarea name="text" rows="5"
      cols="80"></textarea></p>
   <p><input type="submit" name="gesendet"
       value="Senden"/>
   <input type="reset" value="Leeren"/></p>
</form>

<p><b>oder</b></p>

<form enctype="multipart/form-data"
      action="blog_eingabe.php" method="post">
   <input type="hidden" name="art" value="1" />
   <p>Bild auswählen und absenden:</p>
   <p><input name="upfile" type="file" /></p>
   <p><input type="submit" name="gesendet"
       value="Senden"/>
   <input type="reset" value="Leeren"/></p>
</form>

</body>
</html>
