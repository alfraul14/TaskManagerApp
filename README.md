

# TaskManagerAPP

Este es el repositorio REST API para TaskManagerApp. Implementado con Laravel y React.

## Ejecución

Estos pasos a seguir fueron probados en Window 10

1. Clone the repo locally:
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
5. Debes crear una base de datos con el nombre taskmanagerapp en tu mysql
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

