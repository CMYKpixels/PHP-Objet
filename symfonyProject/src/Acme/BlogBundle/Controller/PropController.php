<?php

    namespace Acme\BlogBundle\Controller;

    use Acme\BlogBundle\AcmeBlogBundle;
    use Acme\BlogBundle\Entity\Blueprint;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    class PropController extends Controller
    {
        public function indexAction()
        {
            return new Response('testing');
        }

//        public function randomAction()
//        {
//            return new Response('this is a random message MothaFuckazz');
//        }

        public function randomAction($id)
        {
            return new Response('This is random page with the $id => '.$id);
        }

        public function requestAction(Request $request, $id)
        {
//            die('meurs');
//            http://localhost:8000/app_dev.php/request/2?userid=3
//            query-> gère les $_GET
            $userid = $request->query->get('userid');
//            Pour récupérer les $_POST
//            request-> gère les $_POST
//            $username = $request->request->get('username')
            $session = $request->getSession();
            $session->set('user_id', 99);
//            Pour récupérer une session
            $propId = $session->get('prop_id');

            $array = array(
                'Super Sonico',
                'Suzu Fujimi',
                'Furu Watanuki'
            );

            $name = 'Daiichi Uchuu Sokudo : Super Astronomical Velocity';

//            return $this->render('AcmeBlogBundle::request.html/twig');
            return $this->render('AcmeBlogBundle:Default:request.html.twig',
                                 array(
                                     'name' => $name,
                                     'team' => $array
                                 ));
//            return new Response ('Request de la page avec $id => '.$userid);
        }

        public function whereAction()
        {
//            Redirige avec l'Alias
//            return $this->redirectToRoute('acme_blog_homepage');
//            Redirige avec le chemin réel
//            return $this->redirect('/');

//            Redirige avec un paramètre
            return $this->redirectToRoute('acme_blog_request', ['id' => 5]);

        }

        public function createAction()
        {
            $em = $this->getDoctrine()->getManager();

            $blueprint = new Blueprint();
            $blueprint->setTitle('Dynamite Launcher');
            $blueprint->setContent('Delivered : Will.E Coyote');
            $blueprint->setNote('Caution Explosive');

//            On demande à l'ORM de prendre en charge notre entité avec Persist()
            $em->persist($blueprint);

//            On dit à l'ORM de passer les requêtes en attente càd Persist()
            $em->flush();

            echo '<pre>';
            dump($blueprint);
            echo '</pre>';

            die('CREATE');
        }

        public function editAction()
        {
            $em = $this->getDoctrine()->getManager();
            $repo = $em->getRepository('AcmeBlogBundle:Blueprint');
            $blueprint = $repo->find(1);

            $blueprint->setTitle('Dynamite Gun');

            echo '<pre>';
            dump($blueprint);
            echo '</pre>';

            $em->flush();
            die('EDIT');
        }

        public function deleteAction()
        {
            $em = $this->getDoctrine()->getManager();
            $repo = $em->getRepository('AcmeBlogBundle:Blueprint');
            $blueprint = $repo->find(1);

            $em->remove($blueprint);

            $em->flush();

            echo '<pre>';
            dump($blueprint);
            echo '</pre>';

            die('TRASH');
        }

    }

