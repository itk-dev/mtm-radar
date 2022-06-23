<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SetUserPasswordFormType;
use Cassandra\Set;
use Doctrine\ORM\EntityManagerInterface;
use ItkDev\UserBundle\User\UserManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\String\ByteString;
use Symfony\Contracts\Translation\TranslatorInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * @Route("/admin/user/{id}/set-password", name="admin_user_set_password")
     * @IsGranted("ROLE_ADMIN")
     */
    public function setUserPassword(Request $request, User $user, TranslatorInterface $translator, UserManager $userManager, EntityManagerInterface $entityManager)
    {
        $minLength = SetUserPasswordFormType::MIN_LENGTH;

        $form = $this->createForm(SetUserPasswordFormType::class, [
            'password' => ByteString::fromRandom(2 * $minLength),
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $password = trim($form->getData()['password'] ?? '');
            if (strlen($password) < $minLength) {
                $this->addFlash('danger', $translator->trans('User password too short. Must be contain least %min_length% characters.', [
                    '%min_length%' => $minLength,
                ]));
            } else {
                try {
                    $userManager->setPassword($user, $password);
                    $userManager->updateUser($user);

                    $this->addFlash('success', $translator->trans('Password for user %username% set to %password%', [
                        '%username%' => $user->getUsername(),
                        '%password%' => $password,
                    ]));

                    return $this->redirectToRoute('easyadmin', ['entity' => 'User']);
                } catch (\Throwable $t) {
                    $this->addFlash('danger', $translator->trans('Error settings password for user %username%: %message%', [
                        '%username%' => $user->getUsername(),
                        '%message%' => $t->getMessage(),
                    ]));
                }
            }
        }

        return $this->render('security/user/set-password.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }
}
