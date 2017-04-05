<html>
<head>
<title>Test push notification</title>

<link rel="stylesheet" href="<?php echo $common_val['base_url'];?>assets/css/tmp.css">

<script type="text/javascript" src="<?php echo $common_val['base_url'];?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $common_val['base_url'];?>assets/js/constant.js"></script>
<script type="text/javascript" src="<?php echo $common_val['base_url'];?>assets/js/common.js"></script>
<script type="text/javascript" src="<?php echo $common_val['base_url'];?>assets/js/tmp.js"></script>
</head>
<body>
<br/>
Test Push notification:<br/>

<table width="50%">
				<tr><td>Server key (*)</td><td><textarea class="focus_bg" type="text" id="server_key" cols="150" style="resize:none;" rows="5">AAAAHoXo4oU:APA91bFs8nscrQBu61-ZsHJ0Sus9lWM8TQ1ZGS4PEN8PUuk7O0WpX93jRAbcLdKaIb-UZvAySYXwE_DLaPrhg-TbQor4oMLiLqMJln3MZQ2C3kKALFi_5pMxPueLPwd_7Cymi1C6_FkgCzJDe5zit-US3w1-9X2XDg</textarea></td></tr>
				<tr><td>Phone token (*)</td><td><textarea class="focus_bg" id="phone_token" cols="150" style="resize:none;" rows="6">dwej5461N6A:APA91bEsVzicliUH4jxwjdY2Sbr0UbpteXo5AC2ROZDqXFWjDhnTpIaFr6qG9yM6l7zVoyMMKgwDkfZrOBR2LC8QRmDOe8NJjnvmGsxCMva51BvRJuCs8rebcfY4VDvZapHX2nwmfUkH</textarea></td></tr>
				<tr><td>Time to live (*) (seconds)</td><td><input type="text" id="time_to_live" value="60"/></td></tr>
				
				<tr><td>Phone</td><td><input type="radio" name="phone_type" value="android"/> Android &nbsp;
						<input type="radio" name="phone_type" value="ios" checked="checked"/> iOS</td></tr>
				<!-- 
				<tr><td>collapse_key (*)</td><td><input type="text" id="collapse_key" value="PCAT_C_DR"/></td></tr>
				<tr><td>from_socket_id (fsk)</td><td><input type="text" id="from_socket_id" value="/#prCb-3Iq-9ZIIEOZAAA-"/></td></tr>
				<tr><td>from_user_id (fid)</td><td><input type="text" id="from_user_id" value="5743ee8df71d9eee5ce53c5b"/></td></tr>
				<tr><td>qid</td><td><input type="text" id="qid" value="57aaded89b41f8a64d8d161f"/></td></tr>
				 -->
				<tr><td colspan="2"><strong>APS payload:</strong></td></tr>
				<tr><td>body (*): </td><td><input class="focus_bg" type="text" id="body" value="111"/></td></tr>
				<tr><td>badge (Number)</td><td><input type="text" id="badge" value="1"/></td></tr>
				<tr><td>sound</td><td><input type="text" id="sound" value="ap.mp3"/></td></tr>
				<tr><td>category (click_action)</td><td><input type="text" id="category" value="PCAT_C_DR"/></td></tr>
				<tr><td></td><td><input type="button" onclick="sendPush();" value="Send Push"/></td></tr>
			</table>
<div id="send_push_result" class="send_push_result"></div>
<br/>

</body>
</html>