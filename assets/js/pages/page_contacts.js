	//Author: SangDo 2015
var submitting = false;
var SERVER_URI = 'http://engma2.com.vn/';

function dlog(mess){
	if (console.log)		//avoid IE
		console.log(mess);
}

function isEmpty(a_var){
	return a_var === undefined || a_var == null || $.trim(a_var)=='';
}
String.prototype.isValidEmailAddress = function() {
	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	return pattern.test(this);
};

//send mail
function onSendMessage(){
	var name = $.trim($('#name').val());
	var email = $.trim($('#email').val());
	var message = $.trim($('#message').val());

	if (isEmpty(name) || isEmpty(email) || isEmpty(message) ||
			!email.isValidEmailAddress() || message.length < 10)
		return;
	//
	var params = {
			name: name,
			email: email,
			message: message
	};
	ajaxPost('home/sendContactEmail', params, function(resp){
		//success
		dlog(resp);
	}, function(re){
		//error
		dlog(re);
	});
}

//====================
function ajaxPost(uri, params, callback, callback_err){
	uri = encodeURI(SERVER_URI + uri);

	$.ajax({
		url: uri,
		type: 'POST',
		data: params,
		dataType: 'json',	//jsonp causes error in IE
		complete: function (response){
//			slog('>>>> complete request: ' + uri);
//			slog(response);
			if (response.status == 500 && callback_err !== undefined)		//error
				callback_err(response.responseText);
			else if (response.status == 200 && callback !== undefined)
				callback(response.responseText);
		}
	});
}