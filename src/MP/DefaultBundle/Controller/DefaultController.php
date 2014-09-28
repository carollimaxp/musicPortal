<?php
namespace MP\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MP\DefaultBundle\Entity\Enquiry;
use MP\DefaultBundle\Form\EnquiryType;

class DefaultController extends Controller
{
    public function indexAction() {
        
        return $this->render('MPDefaultBundle:Default:index.html.twig');
    }
    
    public function aboutAction() {
     
        return $this->render('MPDefaultBundle:StaticPages:about.html.twig');
    }
    
    public function contactAction () {
        
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact enquiry from symblog')
                    ->setFrom('mailer@breezy-studios.com')
                    ->setTo($this->container->getParameter('default.emails.contact_email'))
                    ->setBody($this->renderView('MPDefaultBundle:StaticPages:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag('mailer-notice', 'Your contact enquiry was successfully sent. Thank you!');

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('mp_default_contact'));
            }
        }

        return $this->render('MPDefaultBundle:StaticPages:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
