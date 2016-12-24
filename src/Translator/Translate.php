<?php
namespace Disitec\LaravelGenerator\Translator;

class Translate
{
    public static function controller($model) 
    {
        $controllerPath = config('infyom.laravel_generator.path.controller', app_path('Http/Controllers/'));

        $controller = "{$controllerPath}/{$model}Controller.php";

        $translatedModel = self::get($model, 'models');

        file_put_contents($controller, str_replace("#{$model}#", $translatedModel, file_get_contents($controller)));
        
        return 'Controller has been translated.';
    }

    public static function get($line, $file)
    {
        $needle = "disitec::{$file}.{$line}";

        $key = trans($needle);

        if ($key === $needle) {
            return $line;
        }

        return $key;
    }
}