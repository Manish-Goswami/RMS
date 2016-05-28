$(document).ready(function(){
	console.log('in script');
	$('#contact-form').validate({
		
		rules:{
			username:'required',
			email:{
				required:true,
				email:true
			},
			password:{
				required:true,
				minlength:5,
			},
			password_confirm:{
				required:true,
				minlength:5,
				equaTo:'#password'
			}
		},
		message:{
			username:'Please enter username here',
			email:'Please enter valid email',
			password:'Please fill password',

		}

	});
	
});