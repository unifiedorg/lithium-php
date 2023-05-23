<?php namespace Unified\Lithium\Utils;

class Str {
    public function reverseString($str) {
        return strrev($str);
    }

    public function countWords($str) {
        return str_word_count($str);
    }

    public function countCharacters($str) {
        return strlen($str);
    }

    public function truncateString($str, $maxLength, $suffix = '...') {
        if (strlen($str) > $maxLength) {
            $truncated = substr($str, 0, $maxLength);
            $truncated = rtrim($truncated, " \t\n\r\0\x0B");
            return $truncated . $suffix;
        }

        return $str;
    }

    public function capitalizeString($str) {
        return ucwords(strtolower($str));
    }

    public function removeWhitespace($str) {
        return preg_replace('/\s+/', '', $str);
    }

    public function extractDigits($str) {
        return preg_replace('/[^0-9]/', '', $str);
    }

    public function sanitizeString($str) {
        return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }

    public function shuffleString($str) {
        $chars = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
        shuffle($chars);
        return implode('', $chars);
    }

    public function countOccurrences($str, $search) {
        return substr_count($str, $search);
    }

    public function replaceSubstring($str, $search, $replace) {
        return str_replace($search, $replace, $str);
    }

    public function startsWith($str, $prefix) {
        return strncmp($str, $prefix, strlen($prefix)) === 0;
    }

    public function endsWith($str, $suffix) {
        return substr($str, -strlen($suffix)) === $suffix;
    }

    public function toSlug($str) {
        $str = strtolower($str);
        $str = preg_replace('/[^a-z0-9]+/', '-', $str);
        $str = trim($str, '-');
        return $str;
    }
}
