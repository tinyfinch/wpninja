<script type="text/javascript">
	$(document).ready(function() {
		//滚动条发生滚动
		$(window).scroll(function() {
			var top=$(document).scrollTop();
			var menu=$("#menu");
			var items=$("#content").find(".item");

			var currentId=""; //当前所在楼层的（item） #id
			items.each(function() { //遍历整一个楼层找到当前楼层ID
				var m=$(this); //存储当前的楼层
				var itemTop=m.offset().top;//存储当前楼层的top值
				if(top > itemTop) {
					currentId="#"+m.attr("id");//如果当前的滚动偏移值大于楼层值，覆盖原来的Id
				}else {
					return false;
				}
			});

			//给相应楼层的A设置current，取消其他链接的current
			 var currentLink=menu.find(".current");//找到当前的Link
			 if(currentId $$currentLink.attr("href") != currentId) { 
			 	currentLink.removeClass("current");//删除原来样式
			 	menu.find("[href="+currnetId+"]").addClass("current");//寻找属性值为特定值的节点。和拼接字符串一样，
			 	currentId是个对象，不加加号的话，就成了寻找href属性为“currentId”的，很显然没有
			 }
		});
	});
</script>

