<x-main>
    <form action="{{route('')}}" method="post">

        @csrf

        <div class="mb-3">
          <label for="Message" class="form-label">Message</label>
          <input type="text" class="form-control" style="width: 400px; height: 200px" name="message" id="Message">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
    </x-main>