#!/usr/bin/php
<?php
	while (1)
	{
		echo "Entrez un nombre: ";
		$nb  = fgets(STDIN);
		$nb_ok = trim($nb);
		if (is_numeric($nb_ok))
		{
			if (($nb_ok % 2) == 0)
				echo ("Le chiffre $nb_ok est Pair\n");
			else
				echo "Le chiffre $nb_ok est Impair\n";
		}
		else
			echo "'$nb_ok' n'est pas un chiffre\n";
	}
?>