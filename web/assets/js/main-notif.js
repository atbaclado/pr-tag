function notify() {
	var title = 'Welcome to Pleasantville Theater!';
	var body = 'Please enjoy our welcome.';
	var icon = '../images/logo.jpg';
	var notification = new Notification(title, {
		body: body,
		icon: icon
	});

	setTimeout(function() { notification.close() }, 5000);
}
notify();