<x-app-layout>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <div class="container p-3">
    <div class="row">
      <div class="col-4">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://s3.amazonaws.com/thumbnails.venngage.com/template/01df7dcb-6942-4db8-9fba-4fb9c58bb367.png" class="img-fluid rounded-start" alt="logo game" style="height: 100%">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">All Games</h5>
                <p class="lead text-success">{{ $number_of_games }} Game published</p>
                <p class="card-text"><small class="text-muted">Last Game inserted at ({{ $date_create_last_game->created_at }})</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://s3.amazonaws.com/thumbnails.venngage.com/template/01df7dcb-6942-4db8-9fba-4fb9c58bb367.png" class="img-fluid rounded-start" alt="logo game" style="height: 100%">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">All Games</h5>
                <p class="lead text-success">{{ $number_of_users }} Admins </p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://s3.amazonaws.com/thumbnails.venngage.com/template/01df7dcb-6942-4db8-9fba-4fb9c58bb367.png" class="img-fluid rounded-start" alt="logo game" style="height: 100%">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">All Games</h5>
                <p class="lead">13 Game published</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</x-app-layout>
