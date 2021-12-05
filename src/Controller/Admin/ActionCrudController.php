<?php

namespace App\Controller\Admin;

use App\Entity\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ActionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Action::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('owner'),
            NumberField::new('price'),
            TextField::new('creatAt'),
            NumberField::new('Areal'),
        ];
    }
    
}
