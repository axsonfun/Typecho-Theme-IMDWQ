<?php
function themeConfig($form) {
	$touxiang = new Typecho_Widget_Helper_Form_Element_Text('touxiang', NULL, NULL, _t('头像'), _t(''));
    $form->addInput($touxiang);
	$name = new Typecho_Widget_Helper_Form_Element_Text('name', NULL, NULL, _t('昵称'), _t(''));
    $form->addInput($name);
    $jieshao = new Typecho_Widget_Helper_Form_Element_Text('jieshao', NULL, NULL, _t('介绍'), _t(''));
    $form->addInput($jieshao);
	$footer = new Typecho_Widget_Helper_Form_Element_Text('footer', NULL, NULL, _t('底部'), _t(''));
    $form->addInput($footer);
    $biaoti = new Typecho_Widget_Helper_Form_Element_Text('biaoti', NULL, NULL, _t('标题'), _t(''));
    $form->addInput($biaoti);
	$fubiaoti = new Typecho_Widget_Helper_Form_Element_Text('fubiaoti', NULL, NULL, _t('副标题'), _t(''));
    $form->addInput($fubiaoti);
	$guanjianci = new Typecho_Widget_Helper_Form_Element_Text('guanjianci', NULL, NULL, _t('关键词'), _t(''));
    $form->addInput($guanjianci);
	$miaoshu = new Typecho_Widget_Helper_Form_Element_Text('miaoshu', NULL, NULL, _t('描述'), _t(''));
    $form->addInput($miaoshu);
	$icon = new Typecho_Widget_Helper_Form_Element_Text('icon', NULL, NULL, _t('图标'), _t(''));
    $form->addInput($icon);
	$touxianglian = new Typecho_Widget_Helper_Form_Element_Text('touxianglian', NULL, NULL, _t('头像链'), _t(''));
    $form->addInput($touxianglian);
    $banquan = new Typecho_Widget_Helper_Form_Element_Text('banquan', NULL, NULL, _t('文章版权'), _t(''));
    $form->addInput($banquan);
    $blblid = new Typecho_Widget_Helper_Form_Element_Text('blblid', NULL, NULL, _t('哔哩哔哩ID'), _t(''));
    $form->addInput($blblid);
    $blblcookie = new Typecho_Widget_Helper_Form_Element_Text('blblcookie', NULL, NULL, _t('哔哩哔哩Cookie'), _t(''));
    $form->addInput($blblcookie);
    
}
function themeFields($layout) {
    $toutu2 = new Typecho_Widget_Helper_Form_Element_Text('toutu2', NULL, NULL, _t('首页头图'), _t(''));
    $layout->addItem($toutu2);
    $toutu = new Typecho_Widget_Helper_Form_Element_Text('toutu', NULL, NULL, _t('文章头图'), _t(''));
    $layout->addItem($toutu);
	$guanjianci = new Typecho_Widget_Helper_Form_Element_Text('guanjianci', NULL, NULL, _t('关键词'), _t(''));
    $layout->addItem($guanjianci);
	$miaoshu = new Typecho_Widget_Helper_Form_Element_Text('miaoshu', NULL, NULL, _t('描述'), _t(''));
    $layout->addItem($miaoshu);
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