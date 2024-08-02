function togglePasswordVisibility(toggleId, passwordId, showIconId, hideIconId) {
    const togglePassword = document.getElementById(toggleId);
    const passwordField = document.getElementById(passwordId);
    const showIcon = document.getElementById(showIconId);
    const hideIcon = document.getElementById(hideIconId);

    togglePassword.addEventListener('click', function() {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            showIcon.classList.add('d-none');
            hideIcon.classList.remove('d-none');
        } else {
            passwordField.type = 'password';
            showIcon.classList.remove('d-none');
            hideIcon.classList.add('d-none');
        }
    });
}

togglePasswordVisibility('toggle-password1', 'password1', 'show-icon1', 'hide-icon1');
togglePasswordVisibility('toggle-password2', 'password2', 'show-icon2', 'hide-icon2');
togglePasswordVisibility('toggle-password3', 'password3', 'show-icon3', 'hide-icon3');