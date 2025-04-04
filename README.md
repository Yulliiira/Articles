# 📜 Laravel Articles

Проект на **Laravel** для работы со статьями. Развернут в **Docker**, включает **API с CRUD-операциями**, **аутентификацию через Laravel Sanctum**, **валидацию**, **посредники**, **фабрики**, **сидеры**, **ресурсы** и **возможность комментирования**.

## 🚀 Функциональность
- 🔐 **Авторизация и регистрация пользователей**
- 📝 **CRUD-операции со статьями**
- 🖼 **Загрузка изображений**
- 💬 **Управление комментариями**
- 🔑 **Аутентификация через Laravel Sanctum**
- 🛡 **Разграничение доступа через Middleware**
- 📦 **Деплой в Docker Desktop**

## 🛠 Используемые технологии
- 🐘 **PHP 8.3**, **Laravel 11**
- 🗄 **MySQL**, **PhpMyAdmin**
- 🐳 **Docker + Docker Compose**
- 🔐 **Laravel Sanctum**
- 📬 **Postman (для тестирования API)**
- 🎨 **Bootstrap 5 (верстка)**

## ⚡ Запуск проекта

### 1️⃣ Запуск контейнеров:
```bash
docker-compose up -d
```

### 2️⃣ Установка зависимостей Laravel:
```bash
composer install
```

### 3️⃣ Настройка `.env`  
Проверьте подключение к базе данных в файле `.env`.

### 4️⃣ Выполните миграции:
```bash
php artisan migrate
```

### 5️⃣ Запуск сервера:  
Запустите сервер в **среде разработки** (у меня это **VS Code**):
```bash
php artisan serve
```



   
