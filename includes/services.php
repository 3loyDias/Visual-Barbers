<section id="services" class="services">
    <div class="container">
        <h2>Nossos Serviços</h2>
        <div class="services-grid">
            <?php
            $services = [
                [
                    'name' => 'Corte Cabelo + Barba',
                    'price' => '€ 18',
                    'description' => 'Corte tradicional com acabamento perfeito',
                    'icon' => 'fa-scissors'
                ],
                [
                    'name' => 'Corte Cabelo',
                    'price' => '€ 15',
                    'description' => 'Modelagem e hidratação da barba',
                    'icon' => 'fa-razor'
                ],
                [
                    'name' => 'Corte Barba',
                    'price' => '€ 8',
                    'description' => 'Combo completo para seu visual',
                    'icon' => 'fa-spray-can'
                ]
            ];

            foreach ($services as $service): ?>
                <div class="service-card">
                    
                    <h3><?php echo $service['name']; ?></h3>
                    <p><?php echo $service['description']; ?></p>
                    <span class="price"><?php echo $service['price']; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>