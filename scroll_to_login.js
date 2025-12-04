document.getElementById('continue-link').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('login-section').scrollIntoView({ behavior: 'smooth' });
        });