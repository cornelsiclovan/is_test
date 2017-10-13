<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.10.2017
 * Time: 17:35
 */

namespace AppBundle\Controller\Api;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class CustomerController
{
    /**
     * @Route("/api/programmers")
     * @Method(POST)
     */
    public function newAction()
    {
        return new Response('Let\'s do this!');
    }
}