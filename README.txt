Para el correcto funcionamiento del envío de correo se deben realizar los siguientes cambios: 

1. Abrir el archivo "php.ini", ubicado en la ruta "C:\xampp\php\", después hay que ubicarse en [mail function]. Una vez ubicado en dicha sección, se tiene que remover el ";" al inicio de las siguientes líneas: "SMTP=localhost", "smtp_port=25" y "sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"", un vez se remueve el ";", se guarda el archivo. 

2. Abrir el archivo "sendmail.ini", ubicado en  la ruta "C:\xampp\sendmail\". 

En primer lugar hay que ubicarse en la línea que contiene lo siguiente: "smtp_server=", en donde, se removera "mail.mydomain.com" y digitará en su lugar la dirección del Servidor SMTP. 

Como segundo punto, hay que ubicarse en la línea que contiene "smtp_port=25", donde se eliminará el "25" y en su lugar se escribe "587". 

Como tercer punto, hay que ubicarse en la línea que contiene "smtp_ssl=", donde como valor se escribirá TLS.

Como cuarto punto, hay que ingresar la cuenta del correo del cual se enviarán los mensajes en la línea: "lauth_username=correo", junto con la contraseña de la cuenta del correo en la línea: "auth_password=contraseña". 

Como último punto, se modificará la línea "force_sender=From", donde se digitará el correo del cuál se están enviando los mensajes. 

Opcionalmente, se puede remover el ";" al inicio de las siguiente líneas: "error_logfile=error.log" y "debug_logfile=debug.log", todo con el próposito de en caso de que falle el envío del correo, permita poder leer los errores que se ubican en el archivo: "error.log"; y en el caso de "debug.log" poder leer el proceso que se ha obtenido. 

IMPORTANTE: Los correos son enviados a la direccion de correo que se le asigna a la variable: $destinatario que esta en contacto.php. Para que se permita el envío de correos en GMAIL se debe habilitar el Acceso de aplicaciones poco seguras. 


