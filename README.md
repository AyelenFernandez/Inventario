<h1>Nombre del proyecto: Sistema de Inventario</h1>
<p><b> Descripción:  </b> Sistema desarrollado para llevar el inventario de los materiales, recursos e insumos con los que contaba la institución. 
<p><b>Problemas encontrados:  </b> Falta de precision en la descripcion de las necesidades por parte de los empleados a cargo del proyecto.
<p><b> Soluciones aplicadas:  </b> El equipo cuenta con los conocimientos para definir los requisitos junto con el solicitante, quitando dudas y ambiguedades y aplicando las prioridades correspondientes para desarrollar un sistema que se adapte a las principales necesidades </p>
<p><b> Tecnologías utilizadas:  </b> Laravel 5.4, HTML5, Bootstrap, Javascript, JQuery, MySql</p>



# Inventario - CIIDEPT #

Sistema en Laravel (API) para inventario del CIIDEPT.

Instalacion:
```
#!git

git clone https://github.com/AyelenFernandez/inventario.git 

```
#!composer

composer install   
```

```
#!artisan

 php artisan migrate 
```

```
#!artisan

 php artisan db:seed 
```

```
#!artisan

php artisan key:generate
```

Nota: si se agrega algun paquete nuevo (composer.json):

```
#!artisan
composer update
```

Nota: para correr seeders de usuario (genera el usuario: admin@admin.com ):

```
#!artisan
php artisan db:seed --class=UserTableSeeder
```

Se crea el panel (AdminLte) 

Plantilla: https://github.com/jeroennoten/Laravel-AdminLTE
### License

Inventario is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


