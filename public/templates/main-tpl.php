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
				font-size: 85%;
			}

			body {
				margin: 20px 0 0 0; padding: 0;
				font-family:  helvetica, verdana, "Lucida Grande", arial,  sans-serif;
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

			div#branding h1 a  {
				display: none;
			}

			div#branding h1 {
				background:
			}


			div.hojskole {
				width: 27%;
				float: left;
				margin-right: 2%;
				padding: 1em;
			}

			div.hojskole h2 {
				margin-bottom: 0;
				padding: 0.5em;
				font-size: 1em;
			}

			div.hojskole a {
				text-decoration: none;
			}


			div.hojskole a:hover {
				text-decoration: underline;
			}

			div.hojskole ul {
				margin: 0;
				padding: 1em 1.5em;
			}

			div.hojskole li {
				margin: 0;
				padding: 0;
				list-style: square;
			}

			div.hojskole p {
				margin: 0;
				padding: 0.5em 1em 2em 0.5em;
				text-align: right;
				font-size: 0.9em;
			}

			div#vih h2, div#vih h2 a {
				background: #D61031;
				color: white;
			}

			div#vih ul, div#vih p {
				background: #F9B9C3;
			}

			div#egaa h2, div#egaa h2 a {
				background: #76AADB;
				color: black;
			}

			div#egaa ul, div#egaa p {
				background: #A5C7E7;
				color: black;
			}

			div#ronde h2, div#ronde h2 a {
				background: #bbb;
				color: black;
			}

			div#ronde ul, div#ronde p {
				background: #ddd;
				color: black;
			}


		</style>


	</head>

	<body>

		<div id="container">
			<div id="branding">
				<h1><a href="<?php echo PATH_WWW; ?>"><span>SommerCamp</span></a></h1>
			</div>
			<div id="content">
				<?php echo $content_main; ?>
			</div>
		</div>
	</body>
</html>