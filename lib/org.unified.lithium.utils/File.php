<?php namespace Unified\Lithium\Utils;

class File {
    public function readFile($filePath) {
        if (file_exists($filePath) && is_readable($filePath)) {
            return file_get_contents($filePath);
        }

        return false;
    }

    public function writeFile($filePath, $content) {
        if (is_writable(dirname($filePath))) {
            return file_put_contents($filePath, $content);
        }

        return false;
    }

    public function deleteFile($filePath) {
        if (file_exists($filePath) && is_writable($filePath)) {
            return unlink($filePath);
        }

        return false;
    }

    public function copyFile($sourcePath, $destinationPath) {
        if (file_exists($sourcePath) && is_readable($sourcePath) && is_writable(dirname($destinationPath))) {
            return copy($sourcePath, $destinationPath);
        }

        return false;
    }

    public function moveFile($sourcePath, $destinationPath) {
        if (file_exists($sourcePath) && is_readable($sourcePath) && is_writable(dirname($destinationPath))) {
            return rename($sourcePath, $destinationPath);
        }

        return false;
    }

    public function getFileSize($filePath) {
        if (file_exists($filePath)) {
            return filesize($filePath);
        }

        return false;
    }

    public function getFileInfo($filePath) {
        if (file_exists($filePath)) {
            return [
                'name' => basename($filePath),
                'size' => $this->getFileSize($filePath),
                'type' => mime_content_type($filePath),
                'modified' => filemtime($filePath),
            ];
        }

        return false;
    }
}
