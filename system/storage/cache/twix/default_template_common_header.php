<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\common\header.twig */
class default_template_common_header extends Twix_Template
{
    public function __construct($env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    extract($context); ?><!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="<?php echo @$direction ?>" lang="<?php echo @$lang ?>" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="<?php echo @$direction ?>" lang="<?php echo @$lang ?>" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="<?php echo @$direction ?>" lang="<?php echo @$lang ?>">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo @$title ?></title>
<base href="<?php echo @$base ?>" />
<?php
        if (@$description) {
?><meta name="description" content="<?php echo @$description ?>" />
<?php
        }
        if (@$keywords) {
?><meta name="keywords" content="<?php echo @$keywords ?>" />
<?php
        }
?><script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">
<?php
        @$save12090 = $style        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$styles);
        foreach ($context['_seq'] as $_key => $style) {
?><link href="<?php echo @$style["href"] ?>" type="text/css" rel="<?php echo @$style["rel"] ?>" media="<?php echo @$style["media"] ?>" />
<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$style         = $save12090;
        @$save91346 = $script        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$scripts);
        foreach ($context['_seq'] as $_key => $script) {
?><script src="<?php echo @$script ?>" type="text/javascript"></script>
<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$script         = $save91346 ?><script src="catalog/view/javascript/common.js" type="text/javascript"></script>
<?php
        @$save50356 = $link        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$links);
        foreach ($context['_seq'] as $_key => $link) {
?><link href="<?php echo @$link["href"] ?>" rel="<?php echo @$link["rel"] ?>" />
<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$link         = $save50356;
        @$save83242 = $analytic        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$analytics);
        foreach ($context['_seq'] as $_key => $analytic) {
echo @$analytic ?>
<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$analytic         = $save83242 ?></head>
<body>
<nav id="top">
  <div class="container"><?php echo @$currency ?>
    <?php echo @$language ?>
    <div id="top-links" class="nav pull-right">
      <ul class="list-inline">
        <li><a href="<?php echo @$contact ?>"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md"><?php echo @$telephone ?></span></li>
        <li class="dropdown"><a href="<?php echo @$account ?>" title="<?php echo @$text_account ?>" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo @$text_account ?></span> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right">
            <?php
        if (@$logged) {
?>            <li><a href="<?php echo @$account ?>"><?php echo @$text_account ?></a></li>
            <li><a href="<?php echo @$order ?>"><?php echo @$text_order ?></a></li>
            <li><a href="<?php echo @$transaction ?>"><?php echo @$text_transaction ?></a></li>
            <li><a href="<?php echo @$download ?>"><?php echo @$text_download ?></a></li>
            <li><a href="<?php echo @$logout ?>"><?php echo @$text_logout ?></a></li>
            <?php
        } else {
?>            <li><a href="<?php echo @$register ?>"><?php echo @$text_register ?></a></li>
            <li><a href="<?php echo @$login ?>"><?php echo @$text_login ?></a></li>
            <?php
        }
?>          </ul>
        </li>
        <li><a href="<?php echo @$wishlist ?>" id="wishlist-total" title="<?php echo @$text_wishlist ?>"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo @$text_wishlist ?></span></a></li>
        <li><a href="<?php echo @$shopping_cart ?>" title="<?php echo @$text_shopping_cart ?>"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo @$text_shopping_cart ?></span></a></li>
        <li><a href="<?php echo @$checkout ?>" title="<?php echo @$text_checkout ?>"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo @$text_checkout ?></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div id="logo"><?php
        if (@$logo) {
?><a href="<?php echo @$home ?>"><img src="<?php echo @$logo ?>" title="<?php echo @$name ?>" alt="<?php echo @$name ?>" class="img-responsive" /></a><?php
        } else {
?>          <h1><a href="<?php echo @$home ?>"><?php echo @$name ?></a></h1>
          <?php
        }
?></div>
      </div>
      <div class="col-sm-5"><?php echo @$search ?></div>
      <div class="col-sm-3"><?php echo @$cart ?></div>
    </div>
  </div>
</header>
<?php echo @$menu ?>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
