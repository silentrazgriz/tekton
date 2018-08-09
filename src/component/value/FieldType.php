<?php

declare(strict_types=1);


namespace Gaia\Tekton\Component\Value;

/**
 * Class FieldType
 * @package Gaia\Tekton\Component\Value
 */
class FieldType
{
    // Text
    const TEXT                  = 'text';
    const EMAIL                 = 'email';
    const PASSWORD              = 'password';
    const NUMBER                = 'number';
    const PHONE                 = 'phone';
    const TEXTAREA              = 'textarea';

    // DatePicker
    const DATE                  = 'date';
    const DATE_RANGE            = 'date-range';

    // Upload
    const FILE_UPLOAD           = 'file-upload';
    const FILE_UPLOAD_MULTIPLE  = 'file-upload-multiple';
    const IMAGE_UPLOAD          = 'image-upload';
    const IMAGE_UPLOAD_MULTIPLE = 'image-upload-multiple';

    // Select
    const SELECT                = 'select';
    const RADIO                 = 'radio';
    const CHECKBOX              = 'checkbox';
    const SWITCH                = 'switch';

    // Other
    const HIDDEN                = 'hidden';
}