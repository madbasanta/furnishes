window.success_alert = message => {
	$('.alert-success .message_container').html(message).closest('.alert').addClass('show');
	hide_alert();
}

window.danger_alert = message => {
	$('.alert-danger .message_container').html(message).closest('.alert').addClass('show');
	hide_alert();
}

window.warning_alert = message => {
	$('.alert-warning .message_container').html(message).closest('.alert').addClass('show');
	hide_alert();
}

window.hide_alert = () => {
	setTimeout(() => {
		$('.alert').removeClass('show');
	}, 10000);
}