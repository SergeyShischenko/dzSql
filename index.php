<?php
/*Создать в БД таблички:

users (id, first_name, last_name, phone, email, password, role_id, address_street_id)
user_roles(id, name, key, create_at, update_at)
//-------------------------------------
address_countries(id, name)
address_cities(id, country_id, name)
address_streets(id, city_id, type, name)
//-------------------------------------
categories(id, parent_id, name)
types(id, name)
company(id, name)
products (id, name, country_id, type_id, category_id, description, price, )
option_types(id, name)
options(id, type_id, name)
option_products(option_id, product_id)

Заполнить все таблички по 2 записи и сделать sql дамп.

Для всех таблиц создать классы, кроме option_products (она связующая и помагает сделать связь многие ко многим). Сделать табличный вывод всех данных через использованием обьектов. А также для каждой таблички создать действие удалить и формы для создания, редактирования данных.*/
//Описание
require_once 'ProductClass/Categories.php';

$categories = new Categories();




