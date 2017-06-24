Дипломная работа по PHP нетология
=====================
###### Симчук Юрий
#### ***Ссылка***
 * [Рабочий вариант](http://university.netology.ru/user_data/simchuk/graduate/public/)

### Установка

1. Скачать проект 
2. Распаковать в дерикторию сайта
3. Через терминал войти в дерикторию сайта и ввести команду:

composer update

4. Создать базу данных для сайта
5. В файле ./engine/Config/Database.php прописать данные для подключения к СУБД
```php
return [
    'host'         => 'localhost', 
    'charset'      => 'utf8',      
    'dbName'       => 'diplom',    
    'userName'     => 'root',      
    'userPassword' => ''       
];
```
6. Загрузить дамп 'faq.sql' в базу данных

8. Войти на сайт через браузер, единная точка входа ./public/index.php
9. Войти в панель администратора и настроит сайт 
 * Доступ к панели администратора можно получить по ссылке [Админка](http://university.netology.ru/u/simchuk/graduate/public/?/admin )
 * логин: admin 
 * пароль: admin

