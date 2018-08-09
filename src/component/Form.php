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
    ) {
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
     * @param array $values
     * @param array $options
     * @return $this
     */
    public function addField(
        string $name,
        string $label,
        string $type = FieldType::TEXT,
        array $values = [],
        array $options = []
    ) {
        // working on radio button values
        $row = new RowField(count($this->rows), $label, $options['rows'] ?? []);
        $row->add($name, $type, $values, $options['fields'] ?? []);
        
        array_push(
            $this->rows,
            $row
        );

        return $this;
    }

    public function addRow(
        string $label,
        array $fields,
        array $options = []
    ) {
        $row = new RowField(count($this->rows), $label, $options);

        foreach ($fields as $field) {
            $row->add(
                $field['name'],
                $field['type'],
                $field['values'] ?? null,
                $field['options'] ?? []
            );
        }

        array_push($this->rows, $row);

        return $this;
    }

    /**
     * @param string $view
     * @param array $value
     * @return string
     * @throws \Throwable
     */
    public function render(string $view, array $value = [])
    {
        $this->build();

        $payload = array_merge(
            $value,
            ['tekton' => $this->toArray()]
        );

        return view($view, $payload);
    }

    /**
     * @return array
     */
    public function toArray() : array
    {
        $rows = [];
        foreach ($this->rows as $row) {
            array_push($rows, $row->toArray());
        }

        return [
            'id'        => $this->id,
            'method'    => $this->method,
            'url'       => $this->url,
            'title'     => $this->title,
            'rows'      => $rows,
            'options'   => $this->options
        ];
    }

    /**
     * @return void
     */
    abstract protected function build() : void;
}