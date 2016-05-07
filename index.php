<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">      
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="chooseevent.php" class="breadcrumb">Event</a>
        <a href="index.php" class="breadcrumb">Registration</a>
      </div>
    </div>
  </nav>
  <div class="container">
  	<div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="Nama" type="text" class="validate" required>                
          <label for="Nama">Nama</label>   
        </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">person</i>
        <input id="NIM" type="text" class="validate">                
        <label for="NIM">NIM</label>   
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">school</i>
        <input id="Jurusan" type="text" class="validate">                
        <label for="Jurusan">Jurusan</label>   
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">local_phone</i>
        <input id="Phone" type="text" class="validate">                
        <label for="Phone">Phone</label>   
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
        <input id="Mail" type="text" class="validate">                
        <label for="Mail">E-mail</label>   
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">chat</i>
        <input id="Line" type="text" class="validate">                
        <label for="Line">Line</label>   
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
              <!-- jangan lupa a nya dimatikan onclicknya dan dirubah seperti yang diinginkan-->
        <button class="btn waves-effect waves-light" type="submit" name="action" onclick="window.location.href='verifikasi.php';">Submit
          <i class="material-icons right">send</i>
        </button>
      </div>
    </div>
  </div>
</body>
</html>