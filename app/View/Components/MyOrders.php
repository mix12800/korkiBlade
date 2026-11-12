<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MyOrders extends Component
{
    /**
     * Create a new component instance.
     */
    public $myOrders;
    public function __construct($myOrders)
    {
        $this->myOrders = $myOrders;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-orders');
    }
}
