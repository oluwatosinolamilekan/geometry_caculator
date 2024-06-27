<?php

namespace App\Controller;

use Exception;
use App\Entity\Circle;
use App\Helper\ResponseAction;
use App\Helper\ValidationHelper;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class CircleController extends AbstractController
{
    #[Route('/circle/{radius}', methods: ['GET'])]
    public function getCircle($radius)
    {
      try{
            ValidationHelper::validate($radius);
            $circle = new Circle(floatval($radius));
            $res = [
                'type' => 'circle',
                'radius' => $radius,
                'surface' => $circle->calculateSurface(),
                'circumference' => $circle->calculateDiameter(),
            ];
            return $this->json($res);
      }catch(Exception $e){
        return ResponseAction::errorResponse($e);
      }
    }
}
