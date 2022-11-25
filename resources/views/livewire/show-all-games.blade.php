<div>

<div class="container">
    <div >
<table  id="games"  style="width:100%">
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
                    
                 @foreach($records as $record)
                     <tr>
                         <td>{{ $record->title}}</td>
                         <td>{{ $record->category}}</td>
                         <td>{{ $record->url}}</td>
                         <td><img id="imggame" src='game_image/{{$record->image}}' style="width:80px;"/></td>
                         <td>{{ $record->description}}</td>
                         <td><button type="button" data-id='{{$record->id}}'  class='btn btn-primary update' ><i class='fa fa-refresh' aria-hidden='true'></i>update</button>
                <button type="button"  class='btn btn-danger delete'><i class='fa fa-trash' aria-hidden='true'></i>delete</button></td>
                     </tr>
                 @endforeach
            
                    </tbody>
</table>
</div>
</div>
</div>
