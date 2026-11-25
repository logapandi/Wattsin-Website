<?php
require_once __DIR__ . '/includes/auth.php';

if (is_admin_logged_in()) {
    header('Location: dashboard.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!valid_csrf_token($_POST['csrf_token'] ?? null)) {
        $error = 'Your session expired. Please try again.';
    } else {
        $email = strtolower(trim($_POST['email'] ?? ''));
        $password = (string) ($_POST['password'] ?? '');
        foreach (read_json_file(USERS_FILE) as $user) {
            if (strtolower($user['email'] ?? '') === $email && password_verify($password, $user['password'] ?? '')) {
                session_regenerate_id(true);
                $_SESSION['admin_user'] = ['name' => $user['name'], 'email' => $user['email']];
                header('Location: dashboard.php');
                exit;
            }
        }
        $error = 'Invalid email address or password.';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | Wattsin Technologies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <style>
        :root { --navy:#0A192F; --orange:#F58220; --muted:#64748B; }
        * { box-sizing:border-box; }
        body { min-height:100vh; margin:0; display:grid; place-items:center; font-family:'Plus Jakarta Sans',Arial,sans-serif; background:linear-gradient(135deg,#071326,#172A45); }
        .auth-shell { width:min(440px,92%); padding:42px; background:#fff; border-radius:10px; box-shadow:0 25px 70px rgba(0,0,0,.25); }
        .brand { color:var(--navy); font-size:22px; font-weight:800; text-decoration:none; }
        .brand span { color:var(--orange); }
        h1 { color:var(--navy); font-size:28px; font-weight:800; margin:34px 0 8px; }
        .intro { color:var(--muted); font-size:14px; margin-bottom:28px; }
        label { color:var(--navy); font-size:12px; font-weight:700; margin-bottom:8px; }
        .form-control { min-height:48px; border-color:#E2E8F0; box-shadow:none; }
        .form-control:focus { border-color:var(--orange); box-shadow:0 0 0 3px rgba(245,130,32,.13); }
        .btn-orange { width:100%; padding:13px; border:0; background:var(--orange); color:#fff; font-weight:700; }
        .btn-orange:hover { background:#D96A0C; color:#fff; }
        .auth-footer { color:var(--muted); font-size:13px; text-align:center; margin-top:24px; }
        .auth-footer a { color:#D96A0C; font-weight:700; text-decoration:none; }
    </style>
</head>
<body>
    <main class="auth-shell">
        <a class="brand" href="../index.php">WATTSIN<span>.</span></a>
        <h1>Admin login</h1>
        <p class="intro">Sign in to manage your website gallery.</p>
        <?php if ($error): ?><div class="alert alert-danger py-2 small"><?= htmlspecialchars($error) ?></div><?php endif; ?>
        <form method="post">
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token()) ?>">
            <div class="mb-3"><label for="email">Email address</label><input class="form-control" type="email" id="email" name="email" required autocomplete="email"></div>
            <div class="mb-4"><label for="password">Password</label><input class="form-control" type="password" id="password" name="password" required autocomplete="current-password"></div>
            <button class="btn btn-orange" type="submit">Sign in <i class="fa-solid fa-arrow-right ms-2"></i></button>
        </form>
        <p class="auth-footer">New administrator? <a href="register.php">Create an account</a></p>
    </main>
</body>
</html>
