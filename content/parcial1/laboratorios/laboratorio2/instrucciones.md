# Instrucciones

## 1) Crear una maquina virtual usando su provedor preferido
En este ejemplo usaremos Vagrant.

`` vagrant init bento/fedora-24 ``

## 2) Configurar IP en la maquina virtual

`` config.vm.network "private_network", ip: "192.168.68.8" ``

## 2) Conectarse a la maquina virtual

`` vagrant up && vagrant ssh ``

## 3) Instalar HTTPD

`` sudo dnf install httpd ``

## 4) Compartir directorios de usuarios

### 4.1) Modificar /etc/httpd/conf.d/userdir.conf
El archivo debe ser igual al presente en este directorio.

### 4.2) Reactivar el servicio httpd
`` sudo systemctl restart httpd.service ``

## 5) Verificar conexión
Desde un explorador entrar a las siguientes direcciones y verificar que la
conexión es correcta:
* 192.168.68.8
* 192.168.68.8/~usuario

## 6) Debuggear si es necesario
Si hay errores en la configuracion, ejecutar el siguiente comando para leer
los logs de errores y solucionar cualquier problema que se presente

`` tail -f /etc/httpd/logs/error_log ``
