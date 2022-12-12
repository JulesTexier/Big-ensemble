<?php

namespace App\Controller\Dashboard;

use App\Entity\Data;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Controller\Dashboard\DataCrudController;


class DashboardController extends AbstractDashboardController
{

    private AdminUrlGenerator $adminUrlGenerator;
    public function __construct(AdminUrlGenerator $adminUrlGenerator)
    {
        $this->adminUrlGenerator = $adminUrlGenerator;
    }
    #[Route('/Big-Ensemble-Admin', name: 'admin')]
    public function index(): Response
    {
        return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $url =  $this->adminUrlGenerator->setController(DataCrudController::class)->generateUrl();

        return  $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Big Ensemble');
    }

    public function configureMenuItems(): iterable
    {
        return [
            //  MenuItem::linkToDashboard('Accueil', 'fa fa-home'),
            MenuItem::linkToCrud('Accueil', 'fa fa-home', Data::class),
            MenuItem::subMenu('Gestion des Datas', 'fa fa-list')->setSubItems([
                MenuItem::linkToCrud('Les datas', 'fa-sharp fa-solid fa-list', Data::class),

            ]),



        ];
    }
}
