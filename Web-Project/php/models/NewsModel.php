<?php class NewsModel {

    protected $titulli = "";
    protected $permbajtja = "";

    public function __construct($titulli, $permbajtja){
        $this->titulli = $titulli;
        $this->permbajtja = $permbajtja;
    }

    public function getTitulli(){
        return $this->titulli;
    }
    public function getPermbajtja(){
        return $this->permbajtja;
    }

}