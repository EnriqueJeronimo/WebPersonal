<div class="projects">
    <?php foreach ($projects as $project): ?>
        <?php view_module('projects/project-card', ['project' => $project]); ?>
    <?php endforeach; ?>
</div>