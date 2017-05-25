Desarrollo Pico y Placa (Realizado en Symfony)
==============================================

Se trata de un programa que valida la placa, el dia y la hora que ingresa
el usuario, de esta forma determina si puede circular en la ciudad de Quito tomando estos 3 parametros.
En este desarrollo se utiliza MVC, twig, PHP

Que contiene
--------------

El desarrollo consta de:

  * Un formulario

  * Un Controlador

  * Una Entidad

  * 2 extensiones Twig en una de las mismas realiza la logica para determinar si puede circular o no

  * 3 vistas twig

Cosas que se pueden mejorar en una siguiente version:

  * Validaciones en el form (al momento solo valida la longitud de la placa)

  * Presentacion (se puede utilizar BootStrap, datapicker para la fecha, etc)

  * Formulario guarde en la base de datos para ver cuantos usuarios hacen uso del programa.


Para verlo en funcionamiento:
-----------------------------
  * Realizar un clone del repositorio, descargar los vendor de symfony y actualizar con composer.

  * http://picoyplaca.dev/app_dev.php/picoyplaca

Espero les sirva !