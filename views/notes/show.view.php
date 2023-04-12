<?php include(base_path('/views/partials/head.php'));  ?>
<?php include(base_path('/views/partials/nav.php'));  ?>
<?php include(base_path('/views/partials/banner.php'));?>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

                <li class="text-blue-500 hover:underline">
                    <?= htmlspecialchars($note['body']) ?>
                </li>

                <div class="mt-3 text-blue-500 hover:underline">
                    <a href="/notes">go back ...</a>
                </div>
              
                <form class="mt-5" method="POST">

                    <input type="hidden" name="id" value="<?=  $note['id']  ?>">

                    <button class="text-sm text-red-500">Delete</button>

                </form>

            </div>
        </main>


        <?php include(base_path('views/partials/footer.php')) ?> 