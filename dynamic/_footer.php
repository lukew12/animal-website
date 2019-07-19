<footer>
      <div class="links">
        <h4 class="links-title">LINKS</h4>
        <ul class="links-context">
          <?php 
            include('_animal_links.php');
            function filter($key) {
              global $animal;
              return $key !== $animal;
            }
            $filtered_links = array_filter($animal_links, 'filter', ARRAY_FILTER_USE_KEY);
            foreach($filtered_links as $key => $link) {
              echo '<li><a href="'.$link.'">'.$key.'</a></li>';
            }
          ?>
        </ul>
      </div>
   </footer> 
  </body>
</html>