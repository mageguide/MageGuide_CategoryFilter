# MageGuide CategoryFilter

Tested on: 2.1+, 2.2+, 2.3+

## Description

  Easily filter and manage your products on Admin Product Grid using Category Information per Product.


### Functionalities

  - Adding Category Column on Product Grid
  - Adding Category Filter on Product Grid

### Installation

  Add the app folder with all the subfolders into the root folder of your Magento Application.

  Perform the following commands:

  * __Developer Mode__

```sh

    $ php bin/magento set:upg && php bin/magento c:c

```

  * __Production Mode__

```sh

    $ php bin/magento maintenance:enable
    $ php bin/magento setup:upgrade
    $ php bin/magento setup:di:compile
    $ php bin/magento setup:upgrade
    $ php bin/magento setup:static-content:deploy el_GR en_US #or any other space seperated language you need for your project
    $ php bin/magento maintenance:disable

```

### Usage

  Catalog > Products > Category Column/Filter: You can use this for sorting, mass actions and more.

### Screenshots

#### Product Grid Column
![Product Grid Column](/screenshots/product_grid_column.png)

#### Product Grid Filter
![Product Grid Filter](/screenshots/product_grid_filter.png)