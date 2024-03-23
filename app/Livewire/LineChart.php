<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class LineChart extends Component
{
    public $dataProductName;
    public $dataProductAmount;

    // protected $listeners = ['updateDataProduct' => 'getDataProduct'];

    public function getDataProduct()
    {
        $this->dataProductName = Product::pluck('name');
        $this->dataProductAmount = Product::pluck('amount');
        // $product = Product::find(1);
        // $product->amount = 40;
        // $product->save();
        // $this->dataProduct;
    }

    public function mount()
    {
        $this->getDataProduct();
    }

    public function updated()
    {
        $this->getDataProduct();
        // $product = Product::find(1);
        // $product->amount = 40;
        // $product->save();
        // $this->dataProduct;
    }

    public function render()
    {
        return view('livewire.line-chart');
    }
}
