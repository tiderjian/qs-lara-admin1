<?php

namespace Tiderjian\Admin\Form\Field;

use Encore\Admin\Form\Field\MultipleFile as EncoreMultipleFile;

class MultipleFile extends EncoreMultipleFile
{
    use FixMultipleBug;
}
