<?php

//<!-- AlAnRu 20140609 begin -->
    function content_donate($content) {
        if(is_single()) {
            $content = $content . '<br /><iframe src="https://money.yandex.ru/embed/donate.xml?account=410012061063272&amp;quickpay=donate&amp;payment-type-choice=on&amp;default-sum=&amp;targets=%D0%9F%D0%BE%D0%BC%D0%BE%D1%87%D1%8C+%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D1%83+The+Insider+%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%B0%D1%82%D1%8C%D1%81%D1%8F+%D0%BD%D0%B5%D0%B7%D0%B0%D0%B2%D0%B8%D1%81%D0%B8%D0%BC%D1%8B%D0%BC&amp;target-visibility=on&amp;project-name=The+Insider&amp;project-site=&amp;button-text=01&amp;successURL=" width="523" height="131" frameborder="0" scrolling="no"></iframe>';
        }
        return $content;
    }
    add_filter('the_content', 'content_donate');
//<!-- AlAnRu 20140609 end -->