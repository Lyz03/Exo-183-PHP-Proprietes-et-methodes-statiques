<?php

class Vod
{

    private array $film = ['film1', 'film2', 'film3', 'film4', 'film5'];
    private int $tariff = 10;
    private static int $subscribers = 0;

    /**
     * @return array
     */
    public function getFilm(): array
    {
        return $this->film;
    }

    /**
     * @param array $film
     */
    public function setFilm(array $film): void
    {
        $this->film = $film;
    }

    /**
     * @return int
     */
    public function getTariff(): int
    {
        return $this->tariff;
    }

    /**
     * @param int $tariff
     */
    public function setTariff(int $tariff): void
    {
        $this->tariff = $tariff;
    }

    /**
     * @return int
     */
    public static function getSubscribers(): int
    {
        return self::$subscribers;
    }

    /**
     * @param int $subscribers
     */
    public static function setSubscribers(int $subscribers): void
    {
        self::$subscribers = $subscribers;
    }

    /**
     * Add a subscriber
     */
    static function addSubs() {
        self::$subscribers++;
    }

    /**
     * @return int
     */
    static function getSubs(): int {
        return self::$subscribers;
    }
}