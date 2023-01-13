<?php
function themeConfig($form) {
	$touxiang = new Typecho_Widget_Helper_Form_Element_Text('touxiang', NULL, NULL, _t('主页头像'), _t(''));
    $form->addInput($touxiang);
	$name = new Typecho_Widget_Helper_Form_Element_Text('name', NULL, NULL, _t('主页昵称'), _t(''));
    $form->addInput($name);
    $jieshao = new Typecho_Widget_Helper_Form_Element_Text('jieshao', NULL, NULL, _t('主页介绍'), _t(''));
    $form->addInput($jieshao);
    $biaoti = new Typecho_Widget_Helper_Form_Element_Text('biaoti', NULL, NULL, _t('网站标题'), _t(''));
    $form->addInput($biaoti);
    $fubiaoti = new Typecho_Widget_Helper_Form_Element_Text('fubiaoti', NULL, NULL, _t('网站副标题'), _t(''));
    $form->addInput($fubiaoti);
    $footer = new Typecho_Widget_Helper_Form_Element_Text('footer', NULL, NULL, _t('底部文字'), _t(''));
    $form->addInput($footer);
	$guanjianci = new Typecho_Widget_Helper_Form_Element_Text('guanjianci', NULL, NULL, _t('SEO关键词'), _t(''));
    $form->addInput($guanjianci);
	$miaoshu = new Typecho_Widget_Helper_Form_Element_Text('miaoshu', NULL, NULL, _t('SEO描述'), _t(''));
    $form->addInput($miaoshu);
	$icon = new Typecho_Widget_Helper_Form_Element_Text('icon', NULL, NULL, _t('网站图标'), _t(''));
    $form->addInput($icon);
	$touxianglian = new Typecho_Widget_Helper_Form_Element_Text('touxianglian', NULL, NULL, _t('头像链接'), _t(''));
    $form->addInput($touxianglian);
    $banquan = new Typecho_Widget_Helper_Form_Element_Text('banquan', NULL, NULL, _t('文章版权'), _t(''));
    $form->addInput($banquan);
    $blblid = new Typecho_Widget_Helper_Form_Element_Text('blblid', NULL, NULL, _t('哔哩哔哩ID'), _t(''));
    $form->addInput($blblid);
    $blblcookie = new Typecho_Widget_Helper_Form_Element_Text('blblcookie', NULL, NULL, _t('哔哩哔哩Cookie'), _t(''));
    $form->addInput($blblcookie);
    $caidan = new Typecho_Widget_Helper_Form_Element_Text('caidan', NULL, NULL, _t('侧栏菜单'), _t(''));
    $form->addInput($caidan);
}
function themeFields($layout) {
    $toutu2 = new Typecho_Widget_Helper_Form_Element_Text('toutu2', NULL, NULL, _t('首页图片'), _t(''));
    $layout->addItem($toutu2);
    $toutu = new Typecho_Widget_Helper_Form_Element_Text('toutu', NULL, NULL, _t('文章页图片'), _t(''));
    $layout->addItem($toutu);
	$guanjianci = new Typecho_Widget_Helper_Form_Element_Text('guanjianci', NULL, NULL, _t('SEO关键词'), _t(''));
    $layout->addItem($guanjianci);
	$miaoshu = new Typecho_Widget_Helper_Form_Element_Text('miaoshu', NULL, NULL, _t('SEO描述'), _t(''));
    $layout->addItem($miaoshu);
    $xiaozi = new Typecho_Widget_Helper_Form_Element_Text('xiaozi', NULL, NULL, _t('独立页面小字'), _t(''));
    $layout->addItem($xiaozi);
    $datu = new Typecho_Widget_Helper_Form_Element_Text('datu', NULL, NULL, _t('独立页面图标'), _t(''));
    $layout->addItem($datu);
}
function blblget($url) {
    $options = Typecho_Widget::widget('Widget_Options');
        $curl = curl_init();
        $header = array(
            'Accept: */*',
            'Origin: https://space.bilibili.com',
            'Sec-Fetch-Mode: cors'
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_REFERER, 'https://space.bilibili.com/bangumi');
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.87 Safari/537.36");
        curl_setopt($curl, CURLOPT_COOKIE, $options->blblcookie);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $tmpInfo = curl_exec($curl);
        curl_close($curl);
        return $tmpInfo;
    }
?>