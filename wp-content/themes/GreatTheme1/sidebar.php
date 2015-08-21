<div id="nav" style="margin-left: -136px;margin-bottom: -116px;">
<h1><a href="<?php echo get_option('home');?><?php bloginfo('name'); ?>"></a></h1>
<ul id="pages" style="list-style: none;line-height: 36px;">
<li><a href="<?php echo get_option('home');?>">Home</a></li>
<?php wp_list_pages('title_li='); ?>
</ul>
<!-- <h2>Categories</h2>
<ul id="categories">
	<?php wp_list_categories('show_count=0&title_li&hide_empty=0&exclude=1'); ?>
</ul>-->
</div>