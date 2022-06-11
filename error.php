<!DOCTYPE html>
<?php if(isset($_GET['code'])){
  $code=$_GET['code'];
}else {
  $code='404';
}
$e400= array(
'title' => ' HTTP 400 Bad Request',
'body' => 'The request contains bad syntax or cannot be fulfilled.'
);
$e401= array(
'title' => ' HTTP 401 Authorization Required',
'body' => 'Similar to 403 Forbidden, but specifically for use when authentication is possible but has failed or not yet been provided. The response must include a WWW-Authenticate header field containing a challenge applicable to the requested resource. See Basic access authentication and Digest access authentication.'
);
$e402= array(
'title' => ' HTTP 402 Payment Required (not used yet)',
'body' => 'The original intention was that this code might be used as part of some form of digital cash or micropayment scheme, but that has not happened, and this code has never been used.'
);
$e403= array(
'title' => ' HTTP 403 Forbidden',
'body' => 'The request was a legal request, but the server is refusing to respond to it. Unlike a 401 Unauthorized response, authenticating will make no difference.'
);
$e404= array(
'title' => ' HTTP 404 Not Found',
'body' => 'The requested resource could not be found but may be available again in the future. Subsequent requests by the client are permissible.'
);
$e405= array(
'title' => ' HTTP 405 Method Not Allowed',
'body' => 'A request was made of a resource using a request method not supported by that resource; for example, using GET on a form which requires data to be presented via POST, or using PUT on a read-only resource.'
);
$e406= array(
'title' => ' HTTP 406 Not Acceptable (encoding)',
'body' => 'The requested resource is only capable of generating content not acceptable according to the Accept headers sent in the request.'
);
$e407= array(
'title' => ' HTTP 407 Proxy Authentication Required',
'body' => 'Required.'
);
$e408= array(
'title' => ' HTTP 408 Request Timed Out',
'body' => 'The server timed out waiting for the request.'
);
$e409= array(
'title' => ' HTTP 409 Conflicting Request',
'body' => 'Indicates that the request could not be processed because of conflict in the request, such as an edit conflict.'
);
$e410= array(
'title' => ' HTTP 410 Gone',
'body' => 'Indicates that the resource requested is no longer available and will not be available again. This should be used when a resource has been intentionally removed; however, it is not necessary to return this code and a 404 Not Found can be issued instead. Upon receiving a 410 status code, the client should not request the resource again in the future. Clients such as search engines should remove the resource from their indexes.'
);
$e411= array(
'title' => ' HTTP 411 Content Length Required',
'body' => 'The request did not specify the length of its content, which is required by the requested resource.'
);
$e412= array(
'title' => ' HTTP 412 Precondition Failed',
'body' => 'The server does not meet one of the preconditions that the requester put on the request.'
);
$e413= array(
'title' => ' HTTP 413 Request Entity Too Large',
'body' => 'The request is larger than the server is willing or able to process.'
);
$e414= array(
'title' => ' HTTP 414 Request-URI Too Long',
'body' => 'The URI provided was too long for the server to process.'
);
$e415= array(
'title' => ' HTTP 415 Unsupported Media Type',
'body' => 'The request did not specify any media types that the server or resource supports. For example the client specified that an image resource should be served as image/svg+xml, but the server cannot find a matching version of the image.'
);
$e500= array(
'title' => ' HTTP 500 Internal Server Error',
'body' => 'A generic error message, given when no more specific message is suitable.'
);
$e501= array(
'title' => ' HTTP 501 Not Implemented',
'body' => 'The server either does not recognise the request method, or it lacks the ability to fulfil the request.'
);
$e502= array(
'title' => ' HTTP 502 Bad Gateway',
'body' => 'The server was acting as a gateway or proxy and received an invalid response from the upstream server.'
);
$e503= array(
'title' => ' HTTP 503 Service Unavailable',
'body' => 'The server is currently unavailable (because it is overloaded or down for maintenance). Generally, this is a temporary state'
);
$e504= array(
'title' => ' HTTP 504 Gateway Timeout',
'body' => 'The server was acting as a gateway or proxy and did not receive a timely request from the upstream server.'
);
$e505= array(
'title' => ' HTTP 505 HTTP Version Not Supported',
'body' => 'The server does not support the HTTP protocol version used in the request.'
);
$errors = array('400' => $e400,'401' => $e401 ,'402' => $e402 ,'403' => $e403 ,'404' => $e404 ,
'405' => $e405 ,'406' => $e406 ,'407' => $e407 ,'408' => $e408 ,'409' => $e409,
'410' => $e410 ,'411' => $e411 ,'412' => $e412 ,'413' => $e413 ,'414' => $e414,
'415' => $e415 ,'500' => $e500 ,'501' => $e501 ,'502' => $e502 ,'503' => $e503,
'504' => $e504,'505' => $e505
 );

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $code; ?></title>
    <link rel="shortcut icon" href="https://img1.pnghut.com/22/13/15/M1ujC9XG3Y/error-favicon-scalable-vector-graphics-symbol-red.jpg" />
    <style media="screen">
    @import url("https://fonts.googleapis.com/css?family=Share+Tech+Mono|Montserrat:700");

    * {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        box-sizing: border-box;
        color: inherit;
    }

    body {
        background-image: linear-gradient(120deg, #4f0088 0%, #000000 100%);
        height: 100vh;
    }

    h1 {
        font-size: 45vw;
        text-align: center;
        position: fixed;
        width: 100vw;
        z-index: 1;
        color: #ffffff26;
        text-shadow: 0 0 50px rgba(0, 0, 0, 0.07);
        top: 50%;
        transform: translateY(-50%);
        font-family: "Montserrat", monospace;
    }

    div {
        background: rgba(0, 0, 0, 0);
        width: 70vw;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        margin: 0 auto;
        padding: 30px 30px 10px;
        box-shadow: 0 0 150px -20px rgba(0, 0, 0, 0.5);
        z-index: 3;
    }

    P {
        font-family: "Share Tech Mono", monospace;
        color: #f5f5f5;
        margin: 0 0 20px;
        font-size: 17px;
        line-height: 1.2;
    }

    span {
        color: #f0c674;
    }

    i {
        color: #8abeb7;
    }

    div a {
        text-decoration: none;
    }

    b {
        color: #81a2be;
    }

    a.avatar {
        position: fixed;
        bottom: 15px;
        right: -100px;
        animation: slide 0.5s 4.5s forwards;
        display: block;
        z-index: 4
    }

    a.avatar img {
        border-radius: 100%;
        width: 44px;
        border: 2px solid white;
    }

    @keyframes slide {
        from {
            right: -100px;
            transform: rotate(360deg);
            opacity: 0;
        }
        to {
            right: 15px;
            transform: rotate(0deg);
            opacity: 1;
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
    <h1><?php echo $code; ?></h1>
    <div><p>> <span>ERROR CODE</span>: "<i><?php echo $errors[$code]['title']; ?></i>"</p>
    <p>> <span>ERROR DESCRIPTION</span>: "<i><?php echo strtoupper($errors[$code]['body']); ?></i>"</p>
    <p>> <span>ERROR POSSIBLY CAUSED BY</span>: [<b>execute access forbidden, read access forbidden, write access forbidden, ssl required, ssl 128 required, ip address rejected, client certificate required, site access denied, too many users, invalid configuration, password change, mapper denied access, client certificate revoked, directory listing denied, client access licenses exceeded, client certificate is untrusted or invalid, client certificate has expired or is not yet valid, passport logon failed, source access denied, infinite depth is denied, too many requests from the same client ip</b>...]</p>
    <p>> <span>SOME PAGES ON THIS SERVER THAT YOU DO HAVE PERMISSION TO ACCESS</span>: [<a href="/">Home Page</a>]</p><p>> <span><?php echo strtoupper('Mongolian Mathematical Society'); ?> :-)</span></p>
    </div>

    <a class="avatar" href="https://www.facebook.com/togtokh0/" title="❤"><img src="http://graph.facebook.com/734715467428373/picture"/></a>
  </body>
  <script type="text/javascript">
  var str = document.getElementsByTagName('div')[0].innerHTML.toString();
  var i = 0;
  document.getElementsByTagName('div')[0].innerHTML = "";

  setTimeout(function() {
      var se = setInterval(function() {
          i++;
          document.getElementsByTagName('div')[0].innerHTML = str.slice(0, i) + "|";
          if (i == str.length) {
              clearInterval(se);
              document.getElementsByTagName('div')[0].innerHTML = str;
          }
      }, 10);
  },0);
  </script>
</html>
