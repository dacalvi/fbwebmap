<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

  <meta charset="utf-8">
  <title>Banco Regional</title>
  <base href="<?=base_url();?>">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css" media="screen" />
  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
  <script src="assets/js/map.js"></script>
</head>

<?php foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
  <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>

<body>
  <?php $this->load->view('header'); ?>
  <div>
    <?php echo $output; ?>
  </div>
  <?php $this->load->view('footer'); ?>
</body>
</html>