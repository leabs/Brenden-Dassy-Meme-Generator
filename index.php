<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Brendan Dassey Meme Generator</title>
<meta property="og:url"                content="http://www.cs5.clasnet.sunyocc.edu/~s.m.leabo/brendan/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="Brendan Dassey Meme Generator" />
 <meta property="og:image:width"       content="546" />
  <meta property="og:image:height"     content="400" />
<meta property="og:description"        content="Convict Your Friends of Murder" />
<meta property="og:image"              content="http://cs5.clasnet.sunyocc.edu/~s.m.leabo/brendan/brended.jpg" />

<!-- Bootstrap -->

<style type="text/css">
.container .row .col-lg-12 .center {
	font-family: Gotham, Helvetica Neue, Helvetica, Arial, sans-serif;
}

html {
  background: url(images/background.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
}

div {
background-color:#FFFFFF;
margin-right:auto;
margin-left:auto;
padding:10px;
max-width:500px;
}
h1, form{
	text-align:center;
}

img{
	max-width:90%;
	display:block;
	margin:auto;
}
div#shares{
	text-align:right;
}

</style>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
        <h1>Brendan Dassey Meme Generator</h1>

<img src="brended.jpg" alt="Brendan's picture" >



        <h1 class="text-center"><strong>Insert a friend's first name to convict: </strong></h1>



    <form action="result.php" method="get">
    <input type="text" name="fname" required maxlength="10">

    <input type="submit" name ="submit" value="Submit">
	</form>
<br  />

<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fcs5.clasnet.sunyocc.edu%2F~s.m.leabo%2Fbrendan%2F&layout=button&size=small&mobile_iframe=true&width=69&height=20&appId" width="69" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>
