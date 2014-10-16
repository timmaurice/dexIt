<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>dexIt</title>
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <h1>dexIt</h1>
  <ul>
    <?php
      // print_r(scandir('./'));
      $allfiles = scandir('./');
      foreach ($allfiles as $datei) {
        if (strpos($datei['filename'], ".") === 0) continue;
        $file = pathinfo($datei);
        echo "<li><a href=\"${file['dirname']}/${file['basename']}\">${file['filename']}</a></li>";
      }
    ?>
  </ul>
</body>
</html>
