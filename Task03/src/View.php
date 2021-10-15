<?php

namespace Ecarus1\cold_hot\View;

function showGame()
{
    echo 'Игра "Горячо-Холодно" началась.' . PHP_EOL;
}

function showList()
{
    echo "Список игр из БД SQLite3\n";
}

function showReplay()
{
    echo "Повстор игры с заданым id\n";
}

function help()
{
    echo 'Помощь по игре:
 "Холодно". Ни одна цифра не отгадана.                          
 "Тепло" Одна цифра отгадана, но не отгадана ее позиция.        
 "Горячо". Одна цифра и ее позиция отгадана.                    
  Необходимо писать трехзначное число без запятых между цифрами. 
Ключи:                               
 --new - Новая игра                                             
 --list - Список игр                                            
 --replay - Повтор игры                                         
 --help - Помощь' . PHP_EOL;
}
