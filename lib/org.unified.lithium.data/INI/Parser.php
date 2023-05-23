<?php namespace Unified\Lithium\Data\INI;


class Parser {
    private $parsedData;

    public function __construct($iniString) {
        $this->parsedData = $this->parse($iniString);
    }

    public function getValue($section, $key) {
        if (isset($this->parsedData[$section][$key])) {
            return $this->parsedData[$section][$key];
        }
        return null;
    }

    private function parse($iniString) {
        $parsedData = [];

        $lines = explode("\n", $iniString);
        $currentSection = null;

        foreach ($lines as $line) {
            $line = trim($line);

            if (empty($line) || $line[0] === ';') {
                continue;
            }

            if ($line[0] === '[' && $line[strlen($line) - 1] === ']') {
                $currentSection = substr($line, 1, -1);
                $parsedData[$currentSection] = [];
                continue;
            }

            $delimiterPos = strpos($line, '=');
            if ($delimiterPos !== false) {
                $key = trim(substr($line, 0, $delimiterPos));
                $value = trim(substr($line, $delimiterPos + 1));

                if ($currentSection !== null) {
                    $parsedData[$currentSection][$key] = $value;
                }
            }
        }

        return $parsedData;
    }
}
