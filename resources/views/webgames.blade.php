<x-app-layout>

<link rel="stylesheet" href="{{ url('/') }}/Jquery/jquerycss.css">
    <link rel="stylesheet" href="{{url('/')}}/bootstrap/bootstrap5.css" >
<link rel="stylesheet" href="{{url('/')}}/bootstrap/fontawesome.css">
<link rel="stylesheet" type="text/css" href="{{url('/')}}/DataTables/datatables.min.css"/>

@livewireStyles



<div class="container" >
<livewire:show-all-games /> 
</div>


    

 @livewireScripts


  <script type="text/javascript" src="{{ url('/') }}/bootstrap/fontawesomejs.js"></script>
  <script type="text/javascript" src="{{ url('/') }}/bootstrap/bootstrap5.min.js"></script>
  <script src="{{ url('/') }}/sweetalert/sweetalert.js"></script>




<script type="text/javascript" src="{{ url('/') }}/bootstrap/fontawesomejs.js"></script>
<script type="text/javascript" src="{{ url('/') }}/bootstrap/bootstrap5.min.js"></script>
<script src="{{ url('/') }}/sweetalert/sweetalert.js"></script>
<script type="text/javascript" src="{{ url('/') }}/Jquery/jquery.js"></script>
<script type="text/javascript" src="{{url('/')}}/DataTables/datatables.min.js"></script>

<script type="text/javascript">

 
/*
     $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
      
           
   $(document).ready(function(){
    
            $('#games').DataTable({
                "processing": true,
                "dataType" : "json",
                "serverSide": true,
                "ajax":{
                    "url": '{{route('retrieve_games')}}',
                    
                    "type": "POST",
                    },
                   
                "columns": [
                    { "data": "title"},
                    { "data": "category"},
                    { "data": "url"},
                    { "data": "image"},
                    { "data": "description"},
                    { "data": "option"}
                ],
                "columnDefs": [ {
                    "targets": [0,4],
                    "orderable": false
                } ],
                "order": [[ 1, "ASC"]],

            });
 
        $(document).ready(function() {
           // $('#games').DataTable();
            
          
        } );
    });
  
   
    
    */
   
</script>
<script>
    
          $(document).ready(function(){

            $('#master').DataTable();
                 $( document ).on( "click","#imggame", function() {
            this.requestFullscreen();
  
});})

   
     
  </script>
  <script>
   /* $(document).ready(function() {

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
*/


    $(document).on("click", ".update", function() {
     // $("#game_modal").show();
     /* var id = $(this).attr("data-id");
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
*/


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
