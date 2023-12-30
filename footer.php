<?php
/*
      /* Start the Loop
      while ( have_posts() ) :
        the_post();

      endwhile; // End of the loop.
  */
?>

<div class=" container mx-auto md:flex justify-between text-green-100 items-center p-4 ">
  <div class="font-bold mb-10"><a href="/">COTTAGE RETREAT</a></div>

  <!-- Navigation Links -->
  <nav class="hidden md:block">
    <?php if (has_nav_menu('header-menu')): ?>
      <?php wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'container' => 'ul',
        'menu_class' => 'flex font-light text-green-100 gap-6'
      )); ?>
    <?php else: ?>
      <ul class="flex font-light text-green-100 gap-6">
        <li><a href="#">Nav button 01</a></li>
        <li><a href="#">Nav button 02</a></li>
        <li><a href="#">Nav button 03</a></li>
      </ul>
    <?php endif; ?>
  </nav>
</div>

<!--Footer container-->
<footer class="">
  <div class="container mx-auto p-4 flex justify-between items-center flex-wrap text-green-100">



    <div class="text-sm">
      <p>Company Name &copy; 2023. All Rights Reserved.</p>
      <p>Design by <span class="font-bold">Framework</span>.</p>
    </div>

    <div class="text-sm text-right hidden md:block">
      <p><a href="#privacy">Privacy</a></p>
      <p><a href="#terms">Terms & Conditions</a></p>
    </div>
  </div>

</footer>




<?php wp_footer(); ?>
</body>

</html>