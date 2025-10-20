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
 * Class filter stackview.
 *
 * This class is kept for backward compatibility with Moodle versions prior to 4.5.
 * For Moodle 4.5+, the filter has been moved to classes/text_filter.php
 * with the namespace \filter_stackview\text_filter as required by MDL-82427.
 *
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @package    filter_stackview
 * @copyright  10/05/2021 Mfreak.nl | LdesignMedia.nl - Luuk Verhoeven
 * @author     Luuk Verhoeven
 * @deprecated since Moodle 4.5
 */

defined('MOODLE_INTERNAL') || die();

debugging('This file is no longer required in Moodle 4.5+. Please do not include/require it.', DEBUG_DEVELOPER);

class_alias(\filter_stackview\text_filter::class, 'filter_stackview');
