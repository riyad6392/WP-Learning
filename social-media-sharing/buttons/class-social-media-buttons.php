<?php

class SocialMediaButtons {
    public function __construct(private array $platforms) {}

    public function getShareButtons ($url) {
        $buttons_html = '';

        foreach ($this->platforms as $platform) {
            $buttons_html .= $this->generateButtonHtml($platform->getPlatformName(), $platform->getShareUrl($url));
        }

        return $buttons_html;
    }

    private function generateButtonHtml($platform_name, $url) {
        return '
        <a href="' . esc_url($url) . '" target="_blank" class="social-button ' . strtolower($platform_name) . '" title="Share on ' . esc_html($platform_name) . '">
            <i class="fa fa-' . strtolower($platform_name) . '"></i> ' . esc_html($platform_name) . '
        </a>';
    }
}