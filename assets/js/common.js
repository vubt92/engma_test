/**
 * common functions
 * author: SangDo
 */

var submitting = false;

function Common() { }

Common.prototype.dlog = function(mess){
	if (!this.isEmpty(mess) && console.log)		//avoid IE
		console.log(mess);
		
};
Common.prototype.isEmpty = function(a_var){
	return a_var === undefined || a_var == null || $.trim(a_var)=='';
};
Common.prototype.isset = function(a_var){
	return !this.isEmpty(a_var);
};
Common.prototype.parseBool = function(b) {
    return !(/^(false|0)$/i).test(b) && !!b;
};
Common.prototype.show_alert = function(mess){
	alert(mess);
};
//
Common.prototype.ajaxPost = function(uri, params, callback, callback_err){
	uri = encodeURI(SERVER_URI + uri);

	$.ajax({
		url: uri,//url is a link request
		type: 'POST',
		data: params, //data send to server
		dataType: 'json',	//jsonp causes error in IE
		complete: function (response){ //response that server rely
//			slog('>>>> complete request: ' + uri);
//			slog(response);
			if (response.status == 500 && callback_err !== undefined)		//error
				callback_err(response.responseText);
			else if (response.status == 200 && callback !== undefined)
				callback(response.responseText);
		},
	});
}
//global object
var common = new Common();
