### Admin

```php
                users(用户表)
               /   \
              /     \ 
     (多对多) /       \ (一对多)
            /         \
           /  (一对多)  \              (多对多)
    guards(区域表) ----> roles(角色表) ------> permissions(权限表)
```