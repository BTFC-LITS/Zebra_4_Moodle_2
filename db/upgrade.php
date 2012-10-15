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
 * zebra_tab theme config page
 *
 * @package    theme_zebra_tab
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

function xmldb_theme_zebra_tab_upgrade($oldversion) {
    global $CFG, $DB;
    $dbman = $DB->get_manager();

    if ($oldversion < 2011111004) { // New Settings in 2.1
        $currentsetting = get_config('theme_zebra_tab');
        set_config('linkcolor', $currentsetting->firstcolor, 'theme_zebra_tab'); // Create linkcolor
        unset_config('firstcolor', 'theme_zebra_tab'); // Remove firstcolor

        set_config('hovercolor', $currentsetting->secondcolor, 'theme_zebra_tab'); // Create hovercolor
        unset_config('secondcolor', 'theme_zebra_tab'); // Remove secondcolor

        set_config('fontcolor', $currentsetting->thirdcolor, 'theme_zebra_tab'); // Create fontcolor
        unset_config('third', 'theme_zebra_tab'); // Remove thirdcolor

        set_config('hovercolor', $currentsetting->fourthcolor, 'theme_zebra_tab'); // Create contentbgcolor
        unset_config('fourthcolor', 'theme_zebra_tab'); // Remove fourthcolor

        set_config('columnbgcolor', $currentsetting->fifthcolor, 'theme_zebra_tab'); // Create columnbgcolor
        unset_config('fifthcolor', 'theme_zebra_tab'); // Remove fifthcolor

        set_config('headerbgcolor', $currentsetting->sixthcolor, 'theme_zebra_tab'); // Create headerbgcolor
        unset_config('sixthcolor', 'theme_zebra_tab'); // Remove sixthcolor

        set_config('footerbgcolor', $currentsetting->seventhcolor, 'theme_zebra_tab'); // Create footerbgcolor
        unset_config('seventhcolor', 'theme_zebra_tab'); // Remove seventhcolor

        // Upgrade version number
        upgrade_plugin_savepoint(true, 2011111004, 'theme', 'zebra_tab');
    }

    if ($oldversion < 2011120500) { // New Settings in 2.1.1
        $currentsetting = get_config('theme_zebra_tab');
        unset_config('onecolmax', 'theme_zebra_tab'); // Remove onecolmax
        unset_config('twocolmax', 'theme_zebra_tab'); // Remove twocolmax

        set_config('pagemaxwidth', $currentsetting->threecolmax, 'theme_zebra_tab'); // Create pagemaxwidth
        unset_config('threecolmax', 'theme_zebra_tab'); // Remove threecolmax
    }

    if ($oldversion < 2012011500) { // New Settings in 2.2.0
	$currentsetting = get_config('theme_zebra_tab');
	set_config('userespond', 0, 'theme_zebra_tab'); // Create userespond
	set_config('usecf', 0, 'theme_zebra_tab'); // Create usecf
	set_config('maxcfversion', 6, 'theme_zebra_tab'); // Create maxcfversion
	upgrade_plugin_savepoint(true, 2012011500, 'theme', 'zebra_tab');
    }

    if ($oldversion < 2012011501) { // New Settings in 2.2.0
        unset_config('enablezoom', 'theme_zebra_tab'); // Remove enablezoom
	upgrade_plugin_savepoint(true, 2012011501, 'theme', 'zebra_tab');
    }

    if ($oldversion < 2012042300) { // New Settings in 2.2.5
	$currentsetting = get_config('theme_zebra_tab');
	unset_config('colwidth', 'theme_zebra_tab'); //Remove the old colwidth
	set_config('colwidth', '200px', 'theme_zebra_tab'); //Set the new colwidth
	upgrade_plugin_savepoint(true, 2012042300, 'theme', 'zebra_tab');
    }

    if ($oldversion < 2012050900) { // New Settings in 2.2.8
	unset_config('editingnotify', 'theme_zebra_tab'); //Remove the old colwidth
	upgrade_plugin_savepoint(true, 2012050900, 'theme', 'zebra_tab');
    }

    if ($oldversion < 2012062200) { // New Settings in 2.2.11
        $currentsetting = get_config('theme_zebra_tab');
        set_config('bordercolor', $currentsetting->eighthcolor, 'theme_zebra_tab'); // Create bordercolor
        unset_config('eighthcolor', 'theme_zebra_tab'); // Remove eighthcolor

        // Upgrade version number
        upgrade_plugin_savepoint(true, 2012062200, 'theme', 'zebra_tab');
    }

    return true;
}