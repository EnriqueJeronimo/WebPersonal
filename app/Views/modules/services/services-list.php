<?php
/** Iconos SVG por tipo */
$icons = [
    'monitor' => '<rect x="3" y="4" width="18" height="14" rx="2"/><path d="M8 21h8M12 18v3"/>',
    'cart'    => '<path d="M3 6h18l-1.5 12.5a2 2 0 0 1-2 1.5H6.5a2 2 0 0 1-2-1.5L3 6Z"/><path d="M8 10a4 4 0 0 0 8 0"/>',
    'code'    => '<path d="m8 6-6 6 6 6M16 6l6 6-6 6M14 4l-4 16"/>',
    'bolt'    => '<path d="M13 2 3 14h8l-1 8 10-12h-8l1-8Z"/>',
    'folder'  => '<path d="M4 17V7a2 2 0 0 1 2-2h4l2 2h6a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2Z"/>',
    'wrench'  => '<path d="M14.7 6.3a4 4 0 0 1 5 5L9 22H2v-7L14.7 6.3Z"/><path d="m12 9 3 3"/>',
];
?>
<div class="services reveal">
    <?php foreach ($services as $s): ?>
        <article class="service">
            <span class="service__num"><?= e($s['num']) ?></span>
            <div class="service__icon">
                <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <?= $icons[$s['icon']] ?? '' ?>
                </svg>
            </div>
            <h3><?= e($s['title']) ?></h3>
            <p><?= e($s['desc']) ?></p>
        </article>
    <?php endforeach; ?>
</div>