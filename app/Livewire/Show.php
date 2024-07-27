<?php

namespace App\Livewire;
use App\Models\Article;
use Livewire\Component;

class Show extends Component
{
    public function destroy(Article $article)
    {
        $article->delete();
        session()->flash('success', 'Prodotto cancellato con successo');
    }

    public function render()
    {
       
        $article= Article::all();
        return view('livewire.show', ['article'=>$article]);
    }
}

