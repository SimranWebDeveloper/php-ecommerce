
<div class="d-flex justify-content-between border my-3">
    <div style="width:20rem;height:100%"><img src="img/<?php echo $kurs['resim'] ?>" class="card-img-top" alt="...">
    </div>
    <div class="p-3" style="width: 100%;">
        <h5 class="" >
            <a href="course-detail.php?id=<?php echo $kurs['id']; ?>">
                <?php echo $kurs['baslik']; ?>
            </a>

        </h5>
        <p class="card-text">
            <?php echo $kurs["aciklama"] ?>
        </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>