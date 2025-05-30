<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kantah Banjar</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="{{asset('coming')}}/css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="{{asset('coming')}}/css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="{{asset('coming')}}/css/main.css?ver=1.2.0" rel="stylesheet">
  </head>
  <body id="top"><div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand">Kantah Banjar</h3>
          <nav class="nav nav-masthead">
            <a class="nav-link nav-social" href="https://www.facebook.com/atrbpnkab.banjar" target="_blank" title="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
            <a class="nav-link nav-social" target="_blank" href="https://www.youtube.com/channel/UCPoH_6QOy6mVbUALIq1sdfQ" title="Youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a>
            <a class="nav-link nav-social" href="https://instagram.com/kantahkabbanjar?igshid=YmMyMTA2M2Y=" target="_blank" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          </nav>
        </div>
      </div>      
      <div class="inner cover">
        <h1 class="cover-heading">Coming Soon</h1>
        <p class="lead cover-copy">Website Akan Segera Hadir.</p>
        {{-- <p class="lead"><button type="button" class="btn btn-lg btn-default btn-notify" data-toggle="modal" data-target="#subscribeModal">Notify Me</button></p> --}}
      </div>
      <div class="mastfoot">
        <div class="inner">
          <p>&copy; <a href="/">Kantah Banjar</a>.</p>
        </div>
      </div>
      <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="subscribeModalLabel">Get Notified on Launch:</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Enter you e-mail to get notified when we launch</label>
                  <input type="text" class="form-control" id="recipient-name" placeholder="your-name@example.com">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default">Subscribe</button>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
    <script src="{{asset('coming')}}/scripts/jquery.slim.min.js?ver=1.2.0"></script>
    <script src="{{asset('coming')}}/scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="{{asset('coming')}}/scripts/main.js?ver=1.2.0"></script>
  </body>
</html>