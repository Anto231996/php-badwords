<?php
    $word = $_GET['word'];
    var_dump($_GET['word']);
    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem alias aliquam velit adipisci qui accusantium quod, sit deleniti perferendis itaque nemo ducimus sequi, natus unde temporibus ratione nostrum aspernatur dolor.';
    echo $paragraph;
    var_dump(strlen($paragraph));
    var_dump(str_replace($word, '***', $paragraph));
?>