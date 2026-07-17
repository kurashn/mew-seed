<?php
/**
 * Theme functions and definitions
 */

if ( ! function_exists( 'maw_seed_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function maw_seed_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'maw-seed' ),
			)
		);

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'maw_seed_setup' );

/**
 * Enqueue scripts and styles.
 */
function maw_seed_scripts() {
	// Google Fonts
	wp_enqueue_style( 'maw-seed-fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null );
	
	// Font Awesome (used in contact etc.)
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );

	// Main Stylesheet
	wp_enqueue_style( 'maw-seed-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );

	// Main JavaScript
	wp_enqueue_script( 'maw-seed-script', get_template_directory_uri() . '/script.js', array(), wp_get_theme()->get('Version'), true );
}
add_action( 'wp_enqueue_scripts', 'maw_seed_scripts' );

/**
 * SEO: ドキュメントタイトルの最適化
 * 区切りを「｜」に統一し、施設ページは地域キーワード入りのタイトルに強化する。
 */
function maw_seed_title_separator() {
	return '｜';
}
add_filter( 'document_title_separator', 'maw_seed_title_separator' );

function maw_seed_document_title( $parts ) {
	$page_titles = array(
		'daimotsu'         => '住宅型有料老人ホーム 夢み寮 だいもつ（尼崎市・大物駅徒歩1分）',
		'higashinanamatsu' => '夢み寮 東七松（尼崎市の住宅型有料老人ホーム）',
		'taisho'           => '夢み寮 大庄北（尼崎市の住宅型有料老人ホーム）',
		'recruit'          => '採用情報（介護スタッフ募集・未経験OK）',
	);
	if ( is_page() && ! is_front_page() ) {
		$slug = get_post_field( 'post_name', get_queried_object_id() );
		if ( isset( $page_titles[ $slug ] ) ) {
			$parts['title'] = $page_titles[ $slug ];
		}
	}
	return $parts;
}
add_filter( 'document_title_parts', 'maw_seed_document_title' );

/**
 * SEO: meta description / OGP / JSON-LD
 * ページごとの説明文とOGPを wp_head に出力する。
 */
function maw_seed_seo_meta() {
	$img_base = get_template_directory_uri() . '/images/';

	// スラッグ => array( description, og:image )
	$seo = array(
		'front'            => array( '兵庫県尼崎市で住宅型有料老人ホーム「夢み寮」を運営する株式会社ミュウシード。認知症対応・24時間介護付きの「寮」というかたちで、ご高齢の方の自分らしい暮らしを支えます。訪問介護・保育事業も展開。', 'daimotsu1.jpg' ),
		'company'          => array( '株式会社ミュウシードの会社概要。本社：兵庫県尼崎市東七松町1-8-8／TEL：06-4950-4565。高齢者向け寮「夢み寮」の運営、訪問介護事業、保育事業を行っています。', 'higashinanamatsu1.JPG' ),
		'daimotsu'         => array( '阪神「大物駅」徒歩1分、尼崎市東大物町の住宅型有料老人ホーム「夢み寮 だいもつ」。認知症対応・24時間介護付き、全室個室19室、夢みカフェ併設。見学・ご相談はTEL：06-6439-7070まで。', 'daimotsu1.jpg' ),
		'higashinanamatsu' => array( '尼崎市東七松町の住宅型有料老人ホーム「夢み寮 東七松」。認知症対応・24時間介護付きで、ご高齢の方の自分らしい暮らしをサポートします。見学・ご相談はTEL：06-6415-6888まで。', 'higashinanamatsu1.JPG' ),
		'taisho'           => array( '尼崎市大庄北の住宅型有料老人ホーム「夢み寮 大庄北」。認知症対応・24時間介護付きで、ご高齢の方の自分らしい暮らしをサポートします。見学・ご相談はTEL：06-6412-3444まで。', 'oshokita1.JPG' ),
		'flow'             => array( '夢み寮へのご入居の流れをご案内。お問い合わせ・見学から、面談、入居審査、ご契約、ご入居まで、スタッフが丁寧にサポートします。', 'hero-bg.jpg' ),
		'contact'          => array( '株式会社ミュウシード・夢み寮へのお問い合わせページ。入居のご相談・見学のお申し込みはお電話（06-4950-4565／平日9:00〜18:00）またはフォームからお気軽にどうぞ。', 'hero-bg.jpg' ),
		'news'             => array( '株式会社ミュウシード・夢み寮からのお知らせ・イベント情報・ブログの一覧です。', 'hero-bg.jpg' ),
		'recruit'          => array( '尼崎市の夢み寮で一緒に働きませんか。介護スタッフ（正社員・パート）、夜勤専門スタッフを募集中。未経験の方も研修制度があるので安心です。応募はお電話またはフォームから。', 'image2.jpg' ),
		'entry'            => array( '株式会社ミュウシード・夢み寮の採用エントリーフォーム。職場見学のご希望もお気軽にどうぞ。', 'image2.jpg' ),
		'privacy'          => array( '株式会社ミュウシードのプライバシーポリシー（個人情報保護方針）です。', '' ),
	);

	$key = '';
	if ( is_front_page() ) {
		$key = 'front';
	} elseif ( is_page() ) {
		$key = get_post_field( 'post_name', get_queried_object_id() );
	}

	$desc  = '';
	$image = '';
	if ( $key && isset( $seo[ $key ] ) ) {
		$desc  = $seo[ $key ][0];
		$image = $seo[ $key ][1] ? $img_base . $seo[ $key ][1] : '';
	} elseif ( is_singular( 'post' ) ) {
		$desc  = wp_strip_all_tags( get_the_excerpt() );
		$image = get_the_post_thumbnail_url( null, 'large' );
	}

	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
	}

	// OGP
	$url   = is_front_page() ? home_url( '/' ) : get_permalink();
	$title = wp_get_document_title();
	echo '<meta property="og:type" content="' . ( is_front_page() ? 'website' : 'article' ) . '">' . "\n";
	if ( $url ) {
		echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
	}
	echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
	if ( $desc ) {
		echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";
	}
	if ( $image ) {
		echo '<meta property="og:image" content="' . esc_url( $image ) . '">' . "\n";
	}
	echo '<meta property="og:site_name" content="株式会社ミュウシード">' . "\n";
	echo '<meta property="og:locale" content="ja_JP">' . "\n";
	echo '<meta name="twitter:card" content="summary_large_image">' . "\n";

	// JSON-LD: Organization（トップ・会社概要）
	if ( is_front_page() || 'company' === $key ) {
		$org = array(
			'@context'     => 'https://schema.org',
			'@type'        => 'Organization',
			'name'         => '株式会社ミュウシード',
			'url'          => home_url( '/' ),
			'logo'         => $img_base . 'logo.png',
			'telephone'    => '+81-6-4950-4565',
			'faxNumber'    => '+81-6-4950-4514',
			'foundingDate' => '2010-10',
			'address'      => array(
				'@type'           => 'PostalAddress',
				'postalCode'      => '660-0051',
				'addressRegion'   => '兵庫県',
				'addressLocality' => '尼崎市',
				'streetAddress'   => '東七松町1-8-8',
				'addressCountry'  => 'JP',
			),
		);
		echo '<script type="application/ld+json">' . wp_json_encode( $org, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
	}

	// JSON-LD: LocalBusiness（施設ページ）
	$facilities = array(
		'daimotsu'         => array( '住宅型有料老人ホーム 夢み寮 だいもつ', '660-0828', '東大物町1-5-27', '+81-6-6439-7070', 'daimotsu1.jpg' ),
		'higashinanamatsu' => array( '夢み寮 東七松', '660-0051', '東七松町1-8-8', '+81-6-6415-6888', 'higashinanamatsu1.JPG' ),
		'taisho'           => array( '夢み寮 大庄北', '660-0063', '大庄北3-1-23', '+81-6-6412-3444', 'oshokita1.JPG' ),
	);
	if ( isset( $facilities[ $key ] ) ) {
		$f  = $facilities[ $key ];
		$lb = array(
			'@context'           => 'https://schema.org',
			'@type'              => 'LocalBusiness',
			'name'               => $f[0],
			'url'                => get_permalink(),
			'image'              => $img_base . $f[4],
			'telephone'          => $f[3],
			'address'            => array(
				'@type'           => 'PostalAddress',
				'postalCode'      => $f[1],
				'addressRegion'   => '兵庫県',
				'addressLocality' => '尼崎市',
				'streetAddress'   => $f[2],
				'addressCountry'  => 'JP',
			),
			'areaServed'         => '兵庫県尼崎市',
			'parentOrganization' => array( '@type' => 'Organization', 'name' => '株式会社ミュウシード' ),
		);
		echo '<script type="application/ld+json">' . wp_json_encode( $lb, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
	}
}
add_action( 'wp_head', 'maw_seed_seo_meta', 5 );

/**
 * Contact Form 7 のフォームを「タイトル」で解決して出力する。
 * フォームIDが環境ごとに変わっても動くようにするためのヘルパー。
 * CF7未導入・フォーム未作成時は電話案内のフォールバックを表示する。
 */
function maw_seed_render_cf7( $title ) {
	if ( function_exists( 'wpcf7_get_contact_form_by_title' ) ) {
		$form = wpcf7_get_contact_form_by_title( $title );
		if ( $form ) {
			return do_shortcode( '[contact-form-7 id="' . (int) $form->id() . '" title="' . esc_attr( $title ) . '"]' );
		}
	}
	return '<div class="form-fallback text-center" style="padding: 40px 20px; background: #fff; border-radius: 8px;">'
		. '<p>フォームは現在準備中です。<br>お手数ですが、お電話にてお問い合わせください。</p>'
		. '<p style="font-size: 1.4em; font-weight: bold; margin-top: 15px;"><i class="fa-solid fa-phone"></i> 06-4950-4565</p>'
		. '<p style="font-size: 0.9em; color: #666;">受付：平日 9:00〜18:00</p>'
		. '</div>';
}

/**
 * favicon / apple-touch-icon（外観→サイトアイコン未設定時のフォールバック）
 */
function maw_seed_favicon() {
	if ( has_site_icon() ) {
		return;
	}
	$uri = get_template_directory_uri();
	echo '<link rel="icon" type="image/png" href="' . esc_url( $uri . '/favicon.png' ) . '">' . "\n";
	echo '<link rel="apple-touch-icon" href="' . esc_url( $uri . '/apple-touch-icon.png' ) . '">' . "\n";
}
add_action( 'wp_head', 'maw_seed_favicon', 5 );
