<x-app-layout>
<link rel="stylesheet" href="{{ url('/') }}/Jquery/jquery_css.css">
<link rel="stylesheet" href="{{ url('/') }}/Jquery/jquerycss.css">
    <link rel="stylesheet" href="{{url('/')}}/bootstrap/bootstrap5.css" >


   


<div class="container">
    <div >
<table  id="games" class="cell-border compact stripe">
<thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Url</th>
                            <th>Image(click for fullscreen)</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
</table>
</div>
</div>






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
                    { "data": "description"}
                ],
                "columnDefs": [ {
                    "targets": [0,4],
                    "orderable": false
                } ],
                "order": [[ 1, "ASC"]],

            });
 
        $(document).ready(function() {
            $('#games').DataTable();
            
          
        } );
    });
  
   
    
    
</script>
<script>
    
          $(document).ready(function(){

            Swal.fire({
  position: 'top',
  icon: 'success',
  title: 'Games loaded successfully',
  showConfirmButton: false,
  timer: 1500
})
                 $( document ).on( "click","#imggame", function() {
            this.requestFullscreen();
  //$( ".result" ).load( "ajax/test.html" );
});
            })
</script>
</x-app-layout>