<?php

namespace Tiderjian\Admin\Form\Field;

use Encore\Admin\Form\Field\MultipleImage as EncoreMultipleImage;

class MultipleImage extends EncoreMultipleImage
{
    use FixMultipleBug;
}
