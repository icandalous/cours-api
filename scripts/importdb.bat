@Echo off
:: SETTINGS AND PATHS 

:: databse user
set dbuser=root

:: Password
set dbpass=

set dbname=courdb

:: MySQL EXE Path
set mysql="C:\wamp64\bin\mysql\mysql5.7.14\bin\mysql.exe"

:: Error log path
set importsource=C:\wamp64\www\cours-api\database\coursdb.sql


:: Execution de la commande d'import.
%mysql% --user=%dbuser% --password=%dbpass% %dbname% < "%importsource%"

