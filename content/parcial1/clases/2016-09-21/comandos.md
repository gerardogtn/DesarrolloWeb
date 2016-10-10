# Administración de bases de datos

## Backup
`` mysqldump --user=daw-1018057 -p=Password DB > backup.sql ``
`` mysql -u=daw-1018057 -p --xml -e 'SELECT * FROM tabla' ``

## Restore
`` mysql dump --user=daw-1018057 -p=Password DB ``

## MYSQL desde la terminal
``mysql -u=usuariodb -p=Password -e 'SELEC * FROM tabla'``

## Cron

### Ejecutar un comando todos los dias a las 20:00

Cron: `` 0 20 * * * ``
Comando: `` echo "Son las 8 pm!" ``

### Ejecutar un comando cada 5 min
Cron: `` /*5 * * * * ``
Comando: `` echo "Ya pasaron 5 minutos!" ``

### Imprimir los ultimos 5 usuarios que se conectaron a la base de datos enlos ultimos 5 minutos
Cron: `` /*5 * * * * ``
Comando:
```
 mysql -u=usuario -p=password --xml -e 'SELECT * FROM clientes ORDER BY desc LIMIT 5' > archivo.xml
```
