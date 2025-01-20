<?php
class SocialMediaSharing
{
    public function __construct(private SocialMediaButtons $buttons) {}

    public function init() {
        add_filter('the_content', [$this, 'addSocialButtonsInContent']);
    }

    public function addSocialButtonsInContent($content) {
        if (is_single() || is_page()) {
            $url = get_permalink();
            $buttons = $this->buttons->getShareButtons($url);
            $content = $buttons . $content . $buttons;
        }
        
        return $content;
    }
}