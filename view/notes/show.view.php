

<?php require ("view/partials/head.php")?> 
<?php require ("view/partials/nav.php")?> 
<?php require ("view/partials/banner.php")?> 

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    
    <p><a href="/Section-1-PHP/webpage/notes" class="text-blue-500 hover:underline">GO Back..</a></p>
    <p><?= htmlspecialchars($note['body'])  ;?></p>

    <form class="mt-6" method="POST">
      <input type="text" name="id" value="<?= $note['id'];?>">
      <button type="submit" class="text-sm text-red-500">Delete</button>
    </form>

    </div>
  </main>
  <?php require ("view/partials/footer.php")?>