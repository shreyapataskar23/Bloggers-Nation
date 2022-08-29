<?php
include('dbcon.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register as a writer</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="mystyle.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html"><b>Blogger's Paradise</a></b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <!--form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form-->
    </div>
  </div>
</nav>
<center><h3 class="display-5">Blogger's Paradise</h3>
  <div class="container-fluid">
  <form method="POST">
    <br>
  <h3>  <label>Register as a writer</label></h3>
    <br>
  <table>
<tr>
  <td>Your full name: </td>
  <td><input type="text" name="name"></td>
</tr>
<tr>
  <td>Email ID: </td>
  <td><input type="text" name="email"></td>
</tr>
<tr>
  <td>Address: </td>
  <td><input type="text" name="address"></td>
</tr>
<tr>
  <td>Phone: </td>
  <td><input type="text" name="phone"></td>
</tr>
<tr>
  <td>Password: </td>
  <td><input type="password" name="password"></td>
  <br>
</tr>
<tr>
  <center><td><input type="submit" name="submit" value="Submit"></td></center>
</tr>
</table>
  </form>
</div>
</center>
  </body>
</html>
