<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer extends Model
{
    use HasFactory;

    public function sendMail($request): string
    {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        $address = $request->email;
        $name = $request->name;
        try {
            // Configuración del servidor SMTP
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = config('mail.mailers.smtp.host');
            $mail->SMTPAuth = true;
            $mail->Username = config('mail.mailers.smtp.username');
            $mail->Password = config('mail.mailers.smtp.password');
            $mail->SMTPSecure = config('mail.mailers.smtp.encryption');
            $mail->Port = config('mail.mailers.smtp.port');

            // Configuración del correo electrónico
            $mail->setFrom(config('mail.from.address'), config('mail.from.name'));
            $mail->addAddress("jeronimo.cabrera@gosysglobal.com", "jeronimo");
            $mail->isHTML(true);
            $mail->Subject = 'Solicitud de contacto';
            $mail->Body =
            "<p>Nombre: $name</p>
            <p>Correo electronico: $address</p>
            <p>Mensaje: $request->message</p>
            <p>Fecha: " . date('d-m-Y H:i:s') . "</p>
            <p>Numero de telefono: $request->number</p>";

            // Enviar correo electrónico
            $mail->send();
            return 'El correo electrónico ha sido enviado.';
        } catch (Exception $e) {
            return 'No se pudo enviar el correo electrónico: ' . $mail->ErrorInfo;
        }
    }
}
