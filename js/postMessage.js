function sendMessage() {
 var message = $('#mesage').val();
 
 $.post('postMessage.php', { message: message }, function(){ $('#mesage').val(''); });
 }