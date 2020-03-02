## 使用 hyperf 官方 docker

# 下載並執行 hyperf/hyperf 映象，並將映象內的專案目錄繫結到宿主機的 /tmp/skeleton 目錄
docker run -v /Users/monica/Documents/swoole_project_test/json_rpc_client:/hyperf-skeleton -p 9503:9503 -it --entrypoint /bin/sh hyperf/hyperf:7.2-alpine-cli Name="hyperf_json_rpc_client"

docker run -v /Users/monica/Documents/swoole_project_test/json_rpc_server:/hyperf-skeleton -p 9502:9502 -it --entrypoint /bin/sh hyperf/hyperf:7.2-alpine-cli --name="hyperf_json_rpc_server"



# 映象容器執行後，在容器內安裝 Composer
wget https://github.com/composer/composer/releases/download/1.8.6/composer.phar
chmod u+x composer.phar
mv composer.phar /usr/local/bin/composer
# 將 Composer 映象設定為阿里雲映象，加速國內下載速度
composer config -g repo.packagist composer https://mirrors.aliyun.com/composer

# 通過 Composer 安裝 hyperf/hyperf-skeleton 專案
composer create-project hyperf/hyperf-skeleton

# 進入安裝好的 Hyperf 專案目錄
cd hyperf-skeleton
# 啟動 Hyperf
php bin/hyperf.php start