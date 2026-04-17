<?php
if (!isset($page_title)) $page_title = "Bla Bla IPTV - Streaming Premium";
if (!isset($base_path)) $base_path = "./";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="Bla Bla IPTV oferece IPTV premium com qualidade HD, Full HD e 4K. Assista em qualquer lugar com estabilidade e suporte 24h.">
    <meta name="keywords" content="IPTV, Bla Bla IPTV, Teste IPTV, Internet Protocol Television, TV por internet, IPTV grátis, teste IPTV grátis, canais IPTV, IPTV 4K, IPTV HD, Smart TV IPTV, TV Box IPTV, IPTV Brasil">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="Bla Bla IPTV">
    <meta name="language" content="Portuguese">
    <meta name="theme-color" content="#0a0a0c">
    <link rel="canonical" href="https://blablachampanheria.com.br/">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $base_path; ?>assets/img/favicon.png">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://blablachampanheria.com.br/">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="A melhor experiência de TV e Streaming em alta definição com Bla Bla IPTV.">
    <meta property="og:image" content="<?php echo $base_path; ?>assets/img/preview.jpg">
    <meta property="og:site_name" content="Bla Bla IPTV">
    <meta property="og:locale" content="pt_BR">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://blablachampanheria.com.br/">
    <meta property="twitter:title" content="<?php echo $page_title; ?>">
    <meta property="twitter:description" content="A melhor experiência de TV e Streaming em alta definição.">
    <meta property="twitter:image" content="<?php echo $base_path; ?>assets/img/preview.jpg">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    [{
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Bla Bla IPTV",
      "url": "https://blablachampanheria.com.br",
      "logo": "https://blablachampanheria.com.br/assets/img/favicon.png",
      "description": "Serviço de IPTV premium com teste gratuito, canais ao vivo, filmes e séries em HD, Full HD e 4K.",
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
      "name": "Bla Bla IPTV",
      "url": "https://blablachampanheria.com.br",
      "description": "Bla Bla IPTV - O melhor do IPTV Premium e Streaming de alta qualidade.",
      "inLanguage": "pt-BR"
    }, {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "<?php echo $page_title; ?>",
      "description": "Guia completo sobre IPTV e Teste IPTV gratuito com Bla Bla IPTV.",
      "url": "https://blablachampanheria.com.br",
      "inLanguage": "pt-BR"
    }, {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "IPTV Premium Bla Bla IPTV",
      "description": "Serviço de televisão por protocolo de internet (IPTV) com canais ao vivo, filmes, séries em HD, Full HD e 4K.",
      "provider": {
        "@type": "Organization",
        "name": "Bla Bla IPTV"
      },
      "serviceType": "Streaming de TV por Internet",
      "areaServed": {
        "@type": "Country",
        "name": "Brasil"
      }
    }, {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "O que é IPTV e como ele funciona?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "IPTV significa Internet Protocol Television (Televisão por Protocolo de Internet). É uma tecnologia que transmite conteúdo televisivo através da internet. O Bla Bla IPTV oferece canais ao vivo, filmes, séries e conteúdo sob demanda com qualidade superior."
        }
      }, {
        "@type": "Question",
        "name": "O que é Teste IPTV e como solicitar?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Teste IPTV é um período de avaliação gratuito. Para solicitar na Bla Bla IPTV, basta entrar em contato via WhatsApp e pedir seu acesso gratuito de poucas horas para avaliar nossa qualidade."
        }
      }, {
        "@type": "Question",
        "name": "O IPTV funciona em Smart TV Samsung e LG?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Sim, a Bla Bla IPTV é compatível com Smart TVs Samsung, LG, Android TV, Fire Stick, TV Box e smartphones."
        }
      }]
    }, {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://blablachampanheria.com.br"
      }]
    }]
    </script>

    <link rel="preload" as="image" href="<?php echo $base_path; ?>assets/hero-streaming.jpg">
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/app.css?v=<?php echo time(); ?>">
</head>
<body>
