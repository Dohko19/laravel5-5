<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/images/ic_svl_iconapp.png" />
    {{ Html::style('/css/bootstrap.min.css') }}
    {{ Html::style('/css/app.css') }}
    {{ Html::style('/css/jquery.dataTables.css') }}
    {{ Html::style('/css/zoom.css') }}
    {{ Html::style('/css/jquery.dataTables.min.css') }}
    {{ Html::style('/css/all.css') }}
    {{ Html::style('/css/buttons.dataTables.min.css') }}
    {{ Html::style('/css/dropzone.min.css') }}

    <style>
      .fixed-panel {
height: 100px;
  overflow-y: scroll;
          }
    /*input:valid, textarea:valid {
    background:green;
      font-size: 1.1em;
        background-color: white;
        border: 1px solid #1ced22;
        border-radius: 1px;*/
        /*padding: 8px;*/
       /* width: 400px;*/
        /*box-shadow: 0 0 1px #4f9;*/

    /*}*/
    /*input:invalid, textarea:invalid {*/
      /*background:red;*/
      /*font-size: 1.1em;
        background-color: white;
        border: 1px solid red;
        border-radius: 1px;*/
      /*padding: 8px;*/
       /* width: 400px;*/
        /*box-shadow: 0 0 1px #4f9;*/

    /*}*/
    .flotante {
        display:scroll;
            position:fixed;
            bottom:300px;
            right:0px;
    }
    /*Modal*/
    .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
    </style>
</head>
  <title>Encuesta de Catel</title>

<body>
  <div class="container">
  @yield('content')
  <hr>
  </div>
     <footer>Copyright© {{ date('Y') }} Trejo Rojas Daniel Arturo - <a onclick="alert('Autor: Trejo Rojas Daniel Arturo para solexvintel, Esto es una BETA - 0.2')" href="#">Beta v0.2</a>
     </footer>
      <script src="//code.jquery.com/jquery.js"></script>
      
</script>
</body>



</html>