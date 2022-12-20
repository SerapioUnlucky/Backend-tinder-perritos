# Taller 3

Backend hecho Laravel 8 para el ramo electivo de Taller web avanzado.

## Integrantes

Benjamin Contreras 20.194.416-3 IECI
Sebastian Jerez 20.439.743-0 IECI

### Antes que nada

Es necesario tener instalado Git y Composer.

### Instalación

Clonar el repositorio.

`git clone https://github.com/SerapioUnlucky/Backend-tinder-perritos.git`

Una vez dentro de la carpeta, utilizar

`composer i`

para instalar las dependencias de Laravel

En el `.env` se debe ingresar los datos de la base de datos a utilizar

```
DB_DATABASE=*Nombre de la base de datos*
DB_USERNAME=*Usuario*
DB_PASSWORD=*Contraseña*

```

Luego para hacer las migraciones se utiliza el comando

`php artisan migrate`

Para andar el proyecto es con

`php artisan serve`

### Rutas

### Perro

METODO: POST

Ruta: `/AgregarPerro`

```
{
    "perr_nombre":"*NOMBRE DEL PERRO*",
	"perr_imagen":"*IMAGEN DEL PERRO*",
	"descripcion":"*DESCRIPCION DEL PERRO*"
}
```

METODO: GET

Ruta: `/ObtenerPerros`

METODO: PUT

Ruta: `/ActualizarPerro/{id}`

```
{
    "perr_nombre":"*NOMBRE DEL PERRO*",
	"perr_imagen":"*IMAGEN DEL PERRO*",
	"descripcion":"*DESCRIPCION DEL PERRO*"
}
```

METODO: DELETE

Ruta: `/EliminarPerro/{id}`

### Interacción

METODO: POST

Ruta: `/AgregarInteraccion`

```
{
    "perr_interesado":"*ID PERRO*",
	"perr_candidato":"*ID PERRO*",
	"preferencia":"*Aceptado o Rechazado*"
}
```

METODO: GET

Ruta: `/ObtenerInteracciones`

Ruta: `/ObtenerInteraccion/{id}`
