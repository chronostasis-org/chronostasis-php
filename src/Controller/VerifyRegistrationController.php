<?php

// src/Controller/SuccessRegistrationController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VerifyRegistrationController
{
    #[Route('/registration/verify', name:'app_registration_verify')]
    public function success(): Response
    {
        return new Response(
            '<html><body>Please verify your account (You\'ve received an email)</body></html>'
        );
    }
}
