<html lang="<?= service('language')->getLocale() ?>" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morphine | Professional Developer Portfolio</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@700;800&display=swap"
        rel="stylesheet">
    <!-- Tailwind CSS 4 CDN (Browser Bundle) -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
            --color-morphine-dark: #070708;
            --color-morphine-violet: #8b5cf6;
            --color-morphine-indigo: #6366f1;
            --color-morphine-glass: rgba(255, 255, 255, 0.02);
            --color-morphine-border: rgba(255, 255, 255, 0.05); /* Thinner border */
            
            --font-heading: "Outfit", sans-serif;
            --font-body: "Inter", sans-serif;
            
            --radius-bento: 32px; /* Smoother corners */
        }

        @layer base {
            body {
                @apply bg-morphine-dark text-gray-200 font-body antialiased selection:bg-morphine-violet/30;
                letter-spacing: -0.01em;
            }
            [id] {
                @apply scroll-mt-32;
            }
        }

        @layer components {
            .glass-card {
                @apply bg-morphine-glass backdrop-blur-2xl border border-morphine-border rounded-bento overflow-hidden transition-all duration-700 ease-out hover:bg-white/[0.04] hover:border-morphine-violet/20 hover:shadow-[0_0_80px_-20px_rgba(139,92,246,0.1)];
            }
            
            .bento-grid {
                @apply grid grid-cols-1 md:grid-cols-4 gap-8;
            }
            
            .nav-link {
                @apply text-sm font-medium text-gray-400 hover:text-white transition-all duration-300 relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-px after:bg-morphine-violet after:transition-all hover:after:w-full;
            }
        }

        /* Custom Utilities */
        @utility text-gradient {
            background: linear-gradient(180deg, #fff 30%, rgba(255,255,255,0.7) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @utility shadow-glow {
            box-shadow: 0 0 100px -20px rgba(139, 92, 246, 0.15);
        }

        @utility animate-reveal {
            animation: reveal 1.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes reveal {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    <!-- Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://t.contentsquare.net/uxa/f3dc805c32e92.js"></script>
</head>

<body class="bg-morphine-dark text-gray-100 font-body antialiased selection:bg-morphine-violet/30">
    <!-- Navigation -->
    <nav
        class="fixed top-6 left-1/2 -translate-x-1/2 w-[90%] max-w-6xl z-50 px-8 py-4 glass-card flex justify-between items-center group">
        <div
            class="text-2xl font-heading font-extrabold tracking-tighter bg-linear-to-r from-white to-morphine-violet bg-clip-text text-transparent group-hover:to-white transition-all duration-700">
            MORPHINE
        </div>
        <div class="hidden md:flex items-center gap-10">
            <a href="#about" class="nav-link"><?= __t('nav.about') ?></a>
            <a href="#skills" class="nav-link"><?= __t('nav.skills') ?></a>
            <a href="#projects" class="nav-link"><?= __t('nav.projects') ?></a>
            
            <!-- Language Switcher -->
            <div class="flex items-center gap-3 border-l border-morphine-border pl-10">
                <?php foreach(config('App')->supportedLocales as $locale): ?>
                    <a href="<?= base_url($locale) ?>" 
                       class="text-[10px] font-bold tracking-widest uppercase transition-all <?= service('language')->getLocale() == $locale ? 'text-morphine-violet' : 'text-gray-500 hover:text-white' ?>">
                        <?= $locale ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <a href="#contact"
                class="px-6 py-2.5 glass-card !rounded-full text-sm font-bold text-white hover:shadow-glow transition-all">
                <?= __t('nav.contact') ?>
            </a>
        </div>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="mt-20 py-12 border-t border-morphine-border text-center">
        <div class="max-w-6xl mx-auto px-4">
            <p class="text-gray-500 text-sm">&copy; <?= date('Y') ?> Morphine. <?= __t('footer.rights') ?></p>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>