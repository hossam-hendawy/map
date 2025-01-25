<?php
$id = '';
$className = 'hero_block';
if (isset($block)) {
  $id = $block['id'];
  if (!empty($block['anchor'])) {
    $id = $block['anchor'];
  }
  if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
  }
  if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
  }
  if (function_exists('is_admin') && is_admin()) {
    if (wp_is_json_request() || (defined('REST_REQUEST') && REST_REQUEST) || (function_exists('get_current_screen') && get_current_screen()->is_block_editor())) {
      echo '<img width="100%" height="100%" src="' . get_template_directory_uri() . '/blocks/hero_block/screenshot.png">';
      return;
    }
  }
}
?>
<?php

?>
<section id="<?= esc_attr($id) ?>" class="<?= esc_attr($className) ?>">
  
  <ul class="sub-menu">
    <li class="menu-item-in-sub-menu">
      <div class="item-wrapper fz-24 capitalize-text ">
        <div class="category-name body medium navy-color">All</div>
        <div class="checkbox">
          <svg width="10" height="8" viewBox="0 0 10 8" fill="none" aria-hidden="true">
            <path d="M0.75 3.99992L3.58 6.82992L9.25 1.16992" stroke="#191919" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        
        </div>
      </div>
      <div class="item-wrapper fz-24 capitalize-text has-arrow">
        <div class="category-name body medium navy-color">Industries</div>
        <svg class="arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M8.90991 19.9201L15.4299 13.4001C16.1999 12.6301 16.1999 11.3701 15.4299 10.6001L8.90991 4.08008" stroke="#4D4D4D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="item-wrapper fz-24 capitalize-text has-arrow">
        <div class="category-name body medium navy-color">Year Acruired</div>
        <svg class="arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M8.90991 19.9201L15.4299 13.4001C16.1999 12.6301 16.1999 11.3701 15.4299 10.6001L8.90991 4.08008" stroke="#4D4D4D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="item-wrapper fz-24 capitalize-text">
        <div class="category-name body medium navy-color">Active</div>
        <div class="checkbox">
          <svg width="10" height="8" viewBox="0 0 10 8" fill="none" aria-hidden="true">
            <path d="M0.75 3.99992L3.58 6.82992L9.25 1.16992" stroke="#191919" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        
        </div>
      </div>
      <div class="item-wrapper fz-24 capitalize-text">
        <div class="category-name body medium navy-color">Realized</div>
        <div class="checkbox">
          <svg width="10" height="8" viewBox="0 0 10 8" fill="none" aria-hidden="true">
            <path d="M0.75 3.99992L3.58 6.82992L9.25 1.16992" stroke="#191919" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        
        </div>
      </div>
    </li>
  </ul>
  
  <a href="#" class="cta-button">Map View</a>
  <br>
  <br>
  <br>
  <a href="#" class="cta-button has-icon">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M22 9V15C22 17.5 21.5 19.25 20.38 20.38L14 14L21.73 6.27C21.91 7.06 22 7.96 22 9Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M21.73 6.27L6.26999 21.73C3.25999 21.04 2 18.96 2 15V9C2 4 4 2 9 2H15C18.96 2 21.04 3.26 21.73 6.27Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M20.38 20.38C19.25 21.5 17.5 22 15 22H9.00003C7.96003 22 7.06002 21.91 6.27002 21.73L14 14L20.38 20.38Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.23977 7.98C6.91977 5.05 11.3198 5.05 11.9998 7.98C12.3898 9.7 11.3098 11.16 10.3598 12.06C9.66977 12.72 8.57979 12.72 7.87979 12.06C6.92979 11.16 5.83977 9.7 6.23977 7.98Z" stroke="white" stroke-width="1.5"/>
      <path d="M9.0946 8.70001H9.10359" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    Map View
  </a>
  <br>
  <br>
  <br>
  <a href="#" class="cta-link">
    View Details
    <svg viewBox="0 0 41 40" fill="none" aria-hidden="true">
      <path d="M24.7168 9.8833L34.8335 20L24.7168 30.1166" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.50049 20H34.5505" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
  <br>
  <br>
  <br>
  <a href="#" class="cta-link small-cta-link">
    View Details
    <svg viewBox="0 0 41 40" fill="none" aria-hidden="true">
      <path d="M24.7168 9.8833L34.8335 20L24.7168 30.1166" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6.50049 20H34.5505" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>
  <br>
  <br>
  <br>
  
  <div class="sssss" style="color: black; text-align: center; "> Performance Food Group Cold Storage Distribution
    Center
  </div>
  <br>
  <br>
  <br>
  <br>
  <div class="gold">94,000 SF</div>
  <br>
  <br>
  <br>
  <br>

</section>











