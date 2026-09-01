document.addEventListener('DOMContentLoaded', () => {
    // Reveal Elements on Scroll
    const revealElements = document.querySelectorAll('.reveal-text, .reveal-element');

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target); // Reveal only once
            }
        });
    }, {
        root: null,
        threshold: 0.1,
        rootMargin: "0px"
    });

    revealElements.forEach(el => {
        revealObserver.observe(el);
    });

    // Mobile Menu Toggle
    const menuToggle = document.getElementById('menu-toggle');
    const nav = document.querySelector('.nav');

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        nav.classList.toggle('active');
    });

    // Close mobile menu when clicking a link
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (nav.classList.contains('active')) {
                menuToggle.classList.remove('active');
                nav.classList.remove('active');
            }
        });
    });

    // Header Background on Scroll
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Trigger initial reveals
    setTimeout(() => {
        document.querySelectorAll('.hero .reveal-text').forEach(el => {
            el.classList.add('active');
        });
    }, 100);

    // Hero Slideshow Logic
    function setupHeroSlideshow() {
        const container = document.getElementById('hero-slideshow');
        if (!container) return;

        // Use injected HERO_IMAGES if not empty, otherwise use fallback
        let images = (typeof HERO_IMAGES !== 'undefined' && HERO_IMAGES.length > 0)
            ? HERO_IMAGES
            : [
                'portfolio_images/case1.jpg',
                'portfolio_images/case2.jpg',
                'assets/img/hero-bg.png'
            ];

        let currentIndex = 0;
        const slides = [];

        // Create slides
        images.forEach((src, index) => {
            const cleanSrc = src.replace(/\\/g, '/');
            const slide = document.createElement('div');
            slide.className = 'hero-slide ken-burns';
            slide.style.backgroundImage = `url('${cleanSrc}')`;
            if (index === 0) slide.classList.add('active');
            container.appendChild(slide);
            slides.push(slide);
        });

        // Rotate slides
        setInterval(() => {
            slides[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % slides.length;
            slides[currentIndex].classList.add('active');
        }, 6000); // Change every 6 seconds
    }

    setupHeroSlideshow();

    // Portfolio Logic
    let portfolioData = typeof PORTFOLIO_DATA !== 'undefined' ? PORTFOLIO_DATA : [];

    function createCaseCard(caseItem, isMain = false) {
        const article = document.createElement('article');
        article.className = `case-card reveal-element ${isMain ? '' : 'delay-1'}`;
        article.setAttribute('data-case', caseItem.id);

        article.innerHTML = `
            <div class="case-img-wrapper">
                <img src="${caseItem.thumbnail}" alt="${caseItem.title}" class="case-img" loading="lazy" onerror="this.style.display='none'">
            </div>
            <div class="case-info">
                <span class="case-category">${caseItem.category}</span>
                <h3 class="case-title">${caseItem.title}</h3>
            </div>
        `;

        article.addEventListener('click', () => openModal(caseItem.id));

        // Observe new element
        revealObserver.observe(article);

        return article;
    }

    function renderPortfolio() {
        const mainCaseContainer = document.getElementById('main-case');
        const duoContainer = document.getElementById('portfolio-duo');
        const gridContainer = document.getElementById('portfolio-grid');

        if (!mainCaseContainer || !gridContainer) return;

        mainCaseContainer.innerHTML = '';
        if (duoContainer) duoContainer.innerHTML = '';
        gridContainer.innerHTML = '';

        portfolioData.forEach((item, index) => {
            const block = item.block || (index === 0 ? 'featured' : 'grid');
            if (block === 'featured') {
                mainCaseContainer.appendChild(createCaseCard(item, true));
            } else if (block === 'duo' && duoContainer) {
                duoContainer.appendChild(createCaseCard(item, false));
            } else {
                gridContainer.appendChild(createCaseCard(item, false));
            }
        });
    }

    // Modal Logic
    const modal = document.getElementById('case-modal');
    const modalClose = document.querySelector('.modal-close');
    const modalOverlay = document.querySelector('.modal-overlay');
    const modalTitle = document.getElementById('modal-title');
    const modalCategory = document.getElementById('modal-category');
    const modalDesc = document.getElementById('modal-desc');
    const modalBodyContent = document.getElementById('modal-body-content');

    function openModal(caseId) {
        const data = portfolioData.find(item => item.id === caseId);
        if (!data) return;

        modalTitle.textContent = data.title;
        modalCategory.textContent = data.category;
        modalDesc.innerHTML = `<p>${data.description}</p>`;

        if (data.projectUrl) {
            const label = data.projectLabel || 'Ver projeto';
            modalDesc.innerHTML += `<a href="${data.projectUrl}" target="_blank" rel="noopener" class="btn btn-outline modal-project-link">${label} &nbsp;&rarr;</a>`;
        }

        modalBodyContent.innerHTML = '';

        // Video Player (YouTube or Local MP4/WebM)
        if (data.videoUrl) {
            const videoWrapper = document.createElement('div');
            videoWrapper.className = 'modal-video-wrapper';
            
            const isLocalVideo = data.videoUrl.endsWith('.mp4') || data.videoUrl.endsWith('.webm') || data.videoUrl.startsWith('portfolio_images/') || data.videoUrl.startsWith('assets/');
            
            if (isLocalVideo) {
                videoWrapper.innerHTML = `<video width="100%" height="100%" controls style="display:block; width:100%; background:#000;"><source src="${data.videoUrl}" type="video/mp4">Seu navegador não suporta a reprodução de vídeos.</video>`;
            } else {
                videoWrapper.innerHTML = `<iframe width="100%" height="100%" src="${data.videoUrl}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
            }
            modalBodyContent.appendChild(videoWrapper);
        }

        // Galeria: stripe de fotos pequenas abaixo do vídeo
        if (data.images && data.images.length > 0) {
            const gallery = document.createElement('div');
            gallery.className = 'modal-gallery';
            data.images.forEach(imgUrl => {
                const thumb = document.createElement('img');
                thumb.src = imgUrl;
                thumb.alt = `${data.title}`;
                thumb.loading = 'lazy';
                thumb.className = 'modal-thumb';
                thumb.onerror = () => thumb.remove();
                thumb.addEventListener('click', () => openLightbox(imgUrl));
                gallery.appendChild(thumb);
            });
            modalBodyContent.appendChild(gallery);
        }

        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.remove('active');
        if (lightbox) lightbox.classList.remove('active');
        document.body.style.overflow = '';
        setTimeout(() => {
            modalBodyContent.innerHTML = '';
        }, 400);
    }

    modalClose.addEventListener('click', closeModal);
    modalOverlay.addEventListener('click', closeModal);

    // Lightbox para ampliar as fotos da galeria
    let lightbox = null;
    function openLightbox(src) {
        if (!lightbox) {
            lightbox = document.createElement('div');
            lightbox.className = 'lightbox';
            lightbox.innerHTML = '<img alt="">';
            lightbox.addEventListener('click', () => lightbox.classList.remove('active'));
            document.body.appendChild(lightbox);
        }
        lightbox.querySelector('img').src = src;
        lightbox.classList.add('active');
    }
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && lightbox && lightbox.classList.contains('active')) {
            lightbox.classList.remove('active');
        }
    });

    // Initial Fetch (Now handled by PHP injection)
    function initPortfolio() {
        if (portfolioData && portfolioData.length > 0) {
            renderPortfolio();
        } else {
            console.warn('Usando PORTFOLIO_DATA como fallback.');
            portfolioData = typeof PORTFOLIO_DATA !== 'undefined' ? PORTFOLIO_DATA : [];
            renderPortfolio();
        }
    }

    initPortfolio();

    // Clients Logos
    function setupClients() {
        const track = document.getElementById('clients-track');
        if (!track) return;

        // Use scanned logos from PHP if available
        const logos = (typeof CLIENTS_LOGOS !== 'undefined' && CLIENTS_LOGOS.length > 0)
            ? CLIENTS_LOGOS
            : [
                'assets/img/logo.png', // Fallback
                'assets/img/logo.png',
                'assets/img/logo.png',
                'assets/img/logo.png',
                'assets/img/logo.png'
            ];

        // Duplicate for seamless loop
        const allLogos = [...logos, ...logos];
        allLogos.forEach(logo => {
            const img = document.createElement('img');
            img.src = logo;
            const name = logo.split('/').pop().replace(/\.[^.]+$/, '').replace(/[-_]/g, ' ');
            img.alt = 'Logo ' + name;
            img.loading = 'lazy';
            track.appendChild(img);
        });
    }

    setupClients();
});
