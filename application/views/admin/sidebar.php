		<ul class="navbar-nav sidebar sidebar-dark accordion bg_admin" id="accordionSidebar">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" target="_blank" href="<?= base_url('') ?>">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-2">
					<h6 class="pt-2">Hallo Admin</h6>
				</div>
			</a>
			<hr class="sidebar-divider my-1">
			<li class="nav-item <?= uri_string() == "admin" ? "active" : "" ?>">
				<a class="nav-link" href="<?= base_url('/admin') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>
			<hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?= uri_string() == "admin/igd" ? "active" : "" ?> <?= uri_string() == "admin/data_grafik_igd" ? "active" : "" ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-book"></i>
                    <span>IGD</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('/admin/igd') ?>">Data IGD</a>
                        <a class="collapse-item" href="<?= base_url('/admin/data_grafik_igd') ?>">Gafik IGD</a>
                    </div>
                </div>
            </li>

			<li class="nav-item <?= uri_string() == "admin/ralan" ? "active" : "" ?> <?= uri_string() == "admin/data_grafik_ralan" ? "active" : "" ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTri"
                    aria-expanded="true" aria-controls="collapseTri">
                    <i class="fas fa-book"></i>
                    <span>Rawat Jalan</span>
                </a>
                <div id="collapseTri" class="collapse" aria-labelledby="headingTri" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('/admin/ralan') ?>">Data Ralan</a>
                        <a class="collapse-item" href="<?= base_url('/admin/data_grafik_ralan') ?>">Gafik Ralan</a>
                    </div>
                </div>
            </li>

			<li class="nav-item <?= uri_string() == "admin/ranap" ? "active" : "" ?> <?= uri_string() == "admin/data_grafik_ranap" ? "active" : "" ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-book"></i>
                    <span>Rawat Inap</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('/admin/ranap') ?>">Data Ranap</a>
                        <a class="collapse-item" href="<?= base_url('/admin/data_grafik_ranap') ?>">Gafik Ranap</a>
                    </div>
                </div>
            </li>


			<hr class="sidebar-divider">
			<li class="nav-item <?= uri_string() == "admin/bangsal" ? "active" : "" ?>">
				<a class="nav-link" href="<?= base_url('/admin/bangsal') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data Bangsal</span></a>
			</li>
			<li class="nav-item <?= uri_string() == "admin/dokter" ? "active" : "" ?>">
				<a class="nav-link" href="<?= base_url('/admin/dokter') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data Dokter</span></a>
			</li>
			<li class="nav-item <?= uri_string() == "admin/spesialis" ? "active" : "" ?>">
				<a class="nav-link" href="<?= base_url('/admin/spesialis') ?>">
					<i class="fas fa-book"></i>
					<span>Lihat Data Spesialis</span></a>
			</li>
			<hr class="sidebar-divider my-1">
			<li class="nav-item <?= uri_string() == "admin/user" ? "active" : "" ?>">
				<a class="nav-link" href="<?= base_url('/admin/user') ?>">
					<i class="fas fa-user"></i>
					<span>Lihat Data User</span></a>
			</li>
			<hr class="sidebar-divider my-1">
			<li class="nav-item">
				<a href="" class="nav-link" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-sign-out-alt"></i>
					<strong>Logout</strong>
				</a>
			</li>
			<hr class="sidebar-divider">
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>