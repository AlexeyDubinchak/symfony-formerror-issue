<?php

namespace AppBundle\Controller;

use AppBundle\Form\NoExtraFieldsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(NoExtraFieldsType::class);
        $form->submit([
            'existing_field' => 12345,
            'not_allowed_extra_field'
        ]);

        foreach ($form->getErrors() as $error) {
            print_r([
                'message' => $error->getMessageTemplate(),
                'cause' => get_class($error->getCause()->getConstraint())
            ]);
        }

        return new Response();
    }
}
