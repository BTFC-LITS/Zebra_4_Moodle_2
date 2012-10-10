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
 * blearning theme install functions
 *
 * @package    theme_blearning
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
 
function xmldb_theme_blearning_install() {
    $currentsetting = get_config('theme_blearning');
 
    // Create linkcolor
    set_config('linkcolor', $currentsetting->firstcolor, 'theme_blearning');
    // Remove firstcolor
    unset_config('firstcolor', 'theme_blearning');
  
    // Create hovercolor
    set_config('hovercolor', $currentsetting->secondcolor, 'theme_blearning');
    // Remove secondcolor
    unset_config('secondcolor', 'theme_blearning');
  
    // Create fontcolor
    set_config('fontcolor', $currentsetting->thirdcolor, 'theme_blearning');
    // Remove thirdcolor
    unset_config('third', 'theme_blearning');
  
    // Create contentbgcolor
    set_config('hovercolor', $currentsetting->fourthcolor, 'theme_blearning');
    // Remove fourthcolor
    unset_config('fourthcolor', 'theme_blearning');
  
    // Create columnbgcolor
    set_config('columnbgcolor', $currentsetting->fifthcolor, 'theme_blearning');
    // Remove fifthcolor
    unset_config('fifthcolor', 'theme_blearning');
  
    // Create headerbgcolor
    set_config('headerbgcolor', $currentsetting->sixthcolor, 'theme_blearning');
    // Remove sixthcolor
    unset_config('sixthcolor', 'theme_blearning');
  
    // Create footerbgcolor
    set_config('footerbgcolor', $currentsetting->seventhcolor, 'theme_blearning');
    // Remove seventhcolor
    unset_config('seventhcolor', 'theme_blearning');

    // Create bordercolor
    set_config('bordercolor', $currentsetting->eighthcolor, 'theme_blearning');
    // Remove eighthcolor
    unset_config('eighthcolor', 'theme_blearning');
    
    return true;
}