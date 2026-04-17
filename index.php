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
        <div class="hero::before"></div>
        <div class="hero-content">
            <div class="badge">✨ Entretenimento Premium em Qualidade 4K</div>
            <h1>Mergulhe no Universo StreamFlow</h1>
            <p class="hero-subtitle">Filmes, séries, esportes e canais ao vivo. Qualidade 4K em qualquer tela. Sua diversão começa aqui.</p>
            <div class="hero-actions">
                <a href="./teste-gratis/" class="btn btn-primary">Experimente Grátis por 24h</a>
                <a href="./planos/" class="btn btn-outline">Ver Planos</a>
            </div>
            <div class="hero-stats">
                <div class="stat-box">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Suporte Especializado</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">4K</div>
                    <div class="stat-label">Ultra HD Nativo</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">5+</div>
                    <div class="stat-label">Dispositivos Simultâneos</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES SECTION -->
    <section class="section">
        <div class="section-title">
            <h2>Por Que Escolher StreamFlow?</h2>
            <p class="section-subtitle">Experiência premium com tecnologia de ponta</p>
        </div>
        <div class="grid grid-3">
            <div class="card">
                <div class="card-icon">📺</div>
                <h3>Catálogo Infinito</h3>
                <p>Milhares de filmes, séries e canais ao vivo atualizados diariamente.</p>
            </div>
            <div class="card">
                <div class="card-icon">⚡</div>
                <h3>Ultra Estável</h3>
                <p>Transmissão sem travamentos com uptime garantido de 99.9%.</p>
            </div>
            <div class="card">
                <div class="card-icon">🔒</div>
                <h3>100% Seguro</h3>
                <p>Criptografia de ponta a ponta e privacidade garantida.</p>
            </div>
            <div class="card">
                <div class="card-icon">💰</div>
                <h3>Preço Justo</h3>
                <p>Planos acessíveis com melhor custo-benefício do mercado.</p>
            </div>
            <div class="card">
                <div class="card-icon">📱</div>
                <h3>Multi-Dispositivo</h3>
                <p>Assista em Smart TV, smartphone, tablet ou computador.</p>
            </div>
            <div class="card">
                <div class="card-icon">🎯</div>
                <h3>Sem Fidelidade</h3>
                <p>Cancele a qualquer momento, sem multas ou compromissos.</p>
            </div>
        </div>
    </section>

    <!-- COMO FUNCIONA -->
    <section class="section" style="background: linear-gradient(135deg, rgba(106, 13, 173, 0.1) 0%, rgba(32, 201, 151, 0.1) 100%); border-radius: 20px; margin: 4rem 2rem;">
        <div class="section-title">
            <h2>Comece em 4 Passos Simples</h2>
            <p class="section-subtitle">Sua jornada de entretenimento começa agora</p>
        </div>
        <div class="grid grid-4">
            <div class="card">
                <div style="font-size: 3rem; margin-bottom: 1rem;">1️⃣</div>
                <h3>Crie sua Conta</h3>
                <p>Cadastro rápido em menos de 2 minutos com email ou WhatsApp.</p>
            </div>
            <div class="card">
                <div style="font-size: 3rem; margin-bottom: 1rem;">2️⃣</div>
                <h3>Escolha seu Plano</h3>
                <p>Selecione entre nossos planos flexíveis e acessíveis.</p>
            </div>
            <div class="card">
                <div style="font-size: 3rem; margin-bottom: 1rem;">3️⃣</div>
                <h3>Instale o App</h3>
                <p>Download gratuito para iOS, Android, Smart TV e mais.</p>
            </div>
            <div class="card">
                <div style="font-size: 3rem; margin-bottom: 1rem;">4️⃣</div>
                <h3>Aproveite!</h3>
                <p>Acesso imediato a todo o catálogo em qualidade 4K.</p>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="section">
        <div class="cta-section">
            <h2>Teste StreamFlow Gratuitamente</h2>
            <p>Acesso completo por 24 horas. Sem cartão de crédito. Sem compromisso.</p>
            <a href="./teste-gratis/" class="btn">Começar Teste Grátis</a>
        </div>
    </section>

    <!-- PRICING PREVIEW -->
    <section class="section">
        <div class="section-title">
            <h2>Planos que Cabem no Seu Bolso</h2>
            <p class="section-subtitle">Escolha o plano perfeito para você</p>
        </div>
        <div class="pricing-cards">
            <div class="pricing-card">
                <div class="plan-name">Básico</div>
                <div class="plan-price">R$ 29<span>/mês</span></div>
                <p class="plan-description">Perfeito para começar</p>
                <ul class="plan-features">
                    <li>HD até 1080p</li>
                    <li>1 dispositivo simultâneo</li>
                    <li>Catálogo completo</li>
                </ul>
                <a href="./planos/" class="btn btn-secondary" style="width: 100%;">Escolher Plano</a>
            </div>
            <div class="pricing-card featured">
                <div class="pricing-badge">Mais Popular</div>
                <div class="plan-name">Premium</div>
                <div class="plan-price">R$ 59<span>/mês</span></div>
                <p class="plan-description">Melhor custo-benefício</p>
                <ul class="plan-features">
                    <li>4K Ultra HD</li>
                    <li>4 dispositivos simultâneos</li>
                    <li>Suporte prioritário</li>
                </ul>
                <a href="./planos/" class="btn btn-primary" style="width: 100%;">Escolher Plano</a>
            </div>
            <div class="pricing-card">
                <div class="plan-name">Família</div>
                <div class="plan-price">R$ 89<span>/mês</span></div>
                <p class="plan-description">Para toda a família</p>
                <ul class="plan-features">
                    <li>4K Ultra HD</li>
                    <li>6 dispositivos simultâneos</li>
                    <li>Suporte VIP 24/7</li>
                </ul>
                <a href="./planos/" class="btn btn-secondary" style="width: 100%;">Escolher Plano</a>
            </div>
        </div>
    </section>

    <!-- FAQ PREVIEW -->
    <section class="section">
        <div class="section-title">
            <h2>Perguntas Frequentes</h2>
            <p class="section-subtitle">Tire suas dúvidas sobre StreamFlow</p>
        </div>
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="card" style="margin-bottom: 1rem;">
                <h3 style="margin-bottom: 0.5rem;">O que é StreamFlow?</h3>
                <p style="margin-bottom: 0;">StreamFlow é uma plataforma de streaming que oferece acesso a milhares de canais de TV, filmes e séries sob demanda via internet.</p>
            </div>
            <div class="card" style="margin-bottom: 1rem;">
                <h3 style="margin-bottom: 0.5rem;">Como funciona o teste grátis?</h3>
                <p style="margin-bottom: 0;">Teste grátis é um período de avaliação de 24 horas. Você tem acesso total a todo o catálogo sem nenhum compromisso.</p>
            </div>
            <div class="card">
                <h3 style="margin-bottom: 0.5rem;">Posso cancelar a qualquer momento?</h3>
                <p style="margin-bottom: 0;">Sim, sem fidelidade ou multas. Seu plano expira ao final do período contratado.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="./faq/" class="btn btn-primary">Ver Todas as Perguntas</a>
        </div>
    </section>

</main>

<?php include_once 'includes/footer.php'; ?>
