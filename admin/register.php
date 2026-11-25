<?php
require_once __DIR__ . '/includes/auth.php';

if (is_admin_logged_in()) {
    header('Location: dashboard.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = strtolower(trim($_POST['email'] ?? ''));
    $password = (string) ($_POST['password'] ?? '');
    $confirm = (string) ($_POST['confirm_password'] ?? '');
    $users = read_json_file(USERS_FILE);

    if (!valid_csrf_token($_POST['csrf_token'] ?? null)) {
        $error = 'Your session expired. Please try again.';
    } elseif ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid name and email address.';
    } elseif (strlen($password) < 8) {
        $error = 'Password must be at least 8 characters.';
    } elseif ($password !== $confirm) {
        $error = 'Passwords do not match.';
    } elseif (count(array_filter($users, static fn ($user) => strtolower($user['email'] ?? '') === $email)) > 0) {
        $error = 'An account with this email already exists.';
    } else {
        $users[] = ['name' => $name, 'email' => $email, 'password' => password_hash($password, PASSWORD_DEFAULT), 'created_at' => date('c')];
        if (write_json_file(USERS_FILE, $users)) {
            header('Location: login.php?registered=1');
            exit;
        }
        $error = 'Unable to create the account. Check folder permissions.';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Wattsin Technologies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root { --navy:#0A192F; --orange:#F58220; --muted:#64748B; }
        * { box-sizing:border-box; }
        body { min-height:100vh; margin:0; display:grid; place-items:center; font-family:'Plus Jakarta Sans',Arial,sans-serif; background:linear-gradient(135deg,#071326,#172A45); }
        .auth-shell { width:min(460px,92%); padding:42px; background:#fff; border-radius:10px; box-shadow:0 25px 70px rgba(0,0,0,.25); }
        .brand { color:var(--navy); font-size:22px; font-weight:800; text-decoration:none; }.brand span { color:var(--orange); }
        h1 { color:var(--navy); font-size:28px; font-weight:800; margin:34px 0 8px; }.intro,.auth-footer { color:var(--muted); font-size:14px; }
        .intro { margin-bottom:28px; } label { color:var(--navy); font-size:12px; font-weight:700; margin-bottom:8px; }
        .form-control { min-height:48px; border-color:#E2E8F0; box-shadow:none; }.form-control:focus { border-color:var(--orange); box-shadow:0 0 0 3px rgba(245,130,32,.13); }
        .btn-orange { width:100%; padding:13px; border:0; background:var(--orange); color:#fff; font-weight:700; }.btn-orange:hover { background:#D96A0C; color:#fff; }
        .auth-footer { text-align:center; margin:24px 0 0; }.auth-footer a { color:#D96A0C; font-weight:700; text-decoration:none; }
    </style>
</head>
<body>
    <main class="auth-shell">
        <a class="brand" href="../index.php">WATTSIN<span>.</span></a>
        <h1>Create admin account</h1>
        <p class="intro">Register an account to access gallery management.</p>
        <?php if ($error): ?><div class="alert alert-danger py-2 small"><?= htmlspecialchars($error) ?></div><?php endif; ?>
        <form method="post">
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token()) ?>">
            <div class="mb-3"><label for="name">Full name</label><input class="form-control" type="text" id="name" name="name" required autocomplete="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"></div>
            <div class="mb-3"><label for="email">Email address</label><input class="form-control" type="email" id="email" name="email" required autocomplete="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"></div>
            <div class="mb-3"><label for="password">Password</label><input class="form-control" type="password" id="password" name="password" required minlength="8" autocomplete="new-password"></div>
            <div class="mb-4"><label for="confirm_password">Confirm password</label><input class="form-control" type="password" id="confirm_password" name="confirm_password" required minlength="8" autocomplete="new-password"></div>
            <button class="btn btn-orange" type="submit">Create account</button>
        </form>
        <p class="auth-footer">Already registered? <a href="login.php">Sign in</a></p>
    </main>
</body>
</html>
