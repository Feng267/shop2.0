/* 0、创建商城数据库 */
create database shop charset utf8;

/* 1、创建用户表 */
create table user(
    numb int auto_increment unique comment '序号',
    user_id char(11) primary key comment '用户id',
    password varchar(256) not null comment '明文密码',
    date timestamp not null comment '日期时间'
);
-- 1.1 插入用户数据到用户表
insert into user(user_id, password) values
('18522444594', '18522444594'),
('13976107536', '13976107536'),
('19978302854', '19978302854'),
('15717722016', '15717722016'),
('13150512325', '13150512325'),
('13150512315', '13150512315'),
('17776408233', '17776408233'),
('18522444593', '18522444593'),
('18978535617', '18978535617'),
('17374840732',	'17374840732'),
('12345678901',	'12345678901'),
('18377438045',	'18377438045');
-- 1.2 修改password字段
alter table user modify password varchar(256) not null comment '密文密码';



/* 2、创建管理员用户表 */
create table user_admin(
    numb int not null auto_increment unique comment '序号',
    user_id varchar(30) primary key comment '用户名',
    password varchar(256) not null comment '明文密码',
    name varchar(50) not null comment '昵称',
    gender tinyint(1) not null default 1 comment '性别',
    authority tinyint not null default 1 comment '后台人员的权限, 0表示最高',
    date timestamp not null comment '日期时间'
);
-- 2.1 插入一条记录
insert into user_admin(user_id, password, name) values( 'admin', 'admin', '默认管理员');
-- 2.2 修改password字段
alter table user_admin modify password varchar(256) not null comment '密文密码';


/* 3、创建用户基本信息表 */
create table user_info(
    numb int auto_increment unique comment '序号',
    openid varchar(50)  unique comment '微信用户唯一ID',
    name varchar(50) not null comment '昵称',
    gender tinyint(1) not null default 1 comment '性别',
    tel varchar(11) primary key comment '手机号码',
    mailbox varchar(50)  comment '邮箱',
    head_pic varchar(200) not null comment '头像URL',
    date datetime not null default CURRENT_TIMESTAMP comment '用户注册时间'
);
-- 3.1 插入一条记录
insert into user_info(name, tel, head_pic) values("张少峰", '12345678901', 'https://7368-shuyuabn-9gke6t6k962d48ca-1304045188.tcb.qcloud.la/image/1.JPG?sign=6a578b89d06a74141a01b35b26684e04&t=1612536951');
-- 3.2 修改性别字段
alter table user_info modify gender varchar(2) not null default '男' comment '性别';

/* 4、创建商品基本信息表 */
create table goods_info (
  `numb` int(11) not null auto_increment comment '序号',
  `goods_id` int(11) not null comment '商品id',
  `cat_id` int(11) not null comment '分类id',
  goods_shelf_numb json comment '商品货架号',
  `cat_name` varchar(30) default NULL comment '分类名称',
  `goods_name` varchar(200) not null comment '商品名称',
  `goods_price` int(11) default '99999' comment '商品价格',
  `goods_number` int(11) not null comment '商品库存数量',
  `goods_big_logo` varchar(200) default NULL comment '商品大图片',
  `goods_small_logo` varchar(200) default NULL comment '商品小图片',
  goods_status tinyint(1) not null default 1 comment '商品状态，0表示已下架，1表示正常售卖',
  `date` datetime not null default CURRENT_TIMESTAMP comment '商品上架时间',
  PRIMARY KEY (`goods_id`),
  UNIQUE KEY `numb` (`numb`)
) ENGINE=InnoDB default CHARSET=utf8;
-- 4.1 插入一条记录（测试使用，已删除）
insert into goods_info(goods_id, cat_id, goods_shelf_numb, cat_name, goods_name, goods_price, goods_number, goods_big_logo, goods_small_logo)
values(26418, 16, '[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]', '飞利浦', '【套餐】飞利浦（Philips）65PUF6031/T3 65英寸 4K超高清 智能 LED平板液晶+延长保修计划一年', 0, 100, 'http://image3.suning.cn/uimg/b2c/newcatentries/0000000000-000000000945011456_1_800x800.jpg', 'http://image3.suning.cn/uimg/b2c/newcatentries/0000000000-000000000945011456_1_400x400.jpg');
-- 4.2 重置表
truncate table goods_info;
-- 4.3 更新商品分类名称（商品数据已导入）
update goods_info as g set cat_name = (select cat_name from cat_info as c where g.cat_id = c.cat_id);
alter table goods_info modify cat_id int default null ;
alter table goods_info modify goods_name text default null ;


/* 5、创建订单基本信息表 */
CREATE TABLE `order_info` (
  `numb` int(11) NOT NULL AUTO_INCREMENT comment '序号',
  `order_id` char(22) NOT NULL COMMENT '订单编号',
  `user_id` char(11) NOT NULL COMMENT '用户id',
  `total_price` int(11) NOT NULL COMMENT '订单总价',
  `received_addr` varchar(200) NOT NULL COMMENT '收货地址',
  `received_tel` varchar(11) NOT NULL COMMENT '收货号码',
  `received_people` varchar(20) NOT NULL COMMENT '收货人',
  order_type tinyint not null default 0 comment '订单类型，0代表零售，1代表批发',
  `order_status` tinyint NOT NULL DEFAULT 0 COMMENT '订单状态, 0表示 待付款，1表示 已付款待发货，2表示 已发货待收货，3表示 已收货待评价，4表示 历史订单',  
  Logistics_numb varchar(25) default null comment '物流单号',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '订单创建时间',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `numb` (`numb`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
  /* `order_status` enum('待付款','已付款待发货','已发货待收货','已收货待评价','历史订单') NOT NULL DEFAULT '待付款' COMMENT '订单状态', */
--5.1 插入一条记录
insert into order_info(order_id, user_id, total_price, received_addr, received_tel, received_people) values(
    '2021052810345212388921', '12345678901', 2893, '广西来宾市兴宾区', '12345678901','张少峰'
);
--5.2 重置表
truncate table order_info;

/* 6、创建订单详情表 */
CREATE TABLE `order_detail` (
  `numb` int(11) NOT NULL AUTO_INCREMENT comment '序号',
  `order_id` char(22) NOT NULL COMMENT '订单编号',
  `user_id` char(11) NOT NULL COMMENT '用户id',
  `goods_id` int(11) NOT NULL COMMENT '商品id',
  `cat_id` int(11) DEFAULT NULL comment '商品分类id',
  `cat_name` varchar(20) NOT NULL COMMENT '商品分类名称',
  goods_shelf_numb int comment '商品货架号',
  `goods_attr` json  COMMENT '商品属性',
  `goods_price` int(11) NOT NULL COMMENT '商品单价',
  `goods_number` int(11) NOT NULL DEFAULT '1' COMMENT '商品数量',
  `order_summary` int(11) NOT NULL COMMENT '订单小结',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '订单创建时间',
  PRIMARY KEY (`numb`, `order_id`),
  UNIQUE KEY `numb` (`numb`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--6.1 插入一条记录
insert into order_detail(order_id, user_id, goods_id, cat_id, cat_name, goods_attr, goods_price, goods_number, order_summary) values(
    '2021052810345212388921', '12345678901', 26423, 16, '飞利浦', JSON_OBJECT("尺寸", "70英寸 全面屏 16G大内存", "套餐", "套餐一 "), 1099, 1, 1099
)-- JSON_OBJECT(key1,value1, key2, value2)是MySQL的JSON格式化函数，可以用来保证插入的数据是json格式
--6.2 重置表
truncate table order_detail;

--6.3 修改cat_name 字段为允许空值
alter table order_detail modify  cat_name varchar(20) COMMENT '商品分类名称';

/* 7、创建购物车信息表 */
CREATE TABLE `shop_cart_info` (
  `numb` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `user_id` char(11) NOT NULL COMMENT '用户id',
  `goods_id` int(11) NOT NULL COMMENT '商品id',
  `goods_name` varchar(200) not null comment '商品名称',
  `cat_id` int(11) NOT NULL COMMENT '分类id',
  `cat_name` varchar(20) NOT NULL COMMENT '商品分类名称',
  `goods_attr` json  COMMENT '商品属性',
  `goods_price` int(11) NOT NULL DEFAULT '99999' COMMENT '商品单价',
  `goods_number` int(11) NOT NULL DEFAULT '1' COMMENT '商品数量',
  `total_price` int(11) NOT NULL COMMENT '总价',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  UNIQUE KEY `numb` (`numb`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
--7.1 插入一条记录
insert into shop_cart_info(user_id, goods_id, cat_id, cat_name, goods_attr, goods_price, goods_number, total_price) value(
    '12345678901', 26423, 16, '飞利浦',  JSON_OBJECT("尺寸", "70英寸 全面屏 16G大内存", "套餐", "套餐一 "), 1099, 1, 1099
);
--7.2 重置表
truncate table shop_cart_info;
--7.3 增加商品名称字段
alter table shop_cart_info add goods_name varchar(200) not null comment '商品名称' after goods_id;


/* 8、创建用户收货信息表 */
CREATE TABLE `received_info` (
  `numb` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `user_id` char(11) NOT NULL COMMENT '用户id',
  `received_people` varchar(20) NOT NULL COMMENT '收货人',
  `received_tel` varchar(11) NOT NULL COMMENT '收获号码',
  `received_addr` varchar(200) NOT NULL COMMENT '收货地址',
  `postcode` int(11) NOT NULL COMMENT '邮政编码',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '加入购物车时间',
  UNIQUE KEY `numb` (`numb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--8.1 插入一条记录
insert into received_info(user_id, received_people, received_tel, received_addr, postcode) value(
    '12345678901', '张超', '17712345678', '广西科技师范学院来宾校区铁北大道966号', 546100
);
-- select received_people, received_tel, received_addr from received_info where user_id = '12345678901';

/* 9、创建商品分类信息表 */
CREATE TABLE cat_info (
  `numb` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `cat_id` int NOT NULL COMMENT '分类id',
  `cat_name` varchar(20) NOT NULL COMMENT '商品分类名称',
  cat_pid int not null comment '上级分类id',
  cat_level int not null comment '分类级别',
  cat_icon varchar(200) default NULL comment '分类图标',
  goods_number int not null default 0 comment '商品库存数量',
  rest_goods_number int not null default 0 comment '剩余的商品库存数量',
  goods_shelf_total int not null default 0 comment '货架上的商品数量',
  rest_goods_shelf_total int not null default 0 comment '剩余的货架上的商品数量',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  primary KEY `numb` (`numb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--9.1 插入一条记录
insert into cat_info(cat_id, cat_name, cat_pid, cat_level) value(
    5, '曲面电视', 1, 2 
);
--9.2 重置表
truncate table cat_info;
--9.3 补充商品数量信息
update cat_info as c set goods_number = 100*(select count(*) from goods_info as g where g.cat_id = c.cat_id);
update cat_info set rest_goods_number = goods_number;

update cat_info set goods_shelf_total = goods_number * 0.2;
update cat_info set rest_goods_shelf_total = goods_number * 0.2;

-- 由于不能将源表作为查询表，所以新建一个表
CREATE TABLE cat_info_2 like cat_info;-- 创建新表
insert into cat_info_2 select * from cat_info;-- 从旧表复制数据

-- 删除最后一个分类（其他分类）下的分类信息
delete from cat_info where goods_number = 0 and cat_level = 2;
delete from cat_info where cat_pid = 1480 and cat_level = 1;
delete from cat_info where cat_id = 1480;

-- 将所有二级分类商品数量信息更新
update cat_info as c1 set goods_number = (select sum(goods_number) from cat_info_2 as c2 where  c2.cat_level = 2 and c2.cat_pid = c1.cat_id) where c1.cat_level = 1;
update cat_info as c1 set rest_goods_number = (select sum(rest_goods_number) from cat_info_2 as c2 where  c2.cat_level = 2 and c2.cat_pid = c1.cat_id) where c1.cat_level = 1;
update cat_info as c1 set goods_shelf_total = (select sum(goods_shelf_total) from cat_info_2 as c2 where  c2.cat_level = 2 and c2.cat_pid = c1.cat_id) where c1.cat_level = 1;
update cat_info as c1 set rest_goods_shelf_total = (select sum(rest_goods_shelf_total) from cat_info_2 as c2 where  c2.cat_level = 2 and c2.cat_pid = c1.cat_id) where c1.cat_level = 1;

-- 将所有一级分类信息更新（和上面的方法类似，用另一个表来辅助）
truncate table cat_info_2;
insert into cat_info_2 select * from cat_info;
update cat_info as c1 set goods_number = (select sum(goods_number) from cat_info_2 as c2 where  c2.cat_level = 1 and c2.cat_pid = c1.cat_id) where c1.cat_level = 0;
update cat_info as c1 set rest_goods_number = (select sum(rest_goods_number) from cat_info_2 as c2 where  c2.cat_level = 1 and c2.cat_pid = c1.cat_id) where c1.cat_level = 0;
update cat_info as c1 set goods_shelf_total = (select sum(goods_shelf_total) from cat_info_2 as c2 where  c2.cat_level = 1 and c2.cat_pid = c1.cat_id) where c1.cat_level = 0;
update cat_info as c1 set rest_goods_shelf_total = (select sum(rest_goods_shelf_total) from cat_info_2 as c2 where  c2.cat_level = 1 and c2.cat_pid = c1.cat_id) where c1.cat_level = 0;

-- 删除临时表
drop table cat_info_2;