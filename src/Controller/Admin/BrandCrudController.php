<?php

namespace App\Controller\Admin;

use App\Entity\Brand;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BrandCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Brand::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name','Nom de la Marque'),
            ImageField::new('illustration','Logo de la Marque')
                ->setBasePath('uploads/cars')
                ->setUploadDir('public/uploads/cars')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),


        ];
    }

}
