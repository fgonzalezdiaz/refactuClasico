# refactuClasico
Aplicacion para la creacion de facturas, sin Frameworks

## Configuración del Entorno Local

Sigue estos pasos para configurar y ejecutar el proyecto en tu máquina local usando XAMPP.

### 1. Requisitos Previos
*   Tener instalado [XAMPP](https://www.apachefriends.org/es/index.html) (debes tener los módulos Apache y MySQL activos).

### 2. Instalación
1.  Descarga el proyecto o clona el repositorio en la carpeta `htdocs` de tu instalación de XAMPP (normalmente `C:\xampp\htdocs\`).
    ```bash
    git clone https://github.com/fgonzalezdiaz/refactuClasico.git
    ```
    *(Asegúrate de que la carpeta del proyecto se llame `refactuClasico` para que coincida con las rutas).*

### 3. Configuración de Base de Datos
1.  Abre el panel de control de XAMPP e inicia **Apache** y **MySQL**.
2.  Accede a [phpMyAdmin](http://localhost:8888/phpmyadmin) desde tu navegador.
3.  Crea una **nueva base de datos** con el nombre: `refactu`
    *   *Nota:* No es necesario crear las tablas manualmente. La aplicación detectará si la tabla `facturas` existe y la creará automáticamente al iniciar.

> **Importante:** La configuración por defecto asume usuario `root` y contraseña vacía (estándar en XAMPP). Si tu MySQL tiene contraseña, deberás editarla en estos dos archivos:
> - `config/db.php`
> - `services.php`

### 4. Ejecución
1.  Abre tu navegador web preferido.
2.  Navega a la página principal de la aplicación:
    [http://localhost:8888/refactuClasico/php/index.php](http://localhost:8888/refactuClasico/php/index.php)
