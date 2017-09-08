<?php
//Название, Цена, Описание, Адрес для картинки, Адрес для ссылки при нажатии на кнопку(ссылку)
$products = [
    ['Jeans', 100, 'Gucci', './images/jeans.jpg', 'https://www.gucci.com/int/en/'],
    ['Штаны женские', 100, 'Штаны стильные', './img/2.png', 'https://yandex.ru'],
    ['Мяч волейбольный', 100, 'Накачанный финским воздухом', './img/3.png', 'http://alabuga.ru'],
    ['Джинсы', 100, 'Потертые, рвань', './img/4.png', 'https://mail.ru.com'],
    ['Футболка', 100, 'Футбольная, с Роланду', './img/5.png', 'https://google.com'],
    ['Мяч волейбольный', 100, 'Это другой мяч', './img/6.png', 'https://google.com'],
];
function getName($product)
{
    return $product[0];
}
function getPrice($product)
{
    return $product[1];
}
function getDescription($product)
{
    return $product[2];
}
function getImage($product)
{
    return $product[3];
}
function getButton($product)
{
    return $product[4];
}

function getLinkImage($product)
{
    return $product[5];
}

?>