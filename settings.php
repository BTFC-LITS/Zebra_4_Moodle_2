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
 * blearning theme settings page
 *
 * @package    theme_blearning
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    //This is the note box for all the settings pages
    $name = 'theme_blearning/notes';
    $heading = get_string('notes', 'theme_blearning');
    $information = get_string('notesdesc', 'theme_blearning');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //This is the descriptor for the following header settings
    $name = 'theme_blearning/headerinfo';
    $heading = get_string('headerinfo', 'theme_blearning');
    $information = get_string('headerinfodesc', 'theme_blearning');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set the path to the logo image
    $name = 'theme_blearning/logourl';
    $title = get_string('logourl','theme_blearning');
    $description = get_string('logourldesc', 'theme_blearning');
    $default = 'logo/logo';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $settings->add($setting);

    //Set alternate text for headermain
    $name = 'theme_blearning/headeralt';
    $title = get_string('headeralt','theme_blearning');
    $description = get_string('headeraltdesc', 'theme_blearning');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 20);
    $settings->add($setting);

    //Set body background image url
    $name = 'theme_blearning/backgroundurl';
    $title = get_string('backgroundurl', 'theme_blearning');
    $description = get_string('backgroundurldesc', 'theme_blearning');
    $default = 'core/background';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $settings->add($setting);

    //Set the home icon display option
    $name = 'theme_blearning/homeicon';
    $visiblename = get_string('homeicon', 'theme_blearning');
    $title = get_string('homeicon', 'theme_blearning');
    $description = get_string('homeicondesc', 'theme_blearning');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);

    //Set the home icon display option
    $name = 'theme_blearning/callink';
    $visiblename = get_string('callink', 'theme_blearning');
    $title = get_string('callink', 'theme_blearning');
    $description = get_string('callinkdesc', 'theme_blearning');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);

    //Set the calendar link display option
    $name = 'theme_blearning/dateformat';
    $title = get_string('dateformat', 'theme_blearning');
    $description = get_string('dateformatdesc', 'theme_blearning');
    $default = 'F j, Y';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set the user profile picture display option
    $name = 'theme_blearning/userpic';
    $visiblename = get_string('userpic', 'theme_blearning');
    $title = get_string('userpic', 'theme_blearning');
    $description = get_string('userpicdesc', 'theme_blearning');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);

    //This is the descriptor for the following general color settings
    $name = 'theme_blearning/colorsinfo';
    $heading = get_string('colorsinfo', 'theme_blearning');
    $information = get_string('colorsinfodesc', 'theme_blearning');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set body background color
    $name = 'theme_blearning/bodybgcolor';
    $title = get_string('bodybgcolor','theme_blearning');
    $description = get_string('bodybgcolordesc', 'theme_blearning');
    $default = '#DDD';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set links and menu color
    $name = 'theme_blearning/linkcolor';
    $title = get_string('linkcolor','theme_blearning');
    $description = get_string('linkcolordesc', 'theme_blearning');
    $default = '#234B6F';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set hovering color
    $name = 'theme_blearning/hovercolor';
    $title = get_string('hovercolor','theme_blearning');
    $description = get_string('hovercolordesc', 'theme_blearning');
    $default = '#4E7BA3';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set font color
    $name = 'theme_blearning/fontcolor';
    $title = get_string('fontcolor','theme_blearning');
    $description = get_string('fontcolordesc', 'theme_blearning');
    $default = '#2F2F2F';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set main content background color
    $name = 'theme_blearning/contentbgcolor';
    $title = get_string('contentbgcolor','theme_blearning');
    $description = get_string('contentbgcolordesc', 'theme_blearning');
    $default = '#F4F6F8';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set column background color
    $name = 'theme_blearning/columnbgcolor';
    $title = get_string('columnbgcolor','theme_blearning');
    $description = get_string('columnbgcolordesc', 'theme_blearning');
    $default = '#F4F6F8';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set page-header background color
    $name = 'theme_blearning/headerbgcolor';
    $title = get_string('headerbgcolor','theme_blearning');
    $description = get_string('headerbgcolordesc', 'theme_blearning');
    $default = 'transparent';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set page-footer background color
    $name = 'theme_blearning/footerbgcolor';
    $title = get_string('footerbgcolor','theme_blearning');
    $description = get_string('footerbgcolordesc', 'theme_blearning');
    $default = '#DDD';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set border color
    $name = 'theme_blearning/bordercolor';
    $title = get_string('bordercolor','theme_blearning');
    $description = get_string('bordercolordesc', 'theme_blearning');
    $default = '#CCC';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //This is the descriptor for the following Moodle color settings
    $name = 'theme_blearning/moodlecolorsinfo';
    $heading = get_string('moodlecolorsinfo', 'theme_blearning');
    $information = get_string('moodlecolorsinfodesc', 'theme_blearning');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set calendar course events color
    $name = 'theme_blearning/calcourse';
    $title = get_string('calcourse','theme_blearning');
    $description = get_string('calcoursedesc', 'theme_blearning');
    $default = '#FFD3BD';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set calendar global events color
    $name = 'theme_blearning/calglobal';
    $title = get_string('calglobal','theme_blearning');
    $description = get_string('calglobaldesc', 'theme_blearning');
    $default = '#D6F8CD';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set calendar group events color
    $name = 'theme_blearning/calgroup';
    $title = get_string('calgroup','theme_blearning');
    $description = get_string('calgroupdesc', 'theme_blearning');
    $default = '#FEE7AE';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set calendar user events color
    $name = 'theme_blearning/caluser';
    $title = get_string('caluser','theme_blearning');
    $description = get_string('caluserdesc', 'theme_blearning');
    $default = '#DCE7EC';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set calendar weekend color
    $name = 'theme_blearning/calweekend';
    $title = get_string('calweekend','theme_blearning');
    $description = get_string('calweekenddesc', 'theme_blearning');
    $default = '#A00';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set OK font color
    $name = 'theme_blearning/okfontcolor';
    $title = get_string('okfontcolor','theme_blearning');
    $description = get_string('okfontcolordesc', 'theme_blearning');
    $default = '#060';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set warning font color
    $name = 'theme_blearning/warningfontcolor';
    $title = get_string('warningfontcolor','theme_blearning');
    $description = get_string('warningfontcolordesc', 'theme_blearning');
    $default = '#F0E000';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set serious font color
    $name = 'theme_blearning/seriousfontcolor';
    $title = get_string('seriousfontcolor','theme_blearning');
    $description = get_string('seriousfontcolordesc', 'theme_blearning');
    $default = '#F07000';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //Set critical font color
    $name = 'theme_blearning/criticalfontcolor';
    $title = get_string('criticalfontcolor','theme_blearning');
    $description = get_string('criticalfontcolordesc', 'theme_blearning');
    $default = '#F00000';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 10);
    $settings->add($setting);

    //This is the descriptor for the following color scheme settings
    $name = 'theme_blearning/schemeinfo';
    $heading = get_string('schemeinfo', 'theme_blearning');
    $information = get_string('schemeinfodesc', 'theme_blearning');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set gradient style for blocks, navbar, etc...
    $name = 'theme_blearning/colorscheme';
    $title = get_string('colorscheme','theme_blearning');
    $description = get_string('colorschemedesc', 'theme_blearning');
    $default = 'none';
    $choices = array('none'=>'None', 'dark'=>'Dark', 'light'=>'Light');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    //Set gradient style for custommenu
    $name = 'theme_blearning/menucolorscheme';
    $title = get_string('menucolorscheme','theme_blearning');
    $description = get_string('menucolorschemedesc', 'theme_blearning');
    $default = 'none';
    $choices = array('none'=>'None', 'dark'=>'Dark', 'light'=>'Light');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    //This is the descriptor for the following page layout settings
    $name = 'theme_blearning/columninfo';
    $heading = get_string('columninfo', 'theme_blearning');
    $information = get_string('columninfodesc', 'theme_blearning');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Set min width for two column layout
    $name = 'theme_blearning/twocolmin';
    $title = get_string('twocolmin','theme_blearning');
    $description = get_string('twocolmindesc', 'theme_blearning');
    $default = '481px';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 5);
    $settings->add($setting);

    //Set min width for three column layout
    $name = 'theme_blearning/threecolmin';
    $title = get_string('threecolmin','theme_blearning');
    $description = get_string('threecolmindesc', 'theme_blearning');
    $default = '769px';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 5);
    $settings->add($setting);

    //Set max width for page content
    $name = 'theme_blearning/pagemaxwidth';
    $title = get_string('pagemaxwidth','theme_blearning');
    $description = get_string('pagemaxwidthdesc', 'theme_blearning');
    $default = '100%';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 5);
    $settings->add($setting);

    //Set whether or not to use the simple login layout
    $name = 'theme_blearning/simplelogin';
    $visiblename = get_string('simplelogin', 'theme_blearning');
    $title = get_string('simplelogin', 'theme_blearning');
    $description = get_string('simplelogindesc', 'theme_blearning');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 0);
    $settings->add($setting);

    //Set column width for region-pre and region-post
    $name = 'theme_blearning/colwidth';
    $title = get_string('colwidth','theme_blearning');
    $description = get_string('colwidthdesc','theme_blearning');
    $default = '200px';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 5);
    $settings->add($setting);

    //This is the descriptor for the following browser compatibility settings
    $name = 'theme_blearning/compatibilityinfo';
    $heading = get_string('compatinfo', 'theme_blearning');
    $information = get_string('compatinfodesc', 'theme_blearning');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Enable inclusion of respond.js in the footer
    $name = 'theme_blearning/userespond';
    $visiblename = get_string('userespond', 'theme_blearning');
    $title = get_string('userespond', 'theme_blearning');
    $description = get_string('useresponddesc', 'theme_blearning');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 0);
    $settings->add($setting);

    //Enable prompt of Google Chrome Frame
    $name = 'theme_blearning/usecf';
    $visiblename = get_string('usecf', 'theme_blearning');
    $title = get_string('usecf', 'theme_blearning');
    $description = get_string('usecfdesc', 'theme_blearning');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 0);
    $settings->add($setting);

    //Set maximum version for Chrome Frome prompt
    $name = 'theme_blearning/cfmaxversion';
    $title = get_string('cfmaxversion','theme_blearning');
    $description = get_string('cfmaxversiondesc', 'theme_blearning');
    $default = '6';
    $choices = array('ie6'=>'6', 'ie7'=>'7', 'ie8'=>'8');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    //This is the descriptor for the following miscellaneous settings
    $name = 'theme_blearning/miscinfo';
    $heading = get_string('miscinfo', 'theme_blearning');
    $information = get_string('miscinfodesc', 'theme_blearning');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    //Include the Autohide css rules
    $name = 'theme_blearning/useautohide';
    $visiblename = get_string('useautohide', 'theme_blearning');
    $title = get_string('useautohide', 'theme_blearning');
    $description = get_string('useautohidedesc', 'theme_blearning');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 1);
    $settings->add($setting);

    //Set custom css for theme
    $name = 'theme_blearning/customcss';
    $title = get_string('customcss', 'theme_blearning');
    $description = get_string('customcssdesc', 'theme_blearning');
    $setting = new admin_setting_configtextarea($name, $title, $description, null);
    $settings->add($setting);

    //Display branded footer logos
    $name = 'theme_blearning/branding';
    $visiblename = get_string('branding', 'theme_blearning');
    $title = get_string('branding', 'theme_blearning');
    $description = get_string('brandingdesc', 'theme_blearning');
    $setting = new admin_setting_configcheckbox($name, $visiblename, $description, 0);
    $settings->add($setting);
}