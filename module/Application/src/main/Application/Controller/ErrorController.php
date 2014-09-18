<?php
/**
 * SlimMVC-SkeletonApplication
 *
 * @link https://github.com/brian978/SlimMVC-SkeletonApplication
 * @copyright Copyright (c) 2014
 * @license Creative Commons Attribution-ShareAlike 3.0
 */

namespace Application\Controller;

use SlimMvc\Mvc\Controller\AbstractController;

/**
 * Class ErrorController
 *
 * @package Application\Controller
 */
class ErrorController extends AbstractController
{
    public function indexAction()
    {
        return [
            'exception' => $this->event->getError()
        ];
    }
}
