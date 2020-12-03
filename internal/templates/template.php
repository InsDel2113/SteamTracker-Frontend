<!doctype html>
<html lang="en">
<head>
    <title><?=$this->e($title)?></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="<?=$this->e($title)?>">
    <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
<body data-set-preferred-mode-onload="true">
<center>
  <div class="page-wrapper with-sidebar with-custom-webkit-scrollbars with-custom-css-scrollbars">
    <div class="sidebar">
      <div class="sidebar-menu">
        <a href="#" class="sidebar-brand">
          SteamTracker
        </a>
        <div class="sidebar-content">
          <input type="text" class="form-control" placeholder="Search">
          <div class="mt-10 font-size-12">
          </div>
        </div>
        <h5 class="sidebar-title">Tracking</h5>
        <div class="sidebar-divider"></div>
        <a href="ViewAllApps.php" class="sidebar-link">App list</a>
        <a href="#" class="sidebar-link">Sub list</a>
        <a href="#" class="sidebar-link">Changelists</a>
        <h5 class="sidebar-title">Account</h5>
        <div class="sidebar-divider"></div>
        <a href="#" class="sidebar-link">Home</a>
        <a href="#" class="sidebar-link">Account</a>
        <hr>
                <button class="btn btn-primary" type="button" onclick="toggleDark()">Theme switch</button>
      </div>
    </div>
    <div class="content-wrapper">
      <main>
      <?=$this->section('content')?>
      </main>
    </div>
  </div>
</body>
<script type="text/javascript">
  function toggleDark() {
    halfmoon.toggleDarkMode();
  }
</script>
</html>
