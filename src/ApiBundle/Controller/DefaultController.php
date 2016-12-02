<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class DefaultController extends FOSRestController
{
    public function getAllAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('ApiBundle:City')->findAll();
        $view = $this->view($cities);
        return $this->handleView($view);
    }

    /**
     * @param $name
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getNameAction($name)
    {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('ApiBundle:City')->getByNameLike($name);
        $view = $this->view($cities);
        return $this->handleView($view);
    }



    public function getPostCodeAction($name)
    {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('ApiBundle:City')->getByNameLike($name);
        $view = $this->view($cities);
        return $this->handleView($view);
    }
}
