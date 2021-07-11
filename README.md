# MVC

- **Github Repository**: <https://github.com/xPand4B/Portfolio>
- **ToDo**: <https://github.com/xPand4B/Portfolio/blob/master/todo.md>

# Table of Content
* [Available Helper Methods](#available-helper-methods)
    * [Get the application path](#get-the-application-path)
    * [Returns an image collection path](#returns-an-image-collection-path)
    * [Get config data](#get-config-data)
    * [Get the public application path](#get-the-public-application-path)
    * [Get the resource path](#get-the-resource-path)
    * [Get route to the given url](#get-route-to-the-given-url)
    * [Get the storage path](#get-the-storage-path)
    * [Returns a stylesheet include](#returns-a-stylesheet-include)
    * [Get translation for the given message](#get-translation-for-the-given-message)
    * [Get the current url](#get-the-current-url)
    * [Render View](#render-view)


# Available Helper Methods

### Get the application path
```
app_path(string $folder = null): string
```

### Returns an image collection path
```
collection_image(string $collectionName = null, string $fileName = null): ?string
```

### Get config data
```
config(string $argument = null)
```

### Get the public application path
```
public_path(): string
```

### Get the resource path
```
resource_path(string $resourceName = null): string
```

### Get route to the given url
```
route(string $name = null): ?string
```

### Get the storage path
```
storage_path(string $storageName = null): string
```

### Returns a stylesheet include
```
style(string $stylesheet)
```

### Get translation for the given message
```
trans(string $message): ?string
```

### Get the current url
```
url(string $name = null, string $lang = null): string
```

### Render view
```
view(string $view, array $data = [])
```
