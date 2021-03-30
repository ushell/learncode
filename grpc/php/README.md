# PHP版本gRPC客户端示例

## 依赖
基础依赖
* swoole

框架
* hyperf

包
* swoole/grpc
* hyperf/grpc-client

## 应用场景
* unary模式
* stream模式

## 示例
服务端采用: https://github.com/grpc/grpc-go/tree/master/examples

启动服务端:
```shell
// stream模式
cd route_guide && go run server/server.go

// unary模式
// 参考: https://hyperf.wiki/2.1/#/zh-cn/grpc?id=grpc-server-%e7%a4%ba%e4%be%8b
bin/hyperf.php start
```

客户端示例代码:
```shell
app/Command/UnaryGrpcClient.php
app/Command/StreamGrpcClient.php
```
