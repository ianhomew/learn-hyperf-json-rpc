<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use App\Rpc\CalculatorServiceInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends AbstractController
{

    /**
     * @Inject()
     * @var CalculatorServiceInterface
     */
    private $calculatorService;

    public function index()
    {
        $a = (int) $this->request->input('a', 1);
        $b = (int) $this->request->input('b', 2);

        return $this->calculatorService->add($a, $b);
    }
}
