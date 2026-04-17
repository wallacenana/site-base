<?php
$page_title = "Teste Grátis - Bla Bla IPTV";
$page_badge = "Teste Gratuito";
$header_title = "Teste IPTV <span class='text-primary'>Grátis por 6 Horas</span>";
$page_subtitle = "Experimente a melhor lista do Brasil sem travar. Tenha acesso a todos os canais, filmes e séries agora mesmo.";
$base_path = "../";
include_once '../includes/cache.php';
include_once '../includes/head.php';
include_once '../includes/header.php';
?>

<main>
    <?php
    if (!isset($base_path))
        $base_path = "./";
    if (!isset($page_title))
        $page_title = "";
    if (!isset($page_badge))
        $page_badge = "";
    if (!isset($page_subtitle))
        $page_subtitle = "";

    // Only show if not on home
    if ($base_path === "./") {
        return;
    }

    $clean_title = str_replace(' - Bla Bla IPTV', '', $page_title);
    ?>
    <div class="bg-surface">
        <section class="inner-hero">

            <div class="container container-center">
                <nav class="breadcrumbs" aria-label="Breadcrumb">
                    <a href="<?php echo $base_path; ?>">Início</a>
                    <span class="separator">/</span>
                    <span class="current">
                        <?php echo $clean_title; ?>
                    </span>
                </nav>

                <?php if ($page_badge): ?>
                    <div class="header-badge">
                        <?php echo $page_badge; ?>
                    </div>
                <?php endif; ?>

                <h1 class="text-gradient">
                    <?php echo $header_title ?? $clean_title; ?>
                </h1>

                <?php if ($page_subtitle): ?>
                    <p class="subtitle">
                        <?php echo $page_subtitle; ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="container text-center mt-4">
                <div class="hero-actions justify-center">
                    <a href="https://blablachampanheria.com.br/whatsapp" target="_blank" class="btn btn-primary btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"></path>
                        </svg>
                        Solicitar Teste Grátis
                    </a>
                    <a href="../planos/" class="btn btn-outline btn-lg">Ver Planos</a>
                </div>
            </div>
        </section>
    </div>
    <section class="section">
        <div class="container text-center">
            <div class="section-title">
                <div class="header-badge mx-auto mb-4">PASSO A PASSO</div>
                <h2>Teste IPTV em <span class="text-primary">3 Passos Simples</span></h2>
            </div>

            <div class="grid grid-3 steps-grid">
                <div class="step-item">
                    <div class="step-number step-purple">1</div>
                    <h3 class="mt-4">Fale Conosco</h3>
                    <p class="color-muted mt-2">Clique no botão de WhatsApp para falar com um de nossos atendentes
                        agora.</p>
                </div>
                <div class="step-item">
                    <div class="step-number step-blue">2</div>
                    <h3 class="mt-4">Receba os Dados</h3>
                    <p class="color-muted mt-2">Nossa equipe enviará os dados de acesso e o tutorial para o seu
                        aparelho.</p>
                </div>
                <div class="step-item">
                    <div class="step-number step-cyan">3</div>
                    <h3 class="mt-4">Assista e Comprove</h3>
                    <p class="color-muted mt-2">Aproveite todo o conteúdo liberado por 6 horas e comprove nossa
                        estabilidade.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ACESSO COMPLETO -->
    <section class="section bg-surface">
        <div class="container">
            <div class="section-title text-center">
                <div class="header-badge mx-auto mb-4">LIBERDADE TOTAL</div>
                <h2>Teste IPTV com <span class="text-primary">Acesso Completo</span></h2>
                <p>Você terá os mesmos benefícios de um cliente premium durante seu teste.</p>
            </div>

            <div class="grid grid-3 mt-5">
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="15" x="2" y="7" rx="2" ry="2"></rect>
                            <polyline points="17 2 12 7 7 2"></polyline>
                        </svg>
                    </div>
                    <h3>Milhares de Canais</h3>
                    <p>Todos os canais abertos e fechados liberados em alta definição.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M19.82 2H4.18C2.97 2 2 2.97 2 4.18v15.64C2 21.03 2.97 22 4.18 22h15.64c1.21 0 2.18-.97 2.18-2.18V4.18C22 2.97 21.03 2 19.82 2z">
                            </path>
                            <path d="M7 2v20"></path>
                            <path d="M17 2v20"></path>
                            <path d="M2 7h20"></path>
                            <path d="M2 17h20"></path>
                        </svg>
                    </div>
                    <h3>Filmes e Séries</h3>
                    <p>O melhor catálogo de VOD atualizado diariamente com lançamentos.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M6.7 6.7l10.6 10.6"></path>
                        </svg>
                    </div>
                    <h3>Canais de Esportes</h3>
                    <p>Premiere, Combate, ESPN e todos os esportes ao vivo sem atraso.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m2 11 3 3 3-3-3-3z"></path>
                            <path d="m9 11 3 3 3-3-3-3z"></path>
                            <path d="m16 11 3 3 3-3-3-3z"></path>
                        </svg>
                    </div>
                    <h3>4K / Full HD</h3>
                    <p>Transmissões em altíssima resolução para sua Smart TV.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path>
                        </svg>
                    </div>
                    <h3>Sem Travamentos</h3>
                    <p>Servidores dedicados com tecnologia anti-freeze de última geração.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <h3>Suporte 24h</h3>
                    <p>Nossa equipe está disponível a qualquer hora para te auxiliar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- NUMEROS -->
    <section class="section">
        <div class="container text-center">
            <div class="section-title">
                <h2>Números do <span class="text-primary">Teste IPTV</span></h2>
            </div>
            <div class="grid grid-4 mt-5">
                <div class="stat-card">
                    <div class="stat-number">+5.000</div>
                    <div class="stat-label">Testes mensais</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">92%</div>
                    <div class="stat-label">Convertem em assinatura</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">4.9/5</div>
                    <div class="stat-label">Avaliação média</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">&lt; 5 min</div>
                    <div class="stat-label">Tempo de ativação</div>
                </div>
            </div>
        </div>
    </section>

    <!-- DEPOIMENTOS -->
    <section class="section bg-surface">
        <div class="container">
            <div class="section-title text-center">
                <div class="header-badge mx-auto mb-4">PROVA REAL</div>
                <h2>Depoimentos de <span class="text-primary">Testadores</span></h2>
            </div>

            <div class="grid grid-3 mt-5">
                <div class="card">
                    <div class="flex gap-1 mb-3 color-warning">
                            <?php for ($i = 0; $i < 5; $i++)
                                echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>'; ?>
                    </div>
                    <p class="testimonial-text">"Pedi o teste e em menos de 2 minutos já estava assistindo. A qualidade
                        me
                        surpreendeu, principalmente nos canais de esportes."</p>
                    <div class="testimonial-author">Felipe Martins</div>
                </div>
                <div class="card">
                        <div class="flex gap-1 mb-3 color-warning">
                        <?php for ($i = 0; $i < 5; $i++)
                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>'; ?>
                    </div>
                    <p class="testimonial-text">"Testei várias listas e essa foi a única que não travou durante o jogo
                        do
                        meu time. Já virei cliente!"</p>
                    <div class="testimonial-author">Juliana Silveira</div>
                </div>
                    <div class="card">
                    <div class="flex gap-1 mb-3 color-warning">
                        <?php for ($i = 0; $i < 5; $i++)
                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>'; ?>
                    </div>
                    <p class="testimonial-text">"Excelente atendimento. Tiraram todas as minhas dúvidas durante as 6
                        horas
                        de teste. Recomendo muito."</p>
                    <div class="testimonial-author">Carlos Eduardo</div>
                </div>
            </div>
        </div>
    </section>

    <!-- O QUE TESTAR -->
    <section class="section">
        <div class="container">
            <div class="section-title text-center">
                <div class="header-badge mx-auto mb-4">CONTEÚDO DO TESTE</div>
                <h2>O que Testar nas <span class="text-primary">6 Horas Grátis</span></h2>
                <p>Aproveite cada minuto do seu teste experimentando tudo o que temos.</p>
            </div>

            <div class="grid grid-4 mt-5">
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="15" x="2" y="7" rx="2" ry="2"></rect>
                            <polyline points="17 2 12 7 7 2"></polyline>
                        </svg>
                    </div>
                    <h3>Canais ao Vivo</h3>
                    <p>Navegue por todos os canais abertos e fechados em tempo real.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polygon points="10 8 16 12 10 16 10 8"></polygon>
                        </svg>
                    </div>
                    <h3>Filmes e Lançamentos</h3>
                    <p>Explore nosso catálogo com mais de 65.000 títulos atualizados.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 7V5a2 2 0 0 1 2-2h2"></path>
                            <path d="M17 3h2a2 2 0 0 1 2 2v2"></path>
                            <path d="M21 17v2a2 2 0 0 1-2 2h-2"></path>
                            <path d="M7 21H5a2 2 0 0 1-2-2v-2"></path>
                            <rect width="10" height="8" x="7" y="8" rx="1"></rect>
                        </svg>
                    </div>
                    <h3>Séries e Novelas</h3>
                    <p>Temporadas completas e novelas de todos os países.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M6.7 6.7l10.6 10.6"></path>
                        </svg>
                    </div>
                    <h3>Esportes Ao Vivo</h3>
                    <p>Futebol, UFC, NBA, F1 e muito mais sem atraso.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M8 6h13"></path>
                            <path d="M8 12h13"></path>
                            <path d="M8 18h13"></path>
                            <path d="M3 6h.01"></path>
                            <path d="M3 12h.01"></path>
                            <path d="M3 18h.01"></path>
                        </svg>
                    </div>
                    <h3>Guia de Programação</h3>
                    <p>EPG completo para saber o que está passando agora.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m2 11 3 3 3-3-3-3z"></path>
                            <path d="m9 11 3 3 3-3-3-3z"></path>
                            <path d="m16 11 3 3 3-3-3-3z"></path>
                        </svg>
                    </div>
                    <h3>Teste a Qualidade 4K</h3>
                    <p>Veja a diferença do 4K ao vivo na sua Smart TV.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18">
                            </path>
                        </svg>
                    </div>
                    <h3>Canais Internacionais</h3>
                    <p>Canais de mais de 80 países em diversos idiomas.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <h3>Suporte Dedicado</h3>
                    <p>Tire dúvidas em tempo real durante seu teste.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ DE TESTE -->
    <section class="section bg-surface">
        <div class="container faq-wrapper">
            <div class="section-title text-center">
                <h2>Dúvidas Sobre o <span class="text-primary">Teste IPTV</span></h2>
                <p>Tudo o que você precisa saber antes de começar.</p>
            </div>
            <div class="faq-container mt-5">
                <div class="faq-item">
                    <button class="faq-trigger">O teste é realmente gratuito? <span class="faq-icon">▼</span></button>
                    <div class="faq-panel">Sim, o teste de 6 horas é totalmente gratuito e serve para você conhecer a
                        qualidade do nosso serviço antes de assinar.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-trigger">Quais canais estão liberados no teste? <span
                            class="faq-icon">▼</span></button>
                    <div class="faq-panel">Todos! Durante o teste, você tem acesso 100% à nossa grade completa de
                        canais, filmes e séries.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-trigger">Funciona em qual aparelho? <span class="faq-icon">▼</span></button>
                    <div class="faq-panel">Funciona em Smart TVs, TV Box, Celulares, Tablets, PC e qualquer dispositivo
                        com acesso à internet.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-trigger">Como recebo o acesso? <span class="faq-icon">▼</span></button>
                    <div class="faq-panel">Ao clicar no botão, você falará com nossa equipe pelo WhatsApp e eles te
                        enviarão os dados de login instantaneamente.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="conversion-banner">
        <div class="container">
            <h2>Pronto Para Transformar Seu Entretenimento?</h2>
            <p>Junte-se a milhares de clientes satisfeitos. Teste grátis agora.</p>
            <div class="conversion-actions">
                <a href="https://blablachampanheria.com.br/whatsapp" target="_blank" class="btn btn-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-message-circle">
                        <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"></path>
                    </svg>
                    Solicitar Teste Grátis
                </a>
                <a href="https://blablachampanheria.com.br/whatsapp" target="_blank" class="btn btn-outline"
                    style="background: transparent; border-color: #03060b80; color: #03060b;">
                    Falar com Consultor
                </a>
            </div>
        </div>
    </section>
</main>
<?php include_once '../includes/footer.php'; ?>
