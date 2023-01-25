# laravel-starter
Laravel package to include starter configurations and files to accelerate project development


## Install
```
composer require gabriel89oliveira/laravel-starter --dev
```

## Publish desired part
You can publish only part of this package, according to your necessity

### Sidebar layout
Sidebar layout is a fancy layout with Nav and a Sidebar Menu. <br>
It will add to you Vue folder some files for main layout. <br>

```
php artisan vendor:publish --tag=laravel-sidebar-layout
```

In your app.js file, import ref

```diff
+   import { ref } from 'vue'
```

then update createApp function with the following

```diff
return createApp({ 
    render: () => h(App, props),
+   provide() {
+       return {
+           toggleSidebar: ref(true)
+       }
    }
})
```