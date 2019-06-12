<?php

if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * SnelContact
 * Template for WPForms.
 */
class WPForms_Template_snelcontact extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'SnelContact';

		// Template slug
		$this->slug = 'snelcontact';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 5,
	'fields' => array (
		0 => array (
			'id' => '0',
			'type' => 'name',
			'label' => 'Name',
			'format' => 'simple',
			'required' => '1',
			'size' => 'small',
			'simple_placeholder' => 'Daniel Jeremy',
		),
		4 => array (
			'id' => '4',
			'type' => 'number',
			'label' => 'Telephone',
			'required' => '1',
			'size' => 'small',
			'placeholder' => '06123456789',
		),
	),
	'settings' => array (
		'form_title' => 'SnelContact',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'email' => '{admin_email}',
				'subject' => 'New Entry: Simple Contact Form',
				'sender_name' => 'The Ultimate Portrait',
				'sender_address' => '{admin_email}',
				'replyto' => '{field_id="1"}',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'type' => 'message',
				'message' => '<p>Thanks for contacting us! We will be in touch with you shortly.</p>',
				'message_scroll' => '1',
				'page' => '25',
			),
		),
	),
	'meta' => array (
		'template' => 'snelcontact',
	),
);
	}
}
new WPForms_Template_snelcontact;
endif;

 ?>
