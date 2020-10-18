document.querySelector('.swit_to_signUp').addEventListener('click', function () {
	document.querySelector('.signUpSection').classList.toggle('s_signup')
	document.querySelector('.loginSection').classList.toggle('s_login')

});
document.querySelector('.swit_to_login').addEventListener('click', function () {

	document.querySelector('.signUpSection').classList.remove('s_signup')
	document.querySelector('.loginSection').classList.remove('s_login')

});