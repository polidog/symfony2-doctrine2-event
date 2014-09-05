<?php

namespace Polidog\EventTestBundle\Controller;

use Polidog\EventTestBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class DefaultController
 * @package Polidog\EventTestBundle\Controller
 *
 */
class DefaultController extends Controller
{
    /**
     * @Route("/test")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PolidogEventTestBundle:Post')->find(1);
        if (false === ($entity instanceof Post)) {
            // 初回の場合の対応
            $entity = new Post();
            $entity->setTitle('hogehoge');
            $em->persist($entity);
            $em->flush();
        }

        $entity->setTitle('testtest'.mt_rand(1,10000));
        $em->persist($entity);
        $em->flush();

        return $this->render('PolidogEventTestBundle:Default:index.html.twig');
    }
}
