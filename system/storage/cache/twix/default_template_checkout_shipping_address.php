<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\checkout\shipping_address.twig */
class default_template_checkout_shipping_address extends Twix_Template
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
    extract($context); ?><form class="form-horizontal">
  <?php
        if (@$addresses) {
?>  <div class="radio">
    <label>
      <input type="radio" name="shipping_address" value="existing" checked="checked" />
      <?php echo @$text_address_existing ?></label>
  </div>
  <div id="shipping-existing">
    <select name="address_id" class="form-control">
     <?php
            @$save40741 = $address            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$addresses);
            foreach ($context['_seq'] as $_key => $address) {
?>      <?php
                if ((@$address["address_id"] == @$address_id)) {
?>      <option value="<?php echo @$address["address_id"] ?>" selected="selected"><?php echo @$address["firstname"] ?> <?php echo @$address["lastname"] ?>, <?php echo @$address["address_1"] ?>, <?php echo @$address["city"] ?>, <?php echo @$address["zone"] ?>, <?php echo @$address["country"] ?></option>
      <?php
                } else {
?>      <option value="<?php echo @$address["address_id"] ?>"><?php echo @$address["firstname"] ?> <?php echo @$address["lastname"] ?>, <?php echo @$address["address_1"] ?>, <?php echo @$address["city"] ?>, <?php echo @$address["zone"] ?>, <?php echo @$address["country"] ?></option>
      <?php
                }
?>      <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$address             = $save40741 ?>    </select>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="shipping_address" value="new" />
      <?php echo @$text_address_new ?></label>
  </div>
  <?php
        }
?>  <br />
  <div id="shipping-new" style="display: <?php
        if (@$addresses) {
?>none<?php
        } else {
?>block<?php
        }
?>;">
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-shipping-firstname"><?php echo @$entry_firstname ?></label>
      <div class="col-sm-10">
        <input type="text" name="firstname" value="" placeholder="<?php echo @$entry_firstname ?>" id="input-shipping-firstname" class="form-control" />
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-shipping-lastname"><?php echo @$entry_lastname ?></label>
      <div class="col-sm-10">
        <input type="text" name="lastname" value="" placeholder="<?php echo @$entry_lastname ?>" id="input-shipping-lastname" class="form-control" />
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="input-shipping-company"><?php echo @$entry_company ?></label>
      <div class="col-sm-10">
        <input type="text" name="company" value="" placeholder="<?php echo @$entry_company ?>" id="input-shipping-company" class="form-control" />
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-shipping-address-1"><?php echo @$entry_address_1 ?></label>
      <div class="col-sm-10">
        <input type="text" name="address_1" value="" placeholder="<?php echo @$entry_address_1 ?>" id="input-shipping-address-1" class="form-control" />
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="input-shipping-address-2"><?php echo @$entry_address_2 ?></label>
      <div class="col-sm-10">
        <input type="text" name="address_2" value="" placeholder="<?php echo @$entry_address_2 ?>" id="input-shipping-address-2" class="form-control" />
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-shipping-city"><?php echo @$entry_city ?></label>
      <div class="col-sm-10">
        <input type="text" name="city" value="" placeholder="<?php echo @$entry_city ?>" id="input-shipping-city" class="form-control" />
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-shipping-postcode"><?php echo @$entry_postcode ?></label>
      <div class="col-sm-10">
        <input type="text" name="postcode" value="<?php echo @$postcode ?>" placeholder="<?php echo @$entry_postcode ?>" id="input-shipping-postcode" class="form-control" />
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-shipping-country"><?php echo @$entry_country ?></label>
      <div class="col-sm-10">
        <select name="country_id" id="input-shipping-country" class="form-control">
          <option value=""><?php echo @$text_select ?></option>
          <?php
        @$save75950 = $country        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$countries);
        foreach ($context['_seq'] as $_key => $country) {
?>          <?php
            if ((@$country["country_id"] == @$country_id)) {
?>          <option value="<?php echo @$country["country_id"] ?>" selected="selected"><?php echo @$country["name"] ?></option>
          <?php
            } else {
?>          <option value="<?php echo @$country["country_id"] ?>"><?php echo @$country["name"] ?></option>
           <?php
            }
?>           <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$country         = $save75950 ?>        </select>
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-shipping-zone"><?php echo @$entry_zone ?></label>
      <div class="col-sm-10">
        <select name="zone_id" id="input-shipping-zone" class="form-control">
        </select>
      </div>
    </div>
   <?php
        @$save21441 = $custom_field        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$custom_fields);
        foreach ($context['_seq'] as $_key => $custom_field) {
?>    <?php
            if ((@$custom_field["type"] == "select")) {
?>    <div class="form-group<?php
                if (@$custom_field["required"]) {
?> required <?php
                }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
      <label class="col-sm-2 control-label" for="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
      <div class="col-sm-10">
        <select name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" id="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control">
          <option value=""><?php echo @$text_select ?></option>
          <?php
                @$save60046 = $custom_field_value                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                foreach ($context['_seq'] as $_key => $custom_field_value) {
?>          <option value="<?php echo @$custom_field_value["custom_field_value_id"] ?>"><?php echo @$custom_field_value["name"] ?></option>
          <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                 = $save60046 ?>        </select>
      </div>
    </div>
    <?php
            }
?>    <?php
            if ((@$custom_field["type"] == "radio")) {
?>    <div class="form-group<?php
                if (@$custom_field["required"]) {
?> required <?php
                }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
      <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
      <div class="col-sm-10">
        <div id="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>">
          <?php
                @$save40339 = $custom_field_value                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                foreach ($context['_seq'] as $_key => $custom_field_value) {
?>          <div class="radio">
            <label>
              <input type="radio" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" />
              <?php echo @$custom_field_value["name"] ?></label>
          </div>
          <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                 = $save40339 ?>        </div>
      </div>
    </div>
    <?php
            }
?>    <?php
            if ((@$custom_field["type"] == "checkbox")) {
?>    <div class="form-group<?php
                if (@$custom_field["required"]) {
?> required <?php
                }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
      <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
      <div class="col-sm-10">
        <div id="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>">
          <?php
                @$save54430 = $custom_field_value                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                foreach ($context['_seq'] as $_key => $custom_field_value) {
?>          <div class="checkbox">
            <label>
              <input type="checkbox" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>][]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" />
              <?php echo @$custom_field_value["name"] ?></label>
          </div>
          <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                 = $save54430 ?>        </div>
      </div>
    </div>
    <?php
            }
?>    <?php
            if ((@$custom_field["type"] == "text")) {
?>    <div class="form-group<?php
                if (@$custom_field["required"]) {
?> required <?php
                }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
      <label class="col-sm-2 control-label" for="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
      <div class="col-sm-10">
        <input type="text" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field["value"] ?>" placeholder="<?php echo @$custom_field["name"] ?>" id="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
      </div>
    </div>
    <?php
            }
?>    <?php
            if ((@$custom_field["type"] == "textarea")) {
?>    <div class="form-group<?php
                if (@$custom_field["required"]) {
?> required <?php
                }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
      <label class="col-sm-2 control-label" for="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
      <div class="col-sm-10">
        <textarea name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" rows="5" placeholder="<?php echo @$custom_field["name"] ?>" id="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control"><?php echo @$custom_field["value"] ?></textarea>
      </div>
    </div>
    <?php
            }
?>    <?php
            if ((@$custom_field["type"] == "file")) {
?>    <div class="form-group<?php
                if (@$custom_field["required"]) {
?> required <?php
                }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
      <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
      <div class="col-sm-10">
        <button type="button" id="button-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-default"><i class="fa fa-upload"></i> <?php echo @$button_upload ?></button>
        <input type="hidden" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" value="" id="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>" />
      </div>
    </div>
    <?php
            }
?>    <?php
            if ((@$custom_field["type"] == "date")) {
?>    <div class="form-group<?php
                if (@$custom_field["required"]) {
?> required <?php
                }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
      <label class="col-sm-2 control-label" for="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
      <div class="col-sm-10">
        <div class="input-group date">
          <input type="text" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field["value"] ?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="YYYY-MM-DD" id="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
          <span class="input-group-btn">
          <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
          </span></div>
      </div>
    </div>
    <?php
            }
?>    <?php
            if ((@$custom_field["type"] == "time")) {
?>    <div class="form-group<?php
                if (@$custom_field["required"]) {
?> required <?php
                }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
      <label class="col-sm-2 control-label" for="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
      <div class="col-sm-10">
        <div class="input-group time">
          <input type="text" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field["value"] ?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="HH:mm" id="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
          <span class="input-group-btn">
          <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
          </span></div>
      </div>
    </div>
    <?php
            }
?>    <?php
            if ((@$custom_field["type"] == "datetime")) {
?>    <div class="form-group<?php
                if (@$custom_field["required"]) {
?> required <?php
                }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
      <label class="col-sm-2 control-label" for="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
      <div class="col-sm-10">
        <div class="input-group datetime">
          <input type="text" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field["value"] ?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="YYYY-MM-DD HH:mm" id="input-shipping-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
          <span class="input-group-btn">
          <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
          </span></div>
      </div>
    </div>
    <?php
            }
?>    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field         = $save21441 ?>  </div>
  <div class="buttons clearfix">
    <div class="pull-right">
      <input type="button" value="<?php echo @$button_continue ?>" id="button-shipping-address" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary" />
    </div>
  </div>
</form>
<script type="text/javascript"><!--
$('input[name=\'shipping_address\']').on('change', function() {
	if (this.value == 'new') {
		$('#shipping-existing').hide();
		$('#shipping-new').show();
	} else {
		$('#shipping-existing').show();
		$('#shipping-new').hide();
	}
});
//--></script>
<script type="text/javascript"><!--
$('#collapse-shipping-address .form-group[data-sort]').detach().each(function() {
	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#collapse-shipping-address .form-group').length-2) {
		$('#collapse-shipping-address .form-group').eq(parseInt($(this).attr('data-sort'))+2).before(this);
	}

	if ($(this).attr('data-sort') > $('#collapse-shipping-address .form-group').length-2) {
		$('#collapse-shipping-address .form-group:last').after(this);
	}

	if ($(this).attr('data-sort') == $('#collapse-shipping-address .form-group').length-2) {
		$('#collapse-shipping-address .form-group:last').after(this);
	}

	if ($(this).attr('data-sort') < -$('#collapse-shipping-address .form-group').length-2) {
		$('#collapse-shipping-address .form-group:first').before(this);
	}
});
//--></script>
<script type="text/javascript"><!--
$('#collapse-shipping-address button[id^=\'button-shipping-custom-field\']').on('click', function() {
	var element = this;

	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=tool/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(element).button('loading');
				},
				complete: function() {
					$(element).button('reset');
				},
				success: function(json) {
					$(element).parent().find('.text-danger').remove();

					if (json['error']) {
						$(element).parent().find('input[name^=\'custom_field\']').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						alert(json['success']);

						$(element).parent().find('input[name^=\'custom_field\']').val(json['code']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
//--></script>
<script type="text/javascript"><!--
$('.date').datetimepicker({
	language: '<?php echo @$datepicker ?>',
	pickTime: false
});

$('.time').datetimepicker({
	language: '<?php echo @$datepicker ?>',
	pickDate: false
});

$('.datetime').datetimepicker({
	language: '<?php echo @$datepicker ?>',
	pickDate: true,
	pickTime: true
});
//--></script>
<script type="text/javascript"><!--
$('#collapse-shipping-address select[name=\'country_id\']').on('change', function() {
	$.ajax({
		url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
		dataType: 'json',
		beforeSend: function() {
			$('#collapse-shipping-address select[name=\'country_id\']').prop('disabled', true);
		},
		complete: function() {
			$('#collapse-shipping-address select[name=\'country_id\']').prop('disabled', false);
		},
		success: function(json) {
			if (json['postcode_required'] == '1') {
				$('#collapse-shipping-address input[name=\'postcode\']').parent().parent().addClass('required');
			} else {
				$('#collapse-shipping-address input[name=\'postcode\']').parent().parent().removeClass('required');
			}

			html = '<option value=""><?php echo @$text_select ?></option>';

			if (json['zone'] && json['zone'] != '') {
				for (i = 0; i < json['zone'].length; i++) {
					html += '<option value="' + json['zone'][i]['zone_id'] + '"';

					if (json['zone'][i]['zone_id'] == '<?php echo @$zone_id ?>') {
						html += ' selected="selected"';
					}

					html += '>' + json['zone'][i]['name'] + '</option>';
				}
			} else {
				html += '<option value="0" selected="selected"><?php echo @$text_none ?></option>';
			}

			$('#collapse-shipping-address select[name=\'zone_id\']').html(html);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

$('#collapse-shipping-address select[name=\'country_id\']').trigger('change');
//--></script>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/checkout/shipping_address.twig";
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
