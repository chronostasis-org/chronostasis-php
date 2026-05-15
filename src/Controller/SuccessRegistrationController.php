<?php

// src/Controller/SuccessRegistrationController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SuccessRegistrationController
{
    #[Route('/registration/success', name:'app_registration_success')]
    public function success(): Response
    {
        return new Response(
            '<html><body>Registration was successful</body></html>'
        );
    }
}
