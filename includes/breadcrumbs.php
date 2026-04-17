<?php
if (!isset($base_path)) $base_path = "./";
if (!isset($page_title)) $page_title = "";
if (!isset($page_badge)) $page_badge = "";
if (!isset($page_subtitle)) $page_subtitle = "";

// Only show if not on home
if ($base_path === "./") {
    return;
}

$clean_title = str_replace(' - Bla Bla IPTV', '', $page_title);
?>
<section class="inner-hero">
    <div class="container container-center">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo $base_path; ?>">Início</a>
            <span class="separator">/</span>
            <span class="current"><?php echo $clean_title; ?></span>
        </nav>
        
        <?php if ($page_badge): ?>
            <div class="header-badge"><?php echo $page_badge; ?></div>
        <?php endif; ?>
        
        <h1 class="text-gradient"><?php echo $header_title ?? $clean_title; ?></h1>
        
        <?php if ($page_subtitle): ?>
            <p class="subtitle"><?php echo $page_subtitle; ?></p>
        <?php endif; ?>
    </div>
</section>
