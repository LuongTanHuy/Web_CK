<!--Phụ kiện nên có-->
<div class="descrip" style="background-color: #fff;">
    <div class="access-needbuy">
        <br><br><br>
        <div class="an-title">
            <strong class="sg-access">
                <center>Phụ kiện nên có cho iPhone</center>
            </strong>
        </div>
        <div class="popular_song">
            <div class="btn_s">
                <button style="margin-left: 10px;" class="lr"><i class="bi bi-arrow-left-short"
                        id="pop_song_left"></i></button>
                <button style="margin-right: 25px;" class="lr"> <i class="bi bi-arrow-right-short"
                        id="pop_song_right"></i></button>
            </div>
            <div class="pop_song">
                <?php foreach($accessory as $item) : ?>
                <li class="songItem">
                    <div class="img_play">
                        <img src="<?php echo $item['thumbnail'];?>" alt="">
                    </div>
                    <h4><?php echo $item['title'];?><br>
                        <div class="subtitle">
                            <h5><?php echo number_format($item['price'], 0, ',', '.') . ' vnđ';?></h5>
                        </div>
                    </h4>
                </li>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/phukien.js"></script>