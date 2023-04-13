<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Quizzy</title>
</head>

<body>
  <?php require('navbar/navbar.inc.php') ?>

  <div class="d-flex">

    <div class="card" style="width: 18rem;">
      <!-- <img src="..." class="card-img-top" alt="..."> -->
      <div class="card-body">
        <h5 class="card-title">Quiz 1</h5>
        <p class="card-text">Details</p>
        <a href="quiz?id=1" class="stretched-link"></a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Quiz 2</h5>
        <p class="card-text">Details</p>
        <a href="quiz?id=2" class="stretched-link"></a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Quiz 3</h5>
        <p class="card-text">Details</p>
        <a href="quiz?id=3" class="stretched-link"></a>
      </div>
    </div>

  </div>

</body>

</html>