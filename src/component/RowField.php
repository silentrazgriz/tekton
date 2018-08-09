<?php

declare(strict_types=1);


namespace Gaia\Tekton\Component;


use Gaia\Tekton\Component\Value\FieldType;

/**
 * Class RowField
 * @package Gaia\Tekton\Component
 */
class RowField
{
    /**
     * @var string
     */
    protected $label;

    /**
     * @var array
     */
    protected $fields = [];

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var
     */
    protected $id;

    /**
     * RowField constructor.
     * @param int $id
     * @param string $label
     * @param array $options
     */
    public function __construct(
        int $id,
        string $label,
        array $options = []
    )
    {
        $this->id = $id;
        $this->label = $label;
        $this->options = array_replace_recursive(
            config('tekton.rows'),
            $options
        );
    }

    /**
     * @param string $name
     * @param string $type
     * @param array $values
     * @param array $options
     * @return RowField
     */
    public function add(
        string $name,
        string $type = FieldType::TEXT,
        array $values = [],
        array $options = []
    ) : RowField {
        $field = new Field($name, $type, $values, $options);

        array_push($this->fields, $field);

        return $this;
    }

    /**
     * @return array
     */
    public function toArray() : array
    {
        $fields = [];
        foreach (array_values($this->fields) as $field) {
            array_push($fields, $field->toArray());
        }

        return [
            'id'        => $this->id,
            'label'     => $this->label,
            'fields'    => $fields,
            'options'   => $this->options
        ];
    }
}