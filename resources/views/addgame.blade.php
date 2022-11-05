<x-app-layout>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <div class="container  card-content "  >
    <h1 class="lead text-muted  display-3  my-2">Add New Game</h1>
    <div class="add-game">

      <div class="card">
        <div class="card-header">Game</div>
          <form  action="{{ route("store_game") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="csrf" id="csrf" value="{{session('csrf_token')}}">
            <div class="card-body bg">
              <div class="row g-3">
                <div class="col-3">
                  <label for="title" class="form-label">Game Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Game Title" required>
                </div>
                <div class="col-9">
                  <label for="description" class="form-label">Game description</label>
                  <input type="textarea" name="description" class="form-control" id="description"  aria-label="Game description" placeholder="Description" required>
                </div>
              </div>
              <div class="row g-3 my-3">
                <div class="col-3">
                  <label for="category" class="form-label">Game Category</label>
                  <!--<input type="text" name="category" id="category" class="form-control"  placeholder="Category" required>-->
                  <select name="category" id="category" class="form-control" >
                    <option value="" selected></option>
                    @foreach($cat as $cat)
                    <option name="category" id="category"  value="{{$cat->id}}" >{{$cat->category}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-9">
                  <label for="url" class="form-label">Game Url</label>
                  <input type="text" name="url" id="url" class="form-control" placeholder="Url of Game" required>
                </div>
              </div>
              <div class="row g-3 ">
                <div class="col">
                  <input type="file" class="form-control" id="image" required>
                </div>
              </div>
              <button class="btn btn-success mt-3 addbutton">Add Game</button>
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
        'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  $(document).ready(function(){
    $('.addbutton').click(function(){
      var title = $('#title').val();
      var description = $('#description').val();
     
      var cat_id = $('#category').val();
      var url = $('#url').val();
      var image = $('#image').val();
      if(cat_id!="" && url!=""){
        $.ajax({
        url : "{{route('store_game')}}",
        type : 'POST',
        data:{
            _token:'{{csrf_token()}}',
            title : title,
            description : description,
            cat_id : cat_id,
            url : url,
            
        },
        success: function(data){
          Swal.fire({
  position: 'top',
  icon: 'success',
  title: 'Game added successfully',
  showConfirmButton: false,
  timer: 1500
})
        }
      })
      }
  });
      
    })
   

     
</script>
</x-app-layout>
