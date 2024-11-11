<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{

    private $label;
    private $type;

    /**
     * Create a new component instance.
     */
    public function __construct($label, $type= 'text')
    {
        $this->label = $label;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input', [
        'label' => $this->label,
        'type' => $this->type
        ]);
    }
}
