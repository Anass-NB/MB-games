<x-app-layout>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <div class="container  card-content "  >
    <h1 class="lead text-muted  display-3  my-2">Add New Game</h1>
    <div class="add-game">

      <div class="card">
        <div class="card-header">Game</div>
          <form action="{{ route("store_game") }}" method="POST">
            @csrf
            <div class="card-body bg">
              <div class="row g-3">
                <div class="col-3">
                  <label for="title" class="form-label">Game Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Game Title">
                </div>
                <div class="col-9">
                  <label for="description" class="form-label">Game description</label>
                  <input type="textarea" name="description" class="form-control" id="description"  aria-label="Game description" placeholder="Description">
                </div>
              </div>
              <div class="row g-3 my-3">
                <div class="col-3">
                  <label for="category" class="form-label">Game Category</label>
                  <input type="text" name="category" id="category" class="form-control"  placeholder="Category">
                </div>
                <div class="col-9">
                  <label for="url" class="form-label">Game Url</label>
                  <input type="text" name="url" id="url" class="form-control" placeholder="Url of Game">
                </div>
              </div>
              <div class="row g-3 ">
                <div class="col">
                  {{-- <input type="file" class="form-control" id="inputGroupFile02"> --}}
                </div>
              </div>
              <button class="btn btn-success mt-3">Add Game</button>
          </form>
        </div>
      </div>


      
    </div>



  </div>

</x-app-layout>
