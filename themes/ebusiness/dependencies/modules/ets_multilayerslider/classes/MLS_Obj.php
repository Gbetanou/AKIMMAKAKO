<?php
/**
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  @version  Release: $Revision$
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;
class MLS_Obj extends ObjectModel
{
    public $fields;
    
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
    public function renderForm()
    {
        $helper = new HelperForm();
        $helper->module = new Ets_multilayerslider();
        $configs = $this->fields['configs'];
        $fields_form = array();
        $fields_form['form'] = $this->fields['form'];               
        if($configs)
        {
            foreach($configs as $key => $config)
            {                
                if(isset($config['type']) && in_array($config['type'],array('sort_order')))
                    continue;
                $confFields = array(
                    'name' => $key,
                    'type' => $config['type'],
                    'label' => $config['label'],
                    'desc' => isset($config['desc']) ? $config['desc'] : false,
                    'required' => isset($config['required']) && $config['required'] ? true : false,
                    'autoload_rte' => isset($config['autoload_rte']) && $config['autoload_rte'] ? true : false,
                    'options' => isset($config['options']) && $config['options'] ? $config['options'] : array(),
                    'suffix' => isset($config['suffix']) && $config['suffix'] ? $config['suffix']  : false,
                    'values' => isset($config['values']) ? $config['values'] : false,
                    'lang' => isset($config['lang']) ? $config['lang'] : false,
                    'hide_delete' => isset($config['hide_delete']) ? $config['hide_delete'] : false,
                    'display_img' => $this->id && isset($config['type']) && $config['type']=='file' && $this->$key!='' && @file_exists(dirname(__FILE__).'/../views/img/upload/'.$this->$key) ? $helper->module->modulePath().'views/img/upload/'.$this->$key : false,
                    'img_del_link' => $this->id && isset($config['type']) && $config['type']=='file' && $this->$key!='' && @file_exists(dirname(__FILE__).'/../views/img/upload/'.$this->$key) ? $helper->module->baseAdminUrl().'&deleteimage='.$key.'&itemId='.$this->id.'&mls_object=MLS_'.Tools::ucfirst($fields_form['form']['name']) : false, 
                );
                if(isset($config['tree']) && $config['tree'])
                {
                    $confFields['tree'] = $config['tree'];
                    if(isset($config['tree']['use_checkbox']) && $config['tree']['use_checkbox'])
                        $confFields['tree']['selected_categories'] = explode(',',$this->$key);
                    else
                        $confFields['tree']['selected_categories'] = array($this->$key);
                }                    
                if(!$confFields['suffix'])
                    unset($confFields['suffix']);                
                $fields_form['form']['input'][] = $confFields;
            }
        }        
        
		$helper->show_toolbar = false;
		$helper->table = $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$this->fields_form = array();		
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'save_'.$this->fields['form']['name'];
        $link = new Link();
		$helper->currentIndex = $link->getAdminLink('AdminModules', true).'&configure=ets_multilayerslider';
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $fields = array();        
        $languages = Language::getLanguages(false);
        $helper->override_folder = '/';        
        if($configs)
        {
                foreach($configs as $key => $config)
                {
                    
                    if($config['type']=='checkbox')
                        $fields[$key] = $this->id ? explode(',',$this->$key) : (isset($config['default']) && $config['default'] ? $config['default'] : array());
                    elseif(isset($config['lang']) && $config['lang'])
                    {                    
                        foreach($languages as $l)
                        {
                            $temp = $this->$key;
                            $fields[$key][$l['id_lang']] = $this->id ? $temp[$l['id_lang']] : (isset($config['default']) ? $config['default'] : null);
                        }
                    }
                    elseif(!isset($config['tree']))
                        $fields[$key] = $this->id ? $this->$key : (isset($config['default']) ? $config['default'] : null);                            
                }
        }
           
        $helper->tpl_vars = array(
			'base_url' => Context::getContext()->shop->getBaseURL(),
			'language' => array(
				'id_lang' => $language->id,
				'iso_code' => $language->iso_code
			),
			'fields_value' => $fields,
			'languages' => Context::getContext()->controller->getLanguages(),
			'id_language' => Context::getContext()->language->id, 
            'key_name' => 'id_'.$fields_form['form']['name'],
            'item_id' => $this->id,  
            'mls_object' => 'MLS_'.Tools::ucfirst($fields_form['form']['name']),
            'list_item' => true,
            'image_baseurl' => $helper->module->modulePath().'views/img/',                  
        );        
        return str_replace(array('id="ets_mls_menu_form"','id="fieldset_0"'),'',$helper->generateForm(array($fields_form)));	
    }
    public function getFieldVals()
    {
        if(!$this->id)
            return array();
        $vals = array();
        foreach($this->fields['configs'] as $key => $config)
        {
            if(property_exists($this,$key))
                $vals[$key] = $this->$key;
        }
        $vals['id_'.$this->fields['form']['name']] = (int)$this->id;
        unset($config);
        return $vals;
    }
    public function clearImage($image)
    {
        $configs = $this->fields['configs'];  
        $errors = array();
        $success = array();
        if(!$this->id)
            $errors[] = Ets_multilayerslider::$trans['object_empty'];
        elseif(!isset($configs[$image]['type']) || isset($configs[$image]['type']) && $configs[$image]['type']!='file')
            $errors[] = Ets_multilayerslider::$trans['field_not_valid'];
        elseif(isset($configs[$image]) && !isset($configs[$image]['required']) || (isset($configs[$image]['required']) && !$configs[$image]['required']))
        {
            $imageName = $this->$image;
            $imagePath = dirname(__FILE__).'/../views/img/upload/'.$imageName;
            if($imageName && file_exists($imagePath))
            {
                @unlink($imagePath);
                $this->$image = '';
                if($this->update())
                {
                    $success[] = Ets_multilayerslider::$trans['image_deleted'];
                }                    
                else
                    $errors[] = Ets_multilayerslider::$trans['unkown_error'];
            }
        }
        else
            $errors[] = $configs[$image]['label']. Ets_multilayerslider::$trans['required_text'];
        return array('errors' => $errors,'success' => $success);
    }
    public function deleteObj()
    {        
        $errors = array();
        $success = array();
        $configs = $this->fields['configs'];
        $images = array();
        foreach($configs as $key => $config)
        {
            if($config['type']=='file' && $this->$key && @file_exists(dirname(__FILE__).'/../views/img/upload/'.$this->$key))
                $images[] = dirname(__FILE__).'/../views/img/upload/'.$this->$key;
        }        
        if(!$this->delete())
            $errors[] = Ets_multilayerslider::$trans['cannot_delete'];
        else
        {
            foreach($images as $image)
                @unlink($image);
            $success[] = Ets_multilayerslider::$trans['item_deleted'];
            if(isset($configs['sort_order']) && $configs['sort_order'])
            {
                Db::getInstance()->execute("
                    UPDATE "._DB_PREFIX_."ets_mls_".pSQL($this->fields['form']['name'])."
                    SET sort_order=sort_order-1 
                    WHERE sort_order>".(int)$this->sort_order." ".(isset($configs['sort_order']['order_group']) && ($orderGroup = $configs['sort_order']['order_group']) ? " AND ".pSQL($orderGroup)."=".(int)$this->$orderGroup : "")."
                ");
            }
            if($this->id && isset($this->fields['form']['connect_to']) && $this->fields['form']['connect_to'] 
                && ($subs = Db::getInstance()->executeS("SELECT id_".pSQL($this->fields['form']['connect_to'])." FROM "._DB_PREFIX_."ets_mls_".pSQL($this->fields['form']['connect_to']). " WHERE id_".$this->fields['form']['name']."=".(int)$this->id)))
            {
                foreach($subs as $sub)
                {
                    $className = 'MLS_'.Tools::ucfirst(Tools::strtolower($this->fields['form']['connect_to']));
                    if(class_exists($className))
                    {
                        $obj = new $className((int)$sub['id_'.$this->fields['form']['connect_to']]);
                        $obj->deleteObj();
                    }                    
                }
            }
        }            
        return array('errors' => $errors,'success' => $success);
    }
    public function maxVal($key,$group = false, $groupval=0)
    {  
       return ($max = Db::getInstance()->getValue("SELECT max(".pSQL($key).") FROM "._DB_PREFIX_."ets_mls_".$this->fields['form']['name'].($group && ($groupval > 0) ? " WHERE ".pSQL($group)."=".(int)$groupval : ''))) ? (int)$max : 0;
    }   
    public function updateOrder($previousId = 0, $groupdId = 0)
    {        
        $group = isset($this->fields['configs']['sort_order']['order_group']) && $this->fields['configs']['sort_order']['order_group'] ? $this->fields['configs']['sort_order']['order_group'] : false;
        if(!$groupdId && $group)
            $groupdId = $this->$group;
        $oldOrder = $this->sort_order;
        if($group && $groupdId && property_exists($this,$group) && $this->$group != $groupdId)
        {            
            Db::getInstance()->execute("
                    UPDATE "._DB_PREFIX_."ets_mls_".pSQL($this->fields['form']['name'])."
                    SET sort_order=sort_order-1 
                    WHERE sort_order>".(int)$this->sort_order." AND id_".pSQL($this->fields['form']['name'])."!=".(int)$this->id."
                          ".($group && $groupdId ? " AND ".pSQL($group)."=".(int)$this->$group : ""));
            $this->$group = $groupdId;
            $changeGroup = true;
        }
        else
            $changeGroup = false;                    
        if($previousId > 0)
        {
            $objName = 'MLS_'.Tools::ucfirst($this->fields['form']['name']);
            $obj = new $objName($previousId);
            if($obj->sort_order > 0)
                $this->sort_order = $obj->sort_order+1;
            else
                $this->sort_order = 1;
        }
        else
            $this->sort_order = 1;
        if($this->update())
        {    
            
            Db::getInstance()->execute("
                    UPDATE "._DB_PREFIX_."ets_mls_".pSQL($this->fields['form']['name'])."
                    SET sort_order=sort_order+1 
                    WHERE sort_order>=".(int)$this->sort_order." AND id_".$this->fields['form']['name']."!=".(int)$this->id."
                          ".($group && $groupdId ? " AND ".pSQL($group)."=".(int)$this->$group : ""));
            
            if(!$changeGroup && $this->sort_order!=$oldOrder)
            {                
                
                $rs = Db::getInstance()->execute("
                        UPDATE "._DB_PREFIX_."ets_mls_".pSQL($this->fields['form']['name'])."
                        SET sort_order=sort_order-1
                        WHERE sort_order>".($this->sort_order > $oldOrder ? (int)($oldOrder) : (int)($oldOrder+1)).($group && $groupdId ? " AND ".pSQL($group)."=".(int)$this->$group : ""));
                if(Configuration::get('ETS_MLS_CACHE_ENABLED'))
                    Ets_multilayerslider::clearAllCache(); 
                return $rs;
            }
            if(Configuration::get('ETS_MLS_CACHE_ENABLED'))
                Ets_multilayerslider::clearAllCache();  
            return true;
        }               
        return false;       
    }
    public function saveData()
    {
        $errors = array();
        $success = array();
        $languages = Language::getLanguages(false);
        $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
        $configs = $this->fields['configs'];       
        if($configs)
        {
            foreach($configs as $key => $config)
            {
                if($config['type']=='sort_order')
                    continue;
                if(isset($config['lang']) && $config['lang'])
                {
                    if(isset($config['required']) && $config['required'] && $config['type']!='switch' && trim(Tools::getValue($key.'_'.$id_lang_default) == ''))
                    {
                        $errors[] = $config['label'].' '.Ets_multilayerslider::$trans['required_text'];
                    }                        
                }
                else
                {
                    if(isset($config['required']) && $config['required'] && isset($config['type']) && $config['type']=='file')
                    {                       
                        if($this->$key=='' && !isset($_FILES[$key]['size']))
                            $errors[] = $config['label'].' '.Ets_multilayerslider::$trans['required_text'];
                        elseif(isset($_FILES[$key]['size']))
                        {
                            $fileSize = round((int)$_FILES[$key]['size'] / (1024 * 1024));
                			if($fileSize > 1000)
                                $errors[] = $config['label'].' '.Ets_multilayerslider::$trans['file_too_large'];
                        }   
                    }
                    else
                    {
                        if(isset($config['required']) && $config['required'] && $config['type']!='switch' && trim(Tools::getValue($key) == ''))
                        {
                            $errors[] = $config['label'].' '.Ets_multilayerslider::$trans['required_text'];
                        }
                        elseif(!is_array(Tools::getValue($key)) && isset($config['validate']) && method_exists('Validate',$config['validate']))
                        {
                            $validate = $config['validate'];
                            if(trim(Tools::getValue($key)) && !Validate::$validate(trim(Tools::getValue($key))))
                                $errors[] = $config['label'].' '.Ets_multilayerslider::$trans['invalid_text'];
                            unset($validate);
                        }
                        elseif(!Validate::isCleanHtml(trim(Tools::getValue($key))))
                        {
                            $errors[] = $config['label'].' '.Ets_multilayerslider::$trans['required_text'];
                        } 
                    }                          
                }                    
            }
        }            
        
        //Custom validation
        if($this->fields['form']['name']=='layer')
        {
            switch(Tools::getValue('layer_type'))
            {
                case 'text':
                    if(trim(Tools::getValue('content_layer_'.$id_lang_default))=='')
                        $errors[] = Ets_multilayerslider::$trans['content_required_text'];
                    break;
                case 'button':
                    if(trim(Tools::getValue('content_layer_'.$id_lang_default))=='')
                        $errors[] = Ets_multilayerslider::$trans['content_required_text'];
                    if(trim(Tools::getValue('link_'.$id_lang_default))=='')
                        $errors[] = Ets_multilayerslider::$trans['link_required_text'];
                    break;
                case 'text_background':
                    if(trim(Tools::getValue('content_layer_'.$id_lang_default))=='')
                        $errors[] = Ets_multilayerslider::$trans['content_required_text'];
                    break;
                case 'link':
                    if(trim(Tools::getValue('content_layer_'.$id_lang_default))=='')
                        $errors[] = Ets_multilayerslider::$trans['content_required_text'];
                    if(trim(Tools::getValue('link_'.$id_lang_default))=='')
                        $errors[] = Ets_multilayerslider::$trans['link_required_text'];
                    break;
                case 'image':
                    if($this->image=='' && (!isset($_FILES['image']['size']) || isset($_FILES['image']['size']) && !$_FILES['image']['size']))
                        $errors[] = Ets_multilayerslider::$trans['image_required_text'];
                    break;
                default:
                    $errors[] = Ets_multilayerslider::$trans['layer_type_not_valid'];
                    break;
            }
        }        
        if(!$errors)
        {            
            if($configs)
            {
                foreach($configs as $key => $config)
                {
                    if(isset($config['type']) && $config['type']=='sort_order')
                    {
                        if(!$this->id)
                        {
                            if(!isset($config['order_group']) || isset($config['order_group']) && !$config['order_group'])
                                $this->$key = $this->maxVal($key)+1;
                            else
                            {
                                $orderGroup = $config['order_group'];
                                $this->$key = $this->maxVal($key,$orderGroup,(int)$this->$orderGroup)+1;
                            }                                                         
                        }
                    }
                    elseif(isset($config['lang']) && $config['lang'])
                    {
                        $valules = array();
                        foreach($languages as $lang)
                        {
                            if($config['type']=='switch')                                                           
                                $valules[$lang['id_lang']] = (int)trim(Tools::getValue($key.'_'.$lang['id_lang'])) ? 1 : 0;                                
                            else
                                $valules[$lang['id_lang']] = trim(Tools::getValue($key.'_'.$lang['id_lang'])) ? trim(Tools::getValue($key.'_'.$lang['id_lang'])) : trim(Tools::getValue($key.'_'.$id_lang_default));
                        }
                        $this->$key = $valules;
                    }
                    elseif($config['type']=='switch')
                    {                           
                        $this->$key = (int)Tools::getValue($key) ? 1 : 0;                                                      
                    }
                    elseif($config['type']=='file')
                    {
                        //Upload file
                        if(isset($_FILES[$key]['tmp_name']) && isset($_FILES[$key]['name']) && $_FILES[$key]['name'])
                        {
                            $salt = Tools::substr(sha1(microtime()),0,10);
                            $type = Tools::strtolower(Tools::substr(strrchr($_FILES[$key]['name'], '.'), 1));
                            $imageName = @file_exists(dirname(__FILE__).'/../views/img/upload/'.Tools::strtolower($_FILES[$key]['name'])) ? $salt.'-'.Tools::strtolower($_FILES[$key]['name']) : Tools::strtolower($_FILES[$key]['name']);
                            $fileName = dirname(__FILE__).'/../views/img/upload/'.$imageName;                
                            if(file_exists($fileName))
                            {
                                $errors[] = $config['label'].' '.Ets_multilayerslider::$trans['file_existed'];
                            }
                            else
                            {                                    
                    			$imagesize = @getimagesize($_FILES[$key]['tmp_name']);                                    
                                if (!$errors && isset($_FILES[$key]) &&				
                    				!empty($_FILES[$key]['tmp_name']) &&
                    				!empty($imagesize) &&
                    				in_array($type, array('jpg', 'gif', 'jpeg', 'png'))
                    			)
                    			{
                    				$temp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');    				
                    				if ($error = ImageManager::validateUpload($_FILES[$key]))
                    					$errors[] = $error;
                    				elseif (!$temp_name || !move_uploaded_file($_FILES[$key]['tmp_name'], $temp_name))
                    					$errors[] = Ets_multilayerslider::$trans['can_not_upload'];
                    				elseif (!ImageManager::resize($temp_name, $fileName, null, null, $type))
                    					$errors[] = Ets_multilayerslider::$trans['upload_error_occurred'];
                    				if (isset($temp_name))
                    					@unlink($temp_name);
                                    if(!$errors)
                                    {
                                        if($this->$key!='')
                                        {
                                            $oldImage = dirname(__FILE__).'/../views/img/upload/'.$this->$key;
                                            if(file_exists($oldImage))
                                                @unlink($oldImage);
                                        }  
                                        $this->$key = $imageName;
                                    }
                                }
                            }
                        }
                        //End upload file                       
                    }
                    elseif($config['type']=='categories' && isset($config['tree']['use_checkbox']) && $config['tree']['use_checkbox'] || $config['type']=='checkbox')
                        $this->$key = implode(',',Tools::getValue($key));                                                   
                    else
                        $this->$key = trim(Tools::getValue($key));   
                    }
                }
        }        
        if (!count($errors))
        {               
           if($this->id && $this->update() || !$this->id && $this->add())
           {
                if(Configuration::get('ETS_MLS_CACHE_ENABLED'))
                    Ets_multilayerslider::clearAllCache();
                $success[] = Ets_multilayerslider::$trans['data_saved'];
           }                
           else
                $errors[] = Ets_multilayerslider::$trans['unkown_error'];
        }
        return array('errors' => $errors, 'success' => $success);        
    }
    public function duplicateItem($id_parent = false)
    {
        $oldId = $this->id;
        $this->id = null;  
        if($id_parent && isset($this->fields['form']['parent']) && ($parent = 'id_'.$this->fields['form']['parent']) && property_exists($this,$parent))
            $this->$parent = $id_parent;
        if(property_exists($this,'sort_order'))
        {
            if(!isset($this->fields['configs']['sort_order']['order_group']) || isset($this->fields['configs']['sort_order']['order_group']) && !$this->fields['configs']['sort_order']['order_group'])
                $this->sort_order = $this->maxVal('sort_order')+1;
            else
            {
                $tempName = $this->fields['configs']['sort_order']['order_group'];
                $this->sort_order = $this->maxVal('sort_order',$tempName,(int)$this->$tempName)+1;
                $groupId = $this->$tempName;
            }  
            $oldOrder = $this->sort_order;              
        }
        if(property_exists($this,'image') && $this->image && file_exists(dirname(__FILE__).'/../views/img/upload/'.$this->image))
        {
            $salt = $this->maxVal('id_'.$this->fields['form']['name'])+1;
            $oldImage = dirname(__FILE__).'/../views/img/upload/'.$this->image;
            $this->image = $salt.'_'.$this->image;            
        }
        if($this->add())
        {
            if(isset($oldImage) && $oldImage)
            {
                @copy($oldImage,dirname(__FILE__).'/../views/img/upload/'.$this->image);
            }
            if(isset($oldOrder) && $oldOrder)
                $this->updateOrder($oldId,isset($groupId) ? (int)$groupId : 0);  
            if(isset($this->fields['form']['connect_to']) && $this->fields['form']['connect_to']
                && ($subs = Db::getInstance()->executeS("SELECT id_".pSQL($this->fields['form']['connect_to'])." FROM "._DB_PREFIX_."ets_mls_".pSQL($this->fields['form']['connect_to']). " WHERE id_".$this->fields['form']['name']."=".(int)$oldId)))
            {
                foreach($subs as $sub)
                {
                    $className = 'MLS_'.Tools::ucfirst(Tools::strtolower($this->fields['form']['connect_to']));
                    if(class_exists($className))
                    {
                        $obj = new $className((int)$sub['id_'.$this->fields['form']['connect_to']]);
                        $obj->duplicateItem($this->id);
                    }                    
                }
            }
            return $this;
        }
        return false;
    }     
}