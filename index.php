<?php
$page_title = "StreamFlow - Entretenimento Sem Limites";
$base_path = "./";
include_once 'includes/cache.php';
include_once 'includes/head.php';
include_once 'includes/header.php';
?>

<main>
    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-bg">
            <img src="./assets/hero-streaming.jpg" alt="Entretenimento StreamFlow" width="1920" height="1080">
        </div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <span class="badge">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-star fill-primary" aria-hidden="true">
                    <path
                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                    </path>
                </svg> Entretenimento Premium
            </span>
            <h1>Mergulhe no universo StreamFlow</h1>
            <p>Filmes, séries, esportes e canais ao vivo. Qualidade 4K em qualquer tela. Sua diversão começa aqui.</p>
            <div class="hero-actions">
                <a href="./teste-gratis/" class="btn btn-primary">
                    Experimente Grátis
                </a>
                <a href="./planos/" class="btn btn-outline">
                    Ver Planos <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-value">24/7</span>
                    <span class="stat-label">Suporte</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value">4K</span>
                    <span class="stat-label">Resolução</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value">5+</span>
                    <span class="stat-label">Dispositivos</span>
                </div>
            </div>
        </div>
    </section>

    <!-- HIGHLIGHTS -->
    <section class="section service-highlights">
        <div class="container highlights-container">
            <span class="highlight-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="text-primary">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                </svg>
                Milhares de usuários satisfeitos
            </span>
            <span class="highlight-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="text-primary fill-primary">
                    <path
                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                    </path>
                </svg>
                Avaliação 4.9/5 estrelas
            </span>
            <span class="highlight-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="text-primary">
                    <path
                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                    </path>
                </svg>
                Conexão segura e estável
            </span>
        </div>
    </section>

    <!-- 1. COMO FUNCIONA -->
    <section class="section container">
        <div class="section-title">
            <h2>Comece a Assistir em 4 Passos Simples</h2>
            <p>Sua jornada de entretenimento começa aqui</p>
        </div>
        <div class="grid grid-4 text-center">
            <div class="card">
                <span class="card-num">01</span>
                <h3>Escolha</h3>
                <p>Selecione seu plano ideal ou inicie um teste grátis.</p>
            </div>
            <div class="card">
                <span class="card-num">02</span>
                <h3>Acesse</h3>
                <p>Receba seus dados de login e instruções de instalação.</p>
            </div>
            <div class="card">
                <span class="card-num">03</span>
                <h3>Conecte</h3>
                <p>Instale nosso app em seu dispositivo preferido.</p>
            </div>
            <div class="card">
                <span class="card-num">04</span>
                <h3>Assista</h3>
                <p>Desfrute de um mundo de entretenimento instantaneamente.</p>
            </div>
        </div>
    </section>

    <!-- 2. FILMES E SÉRIES -->
    <section class="section bg-surface">
        <div class="container content-split">
            <div class="content-text">
                <h2 class="title-large">Uma Biblioteca Infinita de Histórias</h2>
                <p class="description">Explore um catálogo em constante expansão com os maiores sucessos do cinema, séries aclamadas e documentários exclusivos. Tudo em HD, Full HD e 4K.</p>
                <div class="grid grid-3 mini-stats">
                    <div class="card mini-card">
                        <div class="stat-value">20k+</div>
                        <div class="stat-label">Filmes</div>
                    </div>
                    <div class="card mini-card">
                        <div class="stat-value">7k+</div>
                        <div class="stat-label">Séries</div>
                    </div>
                    <div class="card mini-card">
                        <div class="stat-value">1.5k+</div>
                        <div class="stat-label">Canais</div>
                    </div>
                </div>
                <a href="./canais/" class="text-link">
                    Explorar Catálogo →
                </a>
            </div>
            <div class="content-image">
                <img src="./assets/movies-grid.jpg" alt="Catálogo StreamFlow">
            </div>
        </div>
    </section>

    <!-- 3. ESPORTES AO VIVO -->
    <section class="section">
        <div class="container content-split reverse">
            <div class="content-text">
                <h2 class="title-large">A Emoção do Esporte em Tempo Real</h2>
                <p class="description">Não perca nenhum lance! Futebol, basquete, MMA, automobilismo e muito mais, com transmissões estáveis e sem atrasos.</p>
                <a href="./planos/" class="btn btn-primary"
                    style="display:inline-flex; align-items:center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        style="margin-right:0.5rem;">
                        <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"></path>
                    </svg>
                    Assine Agora
                </a>
            </div>
            <div class="content-image">
                <img src="./assets/hero-streaming.jpg" alt="Esportes ao Vivo" style="filter: contrast(1.1);">
            </div>
        </div>
    </section>

    <!-- 4. POR QUE ESCOLHER -->
    <section class="section container">
        <div class="section-title">
            <h2>Por Que Escolher StreamFlow?</h2>
            <p>Qualidade, estabilidade e suporte que você merece</p>
        </div>
        <div class="grid grid-3">
            <!-- Estabilidade -->
            <div class="card" style="display:flex; align-items:center; gap:1.25rem; text-align:left; padding:1.5rem;">
                <div class="icon-box"
                    style="flex-shrink:0; width:44px; height:44px; background:rgba(0, 191, 201, 0.1); border-radius:12px; display:flex; align-items:center; justify-content:center; color:var(--primary);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3 style="font-size: 1rem; margin-bottom: 0.25rem;">Estabilidade Inigualável</h3>
                    <p style="font-size: 0.8125rem; color: var(--muted-foreground); line-height: 1.4;">Servidores de alta performance garantem streaming sem interrupções.</p>
                </div>
            </div>
            <!-- Segurança -->
            <div class="card" style="display:flex; align-items:center; gap:1.25rem; text-align:left; padding:1.5rem;">
                <div class="icon-box"
                    style="flex-shrink:0; width:44px; height:44px; background:rgba(0, 191, 201, 0.1); border-radius:12px; display:flex; align-items:center; justify-content:center; color:var(--primary);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3 style="font-size: 1rem; margin-bottom: 0.25rem;">Segurança Avançada</h3>
                    <p style="font-size: 0.8125rem; color: var(--muted-foreground); line-height: 1.4;">Proteção de dados e privacidade em primeiro lugar.</p>
                </div>
            </div>
            <!-- Suporte -->
            <div class="card" style="display:flex; align-items:center; gap:1.25rem; text-align:left; padding:1.5rem;">
                <div class="icon-box"
                    style="flex-shrink:0; width:44px; height:44px; background:rgba(0, 191, 201, 0.1); border-radius:12px; display:flex; align-items:center; justify-content:center; color:var(--primary);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <div>
                    <h3 style="font-size: 1rem; margin-bottom: 0.25rem;">Suporte 24/7</h3>
                    <p style="font-size: 0.8125rem; color: var(--muted-foreground); line-height: 1.4;">Nossa equipe está sempre pronta para ajudar, a qualquer hora.</p>
                </div>
            </div>
            <!-- Compatibilidade -->
            <div class="card" style="display:flex; align-items:center; gap:1.25rem; text-align:left; padding:1.5rem;">
                <div class="icon-box"
                    style="flex-shrink:0; width:44px; height:44px; background:rgba(0, 191, 201, 0.1); border-radius:12px; display:flex; align-items:center; justify-content:center; color:var(--primary);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="2" y1="20" x2="22" y2="20"></line>
                    </svg>
                </div>
                <div>
                    <h3 style="font-size: 1rem; margin-bottom: 0.25rem;">Compatibilidade Total</h3>
                    <p style="font-size: 0.8125rem; color: var(--muted-foreground); line-height: 1.4;">Assista em Smart TVs, celulares, tablets, PCs e TV Boxes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section class="conversion-banner">
        <div class="container text-center">
            <h2>Pronto para Transformar Sua TV?</h2>
            <p>Junte-se à família StreamFlow e descubra uma nova forma de assistir TV.</p>
            <div class="conversion-actions">
                <a href="./planos/" class="btn btn-primary">
                    Assine Agora
                </a>
                <a href="./teste-gratis/" class="btn btn-outline">
                    Experimente Grátis
                </a>
            </div>
        </div>
    </section>
</main>
<?php include_once 'includes/footer.php'; ?>
