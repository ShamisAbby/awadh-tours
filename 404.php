<?php
require_once("./php/header.php")
?>
<main id="content" class="site-main">
   <div class="no-content-section 404-page" style="background-image: url(assets/images/404-img.jpg);">
      <div class="container">
         <div class="no-content-wrap">
            <span>404</span>
            <h1>Oops! That page can't be found</h1>
            <h4>It appears that you lack the necessary authentication to access this page. You may want to explore the links below or conduct a search instead.</h4>
            <div class="search-form-wrap">
               <form class="search-form">
                  <input type="text" name="search" placeholder="Search...">
                  <button class="search-btn"><i class="fas fa-search"></i></button>
               </form>
            </div>
         </div>
      </div>
      <div class="overlay"></div>
   </div>
</main>

<?php
require_once("./php/footer.php")
?>