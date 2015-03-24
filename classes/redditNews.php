<?php
function get_news() {
    $result = array(
        'calendar' => array(),
        'news'     => array()
    );

    //Fetch and decode JSON from reddit API
    $json = file_get_contents( "http://www.reddit.com/r/whclan/new.json?sort=new" );
    $data = json_decode ( $json );
    $posts = $data->{'data'}->{'children'};

    for($i = 0; $i < count($posts); $i++){
        $post = $posts[$i]->{'data'};
        if($post->{'link_flair_text'} == "news") {
            array_push($result['news'], $post);
        }
        else if($post->{'link_flair_text'} == "calender") {
            array_push($result['calendar'], $post);
        }
    }
    return $result;
}
?>
