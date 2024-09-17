<?php

namespace Controllers;

use MVC\Router;
use Model\Servicio;
use PHPMailer\PHPMailer\PHPMailer;
// use Model\ActiveRecord; // Remove if not needed

class PaginasController {
    public static function index( Router $router ) {

        $servicios = Servicio::all();
        $inicio = true;

        $router->render('paginas/index', [
            'servicios' => $servicios,
            'inicio' => $inicio
        ]);

    }
    public static function nosotros( Router $router ) {

        $router->render('paginas/nosotros', []);

    }
    public static function servicios( Router $router ) {

        $servicios = Servicio::all();

        $router->render('paginas/servicios', [
            'servicios' => $servicios
        ]);

    }
    public static function servicio( Router $router ) {

        $id = validarORedireccionar('/servicios');

        // Busca el servicio por su id
        $servicio = Servicio::find($id);

        $router->render('paginas/servicio', [
            'servicio' => $servicio
        ]);

    }
    public static function blog( Router $router ) {
        $blog = Blog::all(); // Uncommented

        $router->render('paginas/blog', [
            'blog' => $blog,
            // 'entrada' => $entrada
        ]);

    }
    public static function entrada( Router $router ) {
        $entrada = Blog::all(); // Uncommented

        $router->render('paginas/entrada', [
            'entrada' => $entrada
        ]);
        

    }
    public static function contacto( Router $router ) {

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            

            $respuestas = $_POST['contacto'];
    
            // Crear una instancia de PHPMailer
            $mail =new PHPMailer();

            // Configurar SMTP para envío de emails
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '905762cfd7490e';
            $mail->Password = '23da3aecebe8ba';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            // Configurar el contenido del mail
            $mail->setFrom('admin@equiparent.app');
            $mail->addAddress('admin@equiparent.app', 'Equiparent.app');
            $mail->Subject = 'Tienes un Nuevo Mensaje';

            // Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            // Definir el contenido
            $contenido = '<html>';
            $contenido .= '<p>Tienes un nuevo mensaje</p>';
            $contenido .= '<p>Nombre: ' .  $respuestas['nombre']   . '</p>';
            $contenido .= '<p>Email: ' .  $respuestas['email']   . '</p>';
            $contenido .= '<p>Teléfono: ' .  $respuestas['telefono']   . '</p>';
            $contenido .= '<p>Mensaje: ' .  $respuestas['mensaje']   . '</p>';
            $contenido .= '<p>Fecha Contacto: ' .  $respuestas['fecha']   . '</p>';
            $contenido .= '<p>Hora: ' .  $respuestas['hora']   . '</p>';
            $contenido .= '</html>';

            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texto alternativo sin HTML';
            
            // Enviar el email
            if($mail->send()) {
                echo "Mensaje enviado Correctamente";
            } else {
                echo "El mensaje no se pudo enviar...";
            }

        }

        

        $router->render('paginas/contacto', [
            
        ]);

    }
}