<p align="center"><img src="https://i.ibb.co/pKJgXY5/laravel-modules-manager.png" height="192"></p>

<p align="center">
    <a href="https://packagist.org/packages/hexadog/laravel-themes-manager">
        <img src="https://poser.pugx.org/hexadog/laravel-themes-manager/v" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/hexadog/laravel-themes-manager">
        <img src="https://poser.pugx.org/hexadog/laravel-themes-manager/downloads" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/hexadog/laravel-themes-manager">
        <img src="https://poser.pugx.org/hexadog/laravel-themes-manager/license" alt="License">
    </a>
</p>

<!-- omit in toc -->
## Introduction
<code>azraf/laravel-themes-manager</code> is for testing hexadog/laravel-themes-manager package in my own project with some core modification. This testing may end OK. Its highly recommended you use the main package hexadog/laravel-themes-manager. This package will be under lots of testing, so highly possibility of end with lots of errors. So, if you want, use with your own risk.

```shell
composer require hexadog/laravel-themes-manager
```
Modified/testing package

```shell
composer require azraf/laravel-themes-manager
```

The package will automatically register its service provider.

To publish the config file to config/themes-manager.php run:
```shell
php artisan vendor:publish --provider="Hexadog\ThemesManager\Providers\PackageServiceProvider"
```

## Documentation
You can find the full documentation [here](https://laravel-themes-manager.netlify.app)

<!-- omit in toc -->
## Related projects
- [Laravel Theme Installer](https://github.com/hexadog/laravel-theme-installer): Composer plugin to install `laravel-theme` packages outside vendor directory .

<!-- omit in toc -->
## Credits
- Logo made by [DesignEvo free logo creator](https://www.designevo.com/logo-maker/)

<!-- omit in toc -->
## License
Laravel Themes Manager is open-sourced software licensed under the [MIT license](LICENSE).