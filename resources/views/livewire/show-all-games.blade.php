<div>
    @if($updateMode == true)
    <div class="container  card-content ">
   
    <div class="add-game">

      <div class="card">
        <div class="card-header">{{$title}}</div>
        <form  enctype="multipart/form-data" id="game_form" >
          @csrf

          <div class="card-body bg">
            <div class="row g-3">
              <div class="col-3">
                <label for="title" class="form-label">Game Title</label>
                <input type="text" wire:model="title" value="{{$title}}" name="title" class="form-control" id="title" placeholder="Game Title"
                  required>
              </div>
              <div class="col-9">
                <label for="description" class="form-label">Game description</label>
                <input type="textarea" name="description" class="form-control" id="description"
                  aria-label="Game description" wire:model="description" value="{{$description}}" placeholder="Description" required>
              </div>
            </div>
            <div class="row g-3 my-3">
              <div class="col-3">
                <label for="category" class="form-label">Game Category</label>
                <!--<input type="text" name="category" id="category" class="form-control"  placeholder="Category" required>-->
                <select name="category" id="category" wire:model="category_id" class="form-control">
                 
                  @if($cat)
                  @foreach ($cat as $cat)
                   @if($cat->id == $category_id)
                    <option name="category" id="category" value="{{ $cat->id }}" selected>{{ $cat->category }}</option>
                    @else
                    <option name="category" id="category" value="{{ $cat->id }}" >{{ $cat->category }}</option>
                    @endif
                  @endforeach
                  @endif
                </select>
              </div>
              <div class="col-9">
                <label for="url" class="form-label">Game Url</label>
                <input type="text" wire:model="url" value="{{$url}}" name="url" id="url" class="form-control" placeholder="Url of Game"
                  required>
              </div>
            </div>
            <div class="row g-3 ">
              <div class="col">
                <input type="file" wire:model="newimage" class="form-control" id="image" name="image">
                <img src="game_image/{{$image}}" style="width:70px;">
              </div>
            </div>
            <button class="btn btn-success mt-3 " wire:click.prevent="update">Update Game</button>
        </form>
      </div>
    </div>

  </div>

@endif

    {{-- The Master doesn't talk, he acts. --}}
    <div class="container">
        <div class="card">

        
    <table id="master" class="table table-striped"  >
        <thead>
            <th >title</th>
            
            <th>category</th>
            <th>url</th>
            <th>image</th>
            <th>option</th>
        </thead>
        <tbody>
            @if($records)
               @foreach($records as $record)
                  <tr>
                    <td>{{ $record->title }}</td>
                    
                    <td>{{ $record->category }}</td>
                    <td>{{ $record->url }}</td>
                    <td><img id="imggame" src="game_image/{{ $record->image}}" style="width:50px;"></td>
                    <td><button type="button" wire:click.prevent="edit({{$record->id}})" class="btn btn-outline-primary">Edit</button></td>
                 
                 </tr>
                 @endforeach
            @endif
        </tbody>
    </table>
    </div>
</div>
@if($update_success == true)
  <script>
     Swal.fire({
            position: 'top',
            icon: 'success',
            title: 'Game updated successfully',
            showConfirmButton: false,
            timer: 1500
          })
  </script>
@endif
</div>
