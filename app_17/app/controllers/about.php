<?php 

    $title = "My Blog::About";

    $post= '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi officiis possimus
    consectetur quas corrupti ea neque inventore iure, illum aliquid in labore doloribus
    aperiam quisquam nemo quis, placeat sunt? Temporibus unde id sapiente atque ratione
    dolorum iusto, officiis veritatis, excepturi distinctio aspernatur earum corporis
    repudiandae nobis deserunt ipsum alias? Fuga, reiciendis impedit. Asperiores ex repellat
    alias earum doloribus nisi, sequi ullam expedita est suscipit ab repellendus.</p>
<p>Omnis eveniet illo aspernatur ipsam culpa quaerat quibusdam assumenda temporibus libero
    excepturi sit vel, magnam a. Aliquam reprehenderit quasi cupiditate veritatis quae!
    Quaerat illum maiores nihil ut obcaecati libero voluptate nobis, doloribus similique
    sequi amet deserunt harum doloremque in id necessitatibus at quod rerum repudiandae!
    Obcaecati tempore quod placeat provident fuga magnam excepturi sapiente, fugiat ullam,
    in ipsam maxime veniam accusantium, voluptate voluptatum adipisci ut facilis!</p>
<p>Nobis blanditiis quibusdam molestiae nesciunt culpa assumenda, quos cum harum provident
    soluta unde mollitia consequatur sint quam! Voluptate expedita ipsam recusandae deleniti
    magni quibusdam numquam totam. At soluta ipsa recusandae voluptates asperiores id
    accusamus nisi est ab, dolorum molestiae quaerat. Ad modi, maiores omnis reprehenderit
    fugit iure quos odio eligendi velit enim vitae et laboriosam ullam quaerat illum
    inventore, sequi veniam beatae. Nisi cum nesciunt autem!</p>';
    $posts = [
        1 => [
            "title"=> "Title 1",
            "desc"=> "Some quick example text to build on the card title and make up
            the bulk of the card's content.",
             "slug"=>"title-1"
        ],
        2 => [
            "title"=> "Title 2",
            "desc"=> "Some quick example text to build on the card title and make up
            the bulk of the card's content.",
             "slug"=>"title-2"
        ],
        3 => [
            "title"=> "Title 3",
            "desc"=> "Some quick example text to build on the card title and make up
            the bulk of the card's content.",
             "slug"=>"title-3"
        ],
        4 => [
            "title"=> "Title 4",
            "desc"=> "Some quick example text to build on the card title and make up 
            the bulk of the card's content.Some quick text",
             "slug"=>"title-4"
        ],
        5 => [
            "title"=> "Title 5",
            "desc"=> "Some quick example text to build on the card title and make up
            the bulk of the card's content.",
             "slug"=>"title-5"
        ]
        ];
        $recent_posts = [
            1=> [
                'title' => 'An item',
                'slug' => lcfirst(str_replace(' ', '-', 'An item')),
            ],
            2=> [
                'title' => 'A second item',
                'slug' => lcfirst(str_replace(' ', '-', 'A second item')),
            ],
            3=> [
                'title' => 'A third item',
                'slug' => lcfirst(str_replace(' ', '-', 'A third item')),
            ],
            4=> [
                'title' => 'A fourth item',
                'slug' => lcfirst(str_replace(' ', '-', 'A fourth item')),
            ],
            5=> [
                'title' => 'And a fifth one',
                'slug' => lcfirst(str_replace(' ', '-', 'And a fifth one')),
            ]
        ];
        require VIWES . '/about.tpl.php';
    