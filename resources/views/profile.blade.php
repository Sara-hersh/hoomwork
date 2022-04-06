<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  nav {
    height: 100px;
    background-color: pink;
  }
  
  img{
    width: 300px;
    height: 300px;
  }
  h2{
    background-color:pink;
  }

  </style>
</head>
<body>



<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home">PREVIUS </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile">ABOUT ME</a>
      </li>
      
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <img src="image./2.jpg" alt=""> <br> <br>
      <h2>Name: <th>Sara Hersh </th></h2>
      <h2>Town: <th>Sulaymanyah </th></h2>
      <h2>Year: <th>1997 </th></h2>
      <h2>Department: <th>IT </th></h2>
      <h2>Stage: <th>3 </th></h2>
    </div>
   
  </div>
</div>


</body>
</html>
