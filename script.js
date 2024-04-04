const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

// Add this code at the end of your existing JavaScript code
document.addEventListener('DOMContentLoaded', function () {
    // Check for the session variable and trigger the slide accordingly
    if (sessionStorage.getItem('registration_success')) {
        container.classList.remove('right-panel-active');
        sessionStorage.removeItem('registration_success'); // Remove the session variable
    }
});
