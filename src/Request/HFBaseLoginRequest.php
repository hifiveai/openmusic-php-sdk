<?php

class HFBaseLoginRequest extends HFRequest {

    public $nickname;
    public $gender;
    public $birthday;
    public $location;
    public $education;
    public $profession;
    public $isOrganization;
    public $favoriteSinger;
    public $favoriteGenre;
    public $country;
    public $province;
    public $reserve;

    function __construct() {
        $this->method('POST')
            ->actionName('BaseLogin')
            ->param(array('nickname', 'gender', 'birthday',
                'location', 'education', 'profession',
                'isOrganization', 'favoriteSinger', 'favoriteGenre',
                'country', 'province', 'reserve'));
    }

    public function nickname($nickname) {
        $this->nickname = $nickname;
        return $this;
    }

    public function gender($gender) {
        $this->gender = $gender;
        return $this;
    }

    public function birthday($birthday) {
        $this->birthday = $birthday;
        return $this;
    }

    public function location($location) {
        $this->location = $location;
        return $this;
    }

    public function education($education) {
        $this->education = $education;
        return $this;
    }

    public function profession($profession) {
        $this->profession = $profession;
        return $this;
    }

    public function isOrganization($isOrganization) {
        $this->isOrganization = $isOrganization;
        return $this;
    }

    public function favoriteSinger($favoriteSinger) {
        $this->favoriteSinger = $favoriteSinger;
        return $this;
    }

    public function favoriteGenre($favoriteGenre) {
        $this->favoriteGenre = $favoriteGenre;
        return $this;
    }

    public function country($country) {
        $this->country = $country;
        return $this;
    }

    public function province($province) {
        $this->province = $province;
        return $this;
    }

    public function reserve($reserve) {
        $this->reserve = $reserve;
        return $this;
    }
}