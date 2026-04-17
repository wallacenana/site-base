<?php
if (!isset($base_path))
    $base_path = "./";
$active_page = basename(dirname($_SERVER['PHP_SELF']));
if ($base_path === "./")
    $active_page = "home";
?>
<header class="main-header">
    <div class="header-content">
        <div class="logo">
            Stream<span style="color: #20c997;">Flow</span>
        </div>
        <nav class="nav-menu">
            <a class="nav-link <?php echo ($active_page === 'home') ? 'active' : ''; ?>" href="<?php echo $base_path; ?>">Início</a>
            <a class="nav-link <?php echo ($active_page === 'canais') ? 'active' : ''; ?>" href="<?php echo $base_path; ?>canais/">Canais</a>
            <a class="nav-link <?php echo ($active_page === 'planos') ? 'active' : ''; ?>" href="<?php echo $base_path; ?>planos/">Planos</a>
            <a class="nav-link <?php echo ($active_page === 'teste-gratis') ? 'active' : ''; ?>" href="<?php echo $base_path; ?>teste-gratis/">Teste Grátis</a>
            <a class="nav-link <?php echo ($active_page === 'faq') ? 'active' : ''; ?>" href="<?php echo $base_path; ?>faq/">FAQ</a>
        </nav>
        <div class="nav-actions">
            <a href="<?php echo $base_path; ?>teste-gratis/" class="btn btn-primary">Teste Grátis</a>
        </div>
    </div>
</header>
