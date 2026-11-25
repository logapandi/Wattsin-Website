<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<aside class="admin-sidebar">
	<a class="admin-brand" href="dashboard.php">WATTSIN<span>.</span></a>
	<div class="admin-sidebar-label">Workspace</div>
	<nav class="admin-nav" aria-label="Admin navigation">
		<a class="<?= $currentPage === 'dashboard.php' ? 'active' : '' ?>" href="dashboard.php"><i class="fa-solid fa-chart-line"></i> Overview</a>
		<a class="<?= $currentPage === 'project-manager.php' ? 'active' : '' ?>" href="project-manager.php"><i class="fa-solid fa-briefcase"></i> Projects</a>
		<a class="<?= $currentPage === 'enquiries.php' ? 'active' : '' ?>" href="enquiries.php"><i class="fa-solid fa-inbox"></i> Enquiries</a>
		<a href="../gallery.php" target="_blank" rel="noopener"><i class="fa-solid fa-arrow-up-right-from-square"></i> View website</a>
	</nav>
	<div class="admin-sidebar-bottom">
		<div class="admin-user"><i class="fa-solid fa-circle-user"></i><span><?= htmlspecialchars($_SESSION['admin_user']['name'] ?? 'Administrator') ?></span></div>
		<a class="admin-logout" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Sign out</a>
	</div>
</aside>
