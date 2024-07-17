<?php
/* Smarty version 4.3.1, created on 2024-07-17 10:58:54
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6697a3eeb45178_46915969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1720446712,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6697a3eeb45178_46915969 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Conteneur carrousel">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://localhost/prestashop/fr/10-luxe">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/2aecaaf906ae10f0a89b8def625b18d4342bd367_Group 1.png" alt="luxe" loading="lazy" width="1110" height="340">
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/prestashop/fr/12-materiels-informatique">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/af4477d25d49ca3e853fc6581f4a7a5963d1ee7f_Rectangle 2.png" alt="Laptop" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Vente des matériels informatique</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/prestashop/fr/11-materiaux-de-construction">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/0f021488f48a6d6e3429480db49bcee1aa2bf30c_Rectangle 3.png" alt="briques" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Des matériaux de construction</h2>
                  <div class="caption-description"></div>
                </figcaption>
                          </figure>
          </a>        </li>
          </ul>
    <div class="direction" aria-label="Boutons du carrousel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Précédent">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Suivant">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
