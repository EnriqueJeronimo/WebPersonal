<?php
$stats = [
    ['num' => '+15',  'label' => 'Proyectos'],
    ['num' => '3',    'label' => 'Años de experiencia'],
    ['num' => '100%', 'label' => 'Clientes satisfechos'],
    ['num' => '<48h', 'label' => 'Tiempo de respuesta'],
];
?>
<div class="stats reveal">
    <?php foreach ($stats as $s): ?>
        <div class="stat">
            <div class="stat__num"><?= e($s['num']) ?></div>
            <div class="stat__label"><?= e($s['label']) ?></div>
        </div>
    <?php endforeach; ?>
</div>