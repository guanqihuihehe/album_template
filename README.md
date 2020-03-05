# album_template 一个相册模板项目（带后台）

### 1. 使用方式
- 需要提前在数据库建好template_album数据库，排序规则为utf8_genaral_ci
- 如果是本地wampserver作为服务器，则将整个文件夹放到www文件夹下面；如果是其他服务器，就放到该服务器文件夹下面
- 本地的话，在浏览器输入localhost然后带上这个文件的本地路径就可以打开；远程就输入域名就能打开
- 初始页面是index.php页面

### 2. 功能介绍

> #### 游客功能
>> - 查看照片

> #### 管理员功能
>> - 上传照片
>> - 记录照片时间、故事
>> - 可以搜索、删除照片
>> - 设置口令访问特定页的照片
>> - 修改密码
>> - 查看别人提交的口令
>> - 设置皮肤

### 3. 文件具体作用

1. __MACOSX/hydrogen文件夹
    - 源模板自带配置文件
2. css文件夹
    - 源模板自带的样式文件
3. fonts文件夹
    - bootstrap图标的相关文件
4. images文件夹
    - 一些默认的图片
5. js文件夹
    - 源模板自带的js文件和我后来添加进去的js文件
6. pic文件夹
    - managerindex和index页图片的目录
7. picb/l/ac/k文件夹
    - managerblack页和black页的图片的目录
8. sass文件夹
    - 源模板自带预加载样式文件
9. scripts
    - 源模板自带的js文件
10. 页面型php
    - black.php,index.php,loginpage.php,managerblack.php,managerindex.php,mine.php,sign404up.php
11. 其余php都是功能型php，就是提供不同的功能
12. template_album.sql
    - 需要提前在PHPmyadmin或者其他数据库工具建立一个template_album数据库，排序规则为utf8_genaral_ci;然后导入该sql文件
