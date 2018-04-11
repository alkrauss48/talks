<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Game Development in Plain JavaScript</title>
    <style>
      * { padding: 0; margin: 0; }
      canvas { background: #ccc; display: block; margin: 0 auto; }
    </style>
  </head>
  <body>

    <canvas id="myCanvas" width="480" height="320"></canvas>
    <script src="/code/app-<?php echo substr($_SERVER['SERVER_PORT'], -1); ?>.js"></script>
  </body>
</html>
