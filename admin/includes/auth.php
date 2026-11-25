<?php
session_start();

define('ADMIN_ROOT', dirname(__DIR__));
define('DATA_ROOT', ADMIN_ROOT . DIRECTORY_SEPARATOR . 'data');
define('UPLOAD_ROOT', ADMIN_ROOT . DIRECTORY_SEPARATOR . 'uploads');
define('USERS_FILE', DATA_ROOT . DIRECTORY_SEPARATOR . 'users.json');
define('GALLERY_FILE', DATA_ROOT . DIRECTORY_SEPARATOR . 'gallery.json');
define('PROJECTS_FILE', DATA_ROOT . DIRECTORY_SEPARATOR . 'projects.json');
define('ENQUIRIES_FILE', DATA_ROOT . DIRECTORY_SEPARATOR . 'enquiries.json');

function ensure_admin_storage(): void
{
    if (!is_dir(DATA_ROOT)) {
        mkdir(DATA_ROOT, 0755, true);
    }
    if (!is_dir(UPLOAD_ROOT)) {
        mkdir(UPLOAD_ROOT, 0755, true);
    }
    if (!file_exists(USERS_FILE)) {
        file_put_contents(USERS_FILE, "[]", LOCK_EX);
    }
    if (!file_exists(GALLERY_FILE)) {
        file_put_contents(GALLERY_FILE, "[]", LOCK_EX);
    }
    if (!file_exists(PROJECTS_FILE)) {
        file_put_contents(PROJECTS_FILE, "[]", LOCK_EX);
    }
    if (!file_exists(ENQUIRIES_FILE)) {
        file_put_contents(ENQUIRIES_FILE, "[]", LOCK_EX);
    }
}

function read_json_file(string $file): array
{
    ensure_admin_storage();
    $contents = file_get_contents($file);
    $data = json_decode($contents ?: '[]', true);
    return is_array($data) ? $data : [];
}

function write_json_file(string $file, array $data): bool
{
    ensure_admin_storage();
    return file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES), LOCK_EX) !== false;
}

function is_admin_logged_in(): bool
{
    return !empty($_SESSION['admin_user']);
}

function require_admin(): void
{
    if (!is_admin_logged_in()) {
        header('Location: login.php');
        exit;
    }
}

function csrf_token(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function valid_csrf_token(?string $token): bool
{
    return is_string($token) && hash_equals($_SESSION['csrf_token'] ?? '', $token);
}

function admin_flash(string $type, string $message): void
{
    $_SESSION['admin_flash'] = ['type' => $type, 'message' => $message];
}

function pull_admin_flash(): ?array
{
    $flash = $_SESSION['admin_flash'] ?? null;
    unset($_SESSION['admin_flash']);
    return $flash;
}

ensure_admin_storage();
