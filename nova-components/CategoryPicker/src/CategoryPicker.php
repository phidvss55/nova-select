<?php

namespace Nova\CategoryPicker;

use Laravel\Nova\Fields\Field;

class CategoryPicker extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'category-picker';


    public function options($options, $selected = [])
    {
        return $this->withMeta([
            'options' => collect($options ?? [])->map(function ($label, $value) use ($selected) {
                return [
                    'id' => $value,
                    'text' => $label,
                    'selected' => in_array($value, $selected),
                ];
            })->values()->all(),
        ]);
    }
}
