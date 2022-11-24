<x-app-layout>

  <link rel="stylesheet" href="{{ url('/') }}/Jquery/jquerycss.css">
  <link rel="stylesheet" href="{{ url('/') }}/bootstrap/bootstrap5.css">
  <link rel="stylesheet" href="{{ url('/') }}/bootstrap/fontawesome.css">

  <div class="container">



    


    <div>
      <table id="games" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Url</th>
            <th>Image(click for fullscreen)</th>
            <th>Description</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>

  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal  modal-fullscreen" id="game_modal" tabindex="-1" aria-labelledby="game_modal" aria-hidden="true">
    <div class="">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update game</h5>
          <button type="button" class="btn-close cl" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-header">Game</div>
            <form action="" method="post" enctype="multipart/form-data" id="game_form">
              @csrf
              <input type="hidden" id="hiddenid" name="hiddenid" value="">
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
                    <select class="form-control" id="category" name="category">

                      <option id="category1" value="" selected="true">
                        <div class="cat"></div>
                      </option>
                      @foreach ($cat as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->category }}</option>
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
                    <img class="rounded float-start gameimg" src="">
                  </div>
                </div>
                <button class="btn btn-success mt-3 " type="submit">update Game</button>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary cl" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
  </div>

  <script type="text/javascript" src="{{ url('/') }}/bootstrap/fontawesomejs.js"></script>
  <script type="text/javascript" src="{{ url('/') }}/bootstrap/bootstrap5.min.js"></script>
  <script src="{{ url('/') }}/sweetalert/sweetalert.js"></script>

  <script type="text/javascript" src="{{ url('/') }}/Jquery/ajax.js"></script>
  <script type="text/javascript" src="{{ url('/') }}/Jquery/jquery_script.js"></script>
  <script type="text/javascript" src="{{ url('/') }}/Jquery/jquery_Datatable.js"></script>

  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });


    $(document).ready(function() {

      $('#games').DataTable({
        "processing": true,
        "dataType": "json",
        "serverSide": true,
        "ajax": {
          "url": '{{ route('retrieve_games') }}',

          "type": "POST",
        },

        "columns": [{
            "data": "title"
          },
          {
            "data": "category"
          },
          {
            "data": "url"
          },
          {
            "data": "image"
          },
          {
            "data": "description"
          },
          {
            "data": "option"
          }
        ],
        "columnDefs": [{
          "targets": [0, 4],
          "orderable": false
        }],
        "order": [
          [1, "ASC"]
        ],

      });

      $(document).ready(function() {
        // $('#games').DataTable();


      });
    });
  </script>
  <script>
    $(document).ready(function() {

      Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'Games loaded successfully',
        showConfirmButton: false,
        timer: 1500
      })
      $(document).on("click", "#imggame", function() {
        this.requestFullscreen();

      });

    });



    $(document).on("click", ".update", function() {
      $("#game_modal").show();
      var id = $(this).attr("data-id");
      var route = "{{ url('/') }}/fetchgame/" + id;

      $.ajax({
        url: route,
        type: 'GET',
        data: {
          id: id,
        },
        success: function(data) {
          $("#hiddenid").val(data.id);
          $("#title").val(data.title);
          $("#description").val(data.description);
          $("#url").val(data.url);
          $("#category1").val(data.category_id);
          $("option[id='category1']").text(data.category);
          $(".gameimg").attr("src", "{{ url('/') }}/game_image/" + data.image);
        },
        error: function(error) {
          console.log(error);
        }

      });



    })
    $('.cl').on('click', function() {
      $('.modal').hide();
    });
  </script>
  <script>
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

      var url_route = "{{ route('game_update') }}";

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
            title: 'Game ' + data.title + ' updated successfully',
            showConfirmButton: false,
            timer: 1500
          })
        },
        error: function(data) {
          var errors = data.responseJSON;
          Swal.fire({
            position: 'top',
            icon: 'error',
            title: errors.message,
            showConfirmButton: false,
            timer: 8000
          })
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
