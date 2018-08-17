
	var email = document.getElementById('email');
	var message	= document.getElementById('message');

	function posalji() {
	var app = this;
	axios.post('http://beogal.com/api/sendmail', {
				email: app.email.value,
				message: app.message.value
		})
		.then(function(response) {
				// $('#mymodaluspeno').modal('show');


		})
		.catch(function(error) {
			console.warn(error);
		});

	}
