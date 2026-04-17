<?php if (!isset($base_path))
    $base_path = "./"; ?>
<footer class="footer">
    <div class="container footer-grid">
        <div class="footer-col">
            <a class="logo" href="<?php echo $base_path; ?>" style="margin-bottom:1.5rem;">
                <img src="<?php echo $base_path; ?>assets/img/logo.png" alt="StreamFlow"
                    style="height: 32px; width: auto; margin-right: 10px;">
                Stream<span class="text-primary">Flow</span>
            </a>
            <p style="font-size:0.875rem; color:var(--muted-foreground); max-width: 250px; line-height: 1.6;">
                Entretenimento premium via streaming com qualidade incomparável, suporte dedicado e acesso em todos os dispositivos.</p>
        </div>
        <div class="footer-col">
            <h3>Navegação</h3>
            <ul class="footer-links">
                <li><a href="<?php echo $base_path; ?>" class="footer-link">Início</a></li>
                <li><a href="<?php echo $base_path; ?>canais/" class="footer-link">Canais</a></li>
                <li><a href="<?php echo $base_path; ?>planos/" class="footer-link">Planos</a></li>
                <li><a href="<?php echo $base_path; ?>teste-gratis/" class="footer-link">Teste Grátis</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Suporte</h3>
            <ul class="footer-links">
                <li><a href="<?php echo $base_path; ?>dispositivos/" class="footer-link">Dispositivos</a></li>
                <li><a href="<?php echo $base_path; ?>faq/" class="footer-link">FAQ</a></li>
                <li><a href="https://streamflow.com.br/whatsapp" target="_blank" class="footer-link">Suporte WhatsApp</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Contato</h3>
            <p class="footer-desc">A melhor experiência de entretenimento digital. Milhares de canais, filmes e séries com StreamFlow.</p>
            <ul class="footer-links">
                <li>
                    <a href="tel:11988776655" class="footer-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-phone">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l2.27-2.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        (11) 9887-7665
                    </a>
                </li>
                <li>
                    <a href="https://streamflow.com.br/whatsapp" target="_blank" class="footer-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-message-circle">
                            <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"></path>
                        </svg>
                        WhatsApp
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container copyright-area">
        <p>&copy; <?php echo date('Y'); ?> StreamFlow. Todos os direitos reservados.</p>
        <p>Serviço de streaming licenciado. Conteúdo sujeito à disponibilidade.</p>
    </div>
</footer>

<a href="https://streamflow.com.br/whatsapp" target="_blank" class="float-wa">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="white">
        <path
            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z">
        </path>
    </svg>
</a>
<script src="<?php echo $base_path; ?>assets/scripts.js" type="text/javascript"></script>
</body>

</html>
