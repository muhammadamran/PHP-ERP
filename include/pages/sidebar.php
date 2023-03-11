<div class="sidebar" data-color="white" data-active-color="danger">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
    <div class="logo">
    <a href="index.php" class="simple-text logo-mini">
        <div class="logo-image-small">
            <img src="assets/img/logo/icon-rc.png">
        </div>
    </a>
    <a href="index.php" class="simple-text logo-normal">
        Rantau Corp
    </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="<?= empty($_GET['m']) ? 'active' : '' ?>">
                <a href="index.php">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'user' ? 'active' : '' ?>">
                <a href="index.php?m=user&s=user">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Users</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'banner' ? 'active' : '' ?>">
                <a href="index.php?m=banner&s=banner">
                    <i class="nc-icon nc-image"></i>
                    <p>Banner</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'galeri' ? 'active' : '' ?>">
                <a href="index.php?m=galeri&s=galeri">
                    <i class="nc-icon nc-album-2"></i>
                    <p>Galeri</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'video' ? 'active' : '' ?>">
                <a href="index.php?m=video&s=video">
                    <i class="nc-icon nc-button-play"></i>
                    <p>Video</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'kategori' ? 'active' : '' ?>">
                <a href="index.php?m=kategori&s=kategori">
                    <i class="nc-icon nc-paper"></i>
                    <p>Kategori</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'blog' && $_GET['tipe'] == 'program' ? 'active' : '' ?>">
                <a href="index.php?m=blog&s=blog&tipe=program">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>Program</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'blog' && $_GET['tipe'] == 'news-artikel' ? 'active' : '' ?>">
                <a href="index.php?m=blog&s=blog&tipe=news-artikel">
                    <i class="nc-icon nc-bullet-list-67"></i>
                    <p>News & Artikel</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'podcast' ? 'active' : '' ?>">
                <a href="index.php?m=podcast&s=podcast">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>Podcast</p>
                </a>
            </li>
            <li class="<?= !empty($_GET['m']) && $_GET['m'] == 'repo' ? 'active' : '' ?>">
                <a href="index.php?m=repo&s=repo">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>Repository</p>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="nc-icon nc-button-power"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>