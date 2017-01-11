<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class ApiController extends FOSRestController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
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


    /**
     * @param $postCode
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getPostAction($postCode)
    {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('ApiBundle:City')->getByPostCodeLike($postCode);
        $view = $this->view($cities);

        return $this->handleView($view);
    }

    /**
     * @param $inseeCode
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getInseeAction($inseeCode)
    {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('ApiBundle:City')->getByInseeCodeLike($inseeCode);
        $view = $this->view($cities);

        return $this->handleView($view);
    }
}
