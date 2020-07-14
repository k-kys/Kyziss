<?php 

class Validator
{
	private $data;
	private $rules;	
	private $errors = [];
	private $messages;

	public function __construct(array $data, array $rules, array $messages = [])
	{
		$this->data = $data;
		$this->rules = $rules;
		$this->messages = $messages;
	}

	public function error() : string
	{
		$firstError = array_shift($this->errors);
		return $firstError;
	}

	public function fail() : bool
	{
		foreach ($this->rules as $name => $rule) {
			$ruleArray = explode('|', $rule);
			// if (in_array('required', $ruleArray)) {
				foreach ($ruleArray as $ruleItem) {
					if ($ruleItem == 'required') {
						if (!isset($this->data[$name]) || $this->data[$name] == '' ) {
							if (isset($this->messages["{$name}.{$ruleItem}"])) {
								$this->errors[$name] = $this->messages["{$name}.{$ruleItem}"];
							} else {
								$this->errors[$name] = "{$name} là trường bắt buộc";
							}
						}
					}

					if (strpos($ruleItem, 'minlength:') === 0) {
						$tmpArr = explode(':', $ruleItem);
						$minlength = $tmpArr[1];
						if (strlen($this->data[$name]) < $minlength) {
							if (isset($this->messages["{$name}.{$tmpArr[0]}"])) {
								$this->errors[$name] = $this->messages["{$name}.{$tmpArr[0]}"];
							} else {
								$this->errors[$name] = "{$name} tối thiểu {$minlength} ký tự";
							}
						} 
					}
				}
			}
		

		return count($this->errors) > 0;
	}
}


?>