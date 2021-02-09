# MedCon - Intrucciones para instalación y puesta en marcha

#CONTENIDO
MedCon es una página web para realizar consultas médicas. El código entregado para la práctica (y que es necesario para la aplicación) se organiza en:

- Carpeta de assets: tendrá algunas imágenes usadas para la estética de la aplicación.
- Carpeta styles: contiene cuatro archivos css.
- Carpeta uploads: contiene los archivos que están insertados en la base de datos. 
- Carpeta base_de_datos: contiene el archivo que crea las tablas de nuestra base de datos.

Por otro lado, sin estar en ninguna carpeta tenemos 12 archivos php.

#INSTALACIÓN Y PUESTA EN MARCHA
1. Instalar XAMPP y poner en marcha servidor apache y mysql. Debemos poder tener acceso a phpmyadmin.
2. Crear una base de datos en phpmyadmin llamada "dbmedcon" y restaurar las tablas del archivo de la carpeta base_de_datos. El usuario root de phpmyadmin debe tener privilegios de acceso a la base de datos "dbmedcon". Si no existe este usuario, habrá que crearlo o modificar el archivo "dbmedcon.php".
3. Colocar todos las carpetas y los archivos php en la carpeta htdocs del directorio de la instalación de XAMPP.
4. Para acceder a la página de inicio (login) de la aplicación, deberá escribir en un navegadorla siguiente URL: http://localhost/login.php. Si ha cambiado el puerto y ya no es el 80, tendrá que indicarlo después de localhost tal que la URL pasará a ser (si el puerto fuera el 90): http://localhost:90/login.php.

#GITHUB
Todo el código desarrollado se encuentra en GitHub en el siguiente repositorio: https://github.com/Patriciatr/MedCon. No solo está el código entregado, sino que también podrá encontrar archivos html intermedios y archivos php no usados.
