<?php
namespace App;
use App\VideoTraits\AudioMixer;
use App\VideoTraits\BitrateReader;
use App\VideoTraits\CodecFactory;
use App\VideoTraits\VideoFile;

class  VideoConverter {
    

    public function __construct(private string $filename,private string $format)
    {
        $this->filename = $filename;
        $this->format = $format;
    }
    
    
}