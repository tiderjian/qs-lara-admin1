<?php

namespace Tiderjian\Admin;

use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;
use Tiderjian\Admin\Form\Field\MultipleFile;
use Tiderjian\Admin\Form\Field\MultipleImage;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        Form::extend("multipleFile", MultipleFile::class);
        Form::extend("multipleImage", MultipleImage::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

}
