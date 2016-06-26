<?php namespace Ignited\Pdf;

use Pdf;

class PdfFactory {

	protected $config;

	public function __construct($config){
		$this->config = $config;
	}

	public function make($options=array())
	{
		$wkhtml = new Pdf;
		$wkhtml->setOptions($this->config);

		if(!empty($options))
		{
			$wkhtml->setPageOptions($options);
		}

		return $wkhtml;
	}

}