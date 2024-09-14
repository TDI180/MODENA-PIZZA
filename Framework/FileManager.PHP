<?php
//namespace Forum;
	class FileManager
	{
		private $_listFile_JS;
        private $_listFile_CSS;
		
		public function __construct()
		{
			$this->_listFile_JS = array();
			$this->_listFile_CSS = array();
		}
		
		public function addJs($file)
        {
            $this->_listFile_JS[] = $file; // tableau de fichiers javascript
            //include ( $this->_listFile_JS[0]);
            var_dump ( $this->_listFile_JS);
        }

        public function addCss($file)
        {
            $this->_listFile_CSS[] = $file; 
        }
		
		public function generateJs()
        {          
            $jsContent = '';
            foreach($this->_listFile_JS as $jsFile)
            {
                $jsContent = '<script src="'. $jsFile . '" ></script>'; // lecture du tableau et affichage des balises javascript              
                include ($jsFile);
            }
            return 0;
        }

        public function generateCss()
        {
            $cssContent = '';
            foreach($this->_listFile_CSS as $cssFile)
            {
                $cssContent= '<link rel="stylesheet" type="text/css" href="' . $cssFile . '" />';
            }
            return $cssContent;
        }

        public function generatePics()
        {           
            return 0;
        }

	}