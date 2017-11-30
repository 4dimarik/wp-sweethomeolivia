<div class="container">
<!--    <div class="row my-3">
        <div class="col-12 col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Bh1k2jqAymc" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="embed-responsive embed-responsive-16by9 mt-2 mt-md-0">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/b1LlwS5Z3eA" allowfullscreen></iframe>
            </div>
        </div>
    </div>-->


    <div class="row"><div class="col-md-12">
<?
function photos_getInfo($api_key, $photo_id){
    $params = array(
        'api_key'    => $api_key,
        'method'    => 'flickr.photos.getInfo',
        'format'    => 'json',
        'nojsoncallback' => '1',
        'photo_id'    => $photo_id
    );
    $encoded_params = array();
    foreach ($params as $k => $v) {
        $encoded_params[] = urlencode($k).'='.urlencode($v);
    }
    $url = "https://api.flickr.com/services/rest/?".implode('&', $encoded_params);

    $rsp = file_get_contents($url);

    $data = json_decode($rsp, true);

    if ($data['stat'] == 'ok') {
        return $data;
    } else {
        return "Call failed!";
    }
}
function get_contents($api_key, $method, $extras, $photoset_id)
{
#
# build the API URL to call
#

$params = array(
    'api_key'    => $api_key,
    'method'    => $method,
    'extras' => $extras,
    'format'    => 'json',
    'nojsoncallback' => '1',
    'photoset_id'    => $photoset_id

);
// php_serial
    $encoded_params = array();

    foreach ($params as $k => $v) {
        $encoded_params[] = urlencode($k).'='.urlencode($v);
    }


#
# call the API and decode the response
#

    $url = "https://api.flickr.com/services/rest/?".implode('&', $encoded_params);

    $rsp = file_get_contents($url);

    $data = json_decode($rsp, true);

    if ($data['stat'] == 'ok') {
        echo "<div id='mdb-lightbox-ui'></div><div class='mdb-lightbox' id='flickr_gallery'>";
        foreach ($data['photoset']['photo'] as $key => $value) {
            //$photoinfo=photos_getInfo('80e9aef34672c78c976ac272232ac828', $value["id"]);
            //'.$photoinfo["photo"]["description"]["_content"].'
            echo '<figure class="view col-12 col-md-3">
                <a href="'.$value["url_o"].'" data-size="'.$value["width_o"].'x'.$value["height_o"].'">
                    <img src="'.$value["url_o"].'" class="img-fluid z-depth-1" alt="Кофейня | Завтраки | Десерты | Сергиев Посад">
                </a>
                <div class="mask d-flex align-items-end flex-column waves-effect waves-light">
                    <p class="mt-2 mr-3 grey-text">@'.$value["title"].'</p>
                </div>
                </figure>';
        }
        echo '</div>';
    } else {
        echo "";
    }
}

get_contents('80e9aef34672c78c976ac272232ac828', 'flickr.photosets.getPhotos', 'url_o, url_z, url_q', '72157688980593451');
?>
</div></div></div>