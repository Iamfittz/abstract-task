<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdb4d614b0f3cf8885dad33819cb203d
{
    public static $classMap = array (
        'App\\Components\\Parsers\\AbstractParser' => __DIR__ . '/../..' . '/app/components/parsers/AbstractParser.php',
        'App\\Components\\Parsers\\JSONParser' => __DIR__ . '/../..' . '/app/components/parsers/JSONParser.php',
        'App\\Components\\Parsers\\ParserManager' => __DIR__ . '/../..' . '/app/components/parsers/ParserManager.php',
        'App\\Components\\Parsers\\XMLParser' => __DIR__ . '/../..' . '/app/components/parsers/XMLParser.php',
        'App\\Components\\Widgets\\CategoriesNavigationWidget' => __DIR__ . '/../..' . '/app/components/widgets/CategoriesNavigationWidget.php',
        'App\\Controllers\\ArticlesController' => __DIR__ . '/../..' . '/app/controllers/ArticlesController.php',
        'App\\Controllers\\BaseController' => __DIR__ . '/../..' . '/app/controllers/BaseController.php',
        'App\\Controllers\\SiteController' => __DIR__ . '/../..' . '/app/controllers/SiteController.php',
        'App\\Models\\Article' => __DIR__ . '/../..' . '/app/models/Article.php',
        'App\\Models\\Category' => __DIR__ . '/../..' . '/app/models/Category.php',
        'App\\Models\\SectionCategory' => __DIR__ . '/../..' . '/app/models/SectionCategory.php',
        'Engine\\App' => __DIR__ . '/../..' . '/engine/App.php',
        'Engine\\Auth\\Auth' => __DIR__ . '/../..' . '/engine/Auth/Auth.php',
        'Engine\\Auth\\Traits\\IdentityTrait' => __DIR__ . '/../..' . '/engine/Auth/Traits/IdentityTrait.php',
        'Engine\\Config\\Config' => __DIR__ . '/../..' . '/engine/Config/Config.php',
        'Engine\\Controllers\\Controller' => __DIR__ . '/../..' . '/engine/Controllers/Controller.php',
        'Engine\\Database\\Connection' => __DIR__ . '/../..' . '/engine/Database/Connection.php',
        'Engine\\Database\\Interfaces\\DatabaseConnectionInterface' => __DIR__ . '/../..' . '/engine/Database/Interfaces/DatabaseConnectionInterface.php',
        'Engine\\Database\\MySqlConnection' => __DIR__ . '/../..' . '/engine/Database/MySqlConnection.php',
        'Engine\\Exceptions\\NotFoundException' => __DIR__ . '/../..' . '/engine/Exceptions/NotFoundException.php',
        'Engine\\Filesystem\\File' => __DIR__ . '/../..' . '/engine/Filesystem/File.php',
        'Engine\\Filesystem\\SimpleImage' => __DIR__ . '/../..' . '/engine/Filesystem/SimpleImage.php',
        'Engine\\Html\\Html' => __DIR__ . '/../..' . '/engine/Html/Html.php',
        'Engine\\Http\\Http' => __DIR__ . '/../..' . '/engine/Http/Http.php',
        'Engine\\Models\\Model' => __DIR__ . '/../..' . '/engine/Models/Model.php',
        'Engine\\Routing\\Router' => __DIR__ . '/../..' . '/engine/Routing/Router.php',
        'Engine\\Validators\\Validator' => __DIR__ . '/../..' . '/engine/Validators/Validator.php',
        'Engine\\View\\View' => __DIR__ . '/../..' . '/engine/View/View.php',
        'Engine\\View\\Widgets\\BreadCrumbsWidget' => __DIR__ . '/../..' . '/engine/View/Widgets/BreadCrumbsWidget.php',
        'Engine\\View\\Widgets\\SidebarNavigationWidget' => __DIR__ . '/../..' . '/engine/View/Widgets/SidebarNavigationWidget.php',
        'Engine\\View\\Widgets\\Widget' => __DIR__ . '/../..' . '/engine/View/Widgets/Widget.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitcdb4d614b0f3cf8885dad33819cb203d::$classMap;

        }, null, ClassLoader::class);
    }
}