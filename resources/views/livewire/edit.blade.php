
<div>
<h2>Title:{{$article->title}}</h2>
<h2>Description:{{$article->description}}</h2>
{{-- <img src="{{$url}}"> --}}


</div>

<form  wire:submit="update">
    @csrf
    <div class="mb-3">
      <label for="titolo"  class="form-label"> Titolo</label>
      <input type="text" class="form-control" id="titolo" wire:model.blur='titolo' aria-describedby="emailHelp">

      @error('name')
          {{$message}}
      @enderror                      
      
    </div>
    <div class="mb-3">
      <label for="descrizione" class="form-label">Gender</label>
      <input type="text" class="form-control" wire:model.blur='descrizione'  id="descrizione">

      @error('gender')
      {{$message}}
  @enderror
    </div>

    <div class="mb-3">
        <label for="img" class="form-label">Img</label>
        <input type="text" class="form-control" wire:model.blur='img'  id="img">
  
        @error('gender')
        {{$message}}
    @enderror
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



