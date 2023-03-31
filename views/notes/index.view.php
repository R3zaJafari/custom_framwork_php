<?php include(base_path('/views/partials/head.php'));  ?>
<?php include(base_path('/views/partials/nav.php'));  ?>
<?php include(base_path('/views/partials/banner.php'));?>


        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                
                <ul>
                    <?php foreach ($notes as $note)  : ?>               
                        <li>
                            <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                            <?= htmlspecialchars($note['user_id'] .' '. $note['body']) ?>
                            </a>
                        </li>
                    <?php endforeach;  ?>
                </ul>

                <p class="mt-5">
                    <a href="/notes/creat" class="text-blue-500 hover:underline">
                        Creat Note
                    </a>
                </p>

            </div>
        </main>


<?php include(base_path('views/partials/footer.php')) ?> 