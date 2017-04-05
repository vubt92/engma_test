
/**
 * send a Push notification
 */
function sendPush(){
	if (submitting)
		return;
	var txt_server_key = $.trim($('#server_key').val());
	var token = $.trim($('#phone_token').val());
	var content = $.trim($('#body').val());

	if (common.isEmpty(txt_server_key) || common.isEmpty(token)  || common.isEmpty(content)){
		common.show_alert(MESS.MISSING + 'token or server key or content');
		return;
	}
	localStorage.setItem(LOCAL_STORE.FIREBASE_TOKEN_KEYNAME, txt_server_key);	//save token
	localStorage.setItem(LOCAL_STORE.DEVICE_TOKEN_KEYNAME, token);		//phone token
	//
	var params = {
		server_key: txt_server_key,
		token: token,
		content: content,
		phone_type: $('input[type="radio"][name="phone_type"]:checked').val(),
		badge: parseInt($.trim($('#badge').val())),
		sound: $.trim($('#sound').val()),
		category: $.trim($('#category').val())
	};
	
	submitting = true;
	$('#send_push_result').text('Sending...');
	common.ajaxPost(URI.SEND_TEST_PUSH, params, function(result){
		$('#send_push_result').text(result);
		submitting = false;
	});
}
		
function window_onload(){
	//load data from local storage, if any
	var saved_firebase_token = localStorage.getItem(LOCAL_STORE.DEVICE_TOKEN_KEYNAME);
	var saved_token = localStorage.getItem(LOCAL_STORE.DEVICE_TOKEN_KEYNAME);	//phone token
	if (common.isset(saved_token)){
		$('#phone_token').val(saved_token);
	}
}
window.onload = window_onload;