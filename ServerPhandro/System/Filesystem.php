<?php
if (getcwd() == dirname(__FILE__)) {
    require '../System/ErrorPage.php';
    die(ShowError());
}
class FileSystem {

    function __construct() {
        if (getcwd() == dirname(__FILE__)) {
            die(ShowError());
        }
    }

    /**
     * Moves files inside the $src folder to the $dest folder. If $dest does
     * not exist it will be created.
     * 
     * NOTE: Moves the files _inside_ the $src folder, not the $src folder itself
     * 
     * This function removes $src
     * 
     * @param String $src - File path to source folder
     * @param type $dest - File path to destination folder
     * @return false on failure 
     */
    public function move($src, $dest) {
// If source is not a directory stop processing
        if (!is_dir($src)) {
            rename($src, $dest);
            return true;
        }
// If the destination directory does not exist create it
        if (!is_dir($dest)) {
            if (!mkdir($dest)) {
// If the destination directory could not be created stop processing
                return false;
            }
        }
// Open the source directory to read in files
        $i = new DirectoryIterator($src);
        foreach ($i as $f) {
            if ($f->isFile()) {
                rename($f->getRealPath(), "$dest/" . $f->getFilename());
            } else if (!$f->isDot() && $f->isDir()) {
                $this->move($f->getRealPath(), "$dest/$f");
                @unlink($f->getRealPath());
            }
        }
        @unlink($src);
    }

    /**
     * Recursively copy files from one directory to another
     *
     * @param String $src - Source of files being moved
     * @param String $dest - Destination of files being moved
     */
    public function copy($src, $dest) {
// If source is not a directory stop processing
        if (!is_dir($src))
            return false;
// If the destination directory does not exist create it
        if (!is_dir($dest)) {
            if (!mkdir($dest)) {
// If the destination directory could not be created stop processing
                return false;
            }
        }
// Open the source directory to read in files
        $i = new DirectoryIterator($src);
        foreach ($i as $f) {
            if ($f->isFile()) {
                copy($f->getRealPath(), "$dest/" . $f->getFilename());
            } else if (!$f->isDot() && $f->isDir()) {
                $this->copy($f->getRealPath(), "$dest/$f");
            }
        }
    }

    /**
     * Creates a new directory. If the path to the directory does not
     * exist it will also be created
     * 
     * @param String $path 
     */
    public function mkdir($path) {
        $path = str_replace("\\", "/", $path);
        $path = explode("/", $path);
        $rebuild = '';
        foreach ($path AS $p) {
// Check for Windows drive letter
            if (strstr($p, ":") != false) {
                $rebuild = $p;
                continue;
            }
            $len = strlen($p);
            if ($len != 0) {
                $rebuild .= "/$p";
                if (!is_dir($rebuild)) {
                    if (mkdir($rebuild, 0777, true)) {
                        return $rebuild;
                    } else {
                        return false;
                    }
                }
            }
        }
    }

    public function findByExtension($path, $ext) {
        $arr = array();
        $files = $this->ls($path);

        foreach ($files as $f) {
            $info = pathinfo($path . "/$f");
            if (isset($info['extension']) && $info['extension'] == $ext)
                $arr[] = $path . "/$f";
        }
        return $arr;
    }

    /**
     * List the files in a given directory
     * 
     * @param String $path
     * @return Array
     */
    public function ls($path) {
        
        $arr = array();
        if (is_dir($path)) {
// Open the source directory to read in files
            $i = new DirectoryIterator($path);
            foreach ($i as $f) {
                if (!$f->isDot())
                    $arr[] = $f->getFilename();
            }
            return $arr;
        }
        return false;
    }

    /**
     * Determine if a file or folder exists
     * 
     * @param String $path
     * @return Boolean
     */
    public function exists($path) {
        if (is_dir($path)) {
            return true;
        } else if (file_exists($path)) {
            return true;
        }
        return false;
    }

    /**
     * Removes a given directory and everything in it
     * 
     * @param String $path 
     */
    public function rmdir($path) {
// Open the source directory to read in files
        $i = new DirectoryIterator($path);
        foreach ($i as $f) {
            if ($f->isFile()) {
                unlink($f->getRealPath());
            } else if (!$f->isDot() && $f->isDir()) {
                $this->rmdir($f->getRealPath());
//rmdir($f->getRealPath());
            }
        }
        return rmdir($path);
    }

    /**
     * Remove files or folders
     * 
     * @param String $path
     */
    public function rm($path) {
        if (is_dir($path)) {
            $this->rmdir($path);
        } else {
            unlink($path);
        }
    }

}
