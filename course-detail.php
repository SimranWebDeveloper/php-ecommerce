
    <!-- require axtarilani soursda tapa bilmese sehive islemesin -->
     <!-- require_once bir defe sehiveye daxil et -->
     <!-- includa axtarilani soursda tapa bilmese bir xeta vermez -->

     <?php require_once('config.php')?>
    <!-- <?php include('partials/_db.php')?>  -->
    <?php include('partials/_header.php')?>
    <?php include('partials/_navbar.php')?>
    <?php include('partials/_footer.php')?>

    <?php 
        if(!isset($_GET["id"])){
            header("Location: index.php");
        }
        $id=$_GET["id"];
       
 
        $result_kategoriler=mysqli_query($baglanti,"SELECT * From kategoriler");
        $kategoriler=mysqli_fetch_all($result_kategoriler,MYSQLI_ASSOC);

        $result_kurs=mysqli_query($baglanti,"SELECT * from kurslar WHERE id=".$id);
        $kurs=mysqli_fetch_assoc($result_kurs);

        mysqli_close($baglanti);

    ?>


    <div class="container my-3">
        <div class="row">
            <!-- left side -->
            <div class="col-4">
                <?php include('partials/_kategoriler.php')?>
            </div>
            <!-- right side -->
            <div class="col-8">
               

                        <?php include('partials/_course.php')?>



                
            </div>
        </div>
    </div>


