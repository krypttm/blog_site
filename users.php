<?php
  if($_COOKIE['login'] == '') {
    header('Location: /reg.php');
    exit();
  }
  //'<button style= "background:Lavender" onclick="deleteUser(".$row['id'].")">Удалить</button>'.'</div>'.'<hr>'
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <?php
    $website_title = 'Пользователи';
    require 'blocks/head.php';
  ?>
</head>
<body>
  <?php require 'blocks/header.php'; ?>

  <main class="container mt-5">
    <div class="row">
      <div class="col-md-8 mb-3">
        <h4>Список пользователей</h4>
        <?php
        require_once 'mysql_connect.php';

        $sql = 'SELECT * FROM `users`';
        $query = $pdo->prepare($sql);
        $query->execute();
        $user = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($user as $el)
           echo '<div class="alert alert-info">'.$el['name'].$el['login'].'</div>';
    ?>
      </div>

      <?php require 'blocks/aside.php'; ?>
    </div>
  </main>
  <?php require 'blocks/footer.php'; ?>
</body>
</html>

