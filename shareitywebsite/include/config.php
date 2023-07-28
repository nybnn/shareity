<?php 

	include 'meta.php'; 

	/**
	 * Shareity class
	 */
	class Config
	{
		public $url;
		public $url_pieces;
		public $getName;
		public $path;
		public $myDev = 'https://my.shareity.com';
		public $members = 'https://members.shareity.me';
		
		function __construct()
		{
			$this->url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

			$this->url_pieces = explode('/', $this->url . $_SERVER['REQUEST_URI']);

			if (empty($this->url_pieces[4])) {
				$this->getName = $_SERVER['REQUEST_URI'];
			} else {
				$this->getName = str_replace('.php', '', $this->url_pieces[4] );
			}

			$this->path = $_SERVER['DOCUMENT_ROOT'];
		}

		public function getActive($name)
		{
			return $this->getName === $name ? 'active' : null;
		}

		public function linkTo($path)
		{
			return $this->url . '/pages/' . $path . '.php';
		}

		public function linkAsset($asset)
		{
			return $this->url . '/' . $asset;
		}

		public function linkPath($file)
		{
			return $this->path . '/include/' . $file . '.php';
		}
		public function linkPartners($partset)
		{
			return 'https://' . $partset;
		}
	}
	

	$config = new Config; 
 ?>