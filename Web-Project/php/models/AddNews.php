<?php 

    class AddNews{
        private $titulli ="";
        private $permbajtja = "";
        
        public function __construct($data){
            $this->titulli = $data['titulli'];
            $this->permbajtja = $data['permbajtja'];
        }
        public function validate()
    {
        return !(empty($this->titulli) || empty($this->permbajtja));
    }
        public function add(){
            if(!$this->validate()){
                echo 'Nuk keni shtuar te gjitha te dhenat!';
                return false;
            }
            $news_model = new NewsModel( $this->titulli, $this->permbajtja);
            $news = new News();
            $news = $news->create($news_model);
            
            if($news){
                header ("Location: ../../views/dashboard.php");
            }
        }
    }
?>