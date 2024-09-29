<?php require_once('config.php')?>



<!-- <?php include('partials/_db.php')?> -->
<?php include('partials/_header.php')?>
<?php include('partials/_navbar.php')?>
<?php include('partials/_footer.php')?>

<?php 
 
 $result_kategoriler=mysqli_query($baglanti,"SELECT * From kategoriler");
 $kategoriler=mysqli_fetch_all($result_kategoriler,MYSQLI_ASSOC);

 $result_kurslar=mysqli_query($baglanti,"SELECT * from kurslar");
 $kurslar=mysqli_fetch_all($result_kurslar,MYSQLI_ASSOC);

 mysqli_close($baglanti);
?>


    <div class="container my-3">
        <div class="row">
            <div class="col-4">
                <?php include('partials/_kategoriler.php')?>
            </div>
            <div class="col-8">
                <?php foreach ($kurslar as $kurs):  ?>
                    
                        
                        <?php include('partials/_course.php')?>

                    

                <?php endforeach; ?>

                
            </div>
        </div>
    </div>


