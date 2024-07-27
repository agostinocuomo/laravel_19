
     

    <table class="table table-striped">
        <tr class="">
            <th>Id</th>
            <th>Titolo</th>
            <th>Recensione</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
      

        @foreach($article as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->titolo}}</td>
            <td>{{$article->descrizione}}</td>
       
        <td><a type="button" class="btn btn-success float-end" href="{{route('article', ['article'=>$article]) }}"> Show </a> </td>
        <td><a type="button" href="{{route('edit', ['article'=>$article])}}" class="btn btn-light float-end">Edit</a></td>
       <td><button type="button" class="btn btn-Danger float-end"  wire:click.prevent="destroy({{ $article }})" >Delete</button></td>
    </tr>
    @endforeach 
      </table>
    
