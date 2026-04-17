<?php
$page_title = "Canais de TV - Bla Bla IPTV";
$page_badge = "Lista IPTV Completa";
$header_title = "+18.000 Canais IPTV ao Vivo";
$page_subtitle = "A lista IPTV mais completa do Brasil. Canais nacionais, internacionais, esportes, filmes, séries e muito mais em Full HD e 4K.";
$base_path = "../";
include_once '../includes/cache.php';
include_once '../includes/head.php';
include_once '../includes/header.php';
include_once '../includes/breadcrumbs.php';
?>
<main>
    <section class="section">
        <div class="container">
            <div class="grid grid-3">
                <!-- Canais -->
                <div class="card card-stat">
                    <span class="stat-number">18.000+</span>
                    <div class="stat-label">Canais ao Vivo</div>
                    <p class="stat-desc">TV aberta, fechada e as principais ligas esportivas do mundo.</p>
                </div>
                <!-- Filmes -->
                <div class="card card-stat">
                    <span class="stat-number">65.000+</span>
                    <div class="stat-label">Filmes e Séries</div>
                    <p class="stat-desc">O maior catálogo de entretenimento digital atualizado diariamente.</p>
                </div>
                <!-- Países -->
                <div class="card card-stat">
                    <span class="stat-number">80+</span>
                    <div class="stat-label">Países</div>
                    <p class="stat-desc">Conexão global para você assistir de onde quiser e em qualquer idioma.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPLORE CANAIS -->
    <section class="section bg-surface">
        <div class="container">
            <div class="section-title">
                <div class="header-badge mx-auto mb-4">Categorias</div>
                <h2 class="title-large">Explore Nossos <span class="text-primary">Canais IPTV</span></h2>
                <p>Conteúdo organizado por categoria para você encontrar tudo o que precisa.</p>
            </div>

            <div class="grid grid-4">
                <!-- Esportes -->
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M6 12c0-3.31 2.69-6 6-6s6 2.69 6 6-2.69 6-6 6-6-2.69-6-6Z" />
                            <path d="M12 6V2" />
                            <path d="M12 22v-4" />
                            <path d="M2 12h4" />
                            <path d="M18 12h4" />
                            <path d="m4.93 4.93 2.83 2.83" />
                            <path d="m16.24 16.24 2.83 2.83" />
                            <path d="m4.93 19.07 2.83-2.83" />
                            <path d="m16.24 7.76 2.83-2.83" />
                        </svg>
                    </div>
                    <h3>Esportes</h3>
                    <div class="text-primary text-xs-bold mt-n2 mb-2">
                        +500 canais</div>
                    <p>Futebol, UFC, NBA, F1, tênis e todos os esportes ao vivo.</p>
                </div>

                <!-- Filmes -->
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="18" height="18" x="3" y="3" rx="2" />
                            <path d="M7 3v18" />
                            <path d="M17 3v18" />
                            <path d="M3 7h4" />
                            <path d="M3 12h4" />
                            <path d="M3 17h4" />
                            <path d="M17 7h4" />
                            <path d="M17 12h4" />
                            <path d="M17 17h4" />
                        </svg>
                    </div>
                    <h3>Filmes</h3>
                    <div class="text-primary text-xs-bold mt-n2 mb-2">
                        +45.000 títulos</div>
                    <p>Lançamentos, clássicos, ação, comédia, terror e mais.</p>
                </div>

                <!-- Séries -->
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 7V5a2 2 0 0 1 2-2h2" />
                            <path d="M17 3h2a2 2 0 0 1 2 2v2" />
                            <path d="M21 17v2a2 2 0 0 1-2 2h-2" />
                            <path d="M7 21H5a2 2 0 0 1-2-2v-2" />
                            <rect width="7" height="5" x="7" y="7" rx="1" />
                            <rect width="7" height="5" x="10" y="12" rx="1" />
                        </svg>
                    </div>
                    <h3>Séries</h3>
                    <div class="text-primary text-xs-bold mt-n2 mb-2">
                        +20.000 títulos</div>
                    <p>Séries completas e episódios atualizados semanalmente.</p>
                </div>

                <!-- TV Aberta -->
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="15" x="2" y="3" rx="2" />
                            <polyline points="12 18 12 21" />
                            <polyline points="8 21 16 21" />
                        </svg>
                    </div>
                    <h3>TV Aberta</h3>
                    <div class="text-primary text-xs-bold mt-n2 mb-2">
                        Todos os canais</div>
                    <p>Globo, SBT, Record, Band, RedeTV e afiliadas do Brasil.</p>
                </div>

                <!-- Notícias -->
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                            <path d="M18 14h-8" />
                            <path d="M15 18h-5" />
                            <path d="M10 6h8v4h-8V6Z" />
                        </svg>
                    </div>
                    <h3>Notícias</h3>
                    <div class="text-primary text-xs-bold mt-n2 mb-2">
                        +120 canais</div>
                    <p>GloboNews, CNN, BBC, Al Jazeera, Jovem Pan e Record News.</p>
                </div>

                <!-- Infantil -->
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M10 3a1 1 0 0 1-1-1 1 1 0 0 1-1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1-1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1" />
                            <path d="M12 12a1 1 0 1 0 2 0 1 1 0 1 0-2 0Z" />
                            <path d="M18 12a1 1 0 1 0 2 0 1 1 0 1 0-2 0Z" />
                            <path d="M12 12c0 2.76 2.69 5 6 5s6-2.24 6-5-2.69-5-6-5-6 2.24-6 5Z" />
                            <path d="M10 16c0 1.1-.9 2-2 2s-2-.9-2-2 2-2 2-2 2 .9 2 2Z" />
                        </svg>
                    </div>
                    <h3>Infantil</h3>
                    <div class="text-primary text-xs-bold mt-n2 mb-2">
                        +80 canais</div>
                    <p>Discovery Kids, Cartoon, Disney, Nick e conteúdos educativos.</p>
                </div>

                <!-- Música -->
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 18V5l12-2v13" />
                            <circle cx="6" cy="18" r="3" />
                            <circle cx="18" cy="16" r="3" />
                        </svg>
                    </div>
                    <h3>Música</h3>
                    <div class="text-primary text-xs-bold mt-n2 mb-2">
                        +60 canais</div>
                    <p>MTV, VH1, canais de rádio, shows e videoclipes 24 horas.</p>
                </div>

                <!-- Documentários -->
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                            <path d="M2 12h20" />
                            <path d="M12 2a14.5 14.5 0 0 0-4 10 14.5 14.5 0 0 0 4 10" />
                            <path d="M12 2a14.5 14.5 0 0 1 4 10 14.5 14.5 0 0 1-4 10" />
                        </svg>
                    </div>
                    <h3>Documentários</h3>
                    <div class="text-primary text-xs-bold mt-n2 mb-2">
                        +200 canais</div>
                    <p>Discovery, NatGeo, History Channel, Animal Planet e mais.</p>
                </div>

                <!-- Automobilismo -->
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 2v3.414" />
                            <path d="M2 12V2.5A1.5 1.5 0 0 1 3.5 1H10" />
                            <path d="M12 2v3" />
                            <path d="M22 17v-4.5a1.5 1.5 0 0 0-1.5-1.5H12" />
                            <path d="M2 17v-4.5A1.5 1.5 0 0 1 3.5 11H10" />
                            <path d="M22 12V2.5A1.5 1.5 0 0 0 20.5 1H14" />
                            <path d="M10 15H2" />
                            <path d="M22 15h-8" />
                            <path d="M10 19H2" />
                            <path d="M22 19h-8" />
                        </svg>
                    </div>
                    <h3>Automobilismo</h3>
                    <div class="text-primary text-xs-bold mt-n2 mb-2">
                        Exclusivo</div>
                    <p>F1, MotoGP, Stock Car e todas as corridas ao vivo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CANAIS MAIS POPULARES -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <div class="header-badge" style="margin: 0 auto 1rem;">Mais Assistidos</div>
                <h2 class="title-large">Canais Mais <span class="text-primary">Populares</span></h2>
                <p>Alguns dos canais mais assistidos em nossa plataforma.</p>
            </div>

            <div class="pill-grid">
                <!-- Row 1 -->
                <div class="channel-pill">
                    <span>Globo</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>SBT</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>Record</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>Band</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>SporTV</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>ESPN</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>Premiere</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>TNT Sports</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>HBO</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>Telecine</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>Warner TV</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>Sony TV</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>Discovery</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>TLC</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>History</span>
                    <div class="pill-status"></div>
                </div>
                <div class="channel-pill">
                    <span>Animal Planet</span>
                    <div class="pill-status"></div>
                </div>
            </div>
            <p style="text-align: center; margin-top: 2rem; color: var(--muted-foreground); font-size: 0.9rem;">
                Explore mais de <span class="text-primary" style="font-weight: 700;">18.000 canais</span> organizados em
                categorias.
            </p>
        </div>
    </section>

    <!-- ESPORTES AO VIVO -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <div class="header-badge" style="margin: 0 auto 1rem;">Esportes</div>
                <h2 class="title-large">Esportes ao Vivo no <span class="text-primary">IPTV</span></h2>
                <p>Todos os grandes campeonatos, lutas e corridas com transmissão em tempo real.</p>
            </div>

            <div class="grid grid-4">
                <!-- Brasileirão -->
                <div class="feature-card text-center">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="m6.7 6.7 10.6 10.6" />
                            <path d="m6.7 17.3 10.6-10.6" />
                        </svg>
                    </div>
                    <h3>Brasileirão A e B</h3>
                    <div class="badge">Ao Vivo</div>
                    <p>Todos os jogos do campeonato nacional, sem travamentos.</p>
                </div>
                <!-- Champions -->
                <div class="feature-card text-center">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6" />
                            <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18" />
                            <path d="M4 22h16" />
                            <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22" />
                            <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22" />
                            <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z" />
                        </svg>
                    </div>
                    <h3>Champions League</h3>
                    <div class="badge">Exclusivo</div>
                    <p>A maior competição de clubes da Europa na tela da sua TV.</p>
                </div>
                <!-- Premier League -->
                <div class="feature-card text-center">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5Z" />
                            <path d="M2 17l10 5 10-5" />
                            <path d="M2 12l10 5 10-5" />
                        </svg>
                    </div>
                    <h3>Premier League</h3>
                    <div class="badge">Ao Vivo</div>
                    <p>O melhor futebol do mundo com transmissão direta da Inglaterra.</p>
                </div>
                <!-- F1 -->
                <div class="feature-card text-center">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 2v3.414" />
                            <path d="M2 12V2.5A1.5 1.5 0 0 1 3.5 1H10" />
                            <path d="M12 2v3" />
                            <path d="M22 17v-4.5a1.5 1.5 0 0 0-1.5-1.5H12" />
                            <path d="M2 17v-4.5A1.5 1.5 0 0 1 3.5 11H10" />
                            <path d="M22 12V2.5A1.5 1.5 0 0 0 20.5 1H14" />
                            <path d="M10 15H2" />
                            <path d="M22 15h-8" />
                            <path d="M10 19H2" />
                            <path d="M22 19h-8" />
                        </svg>
                    </div>
                    <h3>Fórmula 1</h3>
                    <div class="badge">Full HD</div>
                    <p>Assista todos os GPs, treinos e classificações da temporada.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FILMES E SERIES -->
    <section class="section bg-surface">
        <div class="container">
            <div class="section-title">
                <div class="header-badge" style="margin: 0 auto 1rem;">Sob Demanda</div>
                <h2 class="title-large">Filmes e Séries em <span class="text-primary">Destaque</span></h2>
                <p>O maior catálogo de entretenimento da internet atualizado diariamente.</p>
            </div>

            <div class="grid grid-3">
                <!-- Cinema -->
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="18" height="18" x="3" y="3" rx="2" />
                            <path d="M7 3v18" />
                            <path d="M17 3v18" />
                            <path d="M3 7h4" />
                            <path d="M3 12h4" />
                            <path d="M3 17h4" />
                            <path d="M17 7h4" />
                            <path d="M17 12h4" />
                            <path d="M17 17h4" />
                        </svg>
                    </div>
                    <h3>Lançamentos de Cinema</h3>
                    <p>Assista aos filmes que acabaram de sair do cinema no conforto da sua casa.</p>
                </div>
                <!-- Series -->
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 7V5a2 2 0 0 1 2-2h2" />
                            <path d="M17 3h2a2 2 0 0 1 2 2v2" />
                            <path d="M21 17v2a2 2 0 0 1-2 2h-2" />
                            <path d="M7 21H5a2 2 0 0 1-2-2v-2" />
                            <rect width="7" height="5" x="7" y="7" rx="1" />
                            <rect width="7" height="5" x="10" y="12" rx="1" />
                        </svg>
                    </div>
                    <h3>Séries Completas</h3>
                    <p>Todas as temporadas das melhores séries da Netflix, HBO, Disney+ e Amazon Prime.</p>
                </div>
                <!-- Kids -->
                <div class="feature-card">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M10 3a1 1 0 0 1-1-1 1 1 0 0 1-1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1-1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1" />
                            <path d="M12 12a1 1 0 1 0 2 0 1 1 0 1 0-2 0Z" />
                            <path d="M18 12a1 1 0 1 0 2 0 1 1 0 1 0-2 0Z" />
                            <path d="M12 12c0 2.76 2.69 5 6 5s6-2.24 6-5-2.69-5-6-5-6 2.24-6 5Z" />
                            <path d="M10 16c0 1.1-.9 2-2 2s-2-.9-2-2 2-2 2-2 2 .9 2 2Z" />
                        </svg>
                    </div>
                    <h3>Kids - Conteúdo Infantil</h3>
                    <p>Uma seção dedicada apenas para as crianças com desenhos e animações 24 horas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CANAIS INTERNACIONAIS -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <div class="header-badge" style="margin: 0 auto 1rem;">Global</div>
                <h2 class="title-large">Canais <span class="text-primary">Internacionais</span></h2>
                <p>Conteúdo de mais de 80 países na palma da sua mão. A maior cobertura internacional do Brasil.</p>
            </div>

            <div class="grid grid-4">
                <!-- US -->
                <div class="feature-card text-center">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                            <path d="M2 12h20" />
                            <path d="M12 2a14.5 14.5 0 0 0-4 10 14.5 14.5 0 0 0 4 10" />
                            <path d="M12 2a14.5 14.5 0 0 1 4 10 14.5 14.5 0 0 1-4 10" />
                        </svg>
                    </div>
                    <h3>Estados Unidos</h3>
                    <div class="badge">Esgotado</div>
                    <p>Canais como ABC, NBC, CBS, FOX e as principais redes americanas.</p>
                </div>
                <!-- Europa -->
                <div class="feature-card text-center">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                    </div>
                    <h3>Europa</h3>
                    <div class="badge">Portugal & Mais</div>
                    <p>Canais de Portugal, Espanha, Itália, França, Alemanha e Reino Unido.</p>
                </div>
                <!-- Latino -->
                <div class="feature-card text-center">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z" />
                        </svg>
                    </div>
                    <h3>Latinoamérica</h3>
                    <div class="badge">Todos os Países</div>
                    <p>Argentina, Chile, Uruguai, México, Colômbia e toda a América Latina.</p>
                </div>
                <!-- Asia -->
                <div class="feature-card text-center">
                    <div class="icon-box-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M12 3a9 9 0 1 0 9 9 9.75 9.75 0 0 0-.5-3l1.5-1.5-1.5-1.5-1.5 1.5A10 10 0 0 0 12 3Z" />
                            <path d="m12.5 10.5 4-4" />
                            <path d="m17 8-1.5 1.5" />
                        </svg>
                    </div>
                    <h3>Ásia e Outros</h3>
                    <div class="badge">Multicultural</div>
                    <p>Canais da China, Japão, Coréia, Índia, Arábia e muito mais.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BANNER CTA ATUALIZACAO -->
    <section class="section bg-surface">
        <div class="container">
            <div class="update-banner">
                <div class="icon-box-feature"
                    style="width: 64px; height: 64px; background: var(--primary); color: white; margin: 0 auto;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" />
                        <path d="M3 3v5h5" />
                        <path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16" />
                        <path d="M16 16h5v5" />
                    </svg>
                </div>
                <div class="update-content">
                    <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Lista IPTV com <span
                            class="text-primary">Atualização Diária</span></h3>
                    <p style="color: var(--muted-foreground);">Nossa lista é atualizada automaticamente todos os dias.
                        Novos filmes, séries e episódios são adicionados sem que você precise fazer nada. Basta abrir o
                        seu aplicativo e aproveitar.</p>
                </div>
                <div class="badge-group" style="justify-content: center;">
                    <span class="badge"
                        style="background: rgba(255,255,255,0.05); color: white; border: 1px solid var(--border);">+45.000
                        Filmes</span>
                    <span class="badge"
                        style="background: rgba(255,255,255,0.05); color: white; border: 1px solid var(--border);">+20.000
                        Séries</span>
                    <span class="badge-success badge">Atualização em Realtime</span>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="section" style="text-align: center; padding-bottom: 8rem;">
        <div class="container">
            <h2 class="title-large" style="margin-bottom: 1.5rem;">Quer acesso a todos os <span
                    class="text-primary">canais IPTV?</span></h2>
            <p style="max-width: 600px; margin: 0 auto 3rem; color: var(--muted-foreground);">Ative sua conta agora
                mesmo e tenha acesso imediato a todo o nosso conteúdo em qualquer dispositivo.</p>
            <div class="hero-actions justify-center">
                <a href="https://blablachampanheria.com.br/whatsapp" target="_blank" rel="noopener noreferrer"
                    class="btn btn-primary btn-lg">
                    Teste IPTV Grátis
                </a>
                <a href="../#planos" class="btn btn-outline btn-lg">
                    Ver Planos <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</main>
<?php include_once '../includes/footer.php'; ?>
