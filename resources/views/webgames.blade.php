<x-app-layout>
<link rel="stylesheet" href="{{ url('/') }}/Jquery/jquery_css.css">
<link rel="stylesheet" href="{{ url('/') }}/Jquery/jquerycss.css">
    <link rel="stylesheet" href="{{url('/')}}/bootstrap/bootstrap5.css" >


    <div class="content pb-3" style="margin-left:40px;">
            <div class="container-fluid">
                <div class="card p-2 mb-0">
                    <div class="row">
                        @foreach ($allgames  as $game)
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header text-center">Game {{ $game->title }}</div>
                                    <div class="card-body text-center">
                                        <h3 class="lead"> Description : {{ $game->description }}</h3>
                                        <img src="" alt="game image">   
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn btn-primary">Play</a>
                                        <a href="{{ route("edit_game") }}" class="btn btn-success">Edit</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    
                </div>
            </div>
        </div>











<script src="{{ url('/') }}/sweetalert/sweetalert.js"></script>
<script type="text/javascript" src="{{ url('/') }}/Jquery/ajax.js"></script>

<script type="text/javascript" src="{{ url('/') }}/Jquery/jquery_script.js"></script>
<script type="text/javascript" src="{{ url('/') }}/Jquery/jquery_Datatable.js"></script>
<script type="text/javascript">
    $.ajax({
            url : '{{route('retrieve_games')}}',
            type : 'GET',
            success : function(response){
                alert(response);
            }
        })
    var table = $('#games').DataTable({
       
    });
</script>
</x-app-layout>