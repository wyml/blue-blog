# Blue-BLOG
a simple blog system, powerful and easy to use.

<p align="center">
<a href="https://github.com/wyml/blue-blog"><img src="https://img.shields.io/github/last-commit/wyml/blue-blog
" alt="Last Commit"></a>
<a href="https://github.com/wyml/blue-blog"><img src="https://img.shields.io/github/commit-activity/w/wyml/blue-blog
" alt="Commit Activity" /></a>
</p>

## 关于 Blue-BLOG

Blue-BLOG 是一个简单、强大且易用的博客程序，基于 Laravel 开发。采用 Sqlite 数据库，支持数据的热备份，保护数据不丢失。

基于 Laravel 的系统开发，便于系统的二次开发或拓展。

## 部署 Blue-BLOG

Blue-BLOG 是基于Laravel11.x 开发而来的，部署环境由 Laravel 决定。

1.  克隆仓库

```shell
$ git clone https://github.com/wyml/blue-blog.git
```
国内可以采用 GITEE 镜像：
```shell
$ git clone https://gitee.com/kingsr/blue-blog.git
```

2. 安装依赖

```shell
$ composer install
$ pnpm install
```

3. 编译前端

```shell
$ pnpm build
```

4. 复制 `.env.example` 为 `.env` 并生成 Laravel Key

```shell
$ php artisan key:generate
```

## 联系我

- EMAIL：mailto:lanjiabin.slef@qq.com
- BLOG：https://landonblue.cn

## License

Blue-BLOG 是一个开源程序，采用 [MIT license](https://opensource.org/licenses/MIT).
