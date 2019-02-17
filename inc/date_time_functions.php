<?php

use Carbon\Carbon;

if (!function_exists('hr_dt_from')) {
    /**
     * It returns a human readable time difference from the Unix Timestamp to now.
     *
     * @param integer $ut Unix Time.
     * @param string $format The string format.
     *
     * @return string
     */
    function hr_dt_from($ut = null, $format = '%y %yw, %m %mw, %d %dw, %h %hw, %i %iw, %s %sw')
    {

        $from = Carbon::createFromTimestamp($ut)->diff(Carbon::now());

        $values = array(
            '%yw' => ($from->y == 1) ? _('day') : _('days'),
            '%y' => $from->y,
            '%mw' => ($from->m == 1) ? _('month') : _('months'),
            '%m' => $from->m,
            '%dw' => ($from->d == 1) ? _('day') : _('days'),
            '%d' => $from->d,
            '%hw' => ($from->h == 1) ? _('hour') : _('hours'),
            '%h' => $from->h,
            '%iw' => ($from->i == 1) ? _('minute') : _('minutes'),
            '%i' => $from->i,
            '%sw' => ($from->s == 1) ? _('second') : _('seconds'),
            '%s' => $from->s
        );

        foreach ($values as $key => $value) {
            $format = str_replace($key, $value, $format);
        }

        return $format;

    }
}
