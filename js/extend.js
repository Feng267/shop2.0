/**
 * 封装的一些通用函数
 */
//判断图片是否损坏
function imgError(){ 
    var img = event.srcElement; 
    img.src = "img/error/img_not_exist.jpg";// 默认替换的图片
    img.onerror = null; //控制不要一直跳动 
}

// 获取url携带的参数
function GetRequest() {
    let url = location.search; //获取url中"?"符后的字串  
    let theRequest = new Object();
    if (url.indexOf("?") != -1) {
        let str = url.substr(1);
        strs = str.split("&");
        for (let i = 0; i < strs.length; i++) {
            theRequest[strs[i].split("=")[0]] = decodeURI(strs[i].split("=")[1]);
        }
    }
    return theRequest;
}

// 返回n~m的随机整数
function randomNum(minNum,maxNum){ 
    switch(arguments.length){ 
        case 1: 
            return parseInt(Math.random()*minNum+1,10); 
        break; 
        case 2: 
            return parseInt(Math.random()*(maxNum-minNum+1)+minNum,10); 
        break; 
            default: 
                return 0; 
            break; 
    } 
}

// 设置商品属性中被点击的按钮的样式
function exclusive(select, class_name = "s1" , selected_name = " selected "){        
    for(var i = 0; i < select.length; i++){
        select[i].onclick = function(){// 点击时指定的元素样式发生改变            
            for(var j = 0; j < select.length; j++){// 先将所有的元素样式清除
                select[j].className = class_name;
            }
            this.className = class_name + " " + selected_name;// 再单独设置指定元素的样式
        }
    }
}

// layUI的弹窗提醒
function layerMsg(e){
    switch(e){
        case 1:
            layer.msg('加入购物车成功！', { icon: 1, time: 1000, shade: [0.6, '#000', true] });
            break;
        case 2:
            layer.msg('加入购物车失败！', { icon: 2, time: 1500, shade: [0.6, '#000', true] });
            break;
        case 3:
            layer.msg('请先登录！', { icon: 7, time: 1000, shade: [0.6, '#000', true] });
            break;
        case 4:
            layer.msg('确认收货成功！', { icon: 1, time: 1000, shade: [0.6, '#000', true] });
            break;
        case 5:
            layer.msg('确认收货失败！', { icon: 2, time: 1000, shade: [0.6, '#000', true] });
            break;
        case 7:
            layer.msg('好的少侠，正在为您加紧发货呢！', { icon: 1, time: 1000, shade: [0.6, '#000', true] });
            break;
        case 8:
            layer.msg('页码超出了哦', { icon: 2, time: 1500, shade: [0.6, '#000', true] });
            break;        
        case 9:
            layer.msg('该商品还未上架哦！', { icon: 7, time: 1500, shade: [0.6, '#000', true] });
            break;               
        case 10:
            layer.msg('提交订单成功！', { icon: 1, time: 1000, shade: [0.6, '#000', true] });
            break;        
        case 11:
            layer.msg('提交订单失败！', { icon: 2, time: 1500, shade: [0.6, '#000', true] });
            break;        
        case 12:
            layer.msg('修改成功', { icon: 1, time: 1000, shade: [0.6, '#000', true] });
            break;
        case 13:
            layer.msg('账号或密码错误！', { icon: 2, time: 1500, shade: [0.6, '#000', true] });
            break;               
        case 14:
            layer.msg('支付成功', { icon: 1, time: 1000, shade: [0.6, '#000', true] });
            break;               
        case 15:
            layer.msg('支付失败！', { icon: 2, time: 1500, shade: [0.6, '#000', true] });
            break; 
        default:
            layer.msg('该功能正在开发中，请稍后呢', { icon: 1, time: 1500, shade: [0.6, '#000', true] });
            break;
    }
}

// 搜索商品跳转函数
function serarch_goods(){
    query = document.querySelector("#autocomplete").value;
    let url = window.location.pathname;// 当前页面的路径信息
    if(url == '/shop/search.php'){// 表示从搜索页面再次搜索
        cat_id = '';
        try {
            clearDomList(goods_list_wrap, 1);// 清除之前的商品
		    getGoodsList();// 获取新的商品
        } catch (error) {
            console.log(error);
        }        
    }else{ // 表示从其他页面跳转过来
        let url_2 = "search.php?query=" + query;
        window.open(url_2);		
    }
}

// 清除当前dom元素
function clearDomList(parent_node, limit = 0){
    children = parent_node.children;
    //从后往前删除，防止下标错乱
    for(let i = children.length - 1; i >= limit; i--){
        parent_node.removeChild(children[0]);
    }
}

// 提取节点下的纯文本
function removeHTMLTag(str) {
    str = str.replace(/<\/?[^>]*>/g, ''); //去除HTML tag
    str = str.replace(/[ | ]*\n/g, '\n'); //去除行尾空白
    //str = str.replace(/\n[\s| | ]*\r/g,'\n'); //去除多余空行
    str = str.replace(/&nbsp;/ig, ''); //去掉&nbsp;
    str = str.replace(/\s/g, ''); //将空格去掉
    return str;
}

// 返回顶部按钮
$(function(){
    $(window).scroll(function(){  //只要窗口滚动,就触发下面代码
    var scrollt = document.documentElement.scrollTop + document.body.scrollTop; //获取滚动后的高度
    if( scrollt >200 ){  //判断滚动后高度超过200px,就显示
        $("#back_top").fadeIn(400); //淡入
    }else{
        $("#back_top").stop().fadeOut(400); //如果返回或者没有超过,就淡出.必须加上stop()停止之前动画,否则会出现闪动
    }
    });
    $("#back_top").click(function(){ //当点击标签的时候,使用animate在200毫秒的时间内,滚到顶部
    $("html,body").animate({scrollTop:"0px"},200);
    }); 
});