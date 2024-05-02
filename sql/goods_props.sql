SET NAMES 'utf8';

use webdevkin;
create table goods_props (
    id int(10) unsigned not null auto_increment,
    good_id int(10) unsigned not null,
    prop varchar(255) not null,
    value varchar(255) not null,
    primary key (id)
)
engine = innodb
auto_increment = 16
avg_row_length = 1170
character set utf8
collate utf8_general_ci;