<?php

class CacheJSON{

	// directory namew where you want to create your file
    private $directoryName = '/cache/';

    /**
	 * Check the existance of a file
	 *
	 * @param $filename (string) Name of a file
	 *
	 * @return Response (boolean)
	 *
	 *
	 */
    public function checkFileExist($filename){
        if (file_exists($this->directoryName . $filename)) {
            return true;
        } else {
            return false;
        }
    }

    /**
	 * Create A new JSON file
	 *
	 * @param $filename (string) Name of a file
	 * @param $data (JSON Object) data to save in file
	 *
	 * @return Response (JSON object)
	 *
	 *
	 */
    public function create($filename, $data){
        $fp = fopen($this->directoryName . $filename, 'w');
        fwrite($fp, $data);
        fclose($fp);
        return file_get_contents($this->directoryName . $filename);
    }

    /**
	 * Read existance JSON file
	 *
	 * @param $filename (string) Name of a file
	 *
	 * @return Response (JSON object)
	 * @return Response (boolean false) if file not exist
	 *
	 *
	 */
    public function read($filename){
        if($this->checkFileExist($filename)){
            return file_get_contents($this->directoryName . $filename);
        }else{
            return false;
        }
    }
    
}