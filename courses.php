<?php require_once('config.php')?>



<?php include('partials/_db.php')?>


    <?php include('partials/_header.php')?>

    <?php include('partials/_navbar.php')?>

    <?php include('partials/_footer.php')?>


    <div class="container my-3">
        <div class="row">
            <div class="col-4">
                <?php include('partials/_men.php')?>
            </div>
            <div class="col-8">
                <?php foreach ($kurslar as $kurs):  ?>
                    
                        
                        <?php include('partials/_course.php')?>

                    

                <?php endforeach; ?>

                
            </div>
        </div>
    </div>


