<?php
$navigation = array(
  PATH_WWW => 'Sommercamp',
  PATH_WWW . 'egaa-sommercamp.php' => 'Egå Højskole',
  PATH_WWW . 'vih-sommercamp.php' => 'Vejle Idrætshøjskole',
  PATH_WWW . 'ronde-sommercamp.php' => 'Rønde Højskole',
  PATH_WWW . 'faq.php' => 'FAQ'
);

$pics = array(
	PATH_WWW . 'images/horisontal-boldspil-logo.jpg',
	PATH_WWW . 'images/horisontal-studiegruppe-logo.jpg',
	PATH_WWW . 'images/horisontal-klatrer-logo.jpg',
	PATH_WWW . 'images/horisontal-jumping-logo.jpg',
);

$pic = $pics[array_rand($pics)];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="da" xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php if (isset($meta['description'])) echo $meta['description']; ?>" />
    <meta name="keywords" content="<?php if (isset($meta['keywords'])) echo $meta['keywords']; ?>" />
    <script type="text/javascript" src="nifty.js"></script>
    <script type="text/javascript">
      window.onload=function(){
        //Nifty("div.hojskole h2", "top");
        Nifty("div.hojskole ul", "none same-height");
        //Nifty("div.hojskole p", "bottom");
      }
    </script>
    <style type="text/css">

      html {
        font-size: 80%;
      }

      body {
        margin: 20px 0 0 0; padding: 0;
        font-family:  verdana, "Lucida Grande", arial,  sans-serif;
        color: #333;
        background: #ddd;
        text-align: center;
        font-size: 100%;
      }

      strong {
        background-color: #ffc;
      }

      h1 {
        font-size: 1.5em;
      }

      h2 {
        font-size: 1.2em;
      }

      div#container {
        margin: 2em auto;
        text-align: left;
        width: 700px;
        background: white;
        padding: 2em;
      }
	dt { font-weight: bold; }
		div#branding {
			display: none;
		}



      div#branding h1 a  {
        display: none;
      }

      div#navigation-main {
        background: url(<?php echo $pic; ?>);
        height: 200px;
      }

    div#navigation-main ul {
      list-style-type: none;
      padding: 2em 0 0 0;
      margin: 0;
       /* background: blue; */
        width: 27%;
        height: 200px;

    }

      div#navigation-main li {
        padding: 0;
        margin: 0;
      }

      div#navigation-main li a {
        color: white;
        display: block;
        padding: 0.5em 1em;
        text-decoration: none;
        margin-left: 1px;
        font-weight: bold;
      }
      div#navigation-main a:hover, #navigation-main li#current a {
      	background: #637D94;
      	text-decoration: underline;
      }
		#content { margin-top: 1em;}
		.sidebar #content {
			overflow: hidden;
			margin-top: 0;
		}

		.sidebar #content-main {
			padding: 20px 0;
			float: right;
			width: 68%;
			padding-bottom: 1000em;
			margin-bottom: -998em;

		}
		.sidebar #content-main h1 {
			margin-top: 0;

		}
		.sidebar #content-sub h2 {
			margin: 0 1em;
		}
		.sidebar #content-sub p {
			margin: 0 1em;
		}

		.sidebar #content-sub {
			float: left;
			width: 27%;
padding: 20px 0;
			background: #eee;
			padding-bottom: 1000em;
			margin-bottom: -998em;
			margin-left: 1px;
		}

      div.hojskole {
        width: 192px;
        float: left;
        margin-right: 30px;
        margin-bottom: 1em;
      }

      div.hojskole h2 {
        margin: 0;
        padding: 8px 10px 8px 10px;
        font-size: 1em;
      }

      div.hojskole a {
        text-decoration: none;
        color: black;
      }


      div.hojskole a:hover {
        text-decoration: underline;
      }

      div.hojskole ul {
        margin: 0;
        padding: 10px;
      }

      div.hojskole li {
        margin: 0;
        padding: 0;
        list-style: none;
      }

      div.hojskole p {
        margin: 0;
        padding: 10px 0px 10px 10px;
        text-align: left;
        font-size: 0.9em;
      }

      div#vih {
        border: 5px solid white;
      }

      div#vih h2, div#vih h2 a {
        /*background: #D61031;*/
		background: #637D94;
        color: white;
      }

      div#vih ul, div#vih p {
        /*background: #F9B9C3;*/
        background: #a5b6bd;
      }

      div#egaa {
          border: 5px solid white;
      }

      div#egaa h2, div#egaa h2 a {
        background: #76AADB;
        color: black;
      }

      div#egaa ul, div#egaa p {
        background: #A5C7E7;
        color: black;
      }

      div#ronde {
        border: 5px solid white;
      }

      div#ronde h2, div#ronde h2 a {
        background: #bbb;
        color: black;
      }

      div#ronde ul, div#ronde p {
        background: #ddd;
        color: black;
      }

      a img {
        border: none;
      }

      #footer { clear: both; text-align: right; }

      @media print {
      	#navigation-main { display: none; }
      	div#branding { display: block; }
      	.sidebar #content-sub { float: none !important; width: 98%; margin: 0; padding: 0; }
      	.sidebar #content-main { float: none !important; width: 98%; }
      	.sidebar #content-sub p, .sidebar #content-sub h2 { margin-left: 0; margin-right: 0; }
      }

    </style>


  </head>

  <body<?php if (isset($body_attributes)) echo ' ' . $body_attributes; ?>>

    <div id="container">
      <div id="branding">
    <div id="branding-logo">
      <a href="<?php echo PATH_WWW; ?>"><img src="logo.jpg" /></a>
    </div>
        <h1><a href="<?php echo PATH_WWW; ?>"><span>SommerCamp</span></a></h1>
      </div>
      <div id="navigation-main">
        <ul>
      <?php foreach($navigation AS $link => $label): ?>
        <li<?php if (strtolower($_SERVER['PHP_SELF']) == strtolower($link) OR $link == PATH_WWW AND basename($_SERVER['PHP_SELF']) == 'index.php') echo ' id="current"'; ?>><a href="<?php echo $link; ?>"><?php echo $label; ?></a></li>
      <?php endforeach; ?>
        </ul>
      </div>
      <div id="content">
      <div id="content-main">
        <?php echo $content_main; ?>
      </div>
      <div id="content-sub">
      	<?php echo $content_sub; ?>
      </div>

      <div id="footer">
      	<a href="http://www.hojskolerne.dk/"><img alt="hojskolerne.dk" src="images/hojskolerne-logo.jpg" height="30" width="100" /></a>
      </div>

    </div>
  </body>
</html>