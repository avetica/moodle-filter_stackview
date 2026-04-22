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
 * Class UI renderer.
 *
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @package   filter_stackview
 * @copyright 19/05/2021 Mfreak.nl | LdesignMedia.nl - Luuk Verhoeven
 * @author    Luuk Verhoeven
 */
class filter_stackview_renderer extends plugin_renderer_base {

    /**
     * Render stack.
     *
     * @param int $id
     *
     * @return string
     */
    public function render_stack(int $id): string {
        $context = (new \filter_stackview\output\output_stackviewer($id))
            ->export_for_template($this);

        return $this->render_from_template('filter_stackview/stackviewer', $context);
    }

}
