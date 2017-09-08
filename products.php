<?php
//Название, Цена, Описание, Адрес для картинки, Адрес для ссылки при нажатии на кнопку(ссылку)
$products = [
    ['Jeans', 100, 'Gucci', './images/jeans.jpg', 'https://www.gucci.com/int/en/'],
    ['Dress', 200, 'Prada', './images/dress.jpg', 'http://www.prada.com/en.html?cc=WW'],
    ['Sunglasses', 150, 'Ray Ban', './images/sunglasses.jpg', 'https://www.ray-ban.com/russia'],
    ['Trainers', 200, 'Nike', './images/trainers.jpg', 'https://www.nike.com/ru/ru_ru/?ref=https%253A%252F%252Fwww.google.ru%252F'],
    ['Smokings', 1000, 'Hugo Boss', './images/smokings.jpg', 'http://www.hugoboss.com/home'],
    ['Watch', 100, 'Gucci', './images/watches.jpg', 'https://www.gucci.com/int/en/'],
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