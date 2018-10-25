<?php

declare(strict_types=1);


namespace Gaia\Tekton\Component;

use Gaia\Tekton\Component\Value\ButtonPlacement;
use Gaia\Tekton\Component\Value\FieldType;

/**
 * Class Form
 * @package Gaia\Tekton\Component
 */
abstract class Form
{
    /**
     * @var array
     */
    protected $rows = [];

    /**
     * @var string
     */
    protected $method = 'GET';

    /**
     * @var null|string
     */
    protected $url = null;

    /**
     * @var null|string
     */
    protected $id = null;

    /**
     * @var string
     */
    protected $title = 'Form';

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var array
     */
    protected $scripts = [];

    /**
     * @var array
     */
    private $defaultValues = [];

    /**
     * Form constructor.
     * @param string $method
     * @param string|null $url
     * @param string|null $id
     * @param string $title
     * @param array $options
     */
    public function __construct(
        string $method = 'GET',
        string $url = null,
        string $id = null,
        string $title = '',
        array $options = []
    )
    {
        $this->method = $method;
        $this->url = $url;
        $this->id = $id;
        $this->title = $title;
        $this->options = array_replace_recursive(
            config('tekton.forms'),
            $options
        );
    }

    /**
     * @param string $name
     * @param string $label
     * @param string $type
     * @return Field
     */
    public function addField(
        string $name,
        string $label,
        string $type = FieldType::TEXT
    ): Field {
        $row = new RowField(count($this->rows), $label, $options['rows'] ?? []);
        $field = $row->add($name, $type, $options['fields'] ?? []);

        array_push($this->rows, $row);

        return $field;
    }

    /**
     * @param string $label
     * @param array $fields
     * @param array $options
     * @return RowField
     */
    public function addRow(
        string $label,
        array $fields,
        array $options = []
    ): RowField {
        $row = new RowField(count($this->rows), $label, $options);

        foreach ($fields as $field) {
            $row->add(
                $field['name'],
                $field['type'],
                $field['options'] ?? []
            );
        }

        array_push($this->rows, $row);

        return $row;
    }

    /**
     * @param array $options
     * @return mixed
     */
    public function render(array $options = [])
    {
        $this->build($this->defaultValues);

        $payload = array_merge(
            $options,
            ['tekton' => $this->toArray()]
        );

        return view(config('tekton.default-view'), $payload);
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $rows = [];
        foreach ($this->rows as $row) {
            array_push($rows, $row->toArray());
        }

        return [
            'id' => $this->id,
            'method' => $this->method,
            'url' => $this->url,
            'title' => $this->title,
            'rows' => $rows,
            'options' => $this->options
        ];
    }

    /**
     * @param array $values
     */
    public function setDefaultValues(array $values)
    {
        $this->defaultValues = $values;
    }

    /**
     * @param $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param array $values
     */
    abstract protected function build(array $values = []): void;
}