# SEGUNDO EXAMEN PARCIAL 

## Integrantes
Los integrantes del equipo son:
+ Ángel Guevara, José Franklin - AG19030
+ Lara Guerra, Alfredo Alexander LG21028
+ Navarro Aguilar, Cristian Armando - NA21005
+ Alas Hernandez, Milton Obed - AH09062
+ Martínez Flores, Josué Edenilson - MF22036

## Documentación de rutas

La ruta de las vistas para:

+  Url que lea ese archivo y devuelva los datos:
```
http://localhost:8000/admin/mostrar-json
```
+ Url que lee y muestra ambos formatos:

```
http://localhost:8000/admin/convertir-xml-a-json
```
+ Url que lee y muestra ambos formatos:

```
http://localhost:8000/admin/mostrar-tabla
```
+ Url para convertir número a letras con un servicio SOAP

```
http://localhost:8000/number-to-words
```

## Comando recomendados para ejecutar el proyecto

A continuación se presenta una lista de los comandos básicos para ejecutar el proyecto por primera vez:

```
composer clear-cache
composer install
npm install
php artisan migrate --seed
php artisan serve
```
