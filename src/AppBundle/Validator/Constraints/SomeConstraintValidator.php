<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class SomeConstraintValidator extends ConstraintValidator
{
    public function validate($data, Constraint $constraint)
    {
    }
}