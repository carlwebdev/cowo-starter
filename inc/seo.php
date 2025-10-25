<?php
function eimoe_seo() {
global $page, $paged, $post;
$default_keywords = '';
$output = '';

// description
$seo_desc = get_post_meta($post->ID, 'beskrivelse', true);
$description = get_bloginfo('description', 'display');
$pagedata = get_page($post->ID);
if (is_singular()) {
if (!empty($seo_desc)) {
$content = $seo_desc;
} else if (!empty($pagedata)) {
$content = apply_filters('the_excerpt_rss', $pagedata->post_content);
$content = substr(trim(strip_tags($content)), 0, 155);
$content = preg_replace('#\n#', ' ', $content);
$content = preg_replace('#\s{2,}#', ' ', $content);
$content = trim($content);
} 
} else {
$content = $description;	
}
$output .= '<meta name="description" content="' . esc_attr($content) . '">' . "\n";

// keywords
$keys = get_post_meta($post->ID, 'nokkelord', true);
$cats = get_the_category();
$tags = get_the_tags();
if (empty($keys)) {
if (!empty($cats)) foreach($cats as $cat) $keys .= $cat->name . ', ';
if (!empty($tags)) foreach($tags as $tag) $keys .= $tag->name . ', ';
$keys .= $default_keywords;
}
$output .= '<meta name="keywords" content="' . esc_attr($keys) . '">' . "\n";

// robots
if (is_category() || is_tag()) {
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
if ($paged > 1) {
$output .= '<meta name="robots" content="noindex,follow">' . "\n";
} else {
$output .= '<meta name="robots" content="index,follow">' . "\n";
}
} else if (is_home() || is_singular()) {
$output .= '<meta name="robots" content="index,follow">' . "\n";
} else {
$output .= '<meta name="robots" content="noindex,follow">' . "\n";
}

return $output;
}
?>