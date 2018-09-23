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
        array $options = []
    ) {
        $this->name = $name;
        $this->type = $type;
        $this->options = array_replace_recursive(
            config('tekton.fields'),
            $options
        );
    }

    /**
     * @param array $values
     * @return Field
     */
    public function setChoiceValues(array $values): Field
    {
        $this->values = $values;
        return $this;
    }

    /**
     * @param string $placeholder
     * @return Field
     */
    public function setPlaceholder(string $placeholder): Field
    {
        $this->options['placeholder'] = $placeholder;
        return $this;
    }

    /**
     * @param $value
     * @return Field
     */
    public function setDefaultValue($value): Field
    {
        $this->options['value'] = $value;
        return $this;
    }

    /**
     * @param $value
     * @return Field
     */
    public function setHint($value): Field
    {
        $this->options['helper'] = $value;
        return $this;
    }

    /**
     * @param $value
     * @return Field
     */
    public function setValidMessage($value): Field
    {
        $this->options['validation']['valid'] = $value;
        return $this;
    }

    /**
     * @param $value
     * @return Field
     */
    public function setInvalidMessage($value): Field
    {
        $this->options['validation']['invalid'] = $value;
        return $this;
    }

    /**
     * @param array $options
     * @return Field
     */
    public function setOptions(array $options): Field
    {
        $this->options = array_replace_recursive(
            $this->options,
            $options
        );
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'name'      => $this->name,
            'type'      => $this->type,
            'values'     => $this->values,
            'options'   => $this->options
        ];
    }
}