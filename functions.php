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
}
function themeFields($layout) {
    $toutu = new Typecho_Widget_Helper_Form_Element_Text('toutu', NULL, NULL, _t('文章头图'), _t(''));
    $layout->addItem($toutu);
	$guanjianci = new Typecho_Widget_Helper_Form_Element_Text('guanjianci', NULL, NULL, _t('关键词'), _t(''));
    $layout->addItem($guanjianci);
	$miaoshu = new Typecho_Widget_Helper_Form_Element_Text('miaoshu', NULL, NULL, _t('描述'), _t(''));
    $layout->addItem($miaoshu);
}
function upyuntoken($picurl){
echo"@".$picurl."-";
$etime = time() + 600;
$key = 'cMgWDqIcfPVx0Xa51FtgjEmsBCI3h3vL';
$path = $picurl;
$_upt = substr( md5($key.'&'.$etime.'&'.$path), 12, 8 ) . $etime;
$endurl = "https://cdn.loli.life".$path."?_upt=".$_upt;
echo $endurl;
}
?>