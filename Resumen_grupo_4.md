## Lenguaje: PHP.
> Php es un potente lenguaje de programación el cual proviene de las siglas Personal Hipertext Preprocesor, es un lenguaje de scripting de propósito general, gran parte de su sintaxis se toma de C, java y Perl con ciertas características únicas que fueron implementadas en PHP, su objetivo principal es permitir el desarrollo web de una manera es rápido, flexible y dinámica, con php se logra implementar desde un blog sencillo hasta sitios web populares. También nos permite ejecutar código PHP y que inserte dentro de fragmentos de código HTML. Esos Scripts php nos permiten realizar determinadas acciones de una forma fácil y eficaz, pudiendo realizar todo tipo de tareas de manera sencilla. 
Php cuanta con varias ventajas, es fácil de aprender, el estilo de programación es libre, se puede utilizar programación estructurada o programación a objetos, puede funcionar bajo cualquier tipo de servidor y se puede utilizar en cualquier ordenador, Linux, Windows o Mac.
## Framework o Plataforma: Laravel.
> Laravel es un framework de código abierto, que nos permite desarrollar aplicaciones y servicios web con php. Laravel está diseñado para desarrollar bajo el patrón MVC facilitando el trabajo en equipo y la claridad o reutilización del código.
> Laravel facilita el desarrollo simplificando el trabajo con tareas comunes como la autenticación, el enrutamiento, gestión de sesiones y cuenta con un sistema de rutas, mediante las cuales es fácil crear y mantener todo tipo de URLs amistosas a usuarios. También utiliza un sistema de plantillas para las vistas llamado Blade, el cual hace uso de la cache para darle mayor velocidad. 
> Herramientas utilizadas: Composer, Cliente HTTP Guzzle, Bootstrap4, Blade y Artisan.
> Composer, es un manejador de paquetes para PHP que permite administrar, descargar e instalar dependencias y librerías. Cliente HTTP Guzzle, nos facilita realizar solicitudes http para comunicarse con otras aplicaciones web.  Bootstrap4 el cual es un frameworks CSS que nos brinda la facilidad de la maquetación de las paginas web, permitiendo crear una interfaz limpia y adaptable a cualquier tamaño. Blade el cual nos ayuda a ahorrar espacio y reducir consumo y facilita la creación de vistas. Artisan es una interfaz de línea de comandos, que nos permite realizar varias funciones, entre ellas está “php artisan serve” la cual levantar el servidor de la aplicación.

### Se hizo uso del editor de código Visual Studio Code, [descargar VSCode][VSCode].


# Pasos para ejecutar la aplicación

Los pasos aqui descritos deben ser seguidos de forma secuencial.

## Requisitos
 - Php en una version superior a la 7.1.3, [descargar php][php]
 - Instalar composer, [descargar composer][composer]

## Instalación

```sh
 composer require "laravel/installer"
```
* Ejecutar el comando anterior para instalar laravel

```sh
 laravel new nombre_del_proyecto
```
* Ejecutar el comando anterior para crear un proyecto laravel

## Ejecutar aplicacion
 - Una vez abierto el proyecto ejecutar, en la ruta donde esta el proyecto, el comando: 
 ```sh
 php artisan serve
``` 
- Este comando nos abrira un servidor en el localhost:8000, puede usar ctrl+c para apagar el servidor.

## Logica

> De forma general el framework laravel nos permite trabajar bajo el Modelo-Vista-Controllador. Cada archivo blade.php es una vista la cual puede o no estar relacionada con un controllador.
 ```sh
 php artisan make:controller nombre del controlador
``` 
> El comando anterior nos permite crear un controlador.

> Un archivo de gran importancia es el archivo web.php aqui se definen la rutas

![Imagen del archivo web.php"](imagenes/archivo_web.JPG)

> Estas rutas nos indican el controlador y el metodo que ejecutar una acción x.
por ejemplo, la accion a la que responde un form

![Imagen de la accion de un formulario](imagenes/form.JPG)

> Otra funcionalidad importante que nos proporciona el framework de laravel son las plantillas blade que nos permiten por medio de etiquetas insertar codigo php en nuestras vistas

![Imagen de la vista blade](imagenes/blade.JPG)

 
## Fuentes

| Fuente                 | Direccion URL                   |
| -                      | -                               |
| Laravel Sitio oficial  | [Sitio web][laravel]            |
| Canal Bluuweb          | [lista  de reporduccion][Tuto1] |
| Canal Php step by step | [lista de reporduccion][Tuto2]  |


[php]: https://www.apachefriends.org/es/index.html
[composer]: https://getcomposer.org/
[VSCode]: https://code.visualstudio.com/
[Tuto1]: https://www.youtube.com/playlist?list=PLPl81lqbj-4KHPEGngoy5PSjjxcwnpCdb
[Tuto2]: https://www.youtube.com/playlist?list=PL8p2I9GklV46twRyl207h5LcsdjB9S9B0
[laravel]: https://laravel.com/docs/8.x
