<?php
if (!isset($page_title)) $page_title = "StreamFlow - Entretenimento Sem Limites";
if (!isset($base_path)) $base_path = "./";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="StreamFlow oferece entretenimento premium com qualidade HD, Full HD e 4K. Assista em qualquer lugar com estabilidade e suporte 24h;">
    <meta name="keywords" content="StreamFlow, Streaming, Teste Grátis, Entretenimento Digital, TV por internet, Filmes, Séries, Canais ao Vivo, 4K, HD, Smart TV, TV Box">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="StreamFlow">
    <meta name="language" content="Portuguese">
    <meta name="theme-color" content="#0a0a0c">
    <link rel="canonical" href="https://streamflow.com.br/">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $base_path; ?>assets/img/favicon.png">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://streamflow.com.br/">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="A melhor experiência de TV e Streaming em alta definição com StreamFlow.">
    <meta property="og:image" content="<?php echo $base_path; ?>assets/img/preview.jpg">
    <meta property="og:site_name" content="StreamFlow">
    <meta property="og:locale" content="pt_BR">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://streamflow.com.br/">
    <meta property="twitter:title" content="<?php echo $page_title; ?>">
    <meta property="twitter:description" content="A melhor experiência de TV e Streaming em alta definição.">
    <meta property="twitter:image" content="<?php echo $base_path; ?>assets/img/preview.jpg">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    [{
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "StreamFlow",
      "url": "https://streamflow.com.br",
      "logo": "https://streamflow.com.br/assets/img/favicon.png",
      "description": "Serviço de streaming premium com teste gratuito, canais ao vivo, filmes e séries em HD, Full HD e 4K.",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+554896987888",
        "contactType": "customer service",
        "availableLanguage": "Portuguese",
        "areaServed": "BR"
      }
    }, {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "StreamFlow",
      "url": "https://streamflow.com.br",
      "description": "StreamFlow - O melhor do IPTV Premium e Streaming de alta qualidade.",
      "inLanguage": "pt-BR"
    }, {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "<?php echo $page_title; ?>",
      "description": "Guia completo sobre StreamFlow e Teste Grátis.",
      "url": "https://streamflow.com.br",
      "inLanguage": "pt-BR"
    }, {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "StreamFlow Premium",
      "description": "Serviço de streaming de TV por internet com canais ao vivo, filmes, séries em HD, Full HD e 4K.",
      "provider": {
        "@type": "Organization",
        "name": "StreamFlow"
      },
      "serviceType": "Streaming de Entretenimento Digital",
      "areaServed": {
        "@type": "Country",
        "name": "Brasil"
      }
    }, {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://streamflow.com.br"
      }]
    }]
    </script>
    <script type="application/ld+json">
    <?php include_once "../faq_json_ld.json"; ?>
    </script>

    <link rel="preload" as="image" href="<?php echo $base_path; ?>assets/hero-streaming.jpg">
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/style_premium.css?v=<?php echo time(); ?>">
</head>
<body>
