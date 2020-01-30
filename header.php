<!-- Header Contacts & Number -->
<div id="header">
<div class="row">
  <div class="col-sm-6 time">
  <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</head>

<body onload="startTime()">

<div id="txt"></div>

  </div>
  <div class="col-sm-6 d-flex justify-content-end contact">
    <p class="pr-5"><i class='fas fa-phone-alt'> </i> +91-9897121312</p>
    <p class=""> <i class="fas fa-envelope-open"></i> abcdefgh@gmail.com</p>
    </div>

</div>
</div>

<!-- Logo & Navbar -->
<div id="navbar" class="a">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark b">
  <img src="image/logo.png" alt="" class="logo mr-auto">

  <div id="nav" class="float-">
  <ul class="navbar-nav navbar-nav">
    <li class="nav-item">
    <a class="nav-link" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><i class="fab fa-product-hunt"></i> 
        Products
        </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">product a</a>
        <a class="dropdown-item" href="#">product b</a>
        <a class="dropdown-item" href="#">product c</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="far fa-address-card"></i> About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-fw fa-envelope"></i> Contacts</a>
    </li>
    
  </ul>
  </div>
</nav>
</div>


