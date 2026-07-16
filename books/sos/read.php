<?php
$pages = explode(NEWLINE . '---' . NEWLINE, disk_file_get_contents(__DIR__ . '/data/contents.md'));
$links = getSheet(__DIR__ . '/data/links.tsv', false);
//addStyle('books', SECTIONASSETS);

$linkReplaces = [];

foreach ($links->rows as $item) {
	$no = $links->getValue($item, 'sno');
	$url = $links->getValue($item, 'link');
	$url_r = str_replace($links->values['prefix'], '', $url);
	$url = replaceHtml($url);
	$link = markdown('[' . $url_r . '](' . $url . '~~TARGETNEW)');
	$go = markdown('[GO: ' . $no . '](' . pageUrl(nodeValue() . '/go/' . $no) . '~~TARGETNEW)');
	$linkReplaces['<!--link/' . $no . '/link-->']
		= $link . BRNL . 'image#todo-qrcode-' . $no . BRNL . $go;
}

contentBox('page-1', 'container mt-5');
foreach ($pages as $ix => $item) {
	if ($ix != 0) echo cbCloseAndOpen('new-page container my-4')
		. '<span class="float-right p-3 btn btn-info">Page ' . ($ix + 1) . '</span>';
	renderSet::create()->markdown()->render($item, ['plainReplaces' => $linkReplaces]);
}
contentBox('end');
