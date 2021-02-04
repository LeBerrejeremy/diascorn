<?php

namespace App\Controller\Admin;

use App\Entity\Realisation;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RealisationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Realisation::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
        ImageField::new('image')
                    ->setBasePath('uploads/')
                    ->setUploadDir('public/uploads/')
                    ->setUploadedFileNamePattern('[name].[extension]')
                    ->setRequired(false)
        ];
    }
    
}
