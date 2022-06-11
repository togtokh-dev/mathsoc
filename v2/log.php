<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>log</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  </head>
  <style media="screen">
  #loadhalaman {
position: fixed;
opacity: 0.93;
top: 0;
left: 0;
background-color: #000;
z-index: 9999;
text-align: center;
width: 100%;
height: 100%;
padding-top: 20%;
color: #000;
}

.loadball {
background-color: transparent;
border: 5px solid #00a3ff;
border-right: 5px solid transparent;
border-left: 5px solid transparent;
border-radius: 50px;
box-shadow: 0 0 35px #00a3ff;
width: 50px;
height: 50px;
margin: 0 auto;
-moz-animation: spinPulse 1s infinite ease-in-out;
-webkit-animation: spinPulse 1s infinite linear;
}

.loadball-2 {
background-color: transparent;
border: 5px solid #00a3ff;
border-left: 5px solid transparent;
border-right: 5px solid transparent;
border-radius: 50px;
box-shadow: 0 0 15px #00a3ff;
width: 30px;
height: 30px;
margin: 0 auto;
position: relative;
top: -50px;
-moz-animation: spinoffPulse 1s infinite linear;
-webkit-animation: spinoffPulse 1s infinite linear;
}

@-moz-keyframes spinPulse {
0% {
  -moz-transform: rotate(160deg);
  opacity: 0;
  box-shadow: 0 0 1px#00a3ff;
}
50% {
  -moz-transform: rotate(145deg);
  opacity: 1;
}
100% {
  -moz-transform: rotate(-320deg);
  opacity: 0;
}
;
}

@-moz-keyframes spinoffPulse {
0% {
  -moz-transform: rotate(0deg);
}
100% {
  -moz-transform: rotate(360deg);
}
;
}

@-webkit-keyframes spinPulse {
0% {
  -webkit-transform: rotate(160deg);
  opacity: 0;
  box-shadow: 0 0 1px#00a3ff;
}
50% {
  -webkit-transform: rotate(145deg);
  opacity: 1;
}
100% {
  -webkit-transform: rotate(-320deg);
  opacity: 0;
}
;
}

@-webkit-keyframes spinoffPulse {
0% {
  -webkit-transform: rotate(0deg);
}
100% {
  -webkit-transform: rotate(360deg);
}
;
}
  </style>
  <body>
    <div id='loadhalaman'>
      <div class='loadball'></div>
      <div class='loadball-2'></div>
    </div>
  </body>
  <script type="text/javascript">
  $.getJSON( "api/now.php", function( data ) {
    console.log(data);
    var items = [];
  $.each( data, function( key, val ) {
    if(key==='bio'){
    }else {
        items.push( "<li id='" + key + "'>" + val + "</li>" );
    }

  });

  $( "<ul/>", {
    "class": "my-new-list",
    html: items.join( "" )
  }).appendTo( "body" );
  });
  
  </script>
</html>
