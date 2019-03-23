# xPand Portfolio
This application should represent my way as a (web) developer.

Hey, my name is Eric, I'm from germany, 20 years old and an enthusiastic developer/programmer.

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
* [Repositories](#repositories)
* [Used Packages](#used-packages)



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



# Repositories
Name                                                        | Description
------------------------------------------------------------|--------------------------------------------------
[Portfolio](https://github.com/xPand4B/Portfolio)           | This application should represent my way as a (web) developer.
[BKR-NaturZoo](https://github.com/xPand4B/BKR-NaturZoo)     | Eine Software, um einen Zoo zu verwalten.
[Bash-Scripts](https://github.com/xPand4B/Bash-Scripts)     | Usefull bash scripts.
[SQL-Aufgaben](https://github.com/xPand4B/SQL-Aufgaben)     | Eine kleine Web-Anwendung, um seine SQL Aufgaben an einer Stelle zu verwalten.
MiPa-Pool (Private until first release)                     | Eine Webanwendung, um Essensbestellungen in der Mittagspause zu verwalten und kommunizieren.
[Symfony-Blog](https://github.com/xPand4B/Symfony-Blog)     | Symfony Blog Test.
[Laravel-Blog](https://github.com/xPand4B/Laravel-Blog)     | Laravel Blog Test.
[SimpleMVC](https://github.com/xPand4B/SimpleMVC)           | In this project I'm trying to create a small and simple MVC based Web-App using PHP as well as composer packages.
[BKR-Verleih](https://github.com/xPand4B/BKR-Verleih)       | This is a school project, where we should make a website for a fictional video-library company.



# Used Packages
Name                | Version   | Link
--------------------|-----------|------------------------------------------
jenssegers/blade    | ^1.1      |   https://github.com/jenssegers/blade
vlucas/phpdotenv    | ^3.3      |   https://github.com/vlucas/phpdotenv
