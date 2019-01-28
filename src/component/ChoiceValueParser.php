<?php
declare(strict_types=1);


namespace Gaia\Tekton\component;

class ChoiceValueParser
{
    public static function parse(array $items, string $textKey, string $valueKey, $allowEmpty = false)
    {
        $result = [];
        if ($allowEmpty) {
            array_push($result, [
                'text' => '-',
                'value' => null
            ]);
        }
        foreach ($items as $item) {
            array_push($result, [
                'text' => $item[$textKey],
                'value' => $item[$valueKey]
            ]);
        }
        return $result;
    }
}