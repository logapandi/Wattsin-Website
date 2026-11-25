<?php
require_once __DIR__ . '/includes/auth.php';
require_admin();

$categories = ['Commercial', 'Industrial', 'Infrastructure', 'Electrical Panels', 'Lighting', 'Testing & Commissioning', 'Other'];
$allowedMimeTypes = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/gif' => 'gif', 'image/webp' => 'webp', 'video/mp4' => 'mp4', 'video/webm' => 'webm', 'video/ogg' => 'ogv'];
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (!valid_csrf_token($_POST['csrf_token'] ?? null)) {
		$error = 'Your session expired. Please refresh and try again.';
	} elseif (($_POST['action'] ?? '') === 'delete') {
		$gallery = read_json_file(GALLERY_FILE);
		$id = (string) ($_POST['id'] ?? '');
		foreach ($gallery as $index => $item) {
			if (($item['id'] ?? '') === $id) {
				$file = UPLOAD_ROOT . DIRECTORY_SEPARATOR . basename($item['file'] ?? '');
				if (is_file($file)) { unlink($file); }
				unset($gallery[$index]);
				write_json_file(GALLERY_FILE, array_values($gallery));
				admin_flash('success', 'Gallery item deleted.');
				header('Location: dashboard.php');
				exit;
			}
		}
		$error = 'Gallery item not found.';
	} elseif (($_POST['action'] ?? '') === 'upload') {
		$title = trim($_POST['title'] ?? '');
		$category = trim($_POST['category'] ?? '');
		$upload = $_FILES['media'] ?? null;
		if ($title === '' || !in_array($category, $categories, true)) {
			$error = 'Enter a title and select a valid category.';
		} elseif (!$upload || $upload['error'] !== UPLOAD_ERR_OK) {
			$error = 'Choose an image or video file to upload.';
		} elseif ($upload['size'] > 50 * 1024 * 1024) {
			$error = 'Files must be 50 MB or smaller.';
		} else {
			$mime = (new finfo(FILEINFO_MIME_TYPE))->file($upload['tmp_name']);
			if (!isset($allowedMimeTypes[$mime])) {
				$error = 'That file type is not supported.';
			} else {
				$type = str_starts_with($mime, 'video/') ? 'video' : 'image';
				$filename = bin2hex(random_bytes(16)) . '.' . $allowedMimeTypes[$mime];
				if (!move_uploaded_file($upload['tmp_name'], UPLOAD_ROOT . DIRECTORY_SEPARATOR . $filename)) {
					$error = 'Upload failed. Check the admin/uploads folder permissions.';
				} else {
					$gallery = read_json_file(GALLERY_FILE);
					array_unshift($gallery, ['id' => bin2hex(random_bytes(12)), 'title' => $title, 'category' => $category, 'type' => $type, 'file' => 'admin/uploads/' . $filename, 'created_at' => date('c')]);
					write_json_file(GALLERY_FILE, $gallery);
					admin_flash('success', 'Gallery item uploaded successfully.');
					header('Location: dashboard.php');
					exit;
				}
			}
		}
	}
}

$gallery = read_json_file(GALLERY_FILE);
$flash = pull_admin_flash();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery Dashboard | Wattsin Technologies</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
	<style>
		:root { --navy:#0A192F; --navy-light:#172A45; --orange:#F58220; --ink:#0F172A; --muted:#64748B; --line:#E2E8F0; }
		* { box-sizing:border-box; } body { margin:0; background:#F8FAFC; color:var(--ink); font-family:'Plus Jakarta Sans',Arial,sans-serif; }
		.admin-app { min-height:100vh; display:flex; }.admin-sidebar { width:250px; flex:0 0 250px; min-height:100vh; display:flex; flex-direction:column; padding:30px 18px; color:#fff; background:var(--navy); }.admin-brand { color:#fff; font-size:23px; font-weight:800; text-decoration:none; padding:0 15px 44px; }.admin-brand span { color:var(--orange); }.admin-sidebar-label { color:#8090A5; font-size:10px; font-weight:800; letter-spacing:1.5px; text-transform:uppercase; padding:0 15px 12px; }.admin-nav { display:grid; gap:5px; }.admin-nav a,.admin-logout { display:flex; align-items:center; gap:12px; color:#B9C4D2; padding:12px 15px; border-radius:6px; font-size:13px; text-decoration:none; transition:.2s ease; }.admin-nav a:hover,.admin-nav a.active,.admin-logout:hover { color:#fff; background:rgba(245,130,32,.15); }.admin-nav i,.admin-logout i { color:var(--orange); width:17px; text-align:center; }.admin-sidebar-bottom { margin-top:auto; border-top:1px solid rgba(255,255,255,.1); padding-top:20px; }.admin-user { display:flex; align-items:center; gap:10px; color:#D4DCE6; font-size:12px; padding:0 15px 17px; }.admin-user i { color:var(--orange); font-size:20px; }.admin-main { min-width:0; flex:1; padding:42px clamp(22px,4vw,60px); }.admin-topbar { display:flex; align-items:flex-start; justify-content:space-between; gap:20px; margin-bottom:32px; }.admin-topbar h1 { color:var(--navy); font-size:30px; font-weight:800; margin:0 0 6px; }.admin-topbar p { color:var(--muted); font-size:14px; margin:0; }.admin-view-link { color:var(--orange); font-size:13px; font-weight:700; text-decoration:none; }.admin-card { background:#fff; border:1px solid var(--line); border-radius:8px; padding:28px; box-shadow:0 10px 26px rgba(10,25,47,.04); }.admin-card h2 { color:var(--navy); font-size:20px; font-weight:800; margin:0 0 6px; }.admin-card-intro { color:var(--muted); font-size:13px; margin:0 0 24px; }.form-label { color:var(--ink); font-size:12px; font-weight:700; }.form-control,.form-select { min-height:46px; border-color:var(--line); border-radius:5px; box-shadow:none; font-size:13px; }.form-control:focus,.form-select:focus { border-color:var(--orange); box-shadow:0 0 0 3px rgba(245,130,32,.12); }.upload-btn { border:0; padding:12px 20px; background:var(--orange); color:#fff; border-radius:5px; font-size:13px; font-weight:700; }.upload-btn:hover { background:#D96A0C; }.media-summary { display:flex; align-items:center; justify-content:space-between; margin:40px 0 18px; }.media-summary h2 { color:var(--navy); font-size:21px; font-weight:800; margin:0; }.media-count { color:var(--muted); font-size:13px; }.media-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(230px,1fr)); gap:18px; }.media-card { overflow:hidden; background:#fff; border:1px solid var(--line); border-radius:7px; }.media-preview { height:160px; display:grid; place-items:center; overflow:hidden; color:#fff; background:var(--navy-light); }.media-preview img,.media-preview video { width:100%; height:100%; object-fit:cover; }.video-placeholder { font-size:34px; color:var(--orange); }.media-copy { padding:15px; }.media-copy h3 { color:var(--ink); font-size:14px; font-weight:700; margin:0 0 8px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }.media-meta { display:flex; align-items:center; justify-content:space-between; gap:7px; color:var(--muted); font-size:11px; }.media-category { color:#D96A0C; font-weight:700; }.delete-btn { border:0; background:transparent; color:#94A3B8; padding:0; }.delete-btn:hover { color:#DC2626; }.empty-media { padding:50px 20px; color:var(--muted); text-align:center; background:#fff; border:1px dashed #CBD5E1; border-radius:7px; }.empty-media i { color:var(--orange); font-size:30px; margin-bottom:12px; }
		@media (max-width:800px) { .admin-sidebar { width:70px; flex-basis:70px; padding:25px 8px; }.admin-brand { font-size:0; text-align:center; padding:0 0 40px; }.admin-brand::before { content:'W'; color:var(--orange); font-size:24px; }.admin-sidebar-label,.admin-nav a,.admin-logout,.admin-user span { font-size:0; justify-content:center; padding-left:8px; padding-right:8px; }.admin-nav a i,.admin-logout i { font-size:16px; }.admin-user { justify-content:center; padding-left:0; padding-right:0; }.admin-main { padding:28px 17px; }.admin-topbar h1 { font-size:24px; }.admin-card { padding:20px; } }
	</style>
</head>
<body>
<div class="admin-app">
	<?php include __DIR__ . '/includes/sidebar.php'; ?>
	<main class="admin-main">
		<header class="admin-topbar"><div><h1>Gallery dashboard</h1><p>Manage the images and videos shown on your website.</p></div><a class="admin-view-link" href="../gallery.php" target="_blank" rel="noopener">Open live gallery <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i></a></header>
		<?php if ($error): ?><div class="alert alert-danger small"><?= htmlspecialchars($error) ?></div><?php endif; ?>
		<?php if ($flash): ?><div class="alert alert-<?= htmlspecialchars($flash['type']) ?> small"><?= htmlspecialchars($flash['message']) ?></div><?php endif; ?>
		<section class="admin-card" aria-labelledby="upload-title"><h2 id="upload-title">Add gallery media</h2><p class="admin-card-intro">Upload an image or video, then add a title and category for website filtering.</p>
			<form method="post" enctype="multipart/form-data"><input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token()) ?>"><input type="hidden" name="action" value="upload"><div class="row g-3 align-items-end"><div class="col-lg-4"><label class="form-label" for="media">Image or video *</label><input class="form-control" type="file" id="media" name="media" accept="image/jpeg,image/png,image/gif,image/webp,video/mp4,video/webm,video/ogg" required></div><div class="col-lg-3"><label class="form-label" for="title">Title *</label><input class="form-control" type="text" id="title" name="title" maxlength="120" required></div><div class="col-lg-3"><label class="form-label" for="category">Category *</label><select class="form-select" id="category" name="category" required><option value="" selected disabled>Select category</option><?php foreach ($categories as $category): ?><option value="<?= htmlspecialchars($category) ?>"><?= htmlspecialchars($category) ?></option><?php endforeach; ?></select></div><div class="col-lg-2"><button class="upload-btn w-100" type="submit"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Upload</button></div></div></form>
		</section>
		<div class="media-summary"><h2>Published media</h2><span class="media-count"><?= count($gallery) ?> item<?= count($gallery) === 1 ? '' : 's' ?></span></div>
		<?php if (!$gallery): ?><div class="empty-media"><i class="fa-regular fa-images d-block"></i>No gallery media yet. Upload your first project image or video above.</div><?php else: ?><div class="media-grid"><?php foreach ($gallery as $item): ?><article class="media-card"><div class="media-preview"><?php if (($item['type'] ?? '') === 'video'): ?><video src="../<?= htmlspecialchars($item['file']) ?>" controls preload="metadata"></video><?php else: ?><img src="../<?= htmlspecialchars($item['file']) ?>" alt="<?= htmlspecialchars($item['title']) ?>"><?php endif; ?></div><div class="media-copy"><h3 title="<?= htmlspecialchars($item['title']) ?>"><?= htmlspecialchars($item['title']) ?></h3><div class="media-meta"><span class="media-category"><?= htmlspecialchars($item['category']) ?></span><form method="post" onsubmit="return confirm('Delete this gallery item?');"><input type="hidden" name="csrf_token" value="<?= htmlspecialchars(csrf_token()) ?>"><input type="hidden" name="action" value="delete"><input type="hidden" name="id" value="<?= htmlspecialchars($item['id']) ?>"><button class="delete-btn" type="submit" aria-label="Delete <?= htmlspecialchars($item['title']) ?>"><i class="fa-solid fa-trash"></i></button></form></div></div></article><?php endforeach; ?></div><?php endif; ?>
	</main>
</div>
</body>
</html>
