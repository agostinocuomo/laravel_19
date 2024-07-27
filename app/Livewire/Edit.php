<?php

namespace App\Livewire;



use Livewire\Attributes\Validate;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

use function Termwind\render;

class Edit extends Component
{

    #[Validate('required|string')]
    public $titolo;
   #[Validate('required|string')]
   public $descrizione; 
   #[Validate('required|string')]
   public $img;
   #[Validate('required|string')]
   public Article $article;

    public function mount()
    {
       
        $this->titolo = $this->article->titolo;
        $this->descrizione = $this->article->descrizione;
        $this->img = $this->article->img;
       
    }

   public function update()
   {
       $this->validate();

       $this->article->update([
           'titolo' => $this->titolo,
           'descrizione' => $this->descrizione,
           'img' =>$this->img
          
       ]);

       $url=Storage::url($this->img);
      

        
       return  view('pages.show', ['article'=>$this->article]);
    }

    public function render()
    {
       
        return view('livewire.edit');
    }
}
