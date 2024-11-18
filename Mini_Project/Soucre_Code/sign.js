document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('signup-email');
    const password = document.getElementById('signup-password');

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

    // No password validation now
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
