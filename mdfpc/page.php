<? get_header();?>
<h1 class="section-heading mt-3"><? wp_title("",true);?></h1>

<?
$id=get_the_ID();
$file = get_post_meta($id, 'file', true );
require_once($file);
get_footer(); ?>