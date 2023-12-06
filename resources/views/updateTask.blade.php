      @extends('navbarTemplate')
      @section('content')
      <form action="{{route('update_2',[ 'id' => $id ])}}" method="post">
      @csrf
          <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" id="title" >
              </div>
              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Description</label>
              <input type="text" name="description" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
      </form>
      @endsection