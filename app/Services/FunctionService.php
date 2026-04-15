<?php

namespace App\Services;

class FunctionService {
    
    public static function slugify($text) {
        // Convert to lowercase
        $text = strtolower(trim($text));
        // Replace non-alphanumeric characters with hyphens
        $text = preg_replace('/[\s-]+/', '-', $text);
        $text = preg_replace('/[^a-z0-9]+/', '', $text);
        return $text;
    }

    public static function limit_words($text, $limit) {
        $words = explode(' ', $text);
        return implode(' ', array_slice($words, 0, $limit));
    }

    public static function get_all_kw($array) {
        return array_merge(...$array);
    }

    public static function random_files($files, $count) {
        return array_rand(array_flip($files), $count);
    }

    public static function random_keyword($keywords) {
        return $keywords[array_rand($keywords)];
    }

    public static function random_bg($colors) {
        return $colors[array_rand($colors)];
    }
}