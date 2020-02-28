<?php include("includes/header.php");
if(isset($_GET['id'])){
    $albumId = $_GET['id'];
}else{
    // header関数自体は、HTTPヘッダを送信する、という機能header関数では、
    // Locationと書いてから、飛び先のURLを書きます。
    header("Location: index.php");
}

$album = new Album($con, $albumId);

$artist = $album->getArtist();
?>

<div class="entityInfo">
  <div class="leftSection">
      <img src="<?php echo $album->getArtworkPath(); ?>" >
  </div>

  <div class="rightSection">
   <h2><?php echo $album->getTitle();?></h2>
   <span>By <?php echo $artist->getName(); ?></span>
  </div>

</div>


<?php include("includes/footer.php");?>