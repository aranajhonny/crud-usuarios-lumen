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

Lo recomendable es hacer el frontend separado del backend si se utiliza una herramienta como esta.

> https://lumen.laravel.com/docs/5.4/authentication

Screenshots:

![image](https://user-images.githubusercontent.com/9091881/43236293-48167c3a-9052-11e8-943f-67730ed243cb.png)
![image](https://user-images.githubusercontent.com/9091881/43236319-72b35850-9052-11e8-9dc9-9b3d130d89d7.png)
![image](https://user-images.githubusercontent.com/9091881/43236332-9079129e-9052-11e8-90ef-f30aae9f0c8c.png)
![image](https://user-images.githubusercontent.com/9091881/43236367-beb9494e-9052-11e8-9ad7-fb2fd92932de.png)
![image](https://user-images.githubusercontent.com/9091881/43236383-d487d894-9052-11e8-80de-5a01ba1138c3.png)
