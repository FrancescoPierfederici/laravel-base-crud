

@if(count($comics) == 0)
  <h3>Il database è vuoto.</h3>
@else

  <br>
  <table>
      <thead>
        <tr>
          <th>title</th>
          <th>description</th>
        </tr>
      </thead>
    
      <tbody>
      @foreach($comics as $comic )
        <tr>
          <td>{{$comic->title}}</td>
          <td>{{$comic->description}}<td>
            
          <td>
            <a href="{{ route('comics.show', $comic->id) }}">More</a>
            <td> 
          <td><a href="{{ route('comics.edit', $comic->id) }}">Edit</a><td> 
        
          <td>

            <form action="{{ route('comics.destroy', $comic->id) }}" method="post" class="deleteForm">
              @csrf
            
              @method('DELETE')
            
              <input type="submit" value="Delete"> 
            </form>
          <td>
        </tr>

      @endforeach
      </tbody>
    
    </table>
    <br>

@endif
