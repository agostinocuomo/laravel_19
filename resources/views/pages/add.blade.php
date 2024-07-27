
    <x-main>

        <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
           <div class="mb-3">
            @error('titolo')
                {{$message}}
            @enderror
              <label for="titolo" class="form-label">Title</label>
              <input type="text" name="titolo" class="form-control" id="titolo" aria-describedby="text">
            </div>

            <div class="mb-3">
              @error('descrizione')
              {{$message}}
          @enderror
              <label for="descrizione" class="form-label">Description</label>
              <input type="description" name="descrizione" class="form-control" id="description">
            </div>

            <div class="mb-3">
              @error('img')
              {{$message}}
          @enderror
                <label for="img" class="form-label">Immagine Copertina</label>
                <input type="file" name="img" class="form-control" id="img">
              </div>

              <div>

               @foreach($category as $categoria)
              <label > {{$categoria->category}}</label>
              <input type="checkbox" name="{{$categoria->category}}" >
              @endforeach
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          
    </x-main>

