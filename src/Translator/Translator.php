<?php
namespace Disitec\LaravelGenerator\Translator;

class Translator
{
    protected $views = [
        'create',
        'edit',
        'show',
        'index' => [
            'plural' => true
        ],
        'menu' => [
            'type' => 'menu',
            'plural' => true
        ]
    ];

    protected $fieldsViews = [
        'fields',
        'show_fields',
        'table'
    ];

    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function controller()
    {
        $this->translate($this->getPath());

        return 'Controller has been translated.';
    }

    public function views()
    {
        foreach ($this->views as $key => $value) {
            if (is_array($value)) {
                $value["name"] = $key;
            }
            $file = $this->getFile($value);
            $this->translate($file["path"], $file["plural"]);
        }

        return 'Views have been translated.';
    }

    public function fields()
    {
        foreach ($this->fieldsViews as $fieldView) {
            $path =  "{$this->getViewsPath()}/{$fieldView}.blade.php";
            $this->translateFields($path);
        }
    }

    protected function translate($path, $plural = false)
    {
        $translatedModel = $this->getTranslation($this->model, 'models', $plural);
        $model = $plural ? str_plural($this->model) : $this->model;

        file_put_contents($path, str_replace("#-{$model}-#", $translatedModel, file_get_contents($path)));
    }
    
    protected function translateFields($path) 
    {
        file_put_contents($path, preg_replace_callback(
            "/\#-([\w|\s_]+)\-#/",
            function($m) {  return $this->getTranslation($m[1], 'fields'); },
            file_get_contents($path)
        ));
    }

    protected function getFile($view)
    {
        $file = [];

        if (is_array($view)) {
            $file["name"] = $view["name"];
            $file["plural"] = array_key_exists('plural',$view) ? $view['plural'] : false;
            $file["type"] = array_key_exists('type',$view) ? $view['type'] : 'view';
        } else {
            $file["name"] = $view;
            $file["plural"] = false;
            $file["type"] = 'view';
        }

        $file["path"] = $this->getPath($file);

        return $file;
    }

    protected function getPath($file = null)
    {
        if (!$file) {
            $path = config('infyom.laravel_generator.path.controller', app_path('Http/Controllers/'));
            return "{$path}/{$this->model}Controller.php";
        }

        if ($file["type"] == 'view') {
            return "{$this->getViewsPath()}/{$file["name"]}.blade.php";
        }

        if ($file["type"] == 'menu') {
            $menuFile = config('infyom.laravel_generator.add_on.menu.menu_file', 'layouts/menu.blade.php');
            return resource_path("views/{$menuFile}");
        }
    }

    protected function getViewsPath()
    {
        $path = config('infyom.laravel_generator.path.views', resource_path('views/'));
        $folder = snake_case(str_plural($this->model));
        return "{$path}{$folder}";
    }

    public function getTranslation($word, $file, $plural = false)
    {
        $line = camel_case($word);
        $needle = ":{$file}.{$line}";

        $key = trans_choice("disitec:{$needle}", $plural ? 2 : 1);

        if ($key === $needle) {
            return $word;
        }

        return $key;
    }
}