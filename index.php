<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aventufilm | Produtora Outdoor</title>

    <!-- SEO & Meta Tags -->
    <meta name="description"
        content="AventuFilm: Produtora audiovisual de outdoor e sobrevivência em Curitiba. Histórias que inspiram, emocionam e conectam. Especialistas em documentários de expedições e montanhismo.">
    <meta name="keywords"
        content="produtora de vídeo, produtora audiovisual, documentários, outdoor, sobrevivência, montanhismo, expedição, vídeo para marcas, Curitiba, Aventufilm">
    <meta name="author" content="AventuFilm">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://aventufilm.com.br/">
    <meta property="og:title" content="AventuFilm | Produtora Outdoor">
    <meta property="og:description" content="Histórias que inspiram, emocionam e conectam no universo outdoor.">
    <!-- Replace with a permanent absolute URL to your logo/cover later if needed -->
    <meta property="og:image" content="https://aventufilm.com.br/wp-content/uploads/2025/02/LogoBranca@4x.png">

    <!-- GEO / Local targeting Curitiba, PR -->
    <meta name="geo.region" content="BR-PR">
    <meta name="geo.placename" content="Curitiba">
    <meta name="geo.position" content="-25.4284;-49.2733">
    <meta name="ICBM" content="-25.4284, -49.2733">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DMDJPM29SL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-DMDJPM29SL');
    </script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Mark Bone uses a sleek geometric sans-serif, let's use Inter or Roboto. Let's stick with Outfit or Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header" id="header">
        <div class="container header-container">
            <a href="#" class="logo">
                <img src="assets/img/logo.png" alt="Aventufilm Logo">
            </a>
            <nav class="nav">
                <ul class="nav-list">
                    <li><a href="#hero" class="nav-link">Início</a></li>
                    <li><a href="#sobre-nos" class="nav-link">Sobre nós</a></li>
                    <li><a href="#atuacoes" class="nav-link">Atuações</a></li>
                    <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
                    <li><a href="#equipe" class="nav-link">Equipe</a></li>
                    <li><a href="#contato" class="nav-link">Contato</a></li>
                </ul>
            </nav>
            <div class="menu-toggle" id="menu-toggle">
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="hero" class="hero">
            <div id="hero-slideshow" class="hero-slideshow">
                <!-- Slides will be injected by JavaScript -->
            </div>
            <div class="hero-overlay"></div>
            <div class="container hero-content">
                <h1 class="hero-title reveal-text">AVENTUFILM</h1>
                <p class="hero-subtitle reveal-text delay-1" style="font-size: 1rem; letter-spacing: 4px;">HISTÓRIAS QUE
                    INSPIRAM. EMOCIONAM. CONECTAM.</p>
            </div>
        </section>

        <!-- Sobre nós Section -->
        <section id="sobre-nos" class="about section">
            <div class="container">
                <div class="about-grid">
                    <div class="about-content reveal-element">
                        <div class="section-header" style="align-items: flex-start; text-align: left; margin-bottom: 2rem;">
                            <h2 class="section-title" style="margin-left: 0;">SOBRE NÓS</h2>
                            <div class="divider" style="margin-left: 0;"></div>
                        </div>
                        <p class="about-text">
                            Nós nascemos da paixão por transformar desafios em <strong>narrativas autênticas.</strong>
                        </p>
                        <p class="about-text">
                            <strong>Valorizamos</strong> cada cliente e cada história, buscando entender a essência de quem está diante das nossas lentes.
                        </p>
                        <p class="about-text">
                            <strong>Não medimos esforços</strong> para captar as cenas mais genuínas — se for preciso sujar os pés na lama ou subir montanhas, <strong>nós topamos o desafio</strong>.
                        </p>
                    </div>
                    <div class="about-media reveal-element delay-1">
                        <div class="about-img-wrapper">
                            <img src="assets/img/sobre.jpg" alt="AventuFilm - bastidores" class="about-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Atuações Section -->
        <section id="atuacoes" class="services section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title reveal-element">ATUAÇÕES</h2>
                    <div class="divider"></div>
                </div>

                <div class="services-grid">
                    <div class="service-card reveal-element">
                        <h3 class="service-title">Documentários</h3>
                        <p class="service-desc">Narrativas reais e profundas. Exploramos histórias de superação,
                            expedições e conexão genuína com a natureza.</p>
                    </div>
                    <div class="service-card reveal-element delay-1">
                        <h3 class="service-title">Outdoor e Expedições</h3>
                        <p class="service-desc">Especialistas em ambientes naturais. Produções audiovisuais em
                            montanhas, trilhas e expedições.</p>
                    </div>
                    <div class="service-card reveal-element">
                        <h3 class="service-title">Comercial e Corporativo</h3>
                        <p class="service-desc">Elevamos a marca da sua empresa com a estética cinematográfica e o poder
                            do storytelling outdoor autêntico.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title reveal-element">PORTFOLIO</h2>
                    <div class="divider"></div>
                </div>

                <div id="portfolio-container" class="portfolio-container">
                    <!-- Dinâmico: 1 caso featured + bloco de 2 colunas + grade de 4 colunas -->
                    <div id="main-case" class="main-case"></div>
                    <div id="portfolio-grid" class="portfolio-grid portfolio-grid--quad"></div>
                    <div id="portfolio-duo" class="portfolio-grid portfolio-grid--duo"></div>
                </div>
            </div>
        </section>

        <!-- Clients Section -->
        <section id="clientes" class="clients section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title reveal-element">NOSSOS CLIENTES</h2>
                    <div class="divider"></div>
                </div>
                <div class="clients-marquee">
                    <div class="clients-track" id="clients-track">
                        <!-- Logos will be added here or via CSS if using a track -->
                        <!-- Example: <img src="clients_images/client1.png" alt="Cliente 1"> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section id="equipe" class="team section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title reveal-element">A EQUIPE</h2>
                    <div class="divider"></div>
                </div>

                <div class="team-grid">
                    <div class="team-member reveal-element">
                        <img src="assets/img/team-bruno.jpg" alt="Bruno Carvalho" class="team-img">
                        <h4 class="team-name">BRUNO CARVALHO</h4>
                        <p class="team-role">DIRETOR / FILMMAKER</p>
                    </div>
                    <div class="team-member reveal-element delay-1">
                        <img src="assets/img/team-inrie.jpg" alt="Inriê Maturano" class="team-img">
                        <h4 class="team-name">INRIÊ MATURANO</h4>
                        <p class="team-role">FILMMAKER</p>
                    </div>
                    <div class="team-member reveal-element">
                        <img src="assets/img/team-gabriel.png" alt="Gabriel Alpendre" class="team-img">
                        <h4 class="team-name">GABRIEL ALPENDRE</h4>
                        <p class="team-role">FILMMAKER</p>
                    </div>
                    <div class="team-member reveal-element delay-1">
                        <img src="assets/img/team-brayan.jpg" alt="Brayan Santos" class="team-img">
                        <h4 class="team-name">BRAYAN SANTOS</h4>
                        <p class="team-role">EDITOR / FILMMAKER</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contato" class="contact section">
            <div class="container">
                <div class="contact-card reveal-element">
                    <h2 class="contact-title">CONTATO</h2>
                    <p class="contact-desc">contato@aventufilm.com.br<br>+55 41 3012-5541</p>
                    <a href="mailto:contato@aventufilm.com.br" class="btn btn-outline">FALE CONOSCO</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-bottom">
                <img src="assets/img/logo.png" alt="Aventufilm Logo" class="footer-logo">
                <div class="footer-socials">
                    <a href="https://www.instagram.com/aventufilm/" target="_blank" aria-label="Instagram" class="social-link">
                        <svg viewBox="0 0 24 24"><path fill="currentColor" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                    </a>
                    <a href="https://www.youtube.com/channel/UClGp8G7fE0IXa_JgBNXc2Hw" target="_blank" aria-label="YouTube" class="social-link">
                        <svg viewBox="0 0 24 24"><path fill="currentColor" d="M23.498 6.163a3.003 3.003 0 0 0-2.11-2.11C19.518 3.545 12 3.545 12 3.545s-7.518 0-9.388.507a3.003 3.003 0 0 0-2.11 2.11C0 8.033 0 12 0 12s0 3.967.502 5.837a3.003 3.003 0 0 0 2.11 2.11c1.87.507 9.388.507 9.388.507s7.518 0 9.388-.507a3.003 3.003 0 0 0 2.11-2.11C24 15.967 24 12 24 12s0-3.967-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="https://www.behance.net/brunogc" target="_blank" aria-label="Behance" class="social-link">
                        <svg viewBox="0 0 24 24"><path fill="currentColor" d="M22 13h-4c0-.796.345-1.5 1.5-1.5s1.5.704 1.5 1.5zm-14-1.5h-2.5v-2h2.5c.827 0 1.5.449 1.5 1s-.673 1-1.5 1zm.5 4.5h-3v-2.5h3c.827 0 1.5.448 1.5 1s-.673 1.5-1.5 1.5zm15.5-2.5c0-2.481-1.637-4.5-4.5-4.5s-4.5 2.019-4.5 4.5 1.83 4.5 4.5 4.5 4.5-1.892 4.5-4.5zm-1.859 0c0 1.309-.949 2.5-2.641 2.5-1.545 0-2.613-1.07-2.613-2.5s1.176-2.5 2.613-2.5c1.699 0 2.641 1.191 2.641 2.5zm-1.641-5.5h-5v1h5v-1zm-11 1c0-1.378-1.122-2.5-2.5-2.5h-5.5v13h6c1.378 0 2.5-1.122 2.5-2.5 0-1.042-.641-1.926-1.551-2.296.91-.37 1.551-1.254 1.551-2.204z"/></svg>
                    </a>
                    <a href="https://wa.me/554130125541" target="_blank" aria-label="WhatsApp" class="social-link">
                        <svg viewBox="0 0 24 24"><path fill="currentColor" d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.739-1.456L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.859-4.407 9.862-9.837.001-2.63-1.024-5.101-2.885-6.964-1.862-1.863-4.337-2.887-6.971-2.888-5.442 0-9.866 4.41-9.87 9.839-.001 1.764.475 3.487 1.378 5.02L2.013 21.13l5.06-1.328-.426-.648zm11.317-7.291c-.299-.149-1.769-.873-2.043-.973-.274-.1-.474-.149-.674.15-.2.299-.773.973-.948 1.172-.175.199-.349.224-.648.075-.3-.15-1.266-.466-2.41-1.484-.89-.793-1.49-1.773-1.665-2.072-.175-.299-.019-.461.13-.609.135-.133.3-.349.449-.523.149-.174.199-.299.299-.498.1-.2.05-.373-.025-.523-.075-.15-.674-1.624-.923-2.222-.242-.583-.489-.504-.674-.514-.174-.01-.373-.012-.573-.012-.2 0-.523.075-.797.373-.274.299-1.047 1.022-1.047 2.492 0 1.47 1.071 2.89 1.221 3.089.15.199 2.107 3.218 5.104 4.512.713.308 1.27.492 1.704.63.716.228 1.368.196 1.883.119.574-.085 1.769-.723 2.018-1.42.249-.696.249-1.295.174-1.42-.075-.125-.274-.199-.573-.349z"/></svg>
                    </a>
                </div>
                <p>&copy; 2026 Aventufilm. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Behance-Style Cases Modal -->
    <div id="case-modal" class="modal">
        <div class="modal-overlay"></div>
        <button class="modal-close">&times;</button>
        <div class="modal-scroll-container">
            <div class="modal-content-wrapper">
                <div class="modal-header">
                    <h2 id="modal-title" class="modal-title"></h2>
                    <span id="modal-category" class="case-category"></span>
                    <p id="modal-desc" class="modal-desc"></p>
                </div>
                <div id="modal-body-content" class="modal-body-content">
                    <!-- Dynamic images/content will be injected here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Inject Data via PHP to avoid CORS/Fetch issues and automate asset discovery -->
    <?php
    // Portfolio
    $portfolio_json = file_get_contents('portfolio.json');
    echo "<script>const PORTFOLIO_DATA = " . ($portfolio_json ?: "[]") . ";</script>\n";

    // Hero Frames / Slideshow Images
    $raw_hero_files = glob("{hero_images,frames}/*.{jpg,jpeg,png,webp,gif,JPG,JPEG,PNG,WEBP,GIF}", GLOB_BRACE) ?: [];
    $unique_hero_files = [];
    foreach ($raw_hero_files as $file) {
        $base = basename($file);
        if (!isset($unique_hero_files[$base])) {
            $unique_hero_files[$base] = $file;
        }
    }
    $hero_files = array_values($unique_hero_files);
    echo "<script>const HERO_IMAGES = " . json_encode($hero_files) . ";</script>\n";

    // Client Logos
    $client_logos = glob("clients_images/*.{jpg,jpeg,png,webp,svg,gif}", GLOB_BRACE);
    echo "<script>const CLIENTS_LOGOS = " . json_encode($client_logos) . ";</script>\n";
    ?>
    <script src="main.js"></script>
</body>

</html>