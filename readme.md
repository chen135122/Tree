### Admin

```php
                users(用户表)  
               /   \
              /     \ 
     (多对多) /       \ (一对多)
            /         \
           /           \              (多对多)
    domain(区域表)      roles(角色表) ------> permissions(权限表)
          \                                  /
           \                                /
            \(一对多)                       / (route 字段关联 CURD 权限)
             \                            /
             products, categories, users, admins (数据表都有一个字段 domain_id 标识区域)
```