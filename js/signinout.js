$('#senddiv').ready().hide();

function login(){

var username = $('#username').val();
$.post('signinout.php',{username: username},function(){});
$('#login').hide();
$('#senddiv').show();
}

function logout(){
$.post('logout.php',{},function(){});
$('#login').show();
$('#senddiv').hide();
}