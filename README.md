# Тестовое задания для соискателей

## Цель 
ознакомление со структурой проекта и проверка навыков соискателей

## Стек технологий
PHP 5+, ZendFramework 2
jQuery, Marionette.Backbone, requirejs
git

## Исходные данные
Собственно данный репозиторий.

Для реализации тестового задания используется тестовый аккаунт http://storencash.com 
логин: storencashdemo@gmail.com
пароль: demodemo

Шаблоны элементов страниц http://seantheme.com/color-admin-v1.9/admin/html/index_v2.html
все библиотеки и таблицы стилей уже присоеденены к проекту

Для получения данных (API) с сервера использовать библиотеку https://github.com/stepun/snc-sdk-php
она уже присоеденена к проекту

Описание API https://gist.github.com/stepun/8c09fa528356c4de8fb8

API ключи: 
PUBLIC_KEY=cb3fd6aebc055948aed19e546a03fdb3
PRIVATE_KEY=c6f6d933ee92c1e27862a15deccfabf2

### настройка проекта
Для работы проекта необходимо:
1. Сделать форк репозитория https://github.com/stepun/test
2. Скачать на рабочую станцию репозиторий
3. Cкачать библиотеку composer https://getcomposer.org/ в корень репозитория
4. Выполнить команду 
```
php composer.phar install
```
5. После установки всех зависимостей проект будет готов к работе

## Задача
Реализовать вывод на экран списка контрагентов https://gist.github.com/stepun/019ccab787d745abecbf#list-company
Также реализовать интефейс ввода нового конрагента https://gist.github.com/stepun/019ccab787d745abecbf#add-company

Все должно быть реализовано подгрузкой JS библиотек через requirejs
Список контрагентов загружается исключительно после загрузки страницы т.е. AJAX с использованием фреймворка Marionette.Backbone
Добавление нового контрагента реализовать без перезагрузки страницы