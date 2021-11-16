<?php

namespace App\Services;

use DateInterval;
use DateTime;

class TimeService
{
	public function toMomentsAgo(string $date): string
	{
		$interval = $this->compare(new DateTime(), $this->getDateTime($date));

		if ($interval->y > 0)
			return $interval->y . ($interval->y == 1 ? ' ano' : ' anos') . ' atrás';
		else if ($interval->m > 0)
			return $interval->m . ($interval->m == 1 ? ' mês' : ' meses') . ' atrás';
		else if ($interval->d > 0)
			return $interval->d . ($interval->d == 1 ? ' dia' : ' dias') . ' atrás';
		else if ($interval->h > 0)
			return $interval->h . ($interval->h == 1 ? ' hora' : ' horas') . ' atrás';
		else if ($interval->i > 0)
			return$interval->i . ($interval->i == 1 ? ' minuto' : ' minutos') . ' atrás';
		return 'Momentos atrás';
	}

	public function getDateTime(string $date): DateTime
	{
		return DateTime::createFromFormat('Y-m-d H:i:s', $date);
	}

	public function compare(DateTime $d1, DateTime $d2): DateInterval
	{
		return $d1->diff($d2);
	}
}
