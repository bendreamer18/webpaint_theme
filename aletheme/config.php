<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function aletheme_get_options() {
	$comments_style = array(
		'wp'  => 'Alethemes Comments',
		'fb'  => 'Facebook Comments',
		'dq'  => 'DISQUS',
		'lf'  => 'Livefyre',
		'off' => 'Disable All Comments',
	);

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();
		
	$options[] = array("name" => "Theme",
						"type" => "heading");

    $options[] = array( "name" => "Site Logo",
                        "desc" => "Upload or put the site logo link (Max. Sizes: h:110px, w:35px)",
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Name of your company",
                        "desc" => "Type the name which is supposed to be under navigation.",
                        "id" => "ale_company-name",
                        "std" => "WebPaint",
                        "type" => "text");

    $options[] = array( "name" => "Who We Are text",
                        "desc" => "Short information about your company and purposes.",
                        "id" => "ale_we-want",
                        "std" => "digital & branding agency based in Jupiter and we would love to turn ideas into beautiful things.",
                        "type" => "text");


    $options[] = array( "name" => "Uplaod a favicon icon",
                        "desc" => "Upload or put the link of your favicon icon",
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");

	$options[] = array( "name" => "Comments Style",
						"desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
						"id" => "ale_comments_style",
						"std" => "wp",
						"type" => "select",
						"options" => $comments_style);

	$options[] = array( "name" => "AJAX Comments",
						"desc" => "Use AJAX on comments posting (works only with Alethemes Comments selected).",
						"id" => "ale_ajax_comments",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Social Sharing",
						"desc" => "Enable social sharing for posts.",
						"id" => "ale_social_sharing",
						"std" => "1",
						"type" => "checkbox");

    $options[] = array( "name" => "Copyrights",
                        "desc" => "Your copyright message.",
                        "id" => "ale_copyrights",
                        "std" => "",
                        "type" => "editor");

    $options[] = array( "name" => "Home Page Slider slug",
                        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
                        "id" => "ale_homeslugfull",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Blog Slider slug",
                        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
                        "id" => "ale_blogslugfull",
                        "std" => "",
                        "type" => "text");



    // $options[] = array( "name" => "Typography",
    //                     "type" => "heading");

    // $options[] = array( "name" => "Select the body Font from Google Library",
    //                     "desc" => "The default Font is - Lato",
    //                     "id" => "ale_lato_font",
    //                     "std" => "Lato",
    //                     "type" => "select",
    //                     "options" => $headerfont);



	$options[] = array( "name" => "Social",
						"type" => "heading");

      $options[] = array( "name" => "Footer Header",
                        "desc" => "Type the header of the Footer.",
                        "id" => "ale_footer_head",
                        "std" => "Get in Touch",
                        "type" => "text");

    $options[] = array( "name" => "Footer Text",
                        "desc" => "Type the text you want to see in the Footer.",
                        "id" => "ale_footer_text",
                        "std" => "Vestibulum id ligula porta felis euismod semper,malesuada euismod.",
                        "type" => "text");

    $options[] = array( "name" => "Address",
                        "desc" => "Insert the address of your company.",
                        "id" => "ale_your_address",
                        "std" => "Moonshine Street No: 14/05 Light City, Jupiter",
                        "type" => "text");

    $options[] = array( "name" => "Phone Number",
                        "desc" => "Insert your Phone Number.",
                        "id" => "ale_phone_num",
                        "std" => "0247 541 65 87",
                        "type" => "text");


    $options[] = array( "name" => "RSS",
                        "desc" => "Your RSS URL.",
                        "id" => "ale_rss",
                        "std" => "",
                        "type" => "text");


    $options[] = array( "name" => "Facebook",
                        "desc" => "Your facebook profile URL.",
                        "id" => "ale_fb",
                        "std" => "",
                        "type" => "text");


    $options[] = array( "name" => "Twitter",
                        "desc" => "Your twitter profile URL.",
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");


    $options[] = array( "name" => "Pink",
                        "desc" => "Your Pink profile URL.",
                        "id" => "ale_pink",
                        "std" => "",
                        "type" => "text");


    $options[] = array( "name" => "Pinterest",
                        "desc" => "Your pinteres profile URL.",
                        "id" => "ale_pint",
                        "std" => "",
                        "type" => "text");


    // $options[] = array( "name" => "Google+",
    //                     "desc" => "Your google+ profile URL.",
    //                     "id" => "ale_gog",
    //                     "std" => "",
    //                     "type" => "text");


    // $options[] = array( "name" => "Flickr",
    //                     "desc" => "Your flickr profile URL.",
    //                     "id" => "ale_flickr",
    //                     "std" => "",
    //                     "type" => "text");


    // $options[] = array( "name" => "Linkedin",
    //                     "desc" => "Your linked profile URL.",
    //                     "id" => "ale_linked",
    //                     "std" => "",
    //                     "type" => "text");


    // $options[] = array( "name" => "Instagram",
    //                     "desc" => "Your instagram profile URL.",
    //                     "id" => "ale_insta",
    //                     "std" => "",
    //                     "type" => "text");


    $options[] = array( "name" => "Show RSS",
                        "desc" => "Check if you want to show the RSS icon on your site",
                        "id" => "ale_rssicon",
                        "std" => "1",
                        "type" => "checkbox");

	
	$options[] = array( "name" => "Facebook Application ID",
						"desc" => "If you have Application ID you can connect the blog to your Facebook Profile and monitor statistics there.",
						"id" => "ale_fb_id",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Enable Open Graph",
						"desc" => "The <a href=\"http://www.ogp.me/\">Open Graph</a> protocol enables any web page to become a rich object in a social graph.",
						"id" => "ale_og_enabled",
						"std" => "",
						"type" => "checkbox");



    $options[] = array( "name" => "Icons",
                        "type" => "heading");

    $options[] = array( "name" => "#1 Icon Header",
                        "desc" => "Type the header of the first icon",
                        "id" => "ale_icon_header_1",
                        "std" => "Consectetur",
                        "type" => "text");


    $options[] = array( "name" => "#2 Icon Header",
                        "desc" => "Type the header of the second icon",
                        "id" => "ale_icon_header_2",
                        "std" => "Tristiquet",
                        "type" => "text");


    $options[] = array( "name" => "#3 Icon Header",
                        "desc" => "Type the header of the third icon",
                        "id" => "ale_icon_header_3",
                        "std" => "Fermentum",
                        "type" => "text");


    $options[] = array( "name" => "#4 Icon Header",
                        "desc" => "Type the header of the fourth icon",
                        "id" => "ale_icon_header_4",
                        "std" => "Elit Ultricies",
                        "type" => "text");


    $options[] = array( "name" => "#1 Icon Description",
                        "desc" => "Type the Description of the first icon",
                        "id" => "ale_icon_desc_1",
                        "std" => "Vestibulum id ligula porta euismod semper. Aenean lacinia bibendum nulla sed consectetur dui. ",
                        "type" => "text");


    $options[] = array( "name" => "#2 Icon Description",
                        "desc" => "Type the Description of the second icon",
                        "id" => "ale_icon_desc_2",
                        "std" => "Fusce dapibus, cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo risus. ",
                        "type" => "text");


    $options[] = array( "name" => "#3 Icon Description",
                        "desc" => "Type the Description of the third icon",
                        "id" => "ale_icon_desc_3",
                        "std" => "Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum sagittis lacus mollis.",
                        "type" => "text");


    $options[] = array( "name" => "#4 Icon Description",
                        "desc" => "Type the Description of the fourth icon",
                        "id" => "ale_icon_desc_4",
                        "std" => "Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet.",
                        "type" => "text");



    $options[] = array( "name" => "Gallery",
                        "type" => "heading");

    $options[] = array( "name" => "Featured Works Text",
                        "desc" => "Type the text of Featured Works",
                        "id" => "ale_feat_text",
                        "std" => "Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. ",
                        "type" => "text");


    $options[] = array( "name" => "Image #1",
                        "desc" => "",
                        "id" => "ale_pic1",
                        "std" => "http://webpaint/wp-content/uploads/2016/06/1.jpg",
                        "type" => "upload");

    $options[] = array( "name" => "Image #2",
                        "desc" => "Upload or put the link of the image you want to see in the gallery",
                        "id" => "ale_pic2",
                        "std" => "http://webpaint/wp-content/uploads/2016/06/2.jpg",
                        "type" => "upload");

    $options[] = array( "name" => "Image #3",
                        "desc" => "Upload or put the link of the image you want to see in the gallery",
                        "id" => "ale_pic3",
                        "std" => "http://webpaint/wp-content/uploads/2016/06/3.jpg",
                        "type" => "upload");

    $options[] = array( "name" => "Image #4",
                        "desc" => "Upload or put the link of the image you want to see in the gallery",
                        "id" => "ale_pic4",
                        "std" => "http://webpaint/wp-content/uploads/2016/06/4.jpg",
                        "type" => "upload");

    $options[] = array( "name" => "Image #5",
                        "desc" => "Upload or put the link of the image you want to see in the gallery",
                        "id" => "ale_pic5",
                        "std" => "http://webpaint/wp-content/uploads/2016/06/5.jpg",
                        "type" => "upload");

    $options[] = array( "name" => "Image #6",
                        "desc" => "Upload or put the link of the image you want to see in the gallery",
                        "id" => "ale_pic6",
                        "std" => "http://webpaint/wp-content/uploads/2016/06/6.jpg",
                        "type" => "upload");

    $options[] = array( "name" => "Image #7",
                        "desc" => "Upload or put the link of the image you want to see in the gallery",
                        "id" => "ale_pic7",
                        "std" => "http://webpaint/wp-content/uploads/2016/06/7.jpg",
                        "type" => "upload");

    $options[] = array( "name" => "Image #8",
                        "desc" => "Upload or put the link of the image you want to see in the gallery",
                        "id" => "ale_pic8",
                        "std" => "http://webpaint/wp-content/uploads/2016/06/8.jpg",
                        "type" => "upload");

    $options[] = array( "name" => "Image #9",
                        "desc" => "Upload or put the link of the image you want to see in the gallery",
                        "id" => "ale_pic9",
                        "std" => "http://webpaint/wp-content/uploads/2016/06/9.jpg",
                        "type" => "upload");

    $options[] = array( "name" => "Image #10",
                        "desc" => "Upload or put the link of the image you want to see in the gallery",
                        "id" => "ale_pic10",
                        "std" => "http://webpaint/wp-content/uploads/2016/06/10.jpg",
                        "type" => "upload");

    $options[] = array( "name" => "Image #11",
                        "desc" => "Upload or put the link of the image you want to see in the gallery",
                        "id" => "ale_pic11",
                        "std" => "http://webpaint/wp-content/uploads/2016/06/11.jpg",
                        "type" => "upload");

    $options[] = array( "name" => "Image #12",
                        "desc" => "Upload or put the link of the image you want to see in the gallery",
                        "id" => "ale_pic12",
                        "std" => "http://webpaint/wp-content/uploads/2016/06/12.jpg",
                        "type" => "upload");


	
	$options[] = array( "name" => "Advanced Settings",
						"type" => "heading");

	
	$options[] = array( "name" => "Google Analytics",
						"desc" => "Please insert your Google Analytics code here. Example: <strong>UA-22231623-1</strong>",
						"id" => "ale_ga",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Footer Code",
						"desc" => "If you have anything else to add in the footer - please add it here.",
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => "Custom CSS Styles",
                        "desc" => "You can add here your styles. ex. .boxclass { padding:10px; }",
                        "id" => "ale_customcsscode",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Footer menu title",
                        "desc" => "Insert the footer menu title",
                        "id" => "ale_footermenutitle",
                        "std" => "Select a category",
                        "type" => "text");
	
	return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#ale_commentongallery').click(function() {
        jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
        jQuery('#section-ale_gallerycomments_style').show();
    }
});
</script>

<?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";


    $meta_boxes[] = array(
        'id'         => 'contact_page_metabox',
        'title'      => 'Contact Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First Description',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'descr1',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Second Description',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'descr2',
                'type' => 'textarea',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'press_page_metabox',
        'title'      => 'Press Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-press.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Press title #1',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit1',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #1',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb1',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #1',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage1',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #1',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo1',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #2',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit2',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #2',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb2',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #2',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage2',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #2',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo2',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #3',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit3',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #3',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb3',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #3',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage3',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #3',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo3',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #4',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit4',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #4',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb4',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #4',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage4',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #4',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo4',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #5',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit5',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #5',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb5',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #5',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage5',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #5',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo5',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #6',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit6',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #6',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb6',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #6',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage6',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #6',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo6',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #7',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit7',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #7',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb7',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #7',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage7',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #7',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo7',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #8',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit8',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #8',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb8',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #8',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage8',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #8',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo8',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #9',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit9',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #9',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb9',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #9',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage9',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #9',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo9',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #10',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit10',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #10',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb10',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #10',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage10',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #10',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo10',
                'type' => 'text',
            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'aboutslider_page_metabox',
        'title'      => 'About Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb3',
                'type'    => 'text',
            ),
            array(
                'name' => 'fourth member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc1',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'Second member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc2',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'Third member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc3',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'Fourth member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc4',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'First member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava1',
                'type'    => 'file',
            ),
            array(
                'name' => 'Second member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava2',
                'type'    => 'file',
            ),
            array(
                'name' => 'Third member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava3',
                'type'    => 'file',
            ),
            array(
                'name' => 'Fourth member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava4',
                'type'    => 'file',
            ),
        )
    );

	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function aletheme_get_images_sizes() {
	return array(

        'gallery' => array(
            array(
                'name'      => 'gallery-thumba',
                'width'     => 430,
                'height'    => 267,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-mini',
                'width'     => 100,
                'height'    => 67,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-big',
                'width'     => 680,
                'height'    => 9999,
                'crop'      => false,
            ),
        ),
        'post' => array(
            array(
                'name'      => 'post-thumba',
                'width'     => 475,
                'height'    => 295,
                'crop'      => true,
            ),
        ),

    );
}

/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function aletheme_get_post_types() {
	return array(
        'gallery' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Gallery',
            'multiple' => 'Galleries',
            'columns'    => array(
                'first_image',
            )
        ),
    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function aletheme_get_taxonomies() {
	return array(

        'gallery-category'    => array(
            'for'        => array('gallery'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Gallery Category',
            'multiple'    => 'Gallery Categories',
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function aletheme_get_post_formats() {
	return array();
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function aletheme_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function aletheme_get_post_types_with_gallery() {
	return array('gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
	return array();
}