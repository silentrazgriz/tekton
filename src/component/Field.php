<?php

declare(strict_types=1);


namespace Gaia\Tekton\Component;

use Gaia\Tekton\Component\Value\FieldType;

/**
 * Class Field
 * @package Gaia\Tekton\Component
 */
class Field
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var array
     */
    protected $values = [];

    /**
     * Field constructor.
     * @param string $name
     * @param string $label
     * @param string $type
     * @param array $values
     * @param array $options
     */
    public function __construct(
        string $name,
        string $type = FieldType::TEXT,
        array $values = [],
        array $options = []
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->values = $values;
        $this->options = array_replace_recursive(
            config('tekton.fields'),
            $options
        );
    }

    public function toArray() : array
    {
        return [
            'name'      => $this->name,
            'type'      => $this->type,
            'values'     => $this->values,
            'options'   => $this->options
        ];
    }
}