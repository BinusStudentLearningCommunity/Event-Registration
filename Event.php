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
      <ul class="right hide-on-med-and-down">
        <li><a href="#!">Add New Event</a></li>
        <li><a href="#!">View Registration Event</a></li>
    </ul>
  </nav>

	 <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">event</i>
        <input id="Nama" type="text" class="validate" required>                
        <label for="Nama">Nama Event</label>   
      </div>
  </div>

  <div class="row">
        <div class="input-field col s12">
          <div class="file-field input-field">
            <div class="btn">
              <span>File</span>
              <input type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Poster">
            </div>
          </div>
        </div>
  </div>

  <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">date_range</i>
        <input type="date" class="datepicker">            
      </div>
  </div>

  <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">date_range</i>
        <input type="date" class="datepicker">           
      </div>
  </div>

  <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">attach_money</i>
        <input id="Nama" type="text" class="validate" required>                
        <label for="Nama">Harga</label>   
      </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <!-- jangan lupa a nya dimatikan onclicknya dan dirubah seperti yang diinginkan-->
        <button class="btn waves-effect waves-light" type="submit" name="action" >Submit
          <i class="material-icons right">send</i>
        </button>
      
    </div>
  </div>

</body>
</html>
