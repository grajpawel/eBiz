<?php /*%%SmartyHeaderCode:111580568861744a73da9f23-67246349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imageslider/views/templates/hook/slider.tpl',
      1 => 1508764756,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '111580568861744a73da9f23-67246349',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6178519925d677_31542534',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6178519925d677_31542534')) {function content_6178519925d677_31542534($_smarty_tpl) {?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover">
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-PL&amp;utm_content=download">
            <figure>
              <img src="http://localhost/modules/ps_imageslider/images/sample-1.jpg" alt="sample-1">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Sample 1</h2>
                  <div class="caption-description"><h2>EXCEPTEUR OCCAECAT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-PL&amp;utm_content=download">
            <figure>
              <img src="http://localhost/modules/ps_imageslider/images/sample-2.jpg" alt="sample-2">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Sample 2</h2>
                  <div class="caption-description"><h2>EXCEPTEUR OCCAECAT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-PL&amp;utm_content=download">
            <figure>
              <img src="http://localhost/modules/ps_imageslider/images/sample-3.jpg" alt="sample-3">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Sample 3</h2>
                  <div class="caption-description"><h2>EXCEPTEUR OCCAECAT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Poprzedni</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Następny</span>
      </a>
    </div>
  </div>
<?php }} ?>
