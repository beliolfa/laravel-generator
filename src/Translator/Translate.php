<?php
namespace Disitec\LaravelGenerator\Translator;

class Translate
{
    protected $views = [
        'create',
        'edit',
        'show'
    ];

    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function controller()
    {
        $controllerPath = config('infyom.laravel_generator.path.controller', app_path('Http/Controllers/'));

        $controller = "{$controllerPath}/{$this->model}Controller.php";

        $translatedModel = $this->get($this->model, 'models');

        file_put_contents($controller, str_replace("#-{$this->model}-#", $translatedModel, file_get_contents($controller)));
        
        return 'Controller has been translated.';
    }

    public function views()
    {
        $viewPath = config('infyom.laravel_generator.path.views', resource_path('views'));
        $folder = strtolower(str_plural($this->model));
        
        foreach ($this->views as $view) {
            $file = "{$viewPath}/{$folder}/{$view}.blade.php";

            $translatedModel = $this->get($this->model, 'models');

            file_put_contents($file, str_replace("#-{$this->model}-#", $translatedModel, file_get_contents($file)));
        }

        return 'Views have been translated.';
    }

    public function get($line, $file)
    {
        $needle = "disitec::{$file}.{$line}";

        $key = trans_choice($needle,1);

        if ($key === $needle) {
            return $line;
        }

        return $key;
    }
}