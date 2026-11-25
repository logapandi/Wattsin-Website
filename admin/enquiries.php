<?php
require_once __DIR__ . '/includes/auth.php';
require_admin();

if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    $enquiries = read_json_file(ENQUIRIES_FILE);
    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="wattsin-enquiries-' . date('Y-m-d') . '.csv"');
    echo "\xEF\xBB\xBF";
    $output = fopen('php://output', 'w');
    fputcsv($output, ['ID', 'Date', 'Name', 'Email', 'Phone', 'Service', 'Message', 'Source']);
    foreach ($enquiries as $enquiry) {
        fputcsv($output, [$enquiry['id'] ?? '', $enquiry['created_at'] ?? '', $enquiry['name'] ?? '', $enquiry['email'] ?? '', $enquiry['phone'] ?? '', $enquiry['service'] ?? '', $enquiry['message'] ?? '', $enquiry['source'] ?? '']);
    }
    fclose($output);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && valid_csrf_token($_POST['csrf_token'] ?? null) && ($_POST['action'] ?? '') === 'delete') {
    $enquiries = array_values(array_filter(read_json_file(ENQUIRIES_FILE), static fn ($enquiry) => ($enquiry['id'] ?? '') !== (string) ($_POST['id'] ?? '')));
    write_json_file(ENQUIRIES_FILE, $enquiries);
    admin_flash('success', 'Enquiry deleted.');
    header('Location: enquiries.php');
    exit;
}

$enquiries = read_json_file(ENQUIRIES_FILE);
$flash = pull_admin_flash();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enquiries | Wattsin Technologies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <style>
        :root { --navy:#0A192F; --orange:#F58220; --ink:#0F172A; --muted:#64748B; --line:#E2E8F0; }
        * { box-sizing:border-box; } body { margin:0; background:#F8FAFC; color:var(--ink); font-family:'Plus Jakarta Sans',Arial,sans-serif; }.admin-app { min-height:100vh; display:flex; }.admin-sidebar { width:250px; flex:0 0 250px; min-height:100vh; display:flex; flex-direction:column; padding:30px 18px; color:#fff; background:var(--navy); }.admin-brand { color:#fff; font-size:23px; font-weight:800; text-decoration:none; padding:0 15px 44px; }.admin-brand span { color:var(--orange); }.admin-sidebar-label { color:#8090A5; font-size:10px; font-weight:800; letter-spacing:1.5px; text-transform:uppercase; padding:0 15px 12px; }.admin-nav { display:grid; gap:5px; }.admin-nav a,.admin-logout { display:flex; align-items:center; gap:12px; color:#B9C4D2; padding:12px 15px; border-radius:6px; font-size:13px; text-decoration:none; }.admin-nav a:hover,.admin-nav a.active,.admin-logout:hover { color:#fff; background:rgba(245,130,32,.15); }.admin-nav i,.admin-logout i { color:var(--orange); width:17px; text-align:center; }.admin-sidebar-bottom { margin-top:auto; border-top:1px solid rgba(255,255,255,.1); padding-top:20px; }.admin-user { display:flex; align-items:center; gap:10px; color:#D4DCE6; font-size:12px; padding:0 15px 17px; }.admin-user i { color:var(--orange); font-size:20px; }.admin-main { min-width:0; flex:1; padding:42px clamp(22px,4vw,60px); }.admin-topbar { display:flex; align-items:flex-start; justify-content:space-between; gap:20px; margin-bottom:32px; }.admin-topbar h1 { color:var(--navy); font-size:30px; font-weight:800; margin:0 0 6px; }.admin-topbar p { color:var(--muted); font-size:14px; margin:0; }.export-btn { display:inline-flex; align-items:center; gap:9px; padding:11px 16px; color:#fff; background:var(--orange); border-radius:5px; font-size:13px; font-weight:700; text-decoration:none; }.export-btn:hover { color:#fff; background:#D96A0C; }.inbox-card { overflow:hidden; background:#fff; border:1px solid var(--line); border-radius:8px; box-shadow:0 10px 26px rgba(10,25,47,.04); }.inbox-table { width:100%; margin:0; border-collapse:collapse; }.inbox-table th { padding:15px 18px; color:#64748B; background:#F8FAFC; font-size:11px; text-align:left; letter-spacing:.5px; text-transform:uppercase; white-space:nowrap; }.inbox-table td { padding:18px; border-top:1px solid var(--line); color:var(--muted); font-size:13px; vertical-align:top; }.inbox-table td strong { display:block; color:var(--ink); margin-bottom:5px; }.inbox-table a { color:#D96A0C; text-decoration:none; }.enquiry-message { min-width:220px; max-width:360px; line-height:1.6; }.enquiry-service { color:#D96A0C; font-weight:700; white-space:nowrap; }.delete-btn { border:0; color:#94A3B8; background:transparent; }.delete-btn:hover { color:#DC2626; }.empty-inbox { padding:70px 20px; color:var(--muted); text-align:center; }.empty-inbox i { display:block; color:var(--orange); font-size:34px; margin-bottom:15px; }
        @media (max-width:800px) { .admin-sidebar { width:70px; flex-basis:70px; padding:25px 8px; }.admin-brand { font-size:0; text-align:center; padding:0 0 40px; }.admin-brand::before { content:'W'; color:var(--orange); font-size:24px; }.admin-sidebar-label,.admin-nav a,.admin-logout,.admin-user span { font-size:0; justify-content:center; padding-left:8px; padding-right:8px; }.admin-nav a i,.admin-logout i { font-size:16px; }.admin-user { justify-content:center; padding-left:0; padding-right:0; }.admin-main { padding:28px 17px; }.admin-topbar { align-items:flex-start; flex-direction:column; }.admin-topbar h1 { font-size:24px; }.inbox-card { overflow-x:auto; }.inbox-table { min-width:800px; } }
    </style>
</head>
<body><div class="admin-app"><?php include __DIR__ . '/includes/sidebar.php'; ?><main class="admin-main"><header class="admin-topbar"><div><h1>Enquiries</h1><p>Every website form submission is collected here.</p></div><a class="export-btn" href="enquiries.php?export=csv"><i class="fa-solid fa-file-excel"></i> Export Excel CSV</a></header><?php if ($flash): ?><div class="alert alert-<?= htmlspecialchars($flash['type']) ?> small"><?= htmlspecialchars($flash['message']) ?></div><?php endif; ?><?php if (!$enquiries): ?><section class="inbox-card empty-inbox"><i class="fa-regular fa-envelope-open"></i>No enquiries received yet.</section><?php else: ?><section class="inbox-card"><table class="inbox-table"><thead><tr><th>Date</th><th>Contact</th><th>Service</th><th>Message</th><th>Source</th><th></th></tr></thead><tbody><?php foreach ($enquiries as $enquiry): ?><tr><td><?= htmlspecialchars(date('d M Y, h:i A', strtotime($enquiry['created_at'] ?? 'now'))) ?></td><td><strong><?= htmlspecialchars($enquiry['name'] ?? '') ?></strong><a href="mailto:<?= htmlspecialchars($enquiry['email'] ?? '') ?>"><?= htmlspecialchars($enquiry['email'] ?? '') ?></a><br><?= htmlspecialchars($enquiry['phone'] ?? '') ?></td><td class="enquiry-service"><?= htmlspecialchars($enquiry['service'] ?? '') ?></td><td class="enquiry-message"><?= nl2br(htmlspecialchars($enquiry['message'] ?? '')) ?></td><td><?= htmlspecialchars($enquiry['source'] ?? 'website') ?></td><td><form method="post" onsubmit="return confirm('Delete this enquiry?');"><input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token()) ?>"><input type="hidden" name="action" value="delete"><input type="hidden" name="id" value="<?= htmlspecialchars($enquiry['id'] ?? '') ?>"><button class="delete-btn" type="submit" aria-label="Delete enquiry"><i class="fa-solid fa-trash"></i></button></form></td></tr><?php endforeach; ?></tbody></table></section><?php endif; ?></main></div></body></html>
