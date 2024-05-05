<?php
class Media {
  
    public function __construct(protected $type, protected $path) {
        $this->type = $type;
        $this->path = $path;
    }

    public function getType() {
        return $this->type;
    }

    public function getPath() {
        return $this->path;
    }
}

?>