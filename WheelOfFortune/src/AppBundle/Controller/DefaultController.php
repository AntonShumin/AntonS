<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Wheel;
use AppBundle\Entity\Users;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="index")
     */
    public function index()
    {


        return $this->render('default/welcome.html.twig', ['logged' => false]);

    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/form",name="form")
     */
    public function registratie(Request $request)
    {
        exit(var_dump($_GET));

        $form = $this->createFormBuilder()
            ->add('voornaam', TextType::class)
            ->add('naam', TextType::class)
            ->add('mail', EmailType::class)
            ->add('straat', TextType::class)
            ->add('post', TextType::class)
            ->add('gsm', NumberType::class)
            ->add('save', SubmitType::class, array('label' => 'Submit'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            var_dump($form->getData());
            return $this->render('default/welcome.html.twig', ['logged' => "tes"]);

        }


        return $this->render('default/form.html.twig', array(
            'form' => $form->createView(),
        ));
        // return $this->json(["sup" => "bro"]);


    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/wheel/{id_deelnemer}",name="wheel")
     */
    public function turnWheel(Request $request, $id_deelnemer)
    {

        //setup
        $conn = $this->get('database_connection');

        //check if user is valid
        $user = new Users();
        $user = $user->authorize_user($conn, (int)$id_deelnemer);
        $data = $user;

        //if user can play
        if ( $user['result'] == 'valid' ) {

            //spin the wheel
            $wheel = new Wheel();
            $wheel_chance = $wheel->turn_wheel();

            //preset loss
            $data['reward'] = 'Helaas, u hebt niets gewonnen';

            //if won
            if( $wheel_chance > 0 ) {

                //check rewards remaining
                $availability = $wheel->check_availability($conn,$wheel_chance);
                if (  $availability != 0 ) {

                    $data['reward'] = "Proficiat: uw prijs is $availability";

                }

            }

        }


        return $this->json($data);
    }


}
