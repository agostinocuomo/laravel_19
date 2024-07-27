<x-main>
    <a class="btn btn-primary float-end m-5"  href='{{route('paginaup')}}' type="button" >Add New Article</a>
   @livewire('show',['article'=>$article])
        
    
    </x-main>