ZendDoctrineSkeletonApp
=======================

Introdução
------------
Este é um aplicação zend framework 2 já pré-configurada como ORM Doctrine


Instalação
------------

    git clone github.com/AlefeVariani/ZendDoctrineSkeletonApp.git ZendDoctrineSkeletonApp
    cd ZendDoctrineSkeletonApp
    php composer.phar install
    

Doctrine
----------
Lista de comandos:

    ./vendor/bin/doctrine-module

Rodando
---------
Usando servidor embutido do PHP

    cd public/
    php -S localhost:8080

Configuração com o Banco
--------------------------
No arquivo config/db.params.conf.php se define:

    host
    port
    user
    password
    dbname

No arquivo config/autoload/global.php qual banco será usado:

    MySql => 'Doctrine\DBAL\Driver\PDOMySql\Driver'
    PostgresSql => 'Doctrine\DBAL\Driver\PDOPgSql\Driver'
