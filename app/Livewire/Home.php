<?php

namespace App\Livewire;

use App\Models\partitur;
use App\Models\Kostum;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class Home extends Component
{
    use WithPagination;
    public $status;
    // public $partiturs;
    // public $kostums;
    public $cari;
    #[Url] 
    public $search = '';

    public function search(){
        if($this->status=='partitur'){

        }
    }
    public function render()
    {
        return view('livewire.home',[
            'partiturs' => partitur::where('judul','like','%' .$this->search.'%')->Paginate(8),
            'kostums' => kostum::where('nama','like','%' .$this->search.'%')->Paginate(5),
        ]);
    }
}
