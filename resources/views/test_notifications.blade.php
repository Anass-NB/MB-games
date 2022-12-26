<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <style>
    body {
      margin-top: 50px;
      background-color: #f1f1f1;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      background-color: #17A2B8;
    }

    .dropdown-menu {
      top: 60px;
      right: 0px;
      left: unset;
      width: 460px;
      box-shadow: 0px 5px 7px -1px #c1c1c1;
      padding-bottom: 0px;
      padding: 0px;
    }

    .dropdown-menu:before {
      content: "";
      position: absolute;
      top: -20px;
      right: 12px;
      border: 10px solid #343A40;
      border-color: transparent transparent #343A40 transparent;
    }

    .head {
      padding: 5px 15px;
      border-radius: 3px 3px 0px 0px;
    }

    .footer {
      padding: 5px 15px;
      border-radius: 0px 0px 3px 3px;
    }

    .notification-box {
      padding: 10px 0px;
    }

    .bg-gray {
      background-color: #eee;
    }

    @media (max-width: 640px) {
      .dropdown-menu {
        top: 50px;
        left: -16px;
        width: 290px;
      }

      .nav {
        display: block;
      }

      .nav .nav-item,
      .nav .nav-item a {
        padding-left: 0px;
      }

      .message {
        font-size: 13px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-sm-10 col-12 offset-lg-1 offset-sm-1">
        <nav class="navbar navbar-expand-lg bg-info rounded">
          <a class="navbar-brand text-light" href="#">{{ Auth()->user()->name }}</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: unset !important;">
            <ul class="nav nav-pills mr-auto justify-content-end">
              <li class="nav-item active">
                <a class="nav-link text-light" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Project</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-bell"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="head text-light bg-dark">
                    <div class="row">
                      <div class="col-lg-12 col-sm-12 col-12">
                        <span>Notifications ({{ Auth()->user()->unreadNotifications->count() }})</span>
                        <a href="" class="float-right text-light">Mark all as read</a>
                      </div>
                  </li>
                  @foreach (Auth()->user()->unreadNotifications as $notification)
                    <li class="notification-box">
                      <div class="row">
                        <div class="col-lg-3 col-sm-3 col-3 text-center">
                          <img src="data:image/png;base64,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" class="w-50 rounded-circle">
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8">
                          <strong class="text-info">Adding game</strong>
                          <div>
                            {{ $notification->data["user"] }} add game {{ $notification->data["gametitle"] }}
                          </div>
                          <small class="text-warning">{{ $notification->created_at }}</small>
                        </div>
                      </div>
                    </li>
                  @endforeach
                  <li class="footer bg-dark text-center">
                    <a href="" class="text-light">View All</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</body>

</html>
