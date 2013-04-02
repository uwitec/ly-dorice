/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2013/4/2 15:22:29                            */
/*==============================================================*/


drop table if exists ly_activity;

drop table if exists ly_area;

drop table if exists ly_cook_style;

drop table if exists ly_estimate;

drop table if exists ly_favorite_shop;

drop table if exists ly_food;

drop table if exists ly_food_category;

drop table if exists ly_food_cook_style;

drop table if exists ly_food_food_category;

drop table if exists ly_food_food_material;

drop table if exists ly_food_food_taste;

drop table if exists ly_food_material;

drop table if exists ly_food_taste;

drop table if exists ly_like_food;

drop table if exists ly_menu;

drop table if exists ly_menu_food;

drop table if exists ly_shop;

drop table if exists ly_users;

/*==============================================================*/
/* Table: ly_activity                                          */
/*==============================================================*/
create table ly_activity
(
   id                   int not null,
   shop_id              bigint,
   title                varchar(200),
   summary              varchar(200),
   description          varchar(3276),
   start_time           timestamp,
   end_time             timestamp,
   create_time          timestamp,
   primary key (id)
);

/*==============================================================*/
/* Table: ly_area                                              */
/*==============================================================*/
create table ly_area
(
   id                   int not null,
   parent_id            int,
   name                 varchar(100),
   code                 varchar(20),
   type                 char(1),
   primary key (id)
);

/*==============================================================*/
/* Table: ly_cook_style                                        */
/*==============================================================*/
create table ly_cook_style
(
   id                   int not null,
   name                 varchar(50),
   code                 varchar(50),
   primary key (id)
);

/*==============================================================*/
/* Table: ly_estimate                                          */
/*==============================================================*/
create table ly_estimate
(
   id                   int not null,
   user_id              bigint,
   title                varchar(200),
   content              varchar(3276),
   obj_type             char(1),
   obj_id               int,
   primary key (id)
);

/*==============================================================*/
/* Table: ly_favorite_shop                                     */
/*==============================================================*/
create table ly_favorite_shop
(
   user_id              bigint not null,
   shop_id              bigint not null,
   primary key (user_id, shop_id)
);

/*==============================================================*/
/* Table: ly_food                                              */
/*==============================================================*/
create table ly_food
(
   id                   bigint not null,
   shop_id              bigint,
   name                 varchar(100),
   price                float,
   bargain_price        float,
   remark               text,
   pic                  varchar(256),
   flag                 varchar(200),
   primary key (id)
);

/*==============================================================*/
/* Table: ly_food_category                                     */
/*==============================================================*/
create table ly_food_category
(
   id                   int not null,
   name                 varchar(50),
   code                 varchar(50),
   primary key (id)
);

/*==============================================================*/
/* Table: ly_food_cook_style                                   */
/*==============================================================*/
create table ly_food_cook_style
(
   food_id              bigint not null,
   style_id             int not null,
   primary key (food_id, style_id)
);

/*==============================================================*/
/* Table: ly_food_food_category                                */
/*==============================================================*/
create table ly_food_food_category
(
   food_id              bigint not null,
   category_id          int not null,
   primary key (food_id, category_id)
);

/*==============================================================*/
/* Table: ly_food_food_material                                */
/*==============================================================*/
create table ly_food_food_material
(
   food_id              bigint not null,
   material_id          int not null,
   primary key (food_id, material_id)
);

/*==============================================================*/
/* Table: ly_food_food_taste                                   */
/*==============================================================*/
create table ly_food_food_taste
(
   food_id              bigint not null,
   taste_id             int not null,
   primary key (food_id, taste_id)
);

/*==============================================================*/
/* Table: ly_food_material                                     */
/*==============================================================*/
create table ly_food_material
(
   id                   int not null,
   name                 varchar(50),
   code                 varchar(50),
   primary key (id)
);

/*==============================================================*/
/* Table: ly_food_taste                                        */
/*==============================================================*/
create table ly_food_taste
(
   id                   int not null,
   name                 varchar(50),
   code                 varchar(50),
   primary key (id)
);

/*==============================================================*/
/* Table: ly_like_food                                         */
/*==============================================================*/
create table ly_like_food
(
   user_id              bigint not null,
   food_id              bigint not null,
   primary key (user_id, food_id)
);

/*==============================================================*/
/* Table: ly_menu                                              */
/*==============================================================*/
create table ly_menu
(
   id                   bigint not null,
   shop_id              bigint,
   name                 varchar(200),
   rank                 char(10),
   primary key (id)
);

/*==============================================================*/
/* Table: ly_menu_food                                         */
/*==============================================================*/
create table ly_menu_food
(
   menu_id              bigint not null,
   food_id              bigint not null,
   primary key (menu_id, food_id)
);

/*==============================================================*/
/* Table: ly_shop                                              */
/*==============================================================*/
create table ly_shop
(
   id                   bigint not null,
   area_id              int,
   name                 varchar(200),
   logo                 varchar(200),
   tel                  varchar(50),
   remark               text,
   comment              varchar(200),
   bus_line             varchar(200),
   train_line           varchar(200),
   view_type            char(1),
   park                 char(1),
   swiping_card         char(1),
   has_parlor           char(1),
   volume               int,
   take_out             char(1),
   start_price          float,
   primary key (id)
);

/*==============================================================*/
/* Table: ly_users                                             */
/*==============================================================*/
create table ly_users
(
   id                   bigint not null,
   area_id              int,
   username             varchar(20),
   nickname             varchar(100),
   password             varchar(100),
   realname             varchar(100),
   sex                  char(1),
   email                varchar(256),
   photo                varchar(256),
   tel                  varchar(20),
   qicq                 varchar(20),
   level                smallint,
   registe_ip           varchar(15),
   create_time          timestamp,
   last_visit_time      timestamp,
   last_login_ip        varchar(15),
   login_times          int,
   online_state         char(1),
   primary key (id)
);

alter table ly_activity add constraint fk_shop_activity foreign key (shop_id)
      references ly_shop (id) on delete restrict on update restrict;

alter table ly_area add constraint fk_relation_self foreign key (parent_id)
      references ly_area (id) on delete restrict on update restrict;

alter table ly_estimate add constraint fk_user_estimate foreign key (user_id)
      references ly_users (id) on delete restrict on update restrict;

alter table ly_favorite_shop add constraint fk_ly_favorite_shop foreign key (shop_id)
      references ly_shop (id) on delete restrict on update restrict;

alter table ly_favorite_shop add constraint fk_ly_favorite_shop foreign key (user_id)
      references ly_users (id) on delete restrict on update restrict;

alter table ly_food add constraint fk_food_shop foreign key (shop_id)
      references ly_shop (id) on delete restrict on update restrict;

alter table ly_food_cook_style add constraint fk_ly_food_cook_style foreign key (style_id)
      references ly_cook_style (id) on delete restrict on update restrict;

alter table ly_food_cook_style add constraint fk_ly_food_cook_style foreign key (food_id)
      references ly_food (id) on delete restrict on update restrict;

alter table ly_food_food_category add constraint fk_ly_food_food_category foreign key (category_id)
      references ly_food (id) on delete restrict on update restrict;

alter table ly_food_food_category add constraint fk_ly_food_food_category foreign key (category_id)
      references ly_food_category (id) on delete restrict on update restrict;

alter table ly_food_food_material add constraint fk_ly_food_food_material foreign key (food_id)
      references ly_food (id) on delete restrict on update restrict;

alter table ly_food_food_material add constraint fk_ly_food_food_material foreign key (material_id)
      references ly_food_material (id) on delete restrict on update restrict;

alter table ly_food_food_taste add constraint fk_ly_food_food_taste foreign key (food_id)
      references ly_food (id) on delete restrict on update restrict;

alter table ly_food_food_taste add constraint fk_ly_food_food_taste foreign key (taste_id)
      references ly_food_taste (id) on delete restrict on update restrict;

alter table ly_like_food add constraint fk_ly_like_food foreign key (food_id)
      references ly_food (id) on delete restrict on update restrict;

alter table ly_like_food add constraint fk_ly_like_food foreign key (user_id)
      references ly_users (id) on delete restrict on update restrict;

alter table ly_menu add constraint fk_shop_menu foreign key (shop_id)
      references ly_shop (id) on delete restrict on update restrict;

alter table ly_menu_food add constraint fk_ly_menu_food foreign key (food_id)
      references ly_food (id) on delete restrict on update restrict;

alter table ly_menu_food add constraint fk_ly_menu_food foreign key (menu_id)
      references ly_menu (id) on delete restrict on update restrict;

alter table ly_shop add constraint fk_ahop_area foreign key (area_id)
      references ly_area (id) on delete restrict on update restrict;

alter table ly_users add constraint fk_user_area foreign key (area_id)
      references ly_area (id) on delete restrict on update restrict;

