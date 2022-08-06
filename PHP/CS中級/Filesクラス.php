<?php

class Files {
    function __construct(string $fileName, string $fileExtension, string $content, string $parentFolder) {
        $this->fileName = $fileName;
        $this->fileExtension = $fileExtension;
        $this->content = $content;
        $this->parentFolder = $parentFolder;
    }

    function getLifetimeBandwidthSize(): string{
        $data_size = strlen($this->content) * 25;        
        return $this->is_MB($data_size) ? (string)$data_size . "MB" : (string)$data_size / 1000 . "GB";
    }

    function is_MB(int $data_size): bool{
        return $data_size >= 1000 ? false : true;
    }

    function prependContent(string $data): string{
        $this->content = $data . $this->content;
        return $this->content;
    }

    function addContent(string $data, int $position): string{
        $left = substr($this->content, 0, $position); 
        $right = substr($this->content, $position);

        $this->content = $left . $data . $right;
        return $this->content;
    }

    function showFileLocation(): string{
        return $this->parentFolder . " > " . $this->fileName . $this->fileExtension;
    }
}

$assignment = new Files("assignment", ".word", "ABCDEFGH", "homework");
echo $assignment->getLifetimeBandwidthSize(). PHP_EOL;
echo $assignment->prependContent("MMM"). PHP_EOL;
echo $assignment->addContent("hello world", 5). PHP_EOL;
echo $assignment->showFileLocation(). PHP_EOL;

$blade = new Files("blade", ".txt", "bg-primary text-white m-0 p-0 d-flex justify-content-center", "view");
echo $blade->getLifetimeBandwidthSize(). PHP_EOL;
echo $blade->addContent("font-weight-bold ", 11). PHP_EOL;
echo $blade->showFileLocation(). PHP_EOL;