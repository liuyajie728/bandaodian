<nav id=groupbuyfilter>
        <div class=single>
            <div class=title>分类</div>
            <div class=list>
                <ul class=category>
					<li><a href=#>全部</a></li>
					<?php foreach ($category as $category_item): ?>
					<li><a title="青岛<?php echo $category_item['name']; ?>团购" href=#><?php echo $category_item['name']; ?></a></li>
					<?php endforeach; ?>
				</ul>
            </div>
        </div>

</nav>
<div id=groupbuysorter>
    <ul class=basic>
        <li><a href=#>默认</a></li>
		<li><a href=# class=location>离我最近</a></li>
        <li><a href=# class=amount>销量最多</a></li>
        <li><a href=# class=date_recent>最新发布</a></li>
        <li><a href=# class=price_low>低价优先</a></li>
		<li><a href=# class=price_high>高价优先</a></li>
    </ul>
</div>

<div id=indicator class=container>
	<p id=loading>团购搜索中...</p>
	<div id=keywordreview>
		<p>找到了这些青岛<strong></strong>团购：</p>
	</div>
</div>

<ul id=content></ul>