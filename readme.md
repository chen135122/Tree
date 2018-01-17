### Admin

```php
                               fields_translate(字段翻译表)
                                 A
                                /
                               / (一对多)
                              /
                             /
                          fields(字段表!每次创建用户，当要往多对多表插入菜单)
                         /
                        /
                       / (多对多)
                      /
                     /
                users(用户表)  
               /   \
              /     \ 
     (多对多) /       \ (一对多)
            /         \
           /           V              (多对多)
    domain(区域表)      roles(角色表) ------> permissions(权限表)
          \                                  /
           \                                /
            \(一对多)                       / (route 字段关联 CURD 权限)
             V                            /
             products, categories, users, admins (数据表都有一个字段 domain_id 标识区域)
```