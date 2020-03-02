<?php

declare(strict_types=1);

namespace App\Controller;


/**
 * Class TestController
 * @package App\Controller
 */
class TestController extends AbstractController
{

    /**
     * @return string
     */
    public function index()
    {
        return 'Client TestController';
    }
}
