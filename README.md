# 🌐 Ejercicio2 - Proyecto Laravel con Blade

Este proyecto es un sitio web construido con **Laravel** utilizando el motor de plantillas **Blade**. Incluye una estructura sencilla de navegación, varias páginas internas y un formulario de contacto funcional con mensaje de confirmación.

---

## 🚀 Tecnologías utilizadas

- **PHP 8+**
- **Laravel 10+**
- **Blade Templates**
- **HTML5 & CSS3**
- **JavaScript (alert + redirect)**
- **XAMPP / Laravel Sail / WAMP** (cualquier servidor local)

---

## 📁 Estructura del proyecto

Las vistas principales se encuentran dentro de:

```
resources/views/
```

### Páginas incluidas:

| Página     | Archivo Blade                  | Descripción |
|------------|--------------------------------|-------------|
| Inicio     | `welcome.blade.php`            | Página principal con menú |
| Products   | `products.blade.php`           | Página para productos |
| Clients    | `clients.blade.php`            | Página de clientes |
| About      | `about.blade.php`              | Información del sitio |
| Contact    | `contact.blade.php`            | Formulario de contacto |

Además, se incluye un layout base:

| Archivo | Propósito |
|---------|-----------|
| `layout.blade.php` | Plantilla general usada por todas las vistas |

---

## 🧭 Navegación

Todas las páginas comparten un menú superior con enlaces:

```html
<header>
    <a href="/">Inicio</a>
    <a href="/products">Productos</a>
    <a href="/clients">Clientes</a>
    <a href="/about">Acerca de</a>
    <a href="/contact">Contacto</a>
</header>
```

---

## ✉️ Formulario de Contacto

La página Contact incluye un formulario simple con:

- Nombre
- Email
- Mensaje
- Botón Enviar
- Botón Cancelar

### ✔ Funcionalidad de Enviar:

Al hacer clic en Enviar, el formulario no se envía, sino que:

1. Muestra un mensaje de confirmación
2. Redirige automáticamente a la página de inicio

**Código usado:**

```javascript
function enviarFormulario() {
    alert("Tu mensaje ha sido enviado correctamente.");
    window.location.href = "/";
}
```

---

## 🛠 Instalación y ejecución del proyecto

### 1. Clonar el repositorio:

```bash
git clone https://github.com/programmeuse5885/Ejercicio2.git
cd Ejercicio2
```

### 2. Instalar dependencias:

```bash
composer install
```

### 3. Crear archivo .env:

```bash
cp .env.example .env
```

### 4. Generar clave de Laravel:

```bash
php artisan key:generate
```

### 5. Iniciar el servidor local:

```bash
php artisan serve
```

### 6. Abrir en el navegador:

```
http://localhost:8000
```

---

## 📌 Rutas principales (web.php)

Ejemplo básico de las rutas definidas:

```php
Route::get('/', function () {
    return view('welcome');
});

Route::view('/products', 'products');
Route::view('/clients', 'clients');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
```

---

## 🎯 Características del proyecto

- ✅ Navegación funcional entre páginas
- ✅ Motor de plantillas Blade para código reutilizable
- ✅ Formulario de contacto con validación básica en cliente
- ✅ Diseño responsivo y limpio
- ✅ Estructura modular con layout base

---

## 📜 Licencia

Este proyecto es de uso libre para aprendizaje o mejora personal.

---

## 👤 Autora

**Rocío Carolina Chávez Servín**

**GitHub:** [@programmeuse5885](https://github.com/programmeuse5885)

**Proyecto:** [https://github.com/programmeuse5885/Ejercicio2](https://github.com/programmeuse5885/Ejercicio2)

---

⭐️ Si este proyecto te fue útil, considera darle una estrella en GitHub
