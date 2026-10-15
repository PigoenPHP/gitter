<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PHP Auth System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">PHP Auth System</a>
            <button class="btn btn-outline-light btn-sm" id="logoutBtn">Logout</button>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h1 class="h3 mb-3">Welcome, <?php echo htmlspecialchars($_SESSION['user_name'] ?? 'User'); ?>!</h1>
                        <p class="text-muted">You are successfully logged in to your secure dashboard.</p>
                        <hr>
                        <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['user_email'] ?? ''); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('logoutBtn').addEventListener('click', async function() {
            try {
                const response = await fetch('/api/logout', {
                    method: 'POST',
                    headers: { 'X-Requested-With': 'XMLHttpRequest' },
                    credentials: 'same-origin'
                });
                const data = await response.json();
                if (data.success) {
                    window.location.href = '/login';
                }
            } catch (err) {
                alert('Logout failed.');
            }
        });
    </script>
</body>
</html>
