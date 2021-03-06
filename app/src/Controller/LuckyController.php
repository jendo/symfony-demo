<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    public function number(): Response
    {
        try {
            $number = random_int(0, 100);
        } catch (\Exception $e) {
            $number = 1;
        }

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);

    }
}
