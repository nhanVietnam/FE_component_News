<?php

namespace Components\News\cb343dfc4cd85402fa4078d3a3d93623a;

use App\Utilities\ExtendedComponent;

class cb343dfc4cd85402fa4078d3a3d93623a extends ExtendedComponent
{
    protected string $uuid = "cb343dfc4cd85402fa4078d3a3d93623a";
    protected string $type = "News";
    protected string $name = "News";
    protected string $description = "";
    // variables used in pug template
    protected array $variables = [
        
    ];
    // define which type of input each variable uses
    // AVAILABLE TYPES
    // ckeditor: for writing articles, large content
    // checkbox: for toggling on/off
    // input: for writing name, title, small content
    // media-input: for inserting images/iframes
    // multi-media-input: for inserting multiple images/iframes
    // select: for selecting content from a dropdown list
    // sortable: for a draggable sorting input
    // tag-input: for selecting multiple tags
    // textarea: for writing notes
    protected array $input_types = [
        
    ];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view("$this->type.$this->uuid.$this->uuid");
    }
}