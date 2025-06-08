<div class="container py-5">
    <!-- Hero Section -->
    <div class="text-center text-white rounded-4 p-5 mb-5" style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('https://images.unsplash.com/photo-1603570411386-7f25450f7ae7'); background-size: cover; background-position: center;">
        <h1 class="display-4 fw-bold">Welcome to the World of Esports Tournaments</h1>
        <p class="lead">Join, organize, and compete like a pro in the most thrilling gaming battles.</p>
    </div>

    <!-- Game Section -->
    <h2 id="popular-games" class="mb-4 text-center text-white">Popular Games</h2>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
        <?php foreach ($data['games'] as $game) : ?>
            <div class="col text-center">
                <a href="<?= BASEURL ?>/games/detail/<?= $game['slug']; ?>" class="text-decoration-none">
                    
                    <div class="card bg-dark text-white border-0 shadow-lg h-100 rounded-4" style="transition: transform 0.3s ease-in-out;">
                        <img src="<?= BASEURL; ?>/img/<?= $game['image_path']; ?>" class="game-logo p-3" alt="<?= $game['name']; ?>">
                        <div class="card-body">
                            <h6 class="card-title fw-semibold"><?= $game['name']; ?></h6>
                    </div>
                </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
