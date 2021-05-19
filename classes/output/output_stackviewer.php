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
 *
 *
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @package   filter_stackview
 * @copyright 19/05/2021 Mfreak.nl | LdesignMedia.nl - Luuk Verhoeven
 * @author    Luuk Verhoeven
 **/

namespace filter_stackview\output;
defined('MOODLE_INTERNAL') || die;

use renderable;
use renderer_base;
use templatable;

/**
 * Class stackview_output
 *
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @package   mod_stackview
 * @copyright 09/05/2021 Mfreak.nl | LdesignMedia.nl - Luuk Verhoeven
 * @author    Luuk Verhoeven
 */
class output_stackviewer implements renderable, templatable {

    /**
     * @var int
     */
    private $id;

    /**
     * output_stackviewer constructor.
     */
    public function __construct(int $id) {
        $this->id = $id;
    }

    /**
     * Export template vars
     *
     * @param \renderer_base $output
     *
     * @return object
     * @throws \coding_exception
     */
    public function export_for_template(renderer_base $output) : object {

        return (object)[
            'width' => '600',
            'height' => '400',
            'url' => (new \moodle_url('/mod/stackview/view.php', [
                'g' => $this->id,
                'action' => 'embedded',
            ]))->out(false),
        ];
    }
}