<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        return $is_knight_awake ? false : true;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return ($is_knight_awake || $is_archer_awake || $is_prisoner_awake) ? true : false;
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return ($is_prisoner_awake && !$is_archer_awake)  ? true : false;
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        if ($is_dog_present) {
            return !$is_archer_awake ? true : false;
        } else {
            if ($is_prisoner_awake) {
                return !$is_knight_awake && !$is_archer_awake ? true : false;
            } else {
                return false;
            }
            
        }
    }
}
