<x-app-layout>




  <!-- CSS only -->
  <link href="{{ url('/') }}/bootstrap/bootstrap5.css" rel="stylesheet">

  <div class="container  card-content ">
    <h1 class="lead text-muted  display-3  my-2">Add New Game</h1>
    <div class="add-game">

      <div class="card">
        <div class="card-header">Game</div>
        <form action="" method="post" enctype="multipart/form-data" id="game_form">
          @csrf

          <div class="card-body bg">
            <div class="row g-3">
              <div class="col-3">
                <label for="title" class="form-label">Game Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Game Title"
                  required>
              </div>
              <div class="col-9">
                <label for="description" class="form-label">Game description</label>
                <input type="textarea" name="description" class="form-control" id="description"
                  aria-label="Game description" placeholder="Description" required>
              </div>
            </div>
            <div class="row g-3 my-3">
              <div class="col-3">
                <label for="category" class="form-label">Game Category</label>
                <!--<input type="text" name="category" id="category" class="form-control"  placeholder="Category" required>-->
                <select name="category" id="category" class="form-control">
                  <option value="" selected></option>
                  @foreach ($cat as $cat)
                    <option name="category" id="category" value="{{ $cat->id }}">{{ $cat->category }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-9">
                <label for="url" class="form-label">Game Url</label>
                <input type="text" name="url" id="url" class="form-control" placeholder="Url of Game"
                  required>
              </div>
            </div>
            <div class="row g-3 ">
              <div class="col">
                <input type="file" class="form-control" id="image" name="image" required>
              </div>
            </div>
            <button class="btn btn-success mt-3 " type="submit">Add Game</button>
        </form>
      </div>
    </div>

  </div>

  </div>
  <script src="{{ url('/') }}/sweetalert/sweetalert.js"></script>
  <script type="text/javascript" src="{{ url('/') }}/Jquery/ajax.js"></script>

  <script type="text/javascript" src="{{ url('/') }}/Jquery/jquery_script.js"></script>
  <script type="text/javascript" src="{{ url('/') }}/Jquery/jquery_Datatable.js"></script>
  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        // 'Content-Type': 'application/json'
      }

    });

    $('#game_form').submit(function(e) {
      e.preventDefault();


      var thisBtn = $(this);
      var thisForm = thisBtn.closest("form");
      var formData = new FormData(thisForm[0]);
      /*var title = $('#title').val();
        var description = $('#description').val();
       // var image= $('input[name="image"]')[0].files; 
       
        var cat_id = $('#category').val();
        var url = $('#url').val();*/

      var url_route = "{{ route('store_game') }}";

      $.ajax({
        url: url_route,
        type: 'POST',
        processData: false,
        contentType: false,
        data: formData,
        /* data:{
             _token:'{{ csrf_token() }}',
             title : title,
             description : description,
             cat_id : cat_id,
             url : url,
             image : image,
            
             
         },*/



        success: function(data) {
          console.log(data.title);
          Swal.fire({
            position: 'top',
            icon: 'success',
            title: 'Game ' + data.title + ' added successfully',
            showConfirmButton: false,
            timer: 1500
          })
        },
        error: function(data) {
          var errors = data.responseJSON;
          console.log(errors);
        }
      })
      /*else{
          Swal.fire({
    position: 'top',
    icon: 'error',
    title: 'give all data',
    showConfirmButton: false,
    timer: 1500
  })
        }*/
    });
  </script>
</x-app-layout>
