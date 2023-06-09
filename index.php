<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Navbar/Navbar.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/components/Footer/Footer.php");
?>
<?= Navbar() ?>

<section id="home" class="page-content">
    <div class="content white-text light-text">
        <h1 class="header-title bold-text">Fraud<span class="blue-text">PHP</span>
        </h1>
        <p class="header-text text-bg text-bg-p-1">Designed to make php development faster, easier, and more enjoyable</p>
        <p class="header-sub-text m-t-10"> Start by editing the <code class="light-blue-text link text-bg text-bg-p-hlf">index.php</code> file in the root directory.</p>
        <a class="no-decoration btn white-text primary-btn m-t-10" href="custom-page">Custom Page</a>
    </div>
</section>

<?= Footer() ?>
