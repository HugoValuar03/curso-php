<?php
    include_once("templates/header.php");

    $currentPost = null; // Inicializa com null

    if (isset($_GET['id'])) {
        $postId = $_GET['id'];

        foreach ($posts as $post) {
            if ($post['id'] == $postId) { // comparação não estrita (==)
                $currentPost = $post;
                break; // já encontrou, pode sair do loop
            }
        }
    }

    if ($currentPost): // Verifica se encontrou o post
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis incidunt voluptate vitae quaerat quos a repellendus harum neque nisi enim at omnis eaque saepe aliquam maiores, ut est blanditiis tenetur!
                Vel dolores facere ex obcaecati, cumque amet laudantium cum doloremque libero quasi numquam at voluptatum fuga pariatur ipsam ducimus hic? Molestias ad quia quae nulla. Dolorum dolore accusamus quia provident!
                Id, vel saepe. Dolor ad officiis corporis numquam qui ea distinctio cumque magni ipsum architecto ipsam voluptates quaerat accusantium labore, repellendus magnam mollitia doloremque a accusamus, itaque aliquam adipisci. Consectetur!
                Facere harum tempore quis temporibus voluptate amet veritatis quasi et rerum eveniet est ratione dolores fugit quisquam accusantium ut, a consequuntur illo beatae sapiente incidunt quae. Harum fugiat molestiae sequi!
                Ratione nam quo nesciunt ullam dignissimos, sequi reprehenderit cum esse earum eius exercitationem! Veritatis sed magni facilis! Hic earum fugit soluta, incidunt nulla laudantium beatae. Vel earum debitis quae facere.
            </p>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis incidunt voluptate vitae quaerat quos a repellendus harum neque nisi enim at omnis eaque saepe aliquam maiores, ut est blanditiis tenetur!
                Vel dolores facere ex obcaecati, cumque amet laudantium cum doloremque libero quasi numquam at voluptatum fuga pariatur ipsam ducimus hic? Molestias ad quia quae nulla. Dolorum dolore accusamus quia provident!
                Id, vel saepe. Dolor ad officiis corporis numquam qui ea distinctio cumque magni ipsum architecto ipsam voluptates quaerat accusantium labore, repellendus magnam mollitia doloremque a accusamus, itaque aliquam adipisci. Consectetur!
                Facere harum tempore quis temporibus voluptate amet veritatis quasi et rerum eveniet est ratione dolores fugit quisquam accusantium ut, a consequuntur illo beatae sapiente incidunt quae. Harum fugiat molestiae sequi!
                Ratione nam quo nesciunt ullam dignissimos, sequi reprehenderit cum esse earum eius exercitationem! Veritatis sed magni facilis! Hic earum fugit soluta, incidunt nulla laudantium beatae. Vel earum debitis quae facere.
            </p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categoria</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    else:
?>
    <h1>Post não encontrado.</h1>
<?php
    endif;

    include_once("templates/footer.php");
?>
