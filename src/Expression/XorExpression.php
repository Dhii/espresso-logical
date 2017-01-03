<?php

namespace Dhii\Espresso\Expression;

/**
 * Description of XorExpression
 *
 * @since [*next-version*]
 */
class XorExpression extends \Dhii\Espresso\AbstractLogicalExpression
{

    /**
     * Constructor.
     *
     * @since [*next-version*]
     *
     * @param array $terms   [optional] An array of evaluable terms. Default: array()
     * @param bool  $negated [optional] True to negate the expression, false otherwise.
     */
    public function __construct(array $terms = array(), $negated = false)
    {
        $this->setTerms($terms)
            ->setNegated($negated);
    }

    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     */
    public function _evaluate($left, $right)
    {
        return ($left xor $right);
    }

}