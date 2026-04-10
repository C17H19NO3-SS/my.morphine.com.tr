<?= $this->extend('portfolio/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative h-screen flex flex-col items-center justify-center text-center overflow-hidden">
    <!-- Abstract Background Pattern (using generated image with tailwind overlay) -->
    <div class="absolute inset-0 z-[-1]">
        <img src="<?= base_url('images/hero_bg.png') ?>" alt="" class="w-full h-full object-cover opacity-30 grayscale-[50%] brightness-[40%]">
        <div class="absolute inset-0 bg-radial-[at_50%_50%] from-morphine-violet/15 to-transparent"></div>
    </div>

    <div class="space-y-10 px-4 animate-reveal">
        <h1 class="text-8xl md:text-[12rem] font-heading font-extrabold tracking-tighter text-gradient leading-none">
            MORPHINE
        </h1>
        <p class="max-w-2xl mx-auto text-xl md:text-2xl text-gray-400 font-medium leading-relaxed">
            <?= __t('hero.subtitle') ?>
        </p>
        <div class="flex flex-wrap justify-center gap-6 pt-10">
            <a href="#projects" class="px-10 py-5 glass-card !rounded-2xl bg-white/[0.03] font-bold hover:shadow-glow flex items-center gap-3 group transition-all">
                <?= __t('hero.cta_discover') ?> <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="#contact" class="px-10 py-5 font-bold text-gray-400 hover:text-white transition-colors">
                <?= __t('hero.cta_contact') ?>
            </a>
        </div>
    </div>
</section>

<!-- Hakkımda Section -->
<section id="about" class="py-64">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-24 items-center">
            <!-- Text Bio -->
            <div class="lg:col-span-7 space-y-10 animate-reveal">
                <div class="p-5 bg-morphine-violet/5 border border-morphine-violet/10 rounded-2xl w-fit">
                    <i data-lucide="user" class="text-morphine-violet w-6 h-6"></i>
                </div>
                <h2 class="text-6xl font-heading font-extrabold tracking-tighter leading-tight">
                    <?= __t('about.heading') ?>
                </h2>
                <div class="space-y-6 text-gray-400 text-xl leading-relaxed font-medium">
                    <p>
                        <?= __t('about.bio1') ?>
                    </p>
                    <p>
                        <?= __t('about.bio2') ?>
                    </p>
                </div>
                <div class="pt-6">
                    <a href="#contact" class="inline-flex items-center gap-3 text-white font-bold hover:text-morphine-violet transition-colors group text-lg">
                        <?= __t('about.cta') ?> <i data-lucide="arrow-up-right" class="w-5 h-5 group-hover:-translate-y-1 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Stats Stack -->
            <div class="lg:col-span-5 space-y-8 animate-reveal">
                <div class="glass-card p-12 flex flex-col items-center justify-center text-center group">
                    <div class="text-7xl font-heading font-black text-gradient group-hover:scale-105 transition-transform duration-700">5+</div>
                    <div class="text-gray-500 text-xs mt-4 uppercase tracking-[0.3em] font-extrabold"><?= __t('about.stats.experience') ?></div>
                </div>

                <div class="glass-card p-12 flex flex-col items-center justify-center text-center group">
                    <div class="text-7xl font-heading font-black text-gradient group-hover:scale-105 transition-transform duration-700">50+</div>
                    <div class="text-gray-500 text-xs mt-4 uppercase tracking-[0.3em] font-extrabold"><?= __t('about.stats.projects') ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Yetenekler Section -->
<section id="skills" class="py-64 relative overflow-hidden">
    <!-- Subtle glow background for skills area -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-morphine-violet/5 blur-[120px] rounded-full pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 relative">
        <div class="text-center mb-24 space-y-6 animate-reveal">
            <h2 class="text-5xl md:text-6xl font-heading font-extrabold tracking-tight">
                <?= __t('skills.title') ?>
            </h2>
            <p class="text-gray-500 text-xl max-w-2xl mx-auto font-medium"><?= __t('skills.subtitle') ?></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Frontend -->
            <div class="glass-card p-10 space-y-8 hover:-translate-y-2 transition-transform duration-500">
                <div class="w-14 h-14 bg-blue-500/[0.03] border border-blue-500/10 rounded-2xl flex items-center justify-center">
                    <i data-lucide="monitor" class="text-blue-400 w-7 h-7"></i>
                </div>
                <h4 class="text-2xl font-bold font-heading">Frontend</h4>
                <div class="flex flex-wrap gap-3">
                    <?php foreach(['React.js', 'Next.js', 'Tailwind 4', 'TypeScript', 'Web Design'] as $s): ?>
                        <span class="px-4 py-2 bg-white/[0.02] border border-white/[0.05] rounded-xl text-sm font-semibold text-gray-400 hover:text-white hover:border-morphine-violet/40 transition-all cursor-default">
                            <?= $s ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Backend -->
            <div class="glass-card p-10 space-y-8 hover:-translate-y-2 transition-transform duration-500">
                <div class="w-14 h-14 bg-green-500/[0.03] border border-green-500/10 rounded-2xl flex items-center justify-center">
                    <i data-lucide="server" class="text-green-400 w-7 h-7"></i>
                </div>
                <h4 class="text-2xl font-bold font-heading">Backend</h4>
                <div class="flex flex-wrap gap-3">
                    <?php foreach(['PHP / CI4', 'MySQL', 'Node.js', 'REST API', 'PostgreSQL'] as $s): ?>
                        <span class="px-4 py-2 bg-white/[0.02] border border-white/[0.05] rounded-xl text-sm font-semibold text-gray-400 hover:text-white hover:border-morphine-violet/40 transition-all cursor-default">
                            <?= $s ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Tools -->
            <div class="glass-card p-10 space-y-8 hover:-translate-y-2 transition-transform duration-500">
                <div class="w-14 h-14 bg-purple-500/[0.03] border border-purple-500/10 rounded-2xl flex items-center justify-center">
                    <i data-lucide="terminal" class="text-purple-400 w-7 h-7"></i>
                </div>
                <h4 class="text-2xl font-bold font-heading">DevOps</h4>
                <div class="flex flex-wrap gap-3">
                    <?php foreach(['Git / GitHub', 'Docker', 'Vite', 'NPM', 'Linux'] as $s): ?>
                        <span class="px-4 py-2 bg-white/[0.02] border border-white/[0.05] rounded-xl text-sm font-semibold text-gray-400 hover:text-white hover:border-morphine-violet/40 transition-all cursor-default">
                            <?= $s ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="max-w-6xl mx-auto px-4 py-32">
    <div class="text-center mb-24 space-y-6 animate-reveal">
        <h2 class="text-5xl md:text-6xl font-heading font-extrabold tracking-tight">
            <?= __t('projects.title') ?>
        </h2>
        <p class="text-gray-500 text-xl font-medium"><?= __t('projects.subtitle') ?></p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        <!-- Dynamic Project Cards -->
        <?php if (!empty($projects)): ?>
            <?php foreach($projects as $p): ?>
            <a href="<?= $p['url'] ?>" target="_blank" class="glass-card group cursor-pointer aspect-[4/5] relative flex items-center justify-center">
                <div class="absolute inset-x-0 bottom-0 p-10 bg-linear-to-t from-black/95 to-transparent translate-y-6 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-700">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <?php foreach($p['tags'] ?? [] as $tag): ?>
                            <span class="text-[10px] uppercase tracking-widest font-bold text-morphine-violet/80 bg-morphine-violet/5 px-2 py-0.5 rounded-full border border-morphine-violet/10"><?= $tag ?></span>
                        <?php endforeach; ?>
                    </div>
                    <h4 class="text-2xl font-bold mb-3 font-heading tracking-tight"><?= $p['title'] ?></h4>
                    <p class="text-gray-400 text-base leading-relaxed line-clamp-2"><?= $p['description'] ?></p>
                </div>
                <!-- Project Icon / Visual -->
                <div class="p-16 bg-white/[0.03] border border-white/[0.05] rounded-full group-hover:scale-90 transition-all duration-1000 group-hover:border-morphine-violet/30 group-hover:shadow-[0_0_50px_-10px_rgba(139,92,246,0.2)]">
                    <i data-lucide="<?= $p['icon'] ?? 'github' ?>" class="w-16 h-16 text-morphine-violet opacity-30 group-hover:opacity-100 transition-all"></i>
                </div>
            </a>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="col-span-full text-center text-gray-500 py-20 italic"><?= __t('projects.empty') ?></p>
        <?php endif; ?>
    </div>
</section>

<?= $this->endSection() ?>
