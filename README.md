<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Todo App API

### API Akun
- POST /api/register
- POST /api/login
  
### API Checklist
Authorization: Bearer <token>
- POST /api/activities
- GET /api/activities
- DELETE /api/activities/{id}

### API Items
Authorization: Bearer <token>
- POST /api/activities/{activity_id}/items
- GET /api/activities/{activity_id}/item
- PUT /api/activities/{activity_id}/items/{item_id}
- DELETE /api/activities/{activity_id}/items/{item_id}
