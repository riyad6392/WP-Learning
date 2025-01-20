<?php

interface SocialMediaPlatform {
    public function getShareUrl($url): string;
    public function getPlatformName(): string;
}

class Facebook implements SocialMediaPlatform {
    private $platform_name;

    public function __construct() {
        $this->platform_name = 'Facebook';
    }

    public function getShareUrl($url): string {
        return 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url);
    }

    public function getPlatformName(): string {
        return $this->platform_name;
    }
}

class LinkedIn implements SocialMediaPlatform {
    private $platform_name;

    public function __construct() {
        $this->platform_name = 'LinkedIn';
    }

    public function getShareUrl($url): string {
        return 'https://www.linkedin.com/shareArticle?url=' . urlencode($url);
    }

    public function getPlatformName(): string {
        return $this->platform_name;
    }
}

class Twitter implements SocialMediaPlatform {
    private $platform_name;

    public function __construct() {
        $this->platform_name = 'Twitter';
    }

    public function getShareUrl($url): string {
        return 'https://twitter.com/intent/tweet?url=' . urlencode($url);
    }

    public function getPlatformName(): string {
        return $this->platform_name;
    }
}