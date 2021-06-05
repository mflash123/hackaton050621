## Хакатон 05/06/2021  -  4 задача

Приложение спортивных мероприятий.

Это репозиторий API.

# Install
* composer install
* php artisan migrate

# API

# Response:
Sucess
```
{
  "error": 0,
}
```

Fail
```
{
  "error": 1,
  "message": "Not authorized"
}
```



#Endpoints:

Листинг всех пользователей
GET  /users


Авторизация
POST /auth
Required : Json ( login )
Ex: {"login":"3317809668"}


Листинг всех типов евентов
GET  /events
