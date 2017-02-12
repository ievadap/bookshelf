<?php
include 'header.php';

$result = getBookById($_GET["id"]);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
} else {
  header('Location:/nfq');
}
?>

  <header class="container-fluid">
    <h1 class="text-center"><?php echo $row["title"]; ?></h1>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3>Author - <?php echo $row["author"]; ?></h3>
        <h3>First published <?php echo $row["published"]; ?></h3>
        <h3>Genre - <?php echo $row["genre"]; ?></h3>
        <a class="btn btn-default back-btn" href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Back to the list</a>
      </div>
    </div>
  </div>

<?php include 'footer.php'; ?>