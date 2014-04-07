<?php
/**
 * Font Awesome
 *
 * @package Menu_Icons
 * @version 0.1.0
 * @author Dzikri Aziz <kvcrvt@gmail.com>
 */


require_once dirname( __FILE__ ) . '/type-fonts.php';

/**
 * Icon type: Genericons
 *
 * @since 0.1.0
 */
class Menu_Icons_Type_Fontawesome extends Menu_Icons_Type_Fonts {

	/**
	 * Holds icon type
	 *
	 * @since  0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $type = 'fa';

	/**
	 * Holds icon label
	 *
	 * @since  0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $label = 'Font Awesome';

	/**
	 * Holds icon version
	 *
	 * @since  0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $version = '4.0';


	/**
	 * Class constructor
	 *
	 * We need to override the parent's to set our stylesheet URL
	 *
	 * @since 0.1.0
	 * @param array $types Icon Types
	 * @return array
	 */
	public function __construct() {
		$this->stylesheet = sprintf(
			'%scss/font-awesome%s.css',
			Menu_Icons::get( 'url' ),
			Menu_Icons::get_script_suffix()
		);

		parent::__construct();
	}


	/**
	 * Genericons's icons names
	 *
	 * @since 0.1.0
	 * @return array
	 */
	public function get_names() {
		return array(
			array(
				'key'   => 'web-application',
				'label' => __( 'Web Application', 'menu-icons' ),
				'items' => array(
					'fa-adjust'               => __( 'Adjust', 'menu-icons' ),
					'fa-anchor'               => __( 'Anchor', 'menu-icons' ),
					'fa-archive'              => __( 'Archive', 'menu-icons' ),
					'fa-arrows'               => __( 'Arrows', 'menu-icons' ),
					'fa-arrows-h'             => __( 'Arrows (h)', 'menu-icons' ),
					'fa-arrows-v'             => __( 'Arrows (v)', 'menu-icons' ),
					'fa-asterisk'             => __( 'Asterisk', 'menu-icons' ),
					'fa-ban'                  => __( 'Ban', 'menu-icons' ),
					'fa-bar-chart-o'          => __( 'Bar Chart (o)', 'menu-icons' ),
					'fa-barcode'              => __( 'Barcode', 'menu-icons' ),
					'fa-bars'                 => __( 'Bars', 'menu-icons' ),
					'fa-beer'                 => __( 'Beer', 'menu-icons' ),
					'fa-bell'                 => __( 'Bell', 'menu-icons' ),
					'fa-bell-o'               => __( 'Bell (o)', 'menu-icons' ),
					'fa-bolt'                 => __( 'Bolt', 'menu-icons' ),
					'fa-book'                 => __( 'Book', 'menu-icons' ),
					'fa-bookmark'             => __( 'Bookmark', 'menu-icons' ),
					'fa-bookmark-o'           => __( 'Bookmark (o)', 'menu-icons' ),
					'fa-briefcase'            => __( 'Briefcase', 'menu-icons' ),
					'fa-bug'                  => __( 'Bug', 'menu-icons' ),
					'fa-building-o'           => __( 'Building (o)', 'menu-icons' ),
					'fa-bullhorn'             => __( 'Bullhorn', 'menu-icons' ),
					'fa-bullseye'             => __( 'Bullseye', 'menu-icons' ),
					'fa-calendar'             => __( 'Calendar', 'menu-icons' ),
					'fa-calendar-o'           => __( 'Calendar (o)', 'menu-icons' ),
					'fa-camera'               => __( 'Camera', 'menu-icons' ),
					'fa-camera-retro'         => __( 'Camera Retro', 'menu-icons' ),
					'fa-caret-square-o-down'  => __( 'Caret Square Down (o)', 'menu-icons' ),
					'fa-caret-square-o-left'  => __( 'Caret Square Left (o)', 'menu-icons' ),
					'fa-caret-square-o-right' => __( 'Caret Square Right (o)', 'menu-icons' ),
					'fa-caret-square-o-up'    => __( 'Caret Square Up (o)', 'menu-icons' ),
					'fa-certificate'          => __( 'Certificate', 'menu-icons' ),
					'fa-check'                => __( 'Check', 'menu-icons' ),
					'fa-check-circle'         => __( 'Check Circle', 'menu-icons' ),
					'fa-check-circle-o'       => __( 'Check Circle (o)', 'menu-icons' ),
					'fa-check-square'         => __( 'Check Square', 'menu-icons' ),
					'fa-check-square-o'       => __( 'Check Square (o)', 'menu-icons' ),
					'fa-circle'               => __( 'Circle', 'menu-icons' ),
					'fa-circle-o'             => __( 'Circle (o)', 'menu-icons' ),
					'fa-clock-o'              => __( 'Clock (o)', 'menu-icons' ),
					'fa-cloud'                => __( 'Cloud', 'menu-icons' ),
					'fa-cloud-download'       => __( 'Cloud Download', 'menu-icons' ),
					'fa-cloud-upload'         => __( 'Cloud Upload', 'menu-icons' ),
					'fa-code'                 => __( 'Code', 'menu-icons' ),
					'fa-code-fork'            => __( 'Code Fork', 'menu-icons' ),
					'fa-coffee'               => __( 'Coffee', 'menu-icons' ),
					'fa-cog'                  => __( 'Cog', 'menu-icons' ),
					'fa-cogs'                 => __( 'Cogs', 'menu-icons' ),
					'fa-comment'              => __( 'Comment', 'menu-icons' ),
					'fa-comment-o'            => __( 'Comment (o)', 'menu-icons' ),
					'fa-comments'             => __( 'Comments', 'menu-icons' ),
					'fa-comments-o'           => __( 'Comments (o)', 'menu-icons' ),
					'fa-compass'              => __( 'Compass', 'menu-icons' ),
					'fa-credit-card'          => __( 'Credit Card', 'menu-icons' ),
					'fa-crop'                 => __( 'Crop', 'menu-icons' ),
					'fa-crosshairs'           => __( 'Crosshairs', 'menu-icons' ),
					'fa-cutlery'              => __( 'Cutlery', 'menu-icons' ),
					'fa-dashboard'            => __( 'Dashboard', 'menu-icons' ),
					'fa-desktop'              => __( 'Desktop', 'menu-icons' ),
					'fa-dot-circle-o'         => __( 'Dot Circle (o)', 'menu-icons' ),
					'fa-download'             => __( 'Download', 'menu-icons' ),
					'fa-edit'                 => __( 'Edit', 'menu-icons' ),
					'fa-ellipsis-h'           => __( 'Ellipsis (h)', 'menu-icons' ),
					'fa-ellipsis-v'           => __( 'Ellipsis (v)', 'menu-icons' ),
					'fa-envelope'             => __( 'Envelope', 'menu-icons' ),
					'fa-envelope-o'           => __( 'Envelope (o)', 'menu-icons' ),
					'fa-eraser'               => __( 'Eraser', 'menu-icons' ),
					'fa-exchange'             => __( 'Exchange', 'menu-icons' ),
					'fa-exclamation'          => __( 'Exclamation', 'menu-icons' ),
					'fa-exclamation-circle'   => __( 'Exclamation Circle', 'menu-icons' ),
					'fa-exclamation-triangle' => __( 'Exclamation Triangle', 'menu-icons' ),
					'fa-external-link'        => __( 'External Link', 'menu-icons' ),
					'fa-external-link-square' => __( 'External Link Square', 'menu-icons' ),
					'fa-eye'                  => __( 'Eye', 'menu-icons' ),
					'fa-eye-slash'            => __( 'Eye Slash', 'menu-icons' ),
					'fa-female'               => __( 'Female', 'menu-icons' ),
					'fa-fighter-jet'          => __( 'Fighter Jet', 'menu-icons' ),
					'fa-film'                 => __( 'Film', 'menu-icons' ),
					'fa-filter'               => __( 'Filter', 'menu-icons' ),
					'fa-fire'                 => __( 'Fire', 'menu-icons' ),
					'fa-fire-extinguisher'    => __( 'Fire Extinguisher', 'menu-icons' ),
					'fa-flag'                 => __( 'Flag', 'menu-icons' ),
					'fa-flag-checkered'       => __( 'Flag Checkered', 'menu-icons' ),
					'fa-flag-o'               => __( 'Flag (o)', 'menu-icons' ),
					'fa-flash'                => __( 'Flash', 'menu-icons' ),
					'fa-flask'                => __( 'Flask', 'menu-icons' ),
					'fa-folder'               => __( 'Folder', 'menu-icons' ),
					'fa-folder-open'          => __( 'Folder Open', 'menu-icons' ),
					'fa-folder-o'             => __( 'Folder (o)', 'menu-icons' ),
					'fa-folder-open-o'        => __( 'Folder Open (o)', 'menu-icons' ),
					'fa-frown-o'              => __( 'Frown (o)', 'menu-icons' ),
					'fa-gamepad'              => __( 'Gamepad', 'menu-icons' ),
					'fa-gavel'                => __( 'Gavel', 'menu-icons' ),
					'fa-gear'                 => __( 'Gear', 'menu-icons' ),
					'fa-gears'                => __( 'Gears', 'menu-icons' ),
					'fa-gift'                 => __( 'Gift', 'menu-icons' ),
					'fa-glass'                => __( 'Glass', 'menu-icons' ),
					'fa-globe'                => __( 'Globe', 'menu-icons' ),
					'fa-group'                => __( 'Group', 'menu-icons' ),
					'fa-hdd-o'                => __( 'HDD (o)', 'menu-icons' ),
					'fa-headphones'           => __( 'Headphones', 'menu-icons' ),
					'fa-heart'                => __( 'Heart', 'menu-icons' ),
					'fa-heart-o'              => __( 'Heart (o)', 'menu-icons' ),
					'fa-home'                 => __( 'Home', 'menu-icons' ),
					'fa-inbox'                => __( 'Inbox', 'menu-icons' ),
					'fa-info'                 => __( 'Info', 'menu-icons' ),
					'fa-info-circle'          => __( 'Info Circle', 'menu-icons' ),
					'fa-key'                  => __( 'Key', 'menu-icons' ),
					'fa-keyboard-o'           => __( 'Keyboard (o)', 'menu-icons' ),
					'fa-laptop'               => __( 'Laptop', 'menu-icons' ),
					'fa-leaf'                 => __( 'Leaf', 'menu-icons' ),
					'fa-legal'                => __( 'Legal', 'menu-icons' ),
					'fa-lemon-o'              => __( 'Lemon (o)', 'menu-icons' ),
					'fa-level-down'           => __( 'Level Down', 'menu-icons' ),
					'fa-level-up'             => __( 'Level Up', 'menu-icons' ),
					'fa-lightbulb-o'          => __( 'Lightbulb (o)', 'menu-icons' ),
					'fa-location-arrow'       => __( 'Location Arrow', 'menu-icons' ),
					'fa-lock'                 => __( 'Lock', 'menu-icons' ),
					'fa-magic'                => __( 'Magic', 'menu-icons' ),
					'fa-magnet'               => __( 'Magnet', 'menu-icons' ),
					'fa-mail-forward'         => __( 'Mail Forward', 'menu-icons' ),
					'fa-mail-reply'           => __( 'Mail Reply', 'menu-icons' ),
					'fa-mail-reply-all'       => __( 'Mail Reply All', 'menu-icons' ),
					'fa-male'                 => __( 'Male', 'menu-icons' ),
					'fa-map-marker'           => __( 'Map Marker', 'menu-icons' ),
					'fa-meh-o'                => __( 'Meh (o)', 'menu-icons' ),
					'fa-microphone'           => __( 'Microphone', 'menu-icons' ),
					'fa-microphone-slash'     => __( 'Microphone Slash', 'menu-icons' ),
					'fa-minus'                => __( 'Minus', 'menu-icons' ),
					'fa-minus-circle'         => __( 'Minus Circle', 'menu-icons' ),
					'fa-minus-square'         => __( 'Minus Square', 'menu-icons' ),
					'fa-minus-square-o'       => __( 'Minus Square (o)', 'menu-icons' ),
					'fa-mobile'               => __( 'Mobile', 'menu-icons' ),
					'fa-mobile-phone'         => __( 'Mobile Phone', 'menu-icons' ),
					'fa-moon-o'               => __( 'Moon (o)', 'menu-icons' ),
					'fa-music'                => __( 'Music', 'menu-icons' ),
					'fa-pencil'               => __( 'Pencil', 'menu-icons' ),
					'fa-pencil-square'        => __( 'Pencil Square', 'menu-icons' ),
					'fa-pencil-square-o'      => __( 'Pencil Square (o)', 'menu-icons' ),
					'fa-phone'                => __( 'Phone', 'menu-icons' ),
					'fa-phone-square'         => __( 'Phone Square', 'menu-icons' ),
					'fa-picture-o'            => __( 'Picture (o)', 'menu-icons' ),
					'fa-plane'                => __( 'Plane', 'menu-icons' ),
					'fa-plus'                 => __( 'Plus', 'menu-icons' ),
					'fa-plus-circle'          => __( 'Plus Circle', 'menu-icons' ),
					'fa-plus-square'          => __( 'Plus Square', 'menu-icons' ),
					'fa-plus-square-o'        => __( 'Plus Square (o)', 'menu-icons' ),
					'fa-power-off'            => __( 'Power Off', 'menu-icons' ),
					'fa-print'                => __( 'Print', 'menu-icons' ),
					'fa-puzzle-piece'         => __( 'Puzzle Piece', 'menu-icons' ),
					'fa-qrcode'               => __( 'QR Code', 'menu-icons' ),
					'fa-question'             => __( 'Question', 'menu-icons' ),
					'fa-question-circle'      => __( 'Question Circle', 'menu-icons' ),
					'fa-quote-left'           => __( 'Quote Left', 'menu-icons' ),
					'fa-quote-right'          => __( 'Quote Right', 'menu-icons' ),
					'fa-random'               => __( 'Random', 'menu-icons' ),
					'fa-refresh'              => __( 'Refresh', 'menu-icons' ),
					'fa-reply'                => __( 'Reply', 'menu-icons' ),
					'fa-reply-all'            => __( 'Reply All', 'menu-icons' ),
					'fa-retweet'              => __( 'Retweet', 'menu-icons' ),
					'fa-road'                 => __( 'Road', 'menu-icons' ),
					'fa-rocket'               => __( 'Rocket', 'menu-icons' ),
					'fa-rss'                  => __( 'RSS', 'menu-icons' ),
					'fa-rss-square'           => __( 'RSS Square', 'menu-icons' ),
					'fa-search'               => __( 'Search', 'menu-icons' ),
					'fa-search-minus'         => __( 'Search Minus', 'menu-icons' ),
					'fa-search-plus'          => __( 'Search Plus', 'menu-icons' ),
					'fa-share'                => __( 'Share', 'menu-icons' ),
					'fa-share-square'         => __( 'Share Square', 'menu-icons' ),
					'fa-share-square-o'       => __( 'Share Square (o)', 'menu-icons' ),
					'fa-shield'               => __( 'Shield', 'menu-icons' ),
					'fa-shopping-cart'        => __( 'Shopping Cart', 'menu-icons' ),
					'fa-sign-in'              => __( 'Sign In', 'menu-icons' ),
					'fa-sign-out'             => __( 'Sign Out', 'menu-icons' ),
					'fa-signal'               => __( 'Signal', 'menu-icons' ),
					'fa-sitemap'              => __( 'Sitemap', 'menu-icons' ),
					'fa-smile-o'              => __( 'Smile (o)', 'menu-icons' ),
					'fa-sort'                 => __( 'Sort', 'menu-icons' ),
					'fa-sort-asc'             => __( 'Sort ASC', 'menu-icons' ),
					'fa-sort-desc'            => __( 'Sort DESC', 'menu-icons' ),
					'fa-sort-down'            => __( 'Sort Down', 'menu-icons' ),
					'fa-sort-up'              => __( 'Sort Up', 'menu-icons' ),
					'fa-sort-alpha-asc'       => __( 'Sort Alpha ASC', 'menu-icons' ),
					'fa-sort-alpha-desc'      => __( 'Sort Alpha DESC', 'menu-icons' ),
					'fa-sort-amount-asc'      => __( 'Sort Amount ASC', 'menu-icons' ),
					'fa-sort-amount-desc'     => __( 'Sort Amount DESC', 'menu-icons' ),
					'fa-sort-numeric-asc'     => __( 'Sort Numeric ASC', 'menu-icons' ),
					'fa-sort-numeric-desc'    => __( 'Sort Numeric DESC', 'menu-icons' ),
					'fa-spinner'              => __( 'Spinner', 'menu-icons' ),
					'fa-square'               => __( 'Square', 'menu-icons' ),
					'fa-square-o'             => __( 'Square (o)', 'menu-icons' ),
					'fa-star'                 => __( 'Star', 'menu-icons' ),
					'fa-star-half'            => __( 'Star Half', 'menu-icons' ),
					'fa-star-half-empty'      => __( 'Star Half Empty', 'menu-icons' ),
					'fa-star-half-full'       => __( 'Star Half Full', 'menu-icons' ),
					'fa-star-half-o'          => __( 'Star Half (o)', 'menu-icons' ),
					'fa-star-o'               => __( 'Star (o)', 'menu-icons' ),
					'fa-subscript'            => __( 'Subscript', 'menu-icons' ),
					'fa-suitcase'             => __( 'Suitcase', 'menu-icons' ),
					'fa-sun-o'                => __( 'Sun (o)', 'menu-icons' ),
					'fa-superscript'          => __( 'Superscript', 'menu-icons' ),
					'fa-tablet'               => __( 'Tablet', 'menu-icons' ),
					'fa-tachometer'           => __( 'Tachometer', 'menu-icons' ),
					'fa-tag'                  => __( 'Tag', 'menu-icons' ),
					'fa-tags'                 => __( 'Tags', 'menu-icons' ),
					'fa-tasks'                => __( 'Tasks', 'menu-icons' ),
					'fa-terminal'             => __( 'Terminal', 'menu-icons' ),
					'fa-thumb-tack'           => __( 'Thumb Tack', 'menu-icons' ),
					'fa-thumbs-down'          => __( 'Thumbs Down', 'menu-icons' ),
					'fa-thumbs-up'            => __( 'Thumbs Up', 'menu-icons' ),
					'fa-thumbs-o-down'        => __( 'Thumbs Down (o)', 'menu-icons' ),
					'fa-thumbs-o-up'          => __( 'Thumbs Up (o)', 'menu-icons' ),
					'fa-ticket'               => __( 'Ticket', 'menu-icons' ),
					'fa-times'                => __( 'Times', 'menu-icons' ),
					'fa-times-circle'         => __( 'Times Circle', 'menu-icons' ),
					'fa-times-circle-o'       => __( 'Times Circle (o)', 'menu-icons' ),
					'fa-tint'                 => __( 'Tint', 'menu-icons' ),
					'fa-toggle-down'          => __( 'Toggle Down', 'menu-icons' ),
					'fa-toggle-left'          => __( 'Toggle Left', 'menu-icons' ),
					'fa-toggle-right'         => __( 'Toggle Right', 'menu-icons' ),
					'fa-toggle-up'            => __( 'Toggle Up', 'menu-icons' ),
					'fa-trash-o'              => __( 'Trash (o)', 'menu-icons' ),
					'fa-trophy'               => __( 'Trophy', 'menu-icons' ),
					'fa-truck'                => __( 'Truck', 'menu-icons' ),
					'fa-umbrella'             => __( 'Umbrella', 'menu-icons' ),
					'fa-unlock'               => __( 'Unlock', 'menu-icons' ),
					'fa-unlock-alt'           => __( 'Unlock (alt)', 'menu-icons' ),
					'fa-unsorted'             => __( 'Unsorted', 'menu-icons' ),
					'fa-upload'               => __( 'Upload', 'menu-icons' ),
					'fa-user'                 => __( 'User', 'menu-icons' ),
					'fa-users'                => __( 'Users', 'menu-icons' ),
					'fa-video-camera'         => __( 'Video Ccamera', 'menu-icons' ),
					'fa-volume-down'          => __( 'Volume Down', 'menu-icons' ),
					'fa-volume-off'           => __( 'Volume Of', 'menu-icons' ),
					'fa-volume-up'            => __( 'Volume Up', 'menu-icons' ),
					'fa-warning'              => __( 'Warning', 'menu-icons' ),
					'fa-wrench'               => __( 'Wrench', 'menu-icons' ),
				),
			),
			array(
				'key'   => 'currency',
				'label' => __( 'Currency', 'menu-icons' ),
				'items' => array(
					'fa-bitcoin'      => __( 'Bitcoin', 'menu-icons' ),
					'fa-dollar'       => __( 'Dollar', 'menu-icons' ),
					'fa-euro'         => __( 'Euro', 'menu-icons' ),
					'fa-gbp'          => __( 'GBP', 'menu-icons' ),
					'fa-money'        => __( 'Money', 'menu-icons' ),
					'fa-rouble'       => __( 'Rouble', 'menu-icons' ),
					'fa-inr'          => __( 'Rupee', 'menu-icons' ),
					'fa-try'          => __( 'Turkish Lira', 'menu-icons' ),
					'fa-krw'          => __( 'Won', 'menu-icons' ),
					'fa-jpy'          => __( 'Yen', 'menu-icons' ),
				),
			),
			array(
				'key'   => 'text-editor',
				'label' => __( 'Text Editor', 'menu-icons' ),
				'items' => array(
					'fa-align-center'  => __( 'Align Center', 'menu-icons' ),
					'fa-align-justify' => __( 'Align Justify', 'menu-icons' ),
					'fa-align-left'    => __( 'Align Left', 'menu-icons' ),
					'fa-align-right'   => __( 'Align Right', 'menu-icons' ),
					'fa-bold'          => __( 'Bold', 'menu-icons' ),
					'fa-clipboard'     => __( 'Clipboard', 'menu-icons' ),
					'fa-columns'       => __( 'Columns', 'menu-icons' ),
					'fa-copy'          => __( 'Copy', 'menu-icons' ),
					'fa-cut'           => __( 'Cut', 'menu-icons' ),
					'fa-paste'         => __( 'Paste', 'menu-icons' ),
					'fa-eraser'        => __( 'Eraser', 'menu-icons' ),
					'fa-file'          => __( 'File', 'menu-icons' ),
					'fa-file-o'        => __( 'File (o)', 'menu-icons' ),
					'fa-file-text'     => __( 'File Text', 'menu-icons' ),
					'fa-file-text-o'   => __( 'File Text (o)', 'menu-icons' ),
					'fa-files-o'       => __( 'Files (o)', 'menu-icons' ),
					'fa-floppy-o'      => __( 'Floppy (o)', 'menu-icons' ),
					'fa-font'          => __( 'Font', 'menu-icons' ),
					'fa-indent'        => __( 'Indent', 'menu-icons' ),
					'fa-outdent'       => __( 'Outdent', 'menu-icons' ),
					'fa-italic'        => __( 'Italic', 'menu-icons' ),
					'fa-link'          => __( 'Link', 'menu-icons' ),
					'fa-unlink'        => __( 'Unlink', 'menu-icons' ),
					'fa-list'          => __( 'List', 'menu-icons' ),
					'fa-list-alt'      => __( 'List (Alt)', 'menu-icons' ),
					'fa-list-ol'       => __( 'List OL', 'menu-icons' ),
					'fa-list-ul'       => __( 'List UL', 'menu-icons' ),
					'fa-paperclip'     => __( 'Paperclip', 'menu-icons' ),
					'fa-repeat'        => __( 'Repeat', 'menu-icons' ),
					'fa-undo'          => __( 'Undo', 'menu-icons' ),
					'fa-save'          => __( 'Save', 'menu-icons' ),
					'fa-scissors'      => __( 'Scissors', 'menu-icons' ),
					'fa-strikethrough' => __( 'Strikethrough', 'menu-icons' ),
					'fa-table'         => __( 'Table', 'menu-icons' ),
					'fa-text-height'   => __( 'Text Height', 'menu-icons' ),
					'fa-text-width'    => __( 'Text Width', 'menu-icons' ),
					'fa-th'            => __( 'TH', 'menu-icons' ),
					'fa-th-large'      => __( 'TH Large', 'menu-icons' ),
					'fa-th-list'       => __( 'TH List', 'menu-icons' ),
					'fa-underline'     => __( 'Underline', 'menu-icons' ),
				),
			),
			array(
				'key'   => 'directional',
				'label' => __( 'Directional', 'menu-icons' ),
				'items' => array(
					'fa-angle-down'           => __( 'Angle Down', 'menu-icons' ),
					'fa-angle-left'           => __( 'Angle Left', 'menu-icons' ),
					'fa-angle-right'          => __( 'Angle Right', 'menu-icons' ),
					'fa-angle-up'             => __( 'Angle Up', 'menu-icons' ),
					'fa-angle-double-down'    => __( 'Angle Double Down', 'menu-icons' ),
					'fa-angle-double-left'    => __( 'Angle Double Left', 'menu-icons' ),
					'fa-angle-double-right'   => __( 'Angle Double Right', 'menu-icons' ),
					'fa-angle-double-up'      => __( 'Angle Double Up', 'menu-icons' ),
					'fa-arrow-circle-o-down'  => __( 'Arrow Circle Down (o)', 'menu-icons' ),
					'fa-arrow-circle-o-left'  => __( 'Arrow Circle Left (o)', 'menu-icons' ),
					'fa-arrow-circle-o-right' => __( 'Arrow Circle Right (o)', 'menu-icons' ),
					'fa-arrow-circle-o-up'    => __( 'Arrow Circle Up (o)', 'menu-icons' ),
					'fa-arrow-circle-down'    => __( 'Arrow Circle Down', 'menu-icons' ),
					'fa-arrow-circle-left'    => __( 'Arrow Circle Left', 'menu-icons' ),
					'fa-arrow-circle-right'   => __( 'Arrow Circle Right', 'menu-icons' ),
					'fa-arrow-circle-up'      => __( 'Arrow Circle Up', 'menu-icons' ),
					'fa-arrow-down'           => __( 'Arrow Down', 'menu-icons' ),
					'fa-arrow-left'           => __( 'Arrow Left', 'menu-icons' ),
					'fa-arrow-right'          => __( 'Arrow Right', 'menu-icons' ),
					'fa-arrow-up'             => __( 'Arrow Up', 'menu-icons' ),
					'fa-arrows'               => __( 'Arrows', 'menu-icons' ),
					'fa-arrows-alt'           => __( 'Arrows (Alt)', 'menu-icons' ),
					'fa-arrows-h'             => __( 'Arrows (h)', 'menu-icons' ),
					'fa-arrows-v'             => __( 'Arrows (v)', 'menu-icons' ),
					'fa-caret-down'           => __( 'Caret Down', 'menu-icons' ),
					'fa-caret-left'           => __( 'Caret Left', 'menu-icons' ),
					'fa-caret-right'          => __( 'Caret Right', 'menu-icons' ),
					'fa-caret-up'             => __( 'Caret Up', 'menu-icons' ),
					'fa-caret-square-o-down'  => __( 'Caret Square Down (o)', 'menu-icons' ),
					'fa-caret-square-o-left'  => __( 'Caret Square Left (o)', 'menu-icons' ),
					'fa-caret-square-o-right' => __( 'Caret Square Right (o)', 'menu-icons' ),
					'fa-caret-square-o-up'    => __( 'Caret Square Up (o)', 'menu-icons' ),
					'fa-chevron-circle-down'  => __( 'Chevron Circle Down', 'menu-icons' ),
					'fa-chevron-circle-left'  => __( 'Chevron Circle Left', 'menu-icons' ),
					'fa-chevron-circle-right' => __( 'Chevron Circle Right', 'menu-icons' ),
					'fa-chevron-circle-up'    => __( 'Chevron Circle Up', 'menu-icons' ),
					'fa-chevron-down'         => __( 'Chevron Down', 'menu-icons' ),
					'fa-chevron-left'         => __( 'Chevron Left', 'menu-icons' ),
					'fa-chevron-right'        => __( 'Chevron Right', 'menu-icons' ),
					'fa-chevron-up'           => __( 'Chevron Up', 'menu-icons' ),
					'fa-hand-o-down'          => __( 'Hand Down (o)', 'menu-icons' ),
					'fa-hand-o-left'          => __( 'Hand Left (o)', 'menu-icons' ),
					'fa-hand-o-right'         => __( 'Hand Right (o)', 'menu-icons' ),
					'fa-hand-o-up'            => __( 'Hand Up (o)', 'menu-icons' ),
					'fa-long-arrow-down'      => __( 'Long Arrow Down', 'menu-icons' ),
					'fa-long-arrow-left'      => __( 'Long Arrow Left', 'menu-icons' ),
					'fa-long-arrow-right'     => __( 'Long Arrow Right', 'menu-icons' ),
					'fa-long-arrow-up'        => __( 'Long Arrow Up', 'menu-icons' ),
				),
			),
			array(
				'key'   => 'video-player',
				'label' => __( 'Video Player', 'menu-icons' ),
				'items' => array(
					'fa-arrows-alt'    => __( 'Arrows Alt', 'menu-icons' ),
					'fa-backward'      => __( 'Backward', 'menu-icons' ),
					'fa-compress'      => __( 'Compress', 'menu-icons' ),
					'fa-eject'         => __( 'Eject', 'menu-icons' ),
					'fa-expand'        => __( 'Expand', 'menu-icons' ),
					'fa-fast-backward' => __( 'Fast Backward', 'menu-icons' ),
					'fa-fast-forward'  => __( 'Fast Forward', 'menu-icons' ),
					'fa-forward'       => __( 'Forward', 'menu-icons' ),
					'fa-pause'         => __( 'Pause', 'menu-icons' ),
					'fa-play'          => __( 'Play', 'menu-icons' ),
					'fa-play-circle'   => __( 'Play Circle', 'menu-icons' ),
					'fa-play-circle-o' => __( 'Play Circle (o)', 'menu-icons' ),
					'fa-step-backward' => __( 'Step Backward', 'menu-icons' ),
					'fa-step-forward'  => __( 'Step Forward', 'menu-icons' ),
					'fa-stop'          => __( 'Stop', 'menu-icons' ),
					'fa-youtube-play'  => sprintf( __( '%s Play', 'menu-icons' ), 'YouTube' ),
				),
			),
			array(
				'key'   => __( 'brand', 'menu-icons' ),
				'label' => __( 'Brand', 'menu-icons' ),
				'items' => array(
					'fa-adn'                => 'ADN',
					'fa-android'            => 'Android',
					'fa-apple'              => 'Apple',
					'fa-bitbucket'          => 'Bitbucket',
					'fa-bitbucket-square'   => 'Bitucket Square',
					'fa-css3'               => 'CSS3',
					'fa-dribbble'           => 'Dribbble',
					'fa-dropbox'            => 'DropBox',
					'fa-facebook'           => 'Facebook',
					'fa-facebook-square'    => sprintf( __( '%s Square', 'menu-icons' ), 'Facebook' ),
					'fa-flickr'             => 'Flickr',
					'fa-foursquare'         => 'Foursquare',
					'fa-github'             => 'GitHub',
					'fa-github-alt'         => sprintf( __( '%s (Alt)', 'menu-icons' ), 'GitHub' ),
					'fa-github-square'      => sprintf( __( '%s Square', 'menu-icons' ), 'GitHub' ),
					'fa-gittip'             => 'GitTip',
					'fa-google-plus'        => 'Google+',
					'fa-google-plus-square' => sprintf( __( '%s Square', 'menu-icons' ), 'Google+' ),
					'fa-html5'              => 'HTML5',
					'fa-instagram'          => 'Instagram',
					'fa-linkedin'           => 'LinkedIn',
					'fa-linkedin-square'    => sprintf( __( '%s Square', 'menu-icons' ), 'LinkedIn' ),
					'fa-linux'              => 'Linux',
					'fa-maxcdn'             => 'MaxCDN',
					'fa-pagelines'          => 'Pagelines',
					'fa-pinterest'          => 'Pinterest',
					'fa-pinterest-square'   => sprintf( __( '%s Square', 'menu-icons' ), 'Pinterest' ),
					'fa-renren'             => 'Renren',
					'fa-skype'              => 'Skype',
					'fa-stack-exchange'     => 'Stack Exchange',
					'fa-stack-overflow'     => 'Stack Overflow',
					'fa-trello'             => 'Trello',
					'fa-tumblr'             => 'Tumblr',
					'fa-tumblr-square'      => sprintf( __( '%s Square', 'menu-icons' ), 'Tumblr' ),
					'fa-twitter'            => 'Twitter',
					'fa-twitter-square'     => sprintf( __( '%s Square', 'menu-icons' ), 'Twitter' ),
					'fa-vimeo-square'       => sprintf( __( '%s Square', 'menu-icons' ), 'Vimeo' ),
					'fa-vk'                 => 'VK',
					'fa-weibo'              => 'Wibo',
					'fa-windows'            => 'Windows',
					'fa-xing'               => 'Xing',
					'fa-xing-square'        => sprintf( __( '%s Square', 'menu-icons' ), 'Xing' ),
					'fa-youtube'            => 'YouTube',
					'fa-youtube-square'     => sprintf( __( '%s Square', 'menu-icons' ), 'YouTube' ),
				),
			),
			array(
				'key'   => __( 'medical', 'menu-icons' ),
				'label' => __( 'Medical', 'menu-icons' ),
				'items' => array(
					'fa-ambulance'   => __( 'Ambulance', 'menu-icons' ),
					'fa-h-square'    => __( 'H Square', 'menu-icons' ),
					'fa-hospital-o'  => __( 'Hospital (o)', 'menu-icons' ),
					'fa-medkit'      => __( 'Medkit', 'menu-icons' ),
					'fa-stethoscope' => __( 'Stethoscope', 'menu-icons' ),
					'fa-user-md'     => __( 'User MD', 'menu-icons' ),
					'fa-wheelchair'  => __( 'Wheelchair', 'menu-icons' ),
				),
			),
		);
	}
}
