# Lumen PHP Framework Base en laravel

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen es un micro-framework PHP increíblemente rápido para crear aplicaciones web con una sintaxis expresiva y elegante. Creemos que el desarrollo debe ser una experiencia agradable y creativa para que sea realmente satisfactorio. Lumen intenta eliminar el dolor del desarrollo al facilitar las tareas comunes que se utilizan en la mayoría de los proyectos web, como el enrutamiento, la abstracción de la base de datos, la cola y el almacenamiento en caché.

## Documentación Oficial

La documentación del marco se puede encontrar en el [sitio web de Lumen] (https://lumen.laravel.com/docs).

## Contribuyendo

¡Gracias por considerar contribuir con Lumen! La guía de contribución se puede encontrar en la [documentación de Laravel] (https://laravel.com/docs/contributions).

## Vulnerabilidades de seguridad

Si descubre una vulnerabilidad de seguridad dentro de Lumen, envíe un correo electrónico a Taylor Otwell a taylor@laravel.com. Todas las vulnerabilidades de seguridad se abordarán de inmediato.

## Licencia

El marco Lumen es un software de código abierto con licencia de [licencia MIT] (https://opensource.org/licenses/MIT).



## Installing Lumen

```
composer create-project --prefer-dist laravel/lumen blog
```


## Serving Your Application


```
php -S localhost:8000 -t public
```

## Crear una migracion

```
php artisan make:migration libros --create=libros
```