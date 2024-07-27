<x-main>
   <div class="card" style="width: 18rem;">
      <img src="{{$url}}" class="card-img-top" alt="img-cover">
      <div class="card-body">
        <h5 class="card-title">{{$article->titolo}}</h5>
        <p class="card-text">{{$article->descrizione}}</p>
        <a href="{{route('show')}}" class="btn btn-primary">Go Back</a>
      </div>
    </div>
</x-main>