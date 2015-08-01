<?php
/* joints Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_biography',
		'title' => 'Biography',
		'fields' => array (
			array (
				'key' => 'field_5555cb13b949c',
				'label' => 'Name',
				'name' => 'name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5555cb78b949e',
				'label' => 'Profile Picture',
				'name' => 'profile_picture',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5555cb3bb949d',
				'label' => 'Email',
				'name' => 'email',
				'type' => 'email',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5555cb90b949f',
				'label' => 'Phone Number',
				'name' => 'phone_number',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5555cba6b94a0',
				'label' => 'CV',
				'name' => 'cv',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-about.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_sub-heading',
		'title' => 'Sub Heading',
		'fields' => array (
			array (
				'key' => 'field_55698788eb3d4',
				'label' => 'Text',
				'name' => 'sub_headline',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Enter any sub-headline here',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
    register_field_group(array (
		'id' => 'acf_adding-pdfs',
		'title' => 'Adding PDFs',
		'fields' => array (
			array (
				'key' => 'field_55bcb69b02b5f',
				'label' => 'Help',
				'name' => '',
				'type' => 'message',
				'message' => '
	<ol>
	<li>Click on the \'Add Media\' button below, then click the \'Upload Files\' tab to give you the option to upload a new file from your computer</li>
	<li>Click \'Select Files\' and navigate to the file you wish to upload</li>
	<li>Once uploaded, the new file will be selected and an \'Attachment Details\' panel will be shown on the left-hand side of the screen. In this panel you can change the text that will link to the file by updating the \'Title\' field</li>
	<li>Finally, click on \'Insert into post\' to add the file as a link in your content</li>
	<li>To remove the file from the content, highlight the file link and hit \'Backspace\' or \'Delete\'</li>
	<li>To change the text linking to the file, highlight the file link and click on the \'Insert/Edit Link\' icon, then change the \'Link Text\' in the diaglog box that appears and click the \'Update\' button</li>
	</ol>',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
}


if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_add-attachment',
		'title' => 'Upload your publication here to make it available for download',
		'fields' => array (
			array (
				'key' => 'field_555bb05fc5b3b',
				'label' => 'Document',
				'name' => 'document',
				'type' => 'file',
                'instructions' => '',
				'save_format' => 'url',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'author',
				7 => 'format',
				8 => 'send-trackbacks',
                9 => 'featured_image',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_publication-details',
		'title' => 'Publication Details',
		'fields' => array (
            array (
				'key' => 'field_555ce4c215b96',
				'label' => 'Publication',
				'name' => 'publication',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'rows' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '5',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_photos',
		'title' => 'Photos',
		'fields' => array (
            array (
				'key' => 'field_55716a00e15e8',
				'label' => 'Images',
				'name' => '',
				'type' => 'message',
				'message' => 'The images that you add below will be shown as a slider (<strong>to the right of the main text on individual article pages OR as the main sliding image on the home page</strong>). <br>
	If you are posting an article, the first image will also show on the main news/research/workshop pages along with the article headline and some introductory text',
			),
			array (
				'key' => 'field_557159b37a18c',
				'label' => 'First Image',
				'name' => 'first_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_55715a087a190',
				'label' => 'Second Image',
				'name' => 'second_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_55715a157a191',
				'label' => 'Third Image',
				'name' => 'third_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-home.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '1',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '3',
					'order_no' => 0,
					'group_no' => 2,
				),
			),
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '4',
					'order_no' => 0,
					'group_no' => 3,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'revisions',
				4 => 'author',
				5 => 'format',
				6 => 'featured_image',
				7 => 'tags',
				8 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}



?>
