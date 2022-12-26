<x-app-layout>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <div class="container p-3">

    <div class="row">

      <div class="col-4">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="https://s3.amazonaws.com/thumbnails.venngage.com/template/01df7dcb-6942-4db8-9fba-4fb9c58bb367.png"
                class="img-fluid rounded-start" alt="logo game" style="height: 100%">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">All Games : </h5>
                <p class="lead text-success"> {{ $number_of_games }} Game published</p>
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
              <img
                src="https://s3.amazonaws.com/thumbnails.venngage.com/template/01df7dcb-6942-4db8-9fba-4fb9c58bb367.png"
                class="img-fluid rounded-start" alt="logo game" style="height: 100%">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Last game created at </h5>
                <p class="lead text-success"> {{ $date_create_last_game->created_at }} </p>
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
              <img
                src="https://s3.amazonaws.com/thumbnails.venngage.com/template/01df7dcb-6942-4db8-9fba-4fb9c58bb367.png"
                class="img-fluid rounded-start" alt="logo game" style="height: 100%">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">All Categories</h5>
                <p class="lead text-success">{{ $number_of_categories }} Categories</p>
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
              <img
                src="https://s3.amazonaws.com/thumbnails.venngage.com/template/01df7dcb-6942-4db8-9fba-4fb9c58bb367.png"
                class="img-fluid rounded-start" alt="logo game" style="height: 100%">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Admin Actuel</h5>
                <p class="lead text-danger">{{ auth()->user()->name }}</p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            All Notifications
            @if ( Auth()->user()->unreadNotifications->count() >0)
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              {{ Auth()->user()->unreadNotifications->count() }}
              <span class="visually-hidden">unread messages</span>
            </span>
            <a href="{{ route("readnotif") }}" class="btn btn-dark btn-sm">Mark all as Read</a>
            @endif
            
          </div>
          <div style=" height:320px; overflow:auto;">
            <div class="list-group">

              @foreach (Auth()->user()->unreadNotifications as $notification)
                <a href="{{ route("game_page_notif",$notification->data['game_id']) }}" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $notification->data['user'] }} add game {{ $notification->data['gametitle'] }}
                    </h5>
                    <small class="text-muted"></small>
                  </div>
                  <p class="mb-1">Some placeholder content in a paragraph.</p>
                  <small class="text-muted">{{ $notification->created_at }}</small>
                </a>
              @endforeach

            </div>

          </div>
        </div>
      </div>
    </div>

  </div>

</x-app-layout>
