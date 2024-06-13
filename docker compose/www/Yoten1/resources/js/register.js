
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('register-form').addEventListener('submit', async function (e) {
        e.preventDefault();

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const password_confirmation = document.getElementById('password_confirmation').value;

        if (password !== password_confirmation) {
            alert('Passwords do not match');
            return;
        }

        try {
            const response = await axios.post('/api/register', { name, email, password });
            if (response.status === 201) {
                alert('Registration successful');
                // Guardar el token en localStorage
                localStorage.setItem('token', response.data.access_token);
                window.location.href = '/home'; // Redirigir a una página después de registrarse
            } else {
                alert('Registration failed: ' + response.data.message);
            }
        } catch (error) {
            alert('An error occurred: ' + error.response.data.message);
        }
    });
});
