<x-main>

    <form action="{{route('register')}}" method="POST">
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>


        <div class="mb-3">
          <label for="Name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="Name">
        </div>


        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
          </div>

        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Password Confirmation</label>
          <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
</x-main>