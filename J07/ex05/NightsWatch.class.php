<?php
	class NightsWatch implements Ifighter
	{
		private $_res;
		public function recruit($pers)
		{
			if ($pers instanceof Ifighter)
				$this->_res[] = $pers;
		}
		public function fight()
		{
			foreach($this->_res as $elem)
				$elem->fight();
		}
	}
?>
