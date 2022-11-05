<x-app-layout>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/Jquery/jquery_css.css">
<link rel="stylesheet" href="{{ url('/') }}/Jquery/jquerycss.css">
    <link rel="stylesheet" href="{{url('/')}}/bootstrap/bootstrap5.css" >
<!-- Font Awesome CSS -->

<div class="container ">
  
    <div class="container" style="margin-left: 100px">
    <div class="container fluid card-content">
    <form method="post" id="addcat" action="{{route('category_store')}}">
        
@csrf

<input type="text" value="" id="cat" name="cat" required>
<button type="submit" class="btn btn-success" id="add" style="position:relative;">
<i class="fa fa-plus" >Add category</i>

              </button>&nbsp;&nbsp;&nbsp;&nbsp;<br></div></form>
       
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name of the category</th>
                <th>Option</th>
                
                
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr style="background-color:cyan;">
                <td>{{$data->category}}</td>
                <td><button class="btn btn-primary edit" data-route="{{route('category_fetch', $data->id)}}" data-id="{{$data->id}}">update</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('category_delete',$data->id)}}"><button type="button" class="btn btn-danger"><svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></button></a></td>
            </tr>
          @endforeach
        </tbody>
        
    </table>
    </div>
    
  
</div>
</div>
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modifie category name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="formup" method="post" action="{{route('category_update')}}" >
        @csrf
            
            <input type="hidden" name="id" id="id" value="">
            <input type="text" name="cat1" id="cat1" value="">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary cl" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="{{ url('/') }}/sweetalert/sweetalert.js"></script>
<script type="text/javascript" src="{{ url('/') }}/Jquery/ajax.js"></script>

<script type="text/javascript" src="{{ url('/') }}/Jquery/jquery_script.js"></script>
<script type="text/javascript" src="{{ url('/') }}/Jquery/jquery_Datatable.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

<script>
 $('.edit').on('click', function(){
    $('.modal').show();
    var id = $(this).data('id');
    $('#cat1').val('');
    $.ajax({
        url : $(this).data('route'), 
        type : 'GET',
        data:{
            id:id,
        },
        success: function(response){
            $('#id').val(response.id);
            $('#cat1').val(response.category);
                /*var tr_str = "<tr>" +
                    "<td align='center'>" + (i+1) + "</td>" +
                    "<td align='center'>" + username + "</td>" +
                    "<td align='center'>" + name + "</td>" +
                    "<td align='center'>" + email + "</td>" +
                    "</tr>";

                $("#userTable tbody").append(tr_str);*/
            
        }
    })

 });
 $('.cl').on('click', function(){
    $('.modal').hide();
 });
 $.ajaxSetup({
      headers: {
        'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

 $('.update').on('click', function(){
    var id = $('#id').val();
    var cat = $('#cat1').val();
    $.ajax({
        url : $('#formup').attr('action'),
        type : 'POST',
        data:{
            _token:'{{csrf_token()}}',
            id:id,
            cat:cat,
        },
        success: function(response){
            Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
            
        }
    })
 });
</script>

</x-app-layout>