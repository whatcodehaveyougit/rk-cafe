<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
?>

<div class="hero-component">
  <div class="hero-image">
    <img src="http://localhost:10033/wp-content/uploads/2024/11/Screenshot-2024-11-29-at-14.12.06.png"
      alt="A cup of coffee with latte art" />
    <div>
      <span><b>Monday to Friday</b><span><?php echo esc_html($monday_to_friday_hours); ?></span></span>
      <span><b>Saturday and Sunday</b><span><?php echo esc_html($sat_and_sun_hours); ?></span></span>
    </div>
  </div>
  <div class="hero-content">
    <h5>
      <a href="<?php echo $protocol . $host; ?>/brunch-in-abbeyhill">Breakfast</a> |
      <a href="<?php echo $protocol . $host; ?>/brunch-in-abbeyhill">Brunch</a> |
      <a href="<?php echo $protocol . $host; ?>/drinks-in-abbeyhill">Drinks</a> |
      <a href="<?php echo $protocol . $host; ?>/cakes-in-abbeyhill">Cakes</a>
    </h5>
    <div aria-hidden="true" class="wp-block-spacer"></div>
    <h1><?php echo esc_html($featured_section_1_title); ?></h1>
    <p>
      <?php echo esc_html($featured_section_1_text); ?>
    </p>
  </div>
</div>