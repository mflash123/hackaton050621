## Хакатон 05/06/2021  -  4 задача

Приложение спортивных мероприятий.


Это репозиторий API.

Репозиторий клиента здесь: https://github.com/KaRtoHHka/PSB.git

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

| Method | Endpoints | Description |
| --- | --- | --- |
| POST | /auth | Авторизация, JSON ( {"login":"%PHONE_NUMBER%"} ) |
| GET | /users | Листинг всех пользователей |
| GET | /events | Листинг всех типов евентов |

