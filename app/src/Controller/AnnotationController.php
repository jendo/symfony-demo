<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnotationController
{
    /**
     * @Route("/annotation/number",name="app_annotaion_number")
     * @return Response
     */
    public function number(): Response
    {
        try {
            $number = random_int(0, 100);
        } catch (\Exception $e) {
            $number = 1;
        }

        return new Response(
            '<html><body>Number from annotation controller: ' . $number . '</body></html>'
        );
    }
}
