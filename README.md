# Prueba-Tecnica-GenIAfy

Este es un proyecto desarrollado en Laravel, un framework PHP, que tiene como objetivo mostrar datos de una API paginados en una sola página mediante un controlador. Los datos se muestran en un formato de tabla, donde solo se ha implementado la parte de "Read" del CRUD.

## Requisitos

Antes de ejecutar este proyecto, asegúrate de tener instalados los siguientes requisitos:

- **PHP**: Versión 7.4 o superior.
- **Composer**: Herramienta para la gestión de dependencias en PHP.
- **Base de datos**: MySQL (en este caso, se usó XAMPP con PHPMyAdmin).

## Instalación

Sigue estos pasos para instalar y ejecutar el proyecto en tu entorno local:

1. **Clona el repositorio en tu máquina:**

    git clone https://github.com/NicolasHuenchuquen/Prueba-Tecnica-GenIAfy

2. Accede al directorio del proyecto:

    cd Prueba-Tecnica-GenIAfy

3. Instala las dependencias de PHP utilizando Composer:

    composer install

4. Importa la base de datos:

    Dentro del repositorio encontrarás un archivo SQL llamado "prueba_tecnica.sql".

    Para importarlo, sigue estos pasos:

    * Abre PHPMyAdmin (si estás utilizando XAMPP).
    * Crea una nueva base de datos con el nombre prueba_tecnica.
    * Selecciona la base de datos recién creada.
    * En la barra de navegación superior, selecciona "Importar".
    * Selecciona el archivo SQL y haz clic en "Continuar" para  importarlo.

    Ejemplo de cómo debería verse la configuración en tu archivo .env para la base de datos:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=prueba_tecnica
    DB_USERNAME=root
    DB_PASSWORD=

5. Ejecuta el servidor de desarrollo de Laravel:

    php artisan serve

    Esto iniciará el servidor en http://127.0.0.1:8000/api/empleados, donde podrás ver el proyecto en acción.    