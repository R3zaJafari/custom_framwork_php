
<?php include(__DIR__ .'/../partials/head.php');  ?>
<?php include(__DIR__ .'/../partials/nav.php');   ?>
<?php include(__DIR__ .'/../partials/banner.php');?>


        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <h1>Creat a note</h1>
            </div>
            <div class="ml-4">
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<form  method="POST">
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
        

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">


        <div class="col-span-full">
          <label for="body" class="block text-sm font-medium leading-6 text-gray-900">About</label>
          <div class="mt-2">
            <textarea
            id="body" 
            require
            name="body" 
            rows="3" 
            class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"
            >

            <?= $_POST['body'] ??  ""?>

          </textarea>
          <?php if(isset($errors['body'])) : ?>
            <p class="text-red-500"><?= $errors['body'] ?></p>
          </div>
          <?php endif ?>
        </div>
      </div>

    </div>



  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>

            </div>
        </main>


<?php include('views/partials/footer.php') ?> 