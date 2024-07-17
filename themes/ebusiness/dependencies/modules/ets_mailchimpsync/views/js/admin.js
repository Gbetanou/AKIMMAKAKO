/*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

$(document).ready(function(){
    $('#product_autocomplete_input').autocomplete(ybc_featuredcat_ajax_url,{
		minChars: 1,
		autoFill: true,
		max:20,
		matchContains: true,
		mustMatch:true,
		scroll:false,
		cacheLength:0,
		formatItem: function(item) {
			return item[1]+' - '+item[0];
		}
	}).result(ybcAddAccessory);
    $('#product_autocomplete_input').setOptions({
		extraParams: {
			excludeIds : ybcGetAccessoriesIds(),
            token: mailchimp_admin_token,
		}
	});
});

function getFeaturedCatsOrders()
{
    var orderStr = 'reorder=yes';
    if($('.ybc_featuredcats_backend .ybc_fc_item').length > 0)
    {        
        var ik = 0;
        $('.ybc_featuredcats_backend .ybc_fc_item').each(function(){
            ik++;
            orderStr += '&sortcat['+$(this).attr('rel')+']='+ik;
        });
    }
    return orderStr;
}

function ybcGetAccessoriesIds()
{
    if ($('#inputAccessories').val() === undefined)
			return '';
		return $('#inputAccessories').val().replace(/\-/g,',');
}
var ybcAddAccessory = function(event, data, formatted)
{
	if (data == null)
		return false;
	var productId = data[1];
	var productName = data[0];

	var $divAccessories = $('#divAccessories');
	var $inputAccessories = $('#inputAccessories');
	var $nameAccessories = $('#nameAccessories');

	/* delete product from select + add product line to the div, input_name, input_ids elements */
    $divAccessories.html($divAccessories.html() + productName + ' <span onclick="ybcDelAccessory('+productId+')"; style="cursor: pointer;"><img src="../img/admin/delete.gif" /></span><br />');
	//$divAccessories.html($divAccessories.html() + '<div class="form-control-static"><button type="button" onclick="ybcDelAccessory('+productId+');" class="btn btn-default" name="' + productId + '"><i class="icon-remove text-danger"></i></button>&nbsp;'+ productName +'</div>');
	$nameAccessories.val($nameAccessories.val() + productName + '¤');
	$inputAccessories.val($inputAccessories.val() + productId + '-');
	$('#product_autocomplete_input').val('');
	$('#product_autocomplete_input').setOptions({
		extraParams: {excludeIds : ybcGetAccessoriesIds(),token: mailchimp_admin_token}
	});
};

function ybcDelAccessory(id)
{
	var div = getE('divAccessories');
	var input = getE('inputAccessories');
	var name = getE('nameAccessories');

	// Cut hidden fields in array
	var inputCut = input.value.split('-');
	var nameCut = name.value.split('¤');
	if (inputCut.length != nameCut.length)
        nameCut = name.value.split('*');
    if (inputCut.length != nameCut.length)
	   return jAlert('Bad size');

	// Reset all hidden fields
	input.value = '';
	name.value = '';
	div.innerHTML = '';
	for (i in inputCut)
	{
		// If empty, error, next
		if (!inputCut[i] || !nameCut[i])
			continue ;

		// Add to hidden fields no selected products OR add to select field selected product
		if (inputCut[i] != id)
		{
			input.value += inputCut[i] + '-';
			name.value += nameCut[i] + '¤';
			//div.innerHTML += '<div class="form-control-static"><button type="button"  onclick="ybcDelAccessory('+inputCut[i]+');"  class="btn btn-default" name="' + inputCut[i] +'"><i class="icon-remove text-danger"></i></button>&nbsp;' + nameCut[i] + '</div>';
            div.innerHTML += nameCut[i] + ' <span onclick="ybcDelAccessory('+inputCut[i]+');" style="cursor: pointer;"><img src="../img/admin/delete.gif" /></span><br />';
        }
		else
			$('#selectAccessories').append('<option selected="selected" value="' + inputCut[i] + '-' + nameCut[i] + '">' + inputCut[i] + ' - ' + nameCut[i] + '</option>');
	}

	$('#product_autocomplete_input').setOptions({
		extraParams: {excludeIds : ybcGetAccessoriesIds(),token: mailchimp_admin_token}
	});
};