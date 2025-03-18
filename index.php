
<?php require_once("utils/functions.php") ?>
<?php require_once("templates/header.php") ?>

<div class="container">
  <div id="ad">
    <div class="ad">
      Тут могла бы быть реклама
      <button>закрыть</button>
    </div>
  </div>
  <button onclick="clearCookie()">очистить куки</button>
</div>
<div class="cards">
  <div class="row">
    <?php print_recipes($recipes) ?>;
  </div>
</div>
<a href="logout.php">logout</a>
<?php require_once("templates/footer.php") ?>