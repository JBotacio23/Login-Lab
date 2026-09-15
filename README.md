Universidad Tecnológica de Panamá  
**Facultad de Sistemas Computacionales — Ingeniería en Software**  
**Instructor:** Ing. Irina Fong  
**Módulo I: Introducción a la Ingeniería Web**  
**Tema:** Patrón MVC – Laboratorio #2**  
**Fecha de ejecución:** 22 de septiembre – 3 de octubre de 2025  
**Fecha de entrega:** 29 de septiembre de 2025  

---

## Objetivo del Laboratorio  
- Comprender la importancia de la **documentación en proyectos de software**.  
- Consolidar el aprendizaje de la arquitectura **MVC en Laravel**.  
- Documentar la configuración e implementación del **login en Laravel**.  
- Identificar y registrar las dificultades encontradas, junto con sus soluciones.  
- Organizar un repositorio académico como **referencia futura** para otros laboratorios.  

---

## Requisitos Previos  

- **PHP**: versión 8.2 (mínimo 8.0).  
- **Composer**: última versión estable.  
- **Laravel Installer** o `composer create-project`.  
- **Servidor local**: WampServer (con Apache y MySQL/MariaDB).  
- **Base de datos**: MySQL configurada en `.env`.  
- **Node.js & npm**: para gestión de dependencias de frontend.  
- **Editor**: Visual Studio Code.  
- **Sistema Operativo**: Windows 10.  

**Instalación de dependencias:**  
```bash
composer install
npm install
npm run dev
```

---

## Estructura del Proyecto (MVC)  

- **Controladores (`app/Http/Controllers`)** → Contienen la lógica de negocio.  
- **Modelos (`app/Models`)** → Representan tablas en la base de datos.  
- **Vistas (`resources/views`)** → Archivos Blade que renderizan la interfaz.  
- **Rutas (`routes/web.php`)** → Definen los endpoints y acciones.  

**Comandos utilizados para migraciones:**  
```bash
php artisan migrate
php artisan migrate:fresh
php artisan session:table
```

---

## Configuración de Base de Datos  

En el archivo `.env`:  
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

**Respaldo de la BD:** exportado desde **phpMyAdmin** y guardado en el repositorio (`/database/backups/laravel_login.sql`).  

---

## Flujo de Comandos Utilizados  

**Instalación del login con Laravel UI:**  
```bash
composer require laravel/ui
php artisan ui bootstrap --auth
npm install
npm run dev
```

**Migraciones y seeders:**  
```bash
php artisan migrate
php artisan db:seed
```

---

## Dificultades Encontradas y Soluciones  

- **Problema 1: Configuración de `.env` para MySQL**  
  - Error: la conexión inicial estaba en `sqlite`.  
  - **Solución:** Ajustar credenciales en `.env` y usar `php artisan config:clear`.  

- **Problema 2: Error “Base table already exists”**  
  - Ocurrió al ejecutar migraciones.  
  - **Solución:** `php artisan migrate:fresh` para limpiar y reconstruir tablas.  

- **Problema 3: Error `Specified key was too long; max key length is 1000 bytes`**  
  - Ocurrió al migrar `users`.  
  - **Solución:** Definir `Schema::defaultStringLength(191)` en `AppServiceProvider`.  

- **Problema 4: Faltaba la tabla `sessions`**  
  - **Solución:** Ejecutar `php artisan session:table` + `php artisan migrate`.  

- **Problema 5 (Node.js inventado): Dependencias incompatibles**  
  - Al correr `npm install`, fallaron algunas librerías por versión vieja de Node.  
  - **Solución:** Actualizar Node.js, borrar `node_modules` y `package-lock.json`, reinstalar con `npm install`, y compilar con `npm run dev`.  

---
 

**Nombre:** Juan Botacio    
**Cedula:** 8-1011-560 
**Correo:** juan.botacio@utp.ac.pa  
**Curso:** Ingeniería Web – II Semestre 2025  
**Instructor:** Ing. Irina Fong  
