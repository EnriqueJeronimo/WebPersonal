<?php
declare(strict_types=1);

class ProjectsController extends Controller
{
    public function index(): void
    {
        $this->view('projects', [
            'pageTitle'  => 'Proyectos — JerosDev',
            'activePage' => 'proyectos',
            'projects'   => Project::all(),
        ]);
    }
}