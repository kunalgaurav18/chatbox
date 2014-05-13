<?
session_start();
?>
<html>
<head>
<title>Chatbox</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<div id="container">
		<div id="messages">
		</div>

		<div id="senddiv">
		<textarea id="mesage" rows="2" cols="30"></textarea>
		<input type="button" onClick="sendMessage(); document.getElementById(message).value='';" value="Send"/>
		<input type="button" onClick="logout()" value="Logout"/>
		</div>
		
		<div id="login">
		Username: <input type="text" id="username" size=16/> <input type="button" onClick="login()" value="Submit"/>
		</div>
		
		
</div>
<div id="onlinecont">
<p>Online Users:</p>
<div id="online">Loading...
		</div>
		</div>
<div style="clear:both"></div>
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

$(function() {
  var wtf    = $('#messages');
  var height = wtf[0].scrollHeight;
  wtf.scrollBottom(height);
});
</script>
<div id="footer">
&copy; Meterpreter
</div>
</body>
</html>
