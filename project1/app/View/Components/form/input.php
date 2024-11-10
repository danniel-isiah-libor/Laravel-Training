<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */
    private $label = "";
    private $type = "";
    private $class = "";
    public function __construct($label,$type="text",$class="")
    {
        $this->label = $label;
        $this->type = $type;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input',[
            'label'=>$this->label,
            'type'=>$this->type,
            'class'=>$this->class
        ]);
    }
}
