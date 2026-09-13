<?php
$tech = ['HTML5','CSS3','JavaScript','React','Node.js','Tailwind','Git','Figma','MySQL','REST API'];
$list = array_merge($tech, $tech); // duplicado para loop infinito
?>
<div class="marquee">
    <div class="marquee__track">
        <?php foreach ($list as $t): ?>
            <div class="marquee__item"><?= e($t) ?></div>
        <?php endforeach; ?>
    </div>
</div>