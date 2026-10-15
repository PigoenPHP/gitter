<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PHP Auth System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center py-4" style="min-height: 100vh;">
    <main class="form-signin w-100 m-auto" style="max-width: 400px; padding: 15px;">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
                
                <div id="alert-container"></div>

                <form id="loginForm">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="invalid-feedback" id="error-email"></div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <div class="invalid-feedback" id="error-password"></div>
                    </div>
                    <button class="w-100 btn btn-primary py-2" type="submit" id="submitBtn">Sign in</button>
                </form>
                <div class="mt-3 text-center">
                    <a href="/register" class="text-decoration-none">Don't have an account? Sign up</a>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.getElementById('loginForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const submitBtn = document.getElementById('submitBtn');
            const alertContainer = document.getElementById('alert-container');
            alertContainer.innerHTML = '';
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';

            try {
                const response = await fetch('/api/login', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                    credentials: 'same-origin',
                    body: JSON.stringify({ email, password })
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    window.location.href = data.data.redirect || '/dashboard';
                } else {
                    alertContainer.innerHTML = `<div class="alert alert-danger">${data.message || 'Login failed.'}</div>`;
                }
            } catch (err) {
                alertContainer.innerHTML = `<div class="alert alert-danger">An unexpected error occurred.</div>`;
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Sign in';
            }
        });
    </script>
</body>
</html>
