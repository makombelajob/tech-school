<?php if (isset($_SESSION['errors'])) : ?>
    <?php foreach ($_SESSION['errors'] as $error) : ?>
        <div class="text-center fs-2 alert alert-info rounded-3 my-1">
            <ul class="list-unstyled">
                <li class="text-black"><?= $error; ?></li>
            </ul>
        </div>
    <?php endforeach; ?>
<?php endif; ?>