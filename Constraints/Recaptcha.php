<?php
namespace Delatlantik\RecaptchaBundle\Constraints;

use Symfony\Component\Validator\Constraint;

class Recaptcha extends Constraint
{
    public $message = 'recaptcha.error';
}