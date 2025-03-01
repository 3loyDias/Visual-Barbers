<section id="barbers" class="barbers">
    <div class="container">
        <h2>Nossos Barbeiros</h2>
        <div class="barbers-grid">
            <?php
            $barbers = [
                [
                    'name' => 'Andre',
                    'image' => 'fotos/t2.jpg',
                    'instagram' => '@andezinho.barber'
                ],
                [
                    'name' => 'Fabio',
                    'image' => 'fotos/t1.jpg',
                    'instagram' => '@fabio.barber'
                ],
                [
                    'name' => 'Gil',
                    'image' => 'fotos/t3.jpg',
                    'instagram' => '@gil.barber'
                ]
            ];

            foreach ($barbers as $barber): ?>
                <div class="barber-card">
                    <img src="<?php echo $barber['image']; ?>" alt="<?php echo $barber['name']; ?>">
                    <div class="barber-info">
                        <h3><?php echo $barber['name']; ?></h3>
                        <a href="https://instagram.com/<?php echo $barber['instagram']; ?>" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram"></i>
                            <?php echo $barber['instagram']; ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>