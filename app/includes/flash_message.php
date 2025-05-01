<?php if(isset($_SESSION['message'])) : ;?>
    <div class="text-center fs-2 bg-warning rounded-3">
        <?= $_SESSION['message'];?>
    </div>
<?php endif;?>