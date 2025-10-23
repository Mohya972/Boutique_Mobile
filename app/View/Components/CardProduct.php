<?php

namespace App\View\Components;

use Closure;
use App\Models\Product;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CardProduct extends Component
{
    
    public $product; // informations pour le produit
    /**
     * Create a new component instance.
     */
    public function __construct(Product $product)
    {
        //
        $this->product = $product;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $products = Product::limit(8)->get();
        
        return view('components.card-product', compact('products'));
    }
}
