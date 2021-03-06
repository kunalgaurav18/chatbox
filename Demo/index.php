<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">
	

    <title>S-CHAT</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/bootstrap-theme.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" />
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	
	
	
	</head>

  <body>
<script>
function myfunction(){
	var uname = document.getElementById('username');
	if(uname.value==''){
	alert('user name missing');
	}}

</script>  
  
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">S-CHAT</a>
        </div>
        <div class="navbar-collapse collapse">
          
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h1>Shadow Chat ( S-CHAT )</h1>
					<h2 class="subtitle">This Is a home for all friends who want group interaction !! </h2>
				<table><tr height="100px"><td>			
				<div id="login">
				<input type="text" id="username" placeholder="Enter your UserName"></input>
				<button type="submit" class="btn btn-theme"onClick="login(),myfunction();">Login Now</button>
				</div>
				</tr></td>
				<tr><td>
				<div id="onlinecont" style="background-color:white">
						<p>Online Users:</p>
						<div id="online">Loading...
						</div>
				</div>
				</tr></td>
				</table>
								
				</div>
				<div class="col-lg-4 col-lg-offset-2">
					<div id="chatbox"><b>SHADOW CHAT BOX</b></div> 
					<div id="messages" style="background-color:white" onfocus="this.value = this.value;">
					</div><br/>
					
					<hr><br/>
					<div id="senddiv">
				<textarea id="mesage" rows="2" cols="46" border="green" border="4px"></textarea><br/>
				<input type="button" class="btn btn-theme" onClick="sendMessage(); document.getElementById(message).value='';" value="Send"/>
				<input type="button" class="btn btn-theme" onClick="logout()" value="Logout"/>
				</div>
					
				</div>
				
				
			</div>
		</div>
	</div>
	<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
					<p class="copyright">Copyright &copy; 2014 |(NSEC CSE) | Group-Meterpreter</p>
			</div>
		</div>		
	</div>	
	</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="js/showMessages.js"></script>
<script type="text/javascript" src="js/postMessage.js"></script>
<script type="text/javascript" src="js/signinout.js"></script>
<script type="text/javascript" src="js/showOnline.js"></script>

<script language="JavaScript">
  $(window).bind('beforeunload', function(){
  return 'leave?';
});

$(window).unload(function(){
  logout();
});

setInterval(function() {
  //var wtf    = $('#messages');
  //var height = wtf[0].scrollHeight;
  $('#messages').animate({scrollTop: $('#messages').get(0).scrollHeight}, 9000);
},10000);
</script>
  </body>
</html>
