<?php
declare(strict_types=1);


namespace Gaia\Tekton\component;

class ChoiceValueParser
{
    public static function parse(array $items, string $textKey, string $valueKey)
    {
        $result = [];
        foreach ($items as $item) {
            array_push($result, [
                'text' => $item[$textKey],
                'value' => $item[$valueKey]
            ]);
        }
        return $result;
    }
}