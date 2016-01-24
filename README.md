1. right click on the project-root folder and select "Init Composer", download the `composer.phar` file

2. it will create a `composer.json` file. Add the following section to the file:

```json
"autoload": {
    "psr-4": {
      "ANPNews\\": "src/"
    }
  },
```

3. where `src/` is the folder where your namespace lives. So the project can find the files with the nameespace
`ANPNews` in the `src/` folder

4. type `php composer.phar install` to generate the autoload class

4. type `php composer.phar require smarty/smarty` in the terminal below to install Smarty