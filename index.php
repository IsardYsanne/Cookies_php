<?php
setcookie(str(), plus());

function str(){
    //$count = 0;
    if(isset($_COOKIE['test'])){ //если есть такой массив с такой строкой в виде ключа, то к прибавляем 1 к последнему элементу
        return 'test' . plus(); // строка + 1
    } else {
        return 'test'; //если не инициализирован, то просто вернем test как имя, а потом уже при обновлении стр будем прибавлять 1
    }
}

function plus(){
    if (!isset($_COOKIE['test'])) { // если не инициализирован, т.е. юзер зашел 1й раз, то к 'test' ничего не добавляем
        return 0;
    }
    return end($_COOKIE) + 1; //прибавляем 1 для  return 'test' . plus(); т.е. 'test' + 1
}

echo "Счетчик посещения страницы";
echo '<br>';
echo "Вы заходили на страницу " . plus() . " раз";
