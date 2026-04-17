<?php
if (!isset($base_path))
    $base_path = "./";
$active_page = basename(dirname($_SERVER['PHP_SELF']));
if ($base_path === "./")
    $active_page = "home";
?>
<header class="main-header">
    <div class="top-bar">
        🎬 OFERTA ESPECIAL: Primeiro mês com <strong>50% OFF</strong> em todos os planos StreamFlow — Aproveite!
    </div>
    <nav class="container nav-container">
        <a class="logo" href="<?php echo $base_path; ?>">
            <img src="<?php echo $base_path; ?>assets/img/logo.png" alt="StreamFlow"
                style="height: 28px; width: auto; margin-right: 8px;">
            <span>Stream<span class="text-primary">Flow</span></span>
        </a>
        <div class="nav-links">
            <a class="nav-link <?php echo ($active_page === 'home') ? 'active' : ''; ?>"
                href="<?php echo $base_path; ?>">Início</a>
            <a class="nav-link <?php echo ($active_page === 'canais') ? 'active' : ''; ?>"
                href="<?php echo $base_path; ?>canais/">Canais</a>
            <a class="nav-link <?php echo ($active_page === 'planos') ? 'active' : ''; ?>"
                href="<?php echo $base_path; ?>planos/">Planos</a>
            <a class="nav-link <?php echo ($active_page === 'teste-gratis') ? 'active' : ''; ?>"
                href="<?php echo $base_path; ?>teste-gratis/">Teste Grátis</a>
            <a class="nav-link <?php echo ($active_page === 'dispositivos') ? 'active' : ''; ?>"
                href="<?php echo $base_path; ?>dispositivos/">Dispositivos</a>
            <a class="nav-link <?php echo ($active_page === 'faq') ? 'active' : ''; ?>"
                href="<?php echo $base_path; ?>faq/">FAQ</a>
        </div>
        <div class="nav-actions">
            <a href="./planos/" class="btn btn-primary btn-header hide-mobile">
                Assine Agora
            </a>
            <button class="menu-toggle" aria-label="Abrir menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </nav>
</header>
