<?php 
class Pagination 
{
	private $totalPage;
	private $currentPage;
	
	public function __construct($totalPage, $currentPage)
	{
		$this->totalPage = $totalPage;
		$this->currentPage = $currentPage;
	}

	public function render()
	{
		if ($this->totalPage == 1) {
			return '';
		}
		$url = 'http://mvc.local/';
		$getData = GetRequest::all();
		unset($getData['page']);
		$html = "<ul class=\"pagination\">";
		if ($this->currentPage > 1) {
			$html .= "<li><a href=\"#\">&laquo;</a></li>";
		}
		for ($i=1; $i <= $this->totalPage ; $i++) { 
			$queryString = [];
			$getData['page'] = $i;
			foreach ($getData as $key => $value) {
				$queryString[] = "$key=$value";
			}
			$newUrl = $url . "?" . implode('&', $queryString);
			$classActive = $this->currentPage == $i ? 'active' : '';
			$html .= "<li class=\"{$classActive}\"><a href=\"{$newUrl}\">{$i}</a></li>";
		}
		if ($this->currentPage < $this->totalPage) {
			$html .= "<li><a href=\"#\"\">&raquo;</a></li>";
		}
		$html .= "</ul>";
		return $html;
	}

	public function __toString()	// magic method
	{
		return $this->render();
	}
}