# Lumen PHP Framework Base en laravel

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen es un micro-framework PHP incre�blemente r�pido para crear aplicaciones web con una sintaxis expresiva y elegante. Creemos que el desarrollo debe ser una experiencia agradable y creativa para que sea realmente satisfactorio. Lumen intenta eliminar el dolor del desarrollo al facilitar las tareas comunes que se utilizan en la mayor�a de los proyectos web, como el enrutamiento, la abstracci�n de la base de datos, la cola y el almacenamiento en cach�.

## Documentaci�n Oficial

La documentaci�n del marco se puede encontrar en el [sitio web de Lumen] (https://lumen.laravel.com/docs).

## Contribuyendo

�Gracias por considerar contribuir con Lumen! La gu�a de contribuci�n se puede encontrar en la [documentaci�n de Laravel] (https://laravel.com/docs/contributions).

## Vulnerabilidades de seguridad

Si descubre una vulnerabilidad de seguridad dentro de Lumen, env�e un correo electr�nico a Taylor Otwell a taylor@laravel.com. Todas las vulnerabilidades de seguridad se abordar�n de inmediato.

## Licencia

El marco Lumen es un software de c�digo abierto con licencia de [licencia MIT] (https://opensource.org/licenses/MIT).



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

## Para migrar a el origin de datos
```
php artisan migrate
```

Para ejecutar la terminal 
```
ctrl + shift + p
```

Antes de ejecutar esos comandos en la carpeta app se debe crear la carpeta models

Datos con Eloquent
Esto lo que va hacer es aceder a la base de datos de forma muy sencilla 

C:\xampp\htdocs\DEV\crudapi\bootstrap\app.php

y descomentamos la linea 28

```
 $app->withEloquent();
```

