<?php

class Downloader
{
    private $file;

    public function __construct($path)
    {
        $this->file = new SplFileInfo($path);
        $this->init();
    }

    private function init()
    {

        if (!$this->file->isFile()) {
            throw new \Exception(sprintf('file [%s] not a file.', $this->file->getBasename()));
        }
    }

    public function output()
    {
        $filename = str_replace('+', '%20', urlencode(convert2utf8($this->file->getFilename())));
        header('Content-Disposition: attachment; filename='.$filename.'; filename*=utf-8\'\''.$filename);
        header('Content-Type: application/force-download');
        header('Content-Type: applicaiton/octet-stream');
        header('Content-Type: applicaiton/download');
        header('Content-Description: File Transfer');
        header('Content-Lenguth: '.$this->file->getSize());

        flush();
        $fp = fopen($this->file->getRealPath(), 'r');
        while (!feof($fp)) {
            echo fread($fp, 65536);
            flush();
        }

        fclose($fp);
    }
}