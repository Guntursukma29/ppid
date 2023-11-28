<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
    <div class="sidebar-brand-icon ">
        <i class="fas fa-user"></i>
    </div>
    <div class="sidebar-brand-text mx-3">PPID</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link <?php if($this->uri->segment(1) == 'admin') echo 'active' ?>" href="<?= base_url('admin'); ?>">
    <i class="fas fa-info-circle"></i>
        <span>Informasi Terbaru</span></a>
</li>
<li class="nav-item">
    <a class="nav-link <?php if($this->uri->segment(1) == 'visimisi') echo 'active' ?>" href="<?= base_url('visimisi'); ?>">
    <i class="fas fa-bullseye"></i>
        <span>Visi Misi</span></a>
</li>
<li class="nav-item">
    <a class="nav-link <?php if($this->uri->segment(1) == 'p_informasi') echo 'active' ?>" href="<?= base_url('p_informasi/index'); ?>">
    <i class="fas fa-question-circle"></i>
        <span>Permohonan Informasi</span></a>
</li>
<li class="nav-item">
    <a class="nav-link <?php if($this->uri->segment(1) == 'p_sengketa') echo 'active' ?>" href="<?= base_url('p_sengketa/index'); ?>">
    <i class="fas fa-question-circle"></i>
        <span>Permohonan Sengketa</span></a>
</li>
<li class="nav-item">
    <a class="nav-link <?php if($this->uri->segment(1) == 'p_keberatan') echo 'active' ?>" href="<?= base_url('p_keberatan/index'); ?>">
    <i class="fas fa-question-circle"></i>
        <span>Permohonan Keberatan</span></a>
</li>



<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('user'); ?>"">
        <i class="fas fa-fw fa-user"></i>    
        <span>Admin</span></a>
</li>

<hr class="sidebar-divider ">

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('auth/logout') ?>">
        <i class="fas fa-fw fa-sign-out-alt"></i>    
        <span>Logout</span></a>
</li>

<!-- Nav Item - Tables -->

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->