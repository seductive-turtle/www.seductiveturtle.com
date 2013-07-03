<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Seductive Turtle</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!--[if lt IE 9]>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
  <![endif]-->
  <!--[if gte IE 9]><!-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
  <!--<![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
		
  <!-- Stylesheets -->
  <link href="style/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="style/font-awesome.css">
  <link rel="stylesheet" href="style/isotype.css">
  <link rel="stylesheet" href="style/prettyPhoto.css">
  <!--[if IE 7]>
  <link rel="stylesheet" href="style/font-awesome-ie7.css">
  <![endif]-->		
  <link href="style/style.css" rel="stylesheet">
  <link href="style/bootstrap-responsive.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/favicon.ico">
  <script type="text/javascript">
    $( function() {
      $( 'form' ).on( 'submit', function( e ) {
        $.post(
          $( this ).attr( 'action' ),
          $( 'form' ).serialize(),
          function() {
            $( '.form' ).html( "<h5>Thank you for your request!</h5>" );
            return false;
          }
        );
  
        return false;
      } );
    } );
  </script>
  <script type="text/javascript">
    window._idl = {};
    _idl.variant = "modal";
    (function() {
        var idl = document.createElement('script');
        idl.type = 'text/javascript';
        idl.async = true;
        idl.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'members.internetdefenseleague.org/include/?url=' + (_idl.url || '') + '&campaign=' + (_idl.campaign || '') + '&variant=' + (_idl.variant || 'banner');
        document.getElementsByTagName('body')[0].appendChild(idl);
    })();
</script>
</head>

<body>

<div class="container">
   <!-- Header -->
   <header>
      <div class="row">
         <div class="span5">
            <div class="hidden-phone">
               <div class="lnav">
                  <!-- Left navigation. Replace # with links -->
                  <a href="/about">About</a> 
                  <!--a href="careers.html">Careers</a--> 
                  <a target="_blank" href="http://www.github.com/seductive-turtle">Our Code</a>
               </div>
            </div>
         </div>
         <div class="span2">
            <!-- Logo -->
            <div class="logo">
               <div class="name">
                  <p class="stars"><i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i></p>
                  <!-- Replace # with your site link. Replace "Alejandra" with your site name. -->
                  <p class="namey"><b><a href="/">Seductive Turtle</a></b></p>
                  <p class="stars"><i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i></p>
               </div>
            </div>
         </div>
         <div class="span5">
            <div class="rnav">
               <div class="mobily visible-phone">
      
               </div>
               <!-- Right navigation. Replace # with links -->
               <!--a href="portfolio.html">Portfolio</a--> 
               <a target="_blank" href="http://www.aaronscherer.me/">Blog</a> 
               <a href="/contact">Contact</a>
            </div>
         </div>
      </div>
   </header>
   
   <hr />
   <a class="idl" href="http://internetdefenseleague.org"><img src="http://internetdefenseleague.org/images/badges/final/banner_left.png" alt="Member of The Internet Defense League" /></a>
