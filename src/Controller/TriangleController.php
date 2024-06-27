<?php

namespace App\Controller;

use Exception;
use App\Entity\Triangle;
use App\Helper\ResponseAction;
use App\Helper\ValidationHelper;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TriangleController extends AbstractController
{
    #[Route('/triangle/{a}/{b}/{c}', methods: ['GET'])]
    public function getTriangle($a, $b, $c)
    {
       try{
            $values = [$a, $b, $c];
            ValidationHelper::validate($values);
            $triangle = new Triangle($a, $b, $c);
            $res = [
                'type' => 'triangle',
                'a' => $a,
                'b' => $b,
                'c' => $c,
                'surface' => $triangle->calculateSurface(),
                'circumference' => $triangle->calculateDiameter(),
            ];
            return $this->json($res);
       }catch(Exception $e){
        return ResponseAction::errorResponse($e);
       }
    }
}
