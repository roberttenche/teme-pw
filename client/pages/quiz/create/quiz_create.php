<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Quizzy</title>
</head>

<body>
  <?php require('navbar/navbar.inc.php') ?>

  <form style="width: 30vh;" action="/api/quiz.php" method="post">

    <div class="form-group">
      <input class="form-control" type="text" name="title" placeholder="Quiz Title">
      <input class="form-control" type="text" name="descr" placeholder="Quiz Description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

</body>

</html>