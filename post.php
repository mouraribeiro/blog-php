

<!-- Inclusão do cabeçalho -->
<?php
  include_once("templates/header.php");
  

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

      if($post['id'] == $postId) {
        $currentPost = $post;
      }

    }

  }

?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
   <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor velit aperiam nulla, blanditiis placeat exercitationem voluptates laudantium cupiditate. Molestiae vel sapiente saepe corrupti debitis aliquid quaerat fuga laborum dolore inventore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, ipsam! Eius odio hic pariatur sunt, quae nam, culpa voluptas provident quo non amet repudiandae assumenda iure minima deserunt deleniti obcaecati?
   Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor velit aperiam nulla, blanditiis placeat exercitationem voluptates laudantium cupiditate. Molestiae vel sapiente saepe corrupti debitis aliquid quaerat fuga laborum dolore inventore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, ipsam! Eius odio hic pariatur sunt, quae nam, culpa voluptas provident quo non amet repudiandae assumenda iure minima deserunt deleniti obcaecati?
   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquam, diam sit amet tincidunt consequat, quam nisl egestas mi, ut iaculis metus magna feugiat felis. Nullam sit amet lectus non justo tincidunt blandit vitae vitae erat. Phasellus pharetra justo sit amet felis tempus egestas. Nullam et sem neque. Curabitur nec elit risus. In posuere pulvinar tortor in hendrerit. Vestibulum ultrices sit amet velit quis imperdiet. Ut sodales dui in tincidunt ultrices. Curabitur at nibh turpis.

    Praesent diam nisl, sollicitudin eu luctus eget, consequat at risus. Sed scelerisque dolor vehicula blandit porta. Phasellus et metus eget eros imperdiet venenatis at laoreet sem. Pellentesque in convallis orci, id tincidunt eros. Nulla tortor nunc, dignissim et pellentesque id, pulvinar sit amet enim. Curabitur varius commodo pellentesque. Praesent finibus nibh libero, nec semper dolor ultricies nec.

    Nullam et aliquam metus. Nulla facilisis semper molestie. Morbi maximus, enim at cursus iaculis, justo felis blandit lacus, in blandit erat enim nec odio. Proin enim mauris, maximus sed justo non, malesuada iaculis urna. Duis congue pellentesque erat, eu dictum libero dictum a. Maecenas accumsan tincidunt venenatis. Nam elit magna, porttitor a orci a, vehicula hendrerit velit. Phasellus neque enim, vehicula non cursus vel, vehicula a arcu. Donec id nunc velit. Donec lobortis erat hendrerit, bibendum tortor ut, iaculis odio. Phasellus ultrices, dui ac cursus hendrerit, metus quam cursus neque, ut ornare massa magna non libero. Nulla laoreet nulla magna, et varius quam posuere sit amet. Sed facilisis odio ac tempus venenatis.
    </p>
    
  </div>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">   
        <?php foreach($currentPost['tags'] as $tag):?>
        <li><a href="#"><?= $tag ?></a></li>
         <?php endforeach; ?>
        </ul>
    <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
        <?php foreach($categories as $category):?>
        <li><a href="#"><?= $category ?></a></li>
         <?php endforeach; ?>
        </ul>
</main>

<!-- Inclusão do rodapé -->
<?php
  include_once("templates/footer.php");
?>
