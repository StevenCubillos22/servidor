document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('login-form').addEventListener('submit', async function (e) {
        e.preventDefault();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        try {
            const response = await axios.post('/api/login', { email, password });
            if (response.status === 200) {
                alert('Logueado con exito');
                // Guardar el token en localStorage
                localStorage.setItem('token', response.data.access_token);
                window.location.href = '/home'; // Redirigir a una página después de iniciar sesión
            } else {
                alert('Error en el login: ' + response.data.message);
            }
        } catch (error) {
            alert('A occurrido un error: ' + error.response.data.message);
        }
    });
});
