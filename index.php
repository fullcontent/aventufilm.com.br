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
                        <p class="service-desc">Especialistas em ambientes hostis. Produções audiovisuais em montanhas,
                            trilhas e expedições extremas.</p>
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
                    <!-- Dynamic Content: 1 main case + grid of 2 columns -->
                    <div id="main-case" class="main-case"></div>
                    <div id="portfolio-grid" class="portfolio-grid"></div>
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

    // Hero Images
    $hero_files = glob("hero_images/*.{jpg,jpeg,png,webp,gif}", GLOB_BRACE);
    echo "<script>const HERO_IMAGES = " . json_encode($hero_files) . ";</script>\n";

    // Client Logos
    $client_logos = glob("clients_images/*.{jpg,jpeg,png,webp,svg,gif}", GLOB_BRACE);
    echo "<script>const CLIENTS_LOGOS = " . json_encode($client_logos) . ";</script>\n";
    ?>
    <script src="main.js"></script>
</body>

</html>