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
 * Text filter class for stackview.
 *
 * @package   filter_stackview
 * @copyright 10/05/2021 Mfreak.nl | LdesignMedia.nl - Luuk Verhoeven
 * @author    Luuk Verhoeven
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace filter_stackview;

/**
 * Text filter class for stackview.
 *
 * @package   filter_stackview
 * @copyright 10/05/2021 Mfreak.nl | LdesignMedia.nl - Luuk Verhoeven
 * @author    Luuk Verhoeven
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class text_filter extends \moodle_text_filter {

    /**
     * Apply the filter to the text.
     *
     * @param string $text   to be processed by the text
     * @param array $options filter options
     *
     * @return string text after processing
     * @see filter_manager::apply_filter_chain()
     */
    public function filter($text, array $options = []): string {
        if (!isset($options['originalformat'])) {
            // If the format is not specified, we are probably called by {@see format_string()}
            // in that case, it would be dangerous to replace URL with the link because it could
            // be stripped. therefore, we do nothing.
            return $text;
        }

        if (!is_string($text) || empty($text)) {
            // Non string data can not be filtered anyway.
            return $text;
        }

        // Regex.
        preg_match_all('#\[\[(stackview)+\ (\d+)\]\]#s', $text, $matches, PREG_SET_ORDER);

        // Check regex.
        foreach ($matches as $match) {
            $text = $this->stackview($match, $text);
        }

        return $text;
    }

    /**
     * Replace with stackview.
     *
     * @param array $match
     * @param string $text
     *
     * @return string
     */
    private function stackview(array $match, string $text): string {
        global $PAGE;
        $renderer = $PAGE->get_renderer('filter_stackview');

        return str_replace('[[stackview ' . $match[2] . ']]', $renderer->render_stack($match[2]),
            $text);
    }

}