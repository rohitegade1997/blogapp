<?php
$this->load->view("common/head.php"); ?>

<body>
  <div class="wrapper">
    <div id="content">
      <?php
      $this->load->view('common/header.php', $categories);
      ?>
      <br /><br />
      <?php
      if ($posts !== null) {
        $this->load->view($url, $posts);
      } else {
        if ($post) {
          $this->load->view($url, $post);
        } else {
          $this->load->view($url);
        }
      }
      ?>
      <br /><br />
      <?php
      $this->load->view('common/footer.php');
      ?>
    </div>
  </div>
</body>

</html>