<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Quizzy</title>
</head>

<body>
  <?php require('navbar/navbar.inc.php') ?>

  <form action="process-form.php" method="post">

    <p>
      <label for="inputName">Name:<sup>*</sup></label>
      <input type="text" name="nome" id="inputName">
    </p>

    <p>
      <label for="inputEmail">Email:<sup>*</sup></label>
      <input type="text" name="email" id="inputEmail">
    </p>

    <p>
      <label for="inputSubject">Subject:</label>
      <input type="text" name="subject" id="inputSubject">
    </p>

    <p>
      <label for="inputComment">Message:<sup>*</sup></label>
      <textarea name="message" id="inputComment" rows="5" cols="30"></textarea>
    </p>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">

  </form>
</body>

</html>