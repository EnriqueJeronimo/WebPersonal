<article class="project reveal">
    <div class="thumb">
        <span class="thumb__badge"><?= e($project['badge']) ?></span>
        <span class="thumb__label"><?= e($project['code']) ?></span>
    </div>

    <div class="project__body">
        <h3 class="project__title"><?= e($project['title']) ?></h3>
        <p class="project__desc"><?= e($project['desc']) ?></p>

        <div class="tags">
            <?php foreach ($project['tags'] as $tag): ?>
                <span class="tag"><?= e($tag) ?></span>
            <?php endforeach; ?>
        </div>

        <div class="project__links">
            <a href="<?= e($project['demo']) ?>" class="link">
                Ver proyecto
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M7 17 17 7M9 7h8v8"/></svg>
            </a>
            <a href="<?= e($project['repo']) ?>" class="link link--muted">Código</a>
        </div>
    </div>
</article>