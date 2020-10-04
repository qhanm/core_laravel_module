<?php

namespace Modules\Backend\Http\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Fields\FormField;
use Kris\LaravelFormBuilder\Form;

class LoginForm extends Form
{
    public function buildForm()
    {
        $this->add('email', Field::TEXT, [
                'label' => trans('backend::auth.email')
            ])
            ->add('password', Field::PASSWORD, [
                'label' => trans('backend::auth.password')
            ])
            ->add('remember', Field::CHECKBOX, [
                'wrapper' => ['class' => 'custom-control custom-checkbox mb-3'],
                'attr' => [
                    'class' => 'custom-control-input'
                ],
                'label' => trans('backend::auth.remember'),
                'label_attr' => [
                    'class' => 'custom-control-label'
                ]
            ])
            ->add('login', Field::BUTTON_SUBMIT, [
                'attr' => [
                    'class' => 'btn btn-primary btn-block waves-effect waves-light',
                    'id' => 'btn-submit-login'
                ],
                'label' => trans('backend::auth.login')
            ]);
    }
}
