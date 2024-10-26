<?php
add_filter('upload_mimes', 'add_svg_mime_types');
add_filter('wp_prepare_attachment_for_js', 'display_svg_in_media_library', 10, 3);
function display_svg_in_media_library($response, $attachment, $meta)
{
    if ($response['mime'] === 'image/svg+xml') {
        $response['sizes']['thumbnail'] = [
            'url' => $response['url'],
            'width' => $meta['width'],
            'height' => $meta['height']
        ];
    }
    return $response;
}
function add_svg_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
