Requisitos del sistema Instalación paso a paso (Laravel, Composer, .env, migraciones)

composer global laravel/install
laravel new project
migraciones
php artisan make:model Projects -m --> crea la migracion y el modelo
php artisan make:model Tasks -m --> crea la migracion y el modelo
php artisan make:model Projects -m --> crea la migracion y el modelo
php artisan make:request StoreProjectRequest --> crea el formrequest
php artisan make:controller Api/ProjectController --api
php artisan make:controller Api/TaskController --api
php artisan migrate -> migra toda la db Cómo levantar Swagger Cómo ver Telescope Cómo probar filtros dinámicos Cómo ver logs de auditoría
