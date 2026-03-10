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
            const slide = document.createElement('div');
            slide.className = 'hero-slide ken-burns';
            slide.style.backgroundImage = `url('${src}')`;
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

    function initPortfolio() {
        if (portfolioData.length > 0) {
            renderPortfolio(portfolioData);
        } else {
            console.error('Dados do portfolio não encontrados.');
        }
    }

    function createCaseCard(caseItem, isMain = false) {
        const article = document.createElement('article');
        article.className = `case-card reveal-element ${isMain ? '' : 'delay-1'}`;
        article.setAttribute('data-case', caseItem.id);

        article.innerHTML = `
            <div class="case-img-wrapper">
                <img src="${caseItem.thumbnail}" alt="${caseItem.title}" class="case-img">
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
        const gridContainer = document.getElementById('portfolio-grid');

        if (!mainCaseContainer || !gridContainer) return;

        mainCaseContainer.innerHTML = '';
        gridContainer.innerHTML = '';

        portfolioData.forEach((item, index) => {
            if (index === 0) {
                mainCaseContainer.appendChild(createCaseCard(item, true));
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

        modalBodyContent.innerHTML = '';

        // YouTube Video
        if (data.videoUrl) {
            const videoWrapper = document.createElement('div');
            videoWrapper.className = 'modal-video-wrapper';
            videoWrapper.innerHTML = `<iframe width="100%" height="100%" src="${data.videoUrl}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
            modalBodyContent.appendChild(videoWrapper);
        }

        // Images
        if (data.images && data.images.length > 0) {
            data.images.forEach(imgUrl => {
                const imgElement = document.createElement('img');
                imgElement.src = imgUrl;
                imgElement.alt = `${data.title} screenshot`;
                imgElement.loading = 'lazy';
                modalBodyContent.appendChild(imgElement);
            });
        }

        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
        setTimeout(() => {
            modalBodyContent.innerHTML = '';
        }, 400);
    }

    modalClose.addEventListener('click', closeModal);
    modalOverlay.addEventListener('click', closeModal);

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
            img.alt = 'Logo Cliente';
            track.appendChild(img);
        });
    }

    setupClients();
});
