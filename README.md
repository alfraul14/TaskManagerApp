

# TaskManagerAPP

Este es el repositorio REST API para TaskManagerApp. Implementado con Laravel y React(https://github.com/alfraul14/TaskManagerApp-React-).

## Ejecución

Estos pasos a seguir fueron probados en Window 10.05
debe contar con PHP activo y Base de datos PHPmyadmin(mysql)activos.

1. Clonar el repositorio a local:
    ```sh
    git clone https://github.com/alfraul14/TaskManagerApp.git
    ```
2. Nos ubicamos en la carpeta creada:
    ```sh
    cd TaskManagerApp
    ```
3. Instalamos las dependencias:
   ```sh
    composer install
    ```
4. Copiamos el archivo env de ejemplo
    ```sh
    cp .env.example .env
    ```
5. generamos la key (Si no esta generada)
    ```sh
    php artisan key:generate
    ```

6. Corremos las migraciones
    ```sh
    php artisan migrate
    ```
7. Corremos los seeders
    ```sh
    php artisan db:seed
    ```
8. Ejecutamos
    ```sh
    php artisan serve
    ```

