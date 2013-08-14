<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * zebra_tab theme settings page
 *
 * @package    theme_zebra_tab
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    //This is the note box for all the settings pages
    $name = 'theme_zebra_tab/notes';
    $heading = get_string('notes', 'theme_zebra_tab');
    $information = get_string('notesdesc', 'theme_zebra_tab');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //This is the descriptor for the following header settings
    $name = 'theme_zebra_tab/headerinfo';
    $heading = get_string('headerinfo', 'theme_zebra_tab');
    $information = get_string('headerinfodesc', 'theme_zebra_tab');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set the path to the logo image
    $name = 'theme_zebra_tab/logourl';
    $title = get_string('logourl','theme_zebra_tab');
    $description = get_string('logourldesc', 'theme_zebra_tab');
    $default = 'logo/logos';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $settings->add($setting);

    //Set alternate text for headermain
    $name = 'theme_zebra_tab/headeralt';
    $title = get_string('headeralt','theme_zebra_tab');
    $description = get_string('headeraltdesc', 'theme_zebra_tab');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 20);
    $settings->add($setting);

    //Set body background image url
    $name = 'theme_zebra_tab/backgroundurl';
    $title = get_string('backgroundurl', 'theme_zebra_tab');
    $description = get_string('backgroundurldesc', 'theme_zebra_tab');
    $default = 'core/tab_bg';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $settings->add($setting);

    //Set the home icon display option
    $name = 'theme_zebra_tab/homeicon';
    $visiblename = get_string('homeicon', 'theme_zebra_tab');
    $title = get_string('homeicon', 'theme_zebra_tab');
    $description = get_string('homeicondesc', 'theme_zebra_tab');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);

    //Set the home icon display option
    $name = 'theme_zebra_tab/callink';
    $visiblename = get_string('callink', 'theme_zebra_tab');
    $title = get_string('callink', 'theme_zebra_tab');
    $description = get_string('callinkdesc', 'theme_zebra_tab');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);

    //Set the calendar link display option
    $name = 'theme_zebra_tab/dateformat';
    $title = get_string('dateformat', 'theme_zebra_tab');
    $description = get_string('dateformatdesc', 'theme_zebra_tab');
    $default = 'D jS M Y';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set the user profile picture display option
    $name = 'theme_zebra_tab/userpic';
    $visiblename = get_string('userpic', 'theme_zebra_tab');
    $title = get_string('userpic', 'theme_zebra_tab');
    $description = get_string('userpicdesc', 'theme_zebra_tab');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);

    //This is the descriptor for the following general color settings
    $name = 'theme_zebra_tab/colorsinfo';
    $heading = get_string('colorsinfo', 'theme_zebra_tab');
    $information = get_string('colorsinfodesc', 'theme_zebra_tab');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set body background color
    $name = 'theme_zebra_tab/bodybgcolor';
    $title = get_string('bodybgcolor','theme_zebra_tab');
    $description = get_string('bodybgcolordesc', 'theme_zebra_tab');
    $default = '#090103';
	$previewconfig = array('selector'=>'html', 'style'=>'backgroundColor');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set links and menu color
    $name = 'theme_zebra_tab/linkcolor';
    $title = get_string('linkcolor','theme_zebra_tab');
    $description = get_string('linkcolordesc', 'theme_zebra_tab');
    $default = '#234B6F';
	$previewconfig = array('selector'=>'a', 'style'=>'color');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set hovering color
    $name = 'theme_zebra_tab/hovercolor';
    $title = get_string('hovercolor','theme_zebra_tab');
    $description = get_string('hovercolordesc', 'theme_zebra_tab');
    $default = '#4E7BA3';
	$previewconfig = array('selector'=>'a:hover', 'style'=>'color');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set font color
    $name = 'theme_zebra_tab/fontcolor';
    $title = get_string('fontcolor','theme_zebra_tab');
    $description = get_string('fontcolordesc', 'theme_zebra_tab');
    $default = '#393939';
	$previewconfig = array('selector'=>'html', 'style'=>'color');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set main content background color
    $name = 'theme_zebra_tab/contentbgcolor';
    $title = get_string('contentbgcolor','theme_zebra_tab');
    $description = get_string('contentbgcolordesc', 'theme_zebra_tab');
    $default = '#F4F6F8';
	$previewconfig = array('selector'=>'#region-main', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set column background color
    $name = 'theme_zebra_tab/columnbgcolor';
    $title = get_string('columnbgcolor','theme_zebra_tab');
    $description = get_string('columnbgcolordesc', 'theme_zebra_tab');
    $default = '#F4F6F8';
	$previewconfig = array('selector'=>'#region-main', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set page-header background color
    $name = 'theme_zebra_tab/headerbgcolor';
    $title = get_string('headerbgcolor','theme_zebra_tab');
    $description = get_string('headerbgcolordesc', 'theme_zebra_tab');
    $default = 'transparent';
	$previewconfig = array('selector'=>'#page-header-wrapper', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set page-footer background color
    $name = 'theme_zebra_tab/footerbgcolor';
    $title = get_string('footerbgcolor','theme_zebra_tab');
    $description = get_string('footerbgcolordesc', 'theme_zebra_tab');
    $default = 'transparent';
	$previewconfig = array('selector'=>'#page-footer', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set border color
    $name = 'theme_zebra_tab/bordercolor';
    $title = get_string('bordercolor','theme_zebra_tab');
    $description = get_string('bordercolordesc', 'theme_zebra_tab');
    $default = '#DDD';
	$previewconfig = array('selector'=>'#page-footer', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //This is the descriptor for the following Moodle color settings
    $name = 'theme_zebra_tab/moodlecolorsinfo';
    $heading = get_string('moodlecolorsinfo', 'theme_zebra_tab');
    $information = get_string('moodlecolorsinfodesc', 'theme_zebra_tab');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set calendar course events color
    $name = 'theme_zebra_tab/calcourse';
    $title = get_string('calcourse','theme_zebra_tab');
    $description = get_string('calcoursedesc', 'theme_zebra_tab');
    $default = '#FFD3BD';
	$previewconfig = array('selector'=>'.calendar_event_course', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set calendar global events color
    $name = 'theme_zebra_tab/calglobal';
    $title = get_string('calglobal','theme_zebra_tab');
    $description = get_string('calglobaldesc', 'theme_zebra_tab');
    $default = '#D6F8CD';
	$previewconfig = array('selector'=>'.calendar_event_global', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set calendar group events color
    $name = 'theme_zebra_tab/calgroup';
    $title = get_string('calgroup','theme_zebra_tab');
    $description = get_string('calgroupdesc', 'theme_zebra_tab');
    $default = '#FEE7AE';
	$previewconfig = array('selector'=>'.calendar_event_group', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set calendar user events color
    $name = 'theme_zebra_tab/caluser';
    $title = get_string('caluser','theme_zebra_tab');
    $description = get_string('caluserdesc', 'theme_zebra_tab');
    $default = '#DCE7EC';
	$previewconfig = array('selector'=>'.calendar_event_user', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set calendar weekend color
    $name = 'theme_zebra_tab/calweekend';
    $title = get_string('calweekend','theme_zebra_tab');
    $description = get_string('calweekenddesc', 'theme_zebra_tab');
    $default = '#A00';
	$previewconfig = array('selector'=>'td.weekend', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set OK font color
    $name = 'theme_zebra_tab/okfontcolor';
    $title = get_string('okfontcolor','theme_zebra_tab');
    $description = get_string('okfontcolordesc', 'theme_zebra_tab');
    $default = '#060';
	$previewconfig = array('selector'=>'.backup-ok', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set warning font color
    $name = 'theme_zebra_tab/warningfontcolor';
    $title = get_string('warningfontcolor','theme_zebra_tab');
    $description = get_string('warningfontcolordesc', 'theme_zebra_tab');
    $default = '#F0E000';
	$previewconfig = array('selector'=>'.statuswarning', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set serious font color
    $name = 'theme_zebra_tab/seriousfontcolor';
    $title = get_string('seriousfontcolor','theme_zebra_tab');
    $description = get_string('seriousfontcolordesc', 'theme_zebra_tab');
    $default = '#F07000';
	$previewconfig = array('selector'=>'.statusserious', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //Set critical font color
    $name = 'theme_zebra_tab/criticalfontcolor';
    $title = get_string('criticalfontcolor','theme_zebra_tab');
    $description = get_string('criticalfontcolordesc', 'theme_zebra_tab');
    $default = '#F00000';
	$previewconfig = array('selector'=>'.statuscritical', 'style'=>'background');
	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    //This is the descriptor for the following color scheme settings
    $name = 'theme_zebra_tab/schemeinfo';
    $heading = get_string('schemeinfo', 'theme_zebra_tab');
    $information = get_string('schemeinfodesc', 'theme_zebra_tab');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set gradient style for blocks, navbar, etc...
    $name = 'theme_zebra_tab/colorscheme';
    $title = get_string('colorscheme','theme_zebra_tab');
    $description = get_string('colorschemedesc', 'theme_zebra_tab');
    $default = 'dark';
    $choices = array('none'=>get_string('schemenone', 'theme_zebra_tab'), 'dark'=>get_string('schemedark', 'theme_zebra_tab'), 'light'=>get_string('schemelight', 'theme_zebra_tab'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    //Set gradient style for custommenu
    $name = 'theme_zebra_tab/menucolorscheme';
    $title = get_string('menucolorscheme','theme_zebra_tab');
    $description = get_string('menucolorschemedesc', 'theme_zebra_tab');
    $default = 'light';
    $choices = array('none'=>get_string('schemenone', 'theme_zebra_tab'), 'dark'=>get_string('schemedark', 'theme_zebra_tab'), 'light'=>get_string('schemelight', 'theme_zebra_tab'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    //This is the descriptor for the following page layout settings
    $name = 'theme_zebra_tab/columninfo';
    $heading = get_string('columninfo', 'theme_zebra_tab');
    $information = get_string('columninfodesc', 'theme_zebra_tab');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set min width for two column layout
    $name = 'theme_zebra_tab/twocolmin';
    $title = get_string('twocolmin','theme_zebra_tab');
    $description = get_string('twocolmindesc', 'theme_zebra_tab');
    $default = '601px';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 5);
    $settings->add($setting);

    //Set min width for three column layout
    $name = 'theme_zebra_tab/threecolmin';
    $title = get_string('threecolmin','theme_zebra_tab');
    $description = get_string('threecolmindesc', 'theme_zebra_tab');
    $default = '801px';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 5);
    $settings->add($setting);

    //Set max width for page content
    $name = 'theme_zebra_tab/pagemaxwidth';
    $title = get_string('pagemaxwidth','theme_zebra_tab');
    $description = get_string('pagemaxwidthdesc', 'theme_zebra_tab');
    $default = '1200px';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 5);
    $settings->add($setting);

    //Set whether or not to use the simple login layout
    $name = 'theme_zebra_tab/simplelogin';
    $visiblename = get_string('simplelogin', 'theme_zebra_tab');
    $title = get_string('simplelogin', 'theme_zebra_tab');
    $description = get_string('simplelogindesc', 'theme_zebra_tab');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 0);
    $settings->add($setting);

    //Set column width for region-pre and region-post
    $name = 'theme_zebra_tab/colwidth';
    $title = get_string('colwidth','theme_zebra_tab');
    $description = get_string('colwidthdesc','theme_zebra_tab');
    $default = '200px';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 5);
    $settings->add($setting);

    //This is the descriptor for the following browser compatibility settings
    $name = 'theme_zebra_tab/compatibilityinfo';
    $heading = get_string('compatinfo', 'theme_zebra_tab');
    $information = get_string('compatinfodesc', 'theme_zebra_tab');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Enable inclusion of respond.js in the footer
    $name = 'theme_zebra_tab/userespond';
    $visiblename = get_string('userespond', 'theme_zebra_tab');
    $title = get_string('userespond', 'theme_zebra_tab');
    $description = get_string('useresponddesc', 'theme_zebra_tab');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);

    //Enable prompt of Google Chrome Frame
    $name = 'theme_zebra_tab/usecf';
    $visiblename = get_string('usecf', 'theme_zebra_tab');
    $title = get_string('usecf', 'theme_zebra_tab');
    $description = get_string('usecfdesc', 'theme_zebra_tab');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);

    //Set maximum version for Chrome Frome prompt
    $name = 'theme_zebra_tab/cfmaxversion';
    $title = get_string('cfmaxversion','theme_zebra_tab');
    $description = get_string('cfmaxversiondesc', 'theme_zebra_tab');
    $default = 'ie6';
    $choices = array('ie6'=>'6', 'ie7'=>'7', 'ie8'=>'8');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    //This is the descriptor for the following miscellaneous settings
    $name = 'theme_zebra_tab/miscinfo';
    $heading = get_string('miscinfo', 'theme_zebra_tab');
    $information = get_string('miscinfodesc', 'theme_zebra_tab');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Include the Autohide css rules
    $name = 'theme_zebra_tab/useautohide';
    $visiblename = get_string('useautohide', 'theme_zebra_tab');
    $title = get_string('useautohide', 'theme_zebra_tab');
    $description = get_string('useautohidedesc', 'theme_zebra_tab');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 0);
    $settings->add($setting);

    //Set custom css for theme
    $name = 'theme_zebra_tab/customcss';
    $title = get_string('customcss', 'theme_zebra_tab');
    $description = get_string('customcssdesc', 'theme_zebra_tab');
    $setting = new admin_setting_configtextarea($name, $title, $description, null);
    $settings->add($setting);
    
    //Set custom JS for theme
    $name = 'theme_zebra_tab/customjs';
    $title = get_string('customjs', 'theme_zebra_tab');
    $description = get_string('customjsdesc', 'theme_zebra_tab');
    $setting = new admin_setting_configtextarea($name, $title, $description, null);
    $settings->add($setting);

    //Display branded footer logos
    $name = 'theme_zebra_tab/branding';
    $visiblename = get_string('branding', 'theme_zebra_tab');
    $title = get_string('branding', 'theme_zebra_tab');
    $description = get_string('brandingdesc', 'theme_zebra_tab');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);
    
    //Beg for money
    $name = 'theme_zebra_tab/donate';
    $heading = get_string('donate', 'theme_zebra_tab');
    $information = get_string('donatedesc', 'theme_zebra_tab');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
}