<?php

namespace thecxx\os;

/**
 * Class File
 *
 * @package thecxx\os
 */
class File
{

    /**
     * File path
     *
     * @var string
     */
    protected $path;

    /**
     * File constructor.
     *
     * @param string $path  File path
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * Write a string to the file.
     *
     * @param string $data  Data to be written to the file
     * @param bool $append  Append write or not
     * @return int|false
     */
    public function write($data, $append = false)
    {
        return file_put_contents($this->path, $data, LOCK_EX|($append?FILE_APPEND:0));
    }

}