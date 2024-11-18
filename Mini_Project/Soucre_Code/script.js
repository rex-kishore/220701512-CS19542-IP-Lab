// Function to check and display validation for sign-in
document.getElementById('signinForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Get the email and password fields
    const email = document.getElementById('signin-email');
    const password = document.getElementById('signin-password');
    
    // Reset previous validation
    email.classList.remove('is-invalid', 'is-valid');
    password.classList.remove('is-invalid', 'is-valid');
    
    let valid = true;

    // Email validation
    if (!email.checkValidity()) {
        email.classList.add('is-invalid');
        valid = false;
    } else {
        email.classList.add('is-valid');
    }

    // Password validation
    if (!password.checkValidity()) {
        password.classList.add('is-invalid');
        valid = false;
    } else {
        password.classList.add('is-valid');
    }

    if (valid) {
        // Allow form submission
        this.submit();
    }
});

// Function to check and display validation for sign-up
document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Get the email, password, and confirm password fields
    const email = document.getElementById('signup-email');
    const password = document.getElementById('signup-password');
    const confirmPassword = document.getElementById('signup-confirm-password');
    
    // Reset previous validation
    email.classList.remove('is-invalid', 'is-valid');
    password.classList.remove('is-invalid', 'is-valid');
    confirmPassword.classList.remove('is-invalid', 'is-valid');

    let valid = true;

    // Email validation
    if (!email.checkValidity()) {
        email.classList.add('is-invalid');
        valid = false;
    } else {
        email.classList.add('is-valid');
    }

    // Password validation
    if (!password.checkValidity()) {
        password.classList.add('is-invalid');
        valid = false;
    } else {
        password.classList.add('is-valid');
    }

    // Confirm password validation
    if (confirmPassword.value !== password.value) {
        confirmPassword.classList.add('is-invalid');
        valid = false;
    } else {
        confirmPassword.classList.add('is-valid');
    }

    if (valid) {
        // Allow form submission
        this.submit();
    }
});

// Toggle between Sign In and Sign Up forms
document.getElementById('show-signup').addEventListener('click', function() {
    document.getElementById('signin-form').classList.remove('active');
    setTimeout(function() {
        document.getElementById('signin-form').style.display = 'none';
        document.getElementById('signup-form').style.display = 'block';
        setTimeout(function() {
            document.getElementById('signup-form').classList.add('active');
        }, 10);
    }, 300);
});

document.getElementById('show-signin').addEventListener('click', function() {
    document.getElementById('signup-form').classList.remove('active');
    setTimeout(function() {
        document.getElementById('signup-form').style.display = 'none';
        document.getElementById('signin-form').style.display = 'block';
        setTimeout(function() {
            document.getElementById('signin-form').classList.add('active');
        }, 10);
    }, 300);
});

// Activate the first form initially
document.getElementById('signin-form').classList.add('active');

// DASHBOARD
document.getElementById('profileForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const name = document.getElementById('profile-name');
    const email = document.getElementById('profile-email');
    const location = document.getElementById('profile-location');

    let valid = true;

    // Validate each field
    if (!name.checkValidity()) {
        name.classList.add('is-invalid');
        valid = false;
    } else {
        name.classList.remove('is-invalid');
        name.classList.add('is-valid');
    }

    if (!email.checkValidity()) {
        email.classList.add('is-invalid');
        valid = false;
    } else {
        email.classList.remove('is-invalid');
        email.classList.add('is-valid');
    }

    if (!location.checkValidity()) {
        location.classList.add('is-invalid');
        valid = false;
    } else {
        location.classList.remove('is-invalid');
        location.classList.add('is-valid');
    }

    if (valid) {
        alert('Profile updated successfully!');
    }
});
