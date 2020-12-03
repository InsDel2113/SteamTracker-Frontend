<?php
// template
 $this->layout('template', ['title' => 'View All Apps']);
 ?>
 <div class="card">
  <?php
  foreach ($appdata as $app) {
      //$json = json_decode($app['Value'], true);
      //$value = $app['Value'];
    //  echo $app["Name"];
    echo '<a href="ViewApp.php?appid='.$app['AppID'].'">';
    echo htmlspecialchars($app["Name"]);
    echo "<br>";
}
  ?>
</div>
