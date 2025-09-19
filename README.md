# Prueba Técnica — Parte 2

Resumen 
--------------
Implementación de la **Parte 2** (Ejercicios prácticos):
- **Ejercicio 1 (Laravel básico)**: migración `productos`, modelo `Producto`, ruta `GET /api/productos` y `ProductosController@index`.
- **Ejercicio 2 (SQL)**: consulta que devuelve el producto más vendido (nombre + total).
- **Ejercicio 3 (Lógica)**: helper PHP `App\Helpers\Estadisticas::calcular()` (mayor, menor, promedio) y tests unitarios.

Requisitos mínimos
----------
- PHP >= 8.2
- Composer
- MySQL local (127.0.0.1:3306) — **por defecto** 


Estructura relevante
--------------------
app/
Models/
Producto.php
Venta.php
Http/Controllers/
ProductosController.php
Helpers/
Estadisticas.php
database/
migrations/
YYYY_MM_DD_create_productos_table.php
YYYY_MM_DD_create_ventas_table.php
routes/
api.php
tests/
Unit/
EstadisticasTest.php
