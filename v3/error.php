<!DOCTYPE html>
<?php if(isset($_GET['code'])){
  $code=$_GET['code'];
}else {
  $code='404';
} ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $code; ?></title>
    <link rel="shortcut icon" href="../assets/media/logos/favicon.png" />
    <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Fira+Mono:400');

    body{
      display: flex;
      width: 100vw;
      height: 100vh;
      align-items: center;
      justify-content: center;
      margin: 0;
      background: #131313;
      color: #fff;
      font-size: 96px;
      font-family: 'Fira Mono', monospace;
      letter-spacing: -7px;
    }

    div{
      animation: glitch 1s linear infinite;
    }

    @keyframes glitch{
      2%,64%{
        transform: translate(2px,0) skew(0deg);
      }
      4%,60%{
        transform: translate(-2px,0) skew(0deg);
      }
      62%{
        transform: translate(0,0) skew(5deg);
      }
    }

    div:before,
    div:after{
      content: attr(title);
      position: absolute;
      left: 0;
    }

    div:before{
      animation: glitchTop 1s linear infinite;
      clip-path: polygon(0 0, 100% 0, 100% 33%, 0 33%);
      -webkit-clip-path: polygon(0 0, 100% 0, 100% 33%, 0 33%);
    }

    @keyframes glitchTop{
      2%,64%{
        transform: translate(2px,-2px);
      }
      4%,60%{
        transform: translate(-2px,2px);
      }
      62%{
        transform: translate(13px,-1px) skew(-13deg);
      }
    }

    div:after{
      animation: glitchBotom 1.5s linear infinite;
      clip-path: polygon(0 67%, 100% 67%, 100% 100%, 0 100%);
      -webkit-clip-path: polygon(0 67%, 100% 67%, 100% 100%, 0 100%);
    }

    @keyframes glitchBotom{
      2%,64%{
        transform: translate(-2px,0);
      }
      4%,60%{
        transform: translate(-2px,0);
      }
      62%{
        transform: translate(-22px,5px) skew(21deg);
      }
    }
    </style>
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-2HK8GSNM63\"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-2HK8GSNM63');
    </script>
  </head>
  <body>
    <div title="<?php echo $code; ?>"><?php echo $code; ?></div>
  </body>
</html>
