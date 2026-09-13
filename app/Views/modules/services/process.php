<div class="process reveal">
    <?php foreach ($process as $p): ?>
        <div class="step">
            <div class="step__num"><?= e($p['num']) ?></div>
            <h4><?= e($p['title']) ?></h4>
            <p><?= e($p['desc']) ?></p>
        </div>
    <?php endforeach; ?>
</div>