<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="true.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="validation">

      <div class="popup" id="popup">
        <br>
        <br>
        <h3>Chosse Date and Class</h3 >
        <br>
        <!-- <p>Click OK to continue</p>
        <a href="subjects.php">

    <button class="true">OK</button>
  </a> -->
  <form class="" action="take.php" method="post">
    <label for="date">Select date </label>
    <input type="date" name="date" value=""><br>
    <br>
    <label for="hour">Select Class</label>
    <select class="" name="hour">
      <option value="1">Class 1</option>
      <option value="2">Class 2</option>
      <option value="3">Class 3</option>
    </select>
    <br>
    <br>
    <input class="btn-secondary" type="submit" name="submit" value="   OK   ">
  </form>
      </div>
    </div>
