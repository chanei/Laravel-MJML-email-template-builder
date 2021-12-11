# Laravel email builder

## Steps

- ```composer update```

- ```npm install```

- ```npx mix```

### Useful links

- <https://laravel-mix.com/extensions/mjml>

- <https://mjml.io/getting-started-onboard>

- <https://mjml.io/templates>

- <https://github.com/stidges/laravel-mix-mjml>

### How to build the email template

- Create .mjml file inside ```resources/mail``` folder

- once you are done, run ```npm mix``` to compile and build your mjml file to generate a blade file

- the blade file will be generated under ```resources/views/mail``` folder

- you can preview the generated file by pointing the route to the generated blade file.
