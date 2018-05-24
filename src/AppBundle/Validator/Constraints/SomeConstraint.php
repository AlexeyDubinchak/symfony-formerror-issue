<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class SomeConstraint extends Constraint
{
    public const SOME_CONSTRAINT_ERROR = 'f3g4g44gf-3j65-563b-bj6f-fh56k8643312';

    protected static $errorNames = array(
        self::SOME_CONSTRAINT_ERROR => 'SOME_CONSTRAINT_ERROR',
    );

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}
