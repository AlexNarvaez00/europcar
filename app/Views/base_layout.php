<!DOCTYPE html>
<html lang="es">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <?= $this->renderSection('main') ?>
  <!-- BEGIN SCRIPTING -->
  <?php if (ENVIRONMENT !== 'production') : ?>
    <script type="module" src="http://localhost:5173/@vite/client"></script>
  <?php else : ?>
  <?php endif; ?>
  <!-- ENDING SCRIPTING -->
</body>

</html>
