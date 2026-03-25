<?php
$numero = 5;
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <title>Taula del <?= $numero ?></title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 40px;
    }

    table {
      margin: 0 auto;
      border-collapse: collapse;
      width: 300px;
    }

    td {
      padding: 10px 20px;
      border: 1px solid #ccc;
    }

    .parell {
      background-color: #e0e0e0;
    }

    .senar {
      background-color: #ffffff;
    }

    .error {
      color: red;
      font-size: 20px;
    }
  </style>
</head>
<body>

  <h1>Taula del stanis | <?= $numero ?></h1>

  <?php if ($numero < 1 || $numero > 12): ?>

    <p class="error">Numero invalid nomes entre 1 i 12</p>

  <?php else: ?>

    <table>
      <?php for ($i = 1; $i <= 10; $i++): ?>

        <?php if ($i % 2 == 0): ?>
          <tr class="parell">
        <?php else: ?>
          <tr class="senar">
        <?php endif; ?>

          <td><?= $numero ?> x <?= $i ?></td>
          <td><?= $numero * $i ?></td>
        </tr>

      <?php endfor; ?>
    </table>

  <?php endif; ?>

</body>
</html>