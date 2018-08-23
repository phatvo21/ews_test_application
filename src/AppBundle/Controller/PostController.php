<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function showAction()
    {
        $posts = $this->getDoctrine()->getRepository("AppBundle:Post")->findAll();

        return $this->render('post/index.html.twig', array(
            'posts' => $posts,
        ));
    }

    /**
     * @Route("post/{id}", name="post")
     */
    public function showSingle($id)
    {

        $post = $this->getDoctrine()->getRepository("AppBundle:Post")->find($id);

        return $this->render('post/single.html.twig', array(
            'post' => $post,
        ));
    }
}
