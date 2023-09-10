<?php

require_once(__DIR__ . '/../vendor/autoload.php');
use \Mailjet\Resources;

define('API_USER', 'b566844015a8e589bcc3155b460c5e42');
define('API_LOGIN', '9b0572e92e340b2829878471ab1038cc');
$mj = new \Mailjet\Client(API_USER, API_LOGIN, true, ['version' => 'v3.1']);

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "noecalmes.pro@gmail.com",
                        'Name' => "Noé Calmes"
                    ],
                    'To' => [
                        [
                            'Email' => "noecalmes.pro@gmail.com",
                            'Name' => "Noé Calmes"
                        ]
                    ],
                    'Subject' => "Demande de renseignement",
                    'TextPart' => "$email, $message",
                ]
            ]
        ];

        try {
            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success();
            echo "Email envoyé avec succès !";
        } catch (\Mailjet\Exception $e) {
            echo 'Erreur Mailjet: ' . $e->getMessage();
        }
    } else {
        echo "Email non valide";
    }
} else {
    header('Location:../contact.php');
    die();
}
?>
