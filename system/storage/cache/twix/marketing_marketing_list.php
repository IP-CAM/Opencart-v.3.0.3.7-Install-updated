<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\marketing\marketing_list.twig */
class marketing_marketing_list extends Twix_Template
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
    extract($context); echo @$header;
echo @$column_left ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="button" data-toggle="tooltip" title="<?php echo @$button_filter ?>" onclick="$('#filter-marketing').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>
        <a href="<?php echo @$add ?>" data-toggle="tooltip" title="<?php echo @$button_add ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
        <button type="button" data-toggle="tooltip" title="<?php echo @$button_delete ?>" class="btn btn-danger" onclick="confirm('<?php echo @$text_confirm ?>') ? $('#form-marketing').submit() : false;"><i class="fa fa-trash-o"></i></button>
      </div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save98928 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save98928 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid"><?php
        if (@$error_warning) {
?>    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
        }
?>    <?php
        if (@$success) {
?>    <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> <?php echo @$success ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
        }
?>    <div class="row">
      <div id="filter-marketing" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-filter"></i> <?php echo @$text_filter ?></h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="control-label" for="input-name"><?php echo @$entry_name ?></label>
              <input type="text" name="filter_name" value="<?php echo @$filter_name ?>" placeholder="<?php echo @$entry_name ?>" id="input-name" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-code"><?php echo @$entry_code ?></label>
              <input type="text" name="filter_code" value="<?php echo @$filter_code ?>" placeholder="<?php echo @$entry_code ?>" id="input-code" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-date-added"><?php echo @$entry_date_added ?></label>
              <div class="input-group date">
                <input type="text" name="filter_date_added" value="<?php echo @$filter_date_added ?>" placeholder="<?php echo @$entry_date_added ?>" data-date-format="YYYY-MM-DD" class="form-control" />
                <span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                </span></div>
            </div>
            <div class="form-group text-right">
              <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> <?php echo @$button_filter ?></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-md-pull-3 col-sm-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-list"></i> <?php echo @$text_list ?></h3>
          </div>
          <div class="panel-body">
            <form action="<?php echo @$delete ?>" method="post" enctype="multipart/form-data" id="form-marketing">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                      <td class="text-left"><?php
        if ((@$sort == "m.name")) {
?> <a href="<?php echo @$sort_name ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_name ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_name ?>"><?php echo @$column_name ?></a> <?php
        }
?></td>
                      <td class="text-left"><?php
        if ((@$sort == "m.code")) {
?> <a href="<?php echo @$sort_code ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_code ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_code ?>"><?php echo @$column_code ?></a> <?php
        }
?></td>
                      <td class="text-right"><?php echo @$column_clicks ?></td>
                      <td class="text-right"><?php echo @$column_orders ?></td>
                      <td class="text-left"><?php
        if ((@$sort == "m.date_added")) {
?> <a href="<?php echo @$sort_date_added ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_date_added ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_date_added ?>"><?php echo @$column_date_added ?></a> <?php
        }
?></td>
                      <td class="text-right"><?php echo @$column_action ?></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php
        if (@$marketings) {
?>                  <?php
            @$save33924 = $marketing            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$marketings);
            foreach ($context['_seq'] as $_key => $marketing) {
?>                  <tr>
                    <td class="text-center"><?php
                if (twix_in_filter(@$marketing["marketing_id"], @$selected)) {
?>                      <input type="checkbox" name="selected[]" value="<?php echo @$marketing["marketing_id"] ?>" checked="checked" />
                      <?php
                } else {
?>                      <input type="checkbox" name="selected[]" value="<?php echo @$marketing["marketing_id"] ?>" />
                      <?php
                }
?></td>
                    <td class="text-left"><?php echo @$marketing["name"] ?></td>
                    <td class="text-left"><?php echo @$marketing["code"] ?></td>
                    <td class="text-right"><?php echo @$marketing["clicks"] ?></td>
                    <td class="text-right"><?php echo @$marketing["orders"] ?></td>
                    <td class="text-left"><?php echo @$marketing["date_added"] ?></td>
                    <td class="text-right"><a href="<?php echo @$marketing["edit"] ?>" data-toggle="tooltip" title="<?php echo @$button_edit ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
                  </tr>
                  <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marketing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$marketing             = $save33924 ?>                  <?php
        } else {
?>                  <tr>
                    <td class="text-center" colspan="8"><?php echo @$text_no_results ?></td>
                  </tr>
                  <?php
        }
?>                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class="row">
              <div class="col-sm-6 text-left"><?php echo @$pagination ?></div>
              <div class="col-sm-6 text-right"><?php echo @$results ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript"><!--
$('#button-filter').on('click', function() {
	url = 'index.php?route=marketing/marketing&user_token=<?php echo @$user_token ?>';
	
	var filter_name = $('input[name=\'filter_name\']').val();
	
	if (filter_name) {
		url += '&filter_name=' + encodeURIComponent(filter_name);
	}
	
	var filter_code = $('input[name=\'filter_code\']').val();
	
	if (filter_code) {
		url += '&filter_code=' + encodeURIComponent(filter_code);
	}
		
	var filter_date_added = $('input[name=\'filter_date_added\']').val();
	
	if (filter_date_added) {
		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
	}
	
	location = url;
});
//--></script> 
  <script type="text/javascript"><!--
$('.date').datetimepicker({
	language: '<?php echo @$datepicker ?>',
	pickTime: false
});
//--></script> 
</div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "marketing/marketing_list.twig";
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
