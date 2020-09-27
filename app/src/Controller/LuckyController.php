<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number(): Response
    {
        try {
            $number = random_int(0, 100);
        } catch (\Exception $e) {
            $number = 1;
        }

        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
    }
}
