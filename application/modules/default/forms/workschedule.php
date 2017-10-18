<?php
/********************************************************************************* 
 *  This file is part of Sentrifugo.
 *  Copyright (C) 2014 Sapplica
 *   
 *  Sentrifugo is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  Sentrifugo is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with Sentrifugo.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  Sentrifugo Support <support@sentrifugo.com>
 ********************************************************************************/
class Default_Form_Workschedule extends Zend_Form
{
	public function init()
	{
		$this->setMethod('post');
		$this->setAttrib('id','workScheduleFrm');
		$this->setAttrib('name','workScheduleFrm');

		$businessunit_id = new Zend_Form_Element_Hidden('bunit_id');
    $department_id = new Zend_Form_Element_Hidden('dept_id');

    $businessunit_id = new Zend_Form_Element_Select('businessunit_id');
    $businessunit_id->setLabel("Business Unit");
 		$businessunit_id->setRequired(true);
		$businessunit_id->setRegisterInArrayValidator(false);
		$businessunit_id->addValidator('NotEmpty', false, array('messages' => 'Please select business unit.'));
                       
    $department_id = new Zend_Form_Element_Select('department_id');
    $department_id->setLabel("Department");
    $department_id->setRequired(true);
		$department_id->setRegisterInArrayValidator(false);
		$department_id->addMultiOptions(array('' => 'Select Department'));   
		$department_id->addValidator('NotEmpty', false, array('messages' => 'Please select department.'));
       
    $start_date = new ZendX_JQuery_Form_Element_DatePicker('startdate');
		$start_date->setAttrib('readonly', 'true');
		$start_date->setAttrib('onfocus', 'this.blur()');
		$start_date->setOptions(array('class' => 'brdr_none'));	
		$start_date->setRequired(true);
    $start_date->addValidator('NotEmpty', false, array('messages' => 'Please select start date.'));			
       
    $end_date = new ZendX_JQuery_Form_Element_DatePicker('enddate');
		$end_date->setAttrib('readonly', 'true');
		$end_date->setAttrib('onfocus', 'this.blur()');
		$end_date->setOptions(array('class' => 'brdr_none'));	
		$end_date->setRequired(true);
    $end_date->addValidator('NotEmpty', false, array('messages' => 'Please select end date.'));			
		$minexperiencerequired = new Zend_Form_Element_Text('minexperiencerequired');

    $sun_duration->setAttrib('maxLength', 2);
    $sun_duration->addFilter(new Zend_Filter_StringTrim());
		$sun_duration->addValidators(
			array(
				array(
					'validator'   => 'Regex',
					'breakChainOnFailure' => true,
					'options'     => array( 
						'pattern'=>'\b(0?[0-9]|1[0-9]|2[0-4])\b', 
						'messages' => array(
							'regexNotMatch'=>'Please enter value from 0 to 24.'
						)
					)
				)
			)
		); 

    $mon_duration->setAttrib('maxLength', 2);
    $mon_duration->addFilter(new Zend_Filter_StringTrim());
		$mon_duration->addValidators(
			array(
				array(
					'validator'   => 'Regex',
					'breakChainOnFailure' => true,
					'options'     => array( 
						'pattern'=>'\b(0?[0-9]|1[0-9]|2[0-4])\b', 
						'messages' => array(
							'regexNotMatch'=>'Please enter value from 0 to 24.'
						)
					)
				)
			)
		); 

    $tue_duration->setAttrib('maxLength', 2);
    $tue_duration->addFilter(new Zend_Filter_StringTrim());
		$tue_duration->addValidators(
			array(
				array(
					'validator'   => 'Regex',
					'breakChainOnFailure' => true,
					'options'     => array( 
						'pattern'=>'\b(0?[0-9]|1[0-9]|2[0-4])\b', 
						'messages' => array(
							'regexNotMatch'=>'Please enter value from 0 to 24.'
						)
					)
				)
			)
		); 

    $wed_duration->setAttrib('maxLength', 2);
    $wed_duration->addFilter(new Zend_Filter_StringTrim());
		$wed_duration->addValidators(
			array(
				array(
					'validator'   => 'Regex',
					'breakChainOnFailure' => true,
					'options'     => array( 
						'pattern'=>'\b(0?[0-9]|1[0-9]|2[0-4])\b', 
						'messages' => array(
							'regexNotMatch'=>'Please enter value from 0 to 24.'
						)
					)
				)
			)
		); 

    $thu_duration->setAttrib('maxLength', 2);
    $thu_duration->addFilter(new Zend_Filter_StringTrim());
		$thu_duration->addValidators(
			array(
				array(
					'validator'   => 'Regex',
					'breakChainOnFailure' => true,
					'options'     => array( 
						'pattern'=>'\b(0?[0-9]|1[0-9]|2[0-4])\b', 
						'messages' => array(
							'regexNotMatch'=>'Please enter value from 0 to 24.'
						)
					)
				)
			)
		); 

    $fri_duration->setAttrib('maxLength', 2);
    $fri_duration->addFilter(new Zend_Filter_StringTrim());
		$fri_duration->addValidators(
			array(
				array(
					'validator'   => 'Regex',
					'breakChainOnFailure' => true,
					'options'     => array( 
						'pattern'=>'\b(0?[0-9]|1[0-9]|2[0-4])\b', 
						'messages' => array(
							'regexNotMatch'=>'Please enter value from 0 to 24.'
						)
					)
				)
			)
		); 

    $sat_duration->setAttrib('maxLength', 2);
    $sat_duration->addFilter(new Zend_Filter_StringTrim());
		$sat_duration->addValidators(
			array(
				array(
					'validator'   => 'Regex',
					'breakChainOnFailure' => true,
					'options'     => array( 
						'pattern'=>'\b(0?[0-9]|1[0-9]|2[0-4])\b', 
						'messages' => array(
							'regexNotMatch'=>'Please enter value from 0 to 24.'
						)
					)
				)
			)
		); 

		$submitBtn = new Zend_Form_Element_Submit('submit');
		$submitBtn->setAttrib('id','submitbutton');
		$submitBtn->setLabel('Save');

		$this->addElements(array($businessunit_id,$department_id, $hr_manager,$l2_manager,  $sys_admin, $general_admin, $finance_manager,$notice_period,$submitBtn));
		$this->setElementDecorators(array('ViewHelper'));
	}
}
?>