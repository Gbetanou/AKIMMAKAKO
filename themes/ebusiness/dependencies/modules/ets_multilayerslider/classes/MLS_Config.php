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
class MLS_Config
{
    public $fields;
    
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
    public function __construct()
    {
        $this->setFields(Ets_multilayerslider::$configs);
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
                    'display_img' => isset($config['type']) && $config['type']=='file' && Configuration::get($key)!='' && @file_exists(dirname(__FILE__).'/../views/img/upload/'.Configuration::get($key)) ? $helper->module->modulePath().'views/img/upload/'.Configuration::get($key) : false,
                    'img_del_link' => isset($config['type']) && $config['type']=='file' && Configuration::get($key)!='' && @file_exists(dirname(__FILE__).'/../views/img/upload/'.Configuration::get($key)) ? $helper->module->baseAdminUrl().'&deleteimage='.$key.'&itemId='.$this->id.'&mls_object=MLS_'.Tools::ucfirst($fields_form['form']['name']) : false, 
                );
                if(isset($config['tree']) && $config['tree'])
                {
                    $confFields['tree'] = $config['tree'];
                    if(isset($config['tree']['use_checkbox']) && $config['tree']['use_checkbox'])
                        $confFields['tree']['selected_categories'] = explode(',',Configuration::get($key));
                    else
                        $confFields['tree']['selected_categories'] = array(Configuration::get($key));
                }                    
                if(!$confFields['suffix'])
                    unset($confFields['suffix']);                
                $fields_form['form']['input'][] = $confFields;
            }
        }      
        
		$helper->show_toolbar = false;
		$helper->table = false;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$this->fields_form = array();		
		$helper->identifier = 'mls_form_'.$this->fields['form']['name'];
		$helper->submit_action = 'save_'.$this->fields['form']['name'];
        $link = new Link();
		$helper->currentIndex = $link->getAdminLink('AdminModules', true).'&configure=ets_multilayerslider';
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));        
        $fields = array();        
        $languages = Language::getLanguages(false);
        $helper->override_folder = '/';        
        if(Tools::isSubmit('save_'.$this->fields['form']['name']))
        {            
            if($configs)
            {                
                foreach($configs as $key => $config)
                {
                    if(isset($config['lang']) && $config['lang'])
                        {                        
                            foreach($languages as $l)
                            {
                                $fields[$key][$l['id_lang']] = Tools::getValue($key.'_'.$l['id_lang'],isset($config['default']) ? $config['default'] : '');
                            }
                        }
                        else
                            $fields[$key] = Tools::getValue($key,isset($config['default']) ? $config['default'] : '');
                }
            }
        }
        else
        {
            if($configs)
            {
                    foreach($configs as $key => $config)
                    {
                        if(isset($config['lang']) && $config['lang'])
                        {                    
                            foreach($languages as $l)
                            {
                                $fields[$key][$l['id_lang']] = Configuration::get($key,$l['id_lang']);
                            }
                        }
                        else
                            $fields[$key] = Configuration::get($key);                   
                    }
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
            'mls_object' => 'MLS_'.Tools::ucfirst($fields_form['form']['name']),
            'image_baseurl' => $helper->module->modulePath().'views/img/',                  
        );        
        return str_replace(array('id="ets_mls_menu_form"','id="fieldset_0"'),'',$helper->generateForm(array($fields_form)));	
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
                        if(Configuration::get($key)=='' && (!isset($_FILES[$key]['size']) || isset($_FILES[$key]['size']) && !$_FILES[$key]['size']))
                            $errors[] = $config['label'].' '.Ets_multilayerslider::$trans['required_text'];
                        elseif(isset($_FILES[$key]['size']))
                        {
                            $fileSize = round((int)$_FILES[$key]['size'] / (1024 * 1024));
                			if($fileSize > 100)
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
        if(!$errors)
        {            
            if($configs)
            {
                foreach($configs as $key => $config)
                {
                    if(isset($config['lang']) && $config['lang'])
                    {
                        $valules = array();
                        foreach($languages as $lang)
                        {
                            if($config['type']=='switch')                                                           
                                $valules[$lang['id_lang']] = (int)trim(Tools::getValue($key.'_'.$lang['id_lang'])) ? 1 : 0;                                
                            else
                                $valules[$lang['id_lang']] = trim(Tools::getValue($key.'_'.$lang['id_lang'])) ? trim(Tools::getValue($key.'_'.$lang['id_lang'])) : trim(Tools::getValue($key.'_'.$id_lang_default));
                        }
                        Configuration::updateValue($key,$valules,true);
                    }
                    elseif($config['type']=='switch')
                    {                           
                        Configuration::updateValue($key,(int)Tools::getValue($key) ? 1 : 0);                                                      
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
                                        if(Configuration::get($key)!='')
                                        {
                                            $oldImage = dirname(__FILE__).'/../views/img/upload/'.Configuration::get($key);
                                            if(file_exists($oldImage))
                                                @unlink($oldImage);
                                        }  
                                        Configuration::updateValue($key,$imageName);
                                    }
                                }
                            }
                        }
                        //End upload file                       
                    }
                    elseif($config['type']=='categories' && isset($config['tree']['use_checkbox']) && $config['tree']['use_checkbox'] || $config['type']=='checkbox')
                        Configuration::updateValue($key,implode(',',Tools::getValue($key)));                                                   
                    else
                        Configuration::updateValue($key,Tools::getValue($key));   
                    }
                }
        }       
        if(!$errors)
        {
            $success[] = Ets_multilayerslider::$trans['data_saved'];
            if(Configuration::get('ETS_MLS_CACHE_ENABLED'))
                        Ets_multilayerslider::clearAllCache();
        }            
        return array('errors' => $errors, 'success' => $success);        
    }
    public function getConfig()
    {
        $configs = $this->fields['configs']; 
        $data = array();
        if($configs)
            foreach($configs as $key => $config)
            {
                $data[$key] = isset($config['lang']) && $config['lang'] ? Configuration::get($key,$this->context->lang) : Configuration::get($key);
            }
        return $data;
    }
    public function installConfigs()
    {
        $configs = $this->fields['configs']; 
        $languages = Language::getLanguages(false);
        if($configs)
            foreach($configs as $key => $config)
            {
                if(isset($config['lang']) && $config['lang'])
                {
                    $values = array();
                    foreach($languages as $lang)
                    {
                        $values[$lang['id_lang']] = isset($config['default']) ? $config['default'] : '';
                    }
                    Configuration::updateValue($key, $values,true);
                }
                else
                    Configuration::updateValue($key, isset($config['default']) ? $config['default'] : '',true);
            }
    } 
    public function unInstallConfigs()
    {
        if($this->fields['configs'])
        {
            foreach($this->fields['configs'] as $key => $config)
            {
                Configuration::deleteByName($key);
            }
            unset($config);
        } 
    }    
}