## Pasos de instalaciòn y configuraciòn


1: composer install

2: php artisan migrate

3: php artisan migrate:refresh --seed

4: Go to http://your-server-url/crud-usuarios/public/

Usuario y contraseña por defecto luego de la migraciòn:

username: admin
password: admin


### nota:
Lumen no trae soporte para autenticacion via Auth como laravel. 
Se suele utilizar Token (stateless mechanism) para ello, tampoco trae acceso a sesion.
en este crud utilize php sessions (nativa) debido a que se necesita para mantener al usuario logueado.

Lumen es un microframework que se suele utilizar para microservicios o tareas especificas.

Lo recomendable es hacer el fronted separado del backend si se utiliza una herramienta como esta.

> https://lumen.laravel.com/docs/5.4/authentication

