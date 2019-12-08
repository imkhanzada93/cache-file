# Cache File

Basic Php Class to validate JSON file existance, create new JSON file for cache and to read the existing JSON cache file 


### Usage

```
$obj = new CacheJSON();
$fileExist = $obj->checkFileExist($filename);
if($fileExist){
    $json = $obj->read($filename);
}else{
    $json = $obj->create($filename, $data);
}
echo $json;
```

## Authors

* **Muhammad Umar Khan** - *Initial work* - [imkhanzada93](https://github.com/imkhanzada93)
