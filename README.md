Simplified Wrapper to infyomlabs/laravel-generator
======================================================

# Scaffold Laravel Model, Controller, Routes and Views using Bulma CSS Framework

This is an extension [infyomlabs/laravel-generator](https://github.com/InfyOmLabs/laravel-generator) package. Documentation is located [here](http://labs.infyom.com/laravelgenerator)

If you prefer less boilerplate in your generated stuff you can use this package instead.

* Controllers without repositories
* Models without soft deletes and based in conventions for table and key names
* Clean views using Bulma Css. No javascript at all.
* Language files for automatic translate fields in your views (if you use conventional names in english for your database)

## Usage

### Step 1: Add the package and its dependencies to composer.json

```
"require": {
    "disitec/laravel-generator": "dev-master@dev",
    "infyomlabs/laravel-generator": "5.3.x-dev",
    "laravelcollective/html": "^5.3.0"
}
 ```
Run `composer udpdate`

### Step 2: Add Service Providers

Add following service providers into your providers array in `config/app.php`

```
 \Disitec\LaravelGenerator\LaravelGeneratorServiceProvider::class,
 \InfyOm\Generator\InfyOmGeneratorServiceProvider::class,
 Collective\Html\HtmlServiceProvider::class,
 Laracasts\Flash\FlashServiceProvider::class,
 ```

 ### Step 3: Add Aliases

 Add following aliases into your aliases array in `config/app.php`

 ```
  'Form' => Collective\Html\FormFacade::class,
  'Html' => Collective\Html\HtmlFacade::class,
  'Flash'     => Laracasts\Flash\Flash::class,
  ```

  ### Step 4: Init the package

   Run this command in console: `php artisan disitec:init`

  This command will create the config, the simplified stub for controller and model and the menu layout.

  ### Step 5: Publish tranlations

   If you want to translate your Views you can run `php artisan vendor:publish --tag=disitec-generator.lang`

You have two files:

One for the models, with this structure (You can use a pipe for declaring plural)

   ```
    return [
        'Brand'    => 'Marca|Marcas',
        'Customer' => 'Cliente|Clientes',
        'Model'    => 'Modelo|Modelos',
        'Product'  => 'Producto|Productos',
        'Provider' => 'Proveedor|Proveedores',
        'Supplier' => 'Proveedor|Proveedores',
    ];
    ```
    And one for the fields:

    ```
    return [
        'Name' => 'Nombre',
        'Email' => 'E-mail',
    ];
    ```

    You can create one folder for each locale that you need.