<?php

namespace App\Controller;

use App\Annotations\Route;
use App\Service\Serializer;

/**
 * @Route(route="/")
 */
class IndexController {
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @Route(route="/")
     */
    public function index() 
    {
        return $this->serializer->serialize([
            'Action' => 'Index',
            'Time' => time()
        ]);
    }
}